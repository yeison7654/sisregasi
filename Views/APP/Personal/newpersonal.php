<?php
headerAdmin($data);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Basic Layout</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nombres</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Apellidos</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Estado Civil</label>
                        <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Tipo Personal</label>
                        <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Celular</label>
                        <input type="number" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Codigo Personal</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Ocupacion</label>
                        <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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