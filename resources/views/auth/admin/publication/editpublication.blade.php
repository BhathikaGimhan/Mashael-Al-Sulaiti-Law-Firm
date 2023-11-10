@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Edite Publication ')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Edite Publication</h1>
        <div class="">
            <a href="{{ route('admin.publications.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go
                Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="{{ route('admin.publications.update', $publication->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group">
                        <label for="publication_title">Publication Title</label>
                        <input type="text" class="form-control @error('publication_title') is-invalid @enderror"
                            id="publication_title" name="publication_title" placeholder="Enter publication title"
                            value="{{ $publication->publication_title }}">
                        @error('publication_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lang_type">{{ __('Language') }}</label>
                            <select id="lang_type" class="form-control @error('lang_type') is-invalid @enderror"
                                name="lang_type" required>
                                <option value="en"
                                    {{ old('lang_type', $publication->lang_type) === 'en' ? 'selected' : '' }}>
                                    {{ __('English') }}</option>
                                <option value="fr"
                                    {{ old('lang_type', $publication->lang_type) === 'fr' ? 'selected' : '' }}>
                                    {{ __('French') }}</option>
                                <option value="ar"
                                    {{ old('lang_type', $publication->lang_type) === 'ar' ? 'selected' : '' }}>
                                    {{ __('Arabic') }}</option>
                            </select>
                            @error('lang_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="my-3">
                            <div id="image-holder" class="my-3" style="max-width:120px;">
                                @if ($publication->featured_image_public_path)
                                    <img src="{{ asset($publication->featured_image_public_path) }}" alt="">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="featured_image_public_path">Featured
                                    Image</label>
                                <div class="input-group mt-2">
                                    <span class="input-group-btn">
                                        <a id="image-uploader" name="featured_image_public_path" data-input="thumbnail"
                                            data-preview="image-holder" class="btn btn-primary">
                                            <i class="far fa-image"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail"
                                        class="form-control @error('featured_image_public_path') is-invalid @enderror"
                                        type="text" name="featured_image_public_path"
                                        value="{{ $publication->featured_image_public_path ?? old('featured_image_public_path') }}">
                                    @error('featured_image_public_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="file-thumbnail" type="hidden" class="form-control" type="text"
                        name="publication_file_path" value="{{ $publication->publication_file_path ?? 'none' }}">
                    {{-- <div class="col-12">
                        <div class="mb-4">
                            <img id="file-holder" class="my-2" style="max-height:120px;">
                            <div class="form-group">
                                <label for="publication_file_path">{{ __('Publication File') }} <span class="text-danger">(
                                        Please only upload PDFs here.* )</span></label>
                                <div class="input-group mt-2">
                                    <span class="input-group-btn">
                                        <a id="file-uploader"
                                            data-input="file-thumbnail @error('publication_file_path') is-invalid @enderror"
                                            data-preview="file-holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>

                                    @error('publication_file_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group mt-2">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description" placeholder="Enter description">{{ old('description') ?? $publication->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="content">Content</label>
                        <textarea rows="5" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                            placeholder="Enter content">{{ old('content') ?? $publication->content }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="div">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-success mt-2 mb-2 mb-sm-0" type="submit">Update Publication</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
@section('footer_scripts')
    <script>
        var route_prefix = "/filemanager";

        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}

        $('#image-uploader').filemanager('image', {
            prefix: route_prefix
        });

        $('#file-uploader').filemanager('file', {
            prefix: route_prefix
        });
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('content', options);
    </script>

@endsection
