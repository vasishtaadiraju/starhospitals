@extends('layout.main')
@section('css')
    @vite(['resources/scss/thankyou.scss', 'resources/js/app.js'])
@endsection
@section('content')
    <x-banner :imgurl="Vite::asset('resources/images/banner/t&c.png')" :text="'Terms & Conditions | Star Hospitals'" :$breadcrum />

        <x-gap/>
        @php
            
            $description = 'All the information displayed, transmitted, or carried by STAR Hospitals and its subsidiaries including, but
        not limited to, news articles, opinions, reviews, text, photographs, images, illustrations, profiles, audio
        clips, video clips, trademarks, service marks and others (collectively the "Content") on this STAR Hospitals’
        website is for informational purposes only.'
        @endphp
        <x-heading :title="'Terms and Conditions'" :description="$description" />
            {{-- <x-gap/> --}}

    <div class="t-c-description">
        
        <div><strong>Privacy Policy</strong></div>
            <br>
        <div>STAR Hospitals (“we”, “us”, “STAR Hospitals”), is the author and publisher of the internet source
            https://www.starhospitals.in/ (“Website”), is committed to respecting the privacy of every person who shares
            their information or data with us (“you(r)” or “User(s)”). Your privacy protection is of utmost importance to us
            and we strive to take due care and protection of the information we receive from you, the User. This privacy
            policy aims at explaining to you how we collect, share, and protect the personal data of the Users in order to
            demonstrate our commitment to protecting your privacy and your personal information (“Privacy Policy”/
            “Policy”). Any capitalized word has the meaning attributed to it in the Policy hereinafter. This Privacy Policy
            applies to the collection, storage, processing, disclosure, and transfer of your Personal Information (defined
            below) as per the below-mentioned laws, particularly when you use our Services.</div>
        <div><br></div>
        <div>In this regard, we adhere to the law applicable to us, inclusive of</div>
        <ul>
            <li>The Information Technology Act, 2000 – Section 43A.</li>
            <li>The Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information)
                Rules, 2011. (“SPI Rules”)</li>
            <li>The Information Technology (Intermediaries Guidelines) Rules, 2011</li>
        </ul>
        <div><br></div>
        <div>By confirming that you are bound by this privacy policy (by the means provided on this website or app), by
            using the services, or by otherwise giving us your information, you acknowledge that you understand this privacy
            policy and its contents, agree to the practices and policies outlined in this privacy policy and hereby consent
            to our collection, use, and sharing of your information as described in this privacy policy. We reserve the
            right to change, modify, add, or delete portions of the terms of this privacy policy at any time. If you do not
            agree with this privacy policy at any time, please exercise restraint from using any of our services or sharing
            any of your information with us. If you use the services on behalf of someone else (such as your child or a
            dependant) or an entity, you represent that you are authorized by, and hereby acknowledge that you accept this
            privacy policy, on such individual’s or entity’s behalf.</div>
        <div><br></div>
        <ol>
            <li>1. ACCESS</li>
        </ol>
        <div><br></div>
        <ul>
            <li>Basis communication standards/ protocols/ practices on the Internet, we collect your Personal Information
                directly from you and/or from third parties and automatically through our Services. Such Personal
                Information includes the Internet Protocol (IP) address of your computer (or the proxy server a User used to
                access the World Wide Web), your computer/ device operating system and type of web browser you are using,
                email patterns, as well as the name of User’s ISP other Personal Information, as listed in Clause 5 below.
            </li>
            <li>The linkage between User’s IP address and User’s Personal Information may be available to us or our partners
                but is not shared with other third parties. We also may use the geolocation feature and automatically
                collect data such as the type of device used, operating system, and device identifier. This information,
                however, is not shared and the User can opt out of such services by making changes to their settings at the
                device level. You may access your Personal Information shared with us in the manner given below. You can
                further choose to share additional Personal Information with us and can further modify your Personal
                Information or our usage thereof by writing to us as per Clause 16 or per Clause 3 below.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>2. CONSENT</li>
        </ol>
        <div><br></div>
        <ul>
            <li>By choosing the opt-in option on the Services and thereafter by providing us with your Personal Information
                or availing the services of STAR Hospitals or by making use of the facilities provided by the Website or by
                registering on our App/ Website, it is agreed by you that you have, freely consented to the collection,
                storage, processing, disclosure, and transfer of your Personal Information in accordance with the provisions
                of this Privacy Policy and any amendments thereof.</li>
            <li>You acknowledge that you have provided your Personal Information out of your free will and after
                understanding how it will be used. You also consent that the collection, storage, processing, disclosure,
                and transfer of any Personal Information shall not cause any wrongful loss to you if it is done in
                accordance with the provisions of this Privacy Policy.</li>
        </ul>
        <div><br></div>
        <ol>
            <li>3. CONTROL OVER YOUR PERSONAL INFORMATION</li>
        </ol>
        <div><br></div>
        <ul>
            <li>You have the right to withdraw your consent for our usage of the Personal Information at any point once the
                withdrawal of the consent is intimated to us in writing through an email to _____________ requesting the
                same. If you wish to rectify the Personal Information (or a part thereof) that we may have collected to
                offer you personalized services and offers, as per Clause 12 of this Policy, you may write to the Grievance
                Officer, as mentioned under Clause 16 of this Policy, citing the reason for such rectification of Personal
                Information.</li>
            <li>Once you withdraw your consent to share the Personal Information collected by us, we shall have the option
                not to fulfill the purposes for which the said Personal Information was sought and we may restrict you from
                using our Services or the Website.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>4. CHANGES TO THE PRIVACY POLICY</li>
        </ol>
        <div>STAR Hospitals reserves the right to update and modify this Privacy Policy from time to time, without advance
            notice, including on account of changes in applicable law. We will, subject to law, however, endeavor not to
            adversely impair your rights under this Privacy Policy without your explicit consent and will do so by
            displaying such a change through notice and/or by sending an email of the new terms, based on our discretion or
            through a notification on the app. We always indicate the date when the last changes were published and we will
            offer access to archived versions for your review. If you object to the changes of our Policy and wish to no
            longer use our Services you may contact us in accordance with the terms hereof to deactivate your account. If a
            User uses our Services after a notice of changes has been sent or published, such a User hereby provides their
            consent to the changed terms.</div>
        <div><br></div>
        <div><strong></strong></div>
        <div><br></div>
        <strong>PERSONAL INFORMATION COLLECTED</strong>
        <ul>
            <li>In order to provide the best services so as to meet your needs, we may ask you to voluntarily provide us
                with information that will enable us to personally identify you. You consent, agree, and acknowledge that
                the kinds of information we may collect about you may include the following:</li>
            <li>Contact details (number/mobile number and email address),</li>
            <li>Physical, physiological, and mental health conditions, provided by you and/or your health care professional,
            </li>
            <li>Personal details, medical records, and history,</li>
            <li>Valid financial information at the time of purchase of product/service and/or online payment,</li>
            <li>Login ID and password,</li>
            <li>User details as provided at the time of registration or thereafter,</li>
            <li>Records of interaction with our representatives,</li>
            <li>Your usage details such as time, frequency, duration and pattern of use, features used, and the amount of
                storage used,</li>
            <li>Master and transaction data and other data stored in your user account,</li>
            <li>Any other information that may be willingly shared by you such as insurance data, reports, etc.
                (collectively referred to as "Personal Information").</li>
            <li>Such information we collect may constitute Personal Information as per the SPI Rules and you give us your
                express consent to such collection with this Policy. Our Services may be unavailable to you, or may not be
                available as intended, in the event such consent is not given. Information that is however freely available
                to the public domain under the Right to information act or other such act will not be regarded as Personal
                Information or sensitive as per the SPI Rules.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>HOW WE COLLECT PERSONAL INFORMATION</li>
        </ol>
        <div><br></div>
        <ul>
            <li>The methods by which we collect your Personal Information include but are not limited to the following:</li>
            <li>When you fill out the patient registration form,</li>
            <li>When you provide details to a STAR Hospitals health care professional or STAR Hospitals representative,</li>
            <li>When you register on our Website or App with information as may be necessary</li>
            <li>When you provide your Personal Information to us during the course of receiving services,</li>
            <li>When you use the features of our Services,</li>
            <li>When you provide access to any other website,</li>
            <li>By the use of cookies (more fully detailed in Clause 9 of this Privacy Policy).</li>
            <li>Information from a casual visitor who is just perusing the Website shall not be used or collected. However,
                this Privacy Policy is to be understood by such casual visitors as well before using our Services, failing
                which they are required to leave the Website or App immediately. Any visitor who has voluntarily submitted
                their information to the Website or App shall come within the definition of User as set out above. Casual
                visitors who have accepted this Privacy Policy but do not agree with them anymore can exit the App or
                Website to clear temporary cookies and can ensure the same by clearing them on the website. STAR Hospitals
                does not guarantee the behavior of the Services for such visitors of the Website/ users of the App.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>USE OF PERSONAL INFORMATION</li>
        </ol>
        <div><br></div>
        <ul>
            <li>All the Personal Information that you voluntarily provide us including sensitive Personal Information as per
                the SPI Rules, may be used by or processed by STAR Hospitals or its partners for various purposes including
                but not limited to the following:</li>
            <li>To provide effective services by sharing Personal Information with third-party contractors working on behalf
                of STAR Hospitals. Such third parties generally do not have the right to share information and the same is
                subject to their privacy policy(cies) and STAR Hospitals takes no responsibility for the same;</li>
            <li>To operate and improve our Services;</li>
            <li>To perform studies, research, and analysis for improving our information, analysis, services, and
                technologies; and ensuring that the content displayed is customized and relevant to your interests and
                preferences;</li>
            <li>To contact you via phone, SMS, WhatsApp, or email for appointments, technical issues, payment reminders,
                deals and offers, and other announcements;</li>
            <li>To send promotional mailings from us or any of our channel partners via SMS, WhatsApp, email, or other
                media/ channels of communication;</li>
            <li>To advertise products and services of STAR Hospitals and third parties;</li>
            <li>To transfer information about you if we are acquired by or merged with another company, or undertake a
                reorganization of our assets with any third party to whom we agree to sell our assets: such entities shall
                have the right to continue to use the personal and other information that you provide to us;</li>
            <li>To share with our business partners and third-party contractors the provision of specific services you have
                obtained so as to enable them to provide effective services to you;</li>
            <li>To administer or otherwise carry out our obligations in relation to any agreement you have with us;</li>
            <li>To build your profile on the Website/ App and publish any such information on the Website/App;</li>
            <li>To respond to subpoenas, court orders, or legal processes, or to establish or exercise our legal rights or
                defend against legal claims; and</li>
            <li>To investigate, prevent, or take action regarding illegal activities, suspected fraud, violations of our
                terms of use, breach of our agreement with you, or as otherwise required by any law, rule, regulation, law
                enforcement agency, governmental official, legal authority or similar requirements or when STAR Hospitals,
                in its discretion, deems it necessary in order to protect its rights or the rights of others, to prevent
                harm to persons or property, to fight fraud and credit risk;</li>
            <li>To aggregate Personal Information for research, statistical analysis, and business intelligence purposes,
                and to sell or otherwise transfer such research, statistical, or intelligence data in an aggregated or
                non-personally identifiable form to third parties and affiliates. In particular, we and our partners or
                affiliates reserve with us the right to use anonymized user demographics collected as per Clauses 5 and 6
                for analyzing software usage patterns to improve the design and for research purposes and to use such
                analysis in commercial product offerings with third parties (collectively, “Purposes”).</li>
            <li>You hereby consent to such use of such information by STAR Hospitals in providing any of the above-mentioned
                services and usage.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>SHARING AND TRANSFERRING OF PERSONAL INFORMATION</li>
        </ol>
        <div><br></div>
        <div>Once you have freely consented to share your Personal Information with us, you authorize us to exchange,
            transfer, share, or part with all or any of your Personal Information, across borders and from your country to
            any other countries across the world with the cloud service provider and our affiliates/agents/third party
            service providers/partners/banks and financial institutions or any other persons, for the Purposes and
            objectives/ uses specified under this Policy or as may be required by applicable law.</div>
        <div><br></div>
        <ol>
            <li>COOKIES</li>
        </ol>
        <div><br></div>
        <ul>
            <li>We may store temporary or permanent ‘cookies’ on your computer/ device for the technical administration of
                our Services. You can erase or choose to block these cookies from your computer/ device or configure your
                computer's/ device’s browser to alert you when we attempt to send you a cookie with an option to accept or
                refuse the cookies. If you have turned cookies off, you may be prevented from using certain features of the
                Website and/or App. STAR Hospitals may allow authorized third parties to place unique cookies on your
                browser that do not store the Personal Information of the User.</li>
            <li>We do not exercise control over the sites that may be displayed as search results or links from within the
                Website and App. These other sites may place their own cookies or other files on the Users’ computer/
                device, collect data or solicit personal information from the Users, for which STAR Hospitals is not
                responsible. The inclusion or exclusion does not imply any endorsement by STAR Hospitals of the said
                website, the website's provider, or the information on the website. If you decide to visit a third-party
                website linked to the Website, you do this entirely at your own risk. STAR Hospitals encourages you to read
                the privacy policies of all external sites.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>CONFIDENTIALITY AND SECURITY</li>
        </ol>
        <div><br></div>
        <ul>
            <li>The security of your Personal Information is important to us and is therefore maintained in electronic form
                and may be converted from time to time. We have adopted reasonable security practices and procedures to
                protect the information you share with us, including technical, operational, managerial, and physical
                security control measures.</li>
            <li>We also provide access to your Personal Information to our affiliates’ employees, agents, third-party
                service providers, partners, and agencies on a role-based and need-to-know basis in relation to the Purposes
                specified above in this Policy.</li>
            <li>No administrator at STAR Hospitals will have knowledge of your password as it is protected and encrypted to
                ensure that the Personal Information collected by us is secure. Therefore, you shall be liable to indemnify
                STAR Hospitals and its employees against any loss suffered by STAR Hospitals due to the unauthorized use of
                your account and password.</li>
            <li>Our websites include social media features/ links, such as Facebook, Instagram, YouTube, Twitter, etc. that
                may collect your IP address and may set cookie(s) to enable proper functioning. Your interactions with these
                features are governed by their privacy statement and STAR Hospitals cannot be held liable for any breach
                arising from the same.</li>
            <li>STAR Hospitals is not responsible for the confidentiality, security, or distribution of your Personal
                Information beyond the scope of our agreement with third parties. STAR Hospitals shall not be responsible
                for any breach of actions beyond its control, including government acts, computer crashes, breaches of
                security, etc.</li>
        </ul>
        <div>&nbsp;</div>
        <ol>
            <li>HOW WE PROTECT PERSONAL INFORMATION TRANSMISSION</li>
        </ol>
        <div><br></div>
        <div>STAR Hospitals may require the User to pay using online payment mechanisms for chargeable services. STAR
            Hospitals will only use the related information for the billing processes while the authentication process is to
            be completed by the User themselves. User information in this regard is transacted upon secure sites that are
            under encryption, ensuring the highest standard of care as per current technology. User is advised, however,
            that internet technology is not fool-proof and User should exercise discretion on using the same.</div>
        <div><br></div>
        <div>We maintain administrative, technical, and physical safeguards, consistent with legal requirements where the
            personal information was obtained, designed to protect against unlawful or unauthorized destruction, loss,
            alteration, use, or disclosure of, or access to, the personal information provided to us through the channels.
        </div>
        <div><br></div>
        <div>Do-not-track requests - There is no standard for how online service should respond to “Do not track” signals or
            other mechanisms that may allow you to opt out of the collection of information across networks of websites and
            online services. Therefore, we may not be able to guarantee the effectiveness of “Do not track” or similar
            signals/ instructions owing to reasons beyond our control (as aforesaid). As standards develop, we will revisit
            this issue and update this notice, as permitted.</div>
        <div>&nbsp;</div>
        <ol>
            <li>RECTIFICATION/CORRECTION OF PERSONAL INFORMATION</li>
        </ol>
        <div>You are responsible to maintain the accuracy of the information you share with us. If you need to update or
            correct your Personal Information, you may send updates and corrections to us at _____________, we will take all
            reasonable efforts to incorporate the changes within a reasonable period. If you provide any information that is
            untrue, inaccurate, out of date, or incomplete (or becomes untrue, inaccurate, out of date, or incomplete), or
            STAR Hospitals has reasonable grounds to suspect that the information provided by you is out of date or
            incomplete, untrue, inaccurate and/or is being provided or accessed for fraudulent/ unlawful/improper purposes
            and/or without good faith, STAR Hospitals may, at its sole discretion, discontinue the provision of the services
            to you and/or may further restrict your access to the Website and/or the App.</div>
        <div><br></div>
        <ol>
            <li>COMPLIANCE WITH LAWS</li>
        </ol>
        <div>You are not allowed to use the services of the Website if any of the terms of this Privacy Policy are not in
            accordance with the applicable laws of your country and STAR Hospitals takes no responsibility for losses that
            may arise from such wrongful usage.</div>
        <div><br></div>
        <ol>
            <li>TERM OF STORAGE OF PERSONAL INFORMATION</li>
        </ol>
        <div>If you wish to cancel your account, you may do so as per Clause 3. STAR Hospitals shall retain and store your
            Personal Information at least for the lesser of either a period of three years from the last date of use of the
            Services or such period as may be required and permitted by law. After such a time, your data may be anonymized
            and aggregated as long as necessary for us to provide our Services effectively solely for analytic purposes.
        </div>
        <div><br></div>
        <ol>
            <li>CHILDREN AND MINORS PRIVACY</li>
        </ol>
        <div>STAR Hospitals strongly encourages parents and guardians to supervise the online activities of their minor
            children and consider using parental control tools available from online services and software manufacturers to
            help provide a child-friendly online environment. These tools also can prevent minors from disclosing their
            name, address, and other personally identifiable information online without parental permission. Although the
            STAR Hospitals Services are not intended for use by minors, STAR Hospitals respects the privacy of minors who
            may inadvertently access our Services.</div>
        <div><br></div>
        <ol>
            <li>GRIEVANCE OFFICER</li>
        </ol>
        <div>We have appointed a grievance officer to address any concerns or grievances that you may have regarding the
            processing of your Personal Information or of any other nature. If you have any such grievances, please write to
            our grievance officer at _________ and the officer will reasonably attempt to resolve your issues regarding such
            usage in a timely manner. If you have further issues you may communicate such a grievance to –</div>
        <div><br></div>
        <div>The Grievance Officer,<br>ADDRESS</div>
        <div><br></div>
        <div>Such comments or grievances that are sent to us using email or secure messaging and that pertain to the
            provision of medical services by us will be shared with our employees and healthcare professionals who are most
            able to address the comment or question. We will archive such messages once we have made efforts to provide you
            with a complete and satisfactory response.</div>
        <div><br><br></div>
        <div><strong>Our Refund Policy</strong></div>
        <div><br></div>
        <div>Refund and Cancellation Policy for video Consultation payments</div>
        <div><br></div>
        <div>This policy is approved by the management of STAR Hospitals and is applicable to all units of STAR Hospitals
            and its affiliates. This policy is subject to revisions based on the decisions of the management.</div>
        <div><br></div>
        <div>Amount once paid through the payment gateway shall not be refunded other than in the following circumstances:
        </div>
        <div><br></div>
        <div>Multiple times debiting of Customer’s Bank Account due to technical error OR Customer's account being debited
            with excess amount in a single transaction due to technical error.</div>
        <div><br></div>
        <div>In case the customer has paid the full amount and due to the non-availability of the doctor the consultation
            cannot be provided. The customer can opt for using the amount as a deposit for any future consultations at STAR
            Hospitals.</div>
        <div><br></div>
        <div>If the services have not been availed and the customer does not intend to keep it as a deposit with STAR
            Hospitals. The customer can send an email to _______________ in the detailed format shared in Annexure 1 below.
        </div>
        <div><br></div>
        <div>The refund request will be processed manually after due verification. If the claim is found valid the eligible
            amount will be refunded by STAR Hospitals through electronic mode within the next Seven (7) working days from
            the date of receiving the email request in the format shared in Annexure 1 below.</div>
        <div><br></div>
        <div>It may take 3 to 21 working days for the payment to reflect in your bank account depending on your bank's
            policy.</div>
        <div><br></div>
        <div>The company assumes no responsibility and shall incur no liability if it is unable to effect any Payment
            Instruction(s) on the Payment Date owing to any one or more of the following circumstances:</div>
        <div><br></div>
        <div>If the payment instructions(s) issued by you is/are incomplete, inaccurate, and invalid.</div>
        <div><br></div>
        <div>If the receiving bank refuses or delays in honoring the Payment instruction(s).</div>
        <div><br></div>
        <div>Circumstances beyond the control of the Company (including, but not limited to, fire, flood, natural disasters,
            bank strikes, power failure, and systems failures like computer or telephone lines breakdown due to an
            unforeseeable cause or interference from an outside force)</div>
        <div><br></div>
        <div>In case the payment is not effected for any reason, you will be intimated about the failed payment by e-mail.
        </div>
        <div><br></div>
        <div>User agrees that Company, in its sole discretion, for any or no reason, and without penalty, may suspend or
            terminate his/her account (or any part thereof) or use of the services and remove and discard all or any part of
            his/her account, user profile, or his/her recipient profile, at any time. Company may also in its sole
            discretion and at any time discontinue providing access to the Services, or any part thereof, with or without
            notice. User agrees that any termination of his/her access to the Service or any account he/she may have or
            portion thereof may be effected without prior notice, and also agree that the company will not be liable to the
            user or any third party for any such termination. Any suspected, fraudulent, abusive, or illegal activity may be
            referred to appropriate law enforcement authorities. These remedies are in addition to any other remedies the
            company may have at law or in equity. Upon termination for any reason, the user agrees to stop using the
            services immediately.</div>
        <div><br></div>
        <div>Company may elect to resolve any dispute, controversy, or claim arising out of or relating to this Agreement or
            Service provided in connection with this Agreement by binding arbitration in accordance with the provisions of
            the Indian Arbitration &amp; Conciliation Act 1996, Any such dispute, controversy or claim shall be arbitrated
            on an individual basis and shall not be consolidated in any arbitration with any claim or controversy of any
            other party.</div>
        <div><br></div>
        <div>Governing Law &amp; Jurisdiction: Subject to the foregoing, it is hereby expressly agreed and declared that the
            court of competent jurisdiction in Hyderabad alone shall have jurisdiction with respect to matters pertaining
            hereto.</div>
        <div><br></div>
        <div><strong>Annexure 1</strong></div>
        <div>In case of a refund, the Customer should email to ____________ with the following details. Do send the refund
            details from the registered email ID or the ID used for raising the Video Consultation Request.</div>
        <div>Patient Name: Mentioned while booking the Video Consult request</div>
        <div>Ph No: Mentioned while booking the Video Consult request</div>
        <div>Email ID: Mentioned while booking the Video Consult request</div>
        <div>City: Mentioned while booking the Video Consult request</div>
        <div>Unit (Hospital Location) To which the Request was raised</div>
        <div>Payment Transaction ID: The date on which the request was raised</div>
        <div>Transaction Date: The date on which the request was raised</div>
        <div>Account No:</div>
        <div>Account Holder Name:</div>
        <div>IFSC Code:</div>
        
    </div>
    <x-gap/>
@endsection
