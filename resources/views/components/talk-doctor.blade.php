<div class="talk-doctor" >
    <div class="talk-doctor__image-wrapper">
        <img src="" data-src="{{Vite::asset('resources/images/talk-doctor.png')}}" alt="">
    </div>
    <div class="talk-doctor__form-wrapper">
        <div class="talk-doctor__form-wrapper__content">
            <h2 class="section-heading" >Talk to a {{$content->name}} Doctor</h2>
            <form action="/talkToDoctor" method="post">
                @csrf
                
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Name"
                                type="text"class="@error('name')
                            error-field
                        @enderror"
                                name="name">
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2" >
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number"
                                type="text"  class="@error('contact')
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
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
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
                    
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1" id="consult-our-expert">
                        <div class="form-fields-wrapper ">
                            <input
                                type="text"class="@error('department')
                            error-field
                        @enderror"
                                name="department" value="{{$content->name}}" disabled>
                            @error('department')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                </div>

                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <textarea placeholder="Type your Message"
                                type="text"class="@error('message')
                            error-field
                        @enderror"
                                name="message"> </textarea>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <button class="form-submit-button">Submit</button>
            </form>
        </div>
        
       
    </div>
</div>