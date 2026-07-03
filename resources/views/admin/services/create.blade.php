@extends('admin.layout')
@section('title', 'Create Service')
<style>
    /* .modal-body input,textarea {
        background-color: rgb(253, 253, 249) !important;
    } */

     
</style>

@section('content')

    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" action="{{ route('admin.services.store') }}" method="post">
        <div class="modal-header" id="kt_modal_add_customer_header">
            <h2 class="fw-bold mt-5 ms-5">Create Service</h2>
        </div>
        <div class="modal-body bg-white m-xl-4 shadow rounded py-10 px-lg-17">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Status</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Want to Publish it for Public Users?"></i>
                        </label>
                        <select name="status" aria-label="Want to Publish it for Public Users?" data-control="select2"
                            data-placeholder="Index..." {{-- data-dropdown-parent="#kt_modal_add_customer" --}}
                            class="role form-select form-select-solid fw-bold">
                            <option {{ old('status') == '1' ? 'selected' : '' }} value="1">Publish</option>
                            <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Draft</option>
                        </select>
                        @if ($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Index</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="For Google Indexing"></i>
                        </label>
                        <select name="index" aria-label="For Google Indexing" data-control="select2"
                            data-placeholder="For Google Indexing..." {{-- data-dropdown-parent="#kt_modal_add_customer" --}}
                            class="role form-select form-select-solid fw-bold">
                            <option {{ old('index') == '1' ? 'selected' : '' }} value="1">Index</option>
                            <option {{ old('index') == '0' ? 'selected' : '' }} value="0">No Index</option>
                        </select>
                        @if ($errors->has('index'))
                            <div class="text-danger">
                                {{ $errors->first('index') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        @csrf
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" value="{{ old('name') }}" class="form-control form-control-solid" id="name" name="name">
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Slug</span>
                        </label>
                        <input type="text" value="{{ old('slug') }}" class="form-control form-control-solid" id="slug" name="slug">
                        @if ($errors->has('slug'))
                            <div class="text-danger">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <input type="text" value="{{ old('title') }}" class="form-control form-control-solid"
                            name="title">
                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Category Name</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Select Category"></i>
                        </label>
                        <select name="category_id" aria-label="Select Category" data-control="select2"
                            data-placeholder="For Google Indexing..." {{-- data-dropdown-parent="#kt_modal_add_customer" --}}
                            class="role form-select form-select-solid fw-bold">
                            @if (!empty($category))
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif

                        </select>
                         @if ($errors->has('category_id'))
                            <div class="text-danger">
                                {{ $errors->first('category_id') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Image</span>
                    </label>
                    <input type="file" accept="image/*" id="image" value="{{ old('image') }}" class="form-control form-control-solid" name="image">
                    @if ($errors->has('image'))
                        <div class="text-danger">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div id="viewImageDev" class="d-none">
                    <img src="{{ old('view_url') }}" alt="" id="viewImage" width="200px">
                    <input type="hidden" name="view_url">
                </div>
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Short Description</span>
                </label>
               <textarea name="short_description" id="short_description" class="form-control form-control-solid" cols="30" rows="6">{{ old('short_description') }}</textarea>
                @if ($errors->has('short_description'))
                    <div class="text-danger">
                        {{ $errors->first('short_description') }}
                    </div>
                @endif
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Description</span>
                </label><br>
                <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Meta title</span>
                </label>
                <input type="text" value="{{ old('meta_title') }}" class="form-control form-control-solid"
                    name="meta_title">
                @if ($errors->has('meta_title'))
                    <div class="text-danger">
                        {{ $errors->first('meta_title') }}
                    </div>
                @endif
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Meta Keywords</span>
                </label>
                <input type="text" value="{{ old('meta_keywords') }}" class="form-control form-control-solid"
                    name="meta_keywords">
                @if ($errors->has('meta_keywords'))
                    <div class="text-danger">
                        {{ $errors->first('meta_keywords') }}
                    </div>
                @endif
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Meta description</span>
                </label>
               <textarea name="meta_description" id="meta_description" class="form-control form-control-solid" cols="30" rows="6">{{ old('meta_description') }}</textarea>
                   
                @if ($errors->has('meta_description'))
                    <div class="text-danger">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <button type="submit" class="btn ms-auto btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $(document).on('change', '#image', function() {
                let file = $(this)[0].files[0];
                let targetSrc = URL.createObjectURL(file);
                $('#viewImage').attr('src', targetSrc);
                $('#viewImageDev').removeClass('d-none');
                $('#viewImageDev input').val(targetSrc);
            });
               $(document).on('input', '#name', function() {
                let name = $(this).val();
                name = name.replace(/\s+/g, '-').toLowerCase();
                $('#slug').val(name);
            });
            $(document).on('input', '#slug', function() {
                let slug = $(this).val();
                slug = slug.replace(/\s+/g, '-').toLowerCase();
                $('#slug').val(slug);
            })
        });
    </script>
@endsection
