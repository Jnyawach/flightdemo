<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>FlightDemo: Book your Flights Today</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/awesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
</head>
<body>
<header>
    <!--Big menu-->
    <section class="">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid mt-2">
                <a class="navbar-brand me-5" href="index.html">
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
<section class="pt-5 p-3">
    <div class="card p-3 search">
        <div class="card-body">

            <form>
                <div class="form-group">
                    <div class="d-inline-block">
                        <select class="form-select minimal" aria-label="Default select example">

                            <option value="1" selected>Round Trip </option>
                            <option value="1">One way </option>
                         </select>
                      </div>
                      <div class="d-inline-block">
                         <select class="form-select minimal" aria-label="Default select example">

                             <option value="1" selected>1-Traveler(s)</option>
                             <option value="2">2-Traveler(s)</option>
                             <option value="2">3-Traveler(s)</option>
                             <option value="2">4-Traveler(s)</option>
                             <option value="2">5-Traveler(s)</option>

                         </select>
                       </div>
                       <div class="d-inline-block">
                         <select class="form-select minimal" >
                             <option selected>Economy</option>
                             <option value="1">Premium</option>
                             <option value="2">Business</option>
                             <option value="2">First</option>

                         </select>
                       </div>
                       <div class="d-inline-block">
                        <select class="form-select minimal" >
                            <option selected>Any Airline</option>
                            <option value="1">Kenya Airways</option>
                            <option value="2">Jambojet</option>
                            <option value="2">Fly540</option>

                        </select>
                      </div>

                </div>
                <div class="form-group row">
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <label for="From"><i class="fa-solid fa-location-crosshairs"></i> Flying From:</label>
                            <select class="form-select mt-2" id="From" >
                                <option value="1" selected>Select departure</option>
                                <option value="2"><span>(EDL)</span> Eldoret</option>
                                <option value="2"><span>(GOM)</span> Goma</option>
                                <option value="2"><span>(KIS)</span> Kisumu</option>
                                <option value="2"><span>(LAU)</span> Lamu</option>
                                <option value="2"><span>(MYD)</span> Malindi</option>
                                <option value="2"><span>(NBO)</span> Nairobi</option>
                            </select>

                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">

                            <label for="Destination"><i class="fa-solid fa-location-crosshairs"></i> Flying to:</label>
                            <select class="form-select mt-2" id="Destination" >
                                <option value="1" selected>Select destination</option>
                                <option value="2"><span>(EDL)</span> Eldoret</option>
                                <option value="2"><span>(GOM)</span> Goma</option>
                                <option value="2"><span>(KIS)</span> Kisumu</option>
                                <option value="2"><span>(LAU)</span> Lamu</option>
                                <option value="2"><span>(MYD)</span> Malindi</option>
                                <option value="2"><span>(NBO)</span> Nairobi</option>
                            </select>


                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 p-2">
                        <label for="Departure"><i class="fa-solid fa-calendar-days"></i> Departure Date:</label>
                        <input type="date" class="form-control mt-2" id="Departure"  value="">

                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 p-2">
                        <label for="Return"><i class="fa-solid fa-calendar-days"></i> Return Date:</label>
                        <input type="date" class="form-control mt-2" id="Return"  value="">

                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 align-self-end p-2">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</section>
<section class="pt-5 p-3">
    <div class="row">
        <div class="col-md-3 d-md-none d-lg-block">

            <div class="stops">
                <div class="">
                    <h6 class="">Filter By:</h6>
                    <hr>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th><h5 class="fs-6">Stops</h5></td>
                                <th class="text-end"><h5 class="fs-6">From</h5></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Nonstop">
                                        <label class="form-check-label" for="Nonstop">
                                          Nonstop (5)
                                        </label>
                                      </div>
                                </td>
                                <td class="text-end"><label>$8000</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Onestop">
                                        <label class="form-check-label" for="Onestop">
                                          Onestop (5)
                                        </label>
                                      </div>
                                </td>
                                <td class="text-end"><label>$1400</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Twostop">
                                        <label class="form-check-label" for="Twostop">
                                          Twostop (7)
                                        </label>
                                      </div>
                                </td>
                                <td class="text-end"><label>$1400</label></td>
                            </tr>
                            <thead>
                                <tr>
                                    <th><h5 class="fs-6">Airlines</h5></td>
                                    <th class="text-end"><h5 class="fs-6">From</h5></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Turkish">
                                            <label class="form-check-label" for="Turkish">
                                              Turkish Airline (5)
                                            </label>
                                          </div>
                                    </td>
                                    <td class="text-end"><label>$8000</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Kenya">
                                            <label class="form-check-label" for="Kenya">
                                              Kenya Airways (5)
                                            </label>
                                          </div>
                                    </td>
                                    <td class="text-end"><label>$1400</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Ethiopian">
                                            <label class="form-check-label" for="Ethiopian">
                                              Ethiopian Airline (7)
                                            </label>
                                          </div>
                                    </td>
                                    <td class="text-end"><label>$1400</label></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th><h5 class="fs-6">Travel & Baggage</h5></td>
                                    <th class="text-end"><h5 class="fs-6">From</h5></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CancelFee">
                                            <label class="form-check-label" for="CancelFee">
                                              No Cancel Fee (3)
                                            </label>
                                          </div>
                                    </td>
                                    <td class="text-end"><label>$8000</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ChargeFee">
                                            <label class="form-check-label" for="ChargeFee">
                                              No Charge Fee (5)
                                            </label>
                                          </div>
                                    </td>
                                    <td class="text-end"><label>$1400</label></td>
                                </tr>

                            </tbody>
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
        <div class="col-md-8 col-lg-6">
            <h5 class="fs-6">Choose flight department <i class="fa-solid fa-angle-right me-2 ms-2"></i>
                Choose returning flight <i class="fa-solid fa-angle-right me-2 ms-2"></i>
                Review your trip
            </h5>
            <hr>
            <div class="intro">
            <div class="row">
                <div class="col-9">
                    <p class="">Prices Displayed include taxes and may change based on availability.
                        You can review any additional fees. Prices are not final unitl
                        you complete your purchase.
                    </p>
                </div>
                <div class="col-3">
                    <select class="form-select" aria-label="Default select example">

                        <option value="1" selected> SORT BY </option>
                        <option value="2">PRICE LOWEST</option>
                        <option value="2">PRICE HIGHEST</option>


                    </select>
                </div>
            </div>
        </div>
            <div class="flight mt-4 p-3">
               <div class="row">
                   <div class="col-6">
                       <h5 class="fs-6 fw-bold">4:00pm-6:00pm</h5>
                       <p class="p-0 m-0">Nairobi(NBO)-Mombasa(MBA)</p>
                       <div class="mt-2">
                           <img src="images/kenya-airways-logo.png" class="img-fluid float-start me-2"
                               style="width:20px">
                           <p class="">Kenya Airways</p>
                       </div>
                   </div>
                   <div class="col-2 align-self-center">
                       <p class="fs-6">1h 0m (Nonstop)</p>
                   </div>
                   <div class="col-4 align-self-center text-end">
                       <p class="p-0 m-0">1 left at</p>
                       <h3>$117</h3>
                       <p class="p-0 m-0 fs-6">Rountrip per Traveler</p>
                   </div>
               </div>
            </div>
            <div class="flight mt-4 flight-active p-3">
                <div class="row">
                    <div class="col-6">
                        <h5 class="fs-6 fw-bold">4:00pm-6:00pm</h5>
                        <p class="p-0 m-0">Nairobi(NBO)-Mombasa(MBA)</p>
                        <div class="mt-2">
                            <img src="images/kenya-airways-logo.png" class="img-fluid float-start me-2"
                                style="width:20px">
                            <p class="">Kenya Airways</p>
                        </div>
                    </div>
                    <div class="col-2 align-self-center">
                        <p class="fs-6">1h 0m (Nonstop)</p>
                    </div>
                    <div class="col-4 align-self-center text-end">
                        <p class="p-0 m-0">1 left at</p>
                        <h3>$117</h3>
                        <p class="p-0 m-0 fs-6">Rountrip per Traveler</p>
                    </div>
                </div>
             </div>
             <div class="flight mt-4  p-3">
                <div class="row">
                    <div class="col-6">
                        <h5 class="fs-6 fw-bold">4:00pm-6:00pm</h5>
                        <p class="p-0 m-0">Nairobi(NBO)-Mombasa(MBA)</p>
                        <div class="mt-2">
                            <img src="images/kenya-airways-logo.png" class="img-fluid float-start me-2"
                                style="width:20px">
                            <p class="">Kenya Airways</p>
                        </div>
                    </div>
                    <div class="col-2 align-self-center">
                        <p class="fs-6">1h 0m (Nonstop)</p>
                    </div>
                    <div class="col-4 align-self-center text-end">
                        <p class="p-0 m-0">1 left at</p>
                        <h3>$117</h3>
                        <p class="p-0 m-0 fs-6">Rountrip per Traveler</p>
                    </div>
                </div>
             </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-end">
                        <button type="button" class="btn btn-link">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <p>4:00pm-6:00pm (Nonstop)</p>
                    <div class="mt-2">
                        <img src="images/kenya-airways-logo.png" class="img-fluid float-start me-2"
                            style="width:40px">
                        <h5 class="fs-6 align-self-center">Kenya Airways</h5>
                    </div>
                    <div class="mt-4">
                    <button class="btn btn-link text-decoration-none fw-bold fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                             Show details <i class="fa-solid fa-angle-down ms-2"></i>
                    </button>
                    <div class="collapse small-details" id="collapseExample">
                       <h5 class="fs-6 fw-bold"> <i class="fa-solid fa-plane-departure"></i> 5:00pm-Nairobi</h6>
                        <small>Jomo Kenyatta International Airport</small> <br>
                        <small>1hour flight</small> <br>
                        <small>Kenya Airways 610</small><br>
                        <small>Boeng 737-8000</small><br>
                        <small>Economy/Coach(V)</small>
                        <h5 class="fs-6 fw-bold"> <i class="fa-solid fa-plane-arrival"></i> 6:00pm-Mombasa</h6>
                            <small>Mombasa Intl(MBA)</small>
                    </div>
                    <div class="card card-body mt-3">
                        <h2 class="fw-bold">$ 117</h2>
                        <p class="p-0 m-0">Roundtrip for 1 traveler</p>
                        <p class="fs-6 fw-bold">Cabin: <span>Economy</span></p>
                        <h6>Bags</h6>
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-check"></i> Carry-on bag included</li>
                            <li><i class="fa-solid fa-check"></i> First checked bag included</li>
                        </ul>

                        <button type="button" class="btn btn-primary">
                            Book
                        </button>

                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
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
</body>
</html>
