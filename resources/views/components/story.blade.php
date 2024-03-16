<div class="story">
    @if($content != null)
    @if(isset($content->story1_desktop) && $content->story1_desktop != null)
    <div class="story__content">
        {{--  <img src="" data-src="{{Vite::asset('resources/images/story/Rectangle 148.png')}}" alt="">  --}}
        {!! $content->story1_desktop !!}
        <div class="story__content__text">
            <h1>{{ $content->story1_title }}</h1>
            <p>{{ $content->story1_description }}</p>
           <a target="_blank" href="{{$content->story1_cta}}"> <button>View Story</button> </a>

        </div>

    </div>
    @endif
    @if(isset($content->story2_desktop) && $content->story2_desktop != null)
    <div class="story__content">
         <img src="" data-src="{{Vite::asset('resources/images/story/Rectangle 149.png')}}" alt=""> 
        {!! $content->story2_desktop !!}
        <div class="story__content__text">
            <h1>{{ $content->story2_title }}</h1>
            <p>{{ $content->story2_description }}</p>
           <a target="_blank" href="{{$content->story2_cta}}"> <button>View Story</button></a>
        </div>

    </div>
    @endif
    @endif
</div>
