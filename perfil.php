
    <link rel="stylesheet" href="assets/css/perfil.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Configuración de la cuenta
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Perfil</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Cambiar contraseña </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Método de pago</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://cdn.icon-icons.com/icons2/3001/PNG/512/default_filetype_file_empty_document_icon_187718.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Cambiar imagen
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reiniciar</button>
                                    <div class="text-light small mt-1">JPG, GIF o PNG. Maximo 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Número de teléfono</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Contraseña actual</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nueva contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repetir nueva contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Número de tarjeta</label>
                                    <textarea class="form-control"
                                        rows="1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Código de seguridad</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tipo de tarjeta</label>
                                    <select class="custom-select">
                                        <option>Visa</option>
                                        <option selected>MasterCard</option>
                                        <option>American Express</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Dirección de facturación</h6>
                                <div class="form-group">
                                    <label class="form-label">Calle</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" value>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
        <button type="button" class="btn btn-primary" id="saveChangesButton">Guardar cambios</button>&nbsp;
            <button type="button" class="btn btn-default" id="backButton">Volver atrás</button>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>



   <script type="text/javascript">
      document.getElementById('backButton').addEventListener('click', function() {
         window.location.href = 'index.html'; 
      });

      document.getElementById('saveChangesButton').addEventListener('click', function() {
    // Obtener valores de los campos
      /*
      var nombre = document.getElementById('nombre').value;
      var apellidos = document.getElementById('apellidos').value;
      var email = document.getElementById('email').value;
      var telefono = document.getElementById('telefono').value;

      $.ajax({
         type: 'POST',
         url: 'actualizar_perfil.php', 
         data: {
            nombre: nombre,
            apellidos: apellidos,
            email: email,
            telefono: telefono
         },
         success: function(response) {
            // Manejar la respuesta
            console.log(response);
         }
      });
      */
    });
</script>
</body>
</html>