(function() {
    
    'use strict';
    window.addEventListener('load', function() {
  
      let forms = document.getElementsByClassName('needs-validation');
      
      let validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  
    let imagesMale = ["../public/img/avatar/chico1.png", "../public/img/avatar/chico2.png", "../public/img/avatar/chico3.png"];
    let imagesFemale = ["../public/img/avatar/chica1.png", "../public/img/avatar/chica2.png", "../public/img/avatar/chica3.png"];
    let indexMale1 = 0, indexMale2 = 0, indexFemale1 = 0, indexFemale2 = 0;
  
    $("#left-p1m").prop("disabled", true);  
    $("#right-p1m").prop("disabled", true); 
    $("#left-p1w").prop("disabled", true); 
    $("#right-p1w").prop("disabled", true); 
  
    $("#left-p2m").prop("disabled", true); 
    $("#right-p2m").prop("disabled", true);
    $("#left-p2w").prop("disabled", true); 
    $("#right-p2w").prop("disabled", true);
    
    $("#avatarMasc1").click(function() {
      $("#left-p1m").prop("disabled", false);  
      $("#right-p1m").prop("disabled", false);
      $("#left-p1w").prop("disabled", true);  
      $("#right-p1w").prop("disabled", true); 
    });
  
    $("#avatarFem1").click(function() {
      $("#left-p1m").prop("disabled", true);  
      $("#right-p1m").prop("disabled", true);
      $("#left-p1w").prop("disabled", false);  
      $("#right-p1w").prop("disabled", false); 
    });
  
    $("#avatarMasc2").click(function() {
      $("#left-p2m").prop("disabled", false);  
      $("#right-p2m").prop("disabled", false);
      $("#left-p2w").prop("disabled", true);  
      $("#right-p2w").prop("disabled", true); 
    });
  
    $("#avatarFem2").click(function() {
      $("#left-p2m").prop("disabled", true);  
      $("#right-p2m").prop("disabled", true);
      $("#left-p2w").prop("disabled", false);  
      $("#right-p2w").prop("disabled", false); 
    });
  
  
    $("#left-p1m").click(function(e) {
      e.preventDefault();
  
      if (indexMale1 > 0) {
        indexMale1 = (indexMale1 - 1);
      } else {
        indexMale1 = 2;
      }
      
      $('#avatarp1m').attr('src', imagesMale[indexMale1]);
    });
  
    $("#right-p1m").click(function(e) {
        e.preventDefault();
  
        indexMale1 = (indexMale1 + 1) % 3;
  
        $('#avatarp1m').attr('src', imagesMale[indexMale1]);
    });
  
    $("#left-p1w").click(function(e) {
        e.preventDefault();
  
        if (indexFemale1 > 0) {
          indexFemale1 = (indexFemale1 - 1);
        } else {
          indexFemale1 = 2;
        }
        
        $('#avatarp1w').attr('src', imagesFemale[indexFemale1]);
    });
  
    $("#right-p1w").click(function(e) {
        e.preventDefault();
  
        indexFemale1 = (indexFemale1 + 1) % 3;
  
        $('#avatarp1w').attr('src', imagesFemale[indexFemale1]);
    });
  
    $("#left-p2m").click(function(e) {
        e.preventDefault();
  
        if (indexMale2 > 0) {
          indexMale2 = (indexMale2 - 1);
        } else {
          indexMale2 = 2;
        }
  
        $('#avatarp2m').attr('src', imagesMale[indexMale2]);
    });
  
    $("#right-p2m").click(function(e) {
        e.preventDefault();
  
        indexMale2 = (indexMale2 + 1) % 3;
  
        $('#avatarp2m').attr('src', imagesMale[indexMale2]);
    });
  
    $("#left-p2w").click(function(e) {
        e.preventDefault();
  
        if (indexFemale2 > 0) {
          indexFemale2 = (indexFemale2 - 1);
        } else {
          indexFemale2 = 2;
        }
        
        $('#avatarp2w').attr('src', imagesFemale[indexFemale2]);
    });
  
    $("#right-p2w").click(function(e) {
        e.preventDefault();
  
        indexFemale2 = (indexFemale2 + 1) % 3;
  
        $('#avatarp2w').attr('src', imagesFemale[indexFemale2]);
    });
  
  })();