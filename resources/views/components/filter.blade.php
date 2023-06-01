<div class="filter">
    <div class="filter__fields-wrapper" style="position: relative">

        <img src="{{ Vite::asset('resources/images/Icons/search-doc.png') }}" alt="">

        <input type="text" class="auto-complete-input" placeholder="Search Doctor">
        <div class="auto-complete">
            <ul class="auto-complete__list">

            </ul>
        </div>
    </div>
    {{-- <div class="filter__fields-wrapper">
        
            <img src="{{Vite::asset('resources/images/Icons/sthetoscope.png')}}" alt="">
        
        <select type="text" placeholder="Enter Doctor Name"> 
            <option value="">Center of Excellence</option>
        </select>
    </div> --}}
    <div class="filter__fields-wrapper">

        <img src="{{ Vite::asset('resources/images/Icons/location.png') }}" alt="">

        <select type="text" class="location-select-box" id="location-select-box" placeholder="Enter Doctor Name">
            <option value="">Filter by Location</option>

            @foreach ($branches as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="filter__fields-wrapper">

        <img src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

        <select type="text" class="speciality-select-box" id="speciality-select-box" placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
            @foreach ($coes as $item)
            <option value="{{$item->id}}" @if($content->page_type == 'Coe' && $item->id == $content->id) selected @endif>{{$item->name}}</option>
                
            @endforeach
        </select>
    </div>
</div>
