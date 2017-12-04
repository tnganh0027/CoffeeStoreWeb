<?php 
	require('mail/PHPMailerAutoload.php');
	class Send_mail extends Controller
	{
		public function doSend()
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$content = $_POST['content'];

			/*	Send Mail 	*/
			$mail = new PHPMailer;
			$mail->CharSet = 'UTF-8';
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'chinhcuteee0712@gmail.com';                 // SMTP username
			$mail->Password = 'eqrwhxryybfzwxey';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			
			$mail->setFrom('CoffeeStore@gmail.com', 'Admin Web');
			$mail->addAddress("1413005@hcmut.edu.vn");     // Add a recipient
			// $mail->addAddress('ellen@example.com');               // Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');

			// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			// $mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Some customers have contacted: ' . $name;
			$mail->Body    = 'Content: ' . $content;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			echo 'Message has been sent';
			}

			/*				*/
		}
	}

 ?>