$(document).ready(function() {
    $("#yes").change(function() {
        $("#question").after('<div id="check-yes"><div class="form-row justify-content-center"><div class="form-group"><h1 class="display-4" style="font-size: 30px">Si hay algo que NO has entendido, ¿por qué crees que ha podido ser?</h1><br><textarea name="answerbody" id="answerbody" cols="124" rows="5" placeholder="Escribe aqui tu respuesta" required></textarea></div></div><br><div class="form-row justify-content-center"><h1 class="display-4" style="font-size: 30px">¿Crees que esto que no entiendes es importante para entender el resto del texto?</h1></div><br><div class="form-row justify-content-center"><div class="form-check col col-lg-2"><label><input class="form-check-input" type="radio" name="answer2" id="yes2" value="1" required><img class="mb-4 selectable" src="../public/img/check.png" alt="" width="128px" height="128px"><br><h5 style="color: green;">Sí</h5></label></div><div class="form-check col col-lg-2"><label><input class="form-check-input" type="radio" name="answer2" id="no2" value="0"><img class="mb-4 selectable" src="../public/img/cross.png" alt="" width="128px" height="128px"><br><h5 style="color: red;">No</h5></label></div></div></div>');
    });

    $("#no").change(function() {
        $("#check-yes").remove();
    });
});