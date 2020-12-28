<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/phase-questions.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Preguntas</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <h1 class="display-4">A continuación escribe tus preguntas sobre el cuento</h1>
            <hr>
            <br>
            <button type="button" id="agregar" class="btn btn-success"><i class="fas fa-plus-circle"></i> Agregar otra pregunta</button>
            <button type="button" id="eliminar" class="btn btn-secondary"><i class="fas fa-minus-circle"></i> Eliminar ultima pregunta</button>
            <br>
            <br>
            <form action="phase-read.php" method="post" id="preguntasForm">
                <div class="form-group">
                    <input type="text" class="form-control" id="1" name="p1" placeholder="Pregunta 1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="2" name="p2" placeholder="Pregunta 2" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="3" name="p3" placeholder="Pregunta 3" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="4" name="p4" placeholder="Pregunta 4" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="5" name="p5" placeholder="Pregunta 5" autocomplete="off" required>
                </div>
                <button type="submit" id="enviar" class="btn btn-success">Siguiente <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script>
            // Hasta que se cargue por completo el archivo
            window.addEventListener("load", inicio);

            // Funcion principal
            function inicio(){
                document.getElementById("eliminar").addEventListener("click", eliminarCampo);
                document.getElementById("agregar").addEventListener("click", agregarCampo);
            }

            // Contador de preguntas adicionales
            var questionCount = 5;

            function agregarCampo(){
                // Incrementar contador de inputs agregados
                questionCount ++;
                console.log(questionCount);

                // Crear div de bootstrap forms
                const div = document.createElement("div");
                div.className = "form-group";

                //Crear elemento input
                var campoText = document.createElement("input");

                //Agregar clase que funcione con bootstrap
                campoText.setAttribute("class","form-control");
                // Agregar id dinamico al elemento input
                campoText.setAttribute("id","" + questionCount);
                // Agregar placeholder dinamico al elemento input
                campoText.setAttribute("placeholder","Pregunta " + questionCount);
                // Agregar name dinamico al elemento input
                campoText.setAttribute("name","p" + questionCount);
                // Agregar name dinamico al elemento input
                campoText.setAttribute("autocomplete","off");
                // Agregar required al elemento input
                campoText.required = true;

                // Agregar el elemento input al div
                div.appendChild(campoText);

                //Agregar el div a la forma
                var cont = document.getElementById("preguntasForm");

                // Obtener el boton submit, para agregar los campos arriba de el
                const sbmt = document.getElementById("enviar");

                // Agregar el campo en el lugar correcto
                cont.insertBefore(div, sbmt);
            }

            function eliminarCampo(){
                if (questionCount > 5) {
                    // Obtener ultimo elemento input
                    var element = document.getElementById("" + questionCount);
                    element.parentNode.removeChild(element);

                    questionCount --;
                    console.log(questionCount);
                }
            }
        </script>
    </body>
</html>