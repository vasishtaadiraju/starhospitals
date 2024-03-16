<x-heading :title="'Why Choose Us'" :description="''" />
<div class="choose-us ">
    @if($content != null)
        @if(isset($content->choose1_icon) && $content->choose1_icon != null)
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                {{--  <img  src="" data-src="{{Vite::asset('resources/images/Icons/medical 1.png')}}" alt="">  --}}
                {!!$content->choose1_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose1_title }}</h3>
                <p>{{$content->choose1_description}}</p>
            </div>
        </div>
        @endif
        @if(isset($content->choose2_icon) && $content->choose2_icon != null)
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                {{--  <img  src="" data-src="{{Vite::asset('resources/images/Icons/Group.png')}}" alt="">  --}}
                {!!$content->choose2_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose2_title }}</h3>
                <p>{{$content->choose2_description}}</p>
            </div>
        </div>
        @endif
        @if(isset($content->choose3_icon) && $content->choose3_icon != null)
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                {{--  <img  src="" data-src="{{Vite::asset('resources/images/Icons/Group 2.png')}}" alt="">  --}}
                {!!$content->choose3_icon !!}
            </div>
            <div>
                <h3>{{ $content->choose3_title }}</h3>
                <p>{{$content->choose3_description}}</p>
            </div>
        </div>
        @endif
    @endif
</div>
