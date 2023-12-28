@extends('layout.main')
@section('css')
    @vite(['resources/scss/find-doctor.scss', 'resources/js/video-consultation.js'])
@endsection
{{-- @section('meta-title', $content->meta_title) --}}
{{-- @section('meta-description', $content->meta_description) --}}
@section('content')
    {{-- <x-gap/> --}}
    {!! $breadcrum !!}
    <x-gap />
    <x-heading :title="'Book a Physical Consultation'" :description="'Our healthcare specialists are equipped with the knowledge and skills to provide you with the support you require. From consultation to diagnosis to treatments, our experts are dedicated to helping you.'" />

    {{-- <x-gap /> --}}
    <div class="video-consultation">
        <div class="video-consultation__col-1">

            <div class="video-consultation__col-1__details-wrapper">

                <div class="video-consultation__col-1__details-wrapper__doctor-card">
                    <img data-src="" alt="">
                    <div>
                        <h1 class="doctor-name">Name</h1>

                        <p class="video-consultation__col-1__designation">Designation</p>

                        <div
                            class="d-p-info__btn-wrapper video-consultation__col-1__btn d-p-info__btn-wrapper video-consultation__col-1__btn--tab">

                            <p class="d-p-info__btn-wrapper__btn d-p-info__btn-wrapper__btn--primary">
                                <span>1 </span> Years of
                                Experience
                            </p>


                            <p class="d-p-info__btn-wrapper__btn d-p-info__btn-wrapper__btn--primary"> <span>Rs.
                                    800</span> Fees</p>

                        </div>
                    </div>

                </div>




                <div class="d-p-info__btn-wrapper video-consultation__col-1__btn">

                    <p class="d-p-info__btn-wrapper__btn d-p-info__btn-wrapper__btn--primary">
                        <span>1</span> Years of
                        Experience
                    </p>

                    <p class="d-p-info__btn-wrapper__btn d-p-info__btn-wrapper__btn--primary"> <span>Rs.
                            800</span> Fees</p>

                </div>


                <div class="video-consultation__col-1__btm-content">
                    <p>In case of any query call us at</p>
                    <a href="tel:1800 102 7827"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"
                                fill="white" />
                        </svg>
                        1800 102 7827
                    </a>
                </div>
            </div>


        </div>
        <div class="video-consultation__col-2">
            <div class="video-consultation__col-2__form-wrapper video-consultation-form">
                <form action="/videoConsultation" method="POST" class="">
                    @csrf
                    <div class="form-fields">
                        <div class="form-fields-wrapper form-fields-wrapper--col-2">
                            <div class="form-fields-wrapper ">
                                <input placeholder="First Name" name="firstname" type="text">
                                @error('firstname')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-fields-wrapper form-fields-wrapper--col-2">
                            <div class="form-fields-wrapper ">
                                <input placeholder="Last Name" name="lastname" type="text">
                                @error('lastname')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-fields">
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <input placeholder="Name Of Guardian" name="guardian_name" type="text">
                                @error('guardian_name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-fields">
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <input placeholder="Email Id" type="text" name="email">
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <select type="text" name="branch" class="location-select-box">
                                    <option value=""> Location</option>
                                    @foreach ([] as $branch)
                                        <option data-id="{{ $branch->id }}" value="{{ $branch->name }}">
                                            {{ $branch->name }}</option>
                                    @endforeach
                                </select>
                                @error('branch')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="form-fields">
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <select type="text" name="coe" class="coe-select-box">
                                    <option value="">Centres Of Excellence</option>
                                </select>
                                @error('coe')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <select type="text" name="speciality" class="speciality-select-box">
                                    <option value="">Speciality</option>
                                </select>
                                @error('speciality')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="form-fields">
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <select type="text" name="doctor" class="doctor-select-box">
                                    <option value="">Doctor</option>
                                </select>
                                @error('doctor')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <input type="date" min="{{ date('Y-m-d') }}" name="date">
                                @error('date')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-fields-wrapper form-fields-wrapper--col-1">
                            <div class="form-fields-wrapper ">
                                <input type="text">
                            </div>
                        </div> --}}
                    </div>


                    <button class="form-submit-button">Submit</button>
                </form>
            </div>
            <div class="video-consultation__col-2__form-wrapper ">




                <div class="physical-consultation">
                    <div class="physical-consultation__label">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"
                                fill="black" />
                        </svg>
                        <span>Select a Date</span>
                    </div>
                </div>

                <div class="physical-consultation__dates-slider">
                    @php
                        $date = date('Y-m-d');
                    @endphp
                    @for ($i = 1; $i <= 7; $i++)
                        @php
                            if ($i > 1) {
                                $date = date('Y-m-d', strtotime('+1 day', strtotime($date)));
                            }
                            $date_month = date_format(date_create($date), 'd M');
                            $day = date_format(date_create($date), 'D');
                        @endphp
                        <div class="physical-consultation__dates @if ($i == 1) physical-consultation__dates--active @endif"
                            data-date="{{ $date }}">
                            <span>{{ $date_month }}</span>
                            <p>{{ $day }}</p>
                        </div>
                    @endfor
                </div>


                <div class="physical-consultation__slots-wrapper">
                    <div class="loader"></div>



                </div>

                <x-gap />

                {{-- <button class="form-submit-button">Submit</button> --}}

            </div>

        </div>
    </div>

    <x-gap />
@endsection
