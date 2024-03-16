<x-heading :title="'Why Choose Us'" :description="''" />
<div class="choose-us ">
    {{--  @if($content != null)
        @if(isset($content->choose1_icon) && $content->choose1_icon != null)  --}}
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                <img  src="" data-src="{{Vite::asset('resources/images/Icons/medical 1.png')}}" alt="">
                {{--  {!!$content->choose1_icon !!}  --}}
            </div>
            <div>
                <h3>Empathy</h3>
                <p>Patients are more than a medical case - they are individuals with unique needs and concerns. We foster a culture of empathy among our staff, ensuring that you all feel heard, understood and supported.
                    Expertise
                    </p>
                {{--  <h3>{{ $content->choose1_title }}</h3>  --}}
                {{--  <p>{{$content->choose1_description}}</p>  --}}
            </div>
        </div>
        {{--  @endif  --}}
        {{--  @if(isset($content->choose2_icon) && $content->choose2_icon != null)  --}}
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                <img  src="" data-src="{{Vite::asset('resources/images/Icons/Group.png')}}" alt="">
                {{--  {!!$content->choose2_icon !!}  --}}
            </div>
            <div>
                <h3>Expertise</h3>
                <p>All our doctors, nurses and non-medical staff are committed to being the most skilled and knowledgeable in their respective fields. We invest in the most advanced and innovative treatments.
                </p>
                {{--  <h3>{{ $content->choose2_title }}</h3>  --}}
                {{--  <p>{{$content->choose2_description}}</p>  --}}
            </div>
        </div>
        {{--  @endif  --}}
        {{--  @if(isset($content->choose3_icon) && $content->choose3_icon != null)  --}}
        <div class="choose-us__card">
            <div class="choose-us__card__icon-wrapper">
                <img  src="" data-src="{{Vite::asset('resources/images/Icons/Group 2.png')}}" alt="">
                {{--  {!!$content->choose3_icon !!}  --}}
            </div>
            <div>
                <h3>Excellence</h3>
                <p>We strive for excellence in every aspect of your experience right from providing state of the art facilities, compassionate guidance, highest quality care to exceptional medical outcomes.</p>
                {{--  <h3>{{ $content->choose3_title }}</h3>  --}}
                {{--  <p>{{$content->choose3_description}}</p>  --}}
            </div>
        </div>
        {{--  @endif  --}}
    {{--  @endif  --}}
</div>
