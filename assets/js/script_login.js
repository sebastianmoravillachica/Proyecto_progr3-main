const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


function validarFormulario() {
    var nombre = document.getElementById('nombre').value.trim();
    var apellido1 = document.getElementById('apellido_1').value.trim();
    var apellido2 = document.getElementById('apellido_2').value.trim();
    var email = document.getElementById('email').value.trim();
    var passwd = document.getElementById('passwd').value.trim();

    if (nombre === '' || apellido1 === '' || apellido2 === '' || email === '' || passwd === '') {
        alert('Por favor, complete todos los campos.');
        return false; // Detiene el envío del formulario si hay campos vacíos
    }

    return true; // Permite el envío del formulario si todos los campos están llenos
}
