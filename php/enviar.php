<?php
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $mensaje = $_POST["mensaje"];

   $destinatario = "dvdrmrrdz@gmail.com";
   $asunto = "Mensaje de prueba enviado desde PHP";
   $cuerpo = '
   <html>
      <head>
         <title>Prueba de envío de mensaje</title>
      </head>
      <body>
         <h1>Solicitud de contacto desde correo de prueba</h1>
         <p>
            Contacto: '.$nombre.' - '.$asunto.'<br>
            Mensaje: '.$mensaje.'
         </p>
      </body>
   </html>
   ';

   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=UTF8\r\n";
   $headers .= "FROM: $nombre <$correo>\r\n";
   mail($destinatario, $asunto, $cuerpo, $headers);

   echo "Correo enviado";
   ?>

   <a href="../index.html">Volver al inicio</a>