<script type="text/javascript">

        function isNumberKey(evt, obj) {

            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }



    </script>
<?php require_once('connect.php');
if (isset($_POST['reg'])) {
  echo "<div class=''>";
  //Fetching Values from INPUTS
  $name = $_POST['name'];
  $phone = $_POST['bal'];
  $bitcoin = $_POST['q1'];
  $ico = $_POST['q2'];
  $accn = trim($_POST['accn']);
  $country = trim($_POST['country']);
  $address = trim($_POST['address']);
  $cur = $_POST['cur'];
  $referal = $_POST['q3'];
  $user = trim($_POST['user']);
  $user = str_replace(' ', '', $user);
  $email = trim($_POST['email']);
  if (isset($_POST['ref'])) {
    $ref = trim($_POST['ref']);

  } else {
    $ref = 'N';
  }
  $pass1 = trim($_POST['pass1']);
  $pass2 = trim($_POST['pass2']);
  $pass = md5($_POST['pass1']);
  //check if form fields left empty 
  if (empty($name) || empty($email) || empty($pass1) || empty($pass2)) {
    echo "<h4><i class='fa fa-times'></i> Some Fields Are Empty!</h4>";
  }
  // check passwords
  else if ($pass1 != $pass2) {
    echo "<h4><i class='fa fa-times'></i> Sorry, Passwords  Didn't Match! </h4>";
  } else {
    //Insert To Database	
    $date = date('D M ,Y');
    $time = date('h:i:sa');
    $verify = md5('$time');
    $verify = $verify . $user;
    $r = rand(1000, 9999);
    $ud = $r;
    //check if user already exist
    $query = "SELECT * FROM investors WHERE username='$user' ";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $u = $row["username"];
        if ($user == $u) {
          echo "<center><div class='alert alert-danger'><i class='fa fa-info'></i> 
Username Already Exist ! </div></center>";
        }
      }
    } else {
      $s1 = rand(123456, 987654);
      $s2 = rand(234567, 876543);
      $s3 = rand(112233, 998877);
      $s4 = rand(2244, 9977);
      $ran = rand(1234, 9999);
      $card = rand(1089, 8999);
      $card = $card . $ran . '12' . $card;
      $sql = "INSERT INTO investors(userid,username,password,email,phone,bitcoin,ico,date,time,referral,status,verify,te,misc,pix,pin,card,currency,accn,country,address,s1,s2,s3,s4,loan,lstatus)
 VALUES('$ud','$user','$pass1','$email','$phone','$bitcoin','$ico','$date','$time','$referal','P','$verify','1','$name','user.png','$ran','$card','$cur','$accn','$country','$address','$s1','$s2','$s3','$s4','1','N')";
      if ($conn->query($sql) == TRUE) {
        echo "<div class='alert alert-success' style='background:green; color:white;'>Creation Successful, you can go ahead to <a href='login.php'>login your account</a></div>";
      } else {
        echo "<h4 style='background:red; color:white;'>error contact support</h4>";
      }

    }

  }
  echo "</div>";
} ?>
<center>
    <h3>CREATE NEW BANK ACCOUNT</h3>
<form action="" method="post">
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="text" name="name" value="<?php if (isset($_POST['reg'])) {
                                      echo $name;
                                    } ?>" placeholder="Enter Your Full Name" style="width:50%; height:50px;" required  />
                                  </div>
<br>
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="email" name="email" value="<?php if (isset($_POST['reg'])) {
                                      echo $email;
                                    } ?>" style="width:50%; height:50px;" placeholder="Enter  Email Address" required />
                                  </div>
                  <br>
                  <div class="inputdepsitdes">
                                            
                                               
                                                <select id="country" name="country"  >

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
                <option value="United States">United States</option>
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
                                            
                                        </div> <br>
                  <div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="address" name="address" value="<?php if (isset($_POST['reg'])) {
                                      echo $address;
                                    } ?>" style="width:50%; height:50px;" placeholder="Enter  your home address" required />
                                  </div>
<br>
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="text" name="user" value="<?php if (isset($_POST['reg'])) {
                                      echo $user;
                                    } ?>" style="width:50%; height:50px;" placeholder="Enter  Username"  required />
                                  </div>
<br>

<div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="password" name="pass1" placeholder="Enter Password" style="width:50%; height:50px;" required />
                                  </div> <br>
<div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="password" name="pass2" placeholder="Confirm Password" style="width:50%; height:50px;" required />
                                  </div> <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="bal" value="0" onkeypress="return isNumberKey(event,this)" style="width:50%; height:50px;"  hidden required />
                                  </div> <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q1" placeholder="First name" style="width:50%; height:50px;" required />
                                  </div> <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q2" placeholder="Middle name(OPTIONAL)" style="width:50%; height:50px;"   />
                                  </div> <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q3" placeholder="Last name" style="width:50%; height:50px;" required />
                                  </div>
                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                  <span>Account Number</span><br>
                                    <input type="text" name="accn" placeholder="Account no." value="<?php echo "098" . rand(1111111, 9999999); ?>" style="width:50%; height:50px;" required />
                                  </div>
                  <?php
                  if (isset($_GET['ref'])) {
                    echo '<div class="form-group group-icon">
                                         <label class="text-muted" for="exampleInputPassword2">My Referral</label>
                                         <div class="group-icon">
                                        <input id="ref" name="ref"  value="'; ?>   <?php echo $_GET["ref"]; ?>   <?php echo '" type="text" placeholder="Referal" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                         </div>
                                    </div> ';
                  }
                  ?>

 <br>
 <select name="cur" class="inputdepsitdes" style="width:50%; height:50px;">
<option>$</option>     <option>€</option> <option>£</option> <option>POUND</option>
     
 </select>
                <br> 
                
<button  class="btn btn-success" type="submit" name="reg" ><i class="fa fa-file-text-o"></i>Open account</button><br />



</form></center>
