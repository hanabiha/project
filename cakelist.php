<html>
<head>
<title>Cake List</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="DeleteUserAll.php">
 ">
<table width="951" border="1">
<tr>
<td width="54"><center><h3>No.</h3></center></td> 
<td width="166"><center><h3>Name</h3></center></td>
<td width="136"><h3><center>Description</center></h3></td>
<td width="226"><h3><center>Price</center></h3></td>
<td width="131"><h3><center>ID Product</center></h3></td>
<td width="97"><h3><center>Delete</center></h3></td>
<td width="95"><h3><center>Update</center></h3></td>
</tr>
<?php
include('dbconnect.php');
$i=0;
$sql="SELECT * FROM cake_list";
$result=$conn->query($sql);
if ($result->num_rows>0){
while ($rows=$result->fetch_assoc()){
$i++;
?>
<tr class="text">
 <td><?php echo $i; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['desc']; ?></td>
<td><?php echo $rows['price']; ?></td>
<td><?php echo $rows['id_product']; ?></td>
 <td><a href="DeleteUser.php?IC=<?php echo 
 $rows['name'];?>">Delete</a></td>
 <td><a href="EditUser.php?IC=<?php echo 
 $rows['name'];?>">Update</a></td>
</tr>
<?php
}}
$conn->close();
?>
</table>
</form>
</body>
</html>