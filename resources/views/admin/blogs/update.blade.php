@extends('admin.layout')

@section('title', 'Update Blog')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Update Blog
                    </h1>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    enctype="multipart/form-data"
                    action="{{ route('admin.blogs.update') }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fw-bold m-0">Blog Details</h2>
                        </div>

                        <div class="card-body">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Status</span>
                                    </label>
                                    <select name="status" class="form-select form-select-solid fw-bold">
                                        <option value="1" {{ old('status', $blogs->status) == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status', $blogs->status) == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Feature Blog</span>
                                    </label>
                                    <select name="feature_blog" class="form-select form-select-solid fw-bold">
                                        <option value="1" {{ old('feature_blog', $blogs->feature_blog) == '1' ? 'selected' : '' }}>Featured</option>
                                        <option value="0" {{ old('feature_blog', $blogs->feature_blog) == '0' ? 'selected' : '' }}>Normal</option>
                                    </select>
                                    @error('feature_blog')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Title</span>
                                    </label>
                                    <input type="text" value="{{ old('title', $blogs->title) }}" id="title"
                                        class="form-control form-control-solid" name="title" placeholder="Blog title">
                                    @error('title')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Slug</span>
                                    </label>
                                    <input type="text" value="{{ old('slug', $blogs->slug) }}" class="form-control form-control-solid"
                                        id="slug" name="slug" placeholder="blog-title">
                                    @error('slug')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Category</span>
                                    </label>
                                    <input type="text" value="{{ old('category', $blogs->category) }}" class="form-control form-control-solid"
                                        name="category" placeholder="Blog category">
                                    @error('category')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Thumbnail Image</span>
                                    </label>
                                    <input type="file" accept="image/*" id="image"
                                        class="form-control form-control-solid" name="image">
                                    @error('image')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <div id="viewImageDev" class="mt-4">
                                        <img src="{{ asset('frontend/assets/images/blog/' . $blogs->image) }}" alt="Preview" id="viewImage"
                                            width="220">
                                        <input type="hidden" name="old_image" value="{{ $blogs->image }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Short Description</span>
                                    </label>
                                    <textarea name="short_description" id="short_description" class="form-control form-control-solid" rows="5"
                                        placeholder="Short summary">{{ old('short_description', $blogs->short_description) }}</textarea>
                                    @error('short_description')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Description</span>
                                    </label>
                                    <textarea name="description" id="description" class="form-control form-control-solid" rows="10"
                                        data-upload-url="{{ route('admin.blogs.description-image-upload') }}">{{ old('description', $blogs->description) }}</textarea>
                                    @error('description')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        class BlogUploadAdapter {
            constructor(loader, uploadUrl) {
                this.loader = loader;
                this.uploadUrl = uploadUrl;
                this.xhr = null;
            }

            upload() {
                return this.loader.file.then(file => new Promise((resolve, reject) => {
                    this._initRequest();
                    this._initListeners(resolve, reject, file);
                    this._sendRequest(file);
                }));
            }

            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                xhr.open('POST', this.uploadUrl, true);
                xhr.responseType = 'json';
                xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            }

            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const errorMessage = `Couldn't upload file: ${file.name}.`;

                xhr.addEventListener('error', () => reject(errorMessage));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    if (!response || response.error) {
                        reject(response && response.error && response.error.message ? response.error.message : errorMessage);
                        return;
                    }

                    resolve({
                        default: response.url
                    });
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            _sendRequest(file) {
                const data = new FormData();
                data.append('upload', file);
                this.xhr.send(data);
            }
        }

        function BlogUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = loader => {
                const uploadUrl = editor.sourceElement.dataset.uploadUrl;
                return new BlogUploadAdapter(loader, uploadUrl);
            };
        }

        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('image');
            const previewWrap = document.getElementById('viewImageDev');
            const previewImage = document.getElementById('viewImage');

            imageInput.addEventListener('change', function() {
                const file = this.files[0];
                if (!file) {
                    return;
                }

                previewImage.src = URL.createObjectURL(file);
                previewWrap.classList.remove('d-none');
            });

            document.getElementById('title').addEventListener('input', function() {
                const slug = this.value.trim().toLowerCase().replace(/\s+/g, '-');
                document.getElementById('slug').value = slug;
            });

            document.getElementById('slug').addEventListener('input', function() {
                this.value = this.value.trim().toLowerCase().replace(/\s+/g, '-');
            });

            ClassicEditor.create(document.querySelector('#description'), {
                extraPlugins: [BlogUploadAdapterPlugin],
            }).catch(error => {
                console.error(error);
            });
        });
    </script>
@endsection
