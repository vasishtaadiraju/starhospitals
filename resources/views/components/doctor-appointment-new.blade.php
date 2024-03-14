<x-heading :title="$title" :description="''"/>

<div class="doctors">
    <div class="doctors__cards-wrapper doctor-appointment-cards-wrapper @if ($type == 'flex')
    doctors__cards-wrapper--flex-list
    @else
    doctor-slide
    @endif" id="our-doctors">
        {{-- <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
 fg.gt               </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Sr. Consultant | General Medicine/ Internal Medicine </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div>
        <div class="doctors-card">
            <a href="" class="doctors-card__lt">
                <img src="" data-src="{{ Vite::asset('resources/images/doctors/Bushra.png') }}" alt="">
                <div class="doctors-card__lt__details">
                    <p>35 yrs <span>Experience</span></p>
                    <p>Rs. 500 <span>Fees</span> </p>
                </div>
            </a>
            <div class="doctors-card__rt">
                <h2><a href=""> Dr. Bushra Khan </a></h2>
                <p class="doctors-card__rt__designation"><a href=""> Jr. Consultant | Oncology </a></p>
                <p class="doctors-card__rt__speciality"><a href=""> Oncology </a></p>
                <p class="doctors-card__rt__location"> <a href=""> Banjara Hills </a></p>

                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/profile.png') }}" alt="">
                    <span>View Full Profile</span>
                </div>
                <div class="doctors-card__rt__btn">
                    <img src="" data-src="{{ Vite::asset('resources/images/Icons/calender.png') }}" alt="">
                    <span>Book an Appointment</span>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<x-gap/>
<x-pagination/>
