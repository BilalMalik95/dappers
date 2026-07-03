<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="#">
            <img alt="Logo" src="{{ asset('frontend/assets/images/logo/dappersolutions-logo-trimmed.png') }}" class="app-sidebar-logo-default" style="width: 175px; height: auto;" />
            <img alt="Logo" src="{{ asset('frontend/assets/images/logo/mark-dark-trimmed.png') }}" class="app-sidebar-logo-minimize" style="height: 36px; width: auto;" />
        </a>
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize" style="background-color: #1e2039; border: 1px solid rgba(255,255,255,0.12);">
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.categories.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="8" height="8" rx="1.5" fill="currentColor" />
                                    <rect x="13" y="3" width="8" height="5" rx="1.5" fill="currentColor" opacity="0.3" />
                                    <rect x="3" y="13" width="5" height="8" rx="1.5" fill="currentColor" opacity="0.3" />
                                    <rect x="10" y="13" width="11" height="8" rx="1.5" fill="currentColor" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.categories.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="7" height="7" rx="1.5" fill="currentColor" />
                                    <rect x="14" y="4" width="7" height="7" rx="1.5" fill="currentColor" opacity="0.4" />
                                    <rect x="3" y="14" width="7" height="7" rx="1.5" fill="currentColor" opacity="0.4" />
                                    <rect x="14" y="14" width="7" height="7" rx="1.5" fill="currentColor" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Services Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.services.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 12L2 7.5l3.5-3.5 5 5M17.5 12l4.5-4.5-3.5-3.5-5 5M8.5 10.5l7 7c.5.5 1.5.5 2 0l1-1c.5-.5.5-1.5 0-2l-7-7M9 14l-1 1c-.5.5-1.5.5-2 0l-1-1c-.5-.5-.5-1.5 0-2l1-1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </span>
                        </span>
                        <span class="menu-title">Services</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.blogs.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 2C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2H6Z" fill="currentColor" opacity="0.2" />
                                    <path d="M14 2V8H20" fill="currentColor" opacity="0.4" />
                                    <rect x="7" y="11" width="10" height="2" rx="1" fill="currentColor" />
                                    <rect x="7" y="15" width="7" height="2" rx="1" fill="currentColor" opacity="0.6" />
                                </svg>

                            </span>
                        </span>
                        <span class="menu-title">Blogs</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.team-members.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" fill="currentColor" />
                                    <path d="M2 19C2 16.2386 5.13401 14 9 14C12.866 14 16 16.2386 16 19V21H2V19Z" fill="currentColor" opacity="0.3" />
                                    <path d="M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5C16.6940 5 16.3992 5.04687 16.1217 5.13476C16.6914 5.94144 17 6.93072 17 8C17 9.06928 16.6914 10.0586 16.1217 10.8652C16.3992 10.9531 16.6940 11 17 11Z" fill="currentColor" opacity="0.5" />
                                    <path d="M18 14.0712C20.3504 14.5172 22 15.9056 22 18V20H18V18C18 16.4046 17.6741 15.0825 18 14.0712Z" fill="currentColor" opacity="0.5" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Team Members</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.users.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12C12.2091 12 14 10.2091 14 8C14 5.79086 12.2091 4 10 4C7.79086 4 6 5.79086 6 8C6 10.2091 7.79086 12 10 12Z" fill="currentColor" />
                                    <path d="M3 20C3 17.7909 6.13401 16 10 16C13.866 16 17 17.7909 17 20V21H3V20Z" fill="currentColor" opacity="0.3" />
                                    <path d="M16.5 12C17.8807 12 19 10.8807 19 9.5C19 8.11929 17.8807 7 16.5 7C15.1193 7 14 8.11929 14 9.5C14 10.8807 15.1193 12 16.5 12Z" fill="currentColor" />
                                    <path d="M13.5 14.25C13.5 13.5596 14.0596 13 14.75 13H18.25C18.9404 13 19.5 13.5596 19.5 14.25V15.25C19.5 15.6642 19.1642 16 18.75 16H14.25C13.8358 16 13.5 15.6642 13.5 15.25V14.25Z" fill="currentColor" opacity="0.3" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.emailaccounts.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12C12.2091 12 14 10.2091 14 8C14 5.79086 12.2091 4 10 4C7.79086 4 6 5.79086 6 8C6 10.2091 7.79086 12 10 12Z" fill="currentColor" />
                                    <path d="M3 20C3 17.7909 6.13401 16 10 16C13.866 16 17 17.7909 17 20V21H3V20Z" fill="currentColor" opacity="0.3" />
                                    <path d="M16.5 12C17.8807 12 19 10.8807 19 9.5C19 8.11929 17.8807 7 16.5 7C15.1193 7 14 8.11929 14 9.5C14 10.8807 15.1193 12 16.5 12Z" fill="currentColor" />
                                    <path d="M13.5 14.25C13.5 13.5596 14.0596 13 14.75 13H18.25C18.9404 13 19.5 13.5596 19.5 14.25V15.25C19.5 15.6642 19.1642 16 18.75 16H14.25C13.8358 16 13.5 15.6642 13.5 15.25V14.25Z" fill="currentColor" opacity="0.3" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Email Accounts</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.contact-users.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z" fill="currentColor" />
                                    <path opacity="0.3" d="M4 20C4 16.6863 7.58172 14 12 14C16.4183 14 20 16.6863 20 20V21H4V20Z" fill="currentColor" />
                                    <path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 7.65685 16.3431 9 18 9Z" fill="currentColor" opacity="0.45" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
