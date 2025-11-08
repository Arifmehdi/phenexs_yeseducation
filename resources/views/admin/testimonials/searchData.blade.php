<table class="table table-striped table-bordered table-hover table-md">
    <thead class="w3-small text-muted thead-light">
        <tr>
            <th scope="col" width="30">SL</th>
            <th scope="col" width="60">Action</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Testimomial Message</th>
            <th scope="col">Rating</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = (($testimonials->currentPage() - 1) * $testimonials->perPage() + 1); ?>
        @forelse ($testimonials as $key => $testimonial)
            <tr>
                <td scope="row">{{ ++$key }}</td>
                <td scope="row">
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                @if ($testimonial->image)
                    <img src="{{ asset('storage/testimonial/' . $testimonial->image) }}" 
                        alt="{{ $testimonial->name }}" 
                        width="50">
                @else
                    N/A
                @endif

                </td>
                <td>{{ Str::limit($testimonial->name, 50) }}</td>
                <td>{{ Str::limit($testimonial->company, 30) }}</td>
                <td>{!! Str::limit(strip_tags($testimonial->text_en), 30) !!}</td>
                <td>
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $testimonial->rating)
                            &#9733; <!-- filled star -->
                        @else
                            &#9734; <!-- empty star -->
                        @endif
                    @endfor
                </td>

                <td>        
                    @if ($testimonial->active)
                        <span class="badge badge-success">Actived</span>
                    @else
                        <span class="badge badge-danger">Inactived</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-danger h5 text-center">No Testimonial Found</td>
            </tr>
        @endforelse
    </tbody>
</table>