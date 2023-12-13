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
                            href="#account-general"  onclick="activeTab = 'account-general'">Perfil</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password"  onclick="activeTab = 'account-change-password'" >Cambiar contraseña </a>
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
                                <div class="form-group" id= "actualizarDatosForm">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control mb-1" value="" id="editNombre">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Primer Apellido</label>
                                    <input type="text" class="form-control" value="" id="editPrimerApellido">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Segundo Apellido</label>
                                    <input type="text" class="form-control" value="" id="editSegundoApellido">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control mb-1" value="" id="editEmail">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="account-change-password" >
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Nueva contraseña</label>
                                    <input type="password" id="editPass"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repetir nueva contraseña</label>
                                    <input type="password" id="editConfirmPass" class="form-control">
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
   var activeTab = 'account-general';

document.getElementById('backButton').addEventListener('click', function() {
    window.location.href = 'index.html'; 
});

document.getElementById('saveChangesButton').addEventListener('click', function() {
    if (activeTab === 'account-general') {
        var datosActualizados = "nombre=" + $('#editNombre').val() + "&apellido_1=" + $('#editPrimerApellido').val() + "&apellido_2=" + $('#editSegundoApellido').val() + "&email=" + $('#editEmail').val() +  "&id=1";

        $.ajax({
            type: 'put',
            url: `apirest/src/public//updusuario?${datosActualizados}`, 
            success: function(response) {
                // Manejar la respuesta
                console.log(response);
            }
        });
    } else {
        if ($('#editPass').val() === $('#editConfirmPass').val()) {
            var contraseña = $('#editPass').val();

            $.ajax({
                type: 'put',
                url: `apirest/src/public//updusuario?id=1&password=${contraseña}`, 
                success: function(response) {
                    // Manejar la respuesta
                    console.log(response);
                }
            }); 
        } else {
            alert("Las contraseñas no coinciden");
        }
    }
});

</script>
</body>
</html>
