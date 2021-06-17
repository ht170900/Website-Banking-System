<?php
$c=mysqli_connect("localhost","root","","banking");
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
echo '<script Type="javascript">alert("You will be contacted soon")</script>';
if($_REQUEST['submit'])
{
    $q="INSERT INTO contact_us(`Name`, `Email`, `Feedback`) VALUES ('$name','$email','$feedback');";
    mysqli_query($c, $q);
    $error = "<span style='color:green'>Thank you for contacting us we will get back to you soon</span>";
    header('location: ContactUs.php?error=' . $error);
    
}
?>