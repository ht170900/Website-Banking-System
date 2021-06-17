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
            .c{
                font-size: 18px;
                text-align: right;
            }
            .b{
                font-weight: bold;
            }
            #bgg
            {
                background-image: linear-gradient(to bottom right, #236AB9, aqua);
            }
        </style>
    </head>
    <body id="bgg">
    <div class="container">
            <div class="row row-responsive">
                <div class="col-lg-6">
                    <h2 class="b" style="font-weight:bold; text-decoration: underline">Contact Us</h2>
                    <br>
                    <form action="contactquerybank.php" method="post">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control"  pattern="/^\w+([\.-]?\w+)*@(\w+([\.-]?\w+)*(\.\w{2,3})$+/">
                        </div>
                        <div class="form-group">
                            <label for="feedback">Feedback:</label>
                            <textarea name="feedback" class="form-control" maxlength="200" min="10"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success" name="submit" onclick="return validation()">
                        <?php
                        if(isset($_REQUEST['error'])){
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";}
                        ?> 
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h3 style="text-align:right ; text-decoration: underline dotted" class="b">
                            CAMPANY INFORMATION:
                        </h3>
                        <p class="c">
                            <br>
                            7 presidency enclave <br>opp PN marg<br>
                            Rajdhani colony <br>
                            Delhi-3612227 <br>
                            Email: abc@123gmail.com<br>
                            Contact No.7874516683<br>
                            Follow us on : Facebook Twitter Instagram<br>      
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    
        <?php
        require("f2.php");
        ?>  