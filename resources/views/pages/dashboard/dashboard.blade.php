@extends('layouts.app')

@section("content")
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                     data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-grow-1 flex-stack">
                        <!--begin::Header Logo-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Heaeder menu toggle-->
                            <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3"
                                 id="kt_header_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Heaeder menu toggle-->
                            <!--begin::Logo-->
                            <a href="index.html">
                                <img alt="Logo" src="{{ asset('/media/logos/demo16.svg') }}"
                                     class="h-25px h-lg-30px me-2 me-lg-9"/>
                            </a>
                            <!--end::Logo-->
                            <!--begin::Project-->
                            <div class="d-flex align-items-center">
                                <!--begin::Title-->
                                <div class="d-none d-lg-inline text-white fw-bold fs-4">{{ env("APP_NAME") }}</div>
                                <!--end::Title-->
                                <!--begin::Project-->
                                <div class="d-flex px-2 px-lg-4">
                                    <!--begin::Toggle-->
                                    <button type="button" data-kt-element="selected"
                                            class="btn btn-outline btn-nav btn-flex px-3 px-lg-4 w-60px w-lg-225px h-45px"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                            data-kt-menu-offset="0px, -1px">
                                        <!--begin::Logo-->
                                        <img alt="Logo" src="{{ asset('/media/svg/brand-logos/plurk.svg') }}"
                                             data-kt-element="logo" class="h-20px h-lg-25px"/>
                                        <!--end::Logo-->
                                        <!--begin::Info-->
                                        <span
                                            class="ms-1 ms-lg-2 d-none d-lg-inline fs-5 fw-bold text-white flex-grow-1 text-start"
                                            data-kt-element="title">PintaTravel</span>
                                        <!--end::Info-->
                                        <!--begin::Arrows-->
                                        <span class="d-flex flex-column ms-2 ms-lg-10 me-n1">
												<i class="ki-duotone ki-up fs-5 fs-lg-4 text-gray-700"></i>
												<i class="ki-duotone ki-down fs-5 fs-lg-4 text-gray-700"></i>
											</span>
                                        <!--end::Arrows-->
                                    </button>
                                    <!--end::Toggle-->
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-800 menu-state-bg w-225px ps-3 fs-6 fw-bold"
                                        data-kt-menu="true">
                                        <!--begin::Menu wrapper-->
                                        <div class="hover-scroll-y h-250px my-3 pe-5 me-n1">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3 active">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/plurk.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">PintaTravel</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/slack-icon.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">Slack</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/dribbble-icon-1.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">Dribbble</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/bootstrap5.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">Bootstrap</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/spotify-2.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">Spotify</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a href="" class="menu-link px-3 py-3">
                                                    <!--begin::Logo-->
                                                    <span class="d-flex flex-center flex-shrink-0 w-30px me-2">
															<img alt="Logo"
                                                                 src="{{ asset('/media/svg/brand-logos/beats-electronics.svg') }}"
                                                                 data-kt-element="logo" class="h-20px"/>
														</span>
                                                    <!--end::Logo-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column align-items-start">Beats</span>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Project-->
                                <!--begin::Drawer toggle-->
                                <a href="" class="btn btn-icon btn-create d-none d-lg-flex h-45px w-45px p-0">
                                    <i class="ki-duotone ki-plus fs-2x"></i>
                                </a>
                                <!--end::Drawer toggle-->
                            </div>
                            <!--end::Project-->
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Toolbar wrapper-->
                        <div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
                            <!--begin::Activities-->
                            <div class="d-flex align-items-center ms-2 ms-lg-4">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon btn-custom w-30px h-30px w-lg-40px h-lg-40px btn-color-warning"
                                     id="kt_activities_toggle">
                                    <i class="ki-duotone ki-chart-line fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Drawer toggle-->
                            </div>
                            <!--end::Activities-->
                            <!--begin::Chat-->
                            <div class="d-flex align-items-center ms-2 ms-lg-4">
                                <!--begin::Menu wrapper-->
                                <div
                                    class="btn btn-icon btn-custom w-30px h-30px w-lg-40px h-lg-40px btn-color-success position-relative"
                                    id="kt_drawer_chat_toggle">
                                    <i class="ki-duotone ki-message-text fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle ms-7 mb-3 animation-blink"></span>
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                            <!--begin::Quick links-->
                            <div class="d-flex align-items-center ms-2 ms-lg-4">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-custom w-30px h-30px w-lg-40px h-lg-40px btn-color-primary"
                                     data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </div>
                                <!--begin::Menu 2-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Quick links-->
                            <!--begin::User menu-->
                            <div class="d-flex align-items-center ms-2 ms-lg-4" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-lg-40px"
                                     data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <img class="symbol symbol-30px symbol-lg-40px"
                                         src="{{ asset('/media/avatars/300-3.jpg') }}" alt="user"/>
                                </div>
                                <!--begin::User account menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('/media/avatars/300-3.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">{{ $user->name  }}
                                                    <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ $user->email }}</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
													<span
                                                        class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                          title="View your statements">
														<i class="ki-duotone ki-information-5 fs-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                               value="1" checked="checked" name="notifications"/>
                                                        <span class="form-check-label text-muted fs-7">Notifications</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-duotone ki-night-day theme-light-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
													<i class="ki-duotone ki-moon theme-dark-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span></span>
                                        </a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                   data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-night-day fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</span>
                                                    <span class="menu-title">Light</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                   data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-moon fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                                    <span class="menu-title">Dark</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                   data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-screen fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                                    <span class="menu-title">System</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2"
                                                     src="{{ asset('/media/flags/united-states.svg') }}" alt=""/></span></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="{{ asset('/media/flags/united-states.svg') }}"
                                                             alt=""/>
													</span>English</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="{{ asset('/media/flags/spain.svg') }}" alt=""/>
													</span>Spanish</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="{{ asset('/media/flags/germany.svg') }}" alt=""/>
													</span>German</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="{{ asset('/media/flags/japan.svg') }}" alt=""/>
													</span>Japanese</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="{{ asset('/media/flags/france.svg') }}" alt=""/>
													</span>French</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <!--end::Menu item-->
                                </div>
                                <div class="menu-item px-5">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-flex flex-center btn-primary align-self-center px-0 px-md-3 h-30px w-30px w-md-auto h-lg-40px ms-2 ms-lg-4">Sign Out</button>
                                    </form>
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>

                            <!--end::User menu-->
                            <!--begin::Invite-->
                            <div class="d-flex align-items-center ms-2 ms-lg-4">
                                <a href="#"
                                   class="btn btn-flex flex-center btn-primary align-self-center px-0 px-md-3 h-30px w-30px w-md-auto h-lg-40px ms-2 ms-lg-4"
                                   data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                    <i class="ki-duotone ki-plus-square fs-2 p-0 m-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="d-none d-md-inline ms-2">Invite</span>
                                </a>
                            </div>
                            <!--end::Invite-->
                            <!--begin::Heaeder menu toggle-->
                            <!--end::Heaeder menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Container-->
                    <div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-75px w-100"
                         id="kt_header_nav">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row"
                             data-kt-drawer="true" data-kt-drawer-name="header-menu"
                             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                             data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true"
                             data-kt-swapper-mode="prepend"
                             data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                            <!--begin::Menu-->
                            <div
                                class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch flex-grow-1 px-2 px-lg-0"
                                id="#kt_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="bottom-start"
                                     class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
											<span class="menu-title">Home</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                        <!--begin:Dashboards menu-->
                                        <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                             data-kt-menu-dismiss="true">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="index.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-element-11 text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Default</span>
																			<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/ecommerce.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-basket text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																			<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/projects.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-44 text-info fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Projects</span>
																			<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/online-courses.html"
                                                                   class="menu-link active">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-color-swatch text-success fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																				<span class="path9"></span>
																				<span class="path10"></span>
																				<span class="path11"></span>
																				<span class="path12"></span>
																				<span class="path13"></span>
																				<span class="path14"></span>
																				<span class="path15"></span>
																				<span class="path16"></span>
																				<span class="path17"></span>
																				<span class="path18"></span>
																				<span class="path19"></span>
																				<span class="path20"></span>
																				<span class="path21"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																			<span class="fs-7 fw-semibold text-muted">Student progress</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/marketing.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-chart-simple text-gray-900 fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/bidding.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-switch text-warning fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/pos.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">POS System</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/call-center.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-call text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																			</i>
																		</span>
                                                                    <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                    <div class="separator separator-dashed mx-5 my-5"></div>
                                                    <!--begin:Landing-->
                                                    <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                        <div class="d-flex flex-column me-5">
                                                            <div class="fs-6 fw-bold text-gray-800">Landing Page Template
                                                            </div>
                                                            <div class="fs-7 fw-semibold text-muted">Onpe page landing
                                                                template with pricing & others
                                                            </div>
                                                        </div>
                                                        <a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                                                    </div>
                                                    <!--end:Landing-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div
                                                    class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                    <!--begin:Heading-->
                                                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More
                                                        Dashboards</h4>
                                                    <!--end:Heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/logistics.html" class="menu-link py-2">
                                                            <span class="menu-title">Logistics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/website-analytics.html" class="menu-link py-2">
                                                            <span class="menu-title">Website Analytics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/finance-performance.html"
                                                           class="menu-link py-2">
                                                            <span class="menu-title">Finance Performance</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/store-analytics.html" class="menu-link py-2">
                                                            <span class="menu-title">Store Analytics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/social.html" class="menu-link py-2">
                                                            <span class="menu-title">Social</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/delivery.html" class="menu-link py-2">
                                                            <span class="menu-title">Delivery</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/crypto.html" class="menu-link py-2">
                                                            <span class="menu-title">Crypto</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/school.html" class="menu-link py-2">
                                                            <span class="menu-title">School</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/podcast.html" class="menu-link py-2">
                                                            <span class="menu-title">Podcast</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Dashboards menu-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="bottom-start"
                                     class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
											<span class="menu-title">Pages</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                        <!--begin:Pages menu-->
                                        <div class="menu-active-bg px-4 px-lg-0">
                                            <!--begin:Tabs nav-->
                                            <div class="d-flex w-100 overflow-auto">
                                                <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#"
                                                           data-bs-toggle="tab"
                                                           data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                           data-bs-toggle="tab"
                                                           data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                           data-bs-toggle="tab"
                                                           data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                           data-bs-toggle="tab"
                                                           data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                           data-bs-toggle="tab"
                                                           data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                </ul>
                                            </div>
                                            <!--end:Tabs nav-->
                                            <!--begin:Tab content-->
                                            <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane active w-lg-1000px"
                                                     id="kt_app_header_menu_pages_pages">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User
                                                                        Profile</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/overview.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Overview</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/projects.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Projects</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/campaigns.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Campaigns</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/documents.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Documents</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/followers.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Followers</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/activity.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">Activity</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Corporate</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/about.html" class="menu-link">
                                                                                <span class="menu-title">About</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/team.html" class="menu-link">
                                                                                <span class="menu-title">Our Team</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/contact.html" class="menu-link">
                                                                                <span class="menu-title">Contact Us</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/licenses.html" class="menu-link">
                                                                                <span class="menu-title">Licenses</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/sitemap.html" class="menu-link">
                                                                                <span class="menu-title">Sitemap</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Careers</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/careers/list.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Careers List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/careers/apply.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Careers Apply</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/faq/classic.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">FAQ Classic</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/faq/extended.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">FAQ Extended</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/blog/home.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Blog Home</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/blog/post.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Blog Post</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Pricing</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/pricing.html" class="menu-link">
                                                                            <span
                                                                                class="menu-title">Column Pricing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/pricing/table.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Table Pricing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Social</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/feeds.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Feeds</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/activity.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Activty</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/followers.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Followers</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/settings.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Settings</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4">
                                                            <img src="{{ asset('/media/stock/600x600/img-82.jpg') }}"
                                                                 class="rounded mw-100" alt=""/>
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-5 mb-6 mb-lg-0">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-6">
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/overview.html" class="menu-link">
                                                                            <span class="menu-title">Overview</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/settings.html" class="menu-link">
                                                                            <span class="menu-title">Settings</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/security.html" class="menu-link">
                                                                            <span class="menu-title">Security</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/activity.html" class="menu-link">
                                                                            <span class="menu-title">Activity</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/billing.html" class="menu-link">
                                                                            <span class="menu-title">Billing</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-6">
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/statements.html" class="menu-link">
                                                                            <span class="menu-title">Statements</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/referrals.html" class="menu-link">
                                                                            <span class="menu-title">Referrals</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/api-keys.html" class="menu-link">
                                                                            <span class="menu-title">API Keys</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/logs.html" class="menu-link">
                                                                            <span class="menu-title">Logs</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-7">
                                                            <img src="{{ asset('/media/stock/900x600/46.jpg') }}"
                                                                 class="rounded mw-100" alt=""/>
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-1000px"
                                                     id="kt_app_header_menu_pages_authentication">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate
                                                                    Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/sign-in.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/sign-up.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/two-factor.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/reset-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/new-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay
                                                                    Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/sign-in.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/sign-up.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/two-factor.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/reset-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/new-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative
                                                                    Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/sign-in.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-in</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/sign-up.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/two-factor.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/reset-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/new-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/sign-in.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/sign-up.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/two-factor.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/reset-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/new-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/extended/multi-steps-sign-up.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Multi-Steps Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/welcome.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Welcome Message</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/verify-email.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Verify Email</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/coming-soon.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Coming Soon</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/password-confirmation.html"
                                                                       class="menu-link">
                                                                    <span
                                                                        class="menu-title">Password Confirmation</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/account-deactivated.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Account Deactivation</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/error-404.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Error 404</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/error-500.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Error 500</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email
                                                                    Templates</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/welcome-message.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Welcome Message</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/reset-password.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/subscription-confirmed.html"
                                                                       class="menu-link">
                                                                    <span
                                                                        class="menu-title">Subscription Confirmed</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/card-declined.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Credit Card Declined</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-1.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Promo 1</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-2.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Promo 2</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-3.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">Promo 3</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-7">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General
                                                                            Modals</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/invite-friends.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Invite Friends</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/view-users.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">View Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/select-users.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Select Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/upgrade-plan.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Upgrade Plan</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/share-earn.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Share & Earn</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-target.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">New Target</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-card.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">New Card</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-address.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">New Address</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/create-api-key.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create API Key</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/bidding.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Bidding</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced
                                                                            Modals</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-app.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Create App</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-campaign.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Campaign</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-account.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Business Acc</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-project.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Project</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Top Up Wallet</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/offer-a-deal.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Offer a Deal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Two Factor Auth</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Search</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/search/horizontal.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Horizontal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/search/vertical.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Vertical</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/search/users.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/search/select-location.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Select Location</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                            Wizards</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/horizontal.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Horizontal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/vertical.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Vertical</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/two-factor-authentication.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Two Factor Auth</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-app.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Create App</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-campaign.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Campaign</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-account.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Account</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-project.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Create Project</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                               class="menu-link">
                                                                            <span
                                                                                class="menu-title">Top Up Wallet</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/offer-a-deal.html"
                                                                               class="menu-link">
                                                                                <span class="menu-title">Offer a Deal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-5 pe-lg-5">
                                                            <img src="{{ asset('/media/stock/600x600/img-84.jpg') }}"
                                                                 class="rounded mw-100" alt=""/>
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-6 mb-lg-0">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/lists.html" class="menu-link">
                                                                    <span class="menu-title">Lists</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/statistics.html" class="menu-link">
                                                                    <span class="menu-title">Statistics</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/charts.html" class="menu-link">
                                                                    <span class="menu-title">Charts</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/mixed.html" class="menu-link">
                                                                    <span class="menu-title">Mixed</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/tables.html" class="menu-link">
                                                                    <span class="menu-title">Tables</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/feeds.html" class="menu-link">
                                                                    <span class="menu-title">Feeds</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-8">
                                                            <img src="{{ asset('/media/stock/900x600/44.jpg') }}"
                                                                 class="rounded mw-100" alt=""/>
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                            </div>
                                            <!--end:Tab content-->
                                        </div>
                                        <!--end:Pages menu-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="bottom-start"
                                     class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
											<span class="menu-title">Apps</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Projects</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">My Projects</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">View Project</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/targets.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Targets</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/budget.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Budget</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Users</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Files</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Activity</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/projects/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Settings</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-handcart fs-2"></i>
													</span>
													<span class="menu-title">eCommerce</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Catalog</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Products</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Categories</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Add Product</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Edit Product</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Add Category</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Edit Category</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                     class="menu-item menu-accordion menu-sub-indention">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Orders Listing</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Order Details</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Add Order</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Edit Order</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                     class="menu-item menu-accordion menu-sub-indention">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Customers Listing</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Customers Details</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                     class="menu-item menu-accordion menu-sub-indention">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reports</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Products Viewed</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Sales</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Returns</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Customer Orders</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Shipping</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Settings</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-chart fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Support Center</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/support-center/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Overview</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/support-center/tickets/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Ticket List</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/support-center/tickets/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Ticket View</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/support-center/tutorials/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Tutorials List</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/support-center/tutorials/post.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Tutorials Post</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/support-center/faq.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">FAQ</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/support-center/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Licenses</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/support-center/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Contact Us</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-shield-tick fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Users List</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/user-management/users/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">View User</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/user-management/roles/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Roles List</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/user-management/roles/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">View Roles</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/user-management/permissions.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Permissions</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-phone fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Contacts</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/contacts/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Getting Started</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/contacts/add-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Add Contact</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/contacts/edit-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Edit Contact</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/contacts/view-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">View Contact</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-basket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">Subscriptions</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3"
                                                       href="apps/subscriptions/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Getting Started</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/subscriptions/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Subscription List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/subscriptions/add.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Add Subscription</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/subscriptions/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">View Subscription</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-briefcase fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/customers/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Getting Started</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/customers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Customer Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/customers/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Customer Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-credit-cart fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Invoice Management</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                     data-kt-menu-placement="right-start"
                                                     class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Profile</span>
															<span class="menu-arrow"></span>
														</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/invoices/view/invoice-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Invoice 1</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/invoices/view/invoice-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Invoice 2</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3"
                                                               href="apps/invoices/view/invoice-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                                <span class="menu-title">Invoice 3</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/invoices/create.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Create Invoice</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-file-added fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">File Manager</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/folders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Folders</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Files</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/blank.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Blank Directory</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Settings</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-sms fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Inbox</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Messages</span>
                                                        <span class="menu-badge">
																<span class="badge badge-light-success">3</span>
															</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/compose.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Compose</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/reply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">View & Reply</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                             data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-message-text-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
													<span class="menu-title">Chat</span>
													<span class="menu-arrow"></span>
												</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/private.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Private Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/group.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Group Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/drawer.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                        <span class="menu-title">Drawer Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="apps/calendar.html">
													<span class="menu-icon">
														<i class="ki-duotone ki-calendar-8 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
													</span>
                                                <span class="menu-title">Calendar</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="bottom-start"
                                     class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
											<span class="menu-title">Help</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3"
                                               href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                               target="_blank"
                                               title="Check out over 200 in-house components, plugins and ready for use solutions"
                                               data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                               data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                                <span class="menu-title">Components</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3"
                                               href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                                               title="Check out the complete documentation" data-bs-toggle="tooltip"
                                               data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-abstract-26 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                                <span class="menu-title">Documentation</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3"
                                               href="https://preview.keenthemes.com/metronic8/demo16/layout-builder.html"
                                               title="Build your layout and export HTML for server side integration"
                                               data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                               data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-switch fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                                <span class="menu-title">Layout Builder</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3"
                                               href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                               target="_blank">
													<span class="menu-icon">
														<i class="ki-duotone ki-code fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                                <span class="menu-title">Changelog v8.2.3</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-stretch flex-shrink-0 p-4 p-lg-0" id="kt_header_search_wrapper">
                                <!--begin::Search-->
                                <div id="kt_header_search"
                                     class="header-search d-flex align-items-center header-search w-lg-225px"
                                     data-kt-search-keypress="true" data-kt-search-min-length="2"
                                     data-kt-search-enter="enter" data-kt-search-layout="menu"
                                     data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                     data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end"
                                     data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                     data-kt-swapper-parent="{default: '#kt_topbar',lg: '#kt_header_search_wrapper'}">
                                    <!--begin::Tablet and mobile search toggle-->
                                    <div data-kt-search-element="toggle"
                                         class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                        <div class="d-flex btn btn-icon btn-color-white w-30px h-30px">
                                            <i class="ki-duotone ki-magnifier fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Tablet and mobile search toggle-->
                                    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                    <form data-kt-search-element="form"
                                          class="d-none d-lg-block align-items-center d-lg-flex w-100 mb-5 mb-lg-0 position-relative"
                                          autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden"/>
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-magnifier fs-2 text-gray-600 position-absolute top-50 translate-middle-y ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px"
                                               name="search" value="" placeholder="Search" data-kt-search-element="input"/>
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                              data-kt-search-element="spinner">
												<span
                                                    class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
											</span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                            data-kt-search-element="clear">
												<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Menu-->
                                    <div data-kt-search-element="content"
                                         class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                        <!--begin::Wrapper-->
                                        <div data-kt-search-element="wrapper">
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-350px">
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pb-5"
                                                        data-kt-search-element="category-title">Users</h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="{{ asset('/media/avatars/300-6.jpg') }}" alt=""/>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Karina Clark</span>
                                                            <span
                                                                class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="{{ asset('/media/avatars/300-2.jpg') }}" alt=""/>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                            <span
                                                                class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="{{ asset('/media/avatars/300-9.jpg') }}" alt=""/>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Ana Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="{{ asset('/media/avatars/300-14.jpg') }}" alt=""/>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="{{ asset('/media/avatars/300-11.jpg') }}" alt=""/>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                            <span
                                                                class="fs-7 fw-semibold text-muted">System Administrator</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">Customers</h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{ asset('/media/svg/brand-logos/volicity-9.svg') }}"
                                                                         alt=""/>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{ asset('/media/svg/brand-logos/tvit.svg') }}"
                                                                         alt=""/>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{ asset('/media/svg/misc/infography.svg') }}"
                                                                         alt=""/>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{ asset('/media/svg/brand-logos/leaf.svg') }}"
                                                                         alt=""/>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{ asset('/media/svg/brand-logos/tower.svg') }}"
                                                                         alt=""/>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">Projects</h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-notepad fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-frame fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                       class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Recently viewed-->
                                            <div class="" data-kt-search-element="main">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-stack fw-semibold mb-4">
                                                    <!--begin::Label-->
                                                    <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                    <!--end::Label-->
                                                    <!--begin::Toolbar-->
                                                    <div class="d-flex" data-kt-search-element="toolbar">
                                                        <!--begin::Preferences toggle-->
                                                        <div data-kt-search-element="preferences-show"
                                                             class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                             title="Show search preferences">
                                                            <i class="ki-duotone ki-setting-2 fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Preferences toggle-->
                                                        <!--begin::Advanced search toggle-->
                                                        <div data-kt-search-element="advanced-options-form-show"
                                                             class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                             data-bs-toggle="tooltip" title="Show more search options">
                                                            <i class="ki-duotone ki-down fs-2"></i>
                                                        </div>
                                                        <!--end::Advanced search toggle-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-325px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-laptop fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                                by Keenthemes</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                                API Project Meeting</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                                Monitoring App Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                                Reference FAQ</a>
                                                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-sms fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                                App Development</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-bank fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                                Mobile App</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                                UI Design" Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Icon-->
                                                <div class="pt-10 pb-10">
                                                    <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Message-->
                                                <div class="pb-15 fw-semibold">
                                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                    <div class="text-muted fs-7">Please try again with a different query
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" class="form-control form-control-sm form-control-solid"
                                                       placeholder="Contains the word" name="query"/>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type" value="has"
                                                               checked="checked"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type" value="users"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type" value="orders"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type" value="projects"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="assignedto"
                                                       class="form-control form-control-sm form-control-solid"
                                                       placeholder="Assigned to" value=""/>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="collaborators"
                                                       class="form-control form-control-sm form-control-solid"
                                                       placeholder="Collaborators" value=""/>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment" value="has"
                                                               checked="checked"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                               value="any"/>
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <select name="timezone" aria-label="Select a Timezone"
                                                        data-control="select2" data-dropdown-parent="#kt_header_search"
                                                        data-placeholder="date_period"
                                                        class="form-select form-select-sm form-select-solid">
                                                    <option value="next">Within the next</option>
                                                    <option value="last">Within the last</option>
                                                    <option value="between">Between</option>
                                                    <option value="on">On</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <input type="number" name="date_number"
                                                           class="form-control form-control-sm form-control-solid"
                                                           placeholder="Lenght" value=""/>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="date_typer" aria-label="Select a Timezone"
                                                            data-control="select2" data-dropdown-parent="#kt_header_search"
                                                            data-placeholder="Period"
                                                            class="form-select form-select-sm form-select-solid">
                                                        <option value="days">Days</option>
                                                        <option value="weeks">Weeks</option>
                                                        <option value="months">Months</option>
                                                        <option value="years">Years</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                        data-kt-search-element="advanced-options-form-cancel">Cancel
                                                </button>
                                                <a href="utilities/search/horizontal.html"
                                                   class="btn btn-sm fw-bold btn-primary"
                                                   data-kt-search-element="advanced-options-form-search">Search</a>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="pb-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                           checked="checked"/>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                           checked="checked"/>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                           checked="checked"/>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end pt-7">
                                                <button type="reset"
                                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                        data-kt-search-element="preferences-dismiss">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Toolbar-->
                <div class="toolbar py-3 py-lg-5" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-3 m-0">
                                Online Courses
                                <!--begin::Description-->
                                <span class="page-desc text-muted fs-7 fw-semibold pt-1"></span>
                                <!--end::Description--></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        @include('pages.dashboard.categorycreate')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-10">
                                <!--begin::Lists Widget 19-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Heading-->
                                    <div
                                        class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                        style="background-image:url("{{ asset('/media/svg/shapes/top-green.png') }}"
                                    data-bs-theme="light">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                                        <span class="fw-bold fs-2x mb-3">My Tasks</span>
                                        <div class="fs-4 text-white">
                                            <span class="opacity-75">You have</span>
                                            <span class="position-relative d-inline-block">
														<a href="pages/user-profile/projects.html"
                                                           class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                                <!--begin::Separator-->
														<span
                                                            class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                <!--end::Separator-->
													</span>
                                            <span class="opacity-75">to complete</span>
                                        </div>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar pt-5">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                 data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div class="card-body mt-n20">
                                    <!--begin::Stats-->
                                    <div class="mt-n20 position-relative">
                                        <!--begin::Row-->
                                        <div class="row g-3 g-lg-6">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-flask fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-bank fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-award fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-timer fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Lists Widget 19-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-xl-10">
                                    <!--begin::Slider Widget 1-->
                                    <div id="kt_sliders_widget_1_slider"
                                         class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                         data-bs-ride="carousel" data-bs-interval="5000">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Course</span>
                                                <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
                                            </h4>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0"
                                                        class="active ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                                        class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2"
                                                        class="ms-1"></li>
                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner mt-n5">
                                                <!--begin::Item-->
                                                <div class="carousel-item active show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1"
                                                                 style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2"
                                                                 style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3"
                                                                 style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 1-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-5 mb-xl-10">
                                    <!--begin::Slider Widget 2-->
                                    <div id="kt_sliders_widget_2_slider"
                                         class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                         data-bs-ride="carousel" data-bs-interval="5500">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                                <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
                                            </h4>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                                        class="active ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1"
                                                        class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                                        class="ms-1"></li>
                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner">
                                                <!--begin::Item-->
                                                <div class="carousel-item active show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-success">
																		<i class="ki-duotone ki-abstract-24 fs-3x text-success">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>5 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>60 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>137 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-danger">
																		<i class="ki-duotone ki-abstract-25 fs-3x text-danger">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>12 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-primary">
																		<i class="ki-duotone ki-abstract-36 fs-3x text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 2-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Engage widget 4-->
                            <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                                <!--begin::Body-->
                                <div class="card-body d-flex ps-xl-15">
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
												<span class="me-2">You have got
												<span class="position-relative d-inline-block text-danger">
													<a href="pages/user-profile/overview.html"
                                                       class="text-danger opacity-75-hover">2300 bonus</a>
                                                    <!--begin::Separator-->
													<span
                                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
												</span></span>points.
                                            <br/>Feel free to use them in your lessons
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Action-->
                                        <div class="mb-3">
                                            <a href='#' class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_upgrade_plan">Get Reward</a>
                                            <a href="apps/support-center/overview.html"
                                               class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How
                                                to</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    <!--begin::Illustration-->
                                    <img src="{{ asset('/media/illustrations/sigma-1/17-dark.png') }}"
                                         class="position-absolute me-3 bottom-0 end-0 h-200px" alt=""/>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 4-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::List widget 20-->
                            <div class="card h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Recommended for you</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">All Courses</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">M</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>
                                                <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">Q</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>
                                                <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">W</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>
                                                <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">M</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                                                <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>
                                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">M</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                   class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>
                                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 20-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Timeline Widget 1-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Card header-->
                                <div class="card-header pt-5">
                                    <!--begin::Card title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Team Schedule</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
                                    </h3>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Tabs-->
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                                   data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                   href="#kt_timeline_widget_1_tab_day">Day</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                                   data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                   href="#kt_timeline_widget_1_tab_week">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                                   data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                   href="#kt_timeline_widget_1_tab_month">Month</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pb-0">
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane active" id="kt_timeline_widget_1_tab_day" role="tabpanel"
                                             aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px"
                                                     data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane" id="kt_timeline_widget_1_tab_week" role="tabpanel"
                                             aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px"
                                                     data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane" id="kt_timeline_widget_1_tab_month" role="tabpanel"
                                             aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px"
                                                     data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Timeline Widget 1-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::List widget 21-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Active Lessons</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">All Lessons</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/laravel-2.svg') }}" class="me-4 w-30px"
                                                 alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">PHP Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                                     aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">65%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/vue-9.svg') }}" class="me-4 w-30px" alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-warning">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 87%"
                                                     aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">87%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/bootstrap5.svg') }}" class="me-4 w-30px"
                                                 alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap
                                                    5</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">CSS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-primary">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"
                                                     aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">44%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/angular-icon.svg') }}" class="me-4 w-30px"
                                                 alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular
                                                    16</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-info">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">70%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/spring-3.svg') }}" class="me-4 w-30px"
                                                 alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">Java Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-danger">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 56%"
                                                     aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">56%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="{{ asset('/media/svg/brand-logos/typescript-1.svg') }}" class="me-4 w-30px"
                                                 alt=""/>
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                   class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">Better Tooling</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 82%"
                                                     aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">82%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 21-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Chart widget 18-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Learn Activity</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Hours per course</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Daterangepicker(defined in src/js/dashboard/app.js)-->
                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                             class="btn btn-sm btn-light d-flex align-items-center px-4">
                                            <!--begin::Display range-->
                                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                                            <!--end::Display range-->
                                            <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </div>
                                        <!--end::Daterangepicker-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Chart widget 18-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Post-->
            </div>
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::Lists Widget 19-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Heading-->
                                <div
                                    class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                    style="background-image:url("{{ asset('/media/svg/shapes/top-green.png') }}"
                                data-bs-theme="light">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                    <span class="fw-bold fs-2x mb-3">My Tasks</span>
                                    <div class="fs-4 text-white">
                                        <span class="opacity-75">You have</span>
                                        <span class="position-relative d-inline-block">
														<a href="pages/user-profile/projects.html"
                                                           class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                            <!--begin::Separator-->
														<span
                                                            class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                            <!--end::Separator-->
													</span>
                                        <span class="opacity-75">to comlete</span>
                                    </div>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar pt-5">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                             data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div class="card-body mt-n20">
                                <!--begin::Stats-->
                                <div class="mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-3 g-lg-6">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-flask fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-bank fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-award fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-timer fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Lists Widget 19-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8 mb-5 mb-xl-10">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-xl-10">
                                <!--begin::Slider Widget 1-->
                                <div id="kt_sliders_widget_1_slider"
                                     class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                     data-bs-ride="carousel" data-bs-interval="5000">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h4 class="card-title d-flex align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Today’s Course</span>
                                            <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
                                        </h4>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Carousel Indicators-->
                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0"
                                                    class="active ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                                    class="ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2"
                                                    class="ms-1"></li>
                                            </ol>
                                            <!--end::Carousel Indicators-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-6">
                                        <!--begin::Carousel-->
                                        <div class="carousel-inner mt-n5">
                                            <!--begin::Item-->
                                            <div class="carousel-item active show">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Chart-->
                                                    <div class="w-80px flex-shrink-0 me-2">
                                                        <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1"
                                                             style="height: 100px"></div>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_app">Continue</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="carousel-item">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Chart-->
                                                    <div class="w-80px flex-shrink-0 me-2">
                                                        <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2"
                                                             style="height: 100px"></div>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_app">Continue</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="carousel-item">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Chart-->
                                                    <div class="w-80px flex-shrink-0 me-2">
                                                        <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3"
                                                             style="height: 100px"></div>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_app">Continue</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Carousel-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Slider Widget 1-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-5 mb-xl-10">
                                <!--begin::Slider Widget 2-->
                                <div id="kt_sliders_widget_2_slider"
                                     class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                     data-bs-ride="carousel" data-bs-interval="5500">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h4 class="card-title d-flex align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
                                        </h4>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Carousel Indicators-->
                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                                    class="active ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1"
                                                    class="ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                                    class="ms-1"></li>
                                            </ol>
                                            <!--end::Carousel Indicators-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-6">
                                        <!--begin::Carousel-->
                                        <div class="carousel-inner">
                                            <!--begin::Item-->
                                            <div class="carousel-item active show">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-success">
																		<i class="ki-duotone ki-abstract-24 fs-3x text-success">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>5 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>60 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>137 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="carousel-item">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-danger">
																		<i class="ki-duotone ki-abstract-25 fs-3x text-danger">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>12 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="carousel-item">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5">
																	<span class="symbol-label bg-light-primary">
																		<i class="ki-duotone ki-abstract-36 fs-3x text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>3 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>50 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																			<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>72 students</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Carousel-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Slider Widget 2-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Engage widget 4-->
                        <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                            <!--begin::Body-->
                            <div class="card-body d-flex ps-xl-15">
                                <!--begin::Wrapper-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
												<span class="me-2">You have got
												<span class="position-relative d-inline-block text-danger">
													<a href="pages/user-profile/overview.html"
                                                       class="text-danger opacity-75-hover">2300 bonus</a>
                                                    <!--begin::Separator-->
													<span
                                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
												</span></span>points.
                                        <br/>Feel free to use them in your lessons
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Action-->
                                    <div class="mb-3">
                                        <a href='#' class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_upgrade_plan">Get Reward</a>
                                        <a href="apps/support-center/overview.html"
                                           class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How
                                            to</a>
                                    </div>
                                    <!--begin::Action-->
                                </div>
                                <!--begin::Wrapper-->
                                <!--begin::Illustration-->
                                <img src="{{ asset('/media/illustrations/sigma-1/17-dark.png') }}"
                                     class="position-absolute me-3 bottom-0 end-0 h-200px" alt=""/>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List widget 21-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Active Lessons</span>
                                    <span class="text-muted mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
                                </h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">All Lessons</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/laravel-2.svg') }}" class="me-4 w-30px"
                                             alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">PHP Framework</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-success">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                                 aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">65%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/vue-9.svg') }}" class="me-4 w-30px" alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-warning">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 87%"
                                                 aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">87%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/bootstrap5.svg') }}" class="me-4 w-30px"
                                             alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap
                                                5</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">CSS Framework</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-primary">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"
                                                 aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">44%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/angular-icon.svg') }}" class="me-4 w-30px"
                                             alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular
                                                16</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-info">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">70%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/spring-3.svg') }}" class="me-4 w-30px"
                                             alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">Java Framework</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-danger">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 56%"
                                                 aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">56%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Logo-->
                                        <img src="{{ asset('/media/svg/brand-logos/typescript-1.svg') }}" class="me-4 w-30px"
                                             alt=""/>
                                        <!--end::Logo-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <!--begin::Text-->
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
                                            <!--end::Text-->
                                            <!--begin::Description-->
                                            <span class="text-gray-500 fw-semibold d-block fs-6">Better Tooling</span>
                                            <!--end::Description=-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-success">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 82%"
                                                 aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Value-->
                                        <span class="text-gray-500 fw-semibold">82%</span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 21-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 18-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Learn Activity</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Hours per course</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Daterangepicker(defined in src/js/dashboard/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                         class="btn btn-sm btn-light d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Chart widget 18-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Container-->
        <!--begin::Footer-->
        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="https://keenthemes.com" target="_blank"
                       class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
@endsection

