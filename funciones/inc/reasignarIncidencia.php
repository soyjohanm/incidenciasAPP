<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
<form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <h2 class="left">ID de incidencia</h2><br>
  <div class="input-field col s5">
    <select>
      <option value="" disabled selected>Selecciona una opción</option>
      <option value="1">Opción 1</option>
      <option value="2">Opción 2</option>
      <option value="3">Opción 3</option>
    </select>
    <label>Desplegable empleados</label>
  </div>
  <div class="input-field col s12">
    <textarea class="materialize-textarea" name="comentario"></textarea>
    <label for="comentario">Comentarios</label>
  </div><br>
  <center>
    <div class="row">
      <button type="submit" class="col s12 btn btn-large waves-effect">Enviar</button>
    </div>
  </center>
</form>
