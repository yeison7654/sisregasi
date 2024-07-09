let tableData;
document.addEventListener(
    "DOMContentLoaded",
    function () {
        //damos un tiempo de carga para que se añadan los eventos a los botones
        setTimeout(() => {
            listaData();
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