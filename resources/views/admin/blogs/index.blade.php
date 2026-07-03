@extends('admin.layout')
@section('title', 'Blogs')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Blogs
                    </h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary" style="color:white !important">Create Blog</a>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success m-5">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger m-5">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <input type="text" data-kt-customer-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Blogs">
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                         <th class="sorting">#ID</th>
                                        <th class="min-w-125px sorting">Thumbnail</th>
                                        <th class="min-w-125px sorting">Title</th>
                                        <th class="min-w-125px sorting">Category</th>
                                        <th class="min-w-125px sorting">Slug</th>
                                        <th class="min-w-125px sorting">Short Description</th>
                                        <th class="min-w-125px sorting">Feature Blog</th>
                                        <th class="min-w-125px sorting">Status</th>
                                        <th class="text-end min-w-70px sorting_disabled">Actions</th>
                                       
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @forelse ($blogs as $blog)
                                        <tr class="odd">
                                            
                                            <td>{{ $blog->id }}</td>
                                            <td>
                                                <img src="{{ asset('frontend/assets/images/blog/' . $blog->image) }}"
                                                    alt="{{ $blog->title }}"
                                                    class="img-fluid rounded"
                                                    style="max-width: 100px; object-fit: cover;">
                                            </td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category }}</td>
                                            <td>{{ $blog->slug }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit(strip_tags($blog->short_description), 30) }}</td>
                                            <td>
                                                @if ($blog->feature_blog == 1)
                                                    <span class="text-white badge bg-success">Featured</span>
                                                @else
                                                    <span class="text-white badge bg-secondary">Normal</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($blog->status == 1)
                                                    <span class="text-white badge bg-success">Active</span>
                                                @else
                                                    <span class="text-white badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                    class="btn editCategory btn-primary btn-sm p-1">
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.2322 5.23223L18.7678 8.76777C19.4882 9.48816 19.4882 10.6788 18.7678 11.3992L11 19.167L7 20L7.83299 16L15.6008 8.23223C16.3212 7.51184 16.3212 6.32116 15.6008 5.60078C14.8804 4.88039 13.6897 4.88039 12.9693 5.60078L11.5 7.0701"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('admin.blog.destroy', $blog->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this blog?')"
                                                    class="btn btn-danger btn-sm p-1">
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 7H19L18.2 20.2C18.1 21.2 17.3 22 16.3 22H7.7C6.7 22 5.9 21.2 5.8 20.2L5 7Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M8 7V5C8 4.44772 8.44772 4 9 4H15C15.5523 4 16 4.44772 16 5V7"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="10" y1="11" x2="10" y2="17"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                        <line x1="14" y1="11" x2="14" y2="17"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No blogs found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
