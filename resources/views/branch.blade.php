@extends('layout.main')
@section('css')
@vite(['resources/scss/branch.scss', 'resources/js/app-book.js'])
@endsection
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text" :$breadcrum/>  
    <x-scroll-tabs :$tabs />
<x-gap/>    
<x-about-speciality :$content/>
<x-gap/>




<div class="highlights">
    <h1 class="section-heading">Key Highlights</h1>

    <div class="highlights__container">
        <div class="highlights__card">
             <div class="highlights__card__icon">
                {{-- <img src="" data-src="{{Vite::asset('resources/images/Icons/awareness 1.png')}}" alt=""> --}}
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" >
                    <g clip-path="url(#clip0_771_351)">
                    <path d="M46.1633 25.5091C46.1914 25.2935 46.1914 25.181 46.2102 24.9841L46.2195 24.8716C46.4539 20.1935 44.9727 16.0872 42.0477 13.2935C39.1227 10.4997 34.8945 9.20599 30.1508 9.65599C20.8695 10.5466 14.6445 16.7529 14.6445 25.0966C14.6445 29.3154 16.2195 34.0216 18.8445 37.6685C20.6539 40.181 21.6102 43.2279 21.6102 46.4904V49.406C21.6102 49.8935 21.9945 50.2872 22.482 50.306C22.407 50.5497 22.3508 50.7935 22.3508 51.0654C22.3508 51.7029 22.5945 52.2747 22.9695 52.7247C22.5852 53.1747 22.3508 53.7466 22.3508 54.3841C22.3508 55.6591 23.2977 56.7185 24.5164 56.906C24.9102 58.6685 26.4852 59.9997 28.3695 59.9997H33.0758C34.9602 59.9997 36.5352 58.6779 36.9289 56.906C38.157 56.7091 39.0945 55.6591 39.0945 54.3841C39.0945 53.7466 38.8508 53.1747 38.4758 52.7247C38.8602 52.2747 39.0945 51.7029 39.0945 51.0654C39.0945 50.8029 39.0477 50.5591 38.9727 50.3154H39.1695C39.6758 50.3154 40.0789 49.9122 40.0789 49.406V42.9091C40.0789 42.6279 40.3039 42.4029 40.5852 42.4029H43.3133C45.1508 42.4029 46.6414 40.9122 46.6414 39.0747V35.0904L48.0477 34.9216C48.582 34.856 49.0508 34.5372 49.2945 34.0591C49.5477 33.581 49.5383 33.0091 49.3133 32.606L46.1633 25.5091ZM33.0758 58.181H28.3695C27.5164 58.181 26.7852 57.6747 26.4383 56.9529H35.007C34.6602 57.6747 33.9289 58.181 33.0758 58.181ZM36.5352 55.1341H24.9102C24.4977 55.1341 24.1602 54.7966 24.1602 54.3841C24.1602 53.9716 24.4977 53.6341 24.9102 53.6341H36.5352C36.9477 53.6341 37.2852 53.9716 37.2852 54.3841C37.2758 54.7966 36.9477 55.1341 36.5352 55.1341ZM37.2758 51.0747C37.2758 51.4872 36.9383 51.8247 36.5258 51.8247H24.9008C24.4883 51.8247 24.1508 51.4872 24.1508 51.0747C24.1508 50.6622 24.4883 50.3247 24.9008 50.3247H36.5258C36.9477 50.3247 37.2758 50.6529 37.2758 51.0747ZM45.6289 33.3841C45.1695 33.4404 44.8227 33.8247 44.8227 34.2841V39.0747C44.8227 39.9091 44.1477 40.5841 43.3133 40.5841H40.5945C39.3102 40.5841 38.2695 41.6247 38.2695 42.9091V48.4966H36.5352H24.9102H23.4195V46.4997C23.4195 42.8529 22.3414 39.431 20.3164 36.6091C17.8977 33.2529 16.4539 28.9497 16.4539 25.0966C16.4539 17.7372 22.0227 12.2622 30.3195 11.4654C34.5852 11.0622 38.2039 12.1404 40.782 14.606C43.3133 17.0247 44.5977 20.6435 44.3914 24.7779L44.382 24.8904C44.3727 25.0966 44.3633 25.181 44.3164 25.4997C44.2883 25.6685 44.3164 25.8466 44.382 26.006L47.5602 33.1497L45.6289 33.3841Z" fill="#E3000F"/>
                    <path d="M30.0578 7.19063C30.5641 7.19063 30.9672 6.7875 30.9672 6.28125V0.909375C30.9672 0.403125 30.5641 0 30.0578 0C29.5516 0 29.1484 0.403125 29.1484 0.909375V6.28125C29.1484 6.7875 29.5516 7.19063 30.0578 7.19063Z" fill="#E3000F"/>
                    <path d="M39.4311 9.73173C39.5718 9.8161 39.7311 9.8536 39.8811 9.8536C40.1999 9.8536 40.4999 9.69423 40.6686 9.4036L43.3593 4.74423C43.6124 4.31298 43.4624 3.75048 43.0218 3.50673C42.5905 3.2536 42.028 3.4036 41.7843 3.84423L39.0936 8.49423C38.8405 8.92548 38.9905 9.4786 39.4311 9.73173Z" fill="#E3000F"/>
                    <path d="M47.0625 17.0716C47.2125 17.0716 47.3718 17.0341 47.5125 16.9498L52.1625 14.2591C52.5937 14.006 52.7437 13.4529 52.5 13.0216C52.2468 12.5904 51.6937 12.4404 51.2625 12.6841L46.6125 15.3748C46.1812 15.6279 46.0312 16.181 46.275 16.6123C46.4437 16.9123 46.7531 17.0716 47.0625 17.0716Z" fill="#E3000F"/>
                    <path d="M55.041 25.0967H49.6691C49.1629 25.0967 48.7598 25.4998 48.7598 26.0061C48.7598 26.5123 49.1629 26.9154 49.6691 26.9154H55.041C55.5473 26.9154 55.9504 26.5123 55.9504 26.0061C55.9504 25.5092 55.5473 25.0967 55.041 25.0967Z" fill="#E3000F"/>
                    <path d="M12.4877 34.9502L7.82835 37.6408C7.3971 37.8939 7.2471 38.447 7.50023 38.8783C7.66898 39.1689 7.97835 39.3283 8.28773 39.3283C8.43773 39.3283 8.5971 39.2908 8.73773 39.2064L13.3877 36.5158C13.819 36.2627 13.969 35.7095 13.7252 35.2783C13.4721 34.847 12.919 34.7064 12.4877 34.9502Z" fill="#E3000F"/>
                    <path d="M11.2414 25.9035C11.2414 25.3973 10.8383 24.9941 10.332 24.9941H4.96016C4.45391 24.9941 4.05078 25.3973 4.05078 25.9035C4.05078 26.4098 4.45391 26.8129 4.96016 26.8129H10.332C10.8289 26.8035 11.2414 26.4004 11.2414 25.9035Z" fill="#E3000F"/>
                    <path d="M13.4436 15.2813L8.78426 12.5907C8.35301 12.3376 7.79051 12.4876 7.54676 12.9282C7.29364 13.3595 7.44364 13.922 7.88426 14.1657L12.5343 16.8563C12.6749 16.9407 12.8343 16.9782 12.9843 16.9782C13.303 16.9782 13.603 16.8188 13.7718 16.5282C14.0343 16.0876 13.8843 15.5345 13.4436 15.2813Z" fill="#E3000F"/>
                    <path d="M19.4266 9.3467C19.5953 9.63733 19.9047 9.7967 20.2141 9.7967C20.3641 9.7967 20.5235 9.7592 20.6641 9.67483C21.0953 9.4217 21.2453 8.86858 21.0016 8.43733L18.311 3.78733C18.0578 3.3467 17.5047 3.20608 17.0735 3.44983C16.6328 3.70295 16.4922 4.25608 16.736 4.68733L19.4266 9.3467Z" fill="#E3000F"/>
                    <path d="M41.522 22.3591C41.2876 22.2278 40.997 22.2091 40.7532 22.3122L40.5938 22.3778C40.1063 22.5653 39.5532 22.3216 39.3657 21.8434C39.272 21.5997 39.2813 21.3559 39.3845 21.1216C39.4876 20.8872 39.6657 20.7091 39.9001 20.6247L40.0595 20.5591C40.3126 20.4653 40.5095 20.2591 40.5938 20.0059C40.6782 19.7528 40.6501 19.4716 40.5095 19.2372C39.6751 17.8778 38.5313 16.6872 37.2001 15.7966C36.9751 15.6466 36.6938 15.5997 36.4407 15.6747C36.1782 15.7497 35.972 15.9372 35.8595 16.1809L35.7938 16.3403C35.5876 16.8091 34.997 17.0247 34.547 16.8278C34.0688 16.6216 33.8532 16.0591 34.0595 15.5809L34.1251 15.4216C34.2376 15.1778 34.2282 14.8966 34.1063 14.6528C33.9845 14.4091 33.7688 14.2309 33.5063 14.1747C31.9595 13.7997 30.3095 13.7716 28.7345 14.0809C28.472 14.1372 28.2376 14.2966 28.1157 14.5403C27.9845 14.7747 27.9657 15.0559 28.0688 15.3091L28.1251 15.4684C28.3126 15.9559 28.0782 16.4997 27.5907 16.6872C27.1126 16.8747 26.5501 16.6309 26.3626 16.1528L26.297 15.9934C26.2032 15.7403 25.997 15.5434 25.7345 15.4591C25.4813 15.3747 25.2001 15.4028 24.9657 15.5434C23.6063 16.3778 22.4251 17.5216 21.5251 18.8528C21.3751 19.0778 21.3282 19.3591 21.4032 19.6122C21.4782 19.8747 21.6657 20.0809 21.9095 20.1934L22.0688 20.2591C22.3032 20.3622 22.4813 20.5403 22.5657 20.7841C22.6595 21.0184 22.6501 21.2809 22.5563 21.5059C22.3501 21.9653 21.797 22.2091 21.3095 21.9934L21.1501 21.9278C20.9063 21.8247 20.6251 21.8247 20.3813 21.9466C20.1376 22.0684 19.9688 22.2841 19.9032 22.5466C19.5282 24.1028 19.5001 25.7528 19.8095 27.3184C19.8657 27.5809 20.0251 27.8059 20.2688 27.9372C20.5032 28.0684 20.7845 28.0872 21.0376 27.9841L21.197 27.9184C21.6938 27.7216 22.2376 27.9747 22.4251 28.4528C22.6126 28.9403 22.3782 29.4841 21.8907 29.6809L21.7313 29.7466C21.4782 29.8497 21.2907 30.0466 21.2063 30.3091C21.122 30.5622 21.1501 30.8434 21.3001 31.0778C22.1345 32.4372 23.2782 33.6278 24.6095 34.5184C24.8345 34.6684 25.1063 34.7059 25.3688 34.6403C25.6313 34.5653 25.8376 34.3778 25.9501 34.1341L26.0157 33.9747C26.2126 33.5059 26.7751 33.2809 27.2626 33.4872C27.497 33.5903 27.6751 33.7684 27.7595 34.0028C27.8532 34.2372 27.8438 34.4903 27.7407 34.7247L27.6751 34.8841C27.572 35.1278 27.572 35.4091 27.6938 35.6528C27.8157 35.8966 28.0313 36.0653 28.2938 36.1309C29.147 36.3372 30.0188 36.4403 30.8907 36.4403C31.6126 36.4403 32.3438 36.3653 33.0657 36.2247C33.3282 36.1684 33.5626 36.0091 33.6845 35.7653C33.8157 35.5309 33.8345 35.2497 33.7313 34.9966L33.6657 34.8372C33.572 34.6028 33.5813 34.3497 33.6845 34.1153C33.7876 33.8809 33.9657 33.7028 34.2001 33.6091C34.6782 33.4216 35.2407 33.6747 35.4282 34.1434L35.4938 34.3028C35.597 34.5559 35.7938 34.7434 36.0563 34.8278C36.3095 34.9122 36.5907 34.8841 36.8251 34.7434C38.1845 33.9091 39.3751 32.7653 40.2657 31.4341C40.4157 31.2091 40.4626 30.9278 40.3782 30.6747C40.3032 30.4122 40.1157 30.2059 39.872 30.0934L39.7126 30.0278C39.4876 29.9247 39.3095 29.7466 39.2157 29.5122C39.122 29.2778 39.1313 29.0247 39.2251 28.7903C39.4313 28.3216 40.0032 28.0966 40.472 28.3028L40.6313 28.3684C40.8751 28.4716 41.1657 28.4716 41.4001 28.3497C41.6438 28.2278 41.8126 28.0122 41.8782 27.7497C42.2438 26.1934 42.272 24.5434 41.9626 22.9778C41.9251 22.7153 41.7563 22.4903 41.522 22.3591ZM40.2845 26.4184C39.1407 26.3341 38.0345 27.0091 37.5657 28.0684C37.2657 28.7434 37.2563 29.4934 37.5282 30.1778C37.6782 30.5622 37.9126 30.8997 38.2032 31.1809C37.7438 31.7341 37.2188 32.2403 36.647 32.6809C35.9157 31.8372 34.6501 31.4997 33.5532 31.9216C32.8688 32.1934 32.3251 32.7091 32.0251 33.3841C31.8563 33.7684 31.7813 34.1716 31.7907 34.5747C31.0782 34.6403 30.347 34.6309 29.6345 34.5278C29.6626 34.1247 29.597 33.7216 29.447 33.3278C29.1751 32.6434 28.6595 32.0997 27.9751 31.8091C26.9063 31.3497 25.622 31.6309 24.8626 32.4466C24.3095 31.9872 23.8032 31.4622 23.3626 30.8903C24.2157 30.1403 24.5532 28.9122 24.122 27.7966C23.6907 26.7091 22.6688 25.9966 21.4688 26.0434C21.4032 25.3309 21.4126 24.5997 21.5157 23.8872C22.6595 23.9622 23.7657 23.2966 24.2345 22.2372C24.5251 21.5622 24.5438 20.8122 24.272 20.1184C24.122 19.7341 23.8876 19.3966 23.597 19.1153C24.0563 18.5622 24.5813 18.0559 25.1532 17.6247C25.8845 18.4591 27.1595 18.7966 28.247 18.3747C29.3626 17.9341 30.0282 16.8559 30.0001 15.7216C30.722 15.6559 31.4532 15.6653 32.1563 15.7591C32.0813 16.8841 32.7095 17.9997 33.8063 18.4778C34.8751 18.9372 36.1501 18.6559 36.9188 17.8403C37.472 18.2997 37.9782 18.8247 38.4188 19.3966C38.1188 19.6591 37.8751 19.9966 37.7063 20.3716C37.4157 21.0466 37.397 21.7966 37.6688 22.4903C38.1001 23.5778 39.1407 24.2903 40.322 24.2434C40.397 24.9747 40.3876 25.6966 40.2845 26.4184Z" fill="#E3000F"/>
                    <path d="M30.9094 19.4248C27.75 19.4248 25.1719 21.9936 25.1719 25.1623C25.1719 28.3217 27.7406 30.8998 30.9094 30.8998C34.0688 30.8998 36.6469 28.3311 36.6469 25.1623C36.6469 21.9936 34.0688 19.4248 30.9094 19.4248ZM30.9094 29.0717C28.7531 29.0717 26.9906 27.3092 26.9906 25.1529C26.9906 22.9967 28.7438 21.2342 30.9094 21.2342C33.0656 21.2342 34.8281 22.9873 34.8281 25.1529C34.8281 27.3186 33.0656 29.0717 30.9094 29.0717Z" fill="#E3000F"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_771_351">
                    <rect width="60" height="60" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                    
             </div>
                <div class="highlights__card__text">
                    <h1>{{$content->experience}}</h1>
                    <p>Years of Experience</p>
                </div>
        </div>
        <div class="highlights__card">
            <div class="highlights__card__icon">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_343_12238)">
                    <path d="M0.878906 4.72172H7.33945L9.48633 6.77496L6.88031 9.38098C5.29055 10.971 5.29055 13.5581 6.88031 15.148L8.14699 16.4147L6.85441 17.7073C6.66926 17.8925 6.57633 18.1507 6.60094 18.4114C6.62555 18.6723 6.76523 18.9084 6.9818 19.0556L9.14906 20.5289C9.71871 20.9163 10.3732 21.1057 11.0244 21.1057C11.7795 21.1057 12.53 20.8508 13.138 20.3543L13.6627 20.8789C14.0433 21.2595 14.5491 21.469 15.0873 21.469C15.6254 21.469 16.1312 21.2595 16.5118 20.8788L17.703 19.6875C18.0836 19.3071 18.2931 18.8012 18.2931 18.2631C18.2931 17.7248 18.0836 17.2189 17.703 16.8387L17.1904 16.326L17.5808 15.9355L18.0935 16.4482C18.474 16.8286 18.9799 17.0381 19.518 17.0381C20.0562 17.0381 20.5621 16.8286 20.9426 16.4482L22.1339 15.2569C22.9193 14.4714 22.9193 13.1932 22.1339 12.4077L21.6212 11.895L22.0117 11.5045L22.5244 12.0172C22.9172 12.4099 23.4329 12.6061 23.9488 12.6061C24.4646 12.6061 24.9806 12.4098 25.3734 12.0172L26.5648 10.8259C27.3502 10.0405 27.3502 8.76246 26.5646 7.97672L26.0401 7.45219C26.9648 6.31992 27.0512 4.69348 26.2148 3.46324L24.7414 1.29586C24.5943 1.07918 24.3581 0.939609 24.0973 0.915C23.8384 0.890742 23.5785 0.98332 23.3931 1.16848L22.1005 2.46094L20.8339 1.19438C20.0637 0.424219 19.0397 0 17.9504 0C16.8611 0 15.8371 0.424219 15.0669 1.19438L10.7295 5.53172L8.29945 3.20766C8.13586 3.05121 7.91836 2.96391 7.69195 2.96391H0.878906C0.393398 2.96391 0 3.3573 0 3.84281C0 4.32832 0.393398 4.72172 0.878906 4.72172ZM16.46 18.0814C16.5221 18.1436 16.5353 18.2145 16.5353 18.263C16.5353 18.3115 16.5223 18.3824 16.46 18.4445C16.46 18.4445 16.4599 18.4445 16.4599 18.4446L15.2687 19.6358C15.1686 19.7361 15.0055 19.7359 14.9055 19.6358L14.3929 19.1232L15.9473 17.5688L16.46 18.0814ZM20.8909 13.6505C20.991 13.7505 20.991 13.9134 20.8909 14.0136L19.6996 15.205C19.5995 15.3052 19.4366 15.3052 19.3365 15.205L18.8238 14.6923L20.3783 13.1378L20.8909 13.6505ZM25.3218 9.58266L24.1305 10.774C24.0304 10.8739 23.8673 10.8741 23.7673 10.7741L23.2546 10.2614L24.8091 8.70691L25.3218 9.21949C25.422 9.31957 25.422 9.4827 25.3218 9.58266ZM23.8849 3.16242L24.7613 4.45137C25.1875 5.07832 25.1077 5.92242 24.5716 6.45844C23.1396 7.89047 13.4353 17.5946 12.1444 18.8856C11.6086 19.4217 10.7644 19.5013 10.1373 19.0752L8.84848 18.199C12.1941 14.8534 21.9854 5.06203 23.8849 3.16242ZM16.3099 2.43738C16.7481 1.99922 17.3307 1.75781 17.9504 1.75781C18.5701 1.75781 19.1528 1.99922 19.5909 2.4375L20.8575 3.70395L9.39 15.1716L8.12344 13.9049C7.21875 13.0003 7.21875 11.5284 8.12344 10.6239L16.3099 2.43738Z" fill="#E3000F"/>
                    <path d="M37.2412 7.59985H35.1992C34.7137 7.59985 34.3203 7.99325 34.3203 8.47876C34.3203 8.96427 34.7137 9.35767 35.1992 9.35767H37.2412C37.7267 9.35767 38.1201 8.96427 38.1201 8.47876C38.1201 7.99325 37.7267 7.59985 37.2412 7.59985Z" fill="#E3000F"/>
                    <path d="M37.2412 10.8278H35.1992C34.7137 10.8278 34.3203 11.2212 34.3203 11.7067C34.3203 12.1922 34.7137 12.5856 35.1992 12.5856H37.2412C37.7267 12.5856 38.1201 12.1922 38.1201 11.7067C38.1201 11.2212 37.7267 10.8278 37.2412 10.8278Z" fill="#E3000F"/>
                    <path d="M37.2412 14.0558H35.1992C34.7137 14.0558 34.3203 14.4492 34.3203 14.9348C34.3203 15.4203 34.7137 15.8137 35.1992 15.8137H37.2412C37.7267 15.8137 38.1201 15.4203 38.1201 14.9348C38.1201 14.4492 37.7267 14.0558 37.2412 14.0558Z" fill="#E3000F"/>
                    <path d="M37.2412 17.2839H35.1992C34.7137 17.2839 34.3203 17.6773 34.3203 18.1628C34.3203 18.6483 34.7137 19.0417 35.1992 19.0417H37.2412C37.7267 19.0417 38.1201 18.6483 38.1201 18.1628C38.1201 17.6773 37.7267 17.2839 37.2412 17.2839Z" fill="#E3000F"/>
                    <path d="M50.0414 13.6676C49.815 13.4211 49.4687 13.3247 49.1475 13.4187C48.8265 13.5125 48.5865 13.7804 48.5285 14.1098L48.0693 16.7188L45.8437 11.8555C45.715 11.5745 45.4482 11.3815 45.1409 11.3476C44.8338 11.314 44.5311 11.4438 44.3443 11.6902L42.55 14.0559H40.4141C39.9286 14.0559 39.5352 14.4493 39.5352 14.9348C39.5352 15.4204 39.9286 15.8138 40.4141 15.8138H42.9864C43.2615 15.8138 43.5206 15.685 43.6868 15.4659L44.8568 13.9233L47.6462 20.0186C47.7904 20.334 48.1047 20.5317 48.4449 20.5317C48.482 20.5317 48.5195 20.5294 48.557 20.5246C48.9387 20.4756 49.2441 20.1841 49.3109 19.805L49.951 16.1678L50.2852 16.5315C50.4785 16.7419 50.7621 16.8456 51.0454 16.8084C51.3288 16.7718 51.5766 16.5996 51.7099 16.3468L52.5932 14.6718L52.6309 15.0273C52.6781 15.4743 53.0552 15.8136 53.5048 15.8136H55.277C55.7625 15.8136 56.1559 15.4202 56.1559 14.9347C56.1559 14.4492 55.7625 14.0558 55.277 14.0558H54.2956L54.0371 11.6142C53.9963 11.2295 53.7089 10.9166 53.3291 10.8436C52.9488 10.7708 52.5661 10.9546 52.3857 11.2968L50.7364 14.4243L50.0414 13.6676Z" fill="#E3000F"/>
                    <path d="M56.7469 32.2108H27.6708C27.1853 32.2108 26.7919 32.6042 26.7919 33.0897C26.7919 33.5752 27.1853 33.9686 27.6708 33.9686H56.7469C57.5714 33.9686 58.2422 34.6394 58.2422 35.4639V36.8611H1.75781V35.4639C1.75781 34.6394 2.42859 33.9686 3.25312 33.9686H24.1567C24.6422 33.9686 25.0356 33.5752 25.0356 33.0897C25.0356 32.6042 24.6422 32.2108 24.1567 32.2108H12.3439V31.0506C12.3439 29.7599 11.2939 28.7099 10.0032 28.7099H5.38078C4.09008 28.7099 3.04008 29.7599 3.04008 31.0506V32.2177C1.3452 32.3277 0 33.7417 0 35.4639V37.74C0 38.2255 0.393398 38.6189 0.878906 38.6189H3.86367V39.5461C3.86367 41.1785 5.19164 42.5066 6.82406 42.5066H11.9132C12.3987 42.5066 12.7921 42.1132 12.7921 41.6277C12.7921 41.1422 12.3987 40.7488 11.9132 40.7488H6.82395C6.1609 40.7488 5.62137 40.2093 5.62137 39.5461V38.6189H54.3786V39.5461C54.3786 40.2093 53.8391 40.7488 53.1759 40.7488C49.1985 40.7488 20.2637 40.7488 15.4271 40.7488C14.9416 40.7488 14.5482 41.1422 14.5482 41.6277C14.5482 42.1132 14.9416 42.5066 15.4271 42.5066H21.8618L25.5536 44.8485L21.8101 46.2436C21.4662 46.3718 21.2381 46.7002 21.2381 47.0671V49.675H13.8318C12.5795 49.675 11.5608 50.6937 11.5608 51.946V54.4367C10.4175 54.808 9.58875 55.8836 9.58875 57.1491C9.58875 58.7211 10.8676 60 12.4397 60C14.0118 60 15.2907 58.7211 15.2907 57.1491C15.2907 55.8836 14.4619 54.808 13.3186 54.4367V51.946C13.3186 51.6629 13.5487 51.4328 13.8318 51.4328H44.3674C44.6503 51.4328 44.8806 51.6629 44.8806 51.946V54.4367C43.7373 54.808 42.9086 55.8836 42.9086 57.1491C42.9086 58.7211 44.1874 60 45.7595 60C47.3316 60 48.6105 58.7211 48.6105 57.1491C48.6105 55.8836 47.7817 54.808 46.6384 54.4367V51.946C46.6384 50.6937 45.6197 49.675 44.3674 49.675H36.4436L29.4833 45.2597L36.8705 42.5065H53.1758C54.8082 42.5065 56.1363 41.1784 56.1363 39.546V38.6188H59.1211C59.6066 38.6188 60 38.2254 60 37.7399V35.4638C60 33.6701 58.5407 32.2108 56.7469 32.2108ZM4.79789 31.0506C4.79789 30.7293 5.05934 30.4677 5.38078 30.4677H10.0032C10.3246 30.4677 10.5861 30.7292 10.5861 31.0506V32.2108H4.79789V31.0506ZM12.4397 58.2422C11.8369 58.2422 11.3466 57.7518 11.3466 57.1491C11.3466 56.5493 11.8321 56.0609 12.4307 56.0561C12.4337 56.0561 12.4366 56.0562 12.4397 56.0562C12.4427 56.0562 12.4458 56.0561 12.4487 56.0561C13.0474 56.061 13.5329 56.5493 13.5329 57.1491C13.5329 57.7518 13.0426 58.2422 12.4397 58.2422ZM45.7595 58.2422C45.1567 58.2422 44.6664 57.7518 44.6664 57.1491C44.6664 56.5493 45.1519 56.0609 45.7505 56.0561C45.7535 56.0561 45.7564 56.0562 45.7595 56.0562C45.7625 56.0562 45.7656 56.0561 45.7685 56.0561C46.3672 56.061 46.8527 56.5493 46.8527 57.1491C46.8529 57.7518 46.3624 58.2422 45.7595 58.2422ZM33.1622 49.6751H22.9961V47.6776L27.4164 46.0302L33.1622 49.6751ZM27.6207 44.0781L25.1434 42.5065H31.8375L27.6207 44.0781Z" fill="#E3000F"/>
                    <path d="M57.8493 4.42303H53.5173C53.0318 4.42303 52.6384 4.81643 52.6384 5.30194C52.6384 5.78745 53.0318 6.18085 53.5173 6.18085H57.8493C58.0655 6.18085 58.2414 6.35675 58.2414 6.57296V22.7337C58.2414 22.95 58.0655 23.1259 57.8493 23.1259H32.9547C32.7384 23.1259 32.5625 22.95 32.5625 22.7337V6.57296C32.5625 6.35675 32.7384 6.18085 32.9547 6.18085H50.0032C50.4887 6.18085 50.8821 5.78745 50.8821 5.30194C50.8821 4.81643 50.4887 4.42303 50.0032 4.42303H32.9547C31.7693 4.42303 30.8047 5.38737 30.8047 6.57296V22.7337C30.8047 23.9192 31.7691 24.8837 32.9547 24.8837H57.8495C59.0349 24.8837 59.9994 23.9193 59.9994 22.7337V6.57296C59.9993 5.38749 59.0349 4.42303 57.8493 4.42303Z" fill="#E3000F"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_343_12238">
                    <rect width="60" height="60" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
            </div>
               <div class="highlights__card__text">
                   <h1>{{$content->surgeries}}</h1>
                   <p>Surgeries</p>
               </div>
       </div>
       <div class="highlights__card">
        <div class="highlights__card__icon">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_343_12264)">
                <path d="M56.6855 27.0865C54.858 27.0865 53.371 28.5732 53.371 30.4008V38.3529H9.92807V26.7011V25.2376V7.69251H12.5783V9.08822C12.5783 9.10064 12.5813 9.11224 12.582 9.12466C11.5829 9.46368 10.8572 10.4001 10.8572 11.5125V13.5788C10.8572 14.975 11.9929 16.1108 13.3892 16.1108C14.7855 16.1108 15.9212 14.9751 15.9212 13.5788V11.5125C15.9212 10.4001 15.1955 9.46368 14.1964 9.12466C14.197 9.11224 14.2001 9.10075 14.2001 9.08822V7.69251H14.2511C14.4422 7.69251 14.6272 7.6249 14.7734 7.50197L17.9462 4.83009C18.2885 4.54157 18.3325 4.03005 18.0441 3.68751C17.7556 3.34544 17.2444 3.30161 16.9015 3.58954L13.9552 6.07075H4.27951L1.33319 3.58966C0.990882 3.30173 0.479593 3.34556 0.190609 3.68763C-0.097907 4.03017 -0.0538446 4.54169 0.288577 4.83021L3.46131 7.50208C3.60756 7.62513 3.7926 7.69263 3.98362 7.69263H8.30631V22.3933C7.81002 22.0968 7.23229 21.9232 6.61342 21.9232C4.78588 21.9232 3.29912 23.4102 3.29912 25.2377V44.1709C3.29912 44.6188 3.66205 44.9817 4.10994 44.9817H9.11725H12.4287L13.5072 48.301C12.9241 49.1535 12.5815 50.1827 12.5815 51.2913C12.5815 54.2189 14.9633 56.6006 17.8908 56.6006C20.8184 56.6006 23.2005 54.2189 23.2005 51.2913C23.2005 50.1825 22.8577 49.1529 22.2742 48.3003L22.6601 47.1124H41.9388L42.3251 48.3009C41.7419 49.1533 41.3994 50.1828 41.3994 51.2913C41.3994 54.2189 43.7811 56.6006 46.7087 56.6006C49.6362 56.6006 52.0179 54.2189 52.0179 51.2913C52.0179 50.1826 51.6754 49.1532 51.0922 48.3008L52.1706 44.9817H54.1818C54.1828 44.9817 54.1836 44.9815 54.1845 44.9815H59.1892C59.6369 44.9815 60.0001 44.6185 60.0001 44.1706V30.4008C60.0001 28.5732 58.5131 27.0865 56.6855 27.0865ZM14.2993 13.5788C14.2993 14.0809 13.891 14.4892 13.389 14.4892C12.8869 14.4892 12.4787 14.0809 12.4787 13.5788V11.5125C12.4787 11.0104 12.8869 10.6022 13.389 10.6022C13.891 10.6022 14.2993 11.0104 14.2993 11.5125V13.5788ZM53.371 39.9745V43.3601H9.92807V39.9745H53.371ZM4.92088 25.2376C4.92088 24.3041 5.68026 23.5447 6.61377 23.5447C7.54705 23.5447 8.30643 24.3041 8.30643 25.2376V26.7011V43.3599H4.92088V25.2376ZM21.6476 44.9816L20.9944 46.9922C20.1203 46.3593 19.0501 45.9817 17.891 45.9817C16.7317 45.9817 15.6614 46.3595 14.7872 46.9924L14.1339 44.9816H21.6476ZM17.891 54.979C15.8576 54.979 14.2033 53.3246 14.2033 51.2913C14.2033 49.2576 15.8576 47.6033 17.891 47.6033C19.9246 47.6033 21.579 49.2576 21.579 51.2913C21.579 53.3246 19.9246 54.979 17.891 54.979ZM23.1872 45.4908L23.3527 44.9816H41.2464L41.4119 45.4908H23.1872ZM46.7088 54.979C44.6754 54.979 43.0211 53.3246 43.0211 51.2913C43.0211 49.2576 44.6754 47.6033 46.7088 47.6033C48.7421 47.6033 50.3964 49.2576 50.3964 51.2913C50.3965 53.3246 48.7421 54.979 46.7088 54.979ZM49.8122 46.9922C48.9381 46.3593 47.868 45.9817 46.7088 45.9817C45.5496 45.9817 44.4793 46.3594 43.6053 46.9923L42.9517 44.9816H50.4656L49.8122 46.9922ZM58.3784 43.3597H54.9926V30.4008C54.9926 29.4675 55.7522 28.7081 56.6855 28.7081C57.6188 28.7081 58.3784 29.4675 58.3784 30.4008V43.3597Z" fill="#E3000F"/>
                <path d="M17.8919 48.4851C16.3446 48.4851 15.0859 49.7441 15.0859 51.2913C15.0859 52.8385 16.3446 54.0972 17.8919 54.0972C19.4391 54.0972 20.6978 52.8385 20.6978 51.2913C20.6978 49.7441 19.4391 48.4851 17.8919 48.4851ZM17.8919 52.4756C17.2389 52.4756 16.7076 51.9442 16.7076 51.2913C16.7076 50.6381 17.2389 50.1067 17.8919 50.1067C18.5448 50.1067 19.0762 50.6381 19.0762 51.2913C19.0762 51.9442 18.5448 52.4756 17.8919 52.4756Z" fill="#E3000F"/>
                <path d="M46.7085 48.4851C45.1613 48.4851 43.9023 49.7441 43.9023 51.2913C43.9023 52.8385 45.1613 54.0972 46.7085 54.0972C48.2557 54.0972 49.5147 52.8385 49.5147 51.2913C49.5147 49.7441 48.2557 48.4851 46.7085 48.4851ZM46.7085 52.4756C46.0555 52.4756 45.524 51.9442 45.524 51.2913C45.524 50.6381 46.0555 50.1067 46.7085 50.1067C47.3615 50.1067 47.893 50.6381 47.893 51.2913C47.893 51.9442 47.3615 52.4756 46.7085 52.4756Z" fill="#E3000F"/>
                <path d="M14.7779 23.3674C13.9214 23.1378 13.0285 23.2546 12.2636 23.6957C10.6814 24.6094 10.1371 26.6404 11.0506 28.2233L16.3059 37.3253C16.4505 37.5761 16.7184 37.7307 17.008 37.7307H49.1152C50.9428 37.7307 52.4298 36.2437 52.4298 34.4162C52.4298 32.5886 50.9428 31.1019 49.1152 31.1019H20.367L16.7912 24.9089C16.3498 24.1444 15.6349 23.5969 14.7779 23.3674ZM19.8987 32.7236H49.1151C50.0484 32.7236 50.808 33.483 50.808 34.4163C50.808 35.3498 50.0484 36.1092 49.1151 36.1092H17.4761L12.455 27.4128C11.9884 26.6041 12.2663 25.5669 13.0744 25.1C13.4637 24.8753 13.9188 24.8163 14.3582 24.9337C14.7969 25.0511 15.1619 25.3304 15.3868 25.7197L19.1967 32.3184C19.3413 32.5689 19.6092 32.7236 19.8987 32.7236Z" fill="#E3000F"/>
                </g>
                <defs>
                <clipPath id="clip0_343_12264">
                <rect width="60" height="60" fill="white"/>
                </clipPath>
                </defs>
                </svg>
                
        </div>
           <div class="highlights__card__text">
               <h1>{{$content->beds}}</h1>
               <p>Beds</p>
           </div>
   </div>
   <div class="highlights__card">
    <div class="highlights__card__icon">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_343_12262)">
            <path d="M11.1337 37.7695C9.85004 38.2773 8.75071 39.1627 7.98099 40.3086C7.21126 41.4545 6.80737 42.807 6.82269 44.1873V56.1237C6.82383 57.1513 7.23257 58.1366 7.95922 58.8633C8.68587 59.59 9.67111 59.9988 10.6988 60H49.3029C50.3306 59.9988 51.3159 59.59 52.0426 58.8633C52.7693 58.1367 53.1781 57.1514 53.1792 56.1237V44.1871C53.1945 42.8067 52.7906 41.4543 52.0208 40.3084C51.251 39.1626 50.1517 38.2773 48.868 37.7695L36.6318 32.7705L36.6512 29.6575C38.0095 28.6309 39.1113 27.3034 39.8699 25.7793C40.6285 24.2551 41.0234 22.5757 41.0235 20.8732V20.5255H42.2223C43.0789 20.5256 43.9064 20.215 44.5513 19.6513C45.1963 19.0876 45.6148 18.3091 45.7293 17.4603C45.8438 16.6114 45.6465 15.7498 45.174 15.0354C44.7014 14.321 43.9858 13.8022 43.1598 13.5754V13.159C43.1598 9.66901 41.7734 6.32197 39.3057 3.85418C36.8379 1.38639 33.4908 0 30.0009 0C26.5109 0 23.1638 1.38639 20.696 3.85418C18.2283 6.32197 16.8419 9.66901 16.8419 13.159V13.9305C16.016 14.1575 15.3004 14.6763 14.828 15.3907C14.3555 16.1051 14.1582 16.9666 14.2727 17.8155C14.3872 18.6643 14.8057 19.4428 15.4506 20.0065C16.0954 20.5702 16.9229 20.8808 17.7794 20.8808H18.9783C18.9795 22.5822 19.3748 24.2601 20.1334 25.783C20.892 27.3059 21.9931 28.6323 23.3505 29.6582L23.3699 32.7711L11.1337 37.7695ZM48.1595 39.5052C49.0959 39.8757 49.8979 40.5217 50.4594 41.3577C51.0209 42.1936 51.3156 43.1803 51.3045 44.1873V56.1237C51.3038 56.6543 51.0927 57.163 50.7175 57.5382C50.3422 57.9133 49.8335 58.1244 49.3029 58.125H44.1805V48.9191C44.1805 48.6705 44.0818 48.432 43.906 48.2562C43.7301 48.0804 43.4917 47.9816 43.243 47.9816C42.9944 47.9816 42.7559 48.0804 42.5801 48.2562C42.4043 48.432 42.3055 48.6705 42.3055 48.9191V58.125H17.6962V48.9191C17.6962 48.6705 17.5974 48.432 17.4216 48.2562C17.2458 48.0804 17.0073 47.9816 16.7587 47.9816C16.51 47.9816 16.2716 48.0804 16.0957 48.2562C15.9199 48.432 15.8212 48.6705 15.8212 48.9191V58.125H10.6988C10.1682 58.1243 9.65955 57.9132 9.28438 57.5381C8.90921 57.1629 8.69813 56.6542 8.69745 56.1237V44.1871C8.68628 43.1801 8.98093 42.1934 9.54246 41.3574C10.104 40.5214 10.906 39.8755 11.8424 39.505L24.125 34.4875L29.3779 39.1595C29.5495 39.3121 29.7712 39.3964 30.0009 39.3964C30.2305 39.3964 30.4522 39.3121 30.6238 39.1595L35.8767 34.4875L48.1595 39.5052ZM43.8859 16.9869C43.8856 17.4281 43.7101 17.8512 43.3981 18.1632C43.0861 18.4752 42.6631 18.6506 42.2219 18.651H41.0235V15.3233H42.2223C42.6634 15.3238 43.0863 15.4992 43.3981 15.8111C43.71 16.123 43.8854 16.5459 43.8859 16.9869ZM30.0009 1.875C32.9925 1.87841 35.8606 3.06835 37.9761 5.18377C40.0915 7.29919 41.2814 10.1673 41.2848 13.159V13.4483H39.3395C37.5392 12.9534 37.1048 12.1421 36.4537 10.9267C36.271 10.5855 36.0821 10.2328 35.8492 9.86027C35.7214 9.65578 35.5196 9.50842 35.2859 9.44884C35.0522 9.38926 34.8045 9.42203 34.5944 9.54035C26.9891 13.8224 26.2509 13.8218 19.1793 13.8055L18.7169 13.8046V13.159C18.7203 10.1673 19.9102 7.29919 22.0256 5.18377C24.1411 3.06835 27.0092 1.87841 30.0009 1.875ZM16.1158 17.3421C16.1161 16.9009 16.2916 16.4778 16.6036 16.1659C16.9156 15.8539 17.3386 15.6784 17.7798 15.678C18.1987 15.678 18.5969 15.6787 18.9787 15.6796V19.0054H17.7794C17.3384 19.0048 16.9156 18.8294 16.6037 18.5176C16.2919 18.2058 16.1164 17.7831 16.1158 17.3421ZM20.8532 20.8732V15.6818C26.3863 15.6662 28.0251 15.3478 34.703 11.6292C34.736 11.6905 34.7688 11.7514 34.8012 11.8121C35.5341 13.1807 36.2919 14.5957 38.9815 15.2936C39.0363 15.3071 39.0922 15.3157 39.1485 15.3193V20.874C39.1485 23.3001 38.1847 25.6269 36.4692 27.3424C34.7537 29.0579 32.427 30.0217 30.0009 30.0217C27.5747 30.0217 25.248 29.0579 23.5325 27.3424C21.817 25.6269 20.8532 23.3001 20.8532 20.874V20.8732ZM30.0009 31.8959C31.6517 31.8978 33.2817 31.5267 34.769 30.8102L34.7555 32.9755L30.0009 37.2043L25.2462 32.9755L25.2327 30.8102C26.72 31.5267 28.35 31.8979 30.0009 31.8959ZM23.6193 18.6438C23.5608 18.7521 23.4815 18.8479 23.386 18.9256C23.2904 19.0032 23.1805 19.0613 23.0626 19.0965C22.9446 19.1317 22.8208 19.1434 22.6984 19.1308C22.5759 19.1181 22.4571 19.0815 22.3488 19.023C22.2405 18.9645 22.1448 18.8852 22.0671 18.7897C21.9894 18.6941 21.9313 18.5842 21.8961 18.4663C21.8609 18.3483 21.8493 18.2245 21.8619 18.1021C21.8745 17.9796 21.9111 17.8608 21.9696 17.7525C22.2238 17.2822 22.6004 16.8894 23.0596 16.6157C23.5187 16.3419 24.0433 16.1974 24.5779 16.1974C25.1124 16.1974 25.6371 16.3419 26.0962 16.6157C26.5554 16.8894 26.9319 17.2822 27.1861 17.7525C27.2458 17.8609 27.2834 17.98 27.2968 18.103C27.3102 18.226 27.2991 18.3504 27.2641 18.4691C27.2292 18.5878 27.1712 18.6984 27.0933 18.7945C27.0154 18.8907 26.9193 18.9704 26.8104 19.0293C26.7016 19.0881 26.5822 19.1248 26.4591 19.1372C26.336 19.1497 26.2117 19.1376 26.0933 19.1018C25.9748 19.066 25.8647 19.0071 25.7691 18.9285C25.6736 18.8499 25.5946 18.7531 25.5366 18.6438C25.4431 18.471 25.3047 18.3267 25.136 18.2261C24.9672 18.1255 24.7744 18.0724 24.5779 18.0724C24.3815 18.0724 24.1887 18.1255 24.0199 18.2261C23.8512 18.3267 23.7127 18.471 23.6193 18.6438ZM32.8155 17.7525C33.0696 17.2822 33.4462 16.8894 33.9054 16.6157C34.3645 16.3419 34.8891 16.1974 35.4237 16.1974C35.9583 16.1974 36.4829 16.3419 36.942 16.6157C37.4012 16.8894 37.7778 17.2822 38.0319 17.7525C38.0905 17.8608 38.1271 17.9796 38.1397 18.1021C38.1523 18.2245 38.1407 18.3483 38.1055 18.4663C38.0703 18.5842 38.0122 18.6941 37.9345 18.7897C37.8568 18.8852 37.7611 18.9645 37.6528 19.023C37.5445 19.0815 37.4257 19.1181 37.3032 19.1308C37.1807 19.1434 37.057 19.1317 36.939 19.0965C36.821 19.0613 36.7111 19.0032 36.6156 18.9256C36.5201 18.8479 36.4408 18.7521 36.3823 18.6438C36.2888 18.471 36.1504 18.3267 35.9817 18.2262C35.8129 18.1256 35.6201 18.0725 35.4237 18.0725C35.2273 18.0725 35.0345 18.1256 34.8657 18.2262C34.697 18.3267 34.5586 18.471 34.4651 18.6438C34.4066 18.7521 34.3273 18.8479 34.2318 18.9256C34.1363 19.0032 34.0264 19.0613 33.9084 19.0965C33.7904 19.1317 33.6667 19.1434 33.5442 19.1308C33.4217 19.1181 33.3029 19.0815 33.1946 19.023C33.0863 18.9645 32.9906 18.8852 32.9129 18.7897C32.8352 18.6941 32.7771 18.5842 32.7419 18.4663C32.7067 18.3483 32.6951 18.2245 32.7077 18.1021C32.7203 17.9796 32.7569 17.8608 32.8155 17.7525ZM26.9059 23.2486C27.1199 23.122 27.3754 23.0855 27.6162 23.1472C27.8571 23.209 28.0635 23.3638 28.1902 23.5778C28.5425 24.1727 29.2362 24.5423 30.0009 24.5423C30.7655 24.5423 31.4591 24.1727 31.8114 23.5778C31.9392 23.3661 32.1454 23.2136 32.3851 23.1532C32.6249 23.0929 32.8787 23.1297 33.0915 23.2556C33.3042 23.3816 33.4586 23.5864 33.521 23.8256C33.5835 24.0648 33.5489 24.319 33.4248 24.5329C32.7368 25.6952 31.4247 26.4173 30.0009 26.4173C28.577 26.4173 27.2648 25.6952 26.5767 24.5329C26.4503 24.3189 26.4139 24.0635 26.4756 23.8228C26.5373 23.5821 26.6921 23.3757 26.9059 23.2491V23.2486ZM35.0263 41.8479C33.9739 42.2112 33.2611 43.1597 33.1664 44.3239C32.97 46.7364 35.9144 49.027 37.0655 49.7061C37.2098 49.7913 37.3743 49.8362 37.5419 49.8362C37.7094 49.8362 37.8739 49.7913 38.0182 49.7061C39.1694 49.0264 42.1137 46.7364 41.9173 44.3241C41.8225 43.1597 41.1099 42.2109 40.0574 41.8479C39.64 41.709 39.1963 41.6674 38.7603 41.7263C38.3242 41.7852 37.9075 41.943 37.5419 42.1877C37.1762 41.9431 36.7594 41.7853 36.3234 41.7265C35.8874 41.6677 35.4437 41.7094 35.0263 41.8484V41.8479ZM37.5419 44.3422C37.6713 44.3422 37.7994 44.3154 37.9179 44.2635C38.0365 44.2115 38.143 44.1356 38.2308 44.0405C38.5987 43.642 39.0531 43.4849 39.4462 43.6205C39.7894 43.7388 40.0145 44.0588 40.0485 44.4759C40.1305 45.4795 38.7462 46.9339 37.5419 47.7819C36.3374 46.9339 34.9535 45.4795 35.0352 44.4759C35.0692 44.0585 35.2943 43.7386 35.6376 43.6205C35.73 43.5887 35.8271 43.5725 35.9249 43.5728C36.2413 43.5728 36.5721 43.7368 36.8529 44.0405C36.9407 44.1357 37.0472 44.2117 37.1657 44.2637C37.2843 44.3157 37.4124 44.3426 37.5419 44.3427V44.3422Z" fill="#E3000F"/>
            </g>
            <defs>
            <clipPath id="clip0_343_12262">
            <rect width="60" height="60" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            
    </div>
       <div class="highlights__card__text">
           <h1 >{{$content->happy_patients}}</h1>
           <p>Happy Patients</p>
       </div>
</div>

    </div>
</div>













<x-gap/>
<x-key-services :coes='$content->coes' />
 <x-gap/>
 <div class="ui-background">
<x-doctors :type="'flex'" :$branches  :$coes/>
 </div>
<x-gap/>


<x-why-choose-us :content='null' />

<x-gap/>
<div class="ui-background">
<x-testimonials  :testimonials='$content->testimonials'/>
</div>
<x-gap/>


<x-blogs :$content :blogs='$content->blogs'/>

<x-gap/>

<div class="ui-background">

<x-faqs :faqs='$content->faqs'/> 
</div>


@endsection