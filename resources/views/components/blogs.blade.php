
    <x-heading :title="'Blogs'" :description="$content->blog_text" />
    <div class="blogs blogs-slider">
        @foreach ($blogs as $item)
            <div class="blogs__card">
                <a href=""><img class="blogs__image" src="" data-src="{{config('variables.asset').$item->image}}"
                        alt=""> </a>
                <p class="blogs__category"> <a href="">{{strtoupper('Cardiac Sciences')}} </a> </p>
                @php
                    $date = date_create($item->published_date);
                @endphp
                <p class="blogs__author-published"> <a href="">{{ strtoupper($item->author) }} 
                    </a> <span>|</span> <a href="#">
                        {{  strtoupper(date_format($date, 'M d, Y')) }}</a> </p>
                <p class="blogs__description">{{ $item->title }}</p>
            </div>
        @endforeach
       

        {{-- <div class="blogs__card">
            <a href=""><img class="blogs__image" src="" data-src="{{Vite::asset('resources/images/blogs/blog.png')}}" alt=""> </a> 
             <p class="blogs__category"> <a href="">Neurology</a> </p>
             <p class="blogs__author-published"> <a href="">Dr. Aneel Kumar | APRIL 4, 2023 </a> </p>
             <p class="blogs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti voluptates quidem enim officiis pro</p>
         </div>
         <div class="blogs__card">
            <a href=""><img class="blogs__image" src="" data-src="{{Vite::asset('resources/images/blogs/blog.png')}}" alt=""> </a> 
             <p class="blogs__category"> <a href="">Neurology</a> </p>
             <p class="blogs__author-published"> <a href="">Dr. Aneel Kumar | APRIL 4, 2023 </a> </p>
             <p class="blogs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti voluptates quidem enim officiis pro</p>
         </div>
         <div class="blogs__card">
            <a href=""><img class="blogs__image" src="" data-src="{{Vite::asset('resources/images/blogs/blog.png')}}" alt=""> </a> 
             <p class="blogs__category"> <a href="">Neurology</a> </p>
             <p class="blogs__author-published"> <a href="">Dr. Aneel Kumar | APRIL 4, 2023 </a> </p>
             <p class="blogs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti voluptates quidem enim officiis pro</p>
         </div>
         <div class="blogs__card">
            <a href=""><img class="blogs__image" src="" data-src="{{Vite::asset('resources/images/blogs/blog.png')}}" alt=""> </a> 
             <p class="blogs__category"> <a href="">Neurology</a> </p>
             <p class="blogs__author-published"> <a href="">Dr. Aneel Kumar | APRIL 4, 2023 </a> </p>
             <p class="blogs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti voluptates quidem enim officiis pro</p>
         </div><div class="blogs__card">
            <a href=""><img class="blogs__image" src="" data-src="{{Vite::asset('resources/images/blogs/blog.png')}}" alt=""> </a> 
             <p class="blogs__category"> <a href="">Neurology</a> </p>
             <p class="blogs__author-published"> <a href="">Dr. Aneel Kumar | APRIL 4, 2023 </a> </p>
             <p class="blogs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti voluptates quidem enim officiis pro</p>
         </div> --}}
    </div>

