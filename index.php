<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- // icono de pagina -->
    <link rel="icon" href="http://devcar0520-001-site1.etempurl.com/logo-bms.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>CHATBOT - PROYECTO FINAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/app.css">
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <h1 class="mb-3">Bienvenido a tu Asistente Chatbot</h1>
                    <p class="lead">Aquí podrás resolver tus consultas rápidas sobre temas académicos,
                        especialmente en el proceso de matrícula.
                    </p>
                </div>

                <p>
                    <strong>¿Qué deseas saber?</strong>
                </p>

                <div class="card">
                    <div class="card-header">
                        Períodos de inscripción
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Documentos necesarios para la matrícula
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Pago de matrícula en línea
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Problemas con la inscripción de cursos
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Fechas de finalización de clases
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Fechas de exámenes finales
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Apertura de bloques de curso
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Cantidad máxima de créditos por periodo
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Calendario académico
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Requisitos para llevar un número mayor de créditos
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Cursos de inglés en periodos regulares
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Mínimo de créditos para pago por créditos
                    </div>
                </div>
            </div>
        </div>
    </div>
    <df-messenger intent="WELCOME" chat-title="USILIOBOT" chat-icon="./logo.ico" agent-id="0226d9d8-6a18-4493-8098-5f4fc2315625" language-code="es"></df-messenger>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./app/app.js"></script>