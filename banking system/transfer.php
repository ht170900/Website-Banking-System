<?php
require("connection.php");
require("navbar.php");
?>
<html>
    <head>
        <title>
            Banking system
        </title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <style> 
                        body {
                                background-image: url("stbg4.jpg");
                                background-color: #ffffff;
                        }
                </style>
    </head>
    <body>
    <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                <h2 style="text-align:center; background-color:lightblue;">Transfer Money </h2>
                <h4 style="text-align:left;  text-decoration: underline;">Money Transferd from:</h4>
                <table border="1" class="table table-hover">
                        <thead><tr>
                        <th>Account no &nbsp</th>&nbsp
                        <th>Holder name &nbsp</th>&nbsp
                        <th>Email &nbsp</th>&nbsp
                        <th>Amount &nbsp</th>&nbsp
                        </tr>
                        
                        </thead>
                            <?php
                            
                                $Email=$_REQUEST['email'];
                                $x= mysqli_connect("localhost", "root", "", "banking") or die(mysqli_error($con)); 
                                $q1="SELECT * FROM users where Email='$Email'";
                                $q4=mysqli_query($x,$q1);
                                $i=1;   
                                while($q3=mysqli_fetch_array($q4))
                                { 
                                    $email= $q3[2];
                                        echo "<tr>";
                                        echo "<td width='100px'>".$q3[0]."</td>&nbsp<td width='100px'>".$q3[1]."</td>&nbsp";
                                        echo "<td width='100px'>".$q3[2]."</td>&nbsp<td width='100px'>".$q3[3]."</td>&nbsp";}?>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>
        </div> 
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <form action="transferscript.php" method="post">
                    <div class="form-group">
                            <h4 style="text-align:left;  text-decoration: underline;">Money Transferd To:</h4>
                            <label style="color : black;"><b>Transfer To:</b></label>
                                <select name="to" class="form-control" required>
                                        <option value="" disabled selected>Choose</option>
                                            <?php
                                            
                                                $Email=$_REQUEST['email'];
                                                error_reporting(0);
                                                $x= mysqli_connect("localhost", "root", "", "banking") or die(mysqli_error($con)); 
                                                $sql = "SELECT * FROM users ";
                                                $result=mysqli_query($x,$sql);
                                                if(!$result)
                                                {
                                                    echo "Error ".$sql."<br>".mysqli_error($x);
                                                }
                                                while($rows = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <option class="table" value="<?php echo $rows['Email'];?>" name="from">
                                                    <?php echo $rows['Holder_Name'] ;?> 
                                                    (Balance: <?php echo $rows['Balance'] ;?> ) 
                                                </option>
                                                <?php 
                                                } 
                                                ?>
                                </select>
                                <div class="form-group">
                                    Amount<input type="number" name='amount' class="form-control" required> 
                                </div>
                                    <input type="hidden" value="<?php echo $Email;?>" name="from">
                                    <input type="submit" value='Submit' class="btn btn-info">
                                    <script>
                                    </script>
                                    <?php if(isset($_REQUEST['error'])){
                                            echo $_GET['error'];} 
                                    ?>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html> 