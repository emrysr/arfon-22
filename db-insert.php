<?php
    require_once "dbsettings.php";
    $args = array(
        'name'   => FILTER_SANITIZE_ADD_SLASHES,
        'email'  => FILTER_SANITIZE_EMAIL,
        'phone'  => FILTER_SANITIZE_NUMBER_INT,
        'message' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    );
    $cleaned = filter_input_array(INPUT_POST, $args);
    if(empty($cleaned)) {
        // no post variables
        // header("Location:index.php?error");
        die('400 Bad Request'); 
    }
    $name = $cleaned['name'];
    $email = $cleaned['email'];
    $phone = $cleaned['phone'];
    $message = $cleaned['message'];

    // stop sql injection with prepared statements
    $stmt = $mysqli->prepare("INSERT INTO Contact(name, email, phone, enquiry) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', $name, $email, $phone, $message);
    if($stmt->execute()) {
        // send confirmation emails to admin and user
        $both_sent = sendEmails($name, $email, $phone, $message);
        // redirect on success or error
        if($both_sent) {
            header("Location:index.php?thanks");
        } else {
           header("Location:index.php?error");
        }
    } else {
        printf("Error: %s.\n", $stmt->error);
        $stmt->close();
    }
    $mysqli->close();

    // send emails to admin and user
    function sendEmails($name, $email, $phone, $message) {
        $noreply = 'noreply@cynnalit.co.uk';
        $enquiries = 'enquiries@cynnal.co.uk';
        // send message to admin
        $content = <<<END
            Name - $name<br>
            Email - $email<br>
            Phone - $phone<br>
            Enquiry - $message
        END;

        // send message to user
        $content_cus = <<<END
            Here is a copy of your enquiry to Garry<br>
            We aim to reply to all requests within 24 hours<br>
            <br>
            Name - $name<br>
            Email - $email<br>
            Phone - $phone<br>
            Enquiry - $message
        END;

        // send the emails
        if( sendEmail($email, $noreply, "New Enquiry", $content_cus, $enquiries) &&
            sendEmail($enquiries, $noreply, "New Enquiry", $content, $enquiries) ){
            return true;
        }
        return false;
    }
    // send a html email
    function sendEmail($to, $from, $subject, $message, $reply) {
        
        $version = phpversion();
        $EOL = '\r\n';
        $headers  = "From: $from".$EOL;
        $headers .= "Reply-To: $reply".$EOL;
        $headers .= "X-Mailer: PHP/$version".$EOL;
        $headers .= "MIME-Version: 1.0".$EOL;
        $headers .= "Content-type: text/html; charset=UTF8";

        $params = "-f $from";

        return mail($to, $subject, $message, $headers, $params);
    }
?>