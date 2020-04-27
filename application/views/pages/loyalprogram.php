<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/loyal.jpg');   margin-top: -30px;    padding: 100px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;color:white;">Loyalty Program</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />
<!-- Content -->

<section style="overflow: visible;">

    <div class="section  nomargin nopadding" style="    background: white;">
        <div class="container-fluid">
            <div class="row align-items-stretch clearfix">

                <div class="col-lg-7 clearfix" style="background:url()">
                    <div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel custom-js owl-loaded">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="padding:0">
                                <div class="owl-item active">
                                    <div class="oc-item">
                                        <div class="food-content clearfix">
                                            <div class="heading-block nobottomborder nobottommargin" style="    text-align: center;">
                                                <h3 class="font-secondary nott">Welcome to the Woodlands Loyalty program </h3>
                                                <p style="    font-size: 15px;
                                                   text-transform: uppercase;" >Join our customer loyalty program and earn cash vouchers based on numbers of visits to Woodlands !</p>
                                                <div style="text-align: center"><img src="<?php echo base_url(); ?>assets/theme2/res/images/sections/membership.png" style="height: 300px;width: 300px;display: inline;"/></div>
                                                <hr/>
                                                <div class="termandconditon">
                                                    <h3>
                                                        Terms and Conditions
                                                    </h3>
                                                    <div style="    text-align: left;">
                                                        <p>-	Woodlands’s loyalty program membership is renewable on an annual basis.</p>
                                                        <p>-	Woodlands Restaurant has the right to adjust its terms, conditions and redemption offers from time to time, or as it sees fit.</p>
                                                        <p>-	Loyalty program members must register their attendance at the restaurant via their wallet App, on their mobile phone with our QR code reader.</p>
                                                        <p>-	Each time you visit and spend, upon your 10th visit, you will automatically receive  gift voucher - which would be equivalent to 10% of your total spending.</p>
                                                        <p>After gift vouchers are redeemed, loyalty program members can continue to spend and accumulate points to receive more gift vouchers <small>(for as long as the loyalty program is operating)</small>.</p>
                                                        <p>-	Gift vouchers are valid for 1 months after the issue date.</p>
                                                        <p>-	Once gift vouchers are redeemed, the loyalty program will restart with new loyalty points (for as long as the loyalty program is operating).</p>
                                                        <p>-	Gift vouchers may not be redeemed at Woodlands Restaurant on special dates, private functions or dates when the restaurant is fully booked.</p>
                                                        <p>-	Gift vouchers are not transferable to non loyalty program members.</p>
                                                        <p>-	Gift vouchers are not transferable for cash.</p>
                                                        <p>-	In case of any disputes, Woodlands Restaurant will have the final say.</p>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-5" style="background-color: #FFF; padding: 10px; margin: 39px 0px;">
                    <div class="p-5 reservation-form1 rounded bg-white" style="width: 500px;background: url(http://localhost/woodlandshk/assets/theme2/res/images/food-pattern.png) center center repeat rgb(245, 245, 245)!important;">
                        <h3 class="font-secondary h1 color">Join Loyalty program</h3>

                        <div class="form-widget mt-4 mt-lg-0" data-loader="button">
                            <div class="form-result"></div>
                            <form class="mb-0 row" id="template-contactform" name="template-contactform" action="#" method="post" novalidate="novalidate">
                                <div class="form-process"></div>
                                <div class="col-sm-6 mb-3">
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="First Name">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input type="" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Last Name">
                                </div>
                                <div class="clear"></div>
                                <div class="col-sm-6 mb-3">
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address">
                                </div>


                                <div class="col-sm-6 mb-3">
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Phone">
                                </div>
                                <div class="clear"></div>
                                <div class="col-sm-12 mb-3 ">
                                    <input type="text" id="template-contactform-subject" name="subject" value="" class="sm-form-control border-form-control tleft required" placeholder="Address">
                                </div>


                                <div class="col-6 mb-3">
                                    <select class="custom-select sm-form-control border-form-control">
                                        <option  selected="">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                                
                                 <div class="col-sm-6 mb-3">
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Birth Date (DD/MM)">
                                </div>

                                <div class="clear"></div>

                                <div class="col-6 mb-3">
                                    <select class="custom-select sm-form-control border-form-control">
                                        <option value="disabled" disabled="" selected="">Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and/or Barbuda">Antigua and/or Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British lndian Ocean Territory">British lndian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecudaor">Ecudaor</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France, Metropolitan">France, Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong" selected="">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfork Island">Norfork Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbarn and Jan Mayen Islands">Svalbarn and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States minor outlying islands">United States minor outlying islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Virigan Islands (British)">Virigan Islands (British)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder=" City">
                                </div>

                                <div class="clear"></div>
                                <div class="col-12 nobottommargin">
                                    <button class="button button-circle button-large text-white ml-0 mt-3" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Join Now</button>
                                </div>
                                <div class="clear"></div>
                                <div class="col-12 hidden">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                                </div>
                                <input type="hidden" name="prefix" value="template-contactform-">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="container section-contact topmargin-lg clearfix" style="background: white;">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 bottommargin-sm center">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-et-map"></i>
                    <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
                    <span class="font-primary">
                        UG Shop 16 & 17, Wing On Plaza,<br/>
                        62, Mody Road, Tsim Sha Tsui East,<br/>
                        Kowloon, Hong Kong
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 bottommargin-sm center">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clock"></i>
                    <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
                    <span class="font-primary">
                        <table style="    width: 100%;text-align: left;">
                            <tr>
                                <td colspan="2" style="text-align: center;"><strong>Monday To Sunday</strong></td>

                            </tr>
                            <tr>
                                <td>Lunch</td>
                                <td>: &nbsp; 11:30am – 03:30pm</td>
                            </tr>
                            <tr>
                                <td>Dinner</td>
                                <td>: &nbsp; 06:30pm – 10:30pm</td>
                            </tr>
                        </table>
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 bottommargin-sm center">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clipboard"></i>
                    <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
                    <span class="font-primary">
                        <table style="    width: 100%;">
                            <tr>
                                <td colspan="1" style="text-align: center;font-size: 20px;"><strong>+(852) 2369 3718</strong></td>

                            </tr>
                            <tr>

                                <td><i class="icon-et-phone"></i>&nbsp; +(852) 2366 1945</td>
                            </tr>
                            <tr>

                                <td><i class="icon-et-envelope"></i>&nbsp; reachus@vegconcepts.com</td>
                            </tr>
                        </table>
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 bottommargin-sm center">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-et-heart"></i>
                    <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Social Contact</h3>
                    <div style="display: flex; justify-content: center">
                        <a href="#" class="social-icon si-borderless si-facebook">
                            <i class="icon-line2-social-facebook"></i>
                            <i class="icon-line2-social-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-twitter">
                            <i class="icon-line2-social-twitter"></i>
                            <i class="icon-line2-social-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-youtube">
                            <i class="icon-line2-social-youtube"></i>
                            <i class="icon-line2-social-youtube"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-instagram">
                            <i class="icon-line2-envelope"></i>
                            <i class="icon-line2-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>

</section>




<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>