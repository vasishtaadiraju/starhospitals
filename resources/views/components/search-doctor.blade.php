<form action="">
    <div class="search-doctor">

        <div class="filter filter--type-secondary">
            <div class="filter__fields-wrapper">

                <img src="{{ asset('images/Icons/sthetoscope.png') }}" alt="">

                <select type="text" placeholder="Enter Doctor Name">
                    <option value="">Speciality</option>
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <img src="{{ asset('images/Icons/sthetoscope.png') }}" alt="">

                <select type="text" placeholder="Enter Doctor Name">
                    <option value="">Center of Excellence</option>
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <img src="{{ asset('images/Icons/location.png') }}" alt="">

                <select type="text" placeholder="Enter Doctor Name">
                    <option value="">Filter by Location</option>
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
