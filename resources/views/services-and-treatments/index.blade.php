@extends('layout.main')
@section('css')
    @vite(['resources/scss/find-doctor.scss', 'resources/js/condition-landing.js'])
@endsection
@section('meta-title',"'Advanced Treatments and Tests at STAR Hospitals - Book Now'")
@section('meta-description',"'At STAR Hospitals, experience the latest, advanced and innovative treatments and tests for safe and faster recovery. Experience top-tier healthcare for your well-being.'")
@section('content')
<x-banner :imgurl="'condition'" :text="'Treatments & Tests'" :$breadcrum/>

<x-gap/>
{{-- <x-heading :title="''" :description="''"/> --}}

{{-- =======================================================Filters ========================================== --}}
<div class="filter">
    {{-- <div class="filter__fields-wrapper" style="position: relative">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/search-doc.png') }}" alt="">

        <input type="text" class="auto-complete-input" placeholder="Search By Name">
        <div class="auto-complete">
            <ul class="auto-complete__list">

            </ul>
        </div>
    </div> --}}
    <div class="filter__fields-wrapper">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/location.png') }}" alt="">

        <select type="text" class="coe-select-box" id="coe-select-box" data-type="location" placeholder="Enter Doctor Name">
            <option value="">Filter by Centres of Excellence</option>
            @foreach ($coes as $coe)
                <option value="{{$coe->id}}">{{$coe->name}}</option>
            @endforeach
            
        </select>
    </div>
    <div class="filter__fields-wrapper">

        <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

        <select type="text" class="speciality-select-box" id="speciality-select-box" data-type="coe" placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
            
        </select>
    </div>

    

        {{-- <img src="" data-src="{{ Vite::asset('resources/images/Icons/sthetoscope.png') }}" alt="">

        <select type="text" class="speciality-select-box" id="speciality-select-box" data-type="coe" placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
            
        </select> --}}

        <button class="filter__fields-wrapper conditions-search" style="width:100%;height:100%;border:none;background-color:#E3000F;color:white;border-radius:5px;padding:1em 0px;text-align:center;font-family:'Plus Jakarta Sans Bold';display:flex;justify-content:center;cursor:pointer">Search</button>
    
</div>



{{-- ============================================================= FIlters End =========================== --}}

{{-- <x-gap/> --}}



{{-- ==================================================== Condition Results Cards ================================ --}}

<div class="conditions-root">

    {{-- <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 2.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div>

    <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 3.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div>

    <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 4.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div>


    <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 2.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div>

    <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 3.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div>

    <div class="conditions-root__cards">
        <img data-src="{{Vite::asset('resources\images\conditions-treatment\wepik-export-20230424074108 4.png')}}" alt="">

        <div class="conditions-root__cards__details">
            <h3>Condition Name</h3>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas quas sit magni iste est, culpa blanditiis necessitatibus quidem ut ex ullam!
            </p>

            <a href="#" class="conditions-root__cards__details__read-more">
                Read More
            </a>
        </div>
    </div> --}}
    
    
</div>

<x-gap/>


{{-- ==================================================  Pagination ====================== --}}


<div class="pagination">
    <div class="pagination__wrapper">
        <ul class="pagination__pages">
            <li><a class="pagination__pages__link pagination__pages__link--active" href="#">1</a></li>
            <li><a class="pagination__pages__link" href="#">2</a></li>
            <li><a class="pagination__pages__link" href="#">3</a></li>
            <li><a class="pagination__pages__link" href="#">4</a></li>
            <li><a class="pagination__pages__link" href="#">5</a></li>
        </ul>
        <div class="pagination__buttons">
            <a class="pagination__buttons__button pagination__buttons__button-prv" href="#">Previous</a>
            <a href="#" class="pagination__buttons__button pagination__buttons__button--active pagination__buttons__button-next">Next</a>
        </div>
    </div>
    <p>Showing results <span id="from"></span> - <span id="to"></span> of <span id="total"></span></p>
</div>

@endsection