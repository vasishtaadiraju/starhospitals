<div class="int-enquiry-form">
        <div class="int-enquiry-form__image">
            <h2 class="section-heading">Enquiry Form</h2>
            <p>If you have any further queries about the medical services or facilities we provide for our international patients, fill out the inquiry form to contact our medical staff for guidance.</p>
    
                <img src="" data-src="{{Vite::asset('resources/images/int-patients/Rectangle 97.png')}}" alt="">
           
        </div>
        <div class="int-enquiry-form__content">
            <div class="int-enquiry-form__content__wrapper">
                <h3>Please fill in your details</h3>
            </div>
            <form action="/internationalPatientEnquiryForm" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="int-enquiry-form__content__fields">
                <div class="form-input">
                    <input class="form-input__field form-input__field--w-1" name="name"  placeholder="Full name"  type="text">
                </div>
                @error('name')
                <span class="error-message">{{$message}}</span>
                  
                @enderror
                <div class="form-input">
                    <select class="form-input__field int-enquiry-form__content__fields--country" name="country_code" placeholder="UK (+44)" type="text">
                        <optgroup label="Other countries">
                            <option class="country-code-selectbox-option" data-countrycode="AF" value="93-Afghanistan">
                              Afghanistan (+ 93)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AL" value="355-Albania">
                              Albania (+ 355)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DZ" value="213-Algeria">
                              Algeria (+ 213)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ASM" value="1684-American Samoa">
                              American Samoa (+ 1684)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AD" value="376-Andorra">
                              Andorra (+ 376)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AO" value="244-Angola">
                              Angola (+ 244)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AIA" value="1264-Anguilla">
                              Anguilla (+ 1264)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ATA" value="672-Antarctica">
                              Antarctica (+ 672)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AG" value="1268-Antigua and Barbuda">
                              Antigua and Barbuda (+ 1268)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AR" value="54-Argentina">
                              Argentina (+ 54)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AM" value="374-Armenia">
                              Armenia (+ 374)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ABW" value="297-Aruba">
                              Aruba (+ 297)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AU" value="61-Australia">
                              Australia (+ 61)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AT" value="43-Austria">
                              Austria (+ 43)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AZ" value="994-Azerbaijan">
                              Azerbaijan (+ 994)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BS" value="1242-Bahamas">
                              Bahamas (+ 1242)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BH" value="973-Bahrain">
                              Bahrain (+ 973)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BD" value="880-Bangladesh">
                              Bangladesh (+ 880)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BB" value="1246-Barbados">
                              Barbados (+ 1246)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BY" value="375-Belarus">
                              Belarus (+ 375)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BE" value="32-Belgium">
                              Belgium (+ 32)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BZ" value="501-Belize">
                              Belize (+ 501)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BJ" value="229-Benin">
                              Benin (+ 229)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BMU" value="1441-Bermuda">
                              Bermuda (+ 1441)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BT" value="975-Bhutan">
                              Bhutan (+ 975)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BO" value="591-Bolivia">
                              Bolivia (+ 591)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BA" value="387-Bosnia and Herzegovina">
                              Bosnia and Herzegovina (+ 387)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BW" value="267-Botswana">
                              Botswana (+ 267)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BR" value="55-Brazil">
                              Brazil (+ 55)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IO" value="246-British Indian Ocean Territory">
                              British Indian Ocean Territory (+ 246)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VG" value="1284-British Virgin Islands">
                              British Virgin Islands (+ 1284)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BN" value="673-Brunei">
                              Brunei (+ 673)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BG" value="359-Bulgaria">
                              Bulgaria (+ 359)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BF" value="226-Burkina Faso">
                              Burkina Faso (+ 226)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BI" value="257-Burundi">
                              Burundi (+ 257)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KH" value="855-Cambodia">
                              Cambodia (+ 855)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CM" value="237-Cameroon">
                              Cameroon (+ 237)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CA" value="1-Canada">
                              Canada (+ 1)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CV" value="238-Cape Verde">
                              Cape Verde (+ 238)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KY" value="1345-Cayman Islands">
                              Cayman Islands (+ 1345)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CF" value="236-Central African Republic">
                              Central African Republic (+ 236)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TD" value="235-Chad">
                              Chad (+ 235)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CL" value="56-Chile">
                              Chile (+ 56)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CN" value="86-China">
                              China (+ 86)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CX" value="61-Christmas Island">
                              Christmas Island (+ 61)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CC" value="61-Cocos Islands">
                              Cocos Islands (+ 61)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CO" value="57-Colombia">
                              Colombia (+ 57)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KM" value="269-Comoros">
                              Comoros (+ 269)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CK" value="682-Cook Islands">
                              Cook Islands (+ 682)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CR" value="506-Costa Rica">
                              Costa Rica (+ 506)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="HR" value="385-Croatia">
                              Croatia (+ 385)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CU" value="53-Cuba">
                              Cuba (+ 53)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CW" value="599-Curacao">
                              Curacao (+ 599)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CY" value="357-Cyprus">
                              Cyprus (+ 357)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CZ" value="420-Czech Republic">
                              Czech Republic (+ 420)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CD" value="243-Democratic Republic of the Congo">
                              Democratic Republic of the Congo (+ 243)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DK" value="45-Denmark">
                              Denmark (+ 45)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DJ" value="253-Djibouti">
                              Djibouti (+ 253)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DM" value="1767-Dominica">
                              Dominica (+ 1767)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DO" value="1809-Dominican Republic">
                              Dominican Republic (+ 1809)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TL" value="670-East Timor">
                              East Timor (+ 670)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="EC" value="593-Ecuador">
                              Ecuador (+ 593)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="EG" value="20-Egypt">
                              Egypt (+ 20)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SV" value="503-El Salvador">
                              El Salvador (+ 503)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GQ" value="240-Equatorial Guinea">
                              Equatorial Guinea (+ 240)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ER" value="291-Eritrea">
                              Eritrea (+ 291)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="EE" value="372-Estonia">
                              Estonia (+ 372)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ET" value="251-Ethiopia">
                              Ethiopia (+ 251)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FK" value="500-Falkland Islands">
                              Falkland Islands (+ 500)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FO" value="298-Faroe Islands">
                              Faroe Islands (+ 298)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FJ" value="679-Fiji">
                              Fiji (+ 679)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FI" value="358-Finland">
                              Finland (+ 358)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FR" value="33-France">
                              France (+ 33)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PF" value="689-French Polynesia">
                              French Polynesia (+ 689)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GA" value="241-Gabon">
                              Gabon (+ 241)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GM" value="220-Gambia">
                              Gambia (+ 220)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GE" value="995-Georgia">
                              Georgia (+ 995)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="DE" value="49-Germany">
                              Germany (+ 49)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GH" value="233-Ghana">
                              Ghana (+ 233)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GI" value="350-Gibraltar">
                              Gibraltar (+ 350)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GR" value="30-Greece">
                              Greece (+ 30)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GL" value="299-Greenland">
                              Greenland (+ 299)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GD" value="1473-Grenada">
                              Grenada (+ 1473)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GU" value="1671-Guam">
                              Guam (+ 1671)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GT" value="502-Guatemala">
                              Guatemala (+ 502)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GG" value="441481-Guernsey">
                              Guernsey (+ 441481)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GN" value="224-Guinea">
                              Guinea (+ 224)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GW" value="245-GuineaBissau">
                              GuineaBissau (+ 245)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GY" value="592-Guyana">
                              Guyana (+ 592)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="HT" value="509-Haiti">
                              Haiti (+ 509)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="HN" value="504-Honduras">
                              Honduras (+ 504)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="HK" value="852-Hong Kong">
                              Hong Kong (+ 852)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="HU" value="36-Hungary">
                              Hungary (+ 36)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IS" value="354-Iceland">
                              Iceland (+ 354)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IN" value="91-India">
                              India (+ 91)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ID" value="62-Indonesia">
                              Indonesia (+ 62)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IR" value="98-Iran">
                              Iran (+ 98)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IQ" value="964-Iraq">
                              Iraq (+ 964)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IE" value="353-Ireland">
                              Ireland (+ 353)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IM" value="441624-Isle of Man">
                              Isle of Man (+ 441624)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IL" value="972-Israel">
                              Israel (+ 972)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="IT" value="39-Italy">
                              Italy (+ 39)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CI" value="225-Ivory Coast">
                              Ivory Coast (+ 225)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="JM" value="1876-Jamaica">
                              Jamaica (+ 1876)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="JP" value="81-Japan">
                              Japan (+ 81)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="JE" value="441534-Jersey">
                              Jersey (+ 441534)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="JO" value="962-Jordan">
                              Jordan (+ 962)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KZ" value="7-Kazakhstan">
                              Kazakhstan (+ 7)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KE" value="254-Kenya">
                              Kenya (+ 254)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KI" value="686-Kiribati">
                              Kiribati (+ 686)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="XK" value="383-Kosovo">
                              Kosovo (+ 383)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KW" value="965-Kuwait">
                              Kuwait (+ 965)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KG" value="996-Kyrgyzstan">
                              Kyrgyzstan (+ 996)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LA" value="856-Laos">
                              Laos (+ 856)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LV" value="371-Latvia">
                              Latvia (+ 371)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LB" value="961-Lebanon">
                              Lebanon (+ 961)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LS" value="266-Lesotho">
                              Lesotho (+ 266)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LR" value="231-Liberia">
                              Liberia (+ 231)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LY" value="218-Libya">
                              Libya (+ 218)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LI" value="423-Liechtenstein">
                              Liechtenstein (+ 423)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LT" value="370-Lithuania">
                              Lithuania (+ 370)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LU" value="352-Luxembourg">
                              Luxembourg (+ 352)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MO" value="853-Macau">
                              Macau (+ 853)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MK" value="389-Macedonia">
                              Macedonia (+ 389)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MG" value="261-Madagascar">
                              Madagascar (+ 261)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MW" value="265-Malawi">
                              Malawi (+ 265)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MY" value="60-Malaysia">
                              Malaysia (+ 60)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MV" value="960-Maldives">
                              Maldives (+ 960)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ML" value="223-Mali">
                              Mali (+ 223)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MT" value="356-Malta">
                              Malta (+ 356)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MH" value="692-Marshall Islands">
                              Marshall Islands (+ 692)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MR" value="222-Mauritania">
                              Mauritania (+ 222)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MU" value="230-Mauritius">
                              Mauritius (+ 230)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="YT" value="262-Mayotte">
                              Mayotte (+ 262)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MX" value="52-Mexico">
                              Mexico (+ 52)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="FM" value="691-Micronesia">
                              Micronesia (+ 691)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MD" value="373-Moldova">
                              Moldova (+ 373)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MC" value="377-Monaco">
                              Monaco (+ 377)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MN" value="976-Mongolia">
                              Mongolia (+ 976)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ME" value="382-Montenegro">
                              Montenegro (+ 382)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MS" value="1664-Montserrat">
                              Montserrat (+ 1664)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MA" value="212-Morocco">
                              Morocco (+ 212)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MZ" value="258-Mozambique">
                              Mozambique (+ 258)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MM" value="95-Myanmar">
                              Myanmar (+ 95)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NA" value="264-Namibia">
                              Namibia (+ 264)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NR" value="674-Nauru">
                              Nauru (+ 674)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NP" value="977-Nepal">
                              Nepal (+ 977)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NL" value="31-Netherlands">
                              Netherlands (+ 31)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AN" value="599-Netherlands Antilles">
                              Netherlands Antilles (+ 599)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NC" value="687-New Caledonia">
                              New Caledonia (+ 687)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NZ" value="64-New Zealand">
                              New Zealand (+ 64)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NI" value="505-Nicaragua">
                              Nicaragua (+ 505)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NE" value="227-Niger">
                              Niger (+ 227)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NG" value="234-Nigeria">
                              Nigeria (+ 234)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NU" value="683-Niue">
                              Niue (+ 683)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KP" value="850-North Korea">
                              North Korea (+ 850)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MP" value="1670-Northern Mariana Islands">
                              Northern Mariana Islands (+ 1670)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="NO" value="47-Norway">
                              Norway (+ 47)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="OM" value="968-Oman">
                              Oman (+ 968)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PK" value="92-Pakistan">
                              Pakistan (+ 92)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PW" value="680-Palau">
                              Palau (+ 680)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PS" value="970-Palestine">
                              Palestine (+ 970)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PA" value="507-Panama">
                              Panama (+ 507)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PG" value="675-Papua New Guinea">
                              Papua New Guinea (+ 675)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PY" value="595-Paraguay">
                              Paraguay (+ 595)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PE" value="51-Peru">
                              Peru (+ 51)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PH" value="63-Philippines">
                              Philippines (+ 63)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PN" value="64-Pitcairn">
                              Pitcairn (+ 64)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PL" value="48-Poland">
                              Poland (+ 48)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PT" value="351-Portugal">
                              Portugal (+ 351)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PR" value="1787-Puerto Rico">
                              Puerto Rico (+ 1787)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="QA" value="974-Qatar">
                              Qatar (+ 974)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CG" value="242-Republic of the Congo">
                              Republic of the Congo (+ 242)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="RE" value="262-Reunion">
                              Reunion (+ 262)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="RO" value="40-Romania">
                              Romania (+ 40)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="RU" value="7-Russia">
                              Russia (+ 7)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="RW" value="250-Rwanda">
                              Rwanda (+ 250)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="BL" value="590-Saint Barthelemy">
                              Saint Barthelemy (+ 590)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SH" value="290-Saint Helena">
                              Saint Helena (+ 290)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KN" value="1869-Saint Kitts and Nevis">
                              Saint Kitts and Nevis (+ 1869)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LC" value="1758-Saint Lucia">
                              Saint Lucia (+ 1758)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="MF" value="590-Saint Martin">
                              Saint Martin (+ 590)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="PM" value="508-Saint Pierre and Miquelon">
                              Saint Pierre and Miquelon (+ 508)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VC" value="1784-Saint Vincent and the Grenadines">
                              Saint Vincent and the Grenadines (+ 1784)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="WS" value="685-Samoa">
                              Samoa (+ 685)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SM" value="378-San Marino">
                              San Marino (+ 378)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ST" value="239-Sao Tome and Principe">
                              Sao Tome and Principe (+ 239)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SA" value="966-Saudi Arabia">
                              Saudi Arabia (+ 966)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SN" value="221-Senegal">
                              Senegal (+ 221)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="RS" value="381-Serbia">
                              Serbia (+ 381)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SC" value="248-Seychelles">
                              Seychelles (+ 248)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SL" value="232-Sierra Leone">
                              Sierra Leone (+ 232)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SG" value="65-Singapore">
                              Singapore (+ 65)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SX" value="1721-Sint Maarten">
                              Sint Maarten (+ 1721)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SK" value="421-Slovakia">
                              Slovakia (+ 421)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SI" value="386-Slovenia">
                              Slovenia (+ 386)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SB" value="677-Solomon Islands">
                              Solomon Islands (+ 677)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SO" value="252-Somalia">
                              Somalia (+ 252)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ZA" value="27-South Africa">
                              South Africa (+ 27)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="KR" value="82-South Korea">
                              South Korea (+ 82)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SS" value="211-South Sudan">
                              South Sudan (+ 211)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ES" value="34-Spain">
                              Spain (+ 34)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="LK" value="94-Sri Lanka">
                              Sri Lanka (+ 94)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SD" value="249-Sudan">
                              Sudan (+ 249)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SR" value="597-Suriname">
                              Suriname (+ 597)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SJ" value="47-Svalbard and Jan Mayen">
                              Svalbard and Jan Mayen (+ 47)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SZ" value="268-Swaziland">
                              Swaziland (+ 268)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SE" value="46-Sweden">
                              Sweden (+ 46)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="CH" value="41-Switzerland">
                              Switzerland (+ 41)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="SY" value="963-Syria">
                              Syria (+ 963)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TW" value="886-Taiwan">
                              Taiwan (+ 886)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TJ" value="992-Tajikistan">
                              Tajikistan (+ 992)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TZ" value="255-Tanzania">
                              Tanzania (+ 255)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TH" value="66-Thailand">
                              Thailand (+ 66)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TG" value="228-Togo">
                              Togo (+ 228)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TK" value="690-Tokelau">
                              Tokelau (+ 690)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TO" value="676-Tonga">
                              Tonga (+ 676)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TT" value="1868-Trinidad and Tobago">
                              Trinidad and Tobago (+ 1868)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TN" value="216-Tunisia">
                              Tunisia (+ 216)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TR" value="90-Turkey">
                              Turkey (+ 90)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TM" value="993-Turkmenistan">
                              Turkmenistan (+ 993)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TC" value="1649-Turks and Caicos Islands">
                              Turks and Caicos Islands (+ 1649)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="TV" value="688-Tuvalu">
                              Tuvalu (+ 688)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VI" value="1340-U.S. Virgin Islands">
                              U.S. Virgin Islands (+ 1340)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="UG" value="256-Uganda">
                              Uganda (+ 256)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="UA" value="380-Ukraine">
                              Ukraine (+ 380)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="AE" value="971-United Arab Emirates">
                              United Arab Emirates (+ 971)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="GB" value="44-United Kingdom">
                              United Kingdom (+ 44)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="US" value="1-United States">
                              United States (+ 1)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="UY" value="598-Uruguay">
                              Uruguay (+ 598)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="UZ" value="998-Uzbekistan">
                              Uzbekistan (+ 998)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VU" value="678-Vanuatu">
                              Vanuatu (+ 678)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VA" value="379-Vatican">
                              Vatican (+ 379)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VE" value="58-Venezuela">
                              Venezuela (+ 58)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="VN" value="84-Vietnam">
                              Vietnam (+ 84)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="WF" value="681-Wallis and Futuna">
                              Wallis and Futuna (+ 681)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="EH" value="212-Western Sahara">
                              Western Sahara (+ 212)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="YE" value="967-Yemen">
                              Yemen (+ 967)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ZM" value="260-Zambia">
                              Zambia (+ 260)
                            </option>
                            <option class="country-code-selectbox-option" data-countrycode="ZW" value="263-Zimbabwe">
                              Zimbabwe (+ 263)
                            </option>
                          </optgroup>
                    </select>
                    <input class="form-input__field int-enquiry-form__content__fields--contact" name="contact" placeholder="Phone number" type="text">
                </div>
                @error('contact')
                <span class="error-message">{{$message}}</span>
                  
                @enderror

                <div class="form-input">
                  <input class="form-input__field form-input__field--w-1" name="email"  placeholder="Email"  type="text">
              </div>
              @error('email')
                <span class="error-message">{{$message}}</span>
                  
                @enderror
                <div class="form-input">
                    <select class="form-input__field form-input__field--w-1" name="department" type="text">
                      <option value="">Speciality</option>
                      @foreach ($coes as $item)
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
                </div>
                @error('department')
                <span class="error-message">{{$message}}</span>
                @enderror

                <div class="form-input">
                    <input class="form-input__field form-input__field--w-1 file-upload-field" placeholder="Upload report" type="text" readonly>
                    <input type="file" name="report" id="" hidden>
                </div>
                @error('report')
                <span class="error-message">{{$message}}</span>
                  
                @enderror


                
            </div>
            
            <button class="int-enquiry-form__content__submit">Submit</button>
          </form>
            <p>You will receive a confirmation message on your email</p>
        </div>
</div>