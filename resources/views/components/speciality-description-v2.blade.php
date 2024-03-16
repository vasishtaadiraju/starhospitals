<div class="about-speciality speciality-description-v2-root"  >
    <div class="about-speciality__image-wrapper" >
        <div class="about-speciality__image-wrapper__image">
            {{-- {{ config('variables.asset') . $content->description_image }} --}}
            <img  class="" src=""
                data-src=" @if ($content->page_type == 'Coe' || $content->page_type == 'speciality') {{ config('variables.asset') . $content->description_image }}
                    @elseif($content->page_type == 'Branch') {{ config('variables.asset') . $content->about_image_desktop }} @else  {{ config('variables.asset') . $content->description_image }} @endif"
                alt="{{ $content->about_image_desktop_alt }}">

        {{-- <img src="" data-src="{{Vite::asset('resources\images\speciality\spec-description.png')}}" alt=""> --}}
                
            
        </div>
        

    </div>
    <div class="about-speciality__content" >
        <x-gap/>
        <h2 class="about-speciality__content__heading section-heading" id="overview">{{ isset($content->name) ?  $content->name : $content->title }}</h2>
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

        <div class="about-speciality__content__description" >
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
