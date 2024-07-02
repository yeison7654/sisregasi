document.addEventListener(
    "DOMContentLoaded",
    function () {
        //damos un tiempo de carga para que se añadan los eventos a los botones
        setTimeout(() => {
            saveData()
        }, 1000);
    },
    false
);


function saveData() {
    if (document.querySelector("#formSave")) {
        let formSave = document.querySelector("#formSave");
        formSave.addEventListener("submit", (event) => {
            event.preventDefault();
            let data = new FormData(formSave);
            let encabezados = new Headers();
            let config = {
                method: "POST",
                headers: encabezados,
                mode: "cors",
                cache: "no-cache",
                body: data,
            };
            let url = base_url + "/Personal/savePersonal";
            try {
                fetch(url, config)
                    .then((Response) => Response.json())
                    .then((response) => {
                        let msj = document.querySelector("#alert");
                        let msjText = document.querySelector(".alert-text");
                        if (msj.classList.contains("d-none")) {
                            msj.classList.remove("d-none")
                        }
                        if (response.status) {
                            if (msj.classList.contains("alert-danger")) {
                                msj.classList.replace("alert-danger", response.type);
                            }
                            msjText.innerHTML = response.text
                        } else {
                            if (msj.classList.contains("alert-success")) {
                                msj.classList.replace("alert-success", response.type);
                            }
                            msjText.innerHTML = response.text
                        }
                    })
            } catch (error) {
                console.log(error)

            }
        });
    }
}