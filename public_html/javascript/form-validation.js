// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');
  
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        var pass = forms[0][7].value;
        var repass = forms[0][8].value;
        
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        if (pass !== repass) {
          var alertpass = document.getElementById('repass-invalid')
          alertpass.style.display = 'block'
          var inputrepass = document.getElementById('repass')
          inputrepass.style.borderColor = "black"
          inputrepass.style.backgroundImage = "none"
          console.log(inputrepass)
          event.preventDefault()
          event.stopPropagation()
        }
        
        form.classList.add('was-validated')
      }, false)
    })
})()
