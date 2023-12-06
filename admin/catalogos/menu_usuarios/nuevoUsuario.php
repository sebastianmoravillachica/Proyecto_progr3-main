<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmUsuario" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=Usuarios" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Usuario</h2>
            </div>

        </div>
        <div class="form-floating mb-3">

            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="apellido_1" id="apellido_1" placeholder="Apellido_1">
            <label for="apellido_1">Apellido_1</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="apellido_2" id="apellido_2" placeholder="Apellido_2">
            <label for="apellido_2">Apellido_2</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            <label for="costo">Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="passwd" id="passwd" placeholder="Contraseña">
            <label for="passwd">Contraseña</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="id_cargo" id="id_cargo" placeholder="Id_cargo">
            <label for="id_cargo">Id_cargo</label>
        </div>


        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>