@extends('admin.layout')
@section('content')

    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"  action="{{ route('admin.emailaccounts.store') }}" method="post">
        <div class="modal-header" id="kt_modal_add_customer_header">
            <h2 class="fw-bold mt-5 ms-5">Create Accounts</h2>
        </div>
        <div class="modal-body bg-white m-xl-4 shadow rounded py-10 px-lg-17">
            @if ($errors->any())
                @forelse ($errors as $error)
                     Error: {{ $error }} <br>
                @empty
                    
                @endforelse
            @endif
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
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        @csrf
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Mail Port</span>
                        </label>
                        <input type="number" value="{{ old('mail_port') }}" class="form-control form-control-solid" id="name" name="mail_port">
                        @if ($errors->has('mail_port'))
                            <div class="text-danger">
                                {{ $errors->first('mail_port') }}
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
                            <span class="required">Mail Mailer</span>
                        </label>
                        <input type="text" value="{{ old('mail_mailer') }}" class="form-control form-control-solid" id="name" name="mail_mailer">
                        @if ($errors->has('mail_mailer'))
                            <div class="text-danger">
                                {{ $errors->first('mail_mailer') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Mail Host</span>
                        </label>
                        <input type="text" value="{{ old('mail_host') }}" class="form-control form-control-solid" id="slug" name="mail_host">
                        @if ($errors->has('mail_host'))
                            <div class="text-danger">
                                {{ $errors->first('mail_host') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Mail Username</span>
                        </label>
                        <input type="text" value="{{ old('mail_username') }}" class="form-control form-control-solid"
                            name="mail_username">
                        @if ($errors->has('mail_username'))
                            <div class="text-danger">
                                {{ $errors->first('mail_username') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Password</span>
                        </label>
                        <input type="text" value="{{ old('mail_password') }}" class="form-control form-control-solid"
                            name="mail_password">
                        @if ($errors->has('mail_password'))
                            <div class="text-danger">
                                {{ $errors->first('mail_password') }}
                            </div>
                        @endif
                    </div>
                </div>
               
            </div>
             <div class="row">
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Mail Encryption</span>
                        </label>
                        <input type="text" value="{{ old('mail_encryption') }}" class="form-control form-control-solid"
                            name="mail_encryption">
                        @if ($errors->has('mail_encryption'))
                            <div class="text-danger">
                                {{ $errors->first('mail_encryption') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">From Name</span>
                        </label>
                        <input type="text" value="{{ old('mail_from_name') }}" class="form-control form-control-solid"
                            name="mail_from_name">
                        @if ($errors->has('mail_from_name'))
                            <div class="text-danger">
                                {{ $errors->first('mail_from_name') }}
                            </div>
                        @endif
                    </div>
                </div>
               
            </div>
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">From Address</span>
                </label>
                <input type="email" placeholder="Enter Email Address" value="{{ old('mail_from_address') }}" class="form-control form-control-solid"
                    name="mail_from_address">
                @if ($errors->has('mail_from_address'))
                    <div class="text-danger">
                        {{ $errors->first('mail_from_address') }}
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
@endsection