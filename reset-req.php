<!-- <?php
    require './includes/common.php';
    if(isset($_POST['submit']))
    {
        // Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","mail.example.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'dmshah.3899@gmail.com');
        mail("dmshah.3899@gmail.com","Hello","This is Email");

        // $email_id = $_POST['email'];
        // $query = "SELECT * FROM users WHERE email = '$email_id'";
        // $result = mysqli_query($con , $query) or die(mysqli_error($con));
        // $row = mysqli_fetch_assoc($result);
        // $fetch_user_id=$row['uid'];
        // $email=$row['email'];
        // $password=$row['password'];
        // if($email_id==$email) {
        //     $to = $email_id;
        //     $subject = "Password";
        //     $txt = "Your password is : $password.";
        //     $headers = "From: password@mobileshoppee.com" . "\r\n" .
        //     "CC: somebodyelse@example.com";

        //     ini_set("SMTP","mail.gmail.com");
        //     ini_set("smtp_port","25");
        //     ini_set('sendmail_from', 'dmshah.3899@gmail.com');
        //     // mail($to,$subject,$txt,$headers);
        // }else{
        //     echo 'invalid userid';
        // }
         
    }
?> -->