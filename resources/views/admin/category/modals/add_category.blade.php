    <style>
        #previewImageDev {
            padding: 3px;
            border: 1.5px solid rgb(182, 178, 178);
            border-radius: 4px;
            background: rgb(240, 238, 238);
            width: fit-content;
        }

        #previewImageDev img {
            border-radius: 4px;
        }

    </style>
  

    <div class="modal fade" id="add_category_modal" tabindex="-1" aria-hidden="true" style="display: none;">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}" method="post">
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <h2 class="fw-bold"> New Category</h2>
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor">
                                    </rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <div class="row">
                            @csrf
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Name</span>
                                </label>
                                <input type="text" value="{{ old('name') }}" id="name" class="form-control form-control-solid" placeholder="" name="name">
                                @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Slug</span>
                                </label>
                                <input type="text" value="{{ old('slug') }}" id="slug" class="form-control form-control-solid" placeholder="" name="slug">
                                @if ($errors->has('slug'))
                                <div class="text-danger">
                                    {{ $errors->first('slug') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Title</span>
                                </label>
                                <input type="text" value="{{ old('title') }}" class="form-control form-control-solid" placeholder="" name="title">
                                @if ($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Image</span>
                                </label>
                                <input type="file" value="{{ old('image') }}" id="Image" accept="image/*" class="form-control form-control-solid" placeholder="" name="image">

                                @if ($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image') }}
                                </div>
                                @endif
                                <div id="previewImageDev" class="mt-3 d-none position-relative">
                                    <img id="previewImage" src="@if ($errors->any())
                                        {{ old('preview_url') }}
                                    @endif" alt="Preview" style="max-width: 100%; max-height: 200px;">
                                    <input type="hidden" name="preview_url">
                                    <button type="button" id="removePreviewImage" class="btn btn-icon btn-circle btn-sm btn-danger position-absolute" style="top: -10px; right: -10px;" title="Remove selected image">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Description</span>
                                </label>
                                <textarea id="description" class="form-control form-control-solid" rows="7" placeholder="" name="description">{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                <div class="text-danger">
                                    {{ $errors->first('description') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Title</span>
                                </label>
                                <input type="text" value="{{ old('meta_title') }}" class="form-control form-control-solid" placeholder="" name="meta_title">
                                @if ($errors->has('meta_title'))
                                <div class="text-danger">
                                    {{ $errors->first('meta_title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Keywords</span>
                                </label>
                                <input type="text" value="{{ old('meta_keywords') }}" class="form-control form-control-solid" placeholder="" name="meta_keywords">
                                @if ($errors->has('meta_keywords'))
                                <div class="text-danger">
                                    {{ $errors->first('meta_keywords') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Description</span>
                                </label>
                                <textarea  class="form-control form-control-solid" rows="7" placeholder="" name="meta_description">{{ old('meta_description') }}</textarea>
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
                    </div>


            </div>

            </form>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('change', '#Image', function() {
                let file = $(this)[0].files[0];
                let targetSrc = URL.createObjectURL(file);
                $('#previewImage').attr('src', targetSrc);
                $('#previewImageDev').removeClass('d-none');
                $('#previewImageDev input').val(targetSrc);
            });
            $(document).on('click', '#removePreviewImage', function() {
                $('#Image').val('');
                $('#previewImage').attr('src', '');
                $('#previewImageDev').addClass('d-none');
                $('#previewImageDev input').val('');
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

