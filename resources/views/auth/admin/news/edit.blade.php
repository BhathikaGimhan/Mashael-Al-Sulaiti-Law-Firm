@extends('layouts.adminlayout.main')
@section('title', 'Mashael Alsulaiti Law Firm | Update News')
@section('header_scripts')
    <script src="{{ asset('assets/vendor/tagify/jQuery.tagify.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/vendor/tagify/tagify.css') }}" />
@endsection
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Edit News</h1>
        <div class="">
            <a href="{{ route('admin.news.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go
                Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form id="form" name="form" action="{{ route('admin.news.update', $news->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') ?? $news->title }}" placeholder="Enter title">
                    @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <div id="holder" class="my-3" style="width:120px;"><img src="{{ $news->image }}"
                            alt="Featured Image"></div>
                    <div class="form-group">
                        <label class="fw-bold opacity-75 mb-1" for="image">Featured Image:</label>
                        <div class="input-group mt-2">
                            <span class="input-group-btn">
                                <a id="image-uploader" name="image" data-input="thumbnail" data-preview="holder"
                                    class="btn btn-primary">
                                    <i class="far fa-image"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control @error('image') is-invalid @enderror" type="text"
                                name="image" value="{{ old('image') ?? $news->image }}">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="text-input" class="form-label">Tags</label>
                        <input class="form-control py-1" type="text" id="tags" name="tags"
                            value="{{ old('tags') ?? $news->tags }}" placeholder="Type tag and press enter to add..">
                        @error('tags')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lang_type">{{ __('Language') }}</label>
                            <select id="lang_type" class="form-control @error('lang_type') is-invalid @enderror"
                                name="lang_type" required>
                                <option value="en" {{ old('lang_type', $news->lang_type) === 'en' ? 'selected' : '' }}>
                                    {{ __('English') }}</option>
                                <option value="fr" {{ old('lang_type', $news->lang_type) === 'fr' ? 'selected' : '' }}>
                                    {{ __('French') }}</option>
                                <option value="ar" {{ old('lang_type', $news->lang_type) === 'ar' ? 'selected' : '' }}>
                                    {{ __('Arabic') }}</option>
                            </select>
                            @error('lang_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" placeholder="Enter description">{{ old('description') ?? $news->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="content">Content</label>
                    <textarea rows="5" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                        placeholder="Enter content">{{ old('content') ?? $news->content }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="div">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-success mt-2 mb-2 mb-sm-0" type="submit">Update News</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


@endsection
@section('footer_scripts')
    <script>
        $('#form').not('#tags').on('keyup keypress', function(e) {
            if (e.which === 13 && !$(e.target).first().is('textarea') && !$(e.target).first().is('trix-editor') && !
                ($(e.target).first().hasClass('tagify__input'))) {
                $('#form').submit()
            }
        });

        var myInput = $('#tags').tagify({
            duplicates: false,
            maxItems: 5,
        });

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
