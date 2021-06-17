<?php
include 'connection.php';
include 'navbar.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                <h1 style="text-align:center; background-color:lightblue;">Transfer Money To Our Registered Customer</h1>
                    <?php
                        $x= mysqli_connect("localhost", "root", "", "banking") or die(mysqli_error($con)); 
                        $q1="SELECT * FROM users";
                        $q4=mysqli_query($x,$q1);
                        $i=1;
                    ?>
                        <table border="1" class="table table-hover">
                        <thead><tr>
                        <th>Number &nbsp</th>&nbsp
                        <th>Account no &nbsp</th>&nbsp
                        <th>Holder name &nbsp</th>&nbsp
                        <th>Email &nbsp</th>&nbsp
                        <th>Amount &nbsp</th>&nbsp
                        <th>Transfer Money &nbsp</th>
                        </tr>
                        
                        </thead>
                            <?php
                                while($q3=mysqli_fetch_array($q4))
                                { 
                                    $email= $q3[2];
                                        echo "<tbody><tr><td width='100px'>".$i."</td>&nbsp";
                                        echo "<td width='100px'>".$q3[0]."</td>&nbsp<td width='100px'>".$q3[1]."</td>&nbsp";
                                        echo "<td width='100px'>".$q3[2]."</td>&nbsp<td width='100px'>".$q3[3]."</td>&nbsp";?>
                                        <td width="100px">  
                                        <a class="btn btn-info" href="transfer.php?email=<?php echo $email; ?>">Transfer Now</a>
                                        </td>&nbsp
                                    <?php  $i++;    
                                }
                            ?>
                        </tr>
                        </tbody>
                        </table>
                        
                </div>
            </div>
        </div>
    </body>
</html>
        <?php
        require("footer.php");
        ?>  