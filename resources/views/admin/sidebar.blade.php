@push('sidebar')

    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <form class="modal-content" id="demoForm">
                <div class="modal-body">

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="text-center">
                        <img src="{{asset('vendor/admin/assets/img/illustrations/designer-life.svg')}}" alt="..." class="img-fluid mb-3">
                    </div>

                    <h2 class="text-center mb-2">
                        Make Dashkit Your Own
                    </h2>

                    <p class="text-center mb-4">
                        Set preferences that will be cookied for your live preview demonstration.
                    </p>

                    <hr class="mb-4">

                    <h4 class="mb-1">
                        Color Scheme
                    </h4>

                    <p class="small text-muted mb-3">
                        Overall light or dark presentation.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
                        </label>
                    </div>

                    <h4 class="mb-1">
                        Navigation Position
                    </h4>

                    <p class="small text-muted mb-3">
                        Select the primary navigation paradigm for your app.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
                        </label>
                    </div>

                    <h4 class="mb-1">
                        Sidebar Color
                    </h4>

                    <p class="small text-muted mb-3">
                        Usually dictated by the color scheme, but can be overriden.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="sidebarColor" id="sidebarColorDefault" value="default" checked> Default
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
                        </label>
                    </div>

                </div>
                <div class="modal-footer border-0">

                    <button type="submit" class="btn btn-block btn-primary mt-auto">
                        Preview
                    </button>

                </div>
            </form>
        </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <!-- Title -->
                    <h4 class="modal-title">
                        Notifications
                    </h4>

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
                    </button>

                </div>
                <div class="modal-body">

                    <!-- List group -->


                </div>
            </div>
        </div>
    </div>

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->

        <a class="navbar-brand" href="#!">
            <img src="{{asset('storage/MGlogo.png')}}" class="navbar-brand-img mx-auto" alt="MGlogo">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('admin')}}" >
                        <i class="fe fe-home"></i> Dashboards
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-file"></i> Pages
                    </a>
                    <div class="collapse " id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                                    Profile
                                </a>
                                <div class="collapse " id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{asset('/admin/'.Auth::user()->id)}}" class="nav-link ">
                                                Admins
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
{{--            <h6 class="navbar-heading">--}}
{{--                Documentation--}}
{{--            </h6>--}}


            <!-- Push content down -->
            <div class="mt-auto"></div>


            <!-- Customize -->
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
                <i class="fe fe-sliders mr-2"></i> Customize
            </a>



            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="{{ Auth::user()->name }}">
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="{{asset('admin/'.Auth::id().'/edit')}}" class="dropdown-item">{{ __('Edit Page') }}</a>
{{--                        <a href="" class="dropdown-item">Settings</a>--}}
                        <hr class="dropdown-divider">
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form1').submit();" class="dropdown-item">{{ __('Logout') }}
                        </a>
                        <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>


        </div> <!-- / .navbar-collapse -->

    </div>
</nav>
@endpush
