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
        $ambiente_inspeccionar = $_POST['ambiente_inspeccionar'] ?? '';
        $numero_departamento = $_POST['numero_departamento'] ?? '';
        $servicio = $_POST['servicio'] ?? '';

        $header = '
            <html>
            <head>
            <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
                }
                .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                max-width: 600px;
                margin: auto;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                }
                h2 {
                color: #333333;
                }
                p {
                color: #555555;
                line-height: 1.5;
                }
                .label {
                font-weight: bold;
                color: #000;
                }
                .footer {
                font-size: 12px;
                color: #888;
                text-align: center;
                margin-top: 30px;
                }
            </style>
            </head>
            <body>
            <div class="container">
                <h2>Nuevo mensaje desde el sitio web CREARQ</h2>
            ';
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
            case 'postventa':
                $ccList = ['ecastilloa@inversioneshi.com', 'svega@crearqconstructora.com', 'azevallos@crearqconstructora.com', 'ttenorio@inversioneshi.com'];
                $Subjet = 'POSTVENTA';
                $contenido = '
                    <p><span class="label">Nombre:</span> '.$nombre.'</p>
                    <p><span class="label">Apellido:</span> '.$apellido.'</p>
                    <p><span class="label">Documento:</span> '.$dni.' ('.$tipoDocumento.')</p>
                    <p><span class="label">Teléfono:</span> '.$telefono.'</p>
                    <p><span class="label">Correo:</span> '.$email.'</p>
                    <p><span class="label">Proyecto:</span> '.$proyecto.'</p>
                    <p><span class="label">Mensaje:</span><br>'.$mensaje.'</p>
                ';
                break;
            case 9:
                $Subjet = 'SERVICIO';
                $body = "<h3>Has recibido un nuevo mensaje de la Web CREARQ:</h3>
                        <p><b>Nombre:</b> ".$nombre."</p>
                        <p><b>Apellido:</b> ".$apellido."</p>
                        <p><b>Documento:</b> ".$dni." ".$tipoDocumento."</p>
                        <p><b>Telefono:</b> ".$telefono."</p>
                        <p><b>Correo:</b> ".$email."</p>
                        <p><b>Servicio:</b> ".$servicio."</p>
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
        $footer = '
            <div class="footer">
            Este mensaje fue generado automáticamente por el sitio web de CREARQ.<br>
            No responda a este correo.
            </div>
        </div>
        </body>
        </html>
        ';

        $body = $header . $contenido . $footer;

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
            /* foreach ($ccList as $cc) {
                $mail->addCC($cc);
            } */
            $mail->Subject = $Subjet;
            $mail->isHTML(true);
            $mail->Body = $body;

            // Enviar correo
            if ($mail->send()) {
                echo '
                <html>
                    <head>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    </head>
                    <body>
                        <script>
                            Swal.fire({
                                title: "Correo enviado",
                                text: "Nos estaremos comunicando con usted en unos momentos.",
                                icon: "success",
                                confirmButtonText: "Aceptar"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "' . Util::baseUrl() . '";
                                }
                            });
                        </script>
                    </body>
                </html>';
                exit;
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
