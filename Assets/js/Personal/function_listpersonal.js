let tableData;
document.addEventListener(
    "DOMContentLoaded",
    function () {
        listaData();
        //damos un tiempo de carga para que se añadan los eventos a los botones
        setTimeout(() => {
            deleteData();
        }, 1000);
    },
    false
);

//End funciones de load
function listaData() {
    tableData = $("#table").DataTable({
        aProcessing: true,
        aServerSide: true,
        ajax: {
            url: base_url + "/personal/getPersonal",
            dataSrc: ""
        },
        columns: [
            { data: "numero" },
            { data: "nombre" },
            { data: "apellidos" },
            { data: "estado" },
            { data: "acciones" }],
        responsive: true,
        iDisplayLength: 10,
        order: [[0, "asc"]]

    })
}
//funcion de eliminar registro
function deleteData() {
    let arrBtnDelete = document.querySelectorAll(".btn-delete")
    arrBtnDelete.forEach(element => {
        element.addEventListener("click", (e) => {
            e.preventDefault()
            let attrFullName = element.getAttribute("data-fullname");
            let attrId = element.getAttribute("data-id");
            let url = base_url + "/Personal/deletePersonal";
            //creamos un formulario
            let data = new FormData();
            //asignamos un input
            data.append("idPersonal", attrId);
            //configuracion de envio
            let encabezados = new Headers();
            let config = {
                method: "POST",
                headers: encabezados,
                mode: "cors",
                cache: "no-cache",
                body: data,
            };

            Swal.fire({
                title: "¿Estas seguro?",
                text: "Estas por eliminar el registro : " + attrFullName,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro!"
            }).then((result) => {
                if (result.isConfirmed) {
                    try {
                        fetch(url, config)
                            .then((Response) => Response.json())
                            .then((response) => {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                });
                            })
                    } catch (error) {
                        console.log("Ocurrio un error inesperado " + error)
                    }
                }
            });
        })
    });
}