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
  

    <div class="modal fade" id="update_category_modal" tabindex="-1" aria-hidden="true" style="display: none;">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="EditCategoryForm" enctype="multipart/form-data" action="{{ route('admin.categories.update') }}" method="post">
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <h2 class="fw-bold"> Edit Category</h2>
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
                                <input type="hidden" value="{{ old('edit_id') }}" name="edit_id" id="EditCategoryID">
                                <input type="text" value="{{ old('edit_name') }}" id="EditName" class="form-control form-control-solid" placeholder="" name="edit_name">
                                @if ($errors->has('edit_name'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_name') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Slug</span>
                                </label>
                                <input type="text" value="{{ old('edit_slug') }}" id="EditSlug" class="form-control form-control-solid" placeholder="" name="edit_slug">
                                @if ($errors->has('edit_slug'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_slug') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Title</span>
                                </label>
                                <input type="text" value="{{ old('edit_title') }}" id="EditTitle" class="form-control form-control-solid" placeholder="" name="edit_title">

                                @if ($errors->has('edit_title'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="">Image</span>
                                </label>
                                <input type="file" value="{{ old('edit_image') }}" id="EditImage" accept="image/*" class="form-control form-control-solid" placeholder="" name="edit_image">


                                @if ($errors->has('edit_image'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_image') }}
                                </div>
                                @endif
                                <div id="EditPreviewImageDev" class="mt-3">
                                    <img id="EditPreviewImage" src="@if($errors->any())/frontend/assets/images/{{ old('edit_old_image') }}@endif" alt="Preview" style="max-width: 100%; max-height: 200px;">
                                    <input type="hidden" id="EditOldImage" value="{{ old('edit_old_image') }}" name="edit_old_image">
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Description</span>
                                </label>
                                <textarea id="EditDescription" class="form-control form-control-solid" rows="7" placeholder="" name="edit_description">{{ old('edit_description') }}</textarea>


                                @if ($errors->has('edit_description'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_description') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Title</span>
                                </label>
                                <input type="text" value="{{ old('edit_meta_title') }}" id="EditMetaTitle" class="form-control form-control-solid" placeholder="" name="edit_meta_title">

                                @if ($errors->has('edit_meta_title'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_meta_title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Keywords</span>
                                </label>
                                <input type="text" value="{{ old('edit_meta_keywords') }}" id="EditMetaKeywords" class="form-control form-control-solid" placeholder="" name="edit_meta_keywords">

                                @if ($errors->has('edit_meta_keywords'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_meta_keywords') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12 mb-4">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Meta Description</span>
                                </label>
                                <textarea id="EditMetaDescription" class="form-control form-control-solid" rows="7" placeholder="" name="edit_meta_description">{{ old('edit_meta_description') }}</textarea>
                                @if ($errors->has('edit_meta_description'))
                                <div class="text-danger">
                                    {{ $errors->first('edit_meta_description') }}
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
            $(document).on('change', '#EditImage', function() {
                let file = $(this)[0].files[0];
                let targetSrc = URL.createObjectURL(file);
                $('#EditPreviewImage').attr('src', targetSrc);
                $('#EditPreviewImageDev').removeClass('d-none');
                $('#EditPreviewImageDev input').val(targetSrc);
            });
            $(document).on('input', '#EditName', function() {
                let name = $(this).val();
                name = name.replace(/\s+/g, '-').toLowerCase();
                $('#EditSlug').val(name);
            });
            $(document).on('input', '#EditSlug', function() {
                let slug = $(this).val();
                slug = slug.replace(/\s+/g, '-').toLowerCase();
                $('#EditSlug').val(slug);
            })
            
        });

    </script>
<script>
  let editDescriptionEditor;
    ClassicEditor
    .create(document.querySelector('#EditDescription'))
    .then(editor => {
         editDescriptionEditor = editor;
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

</script>
