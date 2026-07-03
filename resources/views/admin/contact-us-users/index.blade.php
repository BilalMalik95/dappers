@extends('admin.layout')
@section('title', 'Contact Us Users')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card card-flush">
            <div class="card-header pt-7">
                <div class="card-title">
                    <h2 class="fw-bold">Contact Us Submissions</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @forelse ($contactUsers as $contactUser)
                                <tr>
                                    <td>{{ $contactUser->name }}</td>
                                    <td>{{ $contactUser->phone }}</td>
                                    <td>{{ $contactUser->email }}</td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-sm btn-light-{{ $contactUser->status === 'new' ? 'primary' : ($contactUser->status === 'spam' ? 'danger' : ($contactUser->status === 'contacted' ? 'success' : 'warning')) }} status-trigger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#contactStatusModal"
                                            data-contact-id="{{ $contactUser->id }}"
                                            data-contact-status="{{ $contactUser->status }}"
                                            data-contact-notes="{{ e($contactUser->notes) }}">
                                            {{ ucfirst(str_replace('_', ' ', $contactUser->status)) }}
                                        </button>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.contact-users.show', $contactUser->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="View">
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 5C6.5 5 2.1 8.6 1 12c1.1 3.4 5.5 7 11 7s9.9-3.6 11-7c-1.1-3.4-5.5-7-11-7Zm0 11.2A4.2 4.2 0 1 1 12 7.8a4.2 4.2 0 0 1 0 8.4Z" fill="currentColor"/>
                                                    <circle cx="12" cy="12" r="2.5" fill="currentColor" opacity="0.4"/>
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="{{ route('admin.contact-users.destroy', $contactUser->id) }}"
                                           class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this contact submission?')"
                                           title="Delete">
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 7h12l-1 14H7L6 7Z" fill="currentColor" opacity="0.25"/>
                                                    <path d="M9 4h6l1 2H8l1-2Z" fill="currentColor"/>
                                                    <path d="M10 10v6M14 10v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No contact submissions found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactStatusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.contact-users.update') }}" method="POST">
                @csrf
                <input type="hidden" name="contact_id" id="contact_id">
                <div class="modal-header">
                    <h2 class="fw-bold">Update Status / Notes</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7 6.7a1 1 0 0 1 1.4 0L12 10.6l3.9-3.9a1 1 0 1 1 1.4 1.4L13.4 12l3.9 3.9a1 1 0 1 1-1.4 1.4L12 13.4l-3.9 3.9a1 1 0 0 1-1.4-1.4l3.9-3.9-3.9-3.9a1 1 0 0 1 0-1.4Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body py-6">
                    <div class="mb-5">
                        <label class="required form-label">Status</label>
                        <select name="status" id="contact_status" class="form-select form-select-solid">
                            <option value="new">New</option>
                            <option value="spam">Spam</option>
                            <option value="contacted">Contacted</option>
                            <option value="not_contacted">Not Contacted</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Notes</label>
                        <textarea name="notes" id="contact_notes" rows="6" class="form-control form-control-solid" placeholder="Add admin notes here"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
        $('#kt_customers_table').DataTable();

        const modal = $('#contactStatusModal');
        modal.on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            $('#contact_id').val(button.data('contact-id'));
            $('#contact_status').val(button.data('contact-status'));
            $('#contact_notes').val(button.data('contact-notes') || '');
        });
    });
</script>
@endsection
