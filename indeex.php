<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Baza de date</title>
  <style>
    body,html{
    margin:0;
    height: 100%;
    }
  .ccc{
        position:fixed;
        top:130px;
        right: -30px;
      }
    button{
      position: fixed;
      bottom:20px;
      left:30px;
      }
      .buttonas
      {
        position: fixed;
        bottom:20px;
        right:30px;
        width:60px;
      }
      .sorry{
        padding-top:0px;
        margin-left:30px;
        width:100px;
        height:100px; 
        margin-top:-30px;
      }
      .lll{
        position:fixed;
        top:120px;
        left:0px;
      }
      a{
        text-decoration-color: blue;
        text-decoration:blue;
        color:blue;
      }  
     .admin 
      {
        position: fixed;
        bottom:20px;
        margin-left:1250px;
        width:60px;

      }
  </style>
</head>
<body style="margin:0; height:85%; background-image:url('default.jpg');background-position:center;background-size:cover;background-repeat:no-repeat;background-attachment: fixed; " >
<?php
error_reporting(E_ALL); 
if (file_exists('antet.html'))
{     
    include_once('antet.html');   
} else
{     
    die("<br>Eroare: Nu se gaseste fisierul antet.html"); 
}
if (file_exists('corp.php'))
{     
    include_once('corp.php');     
} else
{     
    die("<br>Eroare: Nu se gaseste fisierul corp.php");   
} if (file_exists('subsol.html'))
{     
    include_once('subsol.html');  
} else
{   
    die("<br>Eroare: Nu se gaseste fisierul subsol.html");  
}
?>
  <div class="lll">
<a style="
        text-decoration-color: red;
        text-decoration:red;
        color:red;" href="index.html"><h2 href="http://www.google.com" class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: yellow;
        text-decoration:yellow;
        color:yellow;
      " href="select_auto.html"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: blue;
        text-decoration:blue;
        color:blue;
        " href="indeex.php"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: red;
        text-decoration:red;
        color:red;" href="send_email.html"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: yellow;
        text-decoration:yellow;
        color:yellow;" href="http://automd.su"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: blue;
        text-decoration:blue;
        color:blue;
        " href="https://success.md/ro?gclid=Cj0KCQjwz6PnBRCPARIsANOtCw3OcQL3B_C4nHjpkt_9DU0t9CMsWelEkJr4j7uQsVYKBPNhiGF8zNoaAsxcEALw_wcB"><h2 class="sorry">&#9783;</h2></a></div>
<button class="buttonas" onClick="window.location='select_auto.html';">&#9754;</button>
</div>
<div class="ccc">
<a style="
        text-decoration-color: red;
        text-decoration:red;
        color:red;" href="index.html"><h2 href="http://www.google.com" class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: yellow;
        text-decoration:yellow;
        color:yellow;
      " href="select_auto.html"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: blue;
        text-decoration:blue;
        color:blue;
        " href="indeex.php"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: red;
        text-decoration:red;
        color:red;" href="send_email.html"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: yellow;
        text-decoration:yellow;
        color:yellow;" href="http://automd.su"><h2 class="sorry">&#9783;</h2></a>
<a style="
        text-decoration-color: blue;
        text-decoration:blue;
        color:blue;
        " href="https://success.md/ro?gclid=Cj0KCQjwz6PnBRCPARIsANOtCw3OcQL3B_C4nHjpkt_9DU0t9CMsWelEkJr4j7uQsVYKBPNhiGF8zNoaAsxcEALw_wcB"><h2 class="sorry">&#9783;</h2></a></div>
<button class="admin" onClick="window.location='admin_automobil.html';">&#9755;</button>
</div>
</head>
</body>
</html>