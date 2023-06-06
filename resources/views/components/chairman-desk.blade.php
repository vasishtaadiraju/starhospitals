{{-- <div class="chairman-desk">
    <div class="chairman-desk__wrapper">
        <div class="chairman-desk__image-container">
            <img src="" data-src="{{Vite::asset('resources/images/doctors/doctor.png')}}" alt="">
        </div>
        <div class="chairman-desk__content-container">
            <h2>From Chairman's Desk</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Id elit id nec arcu. Ac libero felis adipiscing orci. Egestas malesuada condimentum diam augue non in ultrices penatibus orci. Eu senectus sit parturient magna tempor ac dui convallis. Cras adipiscing enim id egestas. Lectus id ornare mattis urna nunc maecenas eu magna adipiscing. Sagittis varius feugiat eu blandit amet sed in. Gravida suspendisse semper tellus pellentesque sodales sit amet. Blandit diam bibendum donec bibendum elit erat nunc lectus. Quam turpis velit in at lobortis. Risus fringilla tristique pellentesque lorem ipsum pharetra tristique. Massa tellus sed ac mattis mauris risus fringilla nibh suspendisse. Quis nibh sit metus urna tincidunt viverra quis. In vitae iaculis id nulla. Diam nunc tempor nulla risus dui mauris a. Sit quis sit convallis eu eget sit porttitor rutrum nibh. Urna ut risus tellus euismod erat odio sapien sit volutpat. Ullamcorper a enim nulla eleifend. Aenean varius ut hac volutpat magna ornare lectus dignissim.</p>
        </div>
    </div>
</div> --}}


<div class="chairman-desk">
    <div class="chairman-desk__wrapper">
        <div class="chairman-desk__image-container">
            <img src="" data-src="{{Vite::asset('resources/images/doctors/doctor.png')}}" alt="">
        </div>
        <div class="chairman-desk__content-container">
            {{-- @if(!empty($about->chairman_desk_title)) --}}
            <h2 class="section-heading">{{ $about->chairman_desk_title }}</h2>
            {{-- @endif --}}
            {{-- @if(!empty($about->chairman_desk_description)) --}}
            <p>{!! $about->chairman_desk_description !!}</p>
            {{-- @endif --}}
        </div>
    </div>
</div>
