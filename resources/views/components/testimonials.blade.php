<x-heading :title="'Reviews From Our Patients'" :description="''" />
<div class="testimonials testimonials-slider">

    @foreach ($testimonials as $item)
    <div class="testimonials__card">
        <div class="testimonials__card__image-wrapper">
            <img src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">

        </div>
        <div class="testimonials__card__content">
            <p>{{$item->media_name}}</p>

            <h4>{{$item->title}}</h4>
        </div>
    </div> 
    @endforeach
    
    {{-- <div class="testimonials__card">
        <img src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div>
    </div>
    <div class="testimonials__card">
        <img src="{{Vite::asset('resources/images/testimonials/testimonial.png')}}" alt="">
        <div class="testimonials__card__content">
            <p>PATIENT NAME</p>

            <h4>Lorem ipsum dolor sit amet consectetur. Suspendisse vitae enim egestas fermentum.</h4>
        </div> --}}
    </div>
</div>