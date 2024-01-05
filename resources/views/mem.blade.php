@extends('layout.main')
@section('css')
    @vite(['resources/scss/thankyou.scss', 'resources/js/app.js','resources/js/home.js'])
@endsection
@section('content')
    <x-banner :imgurl="Vite::asset('resources/images/mem/banner.png')" :text="'Introducing MASTERS IN EMERGENCY MEDICINE (MEM) / CCT-EM (SEMI) at Star Hospitals: Your Path to Excellence in Emergency Care'" :$breadcrum />

    <x-gap />
    @php

        $description = 'All the information displayed, transmitted, or carried by STAR Hospitals and its subsidiaries including, but
        not limited to, news articles, opinions, reviews, text, photographs, images, illustrations, profiles, audio
        clips, video clips, trademarks, service marks and others (collectively the "Content") on this STAR Hospitals’
        website is for informational purposes only.';
    @endphp
    {{-- <x-gap/> --}}

    <div class="t-c-description">

        <div>
            <strong>About the Program</strong>
        </div>
        <br>
        <div>
            Are you ready to embark on an exciting journey towards becoming a highly skilled and compassionate Emergency
            Medicine Physician? Look no further! Star Hospitals proudly announces the intake of residents for the
            prestigious MASTERS IN EMERGENCY MEDICINE (MEM) / CCT-EM (SEMI) welcoming a new cohort of passionate medical
            professionals.
        </div>

        <br><br>

        <div>
            <strong>Why Choose Our Residency Program?</strong>
        </div>

        <br>

        <div>
            <img data-src="{{ Vite::asset('resources/images/mem/wepik-export-20230424074108.png') }}" class="floating-image"
                alt="">

            <p style="">
                The MASTERS IN EMERGENCY MEDICINE (MEM) / CCT-EM (SEMI) at Star Hospitals is designed to shape the next
                generation of emergency medicine specialists. Here’s why you should consider joining:
                <br>
                <br>


                <span style="color: #004E9E; font-size: 16px; font-weight: 700;">
                    Training:
                </span>
                The program offers a comprehensive curriculum that covers all aspects of emergency medicine, including
                trauma care, resuscitation, critical care, and more. You will receive hands-on experience in a high-volume,
                high-acuity setting, ensuring that you are well-prepared for any emergency.
            </p>
        </div>
        <br>

        <br />

        <div>
            <ul style="list-style-image: url('{{ Vite::asset('resources/images/bullet.svg') }}');">
                <li>
                    <span style="color: #004E9E; font-size: 14px;"><b>Comprehensive Academic
                            Curriculum:</b></span>
                    <span
                        style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Our Emergency Medicine Residency Program is grounded in a robust academic curriculum that is
                        designed to
                        provide residents with a strong foundation in emergency medicine and a well-rounded education. The
                        curriculum covers a wide range of topics, including but not limited to:<br />
                    </span>
                    <ul style="list-style-image: none; list-style-type: disc;">
                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Core Emergency Medicine:
                            </span>
                            <span
                                style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Residents will receive in-depth training in core emergency medicine principles, such as
                                acute
                                resuscitation, trauma care, cardiovascular emergencies, and pediatric emergencies. This
                                knowledge is
                                essential for delivering exceptional care in the emergency department.<br />
                            </span>
                        </li>

                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Clinical Decision-Making:
                            </span>
                            <span
                                style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                We emphasize clinical reasoning and decision-making skills. Residents will learn to assess
                                complex
                                medical cases, make rapid decisions, and prioritize patient care in a fast-paced
                                environment.<br />
                            </span>
                        </li>

                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Advanced Procedures:
                            </span>
                            <span
                                style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Our program includes hands-on training in advanced procedures commonly performed in the
                                emergency
                                department, such as Intubation, chest tubes, Ultrasound-guided line placement (Central,
                                arterial,
                                dialysis sheath), Nerve Blocks, Simple and complex wound repair, etc.<br />
                            </span>
                        </li>

                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Simulation-Based Learnings:
                            </span>
                            <span
                                style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                The program leverages state-of-the-art simulation facilities for immersive and realistic
                                training
                                scenarios. This allows residents to practice critical skills and decision-making in a
                                controlled
                                environment, enhancing their preparedness for real-life emergencies.
                            </span>
                        </li>
                    </ul>
                </li>

                <br />

                <li>
                    <span
                        style="color: #004E9E; font-size: 14px; font-weight: 600; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Expert Faculty-Led Academics:<br />
                    </span>
                    <span
                        style="color: #212121; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        <ul style="list-style-image: none; list-style-type: disc;">
                            <li>
                                We are the only institute in India with 2 fully trained FRCEM consultants as a part of our
                                faculty.
                                Our
                                academic sessions are conducted by a team of highly experienced senior consultants and
                                faculty
                                members who
                                are leaders in the field of emergency medicine. These experts bring a wealth of knowledge
                                and
                                clinical
                                experience to the program with some from their experience working in the United Kingdom,
                                ensuring
                                that
                                residents receive the best possible education.
                            </li>
                            <li>
                                Every resident will have an educational supervisor who will mentor you, provide guidance,
                                and
                                support your growth as a medical professional.
                            </li>
                        </ul>
                    </span>
                </li>

                <br />

                <li>
                    <span
                        style="color: #004E9E; font-size: 14px; font-weight: 600; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Hands-on Workshop:
                    </span>
                    <span
                        style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        In
                        addition to traditional classroom-based learning, our program places a strong emphasis on hands-on
                        workshops. These workshops provide residents with practical, real-world experience that is
                        invaluable in
                        emergency medicine.<br />Workshops cover a wide range of topics, including:<br />
                    </span>
                    <ul style="list-style-image: none; list-style-type: disc;">
                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Procedural Skills:
                            </span>
                            <span
                                style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Residents will have the opportunity to refine their procedural skills through hands-on
                                workshops,
                                ensuring
                                that they are proficient in critical interventions.
                            </span>
                        </li>

                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Simulation Scenarios:
                            </span>
                            <span
                                style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Simulated patient scenarios are a key component of our workshops. These scenarios replicate
                                real-life
                                emergencies, allowing residents to apply their knowledge and skills in a controlled
                                setting.
                            </span>
                        </li>

                        <li>
                            <span
                                style="color: #004E9E; font-size: 14px; font-weight: 500; text-decoration: underline; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Team-Based Training:
                            </span>
                            <span
                                style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                                Workshops often involve team-based training exercises, which are essential for fostering
                                effective
                                communication and collaboration among healthcare professionals in the emergency department.
                            </span>
                        </li>
                    </ul>
                </li>

                <br />

                <li>
                    <span
                        style="color: #004E9E; font-size: 14px; font-weight: 600; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Leadership and Communication Training:
                    </span>
                    <ul style="list-style-image: none; list-style-type: disc;">
                        <li>Recognizing the importance of leadership and communication in emergency medicine, our program
                            goes
                            beyond
                            clinical training. Residents will have the opportunity to participate in leadership development
                            sessions
                            and
                            communication workshops. These sessions are designed to equip residents with the skills
                            necessary to
                            lead
                            medical teams, manage high-stress situations, and effectively communicate with patients and
                            their
                            families.
                        </li>
                        <li>By integrating leadership and communication training into our curriculum, we ensure that
                            our
                            residents not only excel clinically but also possess the interpersonal and leadership skills
                            required
                            for
                            success in the dynamic field of emergency medicine.
                        </li>
                    </ul>
                </li>

                <br />

                <li>
                    <span
                        style="color: #004E9E; font-size: 14px; font-weight: 600; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Duration, Working Hours, Rotation:
                    </span>
                    <span
                        style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        <ul style="list-style-image: none; list-style-type: disc;">
                            <li>
                                Duration
                                of course: A 3-year program with in-depth training in emergency medicine.
                            </li>
                            <li>
                                Working Hours:
                                Round-the-clock shifts (covering day and night), well balanced amongst the residents with
                                24/7
                                consultant
                                coverage.
                            </li>
                            <li>
                                Rotations: Resident is predominantly trained in ER for most of the training but also
                                posted
                                in critical care and anesthesia to broaden clinical expertise.
                            </li>
                        </ul>
                    </span>
                </li>

                <br />

                <li>
                    <span
                        style="color: #004E9E; font-size: 14px; font-weight: 600; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        Fee and Stipend:
                    </span>
                    <span
                        style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                        <ul style="list-style-image: none; list-style-type: disc;">
                            <li>
                                SEMI Enrollment Fee: 1,00,000/- onetime payment to SEMI Board
                            </li>
                            <li>Institute Fee: 1,00,000/-per annum
                                for
                                3 years
                            </li>
                            <li>
                                Stipend for residents:

                                <br /><br />

                                <table style="border: 1px solid #E0E0E0; border-radius: 10px; border-spacing:10px;">
                                    <thead>
                                        <tr>
                                            <th>Year Of Residency</th>
                                            <th>Per Month</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>First</td>
                                            <td>25,000/-</td>
                                        </tr>
                                        <tr>
                                            <td>Second</td>
                                            <td>30,000/-</td>
                                        </tr>
                                        <tr>
                                            <td>Third</td>
                                            <td>35,000/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </span>
                </li>

                <br />
            </ul>

        </div>

        <div>
            <span
                style="color: #004E9E; font-size: 16px; font-weight: 700; line-height: 25px; letter-spacing: 0.32px; word-wrap: break-word">
                Cutting Edge Facilities:
            </span>
            <span
                style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                Train in a world-class healthcare facility equipped with the latest technology and resources. Our simulation
                centre allows you to practice and refine your skills in a controlled environment.
            </span>
        </div>
        <br />
        <br />

        <div>
            {{-- <x-heading :title="'Reviews From Our Patients'" :description="$content->review_text" /> --}}
                <div class="testimonials testimonials-slider">
                
                    {{-- @foreach ($testimonials as $item)
                    <div class="testimonials__card">
                        <a class="ctg-video">
                            <img src="" data-src="{{ config('variables.asset') . $item->image }}" alt="">
                
                        </a>
                        <div class="testimonials__card__content">
                            <p>{{$item->patient_name}}</p>
                
                            <h4>{{$item->text}}</h4>
                        </div>
                    </div> 
                    @endforeach --}}
                    
                    <div class="testimonials__card">
                       <a href="" class=""> <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt=""> </a>
                        <div class="testimonials__card__content">
                           
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                         
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    
                   
                    
                    
                </div>
        </div>

        <br />
        <br />

        <div>
            <span
                style="color: #004E9E; font-size: 16px; font-weight: 700; line-height: 25px; letter-spacing: 0.32px; word-wrap: break-word">
                Interdisciplinary Approach:
            </span>
            <span
                style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                Gain exposure to a multidisciplinary approach to emergency care. Collaborate with specialists from various
                fields to provide comprehensive care to patients. Use to opportunity to observe/ rotate with them based on
                your specialization request during the final year.
            </span>
        </div>
        <br />
        <br />

        <div>
            {{-- <x-heading :title="'Reviews From Our Patients'" :description="$content->review_text" /> --}}
                <div class="testimonials testimonials-slider">
                
                    {{-- @foreach ($testimonials as $item)
                    <div class="testimonials__card">
                        <a class="ctg-video">
                            <img src="" data-src="{{ config('variables.asset') . $item->image }}" alt="">
                
                        </a>
                        <div class="testimonials__card__content">
                            <p>{{$item->patient_name}}</p>
                
                            <h4>{{$item->text}}</h4>
                        </div>
                    </div> 
                    @endforeach --}}
                    
                    <div class="testimonials__card">
                       <a href="" class=""> <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt=""> </a>
                        <div class="testimonials__card__content">
                           
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                         
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    <div class="testimonials__card">
                        <img src="" data-src="{{Vite::asset('resources/images/mem/nurse-taking-notes-x-ray-room.jpeg')}}" alt="">
                        <div class="testimonials__card__content">
                            
                        </div>
                    </div>
                    
                   
                    
                    
                </div>
        </div>
        <br />

        <br />

        <div>
            <span
                style="color: #004E9E; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 25px; letter-spacing: 0.32px; word-wrap: break-word">
                Commitment to Compassion:
            </span>
            <span
                style="color: black; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                At Star Hospitals, we emphasize not only clinical excellence but also compassionate care. We believe in
                treating patients with respect, empathy, and dignity, and our program instills these values in our
                residents.
            </span>
        </div>

        <br />

        <div>
            <span
                style="color: #004E9E; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 25px; letter-spacing: 0.32px; word-wrap: break-word">
                Strong Network:
            </span>
            <span
                style="color: black; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
                Joining with us will allow networking with emergency physicians who have achieved remarkable success in
                their
                careers working in India, the United Kingdom, and Australia. Our network provides ongoing support and
                networking opportunities.
            </span>
        </div>

        <br />

        <div style="font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
            <ul>
                <li>King's Hospital London</li>
                <li>Queen Elizabeth Hospital Birmingham</li>
                <li>Clevaland Clinic (Abu Dhabi)</li>
                <li>Pinderfields hospital</li>
                <li>John Radcliffe Hospital, Oxford</li>
                <li>Leeds General Infirmary</li>
                <li>Epsom & St Helier hospital</li>
                <li>St Georges Hospital</li>
                <li>Ipswich Hospital</li>
                <li>Worcestershire Royal Hospital</li>
                <li>Wollongong Hospital</li>
                <li>University Medical Center New Orleans LCMC Health</li>
            </ul>
        </div>

        <br /><br /><br />

        <div>
            <strong>Application Information</strong>
        </div>

        <br />

        <div
            style="color: black; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0.28px; word-wrap: break-word">
            <ul>
                <li style="">
                    2024 Batch, Applications Open:

                    <br /><br />

                    
                </li>
                <li style="list-style-type: none;margin-left:-1.5em">
                    <table style="border: 1px solid #E0E0E0; border-radius: 10px;">
                        <thead>
                            <tr>
                                <th>Batch</th>
                                <th>Applications Open</th>
                                <th>Applications Closed</th>
                                <th>Interview Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td>20th November</td>
                                <td>31st December</td>
                                <td>1st - 15th January</td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td>1st April</td>
                                <td>30th April</td>
                                <td>1st - 15th May</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <br>
                <li>
                    Eligibility:
                </li>
                <li style="list-style-type: none;margin-left:-15px;padding-top:0.5em">
                    1. MBBS degree with valid state medical council registration.
                </li>
                <li style="list-style-type: none;margin-left:-15px;padding-top:0.5em">
                    2. MBBS graduates from foreign varsities qualified through FMGE (Foreign Medical Graduate Entrance) by
                    MCI with valid state medical council registration.

                </li>
                <li>
                    How to Apply: <a href="/mem-register" style="color: #004E9E;font-weight:bold;text-decoration:underline">Link
                        to online form for submission</a> <br>
                    Brochure Download (for more detailed information about the program, academics, faculty)
                </li>
            </ul>
        </div>
        <br /><br /><br />

        <div>
            <strong>Join Us in Shaping the Future of Emergency Medicine</strong>
        </div>
        <br>
        <div>
            <p>
                The Star Hospitals Emergency Medicine Residency Program is your gateway to a fulfilling and impactful career
                in emergency medicine. Whether you aspire to work in a bustling urban trauma center, a rural hospital, or
                anywhere in between, our program will equip you with the skills and knowledge needed to excel. At Star
                Hospitals, we are committed to providing a well-rounded and comprehensive academic experience that prepares
                our residents to excel in emergency medicine, make informed decisions, and lead with confidence. Our program
                is dedicated to nurturing the next generation of emergency medicine physicians who are not only skilled
                clinicians but also effective leaders and communicators.
                <br><br>
                Are you ready to make a difference in the lives of patients during their most critical moments? <br>
                Apply to the Star Hospital’s Emergency Medicine Residency Program and be part of a legacy of excellence in
                healthcare.
            </p>
        </div>

        <br>

        <div class="mem-contact-info">
            <div class="mem-contact-info-item-1">
                <p>For inquiries and application details, please visit our website www.------------.com or
                    contact:</p>

                <br><br>


                Dr. Rahul Katta, <br>
                Group Lead, Department of Emergency Medicine. <br>
                Mail: rahul.katta@starhospitals.co.in <br>
                Ph: +91 9148779869 <br>
            </div>
            <div class="mem-contact-info-item-2">
                <br><br><br>

                Dr. Imran Shareef, <br>
                Clinical Lead, MBBS, FRCEM <br>
                Mail: imran.shareef@starhospitals.co.in <br>
                Ph: +91 8008670634 <br>
            </div>
        </div>

        <br><br>

        <div>
            <p style="color: #E3000F">Note: MASTERS IN EMERGENCY MEDICINE (MEM) / CCT-EM (SEMI) is a 3-year postgraduate course accredited by the Society for Emergency Medicine India [SEMI] board and not accredited/recognized by the National Medical Commission (earlier – Medical Council of India).</p>
        </div>
    </div>
    <x-gap />
@endsection
