<?php
include('header.php');
?>

<section>
    <div class="contactodiv">
        <h1 class="textoContacto">Realiza tu pedido por medio del formulario 👇</h1>
    </div>
</section>

<section class="contacto_contenido">
        <form action="enviar_consulta.php" method="post">
            <label for="Nombre">Nombre</label>
            <input type="text" name='nombre' class="contacto_input">
            
            <label for="Apellido">Apellido</label>
            <input type="text" name='apellido' class="contacto_input">
           
            <label for="Correo">Correo</label>
            <input type="text" name='correo' class="contacto_input">

            <label for="Mensaje">Detallanos tu pedido</label>
            <textarea type="Mensaje" name='Mensaje' class="contacto_input"
            cols="30" rows="10"> </textarea>

            <input type="submit" value="Solicitar pedido">
        </form> </div>
     
  <?php
  if(isset($_GET ['ok'])){
   echo "<h3> Su pedido ha sido concretado con exito</h3>";
  }
   ?>

</section>

<?php
include('footer.php');
?>