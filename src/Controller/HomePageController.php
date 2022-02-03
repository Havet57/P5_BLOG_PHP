<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class HomePageController extends CoreController {
    public function home (){      
        if(isset($_POST['mail'])){
            $email=$_POST['mail'];
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $content=$_POST['content'];

            $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'okidokidu57@gmail.com';                     //SMTP username
    $mail->Password   = 'Freeboxtkt-68';                               //SMTP password
    $mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('okidokidu57@gmail.com', 'Mailer');
    $mail->addAddress('sosoboxe@live.fr', 'Joe User');     //Add a recipient      
    $mail->addReplyTo('sosoboxe@live.fr', 'Information');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'blog reconversion pro';
    $mail->Body    = $content;
    $mail->AltBody = $content;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        }
        $repository = new ArticleRepository;
        $articles=$repository->findMostRecent();
        echo $this->twig->render('homepage.html.twig', ['articles' => $articles, 'user' => $this->user]);
    }
}