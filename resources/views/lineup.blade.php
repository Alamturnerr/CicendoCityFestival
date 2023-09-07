@extends('layout.app')

@section('content')
    <img src="images/lineup1.png" alt="LineUP Header Mobile" class="d-mobile w-50 mx-auto d-block bouncing-image" style="margin-top: 10px; margin-bottom: 10px;">
    <div class="container line">
        <div class="row">
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Gugun Blues Shelter', 'Gugun Blues Shelter (sering kali disingkat GBS) adalah sebuah grup musik asal Indonesia ber-aliran blues, yang dibentuk di Jakarta, Indonesia pada tahun 2004. Para anggotanya saat ini antara lain Gugun (gitar), Fajar (bass) dan Bowie (drum). Mereka telah merilis sembilan album.', '{{ asset('images/gbs1.jpg') }}')">
                    <img src="{{ asset('images/gbs1.jpg') }}" alt="Performer 1" style="width: 100%;">
                </a>
            </div>
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 2', 'Description for Performer 2.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/panturas.jpeg') }}" alt="Performer 2" style="width: 100%;">
                </a>
            </div>
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 3', 'Description for Performer 3.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/panturas.jpeg') }}" alt="Performer 3" style="width: 100%;">
                </a>
            </div>
        </div>
    </div>
    <div class="container line">
        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 89', 'Description for Performer 1.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/b1.jpg') }}" alt="Performer 1" style="width: 100%;">
                </a>
            </div>
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 2', 'Description for Performer 2.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/b2.jpg') }}" alt="Performer 2" style="width: 100%;">
                </a>
            </div>
            <div class="col-md-4 my-2" style="">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 3', 'Description for Performer 3.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/b3.jpg') }}" alt="Performer 3" style="width: 100%;">
                </a>
            </div>
        </div>
    </div>
    <!-- Popup -->
    <div class="popup-overlay" id="popup1" onclick="closePopup()">
        <div class="popup-content" style="background-color: #F7E987; text-align: center;">
            <a class="close" onclick="closePopup()" style="cursor: pointer;"></a>
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <img id="imgBanner" src="{{ asset('images/panturas.jpeg') }}" style="max-width: 200px; margin-top: 10px;">
                <h2 id="titleArtist" style="font-weight: bold; margin-top: 10px;"></h2>
                <div id="contentArtist" class="content mt-4"></div>
                <p id="description" style="margin-top: 10px;"></p>
            </div>
        </div>
    </div>
    
    <script>
        function openPopup(title, content, imageUrl) {
            document.getElementById('titleArtist').innerHTML = title;
            document.getElementById('contentArtist').innerHTML = content;
            document.getElementById('imgBanner').src = imageUrl;
            document.getElementById('popup1').style.display = 'flex'; // Display overlay
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }
        
        function closePopup() {
            document.getElementById('popup1').style.display = 'none';
            document.body.style.overflow = 'auto'; // Allow scrolling
        }
        

        // Close popup when clicking outside
        window.addEventListener('click', function(event) {
            var popup = document.getElementById('popup1');
            if (event.target === popup) {
                closePopup();
            }
        });
    </script>
@endsection