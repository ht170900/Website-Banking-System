<?php
$x= mysqli_connect("localhost", "root", "", "banking") or die(mysqli_error($con));
$fromEmail=$_REQUEST['from'];
$toEmail=$_POST['to'];
$Amount=$_POST['amount'];
$fromquery="Select * from users where Email='$fromEmail'";
$result=mysqli_query($x,$fromquery);
    while($rows = mysqli_fetch_assoc($result))
    {
        $FromAmount=$rows['Balance'];
        $FromName=$rows['Holder_Name'];
    }
$toquery="Select * from users where Email='$toEmail'";
$result1=mysqli_query($x,$toquery);
    while($rows = mysqli_fetch_assoc($result1))
    {
        $toAmount=$rows['Balance'];
        $toName=$rows['Holder_Name'];
    }
        if($Amount>0 && $Amount<=$FromAmount)
        {
            $FromAmount=$FromAmount-$Amount;
            $fromq="UPDATE users SET Balance='$FromAmount' WHERE Email='$fromEmail'";
            $result2=mysqli_query($x,$fromq);
            $toAmount=$toAmount+$Amount;
            $toq="UPDATE users SET Balance='$toAmount' WHERE Email='$toEmail'";
            $result3=mysqli_query($x,$toq);
            $q="INSERT INTO transactiont (TON, FROMN, Amount) VALUES ('$toName','$FromName','$Amount')";
            $result4=mysqli_query($x,$q);
            if(result4)
            {
                header('Location:history.php');
            }
            
        }
        else if($Amount<0)
        {
            $error = "<span class=red>*Amount Entered is negative </span>";
            header('location: transfer.php?error=' . $error);
        }
        else if($Amount==0)
        {
            $error = "<span class=red>*Amount Entered is zero </span>";
            header('location: transfer.php?error=' . $error);
        }else
        {
            $error = "<span class=red>* Money transfer amount is insufficient</span>";
            header('location: transfer.php?error=' . $error);
        }
?>