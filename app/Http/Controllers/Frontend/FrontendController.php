<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AmbulanceService;
use App\Models\BookAppointment;
use App\Models\Cart;
use App\Models\DeliveryLocation;
use App\Models\Gallery;
use App\Models\Order;
use App\Models\Course;
use App\Models\OrderItem;
use App\Models\Page;
use App\Models\Product;
use App\Models\District;
use App\Models\Services;
use App\Models\Service;
use App\Models\ProductCategory;
use App\Models\ProductReview;
use App\Models\shippingMethod;
use App\Models\WebsiteParameter;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Alert;
use App\Models\BisesoggoCategory;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Destination;
use App\Models\Doctor;
use App\Models\FrontSlider;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationEmail;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('locale');
    }

    public function search(Request $request)
    {
        if ($request->action == 'location-data') 
        {
            $searchName = $request->location ?? 'Bristol';

            $response = Http::get('http://universities.hipolabs.com/search', [
                'name' => $searchName,
                'country' => 'United Kingdom'
            ]);

            $universities = $response->json();

            $perPage = 16;
            $currentPage = $request->get('page', 1);
            $offset = ($currentPage - 1) * $perPage;

            $paginatedUniversities = array_slice($universities, $offset, $perPage);

            $paginator = new LengthAwarePaginator(
                $paginatedUniversities,
                count($universities),
                $perPage,
                $currentPage,
                [
                    'path' => $request->url(),
                    'query' => $request->query()
                ]
            );

            return view('website.search', compact('searchName', 'paginator', 'universities'));
        }

        return view('website.search', [
            'searchName' => null,
            'paginator' => new LengthAwarePaginator([], 0, 16, 1),
            'universities' => []
        ]);
    }

    public function index()
    {
        $data['services'] = Service::where('status', 'published')
                            ->select('id', 'slug', 'title','icon_image' )
                            ->latest() // orders by created_at descending
                            ->get();
        $data['destinations'] = Destination::whereActive(true)->whereStatus('published')->select('title','feature_image','id','slug', 'category_id')->latest()->get();
        $data['blogs'] = BlogPost::with([
                                'category:id,name',
                                'addedBy:id,name'
                            ])
                            ->where('status', 'published')
                            ->select('id', 'slug', 'category_id', 'addedby_id', 'title', 'excerpt', 'feature_image', 'created_at')
                            ->latest() // orders by created_at descending
                            ->limit(3)
                            ->get();
        $data['videos'] = Gallery::where('file_type', 'video')
                        ->where('active', 1)
                        ->orderBy('priority', 'asc')
                        ->latest()
                        ->take(5)
                        ->get();

        $data['courses'] = Course::whereActive(true)
                        ->select('feature_image','title','slug')
                        ->get();
        $data['testimonials'] = Testimonial::whereActive(true)->select('name', 'company', 'address', 'text_en','rating', 'image')->get();
        $data['sliders'] = FrontSlider::whereActive(true)
            ->select('featured_image','title','link','btn_txt')
            ->get();

        return view('website.index', $data);  
    }


    public function about()
    {
        $wp = WebsiteParameter::first();
        return view('website.about', compact('wp'));  
    }

    public function courses()
    {
        $courses = Course::whereActive(true)->whereStatus('published')->latest()->paginate(12);
        return view('website.courses', compact('courses'));  
    }

    public function courseDetails($slug)
    {
        $course = Course::with([
            'addedBy:id,name'
        ])
        ->where('status', 'published')
        ->where('slug', $slug) // fetch by slug
        ->firstOrFail(['id',  'addedby_id', 'title', 'excerpt', 'description', 'feature_image', 'created_at', 'slug']);
        return view('website.courseDetails', compact('course'));  
    }
    
    public function blog()
    {
        $blogs = BlogPost::with([
            'category:id,name', 
            'addedBy:id,name'
        ])
        ->where('status', 'published')
        ->select('id', 'slug','category_id', 'addedby_id', 'title', 'excerpt', 'feature_image', 'created_at')
        ->paginate(20);

        $categories = BlogCategory::select('id', 'name')->orderBy('name')->get();
        $recentPosts = BlogPost::where('status', 'published')
            ->select('id', 'slug','title', 'feature_image', 'created_at')
            ->latest()
            ->take(3)
            ->get();

        return view('website.blog', compact('blogs', 'categories', 'recentPosts'));

    }

    public function blogDetails($slug)
    {
        $blog = BlogPost::with([
            'category:id,name', 
            'addedBy:id,name'
        ])
        ->where('status', 'published')
        ->where('slug', $slug) // fetch by slug
        ->firstOrFail(['id', 'category_id', 'addedby_id', 'title', 'excerpt', 'description', 'feature_image', 'created_at', 'slug']);

        return view('website.blogDetails', compact('blog'));  
    }

    

    public function event()
    {
        $wp = WebsiteParameter::first();
        return view('website.event', compact('wp'));  
    }

    public function eventDetails()
    {
        $wp = WebsiteParameter::first();
        return view('website.eventDetails', compact('wp'));  
    }
    

    public function scholarship()
    {
        $wp = WebsiteParameter::first();
        return view('website.scholarship', compact('wp'));  
    }


    public function contact()
    {
        return view('website.contact');
    }

    public function service()
    {
        $services = Service::whereActive(true)->whereStatus('published')->latest()->paginate(12);
        return view('website.service', compact('services'));
    }

    public function serviceDetails($slug)
    {
          $service = Service::with([
            'addedBy:id,name'
        ])
        ->where('status', 'published')
        ->where('slug', $slug) // fetch by slug
        ->firstOrFail(['id', 'addedby_id', 'title', 'excerpt', 'description', 'feature_image', 'created_at', 'slug']);
        return view('website.serviceDetails', compact('service'));  
    }

    public function destination()
    {
        $destinations = Destination::whereActive(true)->whereStatus('published')->latest()->paginate(12);
        return view('website.destination', compact('destinations'));  
    }
    
    public function destinationDetails($slug)
    {
        $destination = Destination::with([
            'category:id,name', 
            'addedBy:id,name'
        ])
        ->where('status', 'published')
        ->where('slug', $slug) // fetch by slug
        ->firstOrFail(['id', 'category_id', 'addedby_id', 'title', 'excerpt', 'description', 'feature_image', 'created_at', 'slug']);
        return view('website.destinationDetails', compact('destination'));  
    }

    public function login()
    {
        return view('website.login');
    }



    public function page($slug)
    {
        $data['page'] = Page::whereActive('slug', $slug)->first();
        return view('frontend.home.page_content', $data);
    }

    public function websiteCompliance()
    {
      
        return view("frontend.home.websiteCompliance");
    }



    public function doctorDashboard(){
        $data['doctor'] = auth()->user()->doctor;
        return view('frontend.home.doctor-dashbord',$data);
    }


    public function profile(){
        return view('frontend.home.profile');
    }

    public function oldPassword(Request $request){
        $password = auth()->user()->password;
        if(Hash::check($request->old_pwd,$password)){
           return response()->json([
                'success' => true,
           ]);
        }else{
          return response()->json([
             'success' => false,
          ]);
        }
    }



    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);
         $old_password = auth()->user()->password;
         if(Hash::check($request->old_password, $old_password)){
            if(!Hash::check($request->new_password, $old_password)){
              if($request->new_password == $request->confirm_password){
                 $user = User::find(Auth::id());
                 $user->password = Hash::make($request->new_password);
                 $user->password_temp = null;
                 $user->save();
                 return redirect()->back();
                 Alert::error('success', 'Password Change Successfully!');
                 return redirect()->back();
              }else{
                Alert::error('Error', 'New password and Confirm doed not match!');
                return redirect()->back();
              }

            }else{
                Alert::error('Error', 'New password and Current password are same');
                return redirect()->back();
            }

         }else{
            Alert::error('Error','Current password is not match');
            return redirect()->back();
         }
    }


    public function updateProfile(Request $request){
        $user = User::find(Auth::id());
        if($request->hasFile('image')){
            if ($user->image) {
                Storage::delete('public/user_images/'.$user->image);
            }
            $image = $request->file('image');
            $image_ex =  $image->getClientOriginalExtension();
            $file_path = date('ymdhis').'.'.$image_ex;
            $image->storeAs('user_images', $file_path,'public');
        }else{
            $file_path =  $user->image;
        }

        $user->image  =  $file_path;
        $user->save();
        Alert::Success('Success','Profile Update successfuly');
        return redirect()->back();
    }

   public function selectGetDoctor(Request $request){

      $hospital = Hospital::find($request->hospital_id);
      $doctors = $hospital->doctors()->get();
      return response()->json($doctors);
   }



    public function ambulanceProviderList(){
        $data['ambulances'] = AmbulanceService::whereActive(true)->get();
        return view('frontend.home.ambulanceProviderList',$data);
    }

    public function charity()
    {
        return view('frontend.home.charity');
    }
   

    public function qurbaniOccation()
    {
        $data = null;
        return view('website.qurbaniOccation');
        // $data['doctors'] =  Doctor::whereActive(true)->get();
        // $data['departments'] =  BisesoggoCategory::whereActive(true)->get();
        // return view('frontend.home.doctorList',$data);
    }

    public function qurbaniRegular()
    {
        $data = null;
        return view('website.qurbaniRegular');
        // $data['doctors'] =  Doctor::whereActive(true)->get();
        // $data['departments'] =  BisesoggoCategory::whereActive(true)->get();
        // return view('frontend.home.doctorList',$data);
    }

    public function doctorDetails($id){
        $data['doctor'] = $doctor =  Doctor::whereActive(true)->find($id);
        $data['department'] = $department = $doctor->department;
        $data['doctors'] =  Doctor::whereActive(true)->where('department_id',$department->id)->take(10)->get();
        return view('frontend.home.doctorDetails',$data);
    }


    public function doctorAppointment(){
        $data['doctors'] = Doctor::whereActive(true)->paginate(12);
        $data['departments'] = BisesoggoCategory::whereActive(true)->get();
        return view('frontend.home.doctorAppointment',$data);
    }



    public function hospitalList()
    {
        $data['hospitals'] = Hospital::whereActive(true)->paginate(12); 
        return view('frontend.home.hospitalList', $data);
    }

    public function diagnostic()
    {
        return view('frontend.home.diagnostic');
    }

    public function hospitalDetails($id)
    {
        $data['hospital'] = $hospital = Hospital::whereActive(true)->findOrFail($id);
        $data['doctors'] = $hospital->doctors()->whereActive(true)->paginate(12);

        return view('frontend.home.hospitalDetails', $data);
    }


    public function departmentList()
    {
        $data['departments'] = BisesoggoCategory::whereActive(true)->paginate(12); 
        return view('frontend.home.departmentList', $data);
    }


    // public function galleries()
    // {
    //     $path = public_path('frontend/assets/img/gallery');
    //     $files = \File::files($path);
    //     $images = [];
    //     foreach ($files as $file) {
    //         $images[] = $file->getFilename();
    //     }
    //     return view('frontend.home.gallery', compact('images'));
    // }

    public function imageGalleries()
    {
        $allGalleries = Gallery::where('active', 1)->orderBy('priority', 'asc')->get();
        $images = $allGalleries->where('file_type', 'image');
        return view('website.imagegallery', compact('images'));
    }

    public function videoGalleries()
    {
        $allGalleries = Gallery::where('active', 1)->orderBy('priority', 'asc')->get();
        $videos = $allGalleries->where('file_type', 'video');
        return view('website.videogallery', compact('videos'));
    }



    public function languageChange(Request $request)
    {
        $locale = $request->lang;

        if (in_array($locale, config('app.locales')))
        {
            // $cookie = cookie('locale', $locale, 43200)

            $request->session()->forget(['locale']);
            $request->session()->put(['locale'=>$locale]);
            // return redirect()->back()->withCookie($cookie);
        }

        return back();

    }



    public function news()
    {
        $data['news'] = BlogPost::whereActive(true)->whereStatus('published')->latest()->paginate(12);
        $data['cats'] = BlogCategory::whereActive(true)->orderBy('name')->get();
        return view('frontend.home.news', $data);
    }


    public function singleNews($id)
    {

        $news = BlogPost::where('id', $id)->firstOrFail();
        if (!$news) {
            abort(404);
        }
        $news->increment('view_count');

        $data['relatedPosts'] = BlogPost::where('category_id', $news->category_id)->get();
        $data['news'] = $news;

        $data['popular_posts'] = BlogPost::orderBy('view_count', 'DESC')->whereActive(true)->whereStatus('published')->take(6)->get();

        return view('frontend.home.singleNews', $data);
    }



    public function supportpolicy()
    {
        $page =  Page::where('type', 'support_policy')->first();
        return view("frontend.home.policies.supportpolicy", compact('page'));
    }

    public function terms()
    {
        $page =  Page::where('type', 'terms_conditions')->first();
        return view("frontend.home.policies.terms", compact('page'));
    }

    public function privacypolicy()
    {
        $page =  Page::where('type', 'privacy_policy')->first();
        return view("frontend.home.privacypolicy", compact('page'));
    }

    public function helpcenter()
    {
        $page =  Page::where('type', 'help_center')->first();
        return view("frontend.home.helpcenter", compact('page'));
    }

    public function contactus()
    {
        $page =  Page::where('type', 'contact_us')->first();
        return view("frontend.home.policies.contactus", compact('page'));
    }

    public function aboutus()
    {
        $page =  Page::where('type', 'about_us')->first();
        return view("frontend.home.aboutus", compact('page'));
    }



    public function storeAppointment(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'mobile'           => 'required|string|max:20',
            'department_id'    => 'required|integer',
            'doctor_id'        => 'required|integer',
            'appointment_date' => 'required|date',
        ]);

        try {
            // ✅ Create new appointment
            $appointment = new BookAppointment();
            $appointment->name             = $request->name;
            $appointment->email            = $request->email;
            $appointment->mobile           = $request->mobile;
            $appointment->department_id    = $request->department_id;
            $appointment->doctor_id        = $request->doctor_id;
            $appointment->appointment_date = $request->appointment_date;
            $appointment->message          = $request->message ?? null;
            $appointment->addedby_id       = Auth::id();
            $appointment->save();

            // ✅ Success message
            // toast('Appointment Confirmed, Your appointment has been successfully booked.','success');
            Alert::success('Appointment Confirmed', 'Your appointment has been successfully booked.');
            return redirect()->back();

        } catch (\Exception $e) {
            // ✅ Error message
            Alert::error('Something went wrong', 'We could not process your request. Please try again later.');
            return redirect()->back()->withInput();
        }
    }


public function shasthoseba(Request $request)
{
    $query = Product::whereActive(true);

    // Sorting
    if ($request->get('sort') == 1) {
        $query->latest();
    } elseif ($request->get('sort') == 2) {
        $query->oldest();
    } elseif ($request->get('sort') == 3) {
        $query->orderBy('final_price', 'desc');
    } elseif ($request->get('sort') == 4) {
        $query->orderBy('final_price', 'asc');
    } else {
        $query->latest();
    }

    $products = $query->paginate(12)->appends($request->all());

    $categories = ProductCategory::whereActive(true)->latest()->get();
    $total_products = Product::whereActive(true)->count();
    $subcategories = ProductCategory::whereNull('parent_id')
        ->where('active', 1)
        ->orderBy('name_en')
        ->get();

    // Get all root categories for sidebar
    $allRootCategories = ProductCategory::whereNull('parent_id')
        ->where('active', 1)
        ->orderBy('name_en')
        ->get();

    return view("frontend.home.shasthoseba", compact(
        'products', 
        'categories', 
        'total_products', 
        'subcategories',
        'allRootCategories' // Add this
    ));
}


    // product categories 02 
    // public function productCategory(Request $request, $slug)
    // {
    //     $category = ProductCategory::where('slug', $slug)
    //         ->whereActive(true)
    //         ->firstOrFail();

    //     $query = Product::whereHas('categories', function ($q) use ($slug) {
    //         $q->where('slug', $slug);
    //     })->whereActive(true);

    //     // Sorting
    //     if ($request->get('sort') == 1) {
    //         $query->latest();
    //     } elseif ($request->get('sort') == 2) {
    //         $query->oldest();
    //     } elseif ($request->get('sort') == 3) {
    //         $query->orderBy('final_price', 'desc');
    //     } elseif ($request->get('sort') == 4) {
    //         $query->orderBy('final_price', 'asc');
    //     } else {
    //         $query->latest();
    //     }

    //     $products = $query->paginate(12)->appends($request->all());

    //     $categories = ProductCategory::whereActive(true)->latest()->get();

    //     return view("frontend.home.shasthoseba", compact('products', 'categories', 'category'));
    // }



    // product categories 03 - 29102025
    // public function productCategory(Request $request, $slug = null)
    // {
    //     $category = null;
    //     $categories = collect();
    //     $subcategories = collect();

    //     // Base query for active products
    //     $query = Product::where('active', 1);

    //     if ($slug && $slug !== 'all') {
    //         // Find the selected category
    //         $category = ProductCategory::where('slug', $slug)
    //             ->where('active', 1)
    //             ->first();

    //         if ($category) {
    //             // Case 1: parent category → show its subcategories
    //             if (is_null($category->parent_id)) {
    //                 $subcategories = ProductCategory::where('parent_id', $category->id)
    //                     ->where('active', 1)
    //                     ->orderBy('name_en')
    //                     ->get();
    //             } else {
    //                 // Case 2: subcategory → show siblings
    //                 $subcategories = ProductCategory::where('parent_id', $category->parent_id)
    //                     ->where('active', 1)
    //                     ->orderBy('name_en')
    //                     ->get();
    //             }

    //             // IDs for filtering
    //             $subcategoryIds = $subcategories->pluck('id')->toArray();

    //             // Filter products by category and its subcategories
    //             $query->whereHas('categories', function ($q) use ($category, $subcategoryIds) {
    //                 $q->where('product_categories.id', $category->id)
    //                 ->orWhereIn('product_categories.id', $subcategoryIds);
    //             });
    //         }
    //     } else {
    //         // For "All", show all root-level categories
    //         $categories = ProductCategory::whereNull('parent_id')
    //             ->where('active', 1)
    //             ->orderBy('name_en')
    //             ->get();
    //     }

    //     // Get all root categories for sidebar (always needed)
    //     $allRootCategories = ProductCategory::whereNull('parent_id')
    //         ->where('active', 1)
    //         ->orderBy('name_en')
    //         ->get();

    //     // Sorting
    //     switch ($request->get('sort')) {
    //         case 2:
    //             $query->oldest();
    //             break;
    //         case 3:
    //             $query->orderBy('final_price', 'desc');
    //             break;
    //         case 4:
    //             $query->orderBy('final_price', 'asc');
    //             break;
    //         default:
    //             $query->latest();
    //             break;
    //     }

    //     // Pagination
    //     $products = $query->paginate(12)->appends($request->all());

    //     // Count total
    //     $total_products = $query->count();

    //     return view('frontend.home.shasthoseba', compact(
    //         'products',
    //         'category',
    //         'categories',
    //         'subcategories',
    //         'total_products',
    //         'allRootCategories',
    //         'slug' // Add this to pass slug to view
    //     ));
    // }


    public function productCategory(Request $request, $slug = null)
    {
        $category = null;
        $categories = collect();
        $subcategories = collect();

        $query = Product::where('active', 1);

        if ($slug && $slug !== 'all') {
            $category = ProductCategory::where('slug', $slug)
                ->where('active', 1)
                ->first();

            if ($category) {
                if (is_null($category->parent_id)) {
                    // 🟢 Case 1: Parent category — show subcategories
                    $subcategories = ProductCategory::where('parent_id', $category->id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();

                    $subcategoryIds = $subcategories->pluck('id')->toArray();

                    // Include products of parent + all its subcategories
                    $query->whereHas('categories', function ($q) use ($category, $subcategoryIds) {
                        $q->where('product_categories.id', $category->id)
                        ->orWhereIn('product_categories.id', $subcategoryIds);
                    });
                } else {
                    // 🟡 Case 2: Subcategory — only show products in that subcategory
                    $subcategories = ProductCategory::where('parent_id', $category->parent_id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();

                    $query->whereHas('categories', function ($q) use ($category) {
                        $q->where('product_categories.id', $category->id);
                    });
                }
            }
        } else {
            // 🟣 For "All" — show all root categories
            $categories = ProductCategory::whereNull('parent_id')
                ->where('active', 1)
                ->orderBy('name_en')
                ->get();
        }

        // Root categories for sidebar
        $allRootCategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->orderBy('name_en')
            ->get();

        // Sorting
        switch ($request->get('sort')) {
            case 2:
                $query->oldest();
                break;
            case 3:
                $query->orderBy('final_price', 'desc');
                break;
            case 4:
                $query->orderBy('final_price', 'asc');
                break;
            default:
                $query->latest();
                break;
        }

        // Pagination and count
        $products = $query->paginate(12)->appends($request->all());
        $total_products = $query->count();

        return view('frontend.home.shasthoseba', compact(
            'products',
            'category',
            'categories',
            'subcategories',
            'total_products',
            'allRootCategories',
            'slug'
        ));
    }


    // product categories 01 

    // public function productCategory(Request $request, $slug = null)
    // {
    //     $category = null;
    //     $subcategories = collect();

    //     // Default query for all active products
    //     $query = Product::where('active', 1);

    //     if ($slug && $slug !== 'all') {
    //         $category = ProductCategory::where('slug', $slug)
    //             ->where('active', 1)
    //             ->first();

    //         if ($category) {
    //             // Get subcategories
    //             $subcategories = ProductCategory::where('parent_id', $category->id)
    //                 ->where('active', 1)
    //                 ->orderBy('name_en')
    //                 ->get();

    //             $subcategoryIds = $subcategories->pluck('id')->toArray();

    //             // Filter products by category or subcategories
    //             $query->whereHas('categories', function ($q) use ($category, $subcategoryIds) {
    //                 $q->where('product_categories.id', $category->id)
    //                 ->orWhereIn('product_categories.id', $subcategoryIds);
    //             });
    //         }
    //     } else {
    //         // For "All", show all root-level categories
    //         $subcategories = ProductCategory::whereNull('parent_id')
    //             ->where('active', 1)
    //             ->orderBy('name_en')
    //             ->get();
    //     }

    //     // Apply sorting
    //     switch ($request->get('sort')) {
    //         case 2:
    //             $query->oldest();
    //             break;
    //         case 3:
    //             $query->orderBy('final_price', 'desc');
    //             break;
    //         case 4:
    //             $query->orderBy('final_price', 'asc');
    //             break;
    //         default:
    //             $query->latest();
    //             break;
    //     }

    //     // Pagination
    //     $products = $query->paginate(12)->appends($request->all());

    //     // Total product count for sidebar
    //     if ($category) {
    //         $total_products = $query->count(); // Count products in this category
    //     } else {
    //         $total_products = Product::where('active', 1)->count(); // All products
    //     }
    //     return view('frontend.home.shasthoseba', compact(
    //         'products',
    //         'category',
    //         'subcategories',
    //         'total_products'
    //     ));
    // }





    public function productDetails(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->with('categories', 'reviews', 'media')->first();

        if(!$product){
            abort(404);
        }

        $relatedProducts = Product::whereHas('categories', function($q) use ($product) {
                                $q->whereIn('product_categories.id', $product->categories->pluck('id'));
                            })
                            ->where('id', '!=', $product->id)
                            ->take(12)
                            ->get();

        return view('frontend.home.productDetails', compact('product','relatedProducts'));
    }


 


    /**
     * Add product to cart (session/user-wise)
     */
    public function addToCart(Request $request)
    {
        // if (!Session::has('session_id')) {
        //     Session::put('session_id', session()->getId());
        // }
        // $session_id = Session::get('session_id');

        $request->validate([
            'product' => 'required|integer|exists:products,id',
            'qty'     => 'required|integer|min:1'
        ]);

        $session_id = Session::get('session_id', function () {
            $id = Session::getId();
            Session::put('session_id', $id);
            return $id;
        });

        $user_id   = Auth::id() ?? 0;
        $productId = $request->product;
        $qty = $request->qty ?? 1;

        $product = Cache::remember("product_{$productId}", now()->addMinutes(10), function () use ($productId) {
            return Product::find($productId);
        });

        if (!$product) {
            abort(404, 'Product not found');
        }

        $cart = Cart::firstOrNew([
            'product_id' => $product->id,
            'session_id' => $session_id,
            'user_id'    => $user_id,
        ]);

        $cart->quantity   = $cart->exists ? $cart->quantity + $qty : $qty;
        $cart->addedby_id = $user_id;
        $cart->save();

        if ($request->ajax()) {
            return response()->json([
                'status'          => true,
                'message'         => 'Item added to cart!',
                'productCartItem' => view('frontend.home.includes.productCartItem', compact('cart', 'product'))->render(),
                'cartCount'       => Cart::cartCount(),
                'cartItemsCount'  => Cart::CartItemsCount(),
                'cartTotal'       => Cart::totalCartPrice(),
            ]);
        }

        return response()->noContent();
    }



    public function addToCart2(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'qty'        => 'required|integer|min:1'
        ]);

        $session_id = Session::get('session_id', function () {
            $id = Session::getId();
            Session::put('session_id', $id);
            return $id;
        });

        $user_id   = Auth::id() ?? 0;
        $productId = $request->product_id;

        // Cache product for 10 minutes
        $product = Cache::remember("product_{$productId}", now()->addMinutes(10), function () use ($productId) {
            return Product::find($productId);
        });

        if (!$product) {
            abort(404, 'Product not found');
        }

        // Find or create cart item
        $cart = Cart::firstOrNew([
            'product_id' => $product->id,
            'session_id' => $session_id,
            'user_id'    => $user_id,
        ]);

        // Update quantity
        $cart->quantity   = $cart->exists ? $cart->quantity + $request->qty : $request->qty;
        $cart->addedby_id = $user_id;
        $cart->save();


        return redirect()->back()->with([
            'success' => '(' . $product->name_en . ') added to cart successfully!',
        ]);
    }




    /**
     * Update cart item quantity
     */
    public function cartUpdateQty(Request $request)
    {
        
        $request->validate([
            'cart'    => 'required|integer|exists:carts,id',
            'new_qty' => 'required|integer|min:0'
        ]);

        $cart = Cart::findOrFail($request->cart);

        if ($request->new_qty == 0) {
            $cart->delete();
        } else {
            $cart->update(['quantity' => $request->new_qty]);
        }

        if ($request->ajax()) {
            return response()->json([
                'status'        => true,
                'message'       => 'Cart updated successfully!',
                'product_id'    => $cart->product_id ?? null,
                'add_to_cart_url' => route('addToCart'),
                'cartCount'       => Cart::cartCount(),
                'cartItemsCount'  => Cart::CartItemsCount(),
                'cartTotal'       => Cart::totalCartPrice(),
                'discount'        => Cart::totalDiscountAmount(),
                'payable'         => Cart::totalCartPrice() - Cart::totalDiscountAmount(),
            ]);
        }

        return response()->noContent();
    }

    /**
     * Remove a cart item
     */
    public function cartRemoveItem(Cart $cart)
    {
        // Security check
        if (Auth::check() && $cart->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        } elseif (!Auth::check() && $cart->session_id !== session('session_id')) {
            abort(403, 'Unauthorized action.');
        }

        $cartId    = $cart->id;
        $productId = $cart->product_id;

        $cart->delete();

        return response()->json([
            'status'         => true,
            'message'        => 'Item removed from cart!',
            'cart_id'        => $cartId,
            'product_id'     => $productId,
            'add_to_cart_url'=> route('addToCart'),
            'cartCount'      => Cart::cartCount(),
            'cartTotal'      => Cart::totalCartPrice(),
            'discount'       => Cart::totalDiscountAmount(),
            'payable'        => Cart::totalCartPrice() - Cart::totalDiscountAmount(),
        ]);
    }


    public function checkout(Request $request)
    {

        $sessionId = session('session_id'); 
        $cartItems = Cart::with('product')
            ->when(auth()->check(), fn($q) => $q->where('user_id', auth()->id()))
            ->when(!auth()->check(), fn($q) => $q->where('session_id', $sessionId))
            ->get();

        $shippingMethods = shippingMethod::get();

        return view('frontend.home.checkout', compact( 'cartItems', 'shippingMethods'));
    }

    public function new_checkout(Request $request)
    {

        $sessionId = session('session_id'); 
        $cartItems = Cart::with('product')
            ->when(auth()->check(), fn($q) => $q->where('user_id', auth()->id()))
            ->when(!auth()->check(), fn($q) => $q->where('session_id', $sessionId))
            ->get();

        $location = null;
        if(Auth::check()){
            $location = Auth::user()->locations()->first();
        }
        $shippingMethods = shippingMethod::get();
        $districts = District::all();
        return view('frontend.home.new_checkout', compact( 'cartItems', 'shippingMethods','districts', 'location'));
    }


    
    public function storeDeliveryLocation(Request $request)
    {
       
        //  Validation
        $request->validate([
            'name'          => 'required',
            'mobile'        => 'required',
            'email'         => 'nullable|email',
            'address_title' => 'required',
        
        ]);

        // Check if delivery location exists for the user
        $location = DeliveryLocation::where('user_id', Auth::id())->first();

        // If exists, update; otherwise create new
        if (!$location) {
            $location = new DeliveryLocation();
            $location->user_id = Auth::id();
        }

        // Set common fields
        $location->name = $request->name;
        $location->email = $request->email;
        $location->mobile = $request->mobile;
        $location->address_title = $request->address_title;
        $location->save();

        return redirect()->back()->with([
            'success' => 'Delivery location saved successfully!',
        ]);
    }


    public function codOrderStore(Request $request)
    {
        $ws = WebsiteParameter::first();
        $cartItems = Cart::getCartItems();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $subtotal = $this->calculateSubtotal($cartItems);
        $deliveryCost = $ws->shipping_cahrge ?? $request->shipping_price;
        $grandTotal = $subtotal + $deliveryCost;
        $paymentMethod = $request->input('payment_method');
        $orderNote = $request->order_note ?? null;

        if (Auth::check()) {
            $user = auth()->user();
            if ($request->has('billing_address')) {
                DeliveryLocation::updateOrCreate(
                    ['user_id' => $user->id],
                    [
                        'address_title' => $request->input('billing_address'),
                        'name' => $request->input('name'),
                        'mobile' => $request->input('mobile'),
                        // 'email' => $request->input('email'),
                        // 'district_id' => $request->input('billing_district_id'),
                        // 'upazila_id' => $request->input('billing_thana_id'),
                    ]
                );
            }

            $location = $this->getUserLocation($user);

            if (!$location) {
                return redirect()->back()->with('error', 'No delivery location found.');
            }

            $order = $this->createOrder($user, $location, $deliveryCost, $paymentMethod, $subtotal, $deliveryCost, $grandTotal, $orderNote);

            $this->storeOrderItems($order, $cartItems, $user->id);
            Cart::where('user_id', $user->id)->delete();

            // Mail::to('admin@93shasthoseba.com')->send(new OrderConfirmationEmail($order));

            return redirect()->route('user.dashboard')->with('success', 'Order placed successfully!');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:20',
                'billing_address' => 'required|string|max:1000',
                // 'email' => 'required|email|max:255',
                // 'billing_district_id' => 'required',
                // 'billing_thana_id' => 'required',
            ]);

            $location = new \stdClass();
            $location->name = $request->input('name');
            $location->email = $request->input('email');
            $location->mobile = $request->input('mobile');
            $location->address_title = $request->input('billing_address');
            // $location->district_id = $request->input('billing_district_id');
            // $location->upazila_id = $request->input('billing_thana_id');

            $order = $this->createOrder(null, $location, $deliveryCost, $paymentMethod, $subtotal, $deliveryCost, $grandTotal, $orderNote);

            $this->storeOrderItems($order, $cartItems, null);
            Cart::where('session_id', session('session_id'))->delete();

            // Mail::to($location->email)->send(new OrderConfirmationEmail($order));

            return redirect()->route('shop.shasthoseba')->with('success', 'Order placed successfully!');
        }
    }



    private function getUserLocation($user)
    {
        if ($user) {
            return $user->locations()->first();
        }
        return null;
    }


    private function calculateSubtotal($cartItems)
    {
        return $cartItems->sum(function ($cart) {
            return $cart->product->final_price * $cart->quantity;
        });
    }

    private function createOrder($user, $location, $area, $paymentMethod, $subtotal, $deliveryCost, $grandTotal, $orderNote)
    {
        return Order::create([
            'user_id'        => $user ? $user->id : null,
            'name'           => $location->name,
            'email'          => $location->email,
            'address_title'  => $location->address_title,
            // 'mobile'         => $location->mobile,
            // 'district_id'  => $location->district_id,
            // 'upazila_id'  => $location->upazila_id,
            'subtotal'       => $subtotal,
            'grand_total'    => $grandTotal,
            'payment_method' => $paymentMethod,
            'payment_status' => 'unpaid',
            'payment_gateway'=> $paymentMethod,
            'delivery_cost'  => $deliveryCost,
            'pending_at'     => now(),
            'addedby_id'     => $user ? $user->id : null,
            'order_note'     => $orderNote,
        ]);
    }

    private function storeOrderItems($order, $cartItems, $userId)
    {
        foreach ($cartItems as $cart) {
            OrderItem::create([
                'order_id'      => $order->id,
                'user_id'       => $userId,
                'product_id'    => $cart->product_id,
                'product_name'  => $cart->product->name_en,
                'product_price' => $cart->product->final_price,
                'quantity'      => $cart->quantity,
                'total_cost'    => $cart->product->final_price * $cart->quantity,
                'addedby_id'    => $userId,
            ]);
        }
    }


    public function reviewsStore(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'required|string|max:1000',
        ]);

        ProductReview::create([
            'user_id'    => Auth::id(),
            'product_id' => $request->product_id,
            'rating'     => $request->rating,
            'comment'    => $request->comment,
        ]);

        return back()->with('success', 'Review submitted successfully!');
    }


    public function orderPrint(Order $order)
    {
        $items = $order->orderItems()->get();

        return view('user.order.orderPrint', compact('order', 'items'));
    }


     public function orderChalan(Order $order)
    {
        $items = $order->orderItems()->get();

        return view('user.order.orderChalan', compact('order', 'items'));
    }

    public function testidcard(){
          $user = User::findOrFail(136);
          return view('idcard',compact('user'));
    }

    public function getShippingMethods($upazila_id)
    {
        $upazila = Upazila::find($upazila_id);
        $area = $upazila->name;
        $shippingMethods = shippingMethod::where('name', $area)->get();
        return response()->json($shippingMethods);
    }

    public function searchUniversities(Request $request)
    {
        $searchTerm = $request->get('q');

        if (empty($searchTerm)) {
            return response()->json([]);
        }

        $response = Http::get('http://universities.hipolabs.com/search', [
            'name' => $searchTerm,
            'country' => 'United Kingdom'
        ]);

        $universities = $response->json();

        // Limit to 5 results
        $suggestions = array_slice($universities, 0, 5);

        return response()->json($suggestions);
    }
}
