@extends('layout.app')

@section('content')
    <h1 class="text-center" style="margin-top: 10px">GALLERY</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 my-4">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 1', 'Description for Performer 1.', '{{ asset('images/gbs1.jpg') }}')">
                    <img src="{{ asset('images/cicendo2019.jpeg') }}" alt="Cicendo City Fest 2019" style="width: 100%;">
                </a>
                <h3 class="mt-2">Cicendo City Festival 4 (2019)</h3>
            </div>
            <div class="col-md-4 my-4">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 2', 'Description for Performer 2.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/cicendo2018.jpg') }}" alt="Cicendo City Fest 2018" style="width: 100%;">
                </a>
                <h3 class="mt-2">Cicendo City Festival 3 (2018)</h3>
            </div>
            <div class="col-md-4 my-4">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 3', 'Description for Performer 3.', '{{ asset('images/panturas.jpeg') }}')">
                    <img src="{{ asset('images/cicendo2015.jpeg') }}" alt="Cicendo City Fest 2015" style="width: 100%;">
                </a>
                <h3 class="mt-2">Cicendo City Festival 2 (2015)</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 my-4">
                <a href="#" onclick="event.preventDefault();event.stopPropagation();openPopup('Performer 1', 'Description for Performer 1.', '{{ asset('images/gbs1.jpg') }}')">
                    <img src="{{ asset('images/gbs1.jpg') }}" alt="Performer 1" style="width: 100%;">
                </a>
                <h3 class="mt-2">Performer 1</h3>
            </div>
        </div>
    </div>
    <!-- Popup -->
    <div id="popup1" class="overlay" onclick="event.preventDefault();event.stopPropagation();closePopup()" style="display: none;">
        <div class="popup">
            <a class="close" onclick="event.preventDefault();event.stopPropagation();closePopup()" style="cursor:pointer">×</a>
            <img id="imgBanner" src="{{ asset('images/panturas.jpeg') }}" style="width:100%;max-width:250px;margin:auto;left:0;right:0;position:absolute;top:20px;">
            <h2 id="titleArtist" style="font-weight:bold; margin-top: 300px;"></h2>
            <div id="contentArtist" class="content mt-4"></div>
            <p id="description" style="margin-top: 10px;"></p>
        </div>
    </div>
    <script>
        function openPopup(title, content, imageUrl) {
            document.getElementById('titleArtist').innerHTML = title;
            document.getElementById('contentArtist').innerHTML = content;
            document.getElementById('imgBanner').src = imageUrl;
            document.getElementById('popup1').style.display = 'block';
            document.getElementById('description').innerHTML = content;
        }

        function closePopup() {
            document.getElementById('popup1').style.display = 'none';
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
