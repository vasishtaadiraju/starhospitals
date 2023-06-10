@extends('layout.main')
@section('css')
    @vite(['resources/scss/career.scss', 'resources/js/app.js'])
@endsection
@section('content')
    <x-banner :imgurl="Vite::asset('resources/images/banner/international/Rectangle 4.png')" :text="'International Patients | Star Hospitals'" :$breadcrum />
    <x-gap />
<div class="ui-background">

    <x-recruitment-form />
</div>
    <x-gap />













    <x-heading :title="'Why Star Hospitals is the Right Place for You'" :description="'Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi. In aliquam turpis pellentesque ultricies imperdiet accumsan sociis.'" />

    <div class="choose-us choose-us--secondary">
        <div class="choose-us__benifits">
            <div class="choose-us__benifits__card">
                <div class="choose-us__benifits__card__icon-wrapper">

                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.893 18.778C26.3823 18.7784 24.8941 19.1443 23.5555 19.8445C22.2169 20.5446 21.0675 21.5582 20.2055 22.7988C20.0582 22.7535 19.9188 22.7094 19.7874 22.6666L19.2566 21.1611C20.8973 19.932 21.3466 18.0127 21.4693 17.083C22.5726 16.7837 23.5858 15.4874 23.9917 13.7695C24.2105 12.8403 23.8902 11.9753 23.1944 11.6167C23.0015 11.5175 22.7878 11.4656 22.5709 11.4655C22.6069 11.1959 22.6444 10.8661 22.6832 10.4612C22.774 9.51377 22.8316 8.55682 22.8316 8.31432C22.8316 8.14244 22.8351 7.96525 22.8387 7.77767C22.8677 6.28166 22.9037 4.41994 21.2535 2.75088C19.7726 1.25306 17.676 0.427361 15.5022 0.487439C13.3366 0.546658 11.3059 1.47072 9.93063 3.02267C9.88844 3.07043 9.84557 3.11851 9.80203 3.16689C8.9725 4.09377 7.83633 5.36322 7.91789 8.61408C7.9257 8.93228 8.23039 10.3906 8.54594 11.502C8.36199 11.5202 8.18361 11.5753 8.02141 11.664C7.35352 12.0249 7.04727 12.871 7.2593 13.7696C7.66555 15.4904 8.68203 16.7883 9.78781 17.0843C9.92 17.996 10.3827 19.8963 11.9815 21.1265L11.2812 22.5665C10.7812 22.7232 10.2177 22.8785 9.63609 23.0414C5.8768 24.0951 0.71875 25.538 0.71875 30.2257V35.1271C0.71875 36.285 1.33805 37.5156 2.44969 37.5156H27.9257C27.9308 37.5156 27.9357 37.515 27.9407 37.5149C30.4202 37.5006 32.7929 36.5041 34.5389 34.7435C36.2849 32.983 37.2617 30.6021 37.2554 28.1226C37.2491 25.6431 36.2601 23.2673 34.5052 21.5157C32.7502 19.7641 30.3725 18.7796 27.893 18.778ZM10.6172 3.89603C10.6619 3.84614 10.706 3.79666 10.7495 3.7476C11.9248 2.42119 13.668 1.63127 15.5322 1.58033C17.4054 1.5283 19.207 2.23596 20.4759 3.51947C21.8013 4.86002 21.7716 6.39853 21.7453 7.75596C21.7416 7.94908 21.738 8.1315 21.738 8.31385C21.738 8.42978 21.7263 8.67033 21.7063 8.97635C21.4419 7.9933 21.0721 7.04385 20.563 6.48869L20.5225 6.40775C20.4763 6.31536 20.4049 6.23794 20.3166 6.18444C20.2282 6.13095 20.1265 6.10357 20.0232 6.10547C19.92 6.10738 19.8194 6.13849 19.733 6.19521C19.6467 6.25192 19.5782 6.33193 19.5355 6.42596C18.6543 8.36416 17.7814 8.28611 16.3353 8.15713C16.1674 8.14213 15.9966 8.12689 15.823 8.11486C15.2728 8.0758 15.0738 8.39736 15.0137 8.53674C14.8354 8.9508 15.0831 9.39791 15.5366 9.92807C14.093 9.75572 13.727 8.69978 13.3973 7.74728C13.1685 7.08619 12.9092 6.33682 12.1552 6.33682C11.7918 6.3297 11.4311 6.40041 11.0974 6.5442C10.7636 6.68799 10.4645 6.90154 10.2201 7.17049C9.65969 7.77205 9.34391 8.62971 9.16812 9.47018C9.09697 9.17923 9.04478 8.88397 9.01187 8.58627C8.94055 5.76939 9.83125 4.77408 10.6172 3.89603ZM10.8318 16.5792C10.8252 16.4383 10.7648 16.3053 10.663 16.2077C10.5613 16.11 10.4259 16.0551 10.2849 16.0543C10.2771 16.0543 10.2693 16.0543 10.2611 16.0543C9.46016 16.0543 8.61445 14.7478 8.32359 13.518C8.21227 13.0461 8.35844 12.7248 8.54133 12.6259C8.74812 12.5143 8.96867 12.7108 9.05383 12.8006C9.12531 12.8758 9.21675 12.9292 9.31744 12.9544C9.41814 12.9797 9.52393 12.9757 9.62247 12.9431C9.721 12.9104 9.80821 12.8504 9.87388 12.77C9.93956 12.6896 9.981 12.5922 9.99336 12.4891C10.0472 12.3953 10.072 12.2875 10.0644 12.1796C10.0062 11.3408 10.0649 8.93955 11.0206 7.91541C11.1558 7.76546 11.3205 7.64508 11.5044 7.56186C11.6884 7.47864 11.8875 7.43436 12.0894 7.43182C12.1716 7.55049 12.2812 7.86728 12.3635 8.10517C12.7688 9.27611 13.5232 11.4552 16.8663 10.9782C16.9688 10.9636 17.0651 10.9202 17.1439 10.853C17.2226 10.7859 17.2808 10.6977 17.3114 10.5988C17.3421 10.4999 17.3441 10.3944 17.3171 10.2944C17.2902 10.1945 17.2354 10.1042 17.1591 10.0342C16.894 9.79042 16.6424 9.53243 16.4053 9.26135C17.691 9.37299 19.0025 9.41502 20.0864 7.70947C20.7714 8.99416 21.128 11.5488 21.2154 12.5632C21.2271 12.6995 21.2895 12.8265 21.3903 12.9191C21.4911 13.0117 21.6229 13.0631 21.7597 13.0632C21.7753 13.0632 21.7909 13.0625 21.8071 13.0611C21.9062 13.0526 22.001 13.0173 22.0815 12.9588C22.162 12.9004 22.2249 12.8211 22.2637 12.7296C22.3716 12.6228 22.5363 12.5077 22.6934 12.5884C22.894 12.6917 23.0387 13.0443 22.9272 13.5181C22.6365 14.7481 21.7909 16.0546 20.9897 16.0546H20.976C20.8699 16.0528 20.7655 16.0818 20.6754 16.138C20.599 16.1856 20.5356 16.2515 20.4908 16.3296C20.4461 16.4077 20.4214 16.4957 20.4189 16.5857C20.3955 17.0329 20.1837 19.3196 18.3204 20.4776C18.3173 20.4794 18.3145 20.4814 18.3116 20.4833C17.5861 20.9309 16.6823 21.1579 15.6254 21.1579C14.5713 21.1579 13.6696 20.9257 12.9449 20.4676C11.1081 19.3078 10.8623 17.025 10.8317 16.5792H10.8318ZM12.1623 23.2556L12.9202 21.6974C13.7049 22.0651 14.6117 22.2515 15.6255 22.2515C16.6245 22.2515 17.5193 22.0745 18.2958 21.7256L18.8447 23.2825C18.8722 23.3605 18.917 23.4313 18.9757 23.4895C19.0345 23.5477 19.1057 23.5918 19.184 23.6185C19.3202 23.6649 19.4645 23.7123 19.6167 23.7607C19.3487 24.264 19.1275 24.7908 18.9559 25.3345C18.4498 25.9338 17.3877 26.8506 15.6255 26.8506C15.0308 26.8571 14.4414 26.7381 13.8958 26.5014C13.3502 26.2647 12.8607 25.9157 12.4591 25.4771C11.8822 24.8583 11.5557 24.1685 11.4456 23.6606C11.5798 23.6194 11.7113 23.5781 11.8397 23.5364C11.9096 23.5137 11.9741 23.4771 12.0296 23.4288C12.085 23.3806 12.1302 23.3217 12.1623 23.2556ZM1.8125 35.1271V30.2257C1.8125 26.3674 6.31836 25.1072 9.93109 24.0946C10.084 24.0517 10.2395 24.0095 10.3883 23.9675C10.784 25.6299 12.5666 27.9441 15.6227 27.9441C16.67 27.9573 17.6983 27.6643 18.5814 27.1011C18.3725 28.9693 18.7302 30.8571 19.6082 32.5193C20.4861 34.1815 21.8437 35.5413 23.5045 36.4219H2.44969C2.10156 36.4219 1.8125 35.7259 1.8125 35.1271ZM27.893 36.4219C26.2563 36.4219 24.6565 35.9365 23.2957 35.0273C21.9348 34.118 20.8742 32.8256 20.2479 31.3136C19.6216 29.8015 19.4578 28.1377 19.7771 26.5325C20.0963 24.9273 20.8845 23.4529 22.0417 22.2956C23.199 21.1383 24.6735 20.3502 26.2787 20.0309C27.8838 19.7116 29.5477 19.8755 31.0597 20.5018C32.5718 21.1281 33.8642 22.1887 34.7734 23.5495C35.6827 24.9103 36.168 26.5102 36.168 28.1468C36.1656 30.3408 35.293 32.4441 33.7416 33.9955C32.1903 35.5468 30.0869 36.4195 27.893 36.4219Z"
                            fill="#004E9E"></path>
                    </svg>
                </div>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Fostering a culture of continuous learning & encouraging career growth.</p>
                </div>

            </div>
            <div class="choose-us__benifits__card">
                <div class="choose-us__benifits__card__icon-wrapper">

                    <svg width="38" height="30" viewBox="0 0 38 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.7488 1.25044V2.50161C27.7299 3.35366 29.0177 3.35366 28.9988 2.50161V1.25044C28.9988 0.390598 27.7488 0.425369 27.7488 1.25044ZM24.7092 2.3991L25.3318 3.48433C25.7443 4.22821 26.8553 3.58518 26.4158 2.85687L25.7932 1.77164C25.3984 1.08339 24.2794 1.65 24.7092 2.3991ZM30.9604 1.77164L30.333 2.85687C29.8936 3.58506 31.0044 4.22804 31.417 3.48433L32.0395 2.3991C32.4538 1.67691 31.3676 1.06737 30.9604 1.77164ZM2.125 3.12417C1.09706 3.12417 0.25 3.97126 0.25 4.9992V22.4992V24.9992C0.250038 25.3444 0.529839 25.6241 0.875002 25.6242H4.04882C4.35587 27.7378 6.18072 29.3754 8.37622 29.3754C10.5717 29.3754 12.3924 27.7378 12.6987 25.6242H23.375C24.2202 25.636 24.2202 24.3623 23.375 24.3742H12.6999C12.3952 22.2594 10.573 20.623 8.37622 20.623C7.18942 20.623 6.11132 21.1022 5.3208 21.8742H1.5V4.9992C1.5 4.64215 1.76793 4.37419 2.125 4.37419H22.125C22.4821 4.37419 22.75 4.64215 22.75 4.9992V19.9992C22.7382 20.8444 24.0119 20.8444 24 19.9992V8.1254H31.5C31.858 8.1254 32.0448 8.5749 32.1506 8.92739L34.0281 15.1799C34.058 15.2791 34.1121 15.3693 34.1855 15.4423L36.5012 17.758V21.8742H32.6804C31.891 21.1022 30.8142 20.623 29.6274 20.623C28.4406 20.623 27.3613 21.1022 26.5708 21.8742H14C13.1547 21.8624 13.1547 23.1362 14 23.1242H25.6785C25.4062 23.6932 25.2488 24.3262 25.2488 24.9968C25.2488 27.4056 27.2186 29.3754 29.6274 29.3754C31.823 29.3754 33.6436 27.7378 33.9499 25.6242H37.125C37.4702 25.6241 37.75 25.3444 37.75 24.9992V22.5016L37.7512 17.5004C37.7512 17.3341 37.6849 17.1746 37.5669 17.0573L35.1768 14.6672L33.3506 8.56853C33.0459 7.55089 32.4429 6.87538 31.5 6.87538H30.25V6.24677C30.25 5.21881 29.4042 4.37419 28.3762 4.37419C27.3483 4.37419 26.4988 5.21883 26.4988 6.24677V6.87538H24V4.9992C24 3.97126 23.1529 3.12417 22.125 3.12417H2.125ZM28.3762 5.62421C28.7333 5.62421 28.9988 5.8897 28.9988 6.24677V6.87538H27.7488V6.24677C27.7488 5.8897 28.0192 5.62421 28.3762 5.62421ZM10.8774 8.74796C10.5299 8.74595 10.2474 9.02787 10.2488 9.37542V11.248H8.37622C8.02867 11.2467 7.74678 11.5291 7.74878 11.8766V14.3717C7.74753 14.7188 8.02915 15.0005 8.37622 14.9992H10.2488V16.8729C10.2475 17.2205 10.5299 17.5024 10.8774 17.5004H13.3726C13.7196 17.5017 14.0013 17.22 14 16.8729V14.9992H15.8738C16.2209 15.0005 16.5025 14.7188 16.5012 14.3717V11.8766C16.5031 11.5291 16.2213 11.2467 15.8738 11.248H14V9.37542C14.0013 9.02837 13.7196 8.74664 13.3726 8.74796H10.8774ZM25.8762 9.37052C25.5291 9.3692 25.2475 9.65092 25.2488 9.99798V14.9992C25.25 15.3444 25.5311 15.6231 25.8762 15.6218H32.0127C32.4302 15.6217 32.7302 15.2201 32.6121 14.8197L31.113 9.81855C31.0344 9.55247 30.7899 9.37 30.5124 9.37052H25.8762ZM11.5 9.99798H12.75V11.8766C12.7512 12.2199 13.0293 12.4978 13.3726 12.4992H15.2512V13.7492H13.3726C13.0293 13.7506 12.7514 14.0285 12.75 14.3717V16.2504H11.5V14.3717C11.4986 14.0285 11.2207 13.7506 10.8774 13.7492H8.99878V12.4992H10.8774C11.2207 12.4978 11.4986 12.2199 11.5 11.8766V9.99798ZM26.4988 10.6205H30.0461L31.1728 14.3717H26.4988V10.6205ZM25.8762 16.8729C25.0242 16.854 25.0242 18.1419 25.8762 18.123H27.1262C27.9413 18.1041 27.9413 16.891 27.1262 16.8729H25.8762ZM8.37622 21.8742C10.1095 21.8742 11.5 23.2635 11.5 24.9968C11.5 26.7301 10.1095 28.1254 8.37622 28.1254C6.64293 28.1254 5.24756 26.7301 5.24756 24.9968C5.24756 23.2635 6.64293 21.8742 8.37622 21.8742ZM29.6274 21.8742C31.3607 21.8742 32.75 23.2635 32.75 24.9968C32.75 26.7301 31.3607 28.1254 29.6274 28.1254C27.8941 28.1254 26.4988 26.7301 26.4988 24.9968C26.4988 23.2635 27.8941 21.8742 29.6274 21.8742ZM1.5 23.1242H4.42724C4.24113 23.5132 4.11135 23.9328 4.04761 24.3742H1.5V23.1242ZM8.37622 23.1242C7.34811 23.1242 6.49882 23.9686 6.49878 24.9968C6.49878 26.0249 7.3481 26.8754 8.37622 26.8754C9.40436 26.8754 10.2488 26.0249 10.2488 24.9968C10.2488 23.9686 9.40434 23.1242 8.37622 23.1242ZM29.6274 23.1242C28.5993 23.1242 27.7488 23.9687 27.7488 24.9968C27.7488 26.0249 28.5993 26.8754 29.6274 26.8754C30.6556 26.8754 31.5 26.0249 31.5 24.9968C31.5 23.9686 30.6556 23.1242 29.6274 23.1242ZM33.5715 23.1242H36.5V24.3742H33.9512C33.8876 23.9327 33.7574 23.5133 33.5715 23.1242ZM8.37622 24.3742C8.7288 24.3742 8.99878 24.6442 8.99878 24.9968C8.99879 25.3493 8.72883 25.6254 8.37622 25.6254C8.02368 25.6254 7.74878 25.3493 7.74878 24.9968C7.74879 24.6442 8.02367 24.3742 8.37622 24.3742ZM29.6274 24.3742C29.98 24.3742 30.25 24.6442 30.25 24.9968C30.25 25.3494 29.98 25.6254 29.6274 25.6254C29.2749 25.6254 28.9988 25.3494 28.9988 24.9968C28.9988 24.6442 29.2749 24.3742 29.6274 24.3742Z"
                            fill="#004E9E"></path>
                    </svg>
                </div>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Affordable care with cutting-edge expertise & state-of-the-art technology.</p>
                </div>

            </div>
            <div class="choose-us__benifits__card">
                <div class="choose-us__benifits__card__icon-wrapper">

                    <svg width="40" height="38" viewBox="0 0 40 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M39.3871 37.9982H11.66C11.3723 37.9982 11.1406 37.7658 11.1406 37.4791L11.1407 27.2086C11.1407 23.0631 15.1892 19.6903 20.1663 19.6903L21.5583 19.6903C21.8451 19.6903 22.0775 19.9227 22.0775 20.2095C22.0776 20.4962 21.8449 20.7287 21.5583 20.7287L20.1665 20.7286C15.7617 20.7286 12.1783 23.6356 12.1783 27.2086L12.1784 36.9597H38.8678V27.2086C38.8678 23.6356 35.2843 20.7287 30.8796 20.7287L29.4879 20.7286C29.2011 20.7286 28.9685 20.4963 28.9685 20.2095C28.9687 19.9225 29.201 19.6903 29.4877 19.6903L30.8798 19.6903C35.8569 19.6903 39.9062 23.0631 39.9062 27.2086L39.9063 37.4789C39.9063 37.7657 39.6736 37.9983 39.3871 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.5565 20.7285C21.2701 20.7285 21.0371 20.4961 21.0371 20.2094L21.0372 17.5586C21.0372 17.2718 21.2697 17.0394 21.5564 17.0394C21.8433 17.0393 22.0757 17.2718 22.0757 17.5586L22.0757 20.2092C22.0757 20.496 21.8431 20.7286 21.5565 20.7285Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M29.4862 20.7285C29.1994 20.7285 28.9668 20.4961 28.9668 20.2093L28.967 17.6598C28.967 17.3729 29.1993 17.1406 29.486 17.1406C29.7738 17.1405 30.0053 17.3731 30.0053 17.6598L30.0055 20.2092C30.0055 20.496 29.7736 20.7286 29.4862 20.7285Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.569 19.9441C25.5645 19.9441 25.5599 19.9442 25.5545 19.9442C22.2129 19.9356 19.4839 16.9843 18.6031 12.4252C18.5493 12.1435 18.7329 11.8712 19.0152 11.8169C19.2973 11.7622 19.5687 11.9468 19.6227 12.2282C20.4056 16.2773 22.7347 18.8985 25.5573 18.9057C28.3791 18.9107 30.712 16.3159 31.5107 12.2896C31.5668 12.0084 31.8397 11.8256 32.121 11.8813C32.4025 11.937 32.5853 12.2105 32.5293 12.4917C31.6309 17.0207 28.899 19.9442 25.569 19.9441Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M29.6294 5.14181C29.6663 5.14181 29.7041 5.14588 29.7411 5.15387C31.0683 5.43816 31.9397 6.78409 32.331 9.15414C32.4152 9.65694 32.4663 10.1507 32.4987 10.5959C33.0387 8.63464 32.3237 5.73663 31.8794 4.46847C30.4075 2.43335 28.6891 1.2931 26.7715 1.07836C23.4596 0.707424 20.5819 3.22635 20.5531 3.25182C18.6342 4.90574 17.8766 6.88109 18.2967 9.12859C18.3782 9.56179 18.4968 9.96563 18.6292 10.3274C18.7205 9.44454 18.8628 8.66431 18.8907 8.51468C18.9331 8.28495 19.1242 8.11245 19.3577 8.0929C27.0765 7.44439 29.2371 5.32354 29.2579 5.30211C29.3564 5.19741 29.4895 5.14193 29.6294 5.14181ZM19.1315 12.9461C18.9721 12.9461 18.8159 12.8724 18.7149 12.7378C18.6727 12.6802 17.6575 11.3066 17.2834 9.35982C16.9328 7.53586 17.0958 4.86133 19.8653 2.47363C20.0438 2.31489 23.1322 -0.370046 26.8788 0.0453878C29.1228 0.293864 31.1041 1.59867 32.7665 3.92308C32.7937 3.96192 32.816 4.00442 32.8322 4.04932C32.9251 4.30838 35.0841 10.4222 32.3608 12.7829C32.205 12.9185 31.9822 12.9482 31.7956 12.8583C31.6091 12.7684 31.4936 12.5761 31.5026 12.3691C31.5604 10.9494 31.3511 6.93354 29.7546 6.24319C28.9856 6.84928 26.356 8.48951 19.8436 9.09246C19.6995 9.98267 19.4956 11.5763 19.6408 12.3286C19.6869 12.5662 19.5623 12.8041 19.3415 12.902C19.2731 12.9319 19.2017 12.9462 19.1315 12.9461Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.5231 26.7996C25.3478 26.7996 25.1838 26.7113 25.0882 26.5644L21.1236 20.4931C20.967 20.2532 21.0342 19.9313 21.274 19.7745C21.5151 19.6176 21.8356 19.6853 21.9925 19.9254L25.5231 25.3307L29.0532 19.9254C29.2102 19.6852 29.5317 19.6177 29.7715 19.7745C30.0122 19.9313 30.0797 20.2532 29.9228 20.4932L25.9575 26.5644C25.8618 26.7112 25.6985 26.7997 25.5231 26.7996Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.6601 37.9982C22.4447 37.9982 22.2435 37.8636 22.1695 37.6489L18.947 28.353C18.8748 28.1459 18.9404 27.9159 19.1117 27.7784L20.1855 26.9149L18.5186 23.7462C18.4266 23.5705 18.4419 23.3578 18.5591 23.1977L20.9733 19.9023C21.0934 19.739 21.2969 19.6601 21.4952 19.7002C21.6938 19.7402 21.8504 19.8917 21.8972 20.0885L26.0271 37.358C26.0937 37.6369 25.9215 37.9171 25.643 37.9838C25.3647 38.0505 25.084 37.8785 25.0173 37.5996L21.1481 21.4209L19.5887 23.5498L21.3035 26.8098C21.4187 27.0297 21.3627 27.3007 21.1689 27.4563L20.0476 28.3584L23.1506 37.3085C23.2443 37.5795 23.1008 37.8755 22.8294 37.9695C22.7737 37.9888 22.7159 37.9982 22.6601 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M28.3835 37.9982C28.3275 37.9982 28.2698 37.989 28.2138 37.9695C27.9426 37.8755 27.7993 37.5797 27.893 37.3087L30.996 28.3584L29.8748 27.4562C29.6808 27.3007 29.6247 27.0297 29.7401 26.81L31.4548 23.5498L29.8954 21.4211L26.0261 37.5996C25.9596 37.8785 25.6798 38.0506 25.4003 37.9838C25.1219 37.917 24.9496 37.637 25.0163 37.358L29.1461 20.0884C29.1932 19.8915 29.3498 19.7401 29.5481 19.7002C29.7473 19.66 29.9502 19.7391 30.0701 19.9024L32.4844 23.1977C32.6017 23.3577 32.6168 23.5706 32.5248 23.7462L30.8589 26.9149L31.9319 27.7783C32.1031 27.9158 32.1687 28.1459 32.0975 28.3531L28.8748 37.6489C28.8001 37.8635 28.5988 37.9982 28.3835 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.6695 33.1305C14.5815 33.1305 14.492 33.1081 14.4108 33.0609C13.7041 32.6528 13.1984 31.9942 12.9874 31.206C12.5511 29.579 13.5201 27.9008 15.1474 27.4648C16.7746 27.0288 18.4523 27.9979 18.8886 29.6249C19.0995 30.4129 18.9913 31.2362 18.583 31.9428C18.4399 32.1909 18.1223 32.2763 17.8744 32.1328C17.6257 31.9895 17.5408 31.6719 17.6842 31.4236C17.9539 30.9571 18.0249 30.4139 17.8852 29.8936C17.5977 28.8196 16.4896 28.1801 15.416 28.4679C14.3426 28.7555 13.7023 29.8634 13.9908 30.9373C14.1296 31.4572 14.4631 31.8922 14.9301 32.1614C15.1783 32.3047 15.2636 32.6224 15.1194 32.8707C15.0241 33.0373 14.8489 33.1305 14.6695 33.1305Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.6693 33.1304C14.4405 33.1304 14.2303 32.9776 14.168 32.7455C14.0944 32.4686 14.2581 32.1838 14.535 32.1096L15.5593 31.8353C15.8351 31.7613 16.1206 31.9254 16.1946 32.2026C16.2688 32.4795 16.1044 32.7643 15.8277 32.8386L14.8048 33.1128C14.7597 33.1247 14.7143 33.1306 14.6693 33.1304Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.1109 32.4767C16.8821 32.4767 16.6717 32.3238 16.6095 32.0918C16.5356 31.8147 16.6997 31.53 16.9764 31.4559L17.9997 31.1816C18.2776 31.1074 18.5621 31.2718 18.636 31.5488C18.71 31.8257 18.5459 32.1105 18.2691 32.1848L17.246 32.4589C17.2009 32.4709 17.1558 32.4768 17.1109 32.4767Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.5405 28.4294C15.3783 28.4294 15.2177 28.353 15.1167 28.2094C15.0485 28.1115 13.4462 25.7655 14.501 21.5251C14.5706 21.2466 14.8517 21.0773 15.1302 21.1464C15.4091 21.2156 15.5783 21.4974 15.5089 21.7757C14.5771 25.5248 15.9542 27.5944 15.9686 27.6149C16.13 27.8503 16.0715 28.1735 15.8371 28.3363C15.747 28.399 15.6432 28.4294 15.5405 28.4294Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M35.9461 28.4652C35.9064 28.4652 35.8676 28.4608 35.8279 28.4516C35.5486 28.3869 35.3744 28.1078 35.4394 27.8285C35.7101 26.6632 36.2912 23.7615 35.8496 21.9866C35.7802 21.7081 35.9496 21.4266 36.2282 21.3573C36.506 21.2885 36.788 21.4575 36.8574 21.7359C37.3352 23.6578 36.8077 26.5251 36.4508 28.0632C36.3953 28.3031 36.1812 28.4652 35.9461 28.4652Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M35.609 28.4219C35.1693 28.4219 34.812 28.7795 34.812 29.219C34.8123 29.6584 35.1689 30.016 35.6089 30.016C36.0479 30.0159 36.4058 29.6584 36.4058 29.219C36.4062 28.7795 36.0479 28.422 35.609 28.4219ZM35.609 31.0543C34.5965 31.0543 33.7734 30.2311 33.7734 29.219C33.7738 28.2069 34.5965 27.3835 35.6089 27.3835C36.6216 27.3835 37.4443 28.2069 37.4443 29.219C37.4447 30.231 36.6213 31.0544 35.609 31.0543Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.63965 15.1033H8.66314V13.9078C8.66314 13.7222 8.76188 13.551 8.9224 13.4582C9.08383 13.3654 9.28123 13.3654 9.44167 13.4582L10.4756 14.0548L10.986 13.1737L9.94667 12.5737C9.7864 12.481 9.68689 12.3096 9.68689 12.1242C9.68704 11.9386 9.78609 11.7672 9.94653 11.6744L10.9835 11.0758L10.4785 10.1965L9.44202 10.7946C9.28135 10.8875 9.08383 10.8876 8.9224 10.7948C8.76208 10.702 8.66283 10.5306 8.66283 10.3451L8.66314 9.14701H7.63965V10.3427C7.63965 10.5281 7.54133 10.6998 7.38086 10.7924C7.21975 10.8851 7.02205 10.8853 6.8617 10.7924L5.82789 10.1957L5.31755 11.0768L6.3569 11.6768C6.51752 11.7695 6.61642 11.941 6.61642 12.1265C6.61651 12.3119 6.51723 12.4834 6.35679 12.5762L5.32041 13.1747L5.82506 14.054L6.86199 13.4559C7.02217 13.3629 7.21949 13.3631 7.38086 13.4559C7.54144 13.5485 7.63965 13.7201 7.63965 13.9056V15.1033ZM9.18241 16.1418H7.12162C6.83399 16.1418 6.60195 15.9094 6.60195 15.6227L6.60238 14.8049L5.8936 15.2134C5.77477 15.2824 5.63198 15.3011 5.49945 15.2653C5.36626 15.2294 5.25244 15.1422 5.1839 15.0225L4.16185 13.2427C4.01866 12.9944 4.10395 12.6776 4.35188 12.5344L5.05876 12.1265L4.34758 11.7161C4.22835 11.6471 4.14089 11.5337 4.10574 11.4005C4.06975 11.2672 4.08867 11.1255 4.15808 11.0062L5.18857 9.22651C5.33301 8.97827 5.64997 8.89372 5.8979 9.03704L6.60238 9.44316V8.62777C6.60238 8.34115 6.83367 8.1087 7.12122 8.1087H9.18241C9.46962 8.1087 9.70137 8.34118 9.70137 8.62794L9.70166 9.44561L10.4091 9.03709C10.5292 8.96812 10.6705 8.94949 10.8039 8.9853C10.9373 9.02106 11.0508 9.10852 11.1194 9.22807L12.1418 11.0076C12.285 11.2559 12.1994 11.573 11.9514 11.7161L11.2448 12.124L11.9551 12.5344C12.0752 12.6033 12.1614 12.7169 12.1975 12.8502C12.233 12.9832 12.2146 13.1251 12.1452 13.2443L11.1142 15.024C10.9706 15.2718 10.6532 15.3567 10.4053 15.2136L9.70166 14.8071V15.6225C9.70166 15.9093 9.46962 16.1419 9.18204 16.1419L9.18241 16.1418Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.968 7.42108C1.50756 7.42108 1.13226 7.79617 1.13226 8.25711L1.13232 15.9933C1.13232 16.4543 1.5073 16.8294 1.96795 16.8294L8.74191 16.8294C8.87617 16.8294 9.00408 16.8811 9.10146 16.9737L12.1117 19.8585L11.87 17.3991C11.8558 17.2535 11.9042 17.1084 12.0024 16.9999C12.1008 16.8912 12.2404 16.8294 12.3874 16.8294L14.3349 16.8294C14.7953 16.8294 15.1703 16.4543 15.1703 15.9933L15.1705 8.25694C15.1705 7.79609 14.7952 7.42114 14.3346 7.42114L1.968 7.42108ZM12.7653 21.7235C12.6347 21.7235 12.5046 21.6741 12.4063 21.5793L8.5338 17.8679H1.968C0.934335 17.8679 0.09375 17.027 0.09375 15.9933L0.0938072 8.25694C0.0938072 7.2235 0.934018 6.38268 1.96795 6.38268L14.3349 6.38257C15.3689 6.38257 16.2088 7.22353 16.2088 8.25711L16.2091 15.9933C16.2091 17.0269 15.3686 17.8679 14.3346 17.8679L12.9601 17.8679L13.2817 21.1536C13.3036 21.3698 13.1879 21.5765 12.9922 21.6716C12.9203 21.7065 12.8426 21.7237 12.7653 21.7235Z"
                            fill="#004E9E"></path>
                    </svg>
                </div>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Nurture academic/research pursuits in a favourable environment.</p>
                </div>

            </div>
            <div class="choose-us__benifits__card">
                <div class="choose-us__benifits__card__icon-wrapper">

                    <svg width="40" height="38" viewBox="0 0 40 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M39.3871 37.9982H11.66C11.3723 37.9982 11.1406 37.7658 11.1406 37.4791L11.1407 27.2086C11.1407 23.0631 15.1892 19.6903 20.1663 19.6903L21.5583 19.6903C21.8451 19.6903 22.0775 19.9227 22.0775 20.2095C22.0776 20.4962 21.8449 20.7287 21.5583 20.7287L20.1665 20.7286C15.7617 20.7286 12.1783 23.6356 12.1783 27.2086L12.1784 36.9597H38.8678V27.2086C38.8678 23.6356 35.2843 20.7287 30.8796 20.7287L29.4879 20.7286C29.2011 20.7286 28.9685 20.4963 28.9685 20.2095C28.9687 19.9225 29.201 19.6903 29.4877 19.6903L30.8798 19.6903C35.8569 19.6903 39.9062 23.0631 39.9062 27.2086L39.9063 37.4789C39.9063 37.7657 39.6736 37.9983 39.3871 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.5565 20.7285C21.2701 20.7285 21.0371 20.4961 21.0371 20.2094L21.0372 17.5586C21.0372 17.2718 21.2697 17.0394 21.5564 17.0394C21.8433 17.0393 22.0757 17.2718 22.0757 17.5586L22.0757 20.2092C22.0757 20.496 21.8431 20.7286 21.5565 20.7285Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M29.4862 20.7285C29.1994 20.7285 28.9668 20.4961 28.9668 20.2093L28.967 17.6598C28.967 17.3729 29.1993 17.1406 29.486 17.1406C29.7738 17.1405 30.0053 17.3731 30.0053 17.6598L30.0055 20.2092C30.0055 20.496 29.7736 20.7286 29.4862 20.7285Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.569 19.9441C25.5645 19.9441 25.5599 19.9442 25.5545 19.9442C22.2129 19.9356 19.4839 16.9843 18.6031 12.4252C18.5493 12.1435 18.7329 11.8712 19.0152 11.8169C19.2973 11.7622 19.5687 11.9468 19.6227 12.2282C20.4056 16.2773 22.7347 18.8985 25.5573 18.9057C28.3791 18.9107 30.712 16.3159 31.5107 12.2896C31.5668 12.0084 31.8397 11.8256 32.121 11.8813C32.4025 11.937 32.5853 12.2105 32.5293 12.4917C31.6309 17.0207 28.899 19.9442 25.569 19.9441Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M29.6294 5.14181C29.6663 5.14181 29.7041 5.14588 29.7411 5.15387C31.0683 5.43816 31.9397 6.78409 32.331 9.15414C32.4152 9.65694 32.4663 10.1507 32.4987 10.5959C33.0387 8.63464 32.3237 5.73663 31.8794 4.46847C30.4075 2.43335 28.6891 1.2931 26.7715 1.07836C23.4596 0.707424 20.5819 3.22635 20.5531 3.25182C18.6342 4.90574 17.8766 6.88109 18.2967 9.12859C18.3782 9.56179 18.4968 9.96563 18.6292 10.3274C18.7205 9.44454 18.8628 8.66431 18.8907 8.51468C18.9331 8.28495 19.1242 8.11245 19.3577 8.0929C27.0765 7.44439 29.2371 5.32354 29.2579 5.30211C29.3564 5.19741 29.4895 5.14193 29.6294 5.14181ZM19.1315 12.9461C18.9721 12.9461 18.8159 12.8724 18.7149 12.7378C18.6727 12.6802 17.6575 11.3066 17.2834 9.35982C16.9328 7.53586 17.0958 4.86133 19.8653 2.47363C20.0438 2.31489 23.1322 -0.370046 26.8788 0.0453878C29.1228 0.293864 31.1041 1.59867 32.7665 3.92308C32.7937 3.96192 32.816 4.00442 32.8322 4.04932C32.9251 4.30838 35.0841 10.4222 32.3608 12.7829C32.205 12.9185 31.9822 12.9482 31.7956 12.8583C31.6091 12.7684 31.4936 12.5761 31.5026 12.3691C31.5604 10.9494 31.3511 6.93354 29.7546 6.24319C28.9856 6.84928 26.356 8.48951 19.8436 9.09246C19.6995 9.98267 19.4956 11.5763 19.6408 12.3286C19.6869 12.5662 19.5623 12.8041 19.3415 12.902C19.2731 12.9319 19.2017 12.9462 19.1315 12.9461Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.5231 26.7996C25.3478 26.7996 25.1838 26.7113 25.0882 26.5644L21.1236 20.4931C20.967 20.2532 21.0342 19.9313 21.274 19.7745C21.5151 19.6176 21.8356 19.6853 21.9925 19.9254L25.5231 25.3307L29.0532 19.9254C29.2102 19.6852 29.5317 19.6177 29.7715 19.7745C30.0122 19.9313 30.0797 20.2532 29.9228 20.4932L25.9575 26.5644C25.8618 26.7112 25.6985 26.7997 25.5231 26.7996Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.6601 37.9982C22.4447 37.9982 22.2435 37.8636 22.1695 37.6489L18.947 28.353C18.8748 28.1459 18.9404 27.9159 19.1117 27.7784L20.1855 26.9149L18.5186 23.7462C18.4266 23.5705 18.4419 23.3578 18.5591 23.1977L20.9733 19.9023C21.0934 19.739 21.2969 19.6601 21.4952 19.7002C21.6938 19.7402 21.8504 19.8917 21.8972 20.0885L26.0271 37.358C26.0937 37.6369 25.9215 37.9171 25.643 37.9838C25.3647 38.0505 25.084 37.8785 25.0173 37.5996L21.1481 21.4209L19.5887 23.5498L21.3035 26.8098C21.4187 27.0297 21.3627 27.3007 21.1689 27.4563L20.0476 28.3584L23.1506 37.3085C23.2443 37.5795 23.1008 37.8755 22.8294 37.9695C22.7737 37.9888 22.7159 37.9982 22.6601 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M28.3835 37.9982C28.3275 37.9982 28.2698 37.989 28.2138 37.9695C27.9426 37.8755 27.7993 37.5797 27.893 37.3087L30.996 28.3584L29.8748 27.4562C29.6808 27.3007 29.6247 27.0297 29.7401 26.81L31.4548 23.5498L29.8954 21.4211L26.0261 37.5996C25.9596 37.8785 25.6798 38.0506 25.4003 37.9838C25.1219 37.917 24.9496 37.637 25.0163 37.358L29.1461 20.0884C29.1932 19.8915 29.3498 19.7401 29.5481 19.7002C29.7473 19.66 29.9502 19.7391 30.0701 19.9024L32.4844 23.1977C32.6017 23.3577 32.6168 23.5706 32.5248 23.7462L30.8589 26.9149L31.9319 27.7783C32.1031 27.9158 32.1687 28.1459 32.0975 28.3531L28.8748 37.6489C28.8001 37.8635 28.5988 37.9982 28.3835 37.9982Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.6695 33.1305C14.5815 33.1305 14.492 33.1081 14.4108 33.0609C13.7041 32.6528 13.1984 31.9942 12.9874 31.206C12.5511 29.579 13.5201 27.9008 15.1474 27.4648C16.7746 27.0288 18.4523 27.9979 18.8886 29.6249C19.0995 30.4129 18.9913 31.2362 18.583 31.9428C18.4399 32.1909 18.1223 32.2763 17.8744 32.1328C17.6257 31.9895 17.5408 31.6719 17.6842 31.4236C17.9539 30.9571 18.0249 30.4139 17.8852 29.8936C17.5977 28.8196 16.4896 28.1801 15.416 28.4679C14.3426 28.7555 13.7023 29.8634 13.9908 30.9373C14.1296 31.4572 14.4631 31.8922 14.9301 32.1614C15.1783 32.3047 15.2636 32.6224 15.1194 32.8707C15.0241 33.0373 14.8489 33.1305 14.6695 33.1305Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.6693 33.1304C14.4405 33.1304 14.2303 32.9776 14.168 32.7455C14.0944 32.4686 14.2581 32.1838 14.535 32.1096L15.5593 31.8353C15.8351 31.7613 16.1206 31.9254 16.1946 32.2026C16.2688 32.4795 16.1044 32.7643 15.8277 32.8386L14.8048 33.1128C14.7597 33.1247 14.7143 33.1306 14.6693 33.1304Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.1109 32.4767C16.8821 32.4767 16.6717 32.3238 16.6095 32.0918C16.5356 31.8147 16.6997 31.53 16.9764 31.4559L17.9997 31.1816C18.2776 31.1074 18.5621 31.2718 18.636 31.5488C18.71 31.8257 18.5459 32.1105 18.2691 32.1848L17.246 32.4589C17.2009 32.4709 17.1558 32.4768 17.1109 32.4767Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.5405 28.4294C15.3783 28.4294 15.2177 28.353 15.1167 28.2094C15.0485 28.1115 13.4462 25.7655 14.501 21.5251C14.5706 21.2466 14.8517 21.0773 15.1302 21.1464C15.4091 21.2156 15.5783 21.4974 15.5089 21.7757C14.5771 25.5248 15.9542 27.5944 15.9686 27.6149C16.13 27.8503 16.0715 28.1735 15.8371 28.3363C15.747 28.399 15.6432 28.4294 15.5405 28.4294Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M35.9461 28.4652C35.9064 28.4652 35.8676 28.4608 35.8279 28.4516C35.5486 28.3869 35.3744 28.1078 35.4394 27.8285C35.7101 26.6632 36.2912 23.7615 35.8496 21.9866C35.7802 21.7081 35.9496 21.4266 36.2282 21.3573C36.506 21.2885 36.788 21.4575 36.8574 21.7359C37.3352 23.6578 36.8077 26.5251 36.4508 28.0632C36.3953 28.3031 36.1812 28.4652 35.9461 28.4652Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M35.609 28.4219C35.1693 28.4219 34.812 28.7795 34.812 29.219C34.8123 29.6584 35.1689 30.016 35.6089 30.016C36.0479 30.0159 36.4058 29.6584 36.4058 29.219C36.4062 28.7795 36.0479 28.422 35.609 28.4219ZM35.609 31.0543C34.5965 31.0543 33.7734 30.2311 33.7734 29.219C33.7738 28.2069 34.5965 27.3835 35.6089 27.3835C36.6216 27.3835 37.4443 28.2069 37.4443 29.219C37.4447 30.231 36.6213 31.0544 35.609 31.0543Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.63965 15.1033H8.66314V13.9078C8.66314 13.7222 8.76188 13.551 8.9224 13.4582C9.08383 13.3654 9.28123 13.3654 9.44167 13.4582L10.4756 14.0548L10.986 13.1737L9.94667 12.5737C9.7864 12.481 9.68689 12.3096 9.68689 12.1242C9.68704 11.9386 9.78609 11.7672 9.94653 11.6744L10.9835 11.0758L10.4785 10.1965L9.44202 10.7946C9.28135 10.8875 9.08383 10.8876 8.9224 10.7948C8.76208 10.702 8.66283 10.5306 8.66283 10.3451L8.66314 9.14701H7.63965V10.3427C7.63965 10.5281 7.54133 10.6998 7.38086 10.7924C7.21975 10.8851 7.02205 10.8853 6.8617 10.7924L5.82789 10.1957L5.31755 11.0768L6.3569 11.6768C6.51752 11.7695 6.61642 11.941 6.61642 12.1265C6.61651 12.3119 6.51723 12.4834 6.35679 12.5762L5.32041 13.1747L5.82506 14.054L6.86199 13.4559C7.02217 13.3629 7.21949 13.3631 7.38086 13.4559C7.54144 13.5485 7.63965 13.7201 7.63965 13.9056V15.1033ZM9.18241 16.1418H7.12162C6.83399 16.1418 6.60195 15.9094 6.60195 15.6227L6.60238 14.8049L5.8936 15.2134C5.77477 15.2824 5.63198 15.3011 5.49945 15.2653C5.36626 15.2294 5.25244 15.1422 5.1839 15.0225L4.16185 13.2427C4.01866 12.9944 4.10395 12.6776 4.35188 12.5344L5.05876 12.1265L4.34758 11.7161C4.22835 11.6471 4.14089 11.5337 4.10574 11.4005C4.06975 11.2672 4.08867 11.1255 4.15808 11.0062L5.18857 9.22651C5.33301 8.97827 5.64997 8.89372 5.8979 9.03704L6.60238 9.44316V8.62777C6.60238 8.34115 6.83367 8.1087 7.12122 8.1087H9.18241C9.46962 8.1087 9.70137 8.34118 9.70137 8.62794L9.70166 9.44561L10.4091 9.03709C10.5292 8.96812 10.6705 8.94949 10.8039 8.9853C10.9373 9.02106 11.0508 9.10852 11.1194 9.22807L12.1418 11.0076C12.285 11.2559 12.1994 11.573 11.9514 11.7161L11.2448 12.124L11.9551 12.5344C12.0752 12.6033 12.1614 12.7169 12.1975 12.8502C12.233 12.9832 12.2146 13.1251 12.1452 13.2443L11.1142 15.024C10.9706 15.2718 10.6532 15.3567 10.4053 15.2136L9.70166 14.8071V15.6225C9.70166 15.9093 9.46962 16.1419 9.18204 16.1419L9.18241 16.1418Z"
                            fill="#004E9E"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.968 7.42108C1.50756 7.42108 1.13226 7.79617 1.13226 8.25711L1.13232 15.9933C1.13232 16.4543 1.5073 16.8294 1.96795 16.8294L8.74191 16.8294C8.87617 16.8294 9.00408 16.8811 9.10146 16.9737L12.1117 19.8585L11.87 17.3991C11.8558 17.2535 11.9042 17.1084 12.0024 16.9999C12.1008 16.8912 12.2404 16.8294 12.3874 16.8294L14.3349 16.8294C14.7953 16.8294 15.1703 16.4543 15.1703 15.9933L15.1705 8.25694C15.1705 7.79609 14.7952 7.42114 14.3346 7.42114L1.968 7.42108ZM12.7653 21.7235C12.6347 21.7235 12.5046 21.6741 12.4063 21.5793L8.5338 17.8679H1.968C0.934335 17.8679 0.09375 17.027 0.09375 15.9933L0.0938072 8.25694C0.0938072 7.2235 0.934018 6.38268 1.96795 6.38268L14.3349 6.38257C15.3689 6.38257 16.2088 7.22353 16.2088 8.25711L16.2091 15.9933C16.2091 17.0269 15.3686 17.8679 14.3346 17.8679L12.9601 17.8679L13.2817 21.1536C13.3036 21.3698 13.1879 21.5765 12.9922 21.6716C12.9203 21.7065 12.8426 21.7237 12.7653 21.7235Z"
                            fill="#004E9E"></path>
                    </svg>
                </div>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Nurture academic/research pursuits in a favourable environment.</p>
                </div>

            </div>




        </div>
        <div class="choose-us__image-container choose-us__image-container--secondary">



            <div class="choose-us__image-wrapper choose-us__image-wrapper--secondary">
                <img src="" data-src="{{ Vite::asset('resources/images/int-patients/wepik-export-20230424074108 1.png') }}"
                    alt="Choose Us">
            </div>

            <img class="choose-us__image-container__dots-left choose-us__image-container__dots-left--secondary"
                src="http://127.0.0.1:5173/resources/images/Icons/Dots(1).png" alt="">
            <img class="choose-us__image-container__dots-right choose-us__image-container__dots-right--secondary"
                src="http://127.0.0.1:5173/resources/images/Icons/Dots(1).png" alt="">
        </div>
    </div>

    <x-gap />
<div class="ui-background">

    <x-testimonials :testimonials=[] />
</div>
    <x-gap />
    <x-faqs :faqs='$faqs' />
    <x-gap />
@endsection
