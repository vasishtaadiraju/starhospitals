<div class="pc-modal ">



    <div class="pc-modal__card alert-box">
        <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                    fill="black" />
            </svg>
        </span>
      <div class="pc-modal__card__inner-box ">
        <div class="alert-message">
            {{-- <div class="alert-circle">
                <div class="alert-circle__inner-line"></div>
            </div> --}}
            <div class="alert-message__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#e3000f" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
            </div>
            <div class="alert-messsge">You have an appointment for the selected date</div>
        </div>
                
      </div>
        

    </div>
</div>











{{-- ===============================================Enter Mobile Number ============================ --}}


{{-- <div class="pc-modal__card__inner-box">
    <h3 class="pc-modal__card__title">Confirm Appointment</h3>

    <p class="pc-modal__card__description">Kindly confirm your Physical Consultation with <span>Dr. Aneel Kumar</span>. </p>

    <div class="pc-modal__card__date-time">
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="black"/>
                    </svg>
                    
            </span>
            <p>
                date    <br>
                <strong>26 jun</strong>  (mon)
            </p>
        </div>
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="black"/>
                    </svg>
                    
            </span>
            
            <p>
                date    <br>
                <strong>26 jun</strong>  (mon)
            </p>
            

        </div>
    </div>

    <p class="pc-modal__card__label">
        Please enter the registered mobile number for the specific patient.
    </p>

    <div>
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-3">
                <div class="form-fields-wrapper ">
                    <input type="text" placeholder="India (+91)">
                </div>
            </div>
            <div class="form-fields-wrapper form-fields-wrapper--col-0">
                <div class="form-fields-wrapper ">
                    <input placeholder="Registered Mobile Number" type="text" name="contact">
                    @error('contact')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <button class="pc-modal__card__btn">Proceed</button>
    </div>
</div> --}}




{{-- =============================================CHoose patient ===================================== --}}

{{-- 
    <div class="pc-modal__card__inner-box">
    <h3 class="pc-modal__card__title">Choose Patient Name</h3>

    <p class="pc-modal__card__description">Kindly click to choose Patient Name and Patient ID for your
        consultation with <span>Dr. Aneel Kumar</span>. </p>

    <div class="pc-modal__card__patient-table">

        <table>
            <thead>
                <th>
                <td class="pc-modal__card__patient-table__heading">Patient Name</td>
                <td class="pc-modal__card__patient-table__heading">Patient ID</td>
                <td class="pc-modal__card__patient-table__heading">Registration Date</td>
                </th>
            </thead>

            <tbody>
                <tr>
                    <td class="">
                        
                    </td>
                    <td class="pc-modal__card__patient-table__name">
                        <input type="radio" name="name" checked>
                        <label for="name">Rohan Sharma</label>
                    </td>
                    <td class="pc-modal__card__patient-table__patient-id">112345</td>
                    <td class="pc-modal__card__patient-table__registration">
                        10th Dec, 2020
                    </td>
                </tr>
                <tr>
                    <td class="">
                        
                    </td>
                    <td class="pc-modal__card__patient-table__name">
                        <input type="radio" name="name">
                        <label for="name">Rohan Sharma</label>
                    </td>
                    <td class="pc-modal__card__patient-table__patient-id">112345</td>
                    <td class="pc-modal__card__patient-table__registration">
                        10th Dec, 2020
                    </td>
                </tr>
            </tbody>

            <tfoot>
                <td class="">
                    
                </td>
                <td class="pc-modal__card__patient-table__add-patient">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"
                            fill="#E3000F" />
                    </svg>

                    <label for="name">Add new patient</label>
                </td>
                <td class="pc-modal__card__patient-table__patient-id"></td>
                <td class="pc-modal__card__patient-table__registration">

                </td>
            </tfoot>
        </table>
    </div>

    <button class="pc-modal__card__btn">Proceed</button>


</div> --}}





{{-- ======================================================= Register User ====================================================== --}}
{{-- pc-modal__card__inner-box--registration --}}
{{-- 
<div class="pc-modal__card__inner-box ">
            <h3 class="pc-modal__card__title">Register Yourself</h3>
        
            <p class="pc-modal__card__description pc-modal__card__description--regitration">Kindly fill out this form to make an appointment with our doctor.</p>
        
            <div class="pc-modal__card__registration-form">
        
                <form action="
                ">
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
                    <div class="form-fields-wrapper form-fields-wrapper--col-2 form-fields-wrapper--col-2--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Age" name="firstname" type="text">
                            @error('firstname')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2 form-fields-wrapper--col-2--no-wrap">
                        <div class="form-fields-wrapper ">
                            <select placeholder="Last Name" name="lastname" type="text">
                                <option value=""> Gender</option>
                            </select>
                            @error('lastname')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-3 form-fields-wrapper--col-3--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input type="text" placeholder="India (+91)">
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-0 form-fields-wrapper--col-0--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number" type="text" name="contact">
                            @error('contact')
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
                            <input placeholder="Address" type="text" name="email">
                            @error('email')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
        
        
                </div>
                <div class="pc-modal__card__checkbox">
                    
                    <input type="checkbox">
                    <label for="">I understand, accept and agree to the terms & conditions. I hereby authorise Star Hospitals and their authorised partners to contact me through email and SMS or any other modes of communication. It will override my registry on NCPR.</label>
                </div>
                <button class="pc-modal__card__btn">Submit</button>
        
            </form>
            </div>
            
        </div>  --}}



{{-- ============================================================= COnfirm OTP ========================= --}}



{{-- <div class="pc-modal__card__inner-box">
    <h3 class="pc-modal__card__title">Confirm OTP</h3>

    <p class="pc-modal__card__description">Kindly confirm your Physical Consultation with <span>Dr. Aneel
            Kumar</span>. </p>

    <div class="pc-modal__card__date-time">
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"
                        fill="black" />
                </svg>

            </span>
            <p>
                date <br>
                <strong>26 jun</strong> (mon)
            </p>
        </div>
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"
                        fill="black" />
                </svg>

            </span>

            <p>
                date <br>
                <strong>26 jun</strong> (mon)
            </p>


        </div>
    </div>

    <p class="pc-modal__card__label">
        We have sent you an OTP on 9895678945
    </p>

    <div>
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-3">
                <div class="form-fields-wrapper pc-modal__card__otp-label">
                    <span style="margin-bottom:1em" for=""> Enter OTP <sup
                            style="color:#E3000F">*</sup></span>
                    <input type="text" placeholder="Enter OTP">
                </div>
            </div>

        </div>

        <button class="pc-modal__card__btn">Verify OTP</button>
    </div>

    <p class="pc-modal__card__label pc-modal__card__label--resend">
        Didn’t receive OTP? <span>Resend</span>
    </p>
</div> --}}