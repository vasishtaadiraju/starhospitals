<div class="banner @if ($imgurl == 'condition')
banner--condition 
@endif @if (request()->route()->getName() == 'doctor') banner--doctor-profile @endif" >
    <img class="banner__image" src="" data-src="{{$imgurl}}"  alt="">
    <div class="banner__content @if (request()->route()->getName() == 'doctor')
        banner__content--blue
    @endif">

        <div class="banner__content__wrapper">
            <h1 class="section-heading">{{$text}}</h1>

            {!!$breadcrum!!}
        </div>
        
        {{-- <div class="banner__breadcrum">
            <a href="#">Home</a>
            <span>❯</span>
            <a href="#">About Us</a>
        </div> --}}
    </div>
</div>