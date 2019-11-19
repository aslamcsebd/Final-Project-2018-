<?php
   include('connection.php');
   $conn = portfolio();

   $search  = array("'", '"');
   $replace = array("\'", '\"'); 

   if (isset($_POST['send_message'])) {

      $name    =str_replace($search, $replace, $_POST['name']);
      $contact =str_replace($search, $replace, $_POST['contact']);
      $email   =str_replace($search, $replace, $_POST['email']);
      $subject =str_replace($search, $replace, $_POST['subject']);
      $message =str_replace($search, $replace, $_POST['message']);

      $search  ="select * from message WHERE (name='$name' and email='$email') and (subject='$subject' and message='$message')";
      $result    =  mysqli_query($conn, $search);
      $rowcount  =  mysqli_num_rows($result);

      if($rowcount==0) {

         $sms     = "insert into message values (null,  '$name',  '$contact',  '$email',  '$subject',  '$message')";
         $result2  = mysqli_query($conn, $sms);

         if ($result2) {
            $search2  ="select * from message WHERE (name='$name' and email='$email') and (subject='$subject' and message='$message')";            
            $result3    =  mysqli_query($conn, $search2);
            $rowcount2   =  mysqli_num_rows($result3);

            if($rowcount2==1) {
               $_SESSION['sms']="Your message send successfully."; //sms_send_success
            }else{
               $_SESSION['sms']="Sorry! Message sending fail. Please try again.";   //sms_send_fail      
            }      
         }else{
            $_SESSION['sms']="Sorry! Message sending fail. Please try again.";    //sms_send_fail 
         }
      }elseif ($rowcount>0) {
         $_SESSION['sms']="Your message already exists.";    //sms_double         
      }
      $_SESSION['sms_sender']=$name;
      echo "<script>window.location.href='index.php'</script>";
   }
?>