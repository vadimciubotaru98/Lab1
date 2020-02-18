<?php
echo'
<body> <table style="border:3px solid black;" bgcolor="#e6e6e9" border="1" width="920" align="center">
<tr>
<td valign="top" width="70">';
if (file_exists("meniu_vertical.html"))
{     
    include('meniu_vertical.html');      
} 
echo' </td><td width="">';
if(file_exists('pagina.php'))
    include_once('pagina.php');
echo '</td> </tr> </table>'; 
echo'</body>';
?>
