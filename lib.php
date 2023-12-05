<html>
<body>
<form method="post" action="">
access no<input type="text" name="ac"><br>
title<input type="text" name="t"><br>
author<input type="text" name="au"><br>
edition<input type="text" name="e"><br>
publisher<input type="text" name="p"><br>
<input type="submit" name="ins" value="insert data"><br>
enter title to search<input type="text" name="s"><br>
<input type="submit" name="sb" value="search">
</form>
</body>
</html>
<?php
$conn = new mysqli('localhost','root','','library');
if(!$conn)
  echo "connection error";
if(isset($_POST['ins']))
{
  $ac=$_POST['ac'];
$t=$_POST['t'];
$au=$_POST['au'];
$e=$_POST['e'];
$p=$_POST['p'];

$q1= "insert into books values('$ac','$t','$au','$e','$p');";
if($conn-> query($q1))
echo "yes";
else
echo "no";
}
if(isset($_POST['sb']))
{
 $s=$_POST['s'];
$q2="select *from books where title='$s'";
$result=$conn->query($q2);
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
 echo "title".$row['title']."<br>";
echo "author".$row['author']."<br>";
echo "edition".$row['edition']."<br>";
echo "publisher".$row['publisher']."<br>";
}
}
else
   echo "no records";
}?>
