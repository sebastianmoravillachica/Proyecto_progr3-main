<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .contact-page {
            min-height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            margin: 0;
        }

        .contact-section {
            position: relative;
            z-index: 3;
            padding-top: 100px;
            /* Aumentado para mover la sección más abajo */
            padding-bottom: 100px;
            /* Aumentado para mover la sección más abajo */
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-section .container {
            max-width: 1080px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .contact-section .contact-form .input-box input[type="submit"] {
            background: #960018;
            color: #FFF;
            border: none;
            cursor: pointer;
        }

        .contact-section .contact-form .input-box input[type="submit"]:hover {
            background: #FFF;
            color: #960018;
        }
    </style>
</head>

<body class="contact-page">
    <section class="contact-section">
        <div class="section-header">
            <div class="container">
                <h2>Contáctanos</h2>
                <p>¿Tienes alguna pregunta o comentario? ¡Contáctanos! Estamos aquí para ayudarte.</p>
                <p>En Saucy Burgers tu retroalimentación es importante para nosotros.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-home"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Dirección</h4>
                            <p>Multiplaza Escazú, C. <br /> San José, San Rafael </p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Teléfono</h4>
                            <p>561-456-2321</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Correo Electrónico</h4>
                            <p>saucyburguer@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="enviar_correo.php" method="post">
                        <h2>Envía un Mensaje</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="nombre">
                            <span>Nombre Completo</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="correo">
                            <span>Correo Electrónico</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name="mensaje"></textarea>
                            <span>Escribe tu Mensaje...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</body>

</html>