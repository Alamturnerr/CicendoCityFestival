@extends('layout.app')

@section('content')
    <div id="carouselExample" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/home_1.jpg') }}" class="d-block w-100 image" style="height: 620px;" alt="Performer 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/contoh3.jpg') }}" class="d-block w-100 image" style="height: 620px;" alt="Performer 2">
            </div>
            <!-- Tambahkan lebih banyak item carousel sesuai kebutuhan -->
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    
    <div id="carouselExampleMobile" class="carousel slide d-md-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/homemobile_1.jpg') }}" class="d-block w-100 image-mobile" style="height: 570.91px; object-fit: cover;" alt="Performer 1 Mobile">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/homemobile_1.jpg') }}" class="d-block w-100 image-mobile" style="height: 570.91px; object-fit: cover;" alt="Performer 2 Mobile">
            </div>
            <!-- Add more carousel items for mobile version as needed -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleMobile" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleMobile" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    
    <div class="marquee-content">
        <div class="text-marquee-container">
            <marquee behavior="scroll" direction="left" class="text-marquee" scrollamount="15" style="background-image: url('images/background_marquee2.jpg'); ">
                <span> WELCOME TO CICENDO CITY FESTIVAL</span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WHERE THE YOUTH HAVE </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> A MORE TALENTED! </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WELCOME TO CICENDO CITY FESTIVAL</span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WHERE THE YOUTH HAVE </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> A MORE TALENTED! </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WELCOME TO CICENDO CITY FESTIVAL</span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WHERE THE YOUTH HAVE </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> A MORE TALENTED! </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WELCOME TO CICENDO CITY FESTIVAL</span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WHERE THE YOUTH HAVE </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> A MORE TALENTED! </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WELCOME TO CICENDO CITY FESTIVAL</span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> WHERE THE YOUTH HAVE </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
                <span> A MORE TALENTED! </span>
                <span class="marquee-dots" style="background-image: url('images/DOTS.png')"></span>
            </marquee>
        </div>
    </div>
    <div class="ticket-countdown-container">
        <div class="countdown-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
            <h1>READY TO GO IN :</h1>
        </div>
        <div class="countdown-container">
            <div class="countdown" id="countdown">
                <div class="countdown-item">
                    <span class="countdown-number" id="days"></span>
                    <span class="countdown-label">Days</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="hours"></span>
                    <span class="countdown-label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="minutes"></span>
                    <span class="countdown-label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="seconds"></span>
                    <span class="countdown-label">Seconds</span>
                </div>
            </div>
        </div>
        <div class="ticket-container">
            <div class="ticket-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
                <h1>Tiket Information</h1>
            </div>
            <div class="ticket-content" style="display: flex; flex-direction: column; align-items: center;">
                <a href="https://tiptip.co/" target="_blank">
                    <img src="{{ asset('images/buyhere.png')}}" alt="Tiket Image" style="width: 200px; height: auto;">
                </a>
                <p>Get your tickets now!</p>
            </div>
        </div>
    </div>
    
    <div class="venue-container">
        <div class="venue-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
                <h1>Venue Information</h1>
            </div>            
            <div class="container venue-content" style="display: flex; flex-direction: column;">
                <div class="venue-image" style="margin: 20px 0; margin-left: 20 px; margin right: 20px;">
                    <img src="{{ asset('images/venue-information.png')}}" alt="Venue Image" style="width: 100%; max-width: 100%;">
                </div>
                <div class="venue-details">
                    <h2>Location</h2>
                    <p>Jl. Aceh, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung.</p>
                    <h2>Access</h2>
                    <p>Located in the heart of Bandung, easily accessible by public transportation.</p>
                </div>
                <div class="venue-map" style="margin: 20px 0; margin-left: 20 px; margin right: 20px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.227697842678!2d107.61396361433128!3d-6.917589895018696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1cf52d83325%3A0x997afe80b7e669f7!2sJl.%20Aceh%203-21%2C%20Babakan%20Ciamis%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040117%2C%20Indonesia!5e0!3m2!1sen!2s!4v1629864940495!5m2!1sen!2s" width="100%" height="500" style="border:0; max-height: 80vh; " allowfullscreen="" loading="lazy" ></iframe>
                </div>
            </div>
        </div>
        <!-- Spotify Playlist section -->
        <div class="container spotify-playlist-container">
            <div class="spotify-playlist-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
                <h1>Spotify Playlist</h1>
            </div>
            <div class="spotify-playlist-embed" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                <iframe src="https://open.spotify.com/embed/playlist/4VMIdHgQPBMe8FoaW54YwH" width="100%" height="640" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
        <!-- Organized By section -->
    {{-- <div class="organized-by-container">
        <div class="organized-by-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
            <h1>Organized By</h1>
        </div>
        <div class="organized-by-details" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('images/sponsor1.jpg') }}" alt="Organized By Logo" class="organized-by-logo" style="width: 150px">
            <!-- Add more details about the organizer here -->
        </div>
    </div>

    <!-- Sponsored By section -->
    <div class="sponsored-by-container">
        <div class="sponsored-by-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
            <h1>Sponsored By</h1>
        </div>
        <div class="sponsored-by-list" style="display: flex; justify-content: center; align-items: center;">
            <!-- Add images or logos of sponsors here -->
            <img src="{{ asset('images/sponsor2.png') }}" alt="Sponsor 1" class="sponsored-by-logo" style="width: 150px; margin-right: 10px;">
            <img src="{{ asset('images/sponsor3.jpg') }}" alt="Sponsor 2" class="sponsored-by-logo" style="width: 150px; margin-left: 10px;">
            <!-- Add more images/logos as needed -->
        </div>
    </div>

    <!-- Powered By section -->
    <div class="powered-by-container">
        <div class="powered-by-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
            <h1>Powered By</h1>
        </div>
        <div class="powered-by-details" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('images/sponsor1.jpg') }}" alt="Powered By Logo" class="powered-by-logo" style="">
            <!-- Add more details about the power sponsor here -->
        </div>
    </div>

    <!-- Media Partners section -->
    <div class="media-partners-container">
        <div class="media-partners-title" style="display: flex; align-items: center; justify-content: center; height: 100px;">
            <h1>Media Partners</h1>
        </div>
        <div class="media-partners-list" style="margin-bottom: 10px; display: flex; justify-content: center; align-items: center;">
            <!-- Add images or logos of media partners here -->
            <img src="{{ asset('images/media1.jpg') }}" alt="Media Partner 1" class="media-partner-logo" style="width: 150px; margin-right: 10px;">
            <img src="{{ asset('images/media2.jpeg') }}" alt="Media Partner 2" class="media-partner-logo" style="width: 150px; margin-left: 10px;">
            <!-- Add more images/logos as needed -->
        </div>
    </div> comment --}}

    <script>
        // Set the date and time of the event
        const eventDate = new Date("2023-10-15T23:59:59").getTime();
    
        const countdown = setInterval(function () {
            const now = new Date().getTime();
            const timeRemaining = eventDate - now;
    
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
    
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
    
            if (timeRemaining < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML = "Event has started!";
            }
        }, 1000);
    </script>
    
@endsection
