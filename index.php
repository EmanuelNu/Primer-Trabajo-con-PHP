<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Mail Form</title>
</head>
    <body>
        <form method="post">
            <input type="text" placeholder="Name" name="name" required="">
            <input type="email" placeholder="Email" name="email" required="">
            <input type="text" placeholder="Affair" name="affair" required="">
            <textarea placeholder="Type your message here!" name="msg"></textarea>
            <input type="submit" class="send-mail" placeholder="Send" name="send" required="">
        </form>
        <?php 
            include("correo.php");
        ?>
    </body>
</html>