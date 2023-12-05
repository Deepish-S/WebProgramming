<html>
<head>
  <title>Your AIRLINES</title>
</head>
<body>
  <form method="post" action="">
    Name: <input type="text" name="n"><br />
    Age: <input type="text" name="a"><br />
    <label for="date_of_journey">Date of journey:</label><input type="date" id="date_of_journey" name="date_of_journey"><br />
    source:
    <select name="source">
      <option>kerala</option>
      <option>manglore</option>
      <option>blr</option>
    </select><br />
    destination:
    <select name="destination">
      <option>goa</option>
      <option>hydrabad</option>
      <option>chennai</option>
    </select><br />
    types_of_class: <br />
    <input type="radio" value="business" name="class">business<br />
    <input type="radio" value="First" name="class">First<br />
    <input type="radio" value="economy" name="class">economy<br />
    mobileno: <input type="text" name="m"><br />
    email: <input type="text" name="e"><br /><br /><br /><br />
    <input type="submit" name="sub" value="Book ticket"/><br /><br /><br />
  </form>
  <?php
  $nameErr=$AgeErr=$date_of_journeyErr=$sourceErr=$destinationErr=$types_of_classErr=$mobilenoErr=$emailErr="";
  if(isset($_POST['sub'])){
    $Name=$_POST["n"];
    $Age=$_POST["a"];
    $date_of_journey=$_POST["date_of_journey"];
    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $types_of_class=$_POST["class"];
    $mobileno=$_POST["m"];
    $email=$_POST["e"];

    $conn=new mysqli('localhost','root','','airlines');
    if(!$conn)
      echo "DB connection error</br>";
    $q1="insert into bookings values('$Name','$Age','$date_of_journey','$source','$destination','$types_of_class','$mobileno','$email')";
    if($conn->query($q1))
      echo "Row inserted";
    else
      echo "error";
  }
  ?>
</body>
</html>
