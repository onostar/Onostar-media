<?php 
    $name = $_POST['subName'];
    $email = $_POST['subEmail'];
    $formContent = "From: $name \n Email: $email";
    $recipient = "info@onostarmedia.com.ng";
    $subject = "Subscription from onostar media";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formContent, $mailheader) or die("Error!");
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Onostar media</title>
        <style>
        #subscribe_body{
            background:rgb(3, 18, 24);
            width:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .subscribed{
            width:300px;
            position:absolute;
            top:30%;
            text-align:center;
            background:#0b7cac;
            color:#fff;
            box-shadow:2px 2px 2px #c4c4c4;
            padding:10px;
            font-size:1.1rem;
            animation:1s appear 1;
        }
        @keyframes appear{
            0%{
                transform: scale(0);
                opacity:0;
            }
            100%{
                transform: scale(1);
                opacity:1;
            }
        }
        .subscribed button a{
            padding:5px;
            text-decoration:none;
            font-size:1rem;
        </style>
    </head>
    <body id='subscribe_body'>
        <div class='subscribed'>
            <p>Thanks for joining the community<br>You will now get Modern Business Tricks, advice and updates.</p>
            <button><a href='index.html'>OK</a>
        </div>
    </body>
    </html>";
?>