<html>
<head>
<style>
#addmembers{
height:30px;
width:200px;
background-color:pink;
}
#groups{
width:200px;
background-color:yellow;
}
body{
background-color:black;
}
</style>
</head>
<body>
<?php
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$user=$_COOKIE["user"];
$sql="SELECT group_name FROM groups WHERE members='$user'";
$res=mysqli_query($con,$sql); 
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
$groups=$row["group_name"];
echo "<button id='groups'><a href='chat.php?friend2=".$groups."&groups=1'>".$groups."</a></button>&emsp;&emsp;&emsp;<button id='addmembers'><a href='addmembers.php?group_name=".$groups."'>ADD MEMBERS</a></button><br>";
}
}

echo "<form action='creategroup.php' method='POST'>";
echo "<input name='group_name'>&emsp; <input type='submit' value='create'></form>";

?>
</body>