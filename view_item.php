<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Humidity</title>
<link rel="stylesheet" href="assets/css/style.css">
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="hum-header">Items Details</h2>
</div>
<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT item_id,item_name,Quantity,Total_Cost FROM items");
// printf("Select returned %d rows.\n", mysqli_num_rows($result));
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table-container'>
<tr class='table-header'>
<th scope="col">#</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total Cost</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row['item_id'];?></td>
<td><?php echo $row['item_name'];?></td>
<td><?php echo $row['Quantity'];?></td>
<td><?php echo $row['Total_Cost'];?></td>e
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>
