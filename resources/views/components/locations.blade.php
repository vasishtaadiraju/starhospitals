<x-heading :title="'Our Locations'" :description="'Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi. In aliquam turpis pellentesque ultricies imperdiet accumsan sociis.'" />

<div class="locations">

    @foreach ($locations as $item)
    <div class="locations__card">
        <img src="{{ config('variables.asset') . $item->card_image }}" alt="">
        <div class="locations__card__content-wrapper">
            <h3>{{$item->name}}</h3>
            <p>{{$item->address}}</p>
            <p>{{$item->contact}}</p>
            <a href="#" class="locations__card__content-wrapper__btn">Get Directions</a>
            <a href="#" class="locations__card__content-wrapper__btn locations__card__content-wrapper__btn--secondary">More Information</a>
        </div>
    </div> 
    @endforeach
    
    {{-- <div class="locations__card">
        <img src="{{Vite::asset('resources/images/about/hospital-image.png')}}" alt="">
        <div class="locations__card__content-wrapper">
            <h3>Financial District</h3>
            <p>Full Address</p>
            <p>phone number</p>
            <a href="#" class="locations__card__content-wrapper__btn">Get Directions</a>
            <a href="#" class="locations__card__content-wrapper__btn locations__card__content-wrapper__btn--secondary">More Information</a>
        </div>
    </div>
    <div class="locations__card">
        <img src="{{Vite::asset('resources/images/about/hospital-image.png')}}" alt="">
        <div class="locations__card__content-wrapper">
            <h3>Financial District</h3>
            <p>Full Address</p>
            <p>phone number</p>
            <a href="#" class="locations__card__content-wrapper__btn">Get Directions</a>
            <a href="#" class="locations__card__content-wrapper__btn locations__card__content-wrapper__btn--secondary">More Information</a>
        </div>
    </div> --}}
</div>