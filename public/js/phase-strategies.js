// Hasta que se cargue por completo el archivo
window.addEventListener("load", inicio);

// Funcion principal
function inicio(){
    document.getElementById("eliminar").addEventListener("click", eliminarCampo);
    document.getElementById("agregar").addEventListener("click", agregarCampo);
}

// Contador de preguntas adicionales
var questionCount = 3;

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
    campoText.setAttribute("placeholder","Estrategia " + questionCount);
    // Agregar name dinamico al elemento input
    campoText.setAttribute("name","e" + questionCount);
    // Agregar required al elemento input
    campoText.required = true;

    // Crear divs adicionales para validacion
    const divValid = document.createElement("div");
    divValid.className = "valid-feedback";
    divValid.innerHTML = "Correcto";

    const divInvalid = document.createElement("div");
    divInvalid.className = "invalid-feedback";
    divInvalid.innerHTML = "Falta este campo";

    // Agregar el elemento input al div
    div.appendChild(campoText);
    div.appendChild(divValid);
    div.appendChild(divInvalid);
    

    //Agregar el div a la forma
    var cont = document.getElementById("strategies-form");

    // Obtener el boton submit, para agregar los campos arriba de el
    const sbmt = document.getElementById("enviar");

    // Agregar el campo en el lugar correcto
    cont.insertBefore(div, sbmt);
}

function eliminarCampo(){
    if (questionCount > 3) {
        // Obtener ultimo elemento input
        var element = document.getElementById("" + questionCount);
        element.parentNode.removeChild(element);

        questionCount --;
        console.log(questionCount);
    }
}