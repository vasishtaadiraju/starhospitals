<x-heading :title="'Why Choose Us'" :description="''" />
<div class="choose-us">
    <div class="choose-us__benifits">
        @if($content->choose1_icon != null)
        <div class="choose-us__benifits__card">
            <div class="choose-us__benifits__card__icon-wrapper">
                {{-- <img src="{{ config('variables.asset') . $content->choose1_icon }}" alt="">
                 --}}
                 {!!$content->choose1_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose1_title }}</h3>
                <p>{{$content->choose1_description}}</p>
            </div>

        </div>
        @endif
        @if($content->choose2_icon != null)
        <div class="choose-us__benifits__card">
            <div class="choose-us__benifits__card__icon-wrapper">
                {{-- <img src="{{ config('variables.asset') . $content->choose2_icon }}" alt="">
                 --}}
                 {!!$content->choose2_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose2_title }}</h3>
                <p>{{$content->choose2_description}}</p>
            </div>

        </div>
        @endif
        @if($content->choose3_icon != null)
        <div class="choose-us__benifits__card">
            <div class="choose-us__benifits__card__icon-wrapper">
                {{-- <img src="{{ config('variables.asset') . $content->choose3_icon }}" alt="">
                 --}}
                 {!!$content->choose3_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose3_title }}</h3>
                <p>{{$content->choose3_description}}</p>
            </div>

        </div>
        @endif
        @if($content->choose4_icon != null)
        <div class="choose-us__benifits__card">
            <div class="choose-us__benifits__card__icon-wrapper">
                {{-- <img src="{{ config('variables.asset') . $content->choose4_icon }}" alt="">
                 --}}
                 {!!$content->choose4_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose4_title }}</h3>
                <p>{{$content->choose4_description}}</p>
            </div>

        </div>
        @endif
        
        
        


    </div>
    <div class="choose-us__image-container">

        {{-- Dots --}}
        <div class="choose-us__image-wrapper">
            <img src="{{ config('variables.asset') . $content->why_choose_us_image }}" alt="{{$content->why_choose_us_image_alt}}">
        </div>

        <img class="choose-us__image-container__dots-left" src="{{ Vite::asset('resources/images/Icons/Dots(1).png') }}"
            alt="">
        <img class="choose-us__image-container__dots-right"
            src="{{ Vite::asset('resources/images/Icons/Dots(1).png') }}" alt="">
    </div>
</div>
