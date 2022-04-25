<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>FlightDemo: Book your Flights Today</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/awesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
@livewireStyles()
</head>
<body>
<header>
    <!--Big menu-->
    <section class="">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid mt-2">
                <a class="navbar-brand me-5" href="/">
                    <!--<img src="images/excel-logo.png" class="img-fluid" alt="careermove-logo"
                    style="width: 200px">-->
                    <h2 class="fs-5">FLIGHTDEMO</h2>
                </a>

                <div class="d-flex">
                   <button class="btn btn-primary me-5 " type="button">
                    <i class="fa-solid fa-bars"></i>
                   </button>
                </div>

            </div>
        </nav>

    </section>
    <!--End of big menu-->


</header>
<main>
@livewire('fligh-filter')
</main>
<footer class="pt-5">
    <hr>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Browse Flights</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">About FlightsDemo</a>
        </li>
       <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Terms of Use</a>
        </li>

    </ul>
    <p class="p-3">&copy; 2022 FlightDemo</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
</script>
@livewireScripts()
</body>
</html>
