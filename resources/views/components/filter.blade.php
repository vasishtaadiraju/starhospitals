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

        <select type="text" placeholder="Enter Doctor Name">
            <option value="">Filter by Location</option>
        </select>
    </div>
    <div class="filter__fields-wrapper">

        <img src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

        <select type="text" placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
        </select>
    </div>
</div>
