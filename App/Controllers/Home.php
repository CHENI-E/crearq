<?php

namespace App\Controllers;

use Core\View;
use Core\Util;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './../vendor/autoload.php';
class Home
{
    public function index()
    {
        $views = ['home/index'];
        $args  = ['title' => 'Crearq | Inicio'];
        View::render($views, $args);
    }

    public function storeEmail()
    {
        /* header('Location: ' . Util::baseUrl()); */
        $identificador = $_POST['i'] ?? ''; // 7 es index y comunicate , 6 inversionistas y proyectos(definir que proyecto es), 8 postVenta
        $Subjet = '';
        $tipoDocumento = $_POST['document_type'] ?? '';
        $dni = $_POST['document'] ?? '';
        $nombre = $_POST['name'] ?? '';
        $apellido = $_POST['lastname'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefono = $_POST['phone'] ?? '';
        $proyecto = $_POST['project'] ?? '';
        $mensaje = $_POST['message'] ?? '';
        $numero_departamento = $_POST['numero_departamento'] ?? '';
        switch ($identificador) {
            case 6:
                $Subjet = 'INVERSIONISTAS Y PROYECTOS';
                $body = "<h3>Has recibido un nuevo mensaje de la Web CREARQ:</h3>
                        <p><b>Nombre:</b> ".$nombre."</p>
                        <p><b>Apellido:</b> ".$apellido."</p>
                        <p><b>Documento:</b> ".$dni." ".$tipoDocumento."</p>
                        <p><b>Telefono:</b> ".$telefono."</p>
                        <p><b>Correo:</b> ".$email."</p>
                        <p><b>Proyecto:</b> ".$proyecto."</p>
                        <p><b>Mensaje:</b> ".$mensaje."</p>";
                break;
            case 7:
                $Subjet = 'CONTACTANOS';
                $body = "<h3>Has recibido un nuevo mensaje de la Web CREARQ:</h3>
                        <p><b>Nombre:</b> ".$nombre."</p>
                        <p><b>Apellido:</b> ".$apellido."</p>
                        <p><b>Documento:</b> ".$dni." ".$tipoDocumento."</p>
                        <p><b>Telefono:</b> ".$telefono."</p>
                        <p><b>Correo:</b> ".$email."</p>
                        <p><b>Proyecto:</b> ".$proyecto."</p>
                        <p><b>Mensaje:</b> ".$mensaje."</p>";
                break;
            case 8:
                $Subjet = 'POSTVENTA';
                $body = "<h3>Has recibido un nuevo mensaje de la Web CREARQ:</h3>
                        <p><b>Nombre:</b> ".$nombre."</p>
                        <p><b>Apellido:</b> ".$apellido."</p>
                        <p><b>Documento:</b> ".$dni." ".$tipoDocumento."</p>
                        <p><b>Telefono:</b> ".$telefono."</p>
                        <p><b>Correo:</b> ".$email."</p>
                        <p><b>Proyecto:</b> ".$proyecto."</p>
                        <p><b>Número Departamento:</b> ".$numero_departamento."</p>
                        <p><b>Mensaje:</b> ".$mensaje."</p>";
                break;
            default:
                $Subjet = 'CONTACTANOS';
                $body = "<h3>Has recibido un nuevo mensaje de la Web CREARQ:</h3>
                <p><b>Nombre:</b> ".$nombre."</p>
                <p><b>Apellido:</b> ".$apellido."</p>
                <p><b>Documento:</b> ".$dni." ".$tipoDocumento."</p>
                <p><b>Telefono:</b> ".$telefono."</p>
                <p><b>Correo:</b> ".$email."</p>
                <p><b>Proyecto:</b> ".$proyecto."</p>
                <p><b>Mensaje:</b> ".$mensaje."</p>";
                break;
        }

        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host       = 'mail.inversioneshi.com';  // Cambia según tu proveedor
            $mail->SMTPAuth   = true;
            $mail->Username   = 'crearq@inversioneshi.com'; // Tu correo corporativo o personal
            $mail->Password   = 'crearq2025'; // Usa una contraseña segura o App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // O PHPMailer::ENCRYPTION_SMTPS
            $mail->Port       = 465; // 465 para SSL, 587 para TLS

            // Configuración del correo
            $mail->setFrom('crearq@inversioneshi.com', 'CrearQ Inmobiliaria'); // Tu correo corporativo o personal
            $mail->addAddress('marco.antonio.9956@gmail.com'); // Cambia al correo que recibirá los mensajes
            $mail->Subject = $Subjet;
            $mail->isHTML(true);
            $mail->Body = $body;

            // Enviar correo
            if ($mail->send()) {
                header('Location: ' . Util::baseUrl());
                echo "El mensaje se envió correctamente.";
            } else {
                header('Location: ' . Util::baseUrl());
                echo "Error al enviar el mensaje.";
            }
        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}";
        }
    }

    public function exampleWithArgs($id = null)
    {
        $views = ['home/example_with_args'];
        $args  = [
            'title' => 'Home | Example',
            'id' => $id ?? 'No se envio ID'
        ];
        View::render($views, $args);
    }
}
