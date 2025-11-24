<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class FrontendApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->action == 'location-data') 
        {
            // Use the requested location or default to Bristol
            $searchName = $request->location ?? 'Bristol'; 

            // API call to search universities
            $response = Http::get('http://universities.hipolabs.com/search', [
                'name' => $searchName,
                'country' => 'United Kingdom'
            ]);

            // Convert JSON to array
            $universities = $response->json();

            // Paginate the results (16 per page)
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

            // If it's an AJAX request, return JSON
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'status' => true,
                    'search' => $searchName,
                    'data' => $paginatedUniversities,
                    'total' => count($universities),
                    'per_page' => $perPage,
                    'current_page' => $currentPage,
                    'last_page' => ceil(count($universities) / $perPage)
                ]);
            }

            // For normal requests, return the view
            return view('website.search', compact('searchName', 'paginator', 'universities'));
        } 
        else 
        {
            // Default page load without search
            $universities = [];
            $searchName = null;
            $paginator = new LengthAwarePaginator([], 0, 16, 1);
            
            return view('website.search', compact('searchName', 'paginator', 'universities'));
        }
    }
}