<html>
<head>
<style>
    body{
        background-color:#121212;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
#friendslist{
height:500px;
text-align:center;
width:600px;
color:pink;
}
#friends{
height:50px;
}

a{
    width: 200px;
    color: black;
    padding: 10px 30px;
    margin: 10px;
    text-decoration: none;
    background: white;
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
$sql="SELECT friend2 FROM friends WHERE friend1='$user'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$friend2=$row["friend2"];
echo "<a href='game.php?friend2=".$friend2."&groups=0'>".$friend2."</a><br>";
}
}
$sql="SELECT friend1 FROM friends WHERE friend2='$user'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$friend1=$row["friend1"];
echo "<a href='game.php?friend2=".$friend1."&groups=0'>".$friend1."</a><br>";
}
}

?>
</body>