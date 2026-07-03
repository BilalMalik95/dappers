@extends('admin.layout')
@section('title', 'View Contact Submission')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card card-flush mb-6">
            <div class="card-header pt-7">
                <div class="card-title">
                    <h2 class="fw-bold">Contact Submission Details</h2>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('admin.contact-users.index') }}" class="btn btn-light">Back</a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="border rounded p-4">
                            <div class="text-muted fw-semibold mb-1">Name</div>
                            <div class="fw-bold fs-5">{{ $contactUser->name }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-4">
                            <div class="text-muted fw-semibold mb-1">Email</div>
                            <div class="fw-bold fs-5">{{ $contactUser->email }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-4">
                            <div class="text-muted fw-semibold mb-1">Phone</div>
                            <div class="fw-bold fs-5">{{ $contactUser->phone }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-4">
                            <div class="text-muted fw-semibold mb-1">Company</div>
                            <div class="fw-bold fs-5">{{ $contactUser->company ?: '-' }}</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="border rounded p-4">
                            <div class="text-muted fw-semibold mb-1">Message</div>
                            <div class="fw-semibold">{{ $contactUser->message }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-flush mb-6">
            <div class="card-header pt-7">
                <div class="card-title">
                    <h2 class="fw-bold">Status and Notes</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <form action="{{ route('admin.contact-users.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="contact_id" value="{{ $contactUser->id }}">
                    <div class="mb-5">
                        <label class="required form-label">Status</label>
                        <select name="status" class="form-select form-select-solid">
                            <option value="new" {{ old('status', $contactUser->status) === 'new' ? 'selected' : '' }}>New</option>
                            <option value="spam" {{ old('status', $contactUser->status) === 'spam' ? 'selected' : '' }}>Spam</option>
                            <option value="contacted" {{ old('status', $contactUser->status) === 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="not_contacted" {{ old('status', $contactUser->status) === 'not_contacted' ? 'selected' : '' }}>Not Contacted</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Notes</label>
                        <textarea name="notes" rows="8" class="form-control form-control-solid" placeholder="Add admin notes here">{{ old('notes', $contactUser->notes) }}</textarea>
                    </div>

                    <div class="d-flex gap-3">
                        <button type="submit" class="btn btn-primary">Save Status / Notes</button>
                    </div>
                </form>

                <form action="{{ route('admin.contact-users.clear-notes', $contactUser->id) }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="btn btn-light-danger">Delete Notes</button>
                </form>
            </div>
        </div>

        <div class="card card-flush">
            <div class="card-header pt-7">
                <div class="card-title">
                    <h2 class="fw-bold">Current Notes</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                @if ($contactUser->notes)
                    <div class="border rounded p-4 bg-light-warning">
                        {{ $contactUser->notes }}
                    </div>
                @else
                    <div class="text-muted">No notes added yet.</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
