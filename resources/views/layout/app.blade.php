<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>Cicendo City Festival</title>
    
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Tautan ke CSS kustom Anda (jika ada) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="my-2" href="/">
               {{-- <img src="{{ asset('img/user/logo-navbar.png' )}}" alt="logo-navbar">  comment --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: black">
                <span class="fas fa-bars" style="color: black"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto py-2">
                    <li class="nav-item"><a href="/" class="nav-link mx-5">Home</a></li>
                    <li class="nav-item"><a href="/profile" class="nav-link mx-5">About Us</a></li>
                    <li class="nav-item"><a href="/lineup" class="nav-link mx-5">Line Up</a></li>
                    <li class="nav-item"><a href="/gallery" class="nav-link mx-5">Gallery</a></li>
                    <li class="nav-item"><a target="_blank" class="nav-link btn btn-danger btn-sm contact-us mx-5" href="mailto:cicendocity@gmail.com">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    
    <main>
        @yield('content')
    </main>

    <footer class="footer text-white">
        <div class="small pt-4">
            <div class="container">
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-6 col-lg-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
                        <p>
                            Cicendo City
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-6 col-lg-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p>
                            <i class="fas fa-envelope mr-2"></i> cicendocity2019@gmail.com
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-6 col-lg-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow our social networks</h6>
                        <a target="_blank" href="https://www.tiktok.com/@cicendocity_?lang=id-ID" class="footer-icon text-black"><i class="fab fa-lg fa-tiktok mx-2"></i></a>
                        <a target="_blank" href="https://twitter.com/cicendocity" class="footer-icon text-black"><i class="fab mb-3 fa-lg fa-twitter mx-2"></i></a>
                        <a target="_blank" href="https://www.instagram.com/cicendocityfestival/" class="footer-icon text-black"><i class="fab mb-3 fa-lg fa-instagram mx-2"></i></a>
                        <a target="_blank" href="https://www.instagram.com/cicendocityfestival/" class="footer-icon text-black"><i class="fab mb-3 fa-lg fa-whatsapp mx-2"></i></a>
                    </div>

                    <hr class="w-100 clearfix" />
                    <div class="row d-flex align-items-center justify-content-center text-center">
                        <div class="col-md-12">
                            <p class="small">
                                Copyright © {{ date('Y') }} <a target="_blank" href="https://www.instagram.com/cicendocityfestival/">Cicendo City Festival.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tautan ke Bootstrap JavaScript (opsional, jika Anda menggunakan komponen JS Bootstrap) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
