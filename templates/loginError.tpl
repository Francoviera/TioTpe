{include 'templates/header.tpl'}
<div class="container margen contenedor">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <form action="login" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                    <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h3>{$error}</h3>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}