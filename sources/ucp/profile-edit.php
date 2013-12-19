<?php 
if($_SESSION['id']){
	if($_SESSION['pname'] == "checkpname"){
		echo "<div class=\"alert alert-danger\">You must assign a profile name before you can edit your public profile.</div>";
	}else{
		echo "<h2 class=\"text-left\">My Profile</h2><hr/>";
		if(!isset($_POST['edit'])){
			$gp = $mysqli->query("SELECT * FROM ".$prefix."profile WHERE accountid='".$_SESSION['id']."'") or die();
			$p = $gp->fetch_assoc();
			$gc = $mysqli->query("SELECT * FROM characters WHERE accountid='".$_SESSION['id']."'") or die();
			$cgc = $gc->num_rows;
			echo "
		<form method=\"post\" role=\"form\">
		<b>Profile Name: </b>
			".$p['name']."
		<div class=\"form-group\">";
			if($cgc > 0){
				echo "<label for=\"mainChar\">Main Character:</label>
				<select name=\"mainchar\" class=\"form-control\" id=\"mainChar\">";
				while($c = $gc->fetch_assoc()){
					echo "
						<option value=\"".$c['id']."\">".$c['name']."</option>";
				}
				echo "</select>";
			}
			else {
				echo "<hr/><div class=\"alert alert-danger\">You don't have any characters!</div><hr/>";
			}
	echo "
		</div>
		<div class=\"form-group\">
			<label for=\"realName\">Real Name:</label>
			<input type=\"text\" class=\"form-control\" name=\"realname\" value=\"".$p['realname']."\" required id=\"realName\"/>
		</div>
		<div class=\"form-group\">
			<label for=\"myAge\">Age: </label>
			<select name=\"age\" class=\"form-control\" id=\"myAge\">
				<option value=\"".$p['age']."\">".$p['age']."</option>";
			$i = 7;
			while($i < 50){
				echo "
					<option value=\"".$i."\">".$i."</option>";
				$i++;
			}
			echo "
			</select>
		</div>
		<div class=\"form-group\">
			<label for=\"Country\">Country:</label>";
?>
			<select id="Country" name="country" class="form-control">
				<option value="United States">United States</option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Åland Islands">Åland Islands</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="American Samoa">American Samoa</option>
				<option value="Andorra">Andorra</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antarctica">Antarctica</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
				<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
				<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
				<option value="Cook Islands">Cook Islands</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cote D'ivoire">Cote D'ivoire</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Dominica">Dominica</option>
				<option value="Dominican Republic">Dominican Republic</option>
				<option value="Ecuador">Ecuador</option>
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
				<option value="Guernsey">Guernsey</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinea-bissau">Guinea-bissau</option>
				<option value="Guyana">Guyana</option>
				<option value="Haiti">Haiti</option>
				<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
				<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
				<option value="Honduras">Honduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Hungary">Hungary</option>
				<option value="Iceland">Iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Isle of Man">Isle of Man</option>
				<option value="Israel">Israel</option>
				<option value="Italy">Italy</option>
				<option value="Jamaica">Jamaica</option>
				<option value="Japan">Japan</option>
				<option value="Jersey">Jersey</option>
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
				<option value="Macao">Macao</option>
				<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
				<option value="Montenegro">Montenegro</option>
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
				<option value="Norfolk Island">Norfolk Island</option>
				<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				<option value="Norway">Norway</option>
				<option value="Oman">Oman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
				<option value="Saint Helena">Saint Helena</option>
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Senegal">Senegal</option>
				<option value="Serbia">Serbia</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovenia">Slovenia</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
				<option value="Spain">Spain</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				<option value="Swaziland">Swaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syrian Arab Republic">Syrian Arab Republic</option>
				<option value="Taiwan, Province of China">Taiwan, Province of China</option>
				<option value="Tajikistan">Tajikistan</option>
				<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
				<option value="Thailand">Thailand</option>
				<option value="Timor-leste">Timor-leste</option>
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
				<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				<option value="Uruguay">Uruguay</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Viet Nam">Viet Nam</option>
				<option value="Virgin Islands, British">Virgin Islands, British</option>
				<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
				<option value="Wallis and Futuna">Wallis and Futuna</option>
				<option value="Western Sahara">Western Sahara</option>
				<option value="Yemen">Yemen</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
			</select>
<?php
	echo "
		</div>
		<div class=\"form-group\">
			<label for=\"Motto\">Motto:</label>
			<input type=\"text\" class=\"form-control\" name=\"motto\" value=\"".$p['motto']."\" id=\"Motto\"/>
		</div>
		<div class=\"form-group\">
			<label for=\"favJob\">Favorite Job:</label>
				<select name=\"favjob\" class=\"form-control\" id=\"favJob\">";
				if(isset($p['favjob'])) {
					echo "<option value=\"".$p['favjob']."\">".$p['favjob']."</option>";
				}
					echo "	
								<optgroup label=\"Beginner\">
								<option value=\"Beginner\">Beginner</option>
								<option value=\"PermaNoob\">PermaNoob</option>
							</optgroup>
							<optgroup label=\"Warrior\">
								<option value=\"Swordman\">Swordman</option>
								<option value=\"Fighter\">Fighter</option>
								<option value=\"Spearman\">Spearman</option>
								<option value=\"Page\">Page</option>
								<option value=\"Crusader\">Crusader</option>
								<option value=\"Dragon Knight\">Dragon Knight</option>
								<option value=\"White Knight\">White Knight</option>
								<option value=\"Hero\">Hero</option>
								<option value=\"Dark Knight\">Dark Knight</option>
								<option value=\"Paladin\">Paladin</option>
							</optgroup>
							<optgroup label=\"Bowman\">
								<option value=\"Archer\">Archer</option>
								<option value=\"Hunter\">Hunter</option>
								<option value=\"Crossbowman\">Crossbowman</option>
								<option value=\"Ranger\">Ranger</option>
								<option value=\"Sniper\">Sniper</option>
								<option value=\"Bowmaster\">Bowmaster</option>
								<option value=\"Marksman\">Marksman</option>
							</optgroup>
							<optgroup label=\"Magician\">
								<option value=\"Magician\">Magician</option>
								<option value=\"I/L Wizard\">I/L Wizard</option>
								<option value=\"F/P Wizard\">F/P Wizard</option>
								<option value=\"Cleric\">Cleric</option>
								<option value=\"I/L Mage\">I/L Mage</option>
								<option value=\"F/P Mage\">F/P Mage</option>
								<option value=\"Priest\">Priest</option>
								<option value=\"I/L Arch Mage\">I/L Arch Mage</option>
								<option value=\"F/P Arch Mage\">F/P Arch Mage</option>
								<option value=\"Bishop\">Bishop</option>
								</optgroup>
							<optgroup label=\"Theif\">
								<option value=\"Rogue\">Rogue</option>
								<option value=\"Assassin\">Assassin</option>
								<option value=\"Bandit\">Bandit</option>
								<option value=\"Hermit\">Hermit</option>
								<option value=\"Chief Bandit\">Chief Bandit</option>
								<option value=\"Night Lord\">Night Lord</option>
								<option value=\"Shadower\">Shadower</option>
							</optgroup>
							<optgroup label=\"Pirate\">
								<option value=\"Pirate\">Pirate</option>
								<option value=\"Infighter\">Infighter</option>
								<option value=\"Gunslinger\">Gunslinger</option>
								<option value=\"Valkyrie\">Valkyrie</option>
								<option value=\"Buccaneer\">Buccaneer</option>
								<option value=\"Viper\">Viper</option>
								<option value=\"Captain\">Captain</option>
							</optgroup>
						</select>
					</div>
		<div class=\"form-group\">
			<label>About Me:</label>
				<textarea name=\"text\" style=\"height:200px\" maxlength=\"200\" class=\"form-control\" id=\"textCount\">".stripslashes($p['text'])."</textarea>
		</div>
			<p id=\"counter\"></p>
			<div class=\"alert alert-info\">Please keep in mind that all of this information will be public.</div>
			<input type=\"submit\" name=\"edit\" value=\"Update &raquo;\" class=\"btn btn-primary\"/>
			</form>
			<script type=\"text/javascript\">
			$('#textCount').keyup(function () {
			var left = 200 - $(this).val().length;
				if (left < 0) {
					left = 0;
				}
				$('#counter').text('Characters left: ' + left);
			});
			</script>";
		}else{
			$pname = mysql_escape(isset($_POST['pname']));
			$mainchar = mysql_escape(isset($_POST['mainchar']));
			$realname = mysql_escape($_POST['realname']);
			$age = mysql_escape($_POST['age']);
			$country = mysql_escape($_POST['country']);
			$motto = mysql_escape($_POST['motto']);
			$favjob = $_POST['favjob'];
			$text = mysql_escape($_POST['text']);
			$u = $mysqli->query("UPDATE `".$prefix."profile` SET `mainchar`='".$mainchar."',`realname`='".$realname."',`age`='".$age."',`country`='".$country."',`motto`='".$motto."',`favjob`='".$favjob."',`text`='".$text."' WHERE `accountid`='".$_SESSION['id']."'") or die(mysql_error());
				echo "Your public profile has been updated<br />";
				echo "Click <a href=\"?cype=main&amp;page=members&name=".$_SESSION['pname']."\">here</a> to go to your profile.";
			}
		}
	}else{
		redirect("?cype=main");
}
?>