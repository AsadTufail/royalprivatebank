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
<?php 

$ido=$_GET['name'];
if(isset($_POST['editme'])){
	echo "<div class=''>";
//Fetching Values from INPUTS
$name=$_POST['name']; $uname=$_POST['uname']; $pass=$_POST['pass'];
$mid=$_POST['mid'];$ph=$_POST['ph'];$dob=$_POST['dob']; $un1=$_POST['un1']; $un2=$_POST['un2']; $un3=$_POST['un3']; $cvv=$_POST['cvv']; $cvv2=$_POST['cvv2']; $cvv3=$_POST['cvv3'];
$afn=$_POST['afn'];
$aum=$_POST['aum'];
$aup=$_POST['aup'];
$aux=$_POST['aux'];
  $apii=$_POST['apii'];
$ass=$_POST['ass'];
$aho=$_POST['aho'];
$country=trim($_POST['country']);
$address=trim($_POST['address']);
$email=trim($_POST['email']);

$u2=$_POST['uname2'];$ssn=$_POST['ssn'];$rout=$_POST['rout'];

if(empty($_FILES['fileToUpload']["name"])){
$api=$apii;    
    
}
else {
$api=$_FILES["fileToUpload"]["name"];
echo $api;
$p=$_FILES["fileToUpload"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
}}





//Update  Database	

$sql="UPDATE `investors`  SET 
`username` = '$uname',`password` = '$pass',`email` = '$email',`misc` = '$name',`cvv` = '$cvv',`country` = '$country',`address` = '$address',`ph` = '$ph',`age` = '$dob',`ssn` = '$ssn',`rout` = '$rout'
,`cvv2` = '$cvv2',`cvv3` = '$cvv3',`un1` = '$un1',`un2` = '$un2',`un3` = '$un3',`afn` = '$afn',`aum` = '$aum',`aup` = '$aup',`aux` = '$aux',`api` = '$api',`ass` = '$ass',`aho` = '$aho'
  WHERE `id`=$mid ";
if ($conn->query($sql) === TRUE) {





$queryh="SELECT * FROM logs WHERE client='$u2' ";
$resulth=$conn->query($queryh);
if($resulth->num_rows>0) {
while ($rowh=$resulth->fetch_assoc()) {
$ne=$rowh["id"];
$sqlh="UPDATE `logs`  SET 
`client` = '$uname' WHERE `id`=$ne ";
if ($conn->query($sqlh) === TRUE) {

}}}











   
 echo "<div class='alert alert-success'>Updated!</div>";

}
else{ echo "<div class='alert alert-danger'>Error occured!</div>".$conn->error;}




} ?>




<?php

$query="SELECT * FROM investors WHERE id=$ido ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$u=$row["username"]; $fn=$row["misc"]; $email=$row["email"]; $country=$row["country"]; $add=$row["address"]; $ph=$row["ph"];
$p=$row["password"]; $dob=$row["age"];  $ssn=$row["ssn"];  $rout=$row["rout"];  $cvv=$row["cvv"]; $cvv2=$row["cvv2"]; $cvv3=$row["cvv3"];
$un1=$row["un1"]; $un2=$row["un2"]; $un3=$row["un3"]; $afn=$row["afn"]; $aum=$row["aum"]; $aup=$row["aup"]; $aux=$row["aux"]; $api=$row["api"]; $ass=$row["ass"]; $aho=$row["aho"];
}}


?>
<center class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <h1>EDIT BANK ACCOUNT INFO</h1>
<form action="" method="post" enctype='multipart/form-data'>
    
     <div class="inputdepsitdes"> <i class="ti-user"></i>
  <input type="text" style="height:50%;" name="uname" value="<?php echo $u; ?>" placeholder="Enter Username"  />
                                    
                                    
    <Input "text"  name="uname2" value="<?php echo $u; ?> " readonly hidden>                                
                                                                        
                                    
                                    
                                    
                                    
                                    
                                  
                                  </div>
                                  
                                  <div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="test" style="height:50%;" name="pass" value="<?php echo $p; ?>" placeholder="Enter password"  />
                                  </div>
                                  
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="text" name="name" value="<?php echo $fn; ?>" placeholder="Enter Your Full Name" style="width:50%; height:50px;"   />
                                      <input type="text" name="mid" value="<?php echo $_GET['name']; ?>" hidden  />
                                  </div>
<br>
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="email" name="email" value="<?php   echo $email; ?>" style="width:50%; height:50px;" placeholder="Enter  Email Address"  />
                                  </div>
								  <br>
								  <div class="inputdepsitdes">
                                            
                                               
                                                <select id="country" name="country"  >
<option><?php  echo $country; ?></option>
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
                                    <input type="address" name="address" value="<?php echo $add;  ?>" style="width:50%; height:50px;" placeholder="Enter  your home address"  />
                                  </div>
<br>
 
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="ph" placeholder="Phone" value="<?php   echo $ph; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
								   <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="cvv" placeholder="expiry date card1" value="<?php   echo $cvv; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
								  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="cvv2" placeholder="expiry date card2" value="<?php   echo $cvv2; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
								  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="cvv3" placeholder="expiry date card3" value="<?php   echo $cvv3; ?>" style="width:50%; height:50px;"   />
                                  </div> <br>
								  
								     <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="un1" placeholder="card1 balance" value="<?php   echo $un1; ?>" style="width:50%; height:50px;"   />
                                  </div> <br>
								  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="un2" placeholder="card2 balance" value="<?php   echo $un2; ?>" style="width:50%; height:50px;"   />
                                  </div> <br>
								  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="un3" placeholder="card3 balance" value="<?php   echo $un3; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
								 
								  
								  
                                    <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="ssn" placeholder="SSN" value="<?php   echo $ssn; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
                                   <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="rout" placeholder="Routing Number" value="<?php   echo $rout; ?>" style="width:50%; height:50px;"  />
                                  </div> <br>
                                  
                                  
                                  
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="dob" placeholder="date of birth" value="<?php   echo $dob; ?>" style="width:50%; height:50px;"   />
                                  </div> <br>
                                  
                                  <h1>AUTHOURIZED USER</h1>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="afn" placeholder="auth user fullname" value="<?php   echo $afn; ?>" style="width:50%; height:50px;"  />
                                  </div>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="aum" placeholder="auth user mail" value="<?php   echo $aum; ?>" style="width:50%; height:50px;"  />
                                  </div>
                                  <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="aup" placeholder="auth user phone" value="<?php   echo $aup; ?>" style="width:50%; height:50px;"  />
                                  </div>
                                  <br>
                                  <div class="inputdepsitdes">
                                            
                                               
                                               Status: <select id="" name="aux"  >
<option><?php  echo $aux; ?></option>
                <option>Approved</option>
                <option>Declined</option>
               <option>Processing</option>
                </select>
                </div>
                                  
	<div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="ass" placeholder="auth user ssn" value="<?php   echo $ass; ?>" style="width:50%; height:50px;"  />
                                  </div>
                                  <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="aho" placeholder="auth user home address" value="<?php   echo $aho; ?>" style="width:50%; height:50px;"  />
                                  </div>
                                  <img src='uploads/<?php echo $api; ?>'  style='width:60px;'>
   <input type="text" name="apii"  value="<?php   echo $api; ?>" style="width:50%; height:50px;"  />
   
  <input type='file' name='fileToUpload' id='fileToUpload' >
  
   
    
              
 <br>
 
                
<button  class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="editme" ><i class="fa fa-file-pencil"></i>  Update account</button><br />



</form></center>
