@extends('admin.layout')

@section('title', 'Add Team Member')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Add Team Member
                    </h1>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    enctype="multipart/form-data"
                    action="{{ route('admin.team-members.store') }}"
                    method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fw-bold m-0">Team Member Details</h2>
                        </div>

                        <div class="card-body">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Status</span>
                                    </label>
                                    <select name="status" class="form-select form-select-solid fw-bold">
                                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Founder Card</span>
                                    </label>
                                    <select name="is_founder" class="form-select form-select-solid fw-bold">
                                        <option value="1" {{ old('is_founder') == '1' ? 'selected' : '' }}>Yes - show as founder (large hero card)</option>
                                        <option value="0" {{ old('is_founder', '0') == '0' ? 'selected' : '' }}>No - regular team card</option>
                                    </select>
                                    @error('is_founder')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Card Type</span>
                                    </label>
                                    <select name="is_placeholder" class="form-select form-select-solid fw-bold">
                                        <option value="0" {{ old('is_placeholder', '0') == '0' ? 'selected' : '' }}>Real person - full name + SEO profile markup</option>
                                        <option value="1" {{ old('is_placeholder') == '1' ? 'selected' : '' }}>Placeholder - generic role/discipline, no SEO person markup</option>
                                    </select>
                                    <div class="form-text">Placeholder cards are for disciplines you haven't hired/named yet. They render the same card UI but skip the Person schema and social links so search engines never see a fake identity. Switch this to "Real person" once you hire someone and fill in their actual name.</div>
                                    @error('is_placeholder')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Name</span>
                                    </label>
                                    <input type="text" value="{{ old('name') }}" id="name"
                                        class="form-control form-control-solid" name="name" placeholder="Full name (or role title for placeholders)">
                                    @error('name')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Slug</span>
                                    </label>
                                    <input type="text" value="{{ old('slug') }}" class="form-control form-control-solid"
                                        id="slug" name="slug" placeholder="full-name">
                                    @error('slug')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Designation</span>
                                    </label>
                                    <input type="text" value="{{ old('designation') }}" class="form-control form-control-solid"
                                        name="designation" placeholder="e.g. Founder & CEO">
                                    @error('designation')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">Photo</span>
                                    </label>
                                    <input type="file" accept="image/*" id="image"
                                        class="form-control form-control-solid" name="image">
                                    @error('image')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <div id="viewImageDev" class="d-none mt-4">
                                        <img src="" alt="Preview" id="viewImage" width="160">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="fs-6 fw-semibold mb-2">Bio</label>
                                    <textarea name="bio" class="form-control form-control-solid" rows="4"
                                        placeholder="Short bio describing this person's role and focus">{{ old('bio') }}</textarea>
                                    @error('bio')
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

            document.getElementById('name').addEventListener('input', function() {
                const slug = this.value.trim().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                document.getElementById('slug').value = slug;
            });

            document.getElementById('slug').addEventListener('input', function() {
                this.value = this.value.trim().toLowerCase().replace(/\s+/g, '-');
            });
        });
    </script>
@endsection
