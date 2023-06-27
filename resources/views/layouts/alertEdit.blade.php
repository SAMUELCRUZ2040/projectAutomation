<div class="alert alert-warning" role="alert" id="confirmationAlert" style="display: none;">
    ¿Está seguro de que desea modificar la categoría?
    <button type="button" class="btn btn-primary" id="confirmButton">Confirmar</button>
    <button type="button" class="btn btn-secondary" id="cancelButton">Cancelar</button>
  </div>
  
  <script>
    document.getElementById('formularios').addEventListener('submit', function(event) {
      event.preventDefault(); // Detiene el envío del formulario
      
      // Mostrar la alerta de confirmación
      document.getElementById('confirmationAlert').style.display = 'block';
    });
    
    document.getElementById('confirmButton').addEventListener('click', function() {
      // Confirmar la modificación y enviar el formulario
      document.getElementById('formularios').submit();
    });
    
    document.getElementById('cancelButton').addEventListener('click', function() {
      // Cancelar la modificación y ocultar la alerta
      document.getElementById('confirmationAlert').style.display = 'none';
    });
  </script>
  