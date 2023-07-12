<div class="about-speciality" id="overview">
    <div class="about-speciality__image-wrapper">
        <div class="about-speciality__image-wrapper__image">
            {{-- {{ config('variables.asset') . $content->description_image }} --}}
            <img class="" src=""
                data-src=" @if ($content->page_type == 'Coe' || $content->page_type == 'speciality') {{ config('variables.asset') . $content->description_image }}
                    @elseif($content->page_type == 'Branch') {{ config('variables.asset') . $content->about_image_desktop }} @else  {{ config('variables.asset') . $content->description_image }} @endif"
                alt="{{ $content->about_image_desktop_alt }}">
                <svg class="about-speciality__image-wrapper__dot-right" width="115" height="75" viewBox="0 0 115 75"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="62.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="72.5" r="2.5" fill="#004E9E" />
            </svg>
            <svg class="about-speciality__image-wrapper__dot-left" width="115" height="75" viewBox="0 0 115 75"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="62.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="102.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="82.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="62.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="112.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="92.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="72.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="42.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="22.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="2.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="52.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="2.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="42.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="22.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="62.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="32.5" cy="72.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="12.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="52.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="32.5" r="2.5" fill="#004E9E" />
                <circle cx="12.5" cy="72.5" r="2.5" fill="#004E9E" />
            </svg>
        </div>
        

    </div>
    <div class="about-speciality__content">
        <h2 class="about-speciality__content__heading section-heading">{{ isset($content->name) ?  $content->name : $content->our_specialist_text }}</h2>
        @if (isset($content->branches))
            <div class="about-speciality__content__links">

                @foreach ($content->branches as $item)
                    <a href="{{route('branch',$item->slug)}}" class="">{{ $item->name }}</a> 
                    @if ($loop->index < count($content->branches) - 1)
                            <span>|</span> 
                        @endif
                @endforeach
                {{-- | <a href="#" class="">Banjara Hills</a> --}}
            </div>
        @endif

        <div class="about-speciality__content__description">
            @if ($content->page_type == 'Coe' || $content->page_type == 'speciality')
                {!! $content->description !!}
            @elseif($content->page_type == 'Branch')
                {!! $content->about !!}
            @else
            {!! $content->description !!}

            @endif
        </div>
    </div>
</div>
