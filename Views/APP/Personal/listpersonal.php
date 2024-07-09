<?php
headerAdmin($data);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Persona/</span> Lista Personal</h4>
    <div class="col-xl">
        <div class="card">
            <h5 class="card-header">Lista Personal</h5>
            <div class="table-responsive text-nowrap px-2">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<?php
footerAdmin($data);
?>