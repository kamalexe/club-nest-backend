<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <title>ClubNest HTML Event Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/tooplate-artxibition.css') }}">


    <script>
        const html = document.querySelector('html');
        html.setAttribute('data-bs-theme', 'dark');

        document.addEventListener('DOMContentLoaded', () => {
            // --- Create LightBox
            const galleryGrid = document.querySelector(".gallery-grid");
            const links = galleryGrid.querySelectorAll("a");
            const imgs = galleryGrid.querySelectorAll("img");
            const lightboxModal = document.getElementById("lightbox-modal");
            const bsModal = new bootstrap.Modal(lightboxModal);
            const modalBody = lightboxModal.querySelector(".lightbox-content");

            function createCaption(caption) {
                return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
            }

            function createIndicators(img) {
                let markup = "",
                    i, len;

                const countSlides = links.length;
                const parentCol = img.closest('.col');
                const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

                for (i = 0, len = countSlides; i < len; i++) {
                    markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
                }

                return markup;
            }

            function createSlides(img) {
                let markup = "";
                const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

                for (const img of imgs) {
                    const imgSrc = img.closest('.gallery-item').getAttribute("href");
                    const imgAlt = img.getAttribute("alt");

                    markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
                }

                return markup;
            }

            function createCarousel(img) {
                const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

                modalBody.innerHTML = markup;
            }

            for (const link of links) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const currentImg = link.querySelector("img");
                    const lightboxCarousel = document.getElementById("lightboxCarousel");

                    if (lightboxCarousel) {
                        const parentCol = link.closest('.col');
                        const index = [...parentCol.parentElement.children].indexOf(parentCol);

                        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
                        bsCarousel.to(index);
                    } else {
                        createCarousel(currentImg);
                    }

                    bsModal.show();
                });
            }

            // --- Support Fullscreen
            const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
            const fsExit = document.querySelector(".btn-fullscreen-exit");

            function enterFS() {
                lightboxModal.requestFullscreen().then({}).catch(err => {
                    alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                });
                fsEnlarge.classList.toggle("d-none");
                fsExit.classList.toggle("d-none");
            }

            function exitFS() {
                document.exitFullscreen();
                fsExit.classList.toggle("d-none");
                fsEnlarge.classList.toggle("d-none");
            }

            fsEnlarge.addEventListener("click", (e) => {
                e.preventDefault();
                enterFS();
            });

            fsExit.addEventListener("click", (e) => {
                e.preventDefault();
                exitFS();
            });
        })
    </script>
    @livewireStyles
</head>

<body>
    <!-- ***** Pre HEader ***** -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <span>Hey! The Show is Starting in 15 Days.</span>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="text-button">
                        <a href="{{ Route('contactus') }}">Contact Us Now! <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">Club<em>Nest</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"
                                    class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('events.index') }}"
                                    class="{{ request()->routeIs('events.index') ? 'active' : '' }}">Shows & Events</a>
                            </li>
                            <li>
                                <a href="{{ route('club.index') }}"
                                    class="{{ request()->routeIs('club.index') ? 'active' : '' }}">Our Nest
                                </a>
                            </li>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->





    <main>
        @yield('content')
    </main>
    <!-- *** Subscribe *** -->
    <div class="subscribe" id = "subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-9">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Institute of Engineering & Technology</h4>
                        <span>Kandari, Agra,<br> Uttar Pradesh, India</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                            <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>Dr Bhimrao Ambedkar University, Agra</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2024 ClubNest

                                    <br>Design: <a rel="nofollow" href="https://ietagra.org/" target="_parent">IET
                                        Khandari</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>Club<em>Nest</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="/" class="active">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('events.index') }}">Shows & Events</a></li>
                                        <li><a href="{{ route('club.index') }}">Our Nest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @livewireScripts
    <!-- jQuery -->
    <script src="{{ asset('front/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('front/js/popper.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('front/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('front/js/mixitup.js') }}"></script>
    <script src="{{ asset('front/js/accordions.js') }}"></script>
    <script src="{{ asset('front/js/owl-carousel.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('front/js/custom.js') }}"></script>

    <script>
        const html = document.querySelector('html');
        html.setAttribute('data-bs-theme', 'dark');

        document.addEventListener('DOMContentLoaded', () => {
            // --- Create LightBox
            const galleryGrid = document.querySelector(".gallery-grid");
            const links = galleryGrid.querySelectorAll("a");
            const imgs = galleryGrid.querySelectorAll("img");
            const lightboxModal = document.getElementById("lightbox-modal");
            const bsModal = new bootstrap.Modal(lightboxModal);
            const modalBody = lightboxModal.querySelector(".lightbox-content");

            function createCaption(caption) {
                return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
            }

            function createIndicators(img) {
                let markup = "",
                    i, len;

                const countSlides = links.length;
                const parentCol = img.closest('.col');
                const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

                for (i = 0, len = countSlides; i < len; i++) {
                    markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
                }

                return markup;
            }

            function createSlides(img) {
                let markup = "";
                const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

                for (const img of imgs) {
                    const imgSrc = img.closest('.gallery-item').getAttribute("href");
                    const imgAlt = img.getAttribute("alt");

                    markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
                }

                return markup;
            }

            function createCarousel(img) {
                const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

                modalBody.innerHTML = markup;
            }

            for (const link of links) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const currentImg = link.querySelector("img");
                    const lightboxCarousel = document.getElementById("lightboxCarousel");

                    if (lightboxCarousel) {
                        const parentCol = link.closest('.col');
                        const index = [...parentCol.parentElement.children].indexOf(parentCol);

                        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
                        bsCarousel.to(index);
                    } else {
                        createCarousel(currentImg);
                    }

                    bsModal.show();
                });
            }

            // --- Support Fullscreen
            const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
            const fsExit = document.querySelector(".btn-fullscreen-exit");

            function enterFS() {
                lightboxModal.requestFullscreen().then({}).catch(err => {
                    alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                });
                fsEnlarge.classList.toggle("d-none");
                fsExit.classList.toggle("d-none");
            }

            function exitFS() {
                document.exitFullscreen();
                fsExit.classList.toggle("d-none");
                fsEnlarge.classList.toggle("d-none");
            }

            fsEnlarge.addEventListener("click", (e) => {
                e.preventDefault();
                enterFS();
            });

            fsExit.addEventListener("click", (e) => {
                e.preventDefault();
                exitFS();
            });
        })
    </script>
</body>
