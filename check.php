<!doctype html>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
Name:<input type="text" name="name" required />
Email:<input type="email" name="email" required />
Subject:<input type="text" name="subject" required />
Message:<input type="text" name="message" required />
<input type="submit" value="submit"/>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$header="From:$name $email";
$to="narayanavishnukumar@gmail.com";
echo "Details:$name $email $subject $message";
if(mail($to,$subject,$message,$header)){
echo "mail sent successfully";
}
else{
echo "mail not sent";
}
}
?>
