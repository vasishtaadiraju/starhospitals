<div class="coes">
        <div class="coes__list">
            <h2 class="section-heading">Centre of Excellences</h2>
            <ul>
{{-- coes__description__wrapper--mobile coes__description__wrapper--mobile--active --}}
                {{-- <div class="coes__list__item">
                    <li> <img src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt=""> Cardiac Sciences
                    
                    </li>
                    
                    <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h3 class="coes__description__title">Cardiac Sciences</h3>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div>
                </div> --}}

                @foreach ($coes as $item)
                <div class="coes__list__item">
                    <li> 
                        {{-- {!!$item->icon_image!!} --}}
                         {{$item->name}}
                    
                    </li>
                    {{-- <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h2 class="coes__description__title">Cardiac Sciences</h2>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div> --}}
                </div>  
                @endforeach
                
                {{-- <div class="coes__list__item">
                    <li> <img src="{{Vite::asset('resources/images/Icons/heart-icon.png')}}" alt=""> Cardiac Sciences
                    
                    </li>
                    <div class="coes__description__wrapper coes__description__wrapper--mobile">
    
                        <img class="coes__description__image" src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                        <h2 class="coes__description__title">Cardiac Sciences</h2>
                        <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>
        
        
        
        
        
        
                        
                    </div>
                </div> --}}
               
                
            </ul>
        </div>
        <div class="coes__description coes__description--desktop">
            {{-- <div class="coes__description__wrapper">

                <img class="coes__description__image" src="{{Vite::asset('resources/images/homepage/heart.png')}}" alt="">
                <h3 class="coes__description__title">Cardiac Sciences</h3>
                <p class="coes__description__content">Lorem ipsum dolor sit amet consectetur. Augue in mattis sit sit. Ornare ut quam aliquam turpis nunc gravida enim. Mollis diam nisl eget elit. Dignissim tristique euismod massa eget enim sit adipiscing. Urna morbi cras vivamus velit volutpat elementum. Pellentesque etiam vulputate arcu consectetur volutpat vulputate imperdiet. Turpis non sodales cursus faucibus tortor orci. Consequat arcu diam quam tincidunt consequat integer. Sit pellentesque odio nibh massa elit velit enim eu sed. Tincidunt gravida sed vulputate scelerisque eu in. </p>






                 Dots 

                <img class="coes_dots-left" src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
                <img class="coes_dots-right" src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt="">
            </div>  --}}
        </div>
</div>