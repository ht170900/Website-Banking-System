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
                        background-image: url("indexbg2.jpg");
                        background-color: #ffffff;
                }

                div.transbox {
                        margin: 30px;
                        background-color: #ffffff;
                        border: 1px solid black;
                        opacity: 0.6;
                }

                div.transbox p {
                        margin: 5%;
                        font-weight: bold;
                        color: #000000;
                }         
                </style>
        </head>
        <body ><br><br><br><br>
                <div class="background">
                <center>
                        <div class="transbox">
                                <h1><p>Transfer money whenever and wherever within a minute.</p>
                        </div>
                
                <span style="width:50%; "><a href="showtransfer.php" class="btn btn-primary">Transfer Now!</a><br></span></h1>
                </center>
                </div>
        </body>
        </html>
        <?php
        require("f2.php");
        ?>