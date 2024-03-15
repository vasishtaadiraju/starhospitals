<div class="ui-background">
    <div class="about">
        <div class="about__image-wrapper ctg-video">
            <h2 class="about__content__heading about__content__heading--mobile section-heading" style="padding-top: 0px">About Star Hospitals</h2>

            {{-- <img class="about__image__dots-left" src="" data-src="{{ Vite::asset('resources/images/Icons/Dots(1).png') }}"
                alt="">

            <img class="about__image__dots-right" src="" data-src="{{ Vite::asset('resources/images/Icons/Dots(1).png') }}"
                alt=""> --}}

            <img class="about__image play-video" data-video-link="{{$content->about_video_link}}" src="" data-src="{{ config('variables.asset') . $content->about_thumbnail }}" alt="{{$content->about_thumbnail_alt}}">




        </div>
        <div class="about__content">
            <h2 class="about__content__heading section-heading">About Star Hospitals</h2>
            <p>{!!$content->about_description!!}</p>
            <a href="{{ route('about') }}" class="about__content__read-more">Know More</a>
        </div>
    </div>
</div>
