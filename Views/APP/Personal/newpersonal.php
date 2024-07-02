<?php
headerAdmin($data);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Persona/</span> Nuevo Personal</h4>
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Registro Personal</h5>
                <small class="text-muted float-end">Formulario de registro de personal</small>
            </div>
            <div class="px-3">
                <div id="alert" class="alert alert-success alert-dismissible " role="alert">
                    <p class="alert-text">contenido de la alerta</p>
                    <button type="button" class="btn-close"></button>
                </div>
            </div>
            <div class="card-body">
                <form id="formSave" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label" for="txtName">Nombres</label>
                        <input type="text" required name="txtName" class="form-control" id="txtName" placeholder="John Doe" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtFullName">Apellidos</label>
                        <input type="text" required name="txtFullName" class="form-control" id="txtFullName" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="cbxEstadoCivil" class="form-label">Estado Civil</label>
                        <select name="cbxEstadoCivil" id="cbxEstadoCivil" class="form-select">
                            <option selected disabled>Selecciona un elemento</option>
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Casado/a">Casado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
                            <option value="Divorsiado/a">Divorsiado/a</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtFechaNacimiento">Fecha Nacimiento</label>
                        <input type="date" required name="txtFechaNacimiento" class="form-control" id="txtFechaNacimiento" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="cbxTipoPersonal" class="form-label">Tipo Personal</label>
                        <select name="cbxTipoPersonal" id="cbxTipoPersonal" class="form-select">
                            <option selected disabled>Selecciona un elemento</option>
                            <?php
                            $cadena = "";
                            foreach ($data["page_tipopersonal"]  as $key => $value) {
                                $cadena .= '<option value="' . $value['idTipoPersonal'] . '">' . $value['tipopersonal'] . '</option>';
                            }
                            echo $cadena;
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtPhone">Celular</label>
                        <input type="number" required name="txtPhone" class="form-control" id="txtPhone" placeholder="999 999 999">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtCodigo">Codigo Personal</label>
                        <input type="text" required name="txtCodigo" class="form-control" id="txtCodigo" placeholder="Ejem: ABC-123456">
                    </div>
                    <div class="mb-3">
                        <label for="cbxOcupacion" class="form-label">Ocupacion</label>
                        <select name="cbxOcupacion" id="cbxOcupacion" class="form-select">
                            <option selected disabled>Selecciona un elemento</option>
                            <?php
                            $cadena = "";
                            foreach ($data['page_ocupacion'] as $key => $value) {
                                $cadena .= '<option value="' . $value['idOcupacion'] . '">' . $value['ocupacion'] . '</option>';
                            }
                            echo $cadena;
                            ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<?php
footerAdmin($data);
?>