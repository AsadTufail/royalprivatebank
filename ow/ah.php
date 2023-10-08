<h2>ACCOUNT HISTORY</H2><div class="row">
			        <div class="col-md-12 mb-5">
			          <div class="card">
			            <div class="card-header">
			             all Account Statement		              </div>
			            <div class="card-table table-responsive">
			              <table class="table table-hover align-middle">
			                <thead class="thead-light">
			                  <tr>
			                    <th width="25%">Date / Time </th>
					              <th width="12%">Credit / Debit </th>
					              <th width="25%">Description</th>
					              <th width="15%">Amount</th>
					              <th width="16%">Action </th>
					              <th width="7%">&nbsp;</th>
				              </tr>
		                    </thead>
<tbody>
<?php	                           
$query="SELECT * FROM logs  ORDER BY id DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];
if($m4=='completed'){
$check="<span class='badge badge-success'>Credit</span>";	
$badge="badge-success";
$h="text-success";
$m2="+ ".$m2;
}
else
{
$check="<span class='badge badge-danger'>Debit</span> ";	
$badge="badge-danger";
$h="text-danger";
$m2="- ".$m2;
}
 $rand=rand(111111111111,999999999999);



echo "<tr>
<td>$m3</td>
<td> $check</td>
<td>$m1		          
</td>
<td>                        
<h4 class='$badge'>  $m2</h4>	
</td>
<td>$m4		
</td>
<td>
</td>
</tr>";
}}
 ?>
</tbody>
		                  </table>
		                </div>
		              </div>
		          </div>
		        </div>
					
		  	
	                       