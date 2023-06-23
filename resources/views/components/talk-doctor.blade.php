<div class="talk-doctor" >
    <div class="talk-doctor__image-wrapper">
        <img src="" data-src="{{Vite::asset('resources/images/talk-doctor.png')}}" alt="">
    </div>
    <div class="talk-doctor__form-wrapper">
        <div class="talk-doctor__form-wrapper__content">
            <h2 class="section-heading" >Talk to a {{$content->name}} Doctor</h2>
            <form action="/talkToDoctor" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Name"
                                type="text"class="@error('name')
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
                    <div class="form-fields-wrapper form-fields-wrapper--col-3">
                        <div class="form-fields-wrapper ">
                            <select name="country_code" type="text">
                                <option value="IN" data-numeric-code="91" selected>India (+91)</option>
                                <option value="GB" data-numeric-code="44" >UK (+44)</option>
                                <option value="US" data-numeric-code="1">USA (+1)</option>
                                <optgroup label="Other countries">
                                    <option value="DZ" data-numeric-code="213">Algeria (+213)</option>
                                    <option value="AD" data-numeric-code="376">Andorra (+376)</option>
                                    <option value="AO" data-numeric-code="244">Angola (+244)</option>
                                    <option value="AI" data-numeric-code="1264">Anguilla (+1264)</option>
                                    <option value="AG" data-numeric-code="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option value="AR" data-numeric-code="54">Argentina (+54)</option>
                                    <option value="AM" data-numeric-code="374">Armenia (+374)</option>
                                    <option value="AW" data-numeric-code="297">Aruba (+297)</option>
                                    <option value="AU" data-numeric-code="61">Australia (+61)</option>
                                    <option value="AT" data-numeric-code="43">Austria (+43)</option>
                                    <option value="AZ" data-numeric-code="994">Azerbaijan (+994)</option>
                                    <option value="BS" data-numeric-code="1242">Bahamas (+1242)</option>
                                    <option value="BH" data-numeric-code="973">Bahrain (+973)</option>
                                    <option value="BD" data-numeric-code="880">Bangladesh (+880)</option>
                                    <option value="BB" data-numeric-code="1246">Barbados (+1246)</option>
                                    <option value="BY" data-numeric-code="375">Belarus (+375)</option>
                                    <option value="BE" data-numeric-code="32">Belgium (+32)</option>
                                    <option value="BZ" data-numeric-code="501">Belize (+501)</option>
                                    <option value="BJ" data-numeric-code="229">Benin (+229)</option>
                                    <option value="BM" data-numeric-code="1441">Bermuda (+1441)</option>
                                    <option value="BT" data-numeric-code="975">Bhutan (+975)</option>
                                    <option value="BO" data-numeric-code="591">Bolivia (+591)</option>
                                    <option value="BA" data-numeric-code="387">Bosnia Herzegovina (+387)</option>
                                    <option value="BW" data-numeric-code="267">Botswana (+267)</option>
                                    <option value="BR" data-numeric-code="55">Brazil (+55)</option>
                                    <option value="BN" data-numeric-code="673">Brunei (+673)</option>
                                    <option value="BG" data-numeric-code="359">Bulgaria (+359)</option>
                                    <option value="BF" data-numeric-code="226">Burkina Faso (+226)</option>
                                    <option value="BI" data-numeric-code="257">Burundi (+257)</option>
                                    <option value="KH" data-numeric-code="855">Cambodia (+855)</option>
                                    <option value="CM" data-numeric-code="237">Cameroon (+237)</option>
                                    <option value="CA" data-numeric-code="1">Canada (+1)</option>
                                    <option value="CV" data-numeric-code="238">Cape Verde Islands (+238)</option>
                                    <option value="KY" data-numeric-code="1345">Cayman Islands (+1345)</option>
                                    <option value="CF" data-numeric-code="236">Central African Republic (+236)
                                    </option>
                                    <option value="CL" data-numeric-code="56">Chile (+56)</option>
                                    <option value="CN" data-numeric-code="86">China (+86)</option>
                                    <option value="CO" data-numeric-code="57">Colombia (+57)</option>
                                    <option value="KM" data-numeric-code="269">Comoros (+269)</option>
                                    <option value="CG" data-numeric-code="242">Congo (+242)</option>
                                    <option value="CK" data-numeric-code="682">Cook Islands (+682)</option>
                                    <option value="CR" data-numeric-code="506">Costa Rica (+506)</option>
                                    <option value="HR" data-numeric-code="385">Croatia (+385)</option>
                                    <option value="CU" data-numeric-code="53">Cuba (+53)</option>
                                    <option value="CY" data-numeric-code="90392">Cyprus North (+90392)</option>
                                    <option value="CY" data-numeric-code="357">Cyprus South (+357)</option>
                                    <option value="CZ" data-numeric-code="42">Czech Republic (+42)</option>
                                    <option value="DK" data-numeric-code="45">Denmark (+45)</option>
                                    <option value="DJ" data-numeric-code="253">Djibouti (+253)</option>
                                    <option value="DM" data-numeric-code="1809">Dominica (+1809)</option>
                                    <option value="DO" data-numeric-code="1809">Dominican Republic (+1809)</option>
                                    <option value="EC" data-numeric-code="593">Ecuador (+593)</option>
                                    <option value="EG" data-numeric-code="20">Egypt (+20)</option>
                                    <option value="SV" data-numeric-code="503">El Salvador (+503)</option>
                                    <option value="GQ" data-numeric-code="240">Equatorial Guinea (+240)</option>
                                    <option value="ER" data-numeric-code="291">Eritrea (+291)</option>
                                    <option value="EE" data-numeric-code="372">Estonia (+372)</option>
                                    <option value="ET" data-numeric-code="251">Ethiopia (+251)</option>
                                    <option value="FK" data-numeric-code="500">Falkland Islands (+500)</option>
                                    <option value="FO" data-numeric-code="298">Faroe Islands (+298)</option>
                                    <option value="FJ" data-numeric-code="679">Fiji (+679)</option>
                                    <option value="FI" data-numeric-code="358">Finland (+358)</option>
                                    <option value="FR" data-numeric-code="33">France (+33)</option>
                                    <option value="GF" data-numeric-code="594">French Guiana (+594)</option>
                                    <option value="PF" data-numeric-code="689">French Polynesia (+689)</option>
                                    <option value="GA" data-numeric-code="241">Gabon (+241)</option>
                                    <option value="GM" data-numeric-code="220">Gambia (+220)</option>
                                    <option value="GE" data-numeric-code="7880">Georgia (+7880)</option>
                                    <option value="DE" data-numeric-code="49">Germany (+49)</option>
                                    <option value="GH" data-numeric-code="233">Ghana (+233)</option>
                                    <option value="GI" data-numeric-code="350">Gibraltar (+350)</option>
                                    <option value="GR" data-numeric-code="30">Greece (+30)</option>
                                    <option value="GL" data-numeric-code="299">Greenland (+299)</option>
                                    <option value="GD" data-numeric-code="1473">Grenada (+1473)</option>
                                    <option value="GP" data-numeric-code="590">Guadeloupe (+590)</option>
                                    <option value="GU" data-numeric-code="671">Guam (+671)</option>
                                    <option value="GT" data-numeric-code="502">Guatemala (+502)</option>
                                    <option value="GN" data-numeric-code="224">Guinea (+224)</option>
                                    <option value="GW" data-numeric-code="245">Guinea - Bissau (+245)</option>
                                    <option value="GY" data-numeric-code="592">Guyana (+592)</option>
                                    <option value="HT" data-numeric-code="509">Haiti (+509)</option>
                                    <option value="HN" data-numeric-code="504">Honduras (+504)</option>
                                    <option value="HK" data-numeric-code="852">Hong Kong (+852)</option>
                                    <option value="HU" data-numeric-code="36">Hungary (+36)</option>
                                    <option value="IS" data-numeric-code="354">Iceland (+354)</option>
                                    <option value="IN" data-numeric-code="91">India (+91)</option>
                                    <option value="ID" data-numeric-code="62">Indonesia (+62)</option>
                                    <option value="IR" data-numeric-code="98">Iran (+98)</option>
                                    <option value="IQ" data-numeric-code="964">Iraq (+964)</option>
                                    <option value="IE" data-numeric-code="353">Ireland (+353)</option>
                                    <option value="IL" data-numeric-code="972">Israel (+972)</option>
                                    <option value="IT" data-numeric-code="39">Italy (+39)</option>
                                    <option value="JM" data-numeric-code="1876">Jamaica (+1876)</option>
                                    <option value="JP" data-numeric-code="81">Japan (+81)</option>
                                    <option value="JO" data-numeric-code="962">Jordan (+962)</option>
                                    <option value="KZ" data-numeric-code="7">Kazakhstan (+7)</option>
                                    <option value="KE" data-numeric-code="254">Kenya (+254)</option>
                                    <option value="KI" data-numeric-code="686">Kiribati (+686)</option>
                                    <option value="KP" data-numeric-code="850">Korea North (+850)</option>
                                    <option value="KR" data-numeric-code="82">Korea South (+82)</option>
                                    <option value="KW" data-numeric-code="965">Kuwait (+965)</option>
                                    <option value="KG" data-numeric-code="996">Kyrgyzstan (+996)</option>
                                    <option value="LA" data-numeric-code="856">Laos (+856)</option>
                                    <option value="LV" data-numeric-code="371">Latvia (+371)</option>
                                    <option value="LB" data-numeric-code="961">Lebanon (+961)</option>
                                    <option value="LS" data-numeric-code="266">Lesotho (+266)</option>
                                    <option value="LR" data-numeric-code="231">Liberia (+231)</option>
                                    <option value="LY" data-numeric-code="218">Libya (+218)</option>
                                    <option value="LI" data-numeric-code="417">Liechtenstein (+417)</option>
                                    <option value="LT" data-numeric-code="370">Lithuania (+370)</option>
                                    <option value="LU" data-numeric-code="352">Luxembourg (+352)</option>
                                    <option value="MO" data-numeric-code="853">Macao (+853)</option>
                                    <option value="MK" data-numeric-code="389">Macedonia (+389)</option>
                                    <option value="MG" data-numeric-code="261">Madagascar (+261)</option>
                                    <option value="MW" data-numeric-code="265">Malawi (+265)</option>
                                    <option value="MY" data-numeric-code="60">Malaysia (+60)</option>
                                    <option value="MV" data-numeric-code="960">Maldives (+960)</option>
                                    <option value="ML" data-numeric-code="223">Mali (+223)</option>
                                    <option value="MT" data-numeric-code="356">Malta (+356)</option>
                                    <option value="MH" data-numeric-code="692">Marshall Islands (+692)</option>
                                    <option value="MQ" data-numeric-code="596">Martinique (+596)</option>
                                    <option value="MR" data-numeric-code="222">Mauritania (+222)</option>
                                    <option value="YT" data-numeric-code="269">Mayotte (+269)</option>
                                    <option value="MX" data-numeric-code="52">Mexico (+52)</option>
                                    <option value="FM" data-numeric-code="691">Micronesia (+691)</option>
                                    <option value="MD" data-numeric-code="373">Moldova (+373)</option>
                                    <option value="MC" data-numeric-code="377">Monaco (+377)</option>
                                    <option value="MN" data-numeric-code="976">Mongolia (+976)</option>
                                    <option value="MS" data-numeric-code="1664">Montserrat (+1664)</option>
                                    <option value="MA" data-numeric-code="212">Morocco (+212)</option>
                                    <option value="MZ" data-numeric-code="258">Mozambique (+258)</option>
                                    <option value="MN" data-numeric-code="95">Myanmar (+95)</option>
                                    <option value="NA" data-numeric-code="264">Namibia (+264)</option>
                                    <option value="NR" data-numeric-code="674">Nauru (+674)</option>
                                    <option value="NP" data-numeric-code="977">Nepal (+977)</option>
                                    <option value="NL" data-numeric-code="31">Netherlands (+31)</option>
                                    <option value="NC" data-numeric-code="687">New Caledonia (+687)</option>
                                    <option value="NZ" data-numeric-code="64">New Zealand (+64)</option>
                                    <option value="NI" data-numeric-code="505">Nicaragua (+505)</option>
                                    <option value="NE" data-numeric-code="227">Niger (+227)</option>
                                    <option value="NG" data-numeric-code="234">Nigeria (+234)</option>
                                    <option value="NU" data-numeric-code="683">Niue (+683)</option>
                                    <option value="NF" data-numeric-code="672">Norfolk Islands (+672)</option>
                                    <option value="NP" data-numeric-code="670">Northern Marianas (+670)</option>
                                    <option value="NO" data-numeric-code="47">Norway (+47)</option>
                                    <option value="OM" data-numeric-code="968">Oman (+968)</option>
                                    <option value="PW" data-numeric-code="680">Palau (+680)</option>
                                    <option value="PA" data-numeric-code="507">Panama (+507)</option>
                                    <option value="PG" data-numeric-code="675">Papua New Guinea (+675)</option>
                                    <option value="PY" data-numeric-code="595">Paraguay (+595)</option>
                                    <option value="PE" data-numeric-code="51">Peru (+51)</option>
                                    <option value="PH" data-numeric-code="63">Philippines (+63)</option>
                                    <option value="PL" data-numeric-code="48">Poland (+48)</option>
                                    <option value="PT" data-numeric-code="351">Portugal (+351)</option>
                                    <option value="PR" data-numeric-code="1787">Puerto Rico (+1787)</option>
                                    <option value="QA" data-numeric-code="974">Qatar (+974)</option>
                                    <option value="RE" data-numeric-code="262">Reunion (+262)</option>
                                    <option value="RO" data-numeric-code="40">Romania (+40)</option>
                                    <option value="RU" data-numeric-code="7">Russia (+7)</option>
                                    <option value="RW" data-numeric-code="250">Rwanda (+250)</option>
                                    <option value="SM" data-numeric-code="378">San Marino (+378)</option>
                                    <option value="ST" data-numeric-code="239">Sao Tome &amp; Principe (+239)
                                    </option>
                                    <option value="SA" data-numeric-code="966">Saudi Arabia (+966)</option>
                                    <option value="SN" data-numeric-code="221">Senegal (+221)</option>
                                    <option value="CS" data-numeric-code="381">Serbia (+381)</option>
                                    <option value="SC" data-numeric-code="248">Seychelles (+248)</option>
                                    <option value="SL" data-numeric-code="232">Sierra Leone (+232)</option>
                                    <option value="SG" data-numeric-code="65">Singapore (+65)</option>
                                    <option value="SK" data-numeric-code="421">Slovak Republic (+421)</option>
                                    <option value="SI" data-numeric-code="386">Slovenia (+386)</option>
                                    <option value="SB" data-numeric-code="677">Solomon Islands (+677)</option>
                                    <option value="SO" data-numeric-code="252">Somalia (+252)</option>
                                    <option value="ZA" data-numeric-code="27">South Africa (+27)</option>
                                    <option value="ES" data-numeric-code="34">Spain (+34)</option>
                                    <option value="LK" data-numeric-code="94">Sri Lanka (+94)</option>
                                    <option value="SH" data-numeric-code="290">St. Helena (+290)</option>
                                    <option value="KN" data-numeric-code="1869">St. Kitts (+1869)</option>
                                    <option value="SC" data-numeric-code="1758">St. Lucia (+1758)</option>
                                    <option value="SD" data-numeric-code="249">Sudan (+249)</option>
                                    <option value="SR" data-numeric-code="597">Suriname (+597)</option>
                                    <option value="SZ" data-numeric-code="268">Swaziland (+268)</option>
                                    <option value="SE" data-numeric-code="46">Sweden (+46)</option>
                                    <option value="CH" data-numeric-code="41">Switzerland (+41)</option>
                                    <option value="SI" data-numeric-code="963">Syria (+963)</option>
                                    <option value="TW" data-numeric-code="886">Taiwan (+886)</option>
                                    <option value="TJ" data-numeric-code="7">Tajikstan (+7)</option>
                                    <option value="TH" data-numeric-code="66">Thailand (+66)</option>
                                    <option value="TG" data-numeric-code="228">Togo (+228)</option>
                                    <option value="TO" data-numeric-code="676">Tonga (+676)</option>
                                    <option value="TT" data-numeric-code="1868">Trinidad &amp; Tobago (+1868)
                                    </option>
                                    <option value="TN" data-numeric-code="216">Tunisia (+216)</option>
                                    <option value="TR" data-numeric-code="90">Turkey (+90)</option>
                                    <option value="TM" data-numeric-code="7">Turkmenistan (+7)</option>
                                    <option value="TM" data-numeric-code="993">Turkmenistan (+993)</option>
                                    <option value="TC" data-numeric-code="1649">Turks &amp; Caicos Islands (+1649)
                                    </option>
                                    <option value="TV" data-numeric-code="688">Tuvalu (+688)</option>
                                    <option value="UG" data-numeric-code="256">Uganda (+256)</option>
                                    <!-- <option value="GB" data-numeric-code="44">UK (+44)</option> -->
                                    <option value="UA" data-numeric-code="380">Ukraine (+380)</option>
                                    <option value="AE" data-numeric-code="971">United Arab Emirates (+971)</option>
                                    <option value="UY" data-numeric-code="598">Uruguay (+598)</option>
                                    <!-- <option value="US" data-numeric-code="1">USA (+1)</option> -->
                                    <option value="UZ" data-numeric-code="7">Uzbekistan (+7)</option>
                                    <option value="VU" data-numeric-code="678">Vanuatu (+678)</option>
                                    <option value="VA" data-numeric-code="379">Vatican City (+379)</option>
                                    <option value="VE" data-numeric-code="58">Venezuela (+58)</option>
                                    <option value="VN" data-numeric-code="84">Vietnam (+84)</option>
                                    <option value="VG" data-numeric-code="84">Virgin Islands - British (+1284)
                                    </option>
                                    <option value="VI" data-numeric-code="84">Virgin Islands - US (+1340)</option>
                                    <option value="WF" data-numeric-code="681">Wallis &amp; Futuna (+681)</option>
                                    <option value="YE" data-numeric-code="969">Yemen (North)(+969)</option>
                                    <option value="YE" data-numeric-code="967">Yemen (South)(+967)</option>
                                    <option value="ZM" data-numeric-code="260">Zambia (+260)</option>
                                    <option value="ZW" data-numeric-code="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-0">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number" type="text" name="contact">
                            @error('contact')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
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
                    
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1" id="consult-our-expert">
                        <div class="form-fields-wrapper ">
                            <input
                                type="text"class="@error('speciality')
                            error-field
                        @enderror"
                                name="speciality" value="{{$content->name}}" disabled>
                            @error('speciality')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                </div>

                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <textarea placeholder="Type your Message"
                                type="text"class="@error('message')
                            error-field
                        @enderror"
                                name="message"> </textarea>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <button class="form-submit-button">Submit</button>
            </form>
        </div>
        
       
    </div>
</div>