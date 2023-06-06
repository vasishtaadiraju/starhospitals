<div class="coes" id="centre-of-excellences">
    <div class="coes__list">
        <h2 class="section-heading">Centre of Excellences</h2>
        <ul>
            {{-- coes__description__wrapper--mobile coes__description__wrapper--mobile--active --}}
            {{-- <div class="coes__list__item">
                    <li> <img src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt=""> Cardiac Sciences
                    
                    </li>
                    
                    <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="" data-src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h3 class="coes__description__title">Cardiac Sciences</h3>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div>
                </div> --}}

            @foreach ($coes as $item)
                <div class="coes__list__item">
                    <li data-id="{{ $item->id }}">
                        {!! $item->icon_image !!}
                        {{-- {{!!!!} --}}
                        {{ $item->name }}

                    </li>
                    {{-- <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="" data-src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h2 class="coes__description__title">Cardiac Sciences</h2>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div> --}}
                </div>
            @endforeach

            {{-- <div class="coes__list__item">
                    <li> <img src="" data-src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt=""> Cardiac Sciences
                    
                    </li>
                    <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="" data-src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h2 class="coes__description__title">Cardiac Sciences</h2>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div>
                </div> --}}


        </ul>
    </div>
    <div class="coes__description coes__description--desktop">
        {{-- <div class="coes__description__wrapper">

                <img class="coes__description__image" src="" data-src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                <h3 class="coes__description__title">Cardiac Sciences</h3>
                <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>






                 

                <img class="coes_dots-left" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
                <img class="coes_dots-right" src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
            </div>  --}}
        {{-- <div class="coes__description__wrapper">

            <img class="coes__description__image"
                src="http://127.0.0.1:8000/storage/QtirGrcliqtF1HOcoX4MjlazgFyWIQacw05BTGs6.png" alt="null">
            <h3 class="coes__description__title">Cardiac Sciences</h3>
            <p class="coes__description__content">
                We aim to treat our patients with Expertise, Care, and Total Commitment using the latest innovations and
                techn We aim to treat our patients with Expertise, Care, and Total Commitment using the latest
                innovations and technWe
            </p>








            <svg class="coes_dots-left" width="75" height="115" viewBox="0 0 75 115" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="72.5" cy="62.5" r="2.5" transform="rotate(90 72.5 62.5)" fill="#004E9E">
                </circle>
                <circle cx="32.5" cy="62.5" r="2.5" transform="rotate(90 32.5 62.5)" fill="#004E9E">
                </circle>
                <circle cx="52.5" cy="62.5" r="2.5" transform="rotate(90 52.5 62.5)" fill="#004E9E">
                </circle>
                <circle cx="12.5" cy="62.5" r="2.5" transform="rotate(90 12.5 62.5)" fill="#004E9E">
                </circle>
                <circle cx="72.5" cy="102.5" r="2.5" transform="rotate(90 72.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="32.5" cy="102.5" r="2.5" transform="rotate(90 32.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="52.5" cy="102.5" r="2.5" transform="rotate(90 52.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="12.5" cy="102.5" r="2.5" transform="rotate(90 12.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="62.5" cy="102.5" r="2.5" transform="rotate(90 62.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="22.5" cy="102.5" r="2.5" transform="rotate(90 22.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="42.5" cy="102.5" r="2.5" transform="rotate(90 42.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="2.5" cy="102.5" r="2.5" transform="rotate(90 2.5 102.5)" fill="#004E9E">
                </circle>
                <circle cx="72.5" cy="82.5" r="2.5" transform="rotate(90 72.5 82.5)" fill="#004E9E">
                </circle>
                <circle cx="32.5" cy="82.5" r="2.5" transform="rotate(90 32.5 82.5)" fill="#004E9E">
                </circle>
                <circle cx="52.5" cy="82.5" r="2.5" transform="rotate(90 52.5 82.5)" fill="#004E9E">
                </circle>
                <circle cx="12.5" cy="82.5" r="2.5" transform="rotate(90 12.5 82.5)" fill="#004E9E">
                </circle>
                <circle cx="62.5" cy="82.5" r="2.5" transform="rotate(90 62.5 82.5)" fill="#004E9E">
                </circle>
                <circle cx="22.5" cy="82.5" r="2.5" transform="rotate(90 22.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="82.5" r="2.5" transform="rotate(90 42.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="82.5" r="2.5" transform="rotate(90 2.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="62.5" r="2.5" transform="rotate(90 62.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="62.5" r="2.5" transform="rotate(90 22.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="62.5" r="2.5" transform="rotate(90 42.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="62.5" r="2.5" transform="rotate(90 2.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="72.5" r="2.5" transform="rotate(90 72.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="72.5" r="2.5" transform="rotate(90 32.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="72.5" r="2.5" transform="rotate(90 52.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="72.5" r="2.5" transform="rotate(90 12.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="112.5" r="2.5" transform="rotate(90 72.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="112.5" r="2.5" transform="rotate(90 32.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="112.5" r="2.5" transform="rotate(90 52.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="112.5" r="2.5" transform="rotate(90 12.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="112.5" r="2.5" transform="rotate(90 62.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="112.5" r="2.5" transform="rotate(90 22.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="112.5" r="2.5" transform="rotate(90 42.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="112.5" r="2.5" transform="rotate(90 2.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="92.5" r="2.5" transform="rotate(90 72.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="92.5" r="2.5" transform="rotate(90 32.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="92.5" r="2.5" transform="rotate(90 52.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="92.5" r="2.5" transform="rotate(90 12.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="92.5" r="2.5" transform="rotate(90 62.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="92.5" r="2.5" transform="rotate(90 22.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="92.5" r="2.5" transform="rotate(90 42.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="92.5" r="2.5" transform="rotate(90 2.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="72.5" r="2.5" transform="rotate(90 62.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="72.5" r="2.5" transform="rotate(90 22.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="72.5" r="2.5" transform="rotate(90 42.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="72.5" r="2.5" transform="rotate(90 2.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="2.5" r="2.5" transform="rotate(90 72.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="2.5" r="2.5" transform="rotate(90 32.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="2.5" r="2.5" transform="rotate(90 52.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="2.5" r="2.5" transform="rotate(90 12.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="42.5" r="2.5" transform="rotate(90 72.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="42.5" r="2.5" transform="rotate(90 32.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="42.5" r="2.5" transform="rotate(90 52.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="42.5" r="2.5" transform="rotate(90 12.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="42.5" r="2.5" transform="rotate(90 62.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="42.5" r="2.5" transform="rotate(90 22.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="42.5" r="2.5" transform="rotate(90 42.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="42.5" r="2.5" transform="rotate(90 2.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="22.5" r="2.5" transform="rotate(90 72.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="22.5" r="2.5" transform="rotate(90 32.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="22.5" r="2.5" transform="rotate(90 52.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="22.5" r="2.5" transform="rotate(90 12.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="22.5" r="2.5" transform="rotate(90 62.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="22.5" r="2.5" transform="rotate(90 22.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="22.5" r="2.5" transform="rotate(90 42.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="22.5" r="2.5" transform="rotate(90 2.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="2.5" r="2.5" transform="rotate(90 62.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="2.5" r="2.5" transform="rotate(90 22.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="2.5" r="2.5" transform="rotate(90 42.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="2.5" r="2.5" transform="rotate(90 2.5 2.5)" fill="#004E9E">
                </circle>
                <circle cx="72.5" cy="12.5" r="2.5" transform="rotate(90 72.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="12.5" r="2.5" transform="rotate(90 32.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="12.5" r="2.5" transform="rotate(90 52.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="12.5" r="2.5" transform="rotate(90 12.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="52.5" r="2.5" transform="rotate(90 72.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="52.5" r="2.5" transform="rotate(90 32.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="52.5" r="2.5" transform="rotate(90 52.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="52.5" r="2.5" transform="rotate(90 12.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="52.5" r="2.5" transform="rotate(90 62.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="52.5" r="2.5" transform="rotate(90 22.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="52.5" r="2.5" transform="rotate(90 42.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="52.5" r="2.5" transform="rotate(90 2.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="32.5" r="2.5" transform="rotate(90 72.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="32.5" r="2.5" transform="rotate(90 32.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="32.5" r="2.5" transform="rotate(90 52.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="32.5" r="2.5" transform="rotate(90 12.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="32.5" r="2.5" transform="rotate(90 62.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="32.5" r="2.5" transform="rotate(90 22.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="32.5" r="2.5" transform="rotate(90 42.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="32.5" r="2.5" transform="rotate(90 2.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="12.5" r="2.5" transform="rotate(90 62.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="12.5" r="2.5" transform="rotate(90 22.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="12.5" r="2.5" transform="rotate(90 42.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="12.5" r="2.5" transform="rotate(90 2.5 12.5)"
                    fill="#004E9E"></circle>
            </svg>
            <svg class="coes_dots-right" width="75" height="115" viewBox="0 0 75 115" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="72.5" cy="62.5" r="2.5" transform="rotate(90 72.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="62.5" r="2.5" transform="rotate(90 32.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="62.5" r="2.5" transform="rotate(90 52.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="62.5" r="2.5" transform="rotate(90 12.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="102.5" r="2.5" transform="rotate(90 72.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="102.5" r="2.5" transform="rotate(90 32.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="102.5" r="2.5" transform="rotate(90 52.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="102.5" r="2.5" transform="rotate(90 12.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="102.5" r="2.5" transform="rotate(90 62.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="102.5" r="2.5" transform="rotate(90 22.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="102.5" r="2.5" transform="rotate(90 42.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="102.5" r="2.5" transform="rotate(90 2.5 102.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="82.5" r="2.5" transform="rotate(90 72.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="82.5" r="2.5" transform="rotate(90 32.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="82.5" r="2.5" transform="rotate(90 52.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="82.5" r="2.5" transform="rotate(90 12.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="82.5" r="2.5" transform="rotate(90 62.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="82.5" r="2.5" transform="rotate(90 22.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="82.5" r="2.5" transform="rotate(90 42.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="82.5" r="2.5" transform="rotate(90 2.5 82.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="62.5" r="2.5" transform="rotate(90 62.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="62.5" r="2.5" transform="rotate(90 22.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="62.5" r="2.5" transform="rotate(90 42.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="62.5" r="2.5" transform="rotate(90 2.5 62.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="72.5" r="2.5" transform="rotate(90 72.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="72.5" r="2.5" transform="rotate(90 32.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="72.5" r="2.5" transform="rotate(90 52.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="72.5" r="2.5" transform="rotate(90 12.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="112.5" r="2.5" transform="rotate(90 72.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="112.5" r="2.5" transform="rotate(90 32.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="112.5" r="2.5" transform="rotate(90 52.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="112.5" r="2.5" transform="rotate(90 12.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="112.5" r="2.5" transform="rotate(90 62.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="112.5" r="2.5" transform="rotate(90 22.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="112.5" r="2.5" transform="rotate(90 42.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="112.5" r="2.5" transform="rotate(90 2.5 112.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="92.5" r="2.5" transform="rotate(90 72.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="92.5" r="2.5" transform="rotate(90 32.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="92.5" r="2.5" transform="rotate(90 52.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="92.5" r="2.5" transform="rotate(90 12.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="92.5" r="2.5" transform="rotate(90 62.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="92.5" r="2.5" transform="rotate(90 22.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="92.5" r="2.5" transform="rotate(90 42.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="92.5" r="2.5" transform="rotate(90 2.5 92.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="72.5" r="2.5" transform="rotate(90 62.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="72.5" r="2.5" transform="rotate(90 22.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="72.5" r="2.5" transform="rotate(90 42.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="72.5" r="2.5" transform="rotate(90 2.5 72.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="2.5" r="2.5" transform="rotate(90 72.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="2.5" r="2.5" transform="rotate(90 32.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="2.5" r="2.5" transform="rotate(90 52.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="2.5" r="2.5" transform="rotate(90 12.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="42.5" r="2.5" transform="rotate(90 72.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="42.5" r="2.5" transform="rotate(90 32.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="42.5" r="2.5" transform="rotate(90 52.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="42.5" r="2.5" transform="rotate(90 12.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="42.5" r="2.5" transform="rotate(90 62.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="42.5" r="2.5" transform="rotate(90 22.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="42.5" r="2.5" transform="rotate(90 42.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="42.5" r="2.5" transform="rotate(90 2.5 42.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="22.5" r="2.5" transform="rotate(90 72.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="22.5" r="2.5" transform="rotate(90 32.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="22.5" r="2.5" transform="rotate(90 52.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="22.5" r="2.5" transform="rotate(90 12.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="22.5" r="2.5" transform="rotate(90 62.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="22.5" r="2.5" transform="rotate(90 22.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="22.5" r="2.5" transform="rotate(90 42.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="22.5" r="2.5" transform="rotate(90 2.5 22.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="2.5" r="2.5" transform="rotate(90 62.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="2.5" r="2.5" transform="rotate(90 22.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="2.5" r="2.5" transform="rotate(90 42.5 2.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="2.5" r="2.5" transform="rotate(90 2.5 2.5)" fill="#004E9E">
                </circle>
                <circle cx="72.5" cy="12.5" r="2.5" transform="rotate(90 72.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="12.5" r="2.5" transform="rotate(90 32.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="12.5" r="2.5" transform="rotate(90 52.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="12.5" r="2.5" transform="rotate(90 12.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="52.5" r="2.5" transform="rotate(90 72.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="52.5" r="2.5" transform="rotate(90 32.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="52.5" r="2.5" transform="rotate(90 52.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="52.5" r="2.5" transform="rotate(90 12.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="52.5" r="2.5" transform="rotate(90 62.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="52.5" r="2.5" transform="rotate(90 22.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="52.5" r="2.5" transform="rotate(90 42.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="52.5" r="2.5" transform="rotate(90 2.5 52.5)"
                    fill="#004E9E"></circle>
                <circle cx="72.5" cy="32.5" r="2.5" transform="rotate(90 72.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="32.5" cy="32.5" r="2.5" transform="rotate(90 32.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="52.5" cy="32.5" r="2.5" transform="rotate(90 52.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="12.5" cy="32.5" r="2.5" transform="rotate(90 12.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="32.5" r="2.5" transform="rotate(90 62.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="32.5" r="2.5" transform="rotate(90 22.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="32.5" r="2.5" transform="rotate(90 42.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="32.5" r="2.5" transform="rotate(90 2.5 32.5)"
                    fill="#004E9E"></circle>
                <circle cx="62.5" cy="12.5" r="2.5" transform="rotate(90 62.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="22.5" cy="12.5" r="2.5" transform="rotate(90 22.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="42.5" cy="12.5" r="2.5" transform="rotate(90 42.5 12.5)"
                    fill="#004E9E"></circle>
                <circle cx="2.5" cy="12.5" r="2.5" transform="rotate(90 2.5 12.5)"
                    fill="#004E9E"></circle>
            </svg>
        </div> --}}
        {{-- <a href="/centers-of-excellence/Ccardiac-sciences" class="view-all-btn">
            Learn More
        </a> --}}

    </div>
</div>
