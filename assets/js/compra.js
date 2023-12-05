document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");
 
    form.addEventListener("submit", function (event) {
       event.preventDefault(); // Evitar que el formulario se envíe de inmediato
 
       // Verificar si todos los campos están llenos
       var allFieldsFilled = Array.from(form.elements).every(function (field) {
          return field.tagName !== "BUTTON" && field.value.trim() !== "";
       });
 
       if (allFieldsFilled) {
          // Si todos los campos están llenos, muestra el mensaje de agradecimiento y redirige al index
          alert("Gracias por su compra");
          window.location.href = "index.html"; // Reemplaza "index.html" con la ruta de tu página principal
       } else {
          // Si falta algún campo, puedes mostrar un mensaje de error o realizar otra acción
          alert("Por favor, complete todos los campos antes de ordenar");
       }
    });
 });
 