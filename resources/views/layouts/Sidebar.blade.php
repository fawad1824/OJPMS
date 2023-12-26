            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu mt-5">

                            @if (Auth::user()->role_id == 'admin')
                                <li>
                                    <a href="/home" class="mm-active">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        Companies
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        Profile
                                    </a>
                                </li>
                            @elseif (Auth::user()->role_id == 'job')
                                <li>
                                    <a href="index.html" class="mm-active">
                                        Apply Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="/create-cv" class="mm-active">
                                        Create CV
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="/admin-jobs" class="mm-active">
                                        Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin-application" class="mm-active">
                                        Candidate Applications
                                    </a>
                                </li>
                                <li>
                                    <a href="/company-profile" class="mm-active">
                                        Company Profile
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('logout') }}" class="mm-active"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>

                            <!-- Hidden form to handle the logout POST request -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf <!-- Laravel CSRF protection -->
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
