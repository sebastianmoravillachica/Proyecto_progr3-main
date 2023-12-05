<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Enlace al CDN de Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Enlace al archivo CSS personalizado -->
   <link rel="stylesheet" href="assets/css/compra.css">

</head>
<body>
   

<!-- Comienza la sección de pedido -->

<section class="order" id="order">

   <h1 class="heading">Finalizar compra</h1>

   <form action="" method="post">


      <div class="flex">
         <div class="inputBox">
            <span>Tu nombre </span>
            <input type="text" name="name" class="box" required placeholder="Ingresa tu nombre" maxlength="20">
         </div>
         <div class="inputBox">
            <span>Tu número </span>
            <input type="number" name="number" class="box" required placeholder="Ingresa tu número" min="0">
         </div>
         <div class="inputBox">
            <span>Método de pago</span>
            <select name="method" class="box">
               <option value="cash on delivery">Contra entrega</option>
               <option value="credit card">Tarjeta de crédito</option>
               <option value="paypal">PayPal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Dirección línea 01 </span>
            <input type="text" name="flat" class="box" required placeholder="Ej. Número de casa" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Dirección línea 02</span>
            <input type="text" name="street" class="box" required placeholder="Ej. Nombre de la calle" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Canton</span>
            <input type="text" name="street" class="box" required placeholder="Ej. Vasquez de Coronado" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Provincia</span>
            <input type="text" name="street" class="box" required placeholder="Ej. San José" maxlength="50">
         </div>

         <div class="inputBox">
            <span>Especificaciones extra</span>
            <input type="text" name="street" class="box" required placeholder="Ej. Al lado del supermercado" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Dirección línea 02 </span>
            <input type="text" name="street" class="box" required placeholder="Ej. Nombre de la calle" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Código postal </span>
            <input type="number" name="pin_code" class="box" required placeholder="Ej. 123456" min="0">
         </div>
      </div>

      <input type="submit" value="Ordenar ahora" class="btn" name="order">

   </form>

</section>


<!-- Enlace al archivo JS personalizado -->
<script src="assets/js/compra.js"></script>

</body>
</html>
