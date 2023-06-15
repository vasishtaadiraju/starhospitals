<x-heading :title="'Reviews From Our Patients'" :description="$content->review_text" />
<div class="testimonials testimonials-slider">

    @foreach ($testimonials as $item)
    <div class="testimonials__card">
        <a class="ctg-video">
            <img src="" data-src="{{ config('variables.asset') . $item->image }}" alt="">

        </a>
        <div class="testimonials__card__content">
            <p>{{$item->patient_name}}</p>

            <h4>{{$item->text}}</h4>
        </div>
    </div> 
    @endforeach
    
    {{-- <div class="testimonials__card">
       <a href="" class=""> <img src="" data-src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt=""> </a>
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="" data-src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="" data-src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="" data-src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div> --}}
</div>