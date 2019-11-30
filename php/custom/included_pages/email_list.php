<?php
    $email = htmlspecialchars($_POST['emailAddress']);
    // connecting to the database.

    include 'php/custom/included_pages/db_connection.php';

    $sql = "INSERT INTO public.mail_list(mail_id, mail)
            VALUES (nextval('email_sequence'), :email_address);";

    $stmt = $pdo->prepare($sql);
    $msg = "";
    if($stmt->execute(array(':email_address' => $email_address))){
        $msg = "Email successfully, added to database";
    }else{
        $msg = "Unable to add, email to database.";
    }

    header('location: ../../../index.php?msg='.$msg);
?>