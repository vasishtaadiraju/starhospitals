<div class="int-enquiry-form">
        <div class="int-enquiry-form__image">
            <h2 class="section-heading">Enquiry Form</h2>
            <p>If you have any further queries about the medical services or facilities we provide for our international patients, fill out the inquiry form to contact our medical staff for guidance.</p>
    
                <img src="" data-src="{{Vite::asset('resources/images/int-patients/Rectangle 97.png')}}" alt="">
           
        </div>
        <div class="int-enquiry-form__content">
            <div class="int-enquiry-form__content__wrapper">
                <h3>Please fill in your details</h3>
            </div>
            <div class="int-enquiry-form__content__fields">
                <div class="form-input">
                    <input class="form-input__field form-input__field--w-1"  placeholder="Full name"  type="text">
                </div>
                <span class="error-message"></span>
                <div class="form-input">
                    <input class="form-input__field int-enquiry-form__content__fields--country" placeholder="UK (+44)" type="text">
                    <input class="form-input__field int-enquiry-form__content__fields--contact" placeholder="Phone number" type="text">
                </div>
                <div class="form-input">
                    <input class="form-input__field form-input__field--w-1" placeholder="Country" type="text">
                </div>
                <div class="form-input">
                    <select class="form-input__field form-input__field--w-1"  type="text">
                        <option value="">Department</option>
                    </select>
                </div>
                <div class="form-input">
                    <input class="form-input__field form-input__field--w-1 file-upload-field" placeholder="Upload report" type="text" readonly>
                    <input type="file" name="report" id="" hidden>
                </div>

                
            </div>
            <button class="int-enquiry-form__content__submit">Submit</button>
            <p>You will receive a confirmation message on your phone</p>
        </div>
</div>