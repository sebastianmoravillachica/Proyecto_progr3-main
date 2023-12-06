<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmMenu" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">
    <div class="d-flex justify-content-center bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <a href="index.php?page=Menu" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="me-auto p-2 bd-highlight ">
            <h2>Catálogo Menú</h2>
        </div>

    </div>
    <div class="form-floating mb-3">

        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        <label for="nombre">Nombre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
        <label for="tipo">Tipo</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duracion">
        <label for="duracion">Duracion</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="costo" id="costo" placeholder="Costo">
        <label for="costo">Costo</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion">
        <label for="descripcion">Descripción</label>
    </div>
    

    <div class="mb-3">
        <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
        <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
    </div>
</form>