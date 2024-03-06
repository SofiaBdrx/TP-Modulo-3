
<?php
include('header.php');
include('cartucho.php');
?>

    
<section class="infocartuchos">
    <div class="secciónCartuchos"> 
        <h3 class="textCar"> ¡Elegi tus Cartuchos! 
        </h3>
      
        <div class="Imagenes_Cartuchos">
           <a href="./imagis/cartu.png" data-lightbox="Acercamiento" data-title="Elegi tu tamaño" alt="CartuchoCartu">
               <img src="imagis/cartu.png" alt="Cartuch0" class="img-chica">
          </a>
           <a href="./imagis/cartu1.png" data-lightbox="Acercamiento" data-title="Sistema de membrana"  alt="CartuchoUno">
               <img src="./imagis/cartu1.png" alt="Cartuch0" class="img-chica">
          </a>
           <a href="./imagis/car2.png" data-lightbox="Acercamiento" data-title="Variedad de medidas"  alt="CartuchoDos">
               <img src="./imagis/car2.png" alt="Cartuch0" class="img-chica">
          </a>   
           <a href="./imagis/car3.png" data-lightbox="Acercamiento" data-title="Variedad de medidas"  alt="CartuchoTres">
               <img src="./imagis/car3.png" alt="Cartuch0" class="img-chica">
          </a>
           <a href="./imagis/car4.png" data-lightbox="Acercamiento" data-title="Acercamiento"  alt="CartuchoCua">
               <img src="./imagis/car4.png" alt="Cartuch0" class="img-chica"> 
          </a>              

       </div>
    </div>
    <ul>

    <hr>

    <?php

         foreach ($cartucho as $tamaño => $detalle) {
            echo '<li>';
            echo '<strong> Numero de Aguja:</strong>', $tamaño, '<br>';
            echo '<strong> Marca:</strong>', $detalle ['Marca'] , '<br>';
            echo '<strong> Precio:</strong>', $detalle ['precio'] , '<br>';
            echo '</li>';
            echo '<hr>';
         }

     ?> </ul>


</section>


<?php
include('footer.php');
?>