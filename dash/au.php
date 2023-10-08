<div class="row">
					
					<?php if(!empty($afn)) { ?> 
					<div class="col-sm-12 col-md-6 col-xl-4 mb-4" style='background:white;'>
							<div class="card card-md bg-primary bg-gradient text-center">
								<div class="card-body" style='background:white;'>
									
									<p ><h3 class="">Beneficiary/Authourized User!</h3></p>
									<div class="profile-picture profile-picture-lg mt-5">
										<img src="../ow/uploads/<?php echo $api; ?>" width="170" height="170">									</div><br>
									<h4><i>NAME</i>: <?php echo $afn; ?></h4>
									<h4><i>EMAIL</i>: <?php echo $aum; ?></h4>
									<h4><i>PHONE</i>: <?php echo $aup; ?></h4>
									<h4><i>SSN</i>: <?php echo $ass; ?></h4>
									<h4><i>ADDRESS</i>: <?php echo $aho; ?></h4>
									<h4><i>DOB</i>: <?php echo $ado; ?></h4>
									<?php  if($aux=="Approved"){ $xxx="btn btn-success";} else { $xxx="btn btn-warning";}  ?>
									<h3>Status:   <b class="<?php echo $xxx; ?>"><?php echo $aux; ?></b></h3>
									
									
								</div>
							</div>
					  </div>
					  
					<?php } else { echo "No Authorized user"; }  ?>
					  
					  
					  
					  
					<div class="col-md-8 mb-8" style='background:white;' style=" overflow: auto;">
		  

		    
		    </div>
					  
					  
					  
					  
					  

						
						
						 
						
						
                          
                         
					</div>
					
					<br><br>
					
		 