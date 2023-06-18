<div class="filter">
    <div class="filter__fields-wrapper" style="position: relative">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/search-doc.png') }}" alt="">

        <input type="text" class="auto-complete-input" placeholder="Search Doctor">
        <div class="auto-complete">
            <ul class="auto-complete__list">

            </ul>
        </div>
    </div>
    <div class="filter__fields-wrapper">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/location.png') }}" alt="">

        <select type="text" class="location-select-box" id="location-select-box" data-type="location" placeholder="Enter Doctor Name">
            <option value="">Filter by Location</option>

            @foreach ($branches as $item)
            <option value="{{$item->id}}" @if (session('branch_id') == $item->id)
                selected
            @elseif($item->id == 1) selected @endif>{{$item->name}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="filter__fields-wrapper">
        
            <img src="" data-src="{{Vite::asset('resources/images/Icons/sthetoscope.png')}}" alt="">
        
        <select type="text" class="coe-select-box" id="coe-select-box" data-type="coe" placeholder="Enter Doctor Name"> 
            <option value="">Center of Excellence</option>
            {{-- @foreach ($coes as $item)
            <option value="{{$item->id}}" @if (session('coe_id') == $item->id || $item->id  == 8)
                selected
            @endif>{{$item->name}}</option>
                
            @endforeach --}}
        </select>
    </div>
    
    <div class="filter__fields-wrapper">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

        <select type="text" class="speciality-select-box" id="speciality-select-box" data-type="speciality"  placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
            
        </select>
    </div>
</div>
