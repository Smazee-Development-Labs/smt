<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thanks !</title>
  <STYLE TYPE="text/css">
    #header {
      height: 50px;
      background: #0099d9;
      color: #fff;
    }

    #webhead {
      margin-top: 10px;
      font-family: "Segoe Print";
      margin-left: 10px;
      font-size: 24px;
    }
  </STYLE>
</head>

<body>
  <?php
$servername = "mysql.hostinger.in";
$username = "u567580242_admin";
$password = "NAGAJOTHY";
$databasename = "u567580242_smaze";
date_default_timezone_set('Asia/Calcutta');
$y = date('Y-m-d h-i-s'); 
$email=$_POST['email'];
$collegename=$_POST['collegename'];
$stress=$_POST['stress'];
$freedom=$_POST['freedom'];
$rules=$_POST['rules'];
$fineradio=$_POST['fine'];
$raggingradio=$_POST['ragging'];
$hostelradio=$_POST['hostel'];
$facultyradio=$_POST['faculty'];
$infrastructureradio=$_POST['infrastructure'];
$exposureradio=$_POST['exposure'];
$campusplacementradio=$_POST['campusplacement'];
$univrankholderradio=$_POST['univrankholder'];
$suggestion=$_POST['suggestion'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <team@college.esy.es>';
$message="
<html>
<head>
<title>Thanks ! For Providing your Details </title>
</head>
<body>
<font color='#0099d9'>
<h1> Welcome to thecollege ! </h1></font><BR/>
<h3> We are a Beta Version , Your Support is must needed for us . Please Click on the below link to make your Details Registered by Us. </H3><BR/>
<a href ='www.college.esy.es/validate.html'><h3>Click Here</h3></a>
<br/>Any Questions , mail us : team@college.esy.es
</body>
</html>
";


$msg = wordwrap($message,70);

$con = new mysqli($servername,$username,$password,$databasename);

if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
} 
else
{
$slt = "insert into survey values('','$email','$collegename','$stress','$freedom','$rules','$fineradio','$raggingradio','$hostelradio','$facultyradio','$infrastructureradio','$exposureradio','$campusplacementradio','$univrankholderradio','$suggestion','$y')";
$y=mysqli_query($con,$slt);
mail($email, "Greetings From thecollege", $msg ,$headers);

}
$con -> close();
?>
    <div data-role="page">
      <div data-role="header" id="header">
        <div id="webhead">
          <font id "text">thecollege</font>
        </div>
      </div>
      <div data-role="main" class="ui-content">
        <div id="box">
          <h4>

            <ul>
              <li>Thanks For Providing Us your College Details.</li>
              <li>At no Circumstances , Your data will be leaked out.</li>
              <li>Details Provided are for the benefits of The Students. </li>
              <li>Check Your Mail For Registering Your Details. </li>
              <li>Any Questions ? Mail To : team@college.esy.es </li>
            </ul>

          </h4>
        </div>
        <div data-role="footer">
          <h6>Beta Version</h6>
        </div>
      </div>
</body>

</html>