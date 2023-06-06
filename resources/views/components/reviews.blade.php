<x-heading :title="'Reviews From Our Patients'" :description="$content->review_text" />

<div class="reviews reviews-slider">
    @foreach ($reviews as $item)
    <div class="reviews__card">
        <div class="reviews__card__image-wrapper @if($item->type == 'video') ctg-video @endif">
            @if($item->type == 'video')  <a href="{{$item->video_link}}"> @endif    <img src="{{ config('variables.asset') . $item->thumbnail }}"  alt=""> @if($item->type == 'video') </a>@endif
        </div>
        <div class="reviews__card__text-wrapper">

                <div class="flex-space"></div>
                <div class="reviews__card__text--wrapper__text">
                    <h2 class="reviews__card__name">{{$item->patient_name}}</h2>
                    <p class="reviews__card__text">{{$item->feedback}}</p>
                    <a href="#" class="reviews__card__read-more">Read More</a>
                </div>
        </div>
        
    </div>  
    @endforeach
    
    {{-- <div class="reviews__card">
        <div class="reviews__card__image-wrapper">
                <img src="{{Vite::asset('resources/images/review/review.png')}}" alt="">
        </div>
        <div class="reviews__card__text-wrapper">

                <div class="flex-space"></div>
                <div class="reviews__card__text--wrapper__text">
                    <h2 class="reviews__card__name">MR. Solanki</h2>
                    <p class="reviews__card__text">Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi.</p>
                    <a href="#" class="reviews__card__read-more">Read More</a>
                </div>
        </div>
        
    </div>
    <div class="reviews__card">
        <div class="reviews__card__image-wrapper">
                <img src="{{Vite::asset('resources/images/review/review.png')}}" alt="">
        </div>
        <div class="reviews__card__text-wrapper">

                <div class="flex-space"></div>
                <div class="reviews__card__text--wrapper__text">
                    <h2 class="reviews__card__name">MR. Solanki</h2>
                    <p class="reviews__card__text">Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi.</p>
                    <a href="#" class="reviews__card__read-more">Read More</a>
                </div>
        </div>
        
    </div>
    <div class="reviews__card">
        <div class="reviews__card__image-wrapper">
                <img src="{{Vite::asset('resources/images/review/review.png')}}" alt="">
        </div>
        <div class="reviews__card__text-wrapper">

                <div class="flex-space"></div>
                <div class="reviews__card__text--wrapper__text">
                    <h2 class="reviews__card__name">MR. Solanki</h2>
                    <p class="reviews__card__text">Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi.</p>
                    <a href="#" class="reviews__card__read-more">Read More</a>
                </div>
        </div>
        
    </div> --}}
    
</div>