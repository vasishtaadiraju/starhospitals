{{-- <div class="p-enq">
    <span class="p-enq__close">X</span>
    <div class="p-enq__wrapper">
        <h2>Please Fill in Your Details</h2>
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
                            @foreach ([] as $item)
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
            <button class="form-submit-button" >Submit</button>
        </form>
    </div>
</div> --}}