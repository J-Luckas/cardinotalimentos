<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SendEmailController extends Controller
{

    public function create( Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                      // Enable verbose debug output
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host = "mail.cardinotalimentos.com";
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username = "contato@cardinotalimentos.com";
            $mail->Password = "21010321Familia.";
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;


            $mail->From = $data['email'];
            $mail->FromName = $data['name'];
            $mail->AddAddress("contato@cardinotalimentos.com", "Contato");

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Contato - Cardinot Alimentos';
            $mail->Body    = '<h1>Contato - Cardinot Alimentos</h1>
                                <p>Nome: '.$data['name'].'</p>
                                <p>Email: '.$data['email'].'</p>
                                <p>Mensagem: '.$data['message'].'</p>';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
