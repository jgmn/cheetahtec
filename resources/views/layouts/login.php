<!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Inicia sesión</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="username" class="control-label">Usuario</label>
            <small class="text-danger pull-right">El usuario o contraseña no son válidos.</small>
            <input type="text" name="username" class="form-control" placeholder="Teclea el usuario" required>
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Teclea la contraseña" required>
          </div>
          <div class="form-group">
            <input type="checkbox" name="remember" checked> Recuérdame
          </div>
          <div class="form-group">
            <button type="submit" class="form-control button-4">Inicia sesión</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="button-5" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->