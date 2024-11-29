<?php
  $name = htmlspecialchars($_POST['name']);
  $company = htmlspecialchars($_POST['company']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $requirement = htmlspecialchars($_POST['requirement']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "maxtoncranes786@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "New Mail From Website";
      $body = "Name: $name\nCompany: $company\nEmail: $email\nPhone: $phone\nRequirement: $requirement\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>

 