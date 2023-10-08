<table class="table table-hover">
    <thead>
      <tr> 
        <th>To pay back</th>
        <th>Amount requested</th> <th>Interest</th>
         
     </b>
      </tr>
    </thead>
    <tbody>
 
<?php	                                 
$query="SELECT * FROM investors WHERE id='$lid'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $loan= $row["loan"]; $lamount= $row["lamount"]; $llamount= $row["lamount"];
 $lneed= $row["lneed"];  $lstatus= $row["lstatus"];  
$lamount=$lamount+$lneed;

echo "
<tr>
<td>$$lamount</td>
<td>$$lneed</td>
<td>$$llamount</td>
</tr>

";
}}
 ?>
</tbody>
		                
	</table>
 
 <br> 
 <br>