<div class="footer">
    <div class="footer__wrapper">
        <div class="footer__columns footer__columns--logo">
            {{-- <img class="footer__columns--logo--star" src="" data-src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            <img src="" data-src="{{Vite::asset('resources/images/logo/NABH-Logo 1.png')}}" alt="">
            <img src="" data-src="{{Vite::asset('resources/images/logo/Layer 1.png')}}" alt=""> --}}
            {{-- <svg width="128" height="86" viewBox="0 0 128 86" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="128" height="85.1376" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1409_1462" transform="scale(0.00458716 0.00689655)"/>
                </pattern>
                
                </defs>
                </svg> --}}
                
               
                    <img data-src="{{Vite::asset('resources/images/logo/Star Logo - White 1.svg')}}" alt="">
                        

                
                
                
                    <img data-src="{{Vite::asset('resources/images/logo/15 y ex 1.svg')}}" alt="">
                        

                <img data-src="{{Vite::asset('resources/images/logo/Layer 1.svg')}}" alt="">

        
                        <img data-src="{{Vite::asset('resources/images/logo/NABH-Logo 2.svg')}}" alt="">
                            
                    </div>










        <div class="footer__columns">
            <ul class="footer__columns__option">
                <li class="footer__columns__option__label footer__columns__option__label--dropdown">Important Links
                    <ul class="footer__columns__option__label--dropdown__option">
                        <li class="footer__columns__option__item"><a href="{{route('find-doctor')}}">Find a Doctor</a></li>
                        {{-- <li class="footer__columns__option__item"><a href="">Book a Video Consultation</a></li> --}}
                        <li class="footer__columns__option__item"><a href="{{route('about')}}"> About Us</a></li>
                        
                        <li class="footer__columns__option__item"><a href="{{route('contact')}}">Contact</a></li>
                        {{-- <li class="footer__columns__option__item"><a href="{{route('international_patient')}}">International Patients</a></li> --}}
                        {{-- <li class="footer__columns__option__item"><a href="{{route('condition.landing')}}">Treatments & Tests</a></li> --}}
                        <li class="footer__columns__option__item"><a href="#">Bio Medical Waste</a></li>
                        
                        {{--  <li class="footer__columns__option__item"><a href="">Admission & Discharge Process</a>
                        </li>
                        <li class="footer__columns__option__item"><a href="">Insurance & Empanelment</a></li>
                        <li class="footer__columns__option__item"><a href="">Patient Guide</a></li>
                        <li class="footer__columns__option__item"><a href="">Visitor Guide</a></li>
                        <li class="footer__columns__option__item"><a href="">FAQs</a></li>
                        <li class="footer__columns__option__item"><a href="">Get a Vaccination</a></li> --}}

                    </ul>
                </li>

            </ul>
           
        </div>

        
 <div class="footer__columns">
    <ul class="footer__columns__option">
      
        <li class="footer__columns__option__label footer__columns__option__label--dropdown">Locations
            <ul class="footer__columns__option__label--dropdown__option">
                @foreach ($branches as $item)
                <li class="footer__columns__option__item"><a href="{{route('branch',$item->slug)}}">{{$item->name}}</a></li>
                    
                @endforeach
                 {{-- <li class="footer__columns__option__item"><a href="">Financial District</a></li>  --}}
            </ul>
        </li>
    </ul> 
</div>
<div class="footer__columns">
    <ul class="footer__columns__option">
      
        <li class="footer__columns__option__label footer__columns__option__label--dropdown">Specialities
            <ul class="footer__columns__option__label--dropdown__option">
                {{-- @foreach ($branches as $item) --}}
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/cardiology-hospital-in-hyderabad">Cardiology</a></li>
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/cardiac-surgery-hospital-in-hyderabad">Cardiothoracic Surgery</a></li>
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/orthopedics-hospital-in-hyderabad">Orthopedics</a></li>
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/arthroscopy-and-sports-medicine-hospital-in-hyderabad">Sports Medicine</a></li>
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/medical-gastroenterology-hospital-in-hyderabad">Medical Gastroenterology</a></li>
                <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/surgical-gastroenterology-hospital-in-hyderabad">Surgical Gastroenterology</a></li>
                {{-- <li class="footer__columns__option__item"><a href="https://starhospitals.in/specialities/cardiology-hospital-in-hyderabad">Cardiology</a></li> --}}
                    
                {{-- @endforeach --}}
                 {{-- <li class="footer__columns__option__item"><a href="">Financial District</a></li>  --}}
            </ul>
        </li>
    </ul> 
</div>



       








    <!--    <div class="footer__columns">
            <ul class="footer__columns__option">
                <li class="footer__columns__option__label footer__columns__option__label--dropdown">Quick Links
                    <ul class="footer__columns__option__label--dropdown__option">
                        {{-- <li class="footer__columns__option__item"><a href="{{route('about')}}"> About Us</a></li> --}}
                        {{-- <li class="footer__columns__option__item"><a href="">CSR</a></li>
                        <li class="footer__columns__option__item"><a href="">Careers</a></li>
                        <li class="footer__columns__option__item"><a href="">Bio Medical Waste</a></li>
                        <li class="footer__columns__option__item"><a href="">Research & Publications</a></li>
                        <li class="footer__columns__option__item"><a href="">Quality & Accreditation</a></li>
                        <li class="footer__columns__option__item"><a href="">Testimonials</a></li>
                        <li class="footer__columns__option__item"><a href="">Doctor Videos</a></li> --}}

                    </ul>
                </li>

            </ul>
        </div> -->





        {{-- <div class="footer__columns">
            <ul class="footer__columns__option">
                <li class="footer__columns__option__label" id="second-speciality">
                    <ul class="footer__columns__option__label--dropdown__option speciality-second-column" style="">
                      
                        

                        @php
                            $j = 0;                        @endphp
                        @foreach ($coes as $item)

                        @foreach ($item->specialities as $speciality)
                        @if($j > $i)
                        <li class="footer__columns__option__item"><a href="{{route('speciality',$speciality->slug)}}">{{$speciality->name}}</a></li>   
                        
                        @endif
                        @php
                            $j++;
                        @endphp
                        @endforeach
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div> --}}
        
        <div class="footer__columns">
            <ul class="footer__columns__option">

                <li class="footer__columns__option__label footer__columns__option__label--social-icon-wrapper">Follow Star Hospitals

                    <div class="footer__social-icons">
                        <a target="_blank"href="https://www.facebook.com/starhospitalsin"> <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.002 0C4.4791 0 0.00195312 4.47715 0.00195312 10C0.00195312 14.9913 3.6588 19.1283 8.43947 19.8785V12.8906H5.90038V10H8.43947V7.79688C8.43947 5.29063 9.93237 3.90625 12.2166 3.90625C13.3107 3.90625 14.4551 4.10156 14.4551 4.10156V6.5625H13.1941C11.9519 6.5625 11.5645 7.33334 11.5645 8.1242V10H14.3379L13.8946 12.8906H11.5645V19.8785C16.3451 19.1283 20.002 14.9913 20.002 10C20.002 4.47715 15.5248 0 10.002 0Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a target="_blank"href="https://twitter.com/starhospitalsin/"> 
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_21_2)">
                                <path d="M11.8618 8.46864L19.1472 0H17.4208L11.0949 7.3532L6.04244 0H0.215027L7.85533 11.1193L0.215027 20H1.94152L8.62181 12.2348L13.9576 20H19.785L11.8614 8.46864H11.8618ZM9.49714 11.2173L8.72301 10.1101L2.5636 1.29967H5.21539L10.1861 8.40994L10.9602 9.51718L17.4216 18.7594H14.7698L9.49714 11.2177V11.2173Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_21_2">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </a>
                        <a target="_blank"href="https://www.instagram.com/starhospitalsin/">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0291 0.000976562C12.1545 0.00283656 12.7248 0.00878657 13.2176 0.0234566L13.4117 0.0298066C13.6359 0.0377766 13.8571 0.0477767 14.1238 0.0602767C15.1879 0.109437 15.9138 0.277777 16.5513 0.525277C17.2104 0.779437 17.7671 1.12278 18.3229 1.67861C18.8779 2.23444 19.2213 2.79278 19.4763 3.45028C19.7229 4.08694 19.8913 4.81361 19.9413 5.87778C19.9532 6.14444 19.9628 6.36564 19.9707 6.58989L19.977 6.78397C19.9916 7.27672 19.9983 7.8471 20.0004 8.9725L20.0012 9.7182C20.0013 9.8093 20.0013 9.9033 20.0013 10.0003L20.0012 10.2824L20.0006 11.0281C19.9987 12.1535 19.9928 12.7238 19.9781 13.2166L19.9717 13.4107C19.9638 13.6349 19.9538 13.8561 19.9413 14.1228C19.8921 15.1869 19.7229 15.9128 19.4763 16.5503C19.2221 17.2094 18.8779 17.7661 18.3229 18.3219C17.7671 18.8769 17.2079 19.2203 16.5513 19.4753C15.9138 19.7219 15.1879 19.8903 14.1238 19.9403C13.8571 19.9522 13.6359 19.9618 13.4117 19.9697L13.2176 19.976C12.7248 19.9906 12.1545 19.9973 11.0291 19.9994L10.2834 20.0002C10.1923 20.0003 10.0983 20.0003 10.0013 20.0003L9.71917 20.0002L8.97347 19.9996C7.84807 19.9977 7.27769 19.9918 6.78494 19.9771L6.59086 19.9707C6.36661 19.9628 6.14541 19.9528 5.87875 19.9403C4.81458 19.8911 4.08958 19.7219 3.45125 19.4753C2.79291 19.2211 2.23541 18.8769 1.67958 18.3219C1.12375 17.7661 0.781253 17.2069 0.526253 16.5503C0.278753 15.9128 0.111253 15.1869 0.0612533 14.1228C0.0493733 13.8561 0.0396832 13.6349 0.0318332 13.4107L0.0255432 13.2166C0.0109132 12.7238 0.0042433 12.1535 0.0020833 11.0281L0.00195312 8.9725C0.00381312 7.8471 0.00976314 7.27672 0.0244331 6.78397L0.0307832 6.58989C0.0387532 6.36564 0.0487533 6.14444 0.0612533 5.87778C0.110413 4.81278 0.278753 4.08778 0.526253 3.45028C0.780413 2.79194 1.12375 2.23444 1.67958 1.67861C2.23541 1.12278 2.79375 0.780277 3.45125 0.525277C4.08875 0.277777 4.81375 0.110277 5.87875 0.0602767C6.14541 0.0483967 6.36661 0.0387066 6.59086 0.0308566L6.78494 0.0245667C7.27769 0.00993665 7.84807 0.00326674 8.97347 0.00110674L11.0291 0.000976562ZM10.0013 5.00028C7.23835 5.00028 5.00125 7.23981 5.00125 10.0003C5.00125 12.7632 7.24078 15.0003 10.0013 15.0003C12.7642 15.0003 15.0013 12.7607 15.0013 10.0003C15.0013 7.23738 12.7617 5.00028 10.0013 5.00028ZM10.0013 7.00028C11.6582 7.00028 13.0013 8.3429 13.0013 10.0003C13.0013 11.6572 11.6586 13.0003 10.0013 13.0003C8.34437 13.0003 7.00125 11.6576 7.00125 10.0003C7.00125 8.3434 8.34387 7.00028 10.0013 7.00028ZM15.2513 3.50028C14.562 3.50028 14.0013 4.06018 14.0013 4.74943C14.0013 5.43867 14.5612 5.99944 15.2513 5.99944C15.9405 5.99944 16.5013 5.43954 16.5013 4.74943C16.5013 4.06018 15.9396 3.49941 15.2513 3.50028Z"
                                    fill="white" />
                            </svg>

                        </a>
                        <a target="_blank"href="https://www.youtube.com/@StarHospitalsHyderabad/">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.2439 0C10.778 0.00294 12.1143 0.0158601 13.5341 0.0727301L14.0375 0.0946798C15.467 0.16236 16.8953 0.27798 17.6037 0.4755C18.5486 0.74095 19.2913 1.5155 19.5423 2.49732C19.942 4.05641 19.992 7.0994 19.9982 7.8358L19.9991 7.9884V7.9991C19.9991 7.9991 19.9991 8.0028 19.9991 8.0099L19.9982 8.1625C19.992 8.8989 19.942 11.9419 19.5423 13.501C19.2878 14.4864 18.5451 15.261 17.6037 15.5228C16.8953 15.7203 15.467 15.8359 14.0375 15.9036L13.5341 15.9255C12.1143 15.9824 10.778 15.9953 10.2439 15.9983L10.0095 15.9991H9.9991C9.9991 15.9991 9.9956 15.9991 9.9887 15.9991L9.7545 15.9983C8.6241 15.9921 3.89772 15.941 2.39451 15.5228C1.4496 15.2573 0.70692 14.4828 0.45587 13.501C0.0561999 11.9419 0.00624 8.8989 0 8.1625V7.8358C0.00624 7.0994 0.0561999 4.05641 0.45587 2.49732C0.7104 1.51186 1.45308 0.73732 2.39451 0.4755C3.89772 0.0572301 8.6241 0.00622 9.7545 0H10.2439ZM7.99911 4.49914V11.4991L13.9991 7.9991L7.99911 4.49914Z"
                                    fill="white" />
                            </svg>

                        </a>
                        <a target="_blank"href="https://www.linkedin.com/company/star-hospitals-hyderabad/"><svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.94146 1.99993C4.94109 2.81424 4.44706 3.54702 3.69232 3.85273C2.93758 4.15845 2.07285 3.97605 1.50588 3.39155C0.938906 2.80704 0.782926 1.93715 1.11148 1.19207C1.44004 0.44699 2.18752 -0.0245006 3.00146 -7.061e-05C4.08253 0.0323794 4.94195 0.918369 4.94146 1.99993ZM5.00146 5.47993H1.00146V17.9999H5.00146V5.47993ZM11.3215 5.47993H7.34146V17.9999H11.2815V11.4299C11.2815 7.7699 16.0515 7.4299 16.0515 11.4299V17.9999H20.0015V10.0699C20.0015 3.89993 12.9415 4.12993 11.2815 7.1599L11.3215 5.47993Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>

                </li>
            </ul>
        </div>
        
        
        
        
        
        {{-- <div class="footer__columns">
            <ul class="footer__columns__option">
  
                  <li class="footer__columns__option__label footer__columns__option__label--dropdown">Locations
                      <ul class="footer__columns__option__label--dropdown__option">
                          @foreach ($branches as $item)
                          <li class="footer__columns__option__item"><a href="{{route('branch',$item->slug)}}">{{$item->name}}</a></li>
                              
                          @endforeach
                      </ul>
                  </li>
              </ul> 
        </div> --}}
        
        <div class="footer__columns footer__columns--logo">


        </div>
        <div class="footer__columns footer__columns--logo">


        </div>
        <div class="footer__columns footer__columns--logo">


        </div>
        

        




        {{-- <div class="footer__columns">
          <!--  <ul class="footer__columns__option">

                <li class="footer__columns__option__label footer__columns__option__label--dropdown">News & Media
                    <ul class="footer__columns__option__label--dropdown__option">
                        <li class="footer__columns__option__item"><a href="">News Articles</a></li>

                    </ul>
                </li>
            </ul> -->
        </div> --}}








        {{-- <div class="footer__columns">
          <!--  <ul class="footer__columns__option">

                <li class="footer__columns__option__label footer__columns__option__label--dropdown">Blog
                    <ul class="footer__columns__option__label--dropdown__option">
                        <li class="footer__columns__option__item"><a href="">Star Blog</a></li>
                    </ul>
                </li>
            </ul> -->
        </div> --}}





        
    </div>
    <p class="footer__copyright">

        <span> <a href="{{route('t-c')}}">Terms & Conditions </a> <span>|</span> <a href="{{route('t-c')}}"> Privacy Policy </a></span>
        <span class="footer__copyright__pipe">|</span>
        <span> © 2008-2023 Star Hospitals, All Rights Reserved</span>
    </p>
</div>
<div class="scroll-top-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path d="M7.83336 3.52325L7.83336 13.6666L6.16669 13.6666L6.16669 3.52325L1.69669 7.99325L0.518357 6.81492L7.00002 0.333253L13.4817 6.81492L12.3034 7.99325L7.83336 3.52325Z" fill="white"/>
        </svg>
</div>