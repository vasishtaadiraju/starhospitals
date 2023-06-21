<div class="ui-background">

    <div class="consultation">

        <div class="consultation__card" id="request-a-callback">
            <h2 class="section-heading">Book A Consultation</h2>
            <p class="consultation__card__info">Our empathetic and excellent healthcare services will not disappoint you,
                this is our promise. Get in touch with us, the best multispeciality hospital near you, for any queries
                or discrepancies</p>
            <div class="consultation__card__contact-info">
                <ul class="consultation__card__contact-info__list">
                    <li class="consultation__card__contact-info__list__item">
                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 18.8995L13.9497 13.9497C16.6834 11.2161 16.6834 6.78392 13.9497 4.05025C11.2161 1.31658 6.78392 1.31658 4.05025 4.05025C1.31658 6.78392 1.31658 11.2161 4.05025 13.9497L9 18.8995ZM9 21.7279L2.63604 15.364C-0.87868 11.8492 -0.87868 6.15076 2.63604 2.63604C6.15076 -0.87868 11.8492 -0.87868 15.364 2.63604C18.8787 6.15076 18.8787 11.8492 15.364 15.364L9 21.7279ZM9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.8954 7 7 7.89543 7 9C7 10.1046 7.8954 11 9 11ZM9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z"
                                fill="white" />
                        </svg>
                        Our Locations
                        <ul>
                            <li>Banjara Hills</li>
                            <li>Financial District</li>
                        </ul>
                    </li>
                    <li class="consultation__card__contact-info__list__item">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.36556 7.6821C7.302 9.3288 8.6712 10.698 10.3179 11.6344L11.2024 10.3961C11.4965 9.9845 12.0516 9.8573 12.4956 10.0998C13.9024 10.8683 15.4571 11.3353 17.0789 11.4637C17.599 11.5049 18 11.9389 18 12.4606V16.9234C18 17.4361 17.6122 17.8657 17.1022 17.9181C16.5723 17.9726 16.0377 18 15.5 18C6.93959 18 0 11.0604 0 2.5C0 1.96227 0.0274201 1.42771 0.0818901 0.89776C0.1343 0.38775 0.56394 0 1.07665 0H5.53942C6.0611 0 6.49513 0.40104 6.5363 0.92109C6.66467 2.54288 7.1317 4.09764 7.9002 5.50444C8.1427 5.9484 8.0155 6.50354 7.6039 6.79757L6.36556 7.6821ZM3.84425 7.0252L5.7442 5.66809C5.20547 4.50514 4.83628 3.27183 4.64727 2H2.00907C2.00303 2.16632 2 2.333 2 2.5C2 9.9558 8.0442 16 15.5 16C15.667 16 15.8337 15.997 16 15.9909V13.3527C14.7282 13.1637 13.4949 12.7945 12.3319 12.2558L10.9748 14.1558C10.4258 13.9425 9.8956 13.6915 9.3874 13.4061L9.3293 13.373C7.3697 12.2587 5.74134 10.6303 4.627 8.6707L4.59394 8.6126C4.30849 8.1044 4.05754 7.5742 3.84425 7.0252Z"
                                fill="white" />
                        </svg>

                        Call Us
                        <ul>
                            <li><a href="tel:1800 102 7827">1800 102 7827</a></li>
                        </ul>
                    </li>
                    <li class="consultation__card__contact-info__list__item">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10C20 15.5228 15.5228 20 10 20ZM10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 10H15V12H9V5H11V10Z"
                                fill="white" />
                        </svg>

                        OPD Timings
                        <ul>
                            <li>Monday - Saturday
                            </li>
                            <li>9:00 AM - 5:00 PM</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="consultation__form">
            <p class="consultation__form__title">Please fill in your details</p>

            <form action="/request-callback" method="post">
                @csrf
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Name" type="text"
                                class="@error('name')
                            error-field
                        @enderror"
                                name="name">
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Email"
                                type="text"class="@error('email')
                            error-field
                        @enderror"
                                name="email">
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number"
                                type="text"class="@error('contact')
                            error-field
                        @enderror"
                                name="contact">
                            @error('contact')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <select placeholder="Speciality"
                                type="text"class="@error('department')
                            error-field
                                 @enderror"
                                name="department"> 
                                <option value="">Speciality</option>
                                @foreach ($coes as $item)
                                    @if (count($item->specialities) > 0)
                                        
                                    <optgroup label="{{$item->name}}">

                                        @foreach ($item->specialities as $speciality)
                                            <option value="{{$speciality->name}}">{{$speciality->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    @else

                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                    @endif
                                    
                                @endforeach
                            </select>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input
                                type="date"class="@error('date')
                            error-field
                        @enderror"
                                name="date" min="{{date("Y-m-d")}}">
                            @error('date')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="form-submit-button">Submit</button>
            </form>
            <p class="consultation__form__note">You will receive a confirmation message on your email</p>
            <img src="" data-src="{{ Vite::asset('resources/images/Icons/texture.png') }}" alt=""
                class="consultation__form__texture">
        </div>
        <div class="consultation__heading-mobile">
            <x-heading :title="'Book a Consultation'" :description="'
                            Our empathetic and excellent healthcare services will not disappoint you,
                this is our promise. Get in touch with us, the best multispeciality hospital near you, for any queries
                or discrepancies'" />
        </div>

    </div>
</div>
