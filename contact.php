<?php
if (isset ($_POST["submit"]))
{
  $title = $_POST["title"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $filename = "contactform.txt";
  $file = fopen($filename , "a");
  $jointogether = "=======================================" . "\r\n".
                  "Title:".$title . "\r\n".
                  "Name:".$name . "\r\n".
                  "Email:".$email ."\r\n".
                  "Message".$message ."\r\n".
                  "========================================="."\r\n";
  fwrite($file,$jointogether);
  fclose($file);
}
echo "<script type= 'text/javascript'>window.alert('Your message has been sent sucessfully!')</script>";
echo "<script type='text/javascript'>document.location='index.html'</script>";
?>