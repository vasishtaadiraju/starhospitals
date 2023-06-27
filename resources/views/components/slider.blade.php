<div class="slider" id="slider-body">

    @if($content->banner1_desktop != null)
    <div class="slider__item">
    
        <img class="slider__image" src="" data-src="{{config('variables.asset').$content->banner1_desktop}}" alt="">

        <div class="slider__item__content">

            <div class="slider__item__content__wrapper">
                <h1 class="section-heading">{{$content->banner1_title}}</h1>

                <p>{{$content->banner1_description}}</p>
                
                <a href="#coe-list"  class="scroll-to-view" class="btn-primary">Explore More</a>
            </div>
           
            </div>

    </div>
    @endif
    @if($content->banner2_desktop != null)
    <div class="slider__item">
        <img class="slider__image" src="" data-src="{{config('variables.asset').$content->banner2_desktop}}" alt="">

        <div class="slider__item__content">
            <div class="slider__item__content__wrapper">
            <h1 class="section-heading">{{$content->banner2_title}}</h1>

                <p>{{$content->banner2_description}}</p>
                
                <a href="{{$content->banner2_link}}" class="btn-primary">Explore More</a>
            </div>
            </div>

    </div>
    @endif
    @if($content->banner3_desktop != null)
    <div class="slider__item">
        <img class="slider__image" src="" data-src="{{config('variables.asset').$content->banner3_desktop}}" alt="">

        <div class="slider__item__content">
            <div class="slider__item__content__wrapper">
            <h1 class="section-heading">{{$content->banner3_title}}</h1>

                <p>{{$content->banner3_description}}</p>
                
                <a href="{{$content->banner3_link}}" class="btn-primary">Explore More</a>
            </div>
            </div>

    </div>
    @endif
    @if($content->banner4_desktop != null)
    <div class="slider__item">
        <img class="slider__image" src="" data-src="{{config('variables.asset').$content->banner4_desktop}}" alt="">

        <div class="slider__item__content">
            <div class="slider__item__content__wrapper">
            <h1 class="section-heading">{{$content->banner4_title}}</h1>

                <p>{{$content->banner4_description}}</p>
                
                <a href="{{$content->banner4_link}}" class="btn-primary">Explore More</a>
            </div>
            </div>

    </div>
    @endif

    
</div>