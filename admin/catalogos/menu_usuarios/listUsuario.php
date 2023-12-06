<h2 class="my-5 mx-5"><?php echo $titulo ?></h2>
<div class="container">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">

        </div>
        <div class="p-2 bd-highlight">

            <a href="index.php?page=nuevoUsuario" class="btn btn-secondary"><i class="fas fa-plus"></i> Nuevo</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido_1</th>
                    <th scope="col">Apellido_2</th>
                    <th scope="col">email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Id_cargo</th>
                </tr>
            </thead>
            <tbody id="datosTabla">
                
            </tbody>
        </table>
    </div>
</div>