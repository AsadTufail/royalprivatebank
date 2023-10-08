<br><br><div class="row">
					<div class="col-md-12 mb-12" style=" overflow: auto;">
			          <div class="card">
			            <div class="card-header">
			             Account Statement		              </div>
			             <table class="table table-hover">
    <thead>
      <tr><b></b>
            <th></th>
        
        <th>Ref. No</th>
        <th>Description</th>
        <th>Credit</th>
        <th>Debit</th>
        <th>Status</th>
        <th>Date</th>
     </b>
      </tr>
    </thead>
    <tbody>
			           
	
<?php	                                 
$query="SELECT * FROM logs WHERE client='$client' ORDER BY date DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];$bal= $row["balance"]; $m2= number_format("$m2").".00";  
$ref=md5($m3); 
$ref=substr($ref,0,8); 
if($m4=='completed'){ 
     $which="<span style='color:green;'>$$m2</span>"; $which2="";
$check="<span class='badge badge-success'>Credit</span>";	
$badge="badge-success";
$h="text-success";
$m2=" ".$m2;
$ar="up";
$ar2="style='color:green; font-size:20px;'";
}
else
{
    $which=""; $which2="<span style='color:red;'>$$m2</span>";
   
    $ar="down";
    $ar2="style='color:red; font-size:20px;'";

}

echo "

<tr>
<td><i class='fa fa-arrow-circle-$ar'  $ar2></i></td>

<td><b>#TRN$ref</b></td>
<td>$m1</td>
<td><b>$which</b></td>
<td><b>$which2</b></td>
<td><span class='badge badge-success' >Success</span></td>
<td>$m3</td>
</tr>

";
}}
 ?>
</tbody>
		                
	</table>
	</div>
	</div>
