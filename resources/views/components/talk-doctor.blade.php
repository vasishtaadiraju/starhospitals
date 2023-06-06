<div class="talk-doctor" id="consult-our-expert">
    <div class="talk-doctor__image-wrapper">
        <img src="" data-src="{{Vite::asset('resources/images/talk-doctor.png')}}" alt="">
    </div>
    <div class="talk-doctor__form-wrapper">
        <div class="talk-doctor__form-wrapper__content">
            <h2 class="section-heading">Talk to a Heart Doctor</h2>
            <form action="">
                <div class="talk-doctor-form">
                    <div class="form-input">
                        <input class="form-input__field form-input__field--w-2" type="text" placeholder="Name">
                        <input class="form-input__field form-input__field--w-2" type="text" placeholder="Phone Number">
                    </div>
                    <div class="form-input">
                        
                        <select class="form-input__field form-input__field--w-1" name="" id="">
                            @foreach ($coes as $item)
                            <option value="{{$item->id}}" @if($content->id == $item->id) selected @endif>{{$item->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-input">
                        <textarea name="" class="form-input__field form-input__field--w-1" id="" cols="30" rows="10" placeholder="Type Your Message"></textarea>
                    </div>
    
                    <div class="form-input">
                        <button class="contact-us__form__submit talk-doctor__submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        
       
    </div>
</div>