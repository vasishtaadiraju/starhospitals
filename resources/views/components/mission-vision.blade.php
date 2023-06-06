<div class="vision-mission">
    <div class="vision-mission__image-container">
        <img class="vision-mission__image-first" src="" data-src="{{Vite::asset('resources/images/vision-mission/vision.png')}}" alt="">
        <img class="vision-mission__image-second" src="" data-src="{{Vite::asset('resources/images/vision-mission/mission.png')}}" alt="">
        <img class="vision-mission__dot-first" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt=""> 
        <img class="vision-mission__dot-second" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
    </div>
    <div class="vision-mission__content-container">
        <div class="vision-mission__card">
            <h2 class="section-heading">{{$about->vision_title}}</h2>
            <p>{{$about->vision_description}}</p>
        </div>
        <div class="vision-mission__card">
            <h2 class="section-heading">{{$about->mission_title}}</h2>
            <p>{{$about->mission_description}}</p>
        </div>
    </div>
</div>


{{-- <div class="vision-mission">
    <div class="vision-mission__image-container">
        <img class="vision-mission__image-first" src="" data-src="{{Vite::asset('resources/images/vision-mission/vision.png')}}" alt="">
        <img class="vision-mission__image-second" src="" data-src="{{Vite::asset('resources/images/vision-mission/mission.png')}}" alt="">
        <img class="vision-mission__dot-first" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
        <img class="vision-mission__dot-second" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
    </div>
    <div class="vision-mission__content-container">
        <div class="vision-mission__card">
            @if(!empty($about->vision_title))
            <h2>{{ $about->vision_title }}</h2>
            @endif
            @if(!empty($about->vision_description))
            <p>{!! $about->vision_description !!}</p>
            @endif
        </div>
        <div class="vision-mission__card">
            @if(!empty($about->mission_title))
            <h2>{{ $about->mission_title }}</h2>
            @endif
            @if(!empty($about->mission_description))
            <p>{!! $about->mission_description !!}</p>
            @endif
        </div>
    </div>
</div> --}}
