<form action="">
    <div class="search-doctor" id="centre-of-excellences">
        <div class="search-doctor__submit-btn-container search-doctor__submit-btn-container--mobile">
            <h2 class="section-heading">Want a Consultation ?</h2>
            {{-- <button class="search-doctor__submit-btn search-doctor__submit-btn--mobile">
                Book Now
            </button> --}}
        </div>
        <div class="filter filter--type-secondary">
            <div class="filter__fields-wrapper">

                <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

                <select type="text" class="location-select-box" data-type="location" placeholder="Enter Doctor Name">
                    <option value="">Select Location</option>
                    @foreach ($branches as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

                <select type="text" class="coe-select-box" data-type="coe" placeholder="Enter Doctor Name">
                    <option value="">Select coe</option>
                    @foreach ($coes as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

                <select type="text" class="speciality-select-box" data-type="speciality" placeholder="Enter Doctor Name">
                    <option value="">Select coe</option>
                    @foreach ([] as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <img src="" data-src="{{ Vite::asset('resources/images/Icons/location.png') }}" alt="">

                <select type="text" class="doctor-select-box" placeholder="Enter Doctor Name">
                    <option value="">Select Doctor</option>
                </select>
            </div>

        </div>
        <div class="search-doctor__submit-btn-container">
            <button class="search-doctor__submit-btn">
                Book an Appointment
            </button>
        </div>

    </div>

</form>
