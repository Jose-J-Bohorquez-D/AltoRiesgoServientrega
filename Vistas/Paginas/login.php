<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="row text-center d-flex justify-content-center">
                        <h2 class="text-primary"><i class=""></i>Alto Riesgo</h2>
                        <h3 class="text-primary">Su aliado estrategico</h3><br><br><br>
                        <h5>Ingrese a su cuenta</h5>
                    </div>
                </div>
                <form method="post">
                    <div class="form-floating mb-3">
                        <input name="ingLogUsuEmail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Ingresa Tu Correo</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input name="ingLogUsuPwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Ingresar</button>
                <form>
            </div>
            
            <div class="text-center">
                <?php $login =new Ctlr_Usuarios; $login->ingreso_usuario_Ctlr(); ?>
            </div>
            
        </div>
    </div>
</div>
</div>