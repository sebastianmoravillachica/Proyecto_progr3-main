cargarTabla();

function cargarTabla() {

    $.ajax({
        type: "get",
        url: `http://localhost/Proyecto_progr3-main/apirest/src/public/getusuario`,

        beforeSend: function () {
            //document.querySelector(".cargando").style.visibility="visible";

        },
        success: function (res) {
            res=JSON.parse(res);
            let filas = "";
            res.forEach(p => {
                filas += `
                <tr>
                    <td scope="col">${p.id}</td>
                    <td scope="col">${p.nombre}</td>
                    <td scope="col">${p.apellido_1}</td>
                    <td scope="col">${p.apellido_2}</td>
                    <td scope="col">${p.email}</td>
                    <td scope="col">${p.passwd}</td>
                    <td scope="col">${p.id_cargo}</td>
                    <td scope="col">
                        <button class=" me-3 btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                
                `
            });
            document.querySelector("#datosTabla").innerHTML = filas
        },
        error: function (xhr) {
            alert("Error al procesar la petición");
            console.log(xhr.statusText + xhr.responseText);
        },
        complete: function () {
            //document.querySelector(".cargando").style.visibility="hidden";
        }
    });
}

//crear eventos a nodos dinamicos
//definir un eventlister al padre de los nodos dinamicos
document.querySelector("#datosTabla").addEventListener("click", (e) => {
    //discriminar los nodos a aplicar el evento
    if (e.target.classList.contains("btn-outline-warning") ||
        e.target.classList.contains("fa-pen-to-square")) {
        {
            //generar variables de sesion
            sessionStorage.setItem("id", e.target.closest("tr").childNodes[1].innerHTML)
            sessionStorage.setItem("nombre", e.target.closest("tr").childNodes[3].innerHTML)
            sessionStorage.setItem("apellido_1", e.target.closest("tr").childNodes[5].innerHTML)
            sessionStorage.setItem("apellido_2", e.target.closest("tr").childNodes[7].innerHTML)
            sessionStorage.setItem("email", e.target.closest("tr").childNodes[9].innerHTML)
            sessionStorage.setItem("passwd", e.target.closest("tr").childNodes[11].innerHTML)
            sessionStorage.setItem("id_cargo", e.target.closest("tr").childNodes[13].innerHTML)


            location.href = "index.php?page=nuevoUsuario";
        }
    } else if (e.target.classList.contains("btn-outline-danger") ||
        e.target.classList.contains("fa-trash")) {
        //alert("clic borrar");
        eliminar(e.target.closest("tr").childNodes[1].innerHTML)
        e.target.closest("tr").parent(e.target.closest("tr"));
    }
})

function modificar(id) {

}


function eliminar(id) {
    //console.log(id)
    Swal.fire({
        title: "¿Esta seguro que desea eliminar este Registro?",
        text: "Los datos no se podrán recuperar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Si, Borrar"
    }).then((result) => {
        if (result.isConfirmed) {
            if (procesarBorrado(id)) {
                Swal.fire({
                    title: "¡Mensaje!",
                    text: "Datos Borrados correctamente",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "¡Mensaje!",
                    text: "Error al procesar la petición",
                    icon: "error"
                });
            }
        }
    });
}

function procesarBorrado(id) {
    resultado = 1
    console.log(id)
    $.ajax({
        type: "delete",
        url: `http://localhost/Proyecto_progr3-main/apirest/src/public/delusuario/${id}`,
        beforeSend: function () {
            //document.querySelector(".cargando").style.visibility="visible";

        },
        success: function (res) {
            console.log(res)
            result = 1;
        },
        error: function (xhr) {
            console.log("Error al procesar la petición");
            console.log(xhr.statusText + xhr.responseText);

        },
        complete: function () {
            //document.querySelector(".cargando").style.visibility="hidden";
            return resultado
        }
    });
}