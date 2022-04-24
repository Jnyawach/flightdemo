<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FlightDemo:@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/awesome/css/all.css')}}" rel="stylesheet">
    @yield('styles')

</head>
<body class="admin">
<header class="p-5">
    <div class="row">
        <div class="col-4">

            <button class="btn btn-link fs-5 text-decoration-none ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideBar" aria-controls="sideBar">
                <span><i class="fa-solid fa-bars me-2"></i></span>MENU
            </button>

            <h3><span class="d-none d-sm-block fw-bold fs-6"> FlightDemo CMS</span></h3>


        </div>
        <div class="col-8">
            <ul class="nav justify-content-end admin-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('admin.index')}}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><i class="far fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle text-uppercase text-decoration-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Username
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><hr class="dropdown-divider"> </li>
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><hr class="dropdown-divider"> </li>
                            <li>
                               <button type="button" class="btn btn-link">Logout</button>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>


</header>
<!---------------------------Sidebar------------>
<div class="offcanvas offcanvas-start sidebar" data-bs-scroll="true" tabindex="-1" id="sideBar" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
        <button type="button" class="text-reset close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white; background: none !important;
    border: none !important; font-size: 28px">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush admin-sidebar " id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa-solid fa-cart-flatbed-suitcase me-3"></i>Airports
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <ul class="list-unstyled folders">

                            <li><a href="{{route('airports.index')}}" title="Admins">Airports</a> </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fas fa-user-lock me-3"></i>Roles & Permission
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Create Roles & Permission</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        <i class="fas fa-code-branch me-2"></i>Professions
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-collapseSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Create Professions</a> </li>

                        </ul>

                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThirty">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThirty" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                        <i class="fa-solid fa-industry me-2"></i>Industry
                    </button>
                </h2>
                <div id="flush-collapseThirty" class="accordion-collapse collapse" aria-labelledby="flush-collapseSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Add Industries</a> </li>

                        </ul>

                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThirtyone">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThirtyone" aria-expanded="false"
                            aria-controls="flush-collapseThirtyone">
                        <i class="fa-regular fa-calendar me-2"></i>Experience
                    </button>
                </h2>
                <div id="flush-collapseThirtyone" class="accordion-collapse collapse" aria-labelledby="flush-collapseSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Add Experience</a> </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThirtytwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThirtytwo" aria-expanded="false"
                            aria-controls="flush-collapseThirtytwo">
                        <i class="fa-solid fa-location-crosshairs me-2"></i>Location
                    </button>
                </h2>
                <div id="flush-collapseThirtytwo" class="accordion-collapse collapse" aria-labelledby="flush-collapseSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Add Location</a> </li>

                        </ul>

                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <i class="fa-regular fa-envelope me-3"></i>Messages
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Inbox</a> </li>

                        </ul>
                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <i class="far fa-file-alt me-2"></i>Policies
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-collapseFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Policies</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Create Policy</a> </li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        <i class="fa-solid fa-users me-2"></i>Subscriptions
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-collapseSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Subscribers</a> </li>

                        </ul>

                    </div>
                </div>

            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        <i class="fa-solid fa-building me-2"></i>Company
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-collapseNine" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Manage Companies</a> </li>


                        </ul>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false"
                            aria-controls="flush-headingThirteen">
                        <i class="fa-solid fa-list me-2"></i>Jobs
                    </button>
                </h2>
                <div id="flush-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="flush-collapseTwelve" data-bs-parent="#flush-collapseThirteen">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">View Job Listings</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">Add Listings</a> </li>

                        </ul>


                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFourteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false"
                            aria-controls="flush-headingFourteen">
                        <i class="fa-regular fa-flag me-2"></i>Reported Jobs
                    </button>
                </h2>
                <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-collapseTwelve" data-bs-parent="#flush-collapseThirteen">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="#" title="Admins">View Reported Jobs</a> </li>

                        </ul>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!----------------------End of sidebar----------------->
<main>
    @yield('content')
</main>


<div class="copy">
    <p class="p-3">&copy; {{date('Y')}} Flightdemo. All rights reserved.</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scripts')

</body>
</html>
