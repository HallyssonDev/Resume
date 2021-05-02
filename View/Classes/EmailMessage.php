<?php
session_start();

require 'Classes/src/Exception.php';
require 'Classes/src/SMTP.php';
require 'Classes/src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailMessage{

	public $strange_name;
	public $strange_subject;
	public $strange_email;
	public $strange_msg;

	function __construct(){
		$this->strange_name = $_SESSION['nome'] = $_POST['strangename'];
		$this->strange_email = $_SESSION['mail'] = $_POST['strangemail'];
		$this->strange_subject = $_SESSION['titulo'] = $_POST['strangesubject'];
		$this->strange_msg = $_SESSION['msg'] = $_POST['strangemsg'];
	}

	public function validateEmail(){
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL )) {
			echo "<strong style='color:pink'>não foi</strong>";
		}else{
			$this->sendEmailTohls();
		}
		
	}



	public function sendEmailTohls(){

		$mail = new PHPMailer(true);

		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = '';
			$mail->Password = '';
			$mail->Port = 587;

			$mail->setFrom($this->strange_email); //quem envia
			$mail->addAddress('hallyssonrdev@gmail.com'); //quem recebe

			$mail->isHTML(true);
			$mail->Subject = $_SESSION['titulo'];
			$mail->Body = $_SESSION['msg'] . "<br>" . $_SESSION['mail'];
			$mail->AltBody = 'Email';

			if ($mail->Send()) {
				echo "<script>
						alert('Email Enviado com Sucesso... Em breve lhe enviarei uma resposta');
					</script>";
				};


				session_destroy();

			}catch (Exception $e){
				echo "<strong style='color:pink'>Error em {$mail->ErrorInfo}</strong>";
			}
		}

	}
	?>