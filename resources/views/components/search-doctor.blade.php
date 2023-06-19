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

                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.8995L13.9497 13.9497C16.6834 11.2161 16.6834 6.78392 13.9497 4.05025C11.2161 1.31658 6.78392 1.31658 4.05025 4.05025C1.31658 6.78392 1.31658 11.2161 4.05025 13.9497L9 18.8995ZM9 21.7279L2.63604 15.364C-0.87868 11.8492 -0.87868 6.15076 2.63604 2.63604C6.15076 -0.87868 11.8492 -0.87868 15.364 2.63604C18.8787 6.15076 18.8787 11.8492 15.364 15.364L9 21.7279ZM9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.8954 7 7 7.89543 7 9C7 10.1046 7.8954 11 9 11ZM9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z" fill="black"/>
                    </svg>
                    

                <select type="text" class="location-select-box" data-type="location" placeholder="Enter Doctor Name">
                    {{-- <option value="">Select Location</option> --}}
                    @foreach ($branches as $item)
                        <option value="{{ $item->id }}" @if (session('branch_id') == $item->id)
                            selected
                        @elseif($item->id == 1) selected @endif>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 0V2H2V6C2 8.2091 3.79086 10 6 10C8.2091 10 10 8.2091 10 6V2H8V0H11C11.5523 0 12 0.44772 12 1V6C12 8.9727 9.8381 11.4405 7.0008 11.9169L7 13.5C7 15.433 8.567 17 10.5 17C11.9973 17 13.275 16.0598 13.7749 14.7375C12.7283 14.27 12 13.2201 12 12C12 10.3431 13.3431 9 15 9C16.6569 9 18 10.3431 18 12C18 13.3711 17.0802 14.5274 15.824 14.8854C15.2102 17.252 13.0592 19 10.5 19C7.4624 19 5 16.5376 5 13.5L5.00019 11.9171C2.16238 11.4411 0 8.9731 0 6V1C0 0.44772 0.44772 0 1 0H4ZM15 11C14.4477 11 14 11.4477 14 12C14 12.5523 14.4477 13 15 13C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11Z" fill="black"/>
                    </svg>
                    

                <select type="text" class="coe-select-box" data-type="coe" placeholder="Enter Doctor Name">
                    {{-- <option value="">Select coe</option> --}}
                    {{-- @foreach ($coes as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C12.0675 0 15.426 3.03562 15.9337 6.96494L18.1842 10.5037C18.3324 10.7367 18.3025 11.0847 17.9593 11.2317L16 12.071V15C16 16.1046 15.1046 17 14 17H12.001L12 20H3L3.00025 16.3061C3.00033 15.1252 2.56351 14.0087 1.7555 13.0011C0.65707 11.6313 0 9.8924 0 8C0 3.58172 3.58172 0 8 0ZM8 2C4.68629 2 2 4.68629 2 8C2 9.3849 2.46818 10.6929 3.31578 11.7499C4.40965 13.114 5.00036 14.6672 5.00025 16.3063L5.00013 18H10.0007L10.0017 15H14V10.7519L15.5497 10.0881L14.0072 7.66262L13.9501 7.22118C13.5665 4.25141 11.0243 2 8 2ZM8 5C8.5523 5 9 5.44772 9 6V7H10C10.5523 7 11 7.44772 11 8C11 8.5523 10.5523 9 10 9H9V10C9 10.5523 8.5523 11 8 11C7.4477 11 7 10.5523 7 10V8.999L6 9C5.44772 9 5 8.5523 5 8C5 7.44772 5.44772 7 6 7L7 6.999V6C7 5.44772 7.4477 5 8 5Z" fill="black"/>
                    </svg>
                    

                <select type="text" class="speciality-select-box" data-type="speciality" placeholder="Enter Doctor Name">
                    {{-- <option value="">Select Speciality</option> --}}
                    {{-- @foreach ([] as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="filter__fields-wrapper">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM21.4462 20.032L22.9497 21.5355L21.5355 22.9497L20.032 21.4462C19.4365 21.7981 18.7418 22 18 22C15.7909 22 14 20.2091 14 18C14 15.7909 15.7909 14 18 14C20.2091 14 22 15.7909 22 18C22 18.7418 21.7981 19.4365 21.4462 20.032ZM18 20C19.1046 20 20 19.1046 20 18C20 16.8954 19.1046 16 18 16C16.8954 16 16 16.8954 16 18C16 19.1046 16.8954 20 18 20Z" fill="black"/>
                    </svg>
                    

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
