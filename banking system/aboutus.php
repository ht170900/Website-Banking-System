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
        </title>
        <style>
                .checked {
                        color: orange;
                }
                .b{
                    font-weight: bold;
                }
                .s{
                    font-size: 15px;
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
                #bgg
                    {
                    background-image: url("about.jpg");
                    }
        </style>
    </head>
    <body id="bgg"><br>
    <div class="transbox">
                <center> <h1 class="b">About Us</h1>  </center>
                    <div class="transbox">
                        <center>
                            <p style="font-weight: bold;">
                            Our Bank Transfering is a leading private sector bank in India. The Bank’s consolidated total assets stood at Rs. 14.76 trillion at September 30, 2020. 
                            Our Bank currently has a network of 5,288 branches and 15,158 ATMs across India.
                            Our Bank was originally promoted in 1994, an Indian financial institution, and was its wholly-owned subsidiary.
                            Our Bank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies.
                            Time and again our innovative banking services has been recognized and rewarded world over.
                            Catch up with our Bank's latest business and social initiatives, as well as innovative product launches.
                            Corporate Social Responsibility
                            Our Bank is deeply engaged in human and economic development at the national level. The Bank works closely with ICICI Foundation across diverse sectors and programs.
                            </p>
                        </center>
                        
                    </div>
    </div>
                <div class="transbox"> 
                <center>
                <strong>
                    <h1 class="b" >Our Collaboration with different banks:</h1> </center>
                        <div class="transbox" style=" font-weight: bold;">
                            <ul  style="text-align:cneter; font-weight: bold;">
                                <li >ICICI Bank</li>
                                <li >Axis Bank</li>
                                <li >Bank of Boroda</li>
                                <li >RBI</li>
                                <li >BOI</li>
                                <li >Punjab National Bank</li>
                                <li >HDFC Bank</li>
                                <li >Oriental Bank</li>
                            </ul>
                    </div>
                </strong>
            </div>
    </body>
</html>
        <?php
        require("footer.php");
        ?>  