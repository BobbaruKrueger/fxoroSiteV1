<?php
/**
 * @package CSSecoThemes
 * includes/front/templates/register_form.php
 *
 * Register Form Template
 */
?>
<?php 
// start the session
// session_start();
// generate the token
$_token= base64_encode( openssl_random_pseudo_bytes(16) ); 

// add the token to the session
if (!isset($_SESSION['_token'])) {
	$_SESSION['_token'] = $_token;
	# code...
}


?>

<form id="register_form" class="create_account">
    <div class="row">
        <div class="col-12">
            <h3>Create Your Account</h3>
        </div>
    </div>
	<div class="row"><input type="hidden" name="_token" value="<?php echo $_SESSION['_token'];?>" ></div>
	<div class="row"> 
		<div class="col-12 col-md-6 pr-md-1">
			<div class="form-group">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" class="form-control"  placeholder="First Name"/>
				
				<i class="fas fa-check isValid"></i>
				<i class="fas fa-times isError"></i>
			</div>
		</div>
		<div class="col-12 col-md-6 pl-md-1">
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" />
				<i class="fas fa-check isValid"></i>
				<i class="fas fa-times isError"></i>
			</div>
		</div>
    </div>
    <div class="row">
		<div class="col-12 col-md-12 ">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="Your Email" />
				<i class="fas fa-check isValid"></i>
				<i class="fas fa-times isError"></i>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-12 ">
			<div class="form-group">
				<label for="country">Country</label>
				<select name="country" id="country" class="location_city_input form-control jcf-hidden">
					<option id="choose" value="" data-prefix="">
					Select Prefix
					</option>
					<option id="AF" value="93" data-country="AF">
					Afghanistan (+93)
					</option>
					<option id="AL" value="355" data-country="AL">
					Albania (+355)
					</option>
					<option id="DZ" value="213" data-country="DZ">
					Algeria (+213)
					</option>
					<option id="AS" value="684" data-country="AS">
					American Samoa (+684)
					</option>
					<option id="AD" value="376" data-country="AD">
					Andorra (+376)
					</option>
					<option id="AO" value="244" data-country="AO">
					Angola (+244)
					</option>
					<option id="AI" value="1-264" data-country="AI">
					Anguilla (+1-264)
					</option>
					<option id="AQ" value="672" data-country="AQ">
					Antarctica (+672)
					</option>
					<option id="AG" value="1-268" data-country="AG">
					Antigua and Barbuda (+1-268)
					</option>
					<option id="AR" value="54" data-country="AR">
					Argentina (+54)
					</option>
					<option id="AM" value="374" data-country="AM">
					Armenia (+374)
					</option>
					<option id="AW" value="297" data-country="AW">
					Aruba (+297)
					</option>
					<option id="AU" value="61" data-country="AU">
					Australia (+61)
					</option>
					<option id="AT" value="43" data-country="AT">
					Austria (+43)
					</option>
					<option id="AZ" value="994" data-country="AZ">
					Azerbaijan (+994)
					</option>
					<option id="BS" value="1-242" data-country="BS">
					The Bahamas (+1-242)
					</option>
					<option id="BH" value="973" data-country="BH">
					Bahrain (+973)
					</option>
					<option id="BD" value="880" data-country="BD">
					Bangladesh (+880)
					</option>
					<option id="BB" value="1-246" data-country="BB">
					Barbados (+1-246)
					</option>
					<option id="BY" value="375" data-country="BY">
					Belarus (+375)
					</option>
					<option id="BE" value="32" data-country="BE">
					Belgium (+32)
					</option>
					<option id="BZ" value="501" data-country="BZ">
					Belize (+501)
					</option>
					<option id="BJ" value="229" data-country="BJ">
					Benin (+229)
					</option>
					<option id="BM" value="441" data-country="BM">
					Bermuda (+441)
					</option>
					<option id="BT" value="975" data-country="BT">
					Bhutan (+975)
					</option>
					<option id="BO" value="591" data-country="BO">
					Bolivia (+591)
					</option>
					<option id="BA" value="387" data-country="BA">
					Bosnia and Herzegovina (+387)
					</option>
					<option id="BW" value="267" data-country="BW">
					Botswana (+267)
					</option>
					<option id="BV" value="47" data-country="BV">
					Bouvet Island (+47)
					</option>
					<option id="BR" value="55" data-country="BR">
					Brazil (+55)
					</option>
					<option id="IO" value="246" data-country="IO">
					British Indian Ocean Territory (+246)
					</option>
					<option id="VG" value="1284" data-country="VG">
					British Virgin Islands (+1284)
					</option>
					<option id="BN" value="673" data-country="BN">
					Brunei Darussalam (+673)
					</option>
					<option id="BG" value="359" data-country="BG">
					Bulgaria (+359)
					</option>
					<option id="BF" value="226" data-country="BF">
					Burkina Faso (+226)
					</option>
					<option id="MM" value="95" data-country="MM">
					Burma (+95)
					</option>
					<option id="BI" value="257" data-country="BI">
					Burundi (+257)
					</option>
					<option id="KH" value="855" data-country="KH">
					Cambodia (+855)
					</option>
					<option id="CM" value="237" data-country="CM">
					Cameroon (+237)
					</option>
					<option id="CA" value="1" data-country="CA">
					Canada (+1)
					</option>
					<option id="CV" value="238" data-country="CV">
					Cape Verde (+238)
					</option>
					<option id="KY" value="1-345 " data-country="KY">
					Cayman Islands (+1-345 )
					</option>
					<option id="CF" value="236" data-country="CF">
					Central African Republic (+236)
					</option>
					<option id="TD" value="235" data-country="TD">
					Chad (+235)
					</option>
					<option id="CL" value="56" data-country="CL">
					Chile (+56)
					</option>
					<option id="CN" value="86" data-country="CN">
					China (+86)
					</option>
					<option id="CX" value="672" data-country="CX">
					Christmas Island (+672)
					</option>
					<option id="CC" value="61" data-country="CC">
					Cocos (Keeling) Islands (+61)
					</option>
					<option id="CO" value="57" data-country="CO">
					Colombia (+57)
					</option>
					<option id="KM" value="269" data-country="KM">
					Comoros (+269)
					</option>
					<option id="CD" data-country="CD">
					Congo, Democratic Republic of the (+)
					</option>
					<option id="CG" value="243" data-country="CG">
					Congo, Republic of the (+243)
					</option>
					<option id="CK" value="682" data-country="CK">
					Cook Islands (+682)
					</option>
					<option id="CR" value="506" data-country="CR">
					Costa Rica (+506)
					</option>
					<option id="CI" data-country="CI">
					Cote d'Ivoire (+)
					</option>
					<option id="HR" value="385" data-country="HR">
					Croatia (+385)
					</option>
					<option id="CU" value="53" data-country="CU">
					Cuba (+53)
					</option>
					<option id="CY" value="357" data-country="CY">
					Cyprus (+357)
					</option>
					<option id="CZ" value="420" data-country="CZ">
					Czech Republic (+420)
					</option>
					<option id="DK" value="45" data-country="DK">
					Denmark (+45)
					</option>
					<option id="DJ" value="253" data-country="DJ">
					Djibouti (+253)
					</option>
					<option id="DM" value="1-767" data-country="DM">
					Dominica (+1-767)
					</option>
					<option id="DO" value="1-809" data-country="DO">
					Dominican Republic (+1-809)
					</option>
					<option id="TL" data-country="TL">
					East Timor (+)
					</option>
					<option id="EC" value="593" data-country="EC">
					Ecuador (+593)
					</option>
					<option id="EG" value="20" data-country="EG">
					Egypt (+20)
					</option>
					<option id="SV" value="503" data-country="SV">
					El Salvador (+503)
					</option>
					<option id="GQ" value="240" data-country="GQ">
					Equatorial Guinea (+240)
					</option>
					<option id="ER" value="291" data-country="ER">
					Eritrea (+291)
					</option>
					<option id="EE" value="372" data-country="EE">
					Estonia (+372)
					</option>
					<option id="ET" value="251" data-country="ET">
					Ethiopia (+251)
					</option>
					<option id="FK" value="500" data-country="FK">
					Falkland Islands (Islas Malvinas) (+500)
					</option>
					<option id="FO" value="298" data-country="FO">
					Faroe Islands (+298)
					</option>
					<option id="FJ" value="679" data-country="FJ">
					Fiji (+679)
					</option>
					<option id="FI" value="358" data-country="FI">
					Finland (+358)
					</option>
					<option id="FR" value="33" data-country="FR">
					France (+33)
					</option>
					<option id="GF" value="594" data-country="GF">
					French Guiana (+594)
					</option>
					<option id="PF" value="689" data-country="PF">
					French Polynesia (+689)
					</option>
					<option id="TF" data-country="TF">
					French Southern and Antarctic Lands (+)
					</option>
					<option id="GA" value="241" data-country="GA">
					Gabon (+241)
					</option>
					<option id="GM" value="220" data-country="GM">
					The Gambia (+220)
					</option>
					<option id="GE" value="995" data-country="GE">
					Georgia (+995)
					</option>
					<option id="DE" value="49" data-country="DE">
					Germany (+49)
					</option>
					<option id="GH" value="233" data-country="GH">
					Ghana (+233)
					</option>
					<option id="GI" value="350" data-country="GI">
					Gibraltar (+350)
					</option>
					<option id="GR" value="30" data-country="GR">
					Greece (+30)
					</option>
					<option id="GL" value="299" data-country="GL">
					Greenland (+299)
					</option>
					<option id="GD" value="1-473" data-country="GD">
					Grenada (+1-473)
					</option>
					<option id="GP" value="590" data-country="GP">
					Guadeloupe (+590)
					</option>
					<option id="GU" value="671" data-country="GU">
					Guam (+671)
					</option>
					<option id="GT" value="502" data-country="GT">
					Guatemala (+502)
					</option>
					<option id="GN" value="224" data-country="GN">
					Guinea (+224)
					</option>
					<option id="GW" value="245" data-country="GW">
					Guinea-Bissau (+245)
					</option>
					<option id="GY" value="592" data-country="GY">
					Guyana (+592)
					</option>
					<option id="HT" value="509" data-country="HT">
					Haiti (+509)
					</option>
					<option id="HM" value="1-612" data-country="HM">
					Heard Island and McDonald Islands (+1-612)
					</option>
					<option id="VA" value="379" data-country="VA">
					Holy See (Vatican City) (+379)
					</option>
					<option id="HN" value="504" data-country="HN">
					Honduras (+504)
					</option>
					<option id="HK" value="852" data-country="HK">
					Hong Kong (SAR) (+852)
					</option>
					<option id="HU" value="36" data-country="HU">
					Hungary (+36)
					</option>
					<option id="IS" value="354" data-country="IS">
					Iceland (+354)
					</option>
					<option id="IN" value="91" data-country="IN">
					India (+91)
					</option>
					<option id="ID" value="62" data-country="ID">
					Indonesia (+62)
					</option>
					<option id="IR" data-country="IR">
					Iran (+)
					</option>
					<option id="IQ" value="964" data-country="IQ">
					Iraq (+964)
					</option>
					<option id="IE" value="353" data-country="IE">
					Ireland (+353)
					</option>
					<option id="IL" value="972" data-country="IL">
					Israel (+972)
					</option>
					<option id="IT" value="39" data-country="IT">
					Italy (+39)
					</option>
					<option id="JM" value="1-876" data-country="JM">
					Jamaica (+1-876)
					</option>
					<option id="JP" value="81" data-country="JP">
					Japan (+81)
					</option>
					<option id="JO" value="962" data-country="JO">
					Jordan (+962)
					</option>
					<option id="KZ" value="7" data-country="KZ">
					Kazakhstan (+7)
					</option>
					<option id="KE" value="254" data-country="KE">
					Kenya (+254)
					</option>
					<option id="KI" value="686" data-country="KI">
					Kiribati (+686)
					</option>
					<option id="KP" data-country="KP">
					Korea, North (+)
					</option>
					<option id="KR" value="82" data-country="KR">
					Korea, South (+82)
					</option>
					<option id="KW" value="965" data-country="KW">
					Kuwait (+965)
					</option>
					<option id="KG" value="996" data-country="KG">
					Kyrgyzstan (+996)
					</option>
					<option id="LA" data-country="LA">
					Laos (+)
					</option>
					<option id="LV" value="371" data-country="LV">
					Latvia (+371)
					</option>
					<option id="LB" value="961" data-country="LB">
					Lebanon (+961)
					</option>
					<option id="LS" value="266" data-country="LS">
					Lesotho (+266)
					</option>
					<option id="LR" value="231" data-country="LR">
					Liberia (+231)
					</option>
					<option id="LY" value="218" data-country="LY">
					Libya (+218)
					</option>
					<option id="LI" value="423" data-country="LI">
					Liechtenstein (+423)
					</option>
					<option id="LT" value="370" data-country="LT">
					Lithuania (+370)
					</option>
					<option id="LU" value="352" data-country="LU">
					Luxembourg (+352)
					</option>
					<option id="MO" value="853" data-country="MO">
					Macao (+853)
					</option>
					<option id="MK" value="389" data-country="MK">
					North Macedonia (+389)
					</option>
					<option id="MG" value="261" data-country="MG">
					Madagascar (+261)
					</option>
					<option id="MW" value="265" data-country="MW">
					Malawi (+265)
					</option>
					<option id="MY" value="60" data-country="MY">
					Malaysia (+60)
					</option>
					<option id="MV" value="960" data-country="MV">
					Maldives (+960)
					</option>
					<option id="ML" value="223" data-country="ML">
					Mali (+223)
					</option>
					<option id="MT" value="356" data-country="MT">
					Malta (+356)
					</option>
					<option id="MH" value="692" data-country="MH">
					Marshall Islands (+692)
					</option>
					<option id="MQ" value="596" data-country="MQ">
					Martinique (+596)
					</option>
					<option id="MR" value="222" data-country="MR">
					Mauritania (+222)
					</option>
					<option id="MU" value="230" data-country="MU">
					Mauritius (+230)
					</option>
					<option id="YT" value="262" data-country="YT">
					Mayotte (+262)
					</option>
					<option id="MX" value="52" data-country="MX">
					Mexico (+52)
					</option>
					<option id="FM" value="691" data-country="FM">
					Micronesia, Federated States of (+691)
					</option>
					<option id="MD" value="373" data-country="MD">
					Moldova (+373)
					</option>
					<option id="MC" value="377" data-country="MC">
					Monaco (+377)
					</option>
					<option id="MN" value="976" data-country="MN">
					Mongolia (+976)
					</option>
					<option id="MS" value="664" data-country="MS">
					Montserrat (+664)
					</option>
					<option id="MA" value="212" data-country="MA">
					Morocco (+212)
					</option>
					<option id="MZ" value="258" data-country="MZ">
					Mozambique (+258)
					</option>
					<option id="NA" value="264" data-country="NA">
					Namibia (+264)
					</option>
					<option id="NR" value="674" data-country="NR">
					Nauru (+674)
					</option>
					<option id="NP" value="977" data-country="NP">
					Nepal (+977)
					</option>
					<option id="NL" value="31" data-country="NL">
					Netherlands (+31)
					</option>
					<option id="AN" value="599" data-country="AN">
					Netherlands Antilles (+599)
					</option>
					<option id="NC" value="687" data-country="NC">
					New Caledonia (+687)
					</option>
					<option id="NZ" value="64" data-country="NZ">
					New Zealand (+64)
					</option>
					<option id="NI" value="505" data-country="NI">
					Nicaragua (+505)
					</option>
					<option id="NE" value="227" data-country="NE">
					Niger (+227)
					</option>
					<option id="NG" value="234" data-country="NG">
					Nigeria (+234)
					</option>
					<option id="NU" value="683" data-country="NU">
					Niue (+683)
					</option>
					<option id="NF" value="672" data-country="NF">
					Norfolk Island (+672)
					</option>
					<option id="MP" value="1-670" data-country="MP">
					Northern Mariana Islands (+1-670)
					</option>
					<option id="NO" value="47" data-country="NO">
					Norway (+47)
					</option>
					<option id="OM" value="968" data-country="OM">
					Oman (+968)
					</option>
					<option id="PK" value="92" data-country="PK">
					Pakistan (+92)
					</option>
					<option id="PW" value="680" data-country="PW">
					Palau (+680)
					</option>
					<option id="PA" value="507" data-country="PA">
					Panama (+507)
					</option>
					<option id="PG" value="675" data-country="PG">
					Papua New Guinea (+675)
					</option>
					<option id="PY" value="595" data-country="PY">
					Paraguay (+595)
					</option>
					<option id="PE" value="51" data-country="PE">
					Peru (+51)
					</option>
					<option id="PH" value="63" data-country="PH">
					Philippines (+63)
					</option>
					<option id="PN" value="870" data-country="PN">
					Pitcairn Islands (+870)
					</option>
					<option id="PL" value="48" data-country="PL">
					Poland (+48)
					</option>
					<option id="PT" value="351" data-country="PT">
					Portugal (+351)
					</option>
					<option id="PR" value="1-787" data-country="PR">
					Puerto Rico (+1-787)
					</option>
					<option id="QA" value="974" data-country="QA">
					Qatar (+974)
					</option>
					<option id="RE" value="262" data-country="RE">
					Réunion (+262)
					</option>
					<option id="RO" value="40" data-country="RO">
					Romania (+40)
					</option>
					<option id="RU" value="7" data-country="RU">
					Russia (+7)
					</option>
					<option id="RW" value="250" data-country="RW">
					Rwanda (+250)
					</option>
					<option id="SH" value="290" data-country="SH">
					Saint Helena (+290)
					</option>
					<option id="KN" value="1-869" data-country="KN">
					Saint Kitts and Nevis (+1-869)
					</option>
					<option id="LC" value="1-758" data-country="LC">
					Saint Lucia (+1-758)
					</option>
					<option id="PM" value="508" data-country="PM">
					Saint Pierre and Miquelon (+508)
					</option>
					<option id="VC" value="1-784" data-country="VC">
					Saint Vincent and the Grenadines (+1-784)
					</option>
					<option id="WS" value="685" data-country="WS">
					Samoa (+685)
					</option>
					<option id="SM" value="378" data-country="SM">
					San Marino (+378)
					</option>
					<option id="ST" value="239" data-country="ST">
					São Tomé and Príncipe (+239)
					</option>
					<option id="SA" value="966" data-country="SA">
					Saudi Arabia (+966)
					</option>
					<option id="SN" value="221" data-country="SN">
					Senegal (+221)
					</option>
					<option id="SC" value="248" data-country="SC">
					Seychelles (+248)
					</option>
					<option id="SL" value="232" data-country="SL">
					Sierra Leone (+232)
					</option>
					<option id="SG" value="65" data-country="SG">
					Singapore (+65)
					</option>
					<option id="SK" value="421" data-country="SK">
					Slovakia (+421)
					</option>
					<option id="SI" value="386" data-country="SI">
					Slovenia (+386)
					</option>
					<option id="SB" value="677" data-country="SB">
					Solomon Islands (+677)
					</option>
					<option id="SO" value="252" data-country="SO">
					Somalia (+252)
					</option>
					<option id="ZA" value="27" data-country="ZA">
					South Africa (+27)
					</option>
					<option id="GS" value="44" data-country="GS">
					South Georgia and the South Sandwich Islands (+44)
					</option>
					<option id="ES" value="34" data-country="ES">
					Spain (+34)
					</option>
					<option id="LK" value="94" data-country="LK">
					Sri Lanka (+94)
					</option>
					<option id="SD" value="249" data-country="SD">
					Sudan (+249)
					</option>
					<option id="SR" value="597" data-country="SR">
					Suriname (+597)
					</option>
					<option id="SJ" value="47" data-country="SJ">
					Svalbard (+47)
					</option>
					<option id="SZ" value="268" data-country="SZ">
					Swaziland (+268)
					</option>
					<option id="SE" value="46" data-country="SE">
					Sweden (+46)
					</option>
					<option id="CH" value="41" data-country="CH">
					Switzerland (+41)
					</option>
					<option id="SY" value="963" data-country="SY">
					Syria (+963)
					</option>
					<option id="TW" value="886" data-country="TW">
					Taiwan (+886)
					</option>
					<option id="TJ" value="992" data-country="TJ">
					Tajikistan (+992)
					</option>
					<option id="TZ" value="255" data-country="TZ">
					Tanzania (+255)
					</option>
					<option id="TH" value="66" data-country="TH">
					Thailand (+66)
					</option>
					<option id="TG" value="228" data-country="TG">
					Togo (+228)
					</option>
					<option id="TK" value="690" data-country="TK">
					Tokelau (+690)
					</option>
					<option id="TO" value="676" data-country="TO">
					Tonga (+676)
					</option>
					<option id="TT" value="1-868" data-country="TT">
					Trinidad and Tobago (+1-868)
					</option>
					<option id="TN" value="216" data-country="TN">
					Tunisia (+216)
					</option>
					<option id="TR" value="90" data-country="TR">
					Turkey (+90)
					</option>
					<option id="TM" value="993" data-country="TM">
					Turkmenistan (+993)
					</option>
					<option id="TC" value="649" data-country="TC">
					Turks and Caicos Islands (+649)
					</option>
					<option id="TV" value="688" data-country="TV">
					Tuvalu (+688)
					</option>
					<option id="UG" value="256" data-country="UG">
					Uganda (+256)
					</option>
					<option id="UA" value="380" data-country="UA">
					Ukraine (+380)
					</option>
					<option id="AE" value="971" data-country="AE">
					United Arab Emirates (+971)
					</option>
					<option id="GB" value="44" data-country="GB">
					United Kingdom (+44)
					</option>
					<option id="US" data-country="US">
					United States (+)
					</option>
					<option id="UY" value="598" data-country="UY">
					Uruguay (+598)
					</option>
					<option id="UZ" value="998" data-country="UZ">
					Uzbekistan (+998)
					</option>
					<option id="UM" data-country="UM">
					United States Minor Outlying Islands (+)
					</option>
					<option id="VU" value="678" data-country="VU">
					Vanuatu (+678)
					</option>
					<option id="VE" value="58" data-country="VE">
					Venezuela (+58)
					</option>
					<option id="VN" value="84" data-country="VN">
					Vietnam (+84)
					</option>
					<option id="VI" value="1340" data-country="VI">
					Virgin Islands (+1340)
					</option>
					<option id="WF" value="681" data-country="WF">
					Wallis and Futuna (+681)
					</option>
					<option id="EH" value="212" data-country="EH">
					Western Sahara (+212)
					</option>
					<option id="YE" value="967" data-country="YE">
					Yemen (+967)
					</option>
					<option id="YU" data-country="YU">
					Yugoslavia (+)
					</option>
					<option id="ZM" value="260" data-country="ZM" >
					Zambia (+260)
					</option>
					<option id="ZW" value="263" data-country="ZW">
					Zimbabwe (+263)
					</option>
					<option id="PS" value="970" data-country="PS">
					Palestinian Territory, Occupied (+970)
					</option>
				</select>
	
			</div>
		</div>
    </div>
    <div class="row">
		<div class="col-12 col-md-12">
			<div class="form-group">
				<label for="phonenumber">Phone</label>
				<div class="phoneFP clearfix">
					<input id="phoneprefix" class="form-control phoneprefixclass phone-prefix" type="text" name="phone-country-code" value="" readonly="" >
					<input id="phonenumber" class="form-control phonenumberclass phone-number" name="phone" type="text" placeholder="Your Phone" >
					<i class="fas fa-check isValid"></i>
					<i class="fas fa-times isError"></i>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-12">
            <small class="form-text text-muted">By creating an account you agree to our Privacy policy, and to receive email marketing materials, you can opt-out at any time.</small>
        </div>
    </div>
	<div class="row">
		<div class="col-12 text-center">
			<div class="form-group ">
				<button type="submit" class="cssecoBtn animationbtn" id="submit">Submit</button>
			</div>
		</div>
	</div>
</form>

<style>
/* div#site-wrapper form label {
    display: block;
}
.trading-volume-questions, .portfolio-questions, .experience-role-questions, .experience-qualification-questions{
    margin-left: 15px;
    padding:5px;
    background:#eee;
} */

</style>