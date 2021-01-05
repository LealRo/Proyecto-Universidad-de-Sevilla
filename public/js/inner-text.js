function getValue(){
    var selectedValue = document.getElementById("cuento").value;    /*Obtiene el numero de cuento seleccionado */
    const insertPdf = document.getElementById("muestraCuento");     /*Obtener referencia al div del modal */

    if(selectedValue == 1){ /*Verifica cual cuento fue seleccionado para insertar el pdf en el modal */
        insertPdf.innerHTML = ('<iframe src="../public/files/dinosaurios.pdf#toolbar=0&navpanes=0&scrollbar=0" frameborder="0"></iframe>');
    }else{
        insertPdf.innerHTML = ('<p>Sorry crack</p>')
    }

    console.log(selectedValue);
}