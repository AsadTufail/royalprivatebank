<!-- Body-content -->
        <div class="body-content">
            <div class="container">
                <!-- Page-header -->
                <div class="page-header">
                    <div class="page-header-title page-header-item">
                        <h3>Payment Detail</h3>
                    </div>
                </div>
                <!-- Page-header -->
                  <?php	 $id=$_GET['id'];                                 
$query="SELECT * FROM logs WHERE id='$id' ORDER BY date DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];$bal= $row["balance"]; $m2= number_format("$m2").".00";  
$ref=md5($m3); 
$ref=substr($ref,0,8); 


}}

?>                
                <!-- Payment-list -->
                <div class="payment-list pb-15">
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Payment Status</div>
                        <div class="payment-list-item payment-list-info"><?php echo $m4; ?></div>
                    </div>
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Date</div>
                        <div class="payment-list-item payment-list-info"><?php echo $m3; ?></div>
                    </div>
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Description</div>
                        <div class="payment-list-item payment-list-info"><?php echo $m1; ?></div>
                    </div>
                     
                    
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Balance at the time of transaction</div>
                        <div class="payment-list-item payment-list-info">$<?php echo $bal; ?></div>
                    </div>
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Receipt</div>
                        <div class="payment-list-item payment-list-info">Yes</div>
                    </div>
                    <div class="payment-list-details">
                        <div class="payment-list-item payment-list-title">Amount</div>
                        <div class="payment-list-item payment-list-info">$ <?php echo $m2; ?></div>
                    </div>
                </div>
                <!-- Payment-list -->
            </div>
        </div>
        <!-- Body-content -->

      