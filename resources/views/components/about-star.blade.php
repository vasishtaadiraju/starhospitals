
    <div class="about-star">
        <div class="about-star__image-container">
            <img src="{{Vite::asset('resources/images/about-star.png')}}" alt="">
            <svg class="about-star__image-container__play-btn" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.9993 73.3334C21.5898 73.3334 6.66602 58.4094 6.66602 40C6.66602 21.5905 21.5898 6.66669 39.9993 6.66669C58.4087 6.66669 73.3327 21.5905 73.3327 40C73.3327 58.4094 58.4087 73.3334 39.9993 73.3334ZM39.9993 66.6667C54.727 66.6667 66.666 54.7277 66.666 40C66.666 25.2724 54.727 13.3334 39.9993 13.3334C25.2717 13.3334 13.3327 25.2724 13.3327 40C13.3327 54.7277 25.2717 66.6667 39.9993 66.6667ZM35.4057 28.0487L51.6687 38.8907C52.2813 39.299 52.447 40.127 52.0383 40.7397C51.9407 40.886 51.815 41.0117 51.6687 41.1094L35.4057 51.9514C34.793 52.36 33.965 52.1944 33.5567 51.5817C33.4107 51.3627 33.3327 51.1054 33.3327 50.842V29.1581C33.3327 28.4217 33.9297 27.8247 34.666 27.8247C34.9293 27.8247 35.1867 27.9026 35.4057 28.0487Z" fill="white"/>
                </svg>
        </div>
        <div class="about-star__content-container">
            <h2 class="section-heading">14 Years of Star Hospitals</h2>
            <p>We are proud to be an institution with a tradition of high standards of team excellence in patient-centred care, teaching and research. We bring together a dedicated team of expert physicians, nurses and other healthcare professionals to provide the highest standards of medical treatment. At Star Hospitals, our team is dedicated to providing personalized care and support because we understand that good health is essential to living a fulfilling life. Our doctors, nurses and other medical staff are highly trained and experienced and use their expertise to provide the best care possible. We believe everyone deserves to feel good and we strive to make that happen. If you're looking for a team that truly cares about your health and well-being, look no further than Star Hospitals. We are committed to providing you with the care, support and guidance you need to live your best life.</p>
        </div>
    </div>


 {{-- <div class="about-star">
    @if(!empty($about->video_thumbnail))
        <div class="about-star__image-container">
            <img src="{{config('variables.asset').$about->video_thumbnail}}" alt="">
            <svg class="about-star__image-container__play-btn" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.9993 73.3334C21.5898 73.3334 6.66602 58.4094 6.66602 40C6.66602 21.5905 21.5898 6.66669 39.9993 6.66669C58.4087 6.66669 73.3327 21.5905 73.3327 40C73.3327 58.4094 58.4087 73.3334 39.9993 73.3334ZM39.9993 66.6667C54.727 66.6667 66.666 54.7277 66.666 40C66.666 25.2724 54.727 13.3334 39.9993 13.3334C25.2717 13.3334 13.3327 25.2724 13.3327 40C13.3327 54.7277 25.2717 66.6667 39.9993 66.6667ZM35.4057 28.0487L51.6687 38.8907C52.2813 39.299 52.447 40.127 52.0383 40.7397C51.9407 40.886 51.815 41.0117 51.6687 41.1094L35.4057 51.9514C34.793 52.36 33.965 52.1944 33.5567 51.5817C33.4107 51.3627 33.3327 51.1054 33.3327 50.842V29.1581C33.3327 28.4217 33.9297 27.8247 34.666 27.8247C34.9293 27.8247 35.1867 27.9026 35.4057 28.0487Z" fill="white"/>
                </svg>
        </div>
        <div class="about-star__content-container">
            <h2>{{ $about->title }}</h2>
            <p>{!! $about->description !!}</p>
        </div>
        @endif
    </div> --}}



