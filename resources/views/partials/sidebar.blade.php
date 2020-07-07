<nav class="sidebar sidebar-offcanvas bg-primary " id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <svg width="75" height="60" viewBox="0 0 75 60" fill="inherit" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M39.0735 56.1274C38.1996 56.8764 36.8264 57.5319 34.9538 58.0936C33.1436 58.6554 31.1462 58.9363 28.9615 58.9363C26.3399 58.9363 24.0927 58.5618 22.2201 57.8127C20.3476 57.0013 19.068 55.9089 18.3813 54.5357C17.6947 53.1 16.8521 51.2587 15.8533 49.0116C14.8546 46.702 13.7935 44.1428 12.6699 41.3339C11.6088 38.525 10.4852 35.5601 9.29926 32.4391C8.1757 29.2557 7.08336 26.0411 6.02222 22.7953C4.96109 19.5494 3.96237 16.366 3.02607 13.245C2.08978 10.124 1.27832 7.19032 0.591704 4.44385C1.46558 3.56997 2.71398 2.78973 4.33689 2.10311C6.02222 1.35407 7.80119 0.979552 9.67378 0.979552C11.9833 0.979552 13.8559 1.47891 15.2916 2.47762C16.7896 3.41392 17.882 5.19289 18.5686 7.81452C20.2539 13.9317 21.9393 19.7991 23.6246 25.4169C25.3723 30.9722 27.1825 36.7773 29.0551 42.832H29.6169C31.3022 36.9645 33.0188 30.5665 34.7665 23.6379C36.5767 16.7093 38.2932 9.81195 39.9161 2.94578C41.0397 2.384 42.2257 1.91585 43.4741 1.54133C44.7849 1.16681 46.2518 0.979552 47.8747 0.979552C50.1842 0.979552 52.1504 1.51012 53.7733 2.57126C55.3962 3.56997 56.2077 5.2553 56.2077 7.62725C56.2077 9.00049 55.8644 10.9979 55.1778 13.6196C54.5536 16.2412 53.7109 19.2061 52.6498 22.5144C51.6511 25.7602 50.4963 29.1621 49.1855 32.72C47.9371 36.2779 46.6575 39.6486 45.3467 42.832C44.0983 45.953 42.9123 48.7307 41.7887 51.165C40.6652 53.537 39.7601 55.1911 39.0735 56.1274ZM56.6524 50.416C56.6524 47.7944 57.4639 45.6097 59.0868 43.8619C60.7097 42.1142 62.9256 41.2403 65.7345 41.2403C68.5434 41.2403 70.7593 42.1142 72.3822 43.8619C74.0051 45.6097 74.8166 47.7944 74.8166 50.416C74.8166 53.0376 74.0051 55.2223 72.3822 56.9701C70.7593 58.7178 68.5434 59.5917 65.7345 59.5917C62.9256 59.5917 60.7097 58.7178 59.0868 56.9701C57.4639 55.2223 56.6524 53.0376 56.6524 50.416Z"
                            fill="white" />
                    </svg>
                    {{-- <img src="{{ asset('frontend/images/faces/face1.jpg') }}" alt="profile"> --}}
                    {{-- <span class="login-status online"></span> --}}
                    <!--change to offline or busy as needed-->
                </div>
                {{-- <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div> --}}
                {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-home menu-icon icon-md text-white"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-google menu-icon icon-md text-white"></i>
                <span class="menu-title">TTS (Wavenet)</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-polymer menu-icon icon-md text-white"></i>
                <span class="menu-title">TTS (Polly)</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-music-box-outline menu-icon icon-md text-white"></i>
                <span class="menu-title">Audio List</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-audiobook menu-icon icon-md text-white"></i>
                <span class="menu-title">Merge Audio</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-nfc-variant menu-icon icon-md text-white"></i>
                <span class="menu-title">Create Merge Audio</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-message-video menu-icon icon-md text-white"></i>
                <span class="menu-title">Video Creator</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-bookmark-music menu-icon icon-md text-white"></i>
                <span class="menu-title">Merge Audio List</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-movie menu-icon icon-md text-white"></i>
                <span class="menu-title">Galary</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-video menu-icon icon-md text-white"></i>
                <span class="menu-title">Video Galary</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-youtube menu-icon icon-md text-white"></i>
                <span class="menu-title">Youtube</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-logout menu-icon icon-md text-white"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
        {{-- 
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li> --}}
    </ul>
</nav>
