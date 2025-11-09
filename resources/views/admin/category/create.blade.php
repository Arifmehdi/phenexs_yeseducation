@extends('admin.master')
@section('title',"Admin Dashboard | Create Category")

@section('body')
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<section class="pt-3">
    <div class="card">
        <div class="card-header bg-info">
            <div class="card-title">Create Category </div>
        </div>
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body w3-light-gray">
                <div class="row py-2">
                    <div class="col-12 col-md-12 m-auto card p-5">
                        <div class="form-group">
                            <label for="name_en">Category Name </label>
                            <input type="text" class="form-control @error('name_en') is_invalid @enderror" id=""
                                placeholder="Category Name " name="name_en" value="{{ old('name_en') }}">
                            @error('name_en')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Excerpt</label>
                            <textarea name="excerpt_en" id="" cols="30" rows="3" class="form-control"
                                placeholder="Excerpt">{{old('excerpt_en')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description_en" id="summernote" class="form-control"
                                rows="5">{{old('description_en')}}</textarea>
                        </div>




                        <div class="form-group">
                            <label for="doctor_image">Image</label>
                            <input type="file" name="doctor_image" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-right">
                <input type="submit" class="btn btn-success mt-2">
            </div>
        </form>

    </div>
</section>
@endsection

@push('js')
<script>
$(document).ready(function() {
    $('.select2').select2({});
});
</script>
@endpush