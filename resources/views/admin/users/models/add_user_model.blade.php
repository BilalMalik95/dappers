    <div class="modal fade" id="add_user_modal" tabindex="-1" aria-hidden="true" style="display: none;">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('admin.users.store') }}" method="post">
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <h2 class="fw-bold">Create New User</h2>
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
                       
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            @csrf
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <input type="text" value="{{ old('name') }}" class="form-control form-control-solid" placeholder="" name="name">
                            {{-- @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                            @endif --}}
                            
                        </div>
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Email</span>
                            </label>
                            <input type="email" value="{{ old('email') }}" class="form-control form-control-solid" placeholder="" name="email">
                            @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>

                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Role</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select user Role"></i>
                            </label>
                            <select name="role" aria-label="Select User Role" data-control="select2" data-placeholder="Select a Role..." {{-- data-dropdown-parent="#kt_modal_add_customer" --}} class="form-select form-select-solid fw-bold">
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>

                            </select>
                        </div>
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Password</span>
                            </label>
                            <input type="text" value="{{ old('password') }}" class="form-control form-control-solid" placeholder="" name="password">
                            @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
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
            </div>
        </div>
    </div>
     
