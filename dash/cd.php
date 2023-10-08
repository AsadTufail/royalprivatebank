

 
 
 
 

			             <table class="table table-hover">
    <thead>
      <tr> 
        <th>Initial Amount</th>
        <th>Expiration Date</th> <th>Interest</th>
         
     </b>
      </tr>
    </thead>
    <tbody>
 
<?php	   
$name="";
$query="SELECT * FROM USERS WHERE id='$lid'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
    $name=$row["username"];
}}

$query = "SELECT * FROM logs WHERE client='$name' AND tp='fixed'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $anount= $row["anount"]; $datecd= $row["datecd"];
 
 $formattedAmount = number_format($anount, 2);

echo "
<tr>
<td>$$formattedAmount</td>
<td>$datecd</td>
<td>4.50%</td>
</tr>

";
}}
 ?>
</tbody>      
	</table>
 
 <br> 
 <br>