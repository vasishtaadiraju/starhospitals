<x-heading :title="'Media'" :description="$content->media_text" />
<div class="media media-slider">

    @foreach ($media as $item)
        <div class="media__card">
            <a href=""><img class="media__image" src="" data-src="{{ config('variables.asset') . $item->image }}"
                    alt=""></a>
            @php
                $date = date_create($item->published_date);
            @endphp
                        <p class="media__date"> <a href="">{{ $item->media_name }} </a> <span>|</span> <a href="#"> {{ date_format($date, 'M d, Y') }}</a> </p>

            <p class="media__description">{{ $item->title }}</p>
            <a class="media__read-more" href="{{ $item->link }}">Read More</a>

        </div>
    @endforeach
    @foreach ($media as $item)
        <div class="media__card">
            <a href=""><img class="media__image" src="" data-src="{{ config('variables.asset') . $item->image }}"
                    alt=""></a>
            @php
                $date = date_create($item->published_date);
            @endphp
            <p class="media__date"> <a href="">{{ $item->media_name }} </a> <span>|</span> <a href="#"> {{ date_format($date, 'M d, Y') }}</a> </p>
            <p class="media__description">{{ $item->title }}</p>
            <a class="media__read-more" href="{{ $item->link }}">Read More</a>

        </div>
    @endforeach

    {{-- <div class="media__card">
        <a href=""><img class="media__image" src="" data-src="{{ Vite::asset('resources/images/media/media.png') }}"
                alt=""></a>

        <p class="media__date"> <a href="">WELTHI | MARCH 10 ,2023</a> </p>
        <p class="media__description">Star Hospitals hosts Tosacon pre-conference workshop on primary total knee
            replacement</p>
        <a class="media__read-more" href="#">Read More</a>

    </div>
    <div class="media__card">
        <a href=""><img class="media__image" src="" data-src="{{ Vite::asset('resources/images/media/media.png') }}"
                alt=""></a>

        <p class="media__date"> <a href="">WELTHI | MARCH 10 ,2023</a> </p>
        <p class="media__description">Star Hospitals hosts Tosacon pre-conference workshop on primary total knee
            replacement</p>
        <a class="media__read-more" href="#">Read More</a>

    </div>
    <div class="media__card">
        <a href=""><img class="media__image" src="" data-src="{{ Vite::asset('resources/images/media/media.png') }}"
                alt=""></a>

        <p class="media__date"> <a href="">WELTHI | MARCH 10 ,2023</a> </p>
        <p class="media__description">Star Hospitals hosts Tosacon pre-conference workshop on primary total knee
            replacement Star Hospitals hosts Tosacon pre-conference workshop on primary total knee replacement</p>
        <a class="media__read-more" href="#">Read More</a>

    </div>
    <div class="media__card">
        <a href=""><img class="media__image" src="" data-src="{{ Vite::asset('resources/images/media/media.png') }}"
                alt=""></a>

        <p class="media__date"> <a href="">WELTHI | MARCH 10 ,2023</a> </p>
        <p class="media__description">Star Hospitals hosts Tosacon pre-conference workshop on primary total knee
            replacement</p>
        <a class="media__read-more" href="#">Read More</a>

    </div> --}}
</div>
