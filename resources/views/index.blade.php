<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assetsh/img/icon.png') }}" rel="icon">
    <link href="{{ asset('assetsh/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('Assetsh/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assetsh/css/style.css') }}" rel="stylesheet">

</head>
<body>
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index1.html">HappilyEver<br><span style="font-family: 'Brush Script MT', cursive;">for weddings</span></a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="route('landingpage')">Home</a></li>
                    <li><a class="nav-link scrollto" href="#couple">Happy Couple</a></li>
                    <li><a class="nav-link scrollto" href="#photo">photos</a></li>
                    <li><a class="nav-link scrollto " href="#venues">Venues</a></li>
                    <li><a class="nav-link scrollto" href="#rvsp">Rvsp</a></li>
                    <li><a class="nav-link scrollto" href="#support">Support Us</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            @auth
            <a href="{{ route('dashboard') }}" class="Login-btn scrollto">Dashboard</a>

            @else
            
            <a href="{{ route('login') }}" class="Login-btn scrollto">Login</a>

            @endauth


        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div>
                <div class="icon-box">
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-xl-6 col-lg-8">
                            <h1>Rami & Laila</h1>
                            <h2>Are Getting Married</h2>
                            <h3><span style="font-family: 'Brush Script MT', cursive"> February 25, 2022</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <p class="m2-txt1 txt-center p-b-48">
                Countdown to Wedding Cermony
            </p>

            <div class="flex-w flex-c-m cd100 p-b-33">
                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 days" id="days"></span>
                    <span class="s2-txt1">Days</span>
                </div>

                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 hours" id="hours"></span>
                    <span class="s2-txt1">Hours</span>
                </div>

                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 minutes" id="minutes"></span>
                    <span class="s2-txt1">Minutes</span>
                </div>

                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 seconds" id="seconds"></span>
                    <span class="s2-txt1">Seconds</span>
                </div>
            </div>


        </div>
    </section>
    <!-- End Hero -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- COUPLE-------------------------------------------------------------------------->
      <section class="couple" id="couple">
        <div class="container">
            <h2 class="s-title text--colored">Happy Couple</h2>
            <div class="couple__groom">
                <div class="couple__image couple__image-groom--left border--colored"></div>
                <div class="couple__text couple__text--right">
                    <div class="couple__text-head text--colored">
                        <h3 class="couple__title text--colored">Rami</h3><span class="couple__subtitle text--colored">the Groom</span>
                    </div>
                    <div class="couple__text-body">
                        <p class="couple__descr">I am so happy and honored to have you at my wedding, can't wait to see you on Friday 25th of February, see you there and welcome.</p>
                        <p class="couple__descr"> ,BR</p>
                    </div>
                </div>
            </div>
            <div class="couple__bride">
                <div class="couple__image couple__image-bride--right border--colored"></div>
                <div class="couple__text couple__text--left">
                    <div class="couple__text-head text--colored">
                        <h3 class="couple__title text--colored">Laila</h3><span class="couple__subtitle text--colored">the Bride</span>
                    </div>
                    <div class="couple__text-body">
                        <p class="couple__descr">I am so happy and excited to have you on my special day, bring along your family and friends. Don't forget to wear warm clothes it will be a little windy. Can't wait to see you on Friday 25th of February pin the date and welcome.</p>
                        <p class="couple__descr"> ,BR</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Swiper -->
     <div class="swiper mySwiper" id="photo">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\p1.png') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\p2.png') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\p3.png') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\p4.png') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\p6.png') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('Assetsh\img\groom3.jpg') }}"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      

    <!-- VENUE-------------------------------------------------------------------------->
    <section class="venues" id="venues">
        <div class="container">
            <h2 class="s-title text--colored"> Venues</h2>
            <div class="container-sm">
                <div class="venues__ceremony">
                    <div class="ceremony__card venues__card border--colored">
                        <div class="venues__card-head text--colored">
                            <h3 class="venues__card-title text--colored"> Wedding Ceremony</h3>
                        </div>
                        <div class="venues__card-info">
                            <div class="venues__card-block"><span class="venues__card-label mrg">When</span>
                                <time class="venues__card-data">7:00pm, February 25, 2022</time>
                            </div>
                            <div class="venues__card-block"><span class="venues__card-label">Where</span><span class="venue__card-data">Le Royal Hotel & Resorts, Zahran St, Amman 11118</span></div>
                        </div><a class="venues__card-link" href="#">See on map</a>
                    </div>
                </div>

                <div class="address__map-container--left address__map">
                    <div class="address__map--ceremony map" id="address__map--ceremony">
                        <iframe width="500" height="400" id="address__map--ceremony map" id="address__map--ceremony" src="https://maps.google.com/maps?q=Zahran%20St,%20Amman%2011118%20Le%20Royal%20Hotel%20&%20Resorts%20Amman,%20address&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0">
      </iframe>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                        <style>
                            .address__map--ceremony.address__map--ceremony {
                                overflow: hidden;
                                background: none!important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div>


    </section>

       
      


    <!--  RSVP  ------------------------------------------------------------------------>
    <section class="rvsp" id="rvsp">
        <div class="container">
            <div class="rvsp__forrm-wrap">

                @if (Session::has('success message'))
                <div class="alert alert-success">
                    <p>
                        Leave Comment Successfuly, <a href="#support"> Please Support Us </a>
                    </p>
                </div>
                @endif

                <form class="rvsp__form" action="{{ route('storedata') }}" method="POST">
                    @csrf
                    <h2 class="rvsp__title text--colored">RVSP</h2><span class="rvsp__subtitle text--colored" style="font-family: 'Brush Script MT', cursive">Please reserve before February 25th 2022</span>
                    <div class="rvsp__inputs-group">
                        <div class="form-group iputs__group bmd-form-group">
                            <label class="bmd-label-floating" for="name">Your Name</label>
                            <input class="form-control" type="text" id="name" name="name"  spellcheck="false" 
                            data-ms-editor="true" required>
                            @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group iputs__group bmd-form-group">
                            <label class="bmd-label-floating" for="email">Your E-mail</label>
                            <input class="form-control" name="email" type="email" id="mail" required>
                            @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="rvsp__inputs-group">
                        <div class="form-group iputs__group bmd-form-group">
                            <label class="bmd-label-floating" for="number">Number of Guests</label>
                            <input class="form-control" type="number"  name="numberOfGuests" id="number" required>
                            @error('numberOfGuests')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group iputs__group bmd-form-group">
                            <label class="bmd-label-floating" for="number">I will Attend</label>

                            <select name="attend" class="form-control" required>
                            <option value="Yes" selected>Yes</option>
                            <option value="No">No</option>
                        </select>

                        @error('attend')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror

                    </div>
                    </div>





                    <div class="rvsp__inputs-group rvsp__group--textarea">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating" for="textarea">Your Comment</label>
                            <textarea class="rvsp__textarea form-control" id="textarea" 
                            spellcheck="false" data-ms-editor="true" name="comment"></textarea>
                            @error('comment')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                        <button class="rvsp__btn btn bg--colored" type="submit" >Leave Comment</button>
                    </form>
            </div>
        </div>
    </section>


    <!-- DONATE-------------------------------------------------------------------------->
  <section class="support" id="support">
        <div class="container">
            <div class="support__title-wrap">
                <h2 class="support__title">Want to support us?</h2>
            </div>
            <div class="support__btn-wrap"><span class="support__btn-sescr" style="font-family: 'Brush Script MT', cursive">You can make a donation here</span>
                <a class="btn support__btn bg--colored" 
                style="font-family: 'Brush Script MT', cursive" type="button" 
                href="{{ route('cheackout') }}">
                Donate</a>
            </div>
        </div>
    </section>  





    <!-- FOOTER-------------------------------------------------------------------------->
    <footer class="footer mt-5">
        <div class="footer__content"><span class="footer__name groom text--colored" style="font-family: 'Brush Script MT', cursive">Happily</span>
            <div class="footer__image"><img src="Assetsh/img/G_B.png" width="195" hight="115" alt="G&B"></div>
            <span class="footer__name bride text--colored" style="font-family: 'Brush Script MT', cursive">Ever</span>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('Assetsh/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Assetsh/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Assetsh/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Assetsh/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('Assetsh/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Assetsh/js/main.js') }}"></script>
    <script>
        function validateForm() {
            var x = document.forms["formLogin"]["mobileNumber"].value;
            if (x == "" || x == null) {
                alert("Name must be filled out");
                return false;
            }
        }
        var countDownDate = new Date("Feb 25, 2022 15:37:25").getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

        }, 1000);
    </script>

     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper(Container) -->
     <script>
       var swiper = new Swiper(".mySwiper", {
         slidesPerView: 'auto',
         spaceBetween: 40,
         centeredSlides: true,
         grabCursor: true,
         loop: true,
        // If you want pagination you can add it
         /*pagination: {
           el: ".swiper-pagination",
           clickable: true,
         },*/
 
         navigation: {
           el: ".swiper-buttons",
           nextEl: ".swiper-button-next",
           prevEl: ".swiper-button-prev",
         },
       });
     </script>



</body>
</html>