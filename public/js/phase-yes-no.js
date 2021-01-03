$(document).ready(function () {
    $("#yes").change(function () {
        $("#form-yes-no").submit();
    });
    
    $("#no").change(function () {
        $("#form-yes-no").submit();
    });
});