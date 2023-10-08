<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
									<div class="tile-left">
										<i class="fa fa-user fs-5"></i>
									</div>
									<div class="tile-right">
									<div class="tile-description">Account Number</div>
										<div class="tile-number"><?php echo $accn; ?></div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div class="card card-tile card-xs bg-secondary bg-gradient text-center">
								<div class="card-body p-4">
									<div class="tile-left">
										
										<i class="fa fa-file fs-5"></i>
									</div>
									<div class="tile-right">
									<div class="tile-description">Account Type</div>
										<div class="tile-number"><span style='font-size:16px;'>Online Checking</span></div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<div class="tile-left">
									</div>
									<div class="tile-right">
									<div class="tile-description">Account Balance</div>
										<div class="tile-number">
										<?php echo $cur; ?> 
			                          
<?php
                    
                        echo number_format("$awa").".00";
                        ?>												</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div class="card card-tile card-xs bg-secondary bg-gradient text-center">
								<div class="card-body p-4">
									<div class="tile-left">
										<i class="fa fa-money fs-5"></i>
									</div>
									<div class="tile-right">
									<div class="tile-description">Account Currency</div>
										<div class="tile-number"> (<?php echo $cur; ?>)</div>
										
									</div>
								</div>
							</div>
						</div>
			  </div>
					
					<div class="row">
					<div class="col-sm-12 col-md-6 col-xl-3 mb-4">
							<div class="card card-md bg-primary bg-gradient text-center">
								<div class="card-body">
									<div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
<img src="../owner/uploads/<?php echo $pix; ?>" width="44" height="44">									</div>
									<p class="mt-5 mb-4">Welcome!</p>
									<h6><?php echo $ada; ?></h6>
									
									<a class="btn btn-secondary waves-effect waves-light" href="?profile">View Profile</a>
								</div>
							</div>
					  </div>
						
						
						 						
						<div class="col-sm-12 col-md-6 col-xl-3 mb-4">
							
							<div class="card card-md bg-primary bg-gradient text-center">
								<div class="card-body">
									<i class="fa fa-inbox fs-5"></i>
									<h6 class="my-5">Notification</h6>
									<?php	                                 
$query="SELECT * FROM logs WHERE client='$client' ORDER BY id DESC LIMIT 2";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];
if($m4=='completed'){
$check="<span class='badge badge-success'>Credited</span>";	
$badge="badge-success";
$h="text-success";
$m2="".$m2;
}
else
{
$check="<span class='badge badge-danger'>Debited</span>";	
$badge="badge-danger";
$h="text-danger";
$m2="".$m2;
}
 $rand=rand(111111111111,999999999999);
echo "Your account was $check with $cur $m2<hr>";
}}
 ?>
									
																		
									
									
									
								</div>
							</div>							
							
						</div>
						








                       
                                                   <div class="col-md-12 col-lg-6 mb-5">
							<div class="card card-md">
								<div><br>

									<strong style="padding-left:10px;"></strong>
								</div>
								<div>

                                <img src="files/Webp.net-gifmaker.gif" width="500" height="400"> </div>
							</div>
					  </div>
					</div>