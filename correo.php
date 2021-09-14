<?php 
    if(isset($_POST['send'])) {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['affair']) && !empty($_POST['msg'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['msg'];
            $affair = $_POST['affair'];
            $header = "From: emanuel.nu02@gmail.com \r\n";
            $header.= "Reply-To: emanuel.nu02@gmail.com \r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email, $affair, $msg, $header);
            if($email) {
                echo "<h4>¡Your message has been sent!</h4>";
            }
        }
    }
?>