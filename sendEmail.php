<?php
//if "email" variable is filled out, send email
if (isset($_POST['email']))  {
    //Email information
    $to = get_option( 'csarun2014@gmail.com' );
    $headers = $_POST['contactEmail'];
    $subject = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];

    //send email
    wp_mail($to, $subject, $message, $headers);

    //Email response
    echo "Thank you for contacting us!";
}

    //if "email" variable is not filled out, display the form
    else  {
    echo "fill the form!";

  }
?>