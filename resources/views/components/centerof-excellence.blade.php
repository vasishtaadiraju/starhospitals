<x-heading :title="'Centers of Excellence'" :description="''" />

<div class="centerofexcellence centerofexcellence-slider">

    @foreach ($coes as $coe)
    <div class="centerofexcellence__cards">
        {!! $coe->icon_image !!}
                <p class="centerofexcellence__cards__title">{{ $coe->name }}</p>
    </div>
    @endforeach
    
    {{-- <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div>
    <div class="centerofexcellence__cards">
        <img  src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt="">
                <p class="centerofexcellence__cards__title">Cardiac Sciences</p>
    </div> --}}
</div>
