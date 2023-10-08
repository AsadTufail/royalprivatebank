<div class="section">
    <div class="row">
					
					
					<div class="col-md-8 mb-8"   style=" overflow: auto;">
		    
		    <table class="table table-hover">
    
    <tbody> 
		  
		 <tr>
		   <td><b>Account Name : </b></td><td><?php echo $ada; ?></td>
		   </tr>
		   <!--<tr>-->
		   <!--<td><b>Account Number :</b> </td><td><?php echo $accn; ?></td>-->
		   <!--</tr>-->
		   <tr>
		   <td><b>Phone Number :</b> </td><td><?php echo $ph; ?></td>
		   </tr>
		   <tr>
		   <td><b>Email :</b> </td><td><?php echo $aem; ?></td>
		   </tr>
		   <tr>
		   <td><b>Date of Birth : </b></td><td><?php echo $dob; ?></td>
		   </tr>
		   <tr>
		   <td><b>Address : </b></td><td><?php echo $address; ?></td>
		   </tr>
		   <tr>
		   <td><b>Username : </b></td><td><?php echo $client; ?></td>
		   </tr>
		   <tr>
		   <td><b>Account Balance :</b> </td><td><h3><?php echo number_format("$awa").".00"; ?></h3></td>
		    </tr>
		    <!--<tr>-->
		    <!--    <td></td><td>  <a class="badge badge-info" href="?transfer">Money transfer</a></td>-->
		    <!--</tr>-->
		   </tbody>
		   </table>
		   <?php
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$targetDirectory = "../uploads/userdocs/"; 
			$targetFile =$targetDirectory . basename($_FILES["user_doc"]["name"]);
			$uploadOk = 1;
			
			// Check if the file already exists
			if (file_exists($targetFile)) {
				echo "Sorry, the file already exists.";
				$uploadOk = 0;
			}
			
			// Check file size (you can set a maximum file size)
			
			
			// Allow certain file formats (you can customize this)
			$allowedExtensions = array("jpg", "jpeg", "png","pdf","doc","docx");
			$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
			if (!in_array($fileExtension, $allowedExtensions)) {
				echo "Sorry, only JPG, JPEG, PNG, DOC and PDF files are allowed.";
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {
				// Move the file to the desired location
				if (move_uploaded_file($_FILES["user_doc"]["tmp_name"], $targetFile)) {
					echo "The file " . basename($_FILES["user_doc"]["name"]) . " has been uploaded.";
					// Now, you can save the file information to the database
					// Replace the following code with your database connection and query
					
					$filename = basename($_FILES["user_doc"]["name"]);
					$file_path = $targetFile;
					$sql = "INSERT INTO docs (userid, file_path) VALUES ('$aid','$filename')";
					
					if ($conn->query($sql) === TRUE) {
						echo "File information saved to the database.";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
					
					$conn->close();
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
		?>

		   <h4>Upload Document</h4>
			<form action="" method="POST" enctype="multipart/form-data">
				<label for="doc">Upload your file(s)</label>
			<input type="file" name="user_doc" id="doc" class="form-control">
			<br>
			<input type="submit" class="btn btn-secondary waves-effect waves-light" value="Submit">

			</form>
		    
		    </div>
					  
					  
					  
					  
					  
					  
					<div class="col-sm-12 col-md-6 col-xl-4 mb-4"  >
							<div class="card card-md bg-primary bg-gradient text-center">
								<div class="card-body" style=''>
									<div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
										<img src="../ow/uploads/<?php echo $pix; ?>" width="170" height="170">									</div>
									<p class="mt-5 mb-4"><h4>Welcome!</h4></p><br>
									<h3><?php echo $ada; ?></h3>
									
									<a class="btn btn-secondary waves-effect waves-light" href="?profile">My Profile</a>
								</div>
							</div>
					  </div>
						
						
						 
						
						
                          
                         
					</div>
					</div>
					
					
		 