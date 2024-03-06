<?php
include('header.php');
include('cartucho.php');
?>

<section class="CajitaSecciones">
    <div>
        <ul">
            <li><a href="tintas.php?nom=tb">Solid Ink Black</a></li>
            <li><a href="tintas.php?nom=tbe">Solid Ink Blue</a></li>
            <li><a href="tintas.php?nom=to">Solid Ink Orange</a></li>
            <li><a href="tintas.php?nom=tr">Solid Ink Red</a></li>
            <li><a href="tintas.php?nom=ty">Solid Ink Yellow</a></li>
        </ul>
    </div>
</section>



<?php 
$nombre = "";
$contenido = "";
$info = "";
$img = "";

if (isset($_GET['nom'])) {
    switch ($_GET['nom']) {
        case 'tb':
            $nombre = 'Solid Ink Black';
            $contenido = 'Tinta de 1 fl oz.';
            $info = 'Solid Ink es la mejor tinta para tatuar del mercado, estamos seguros de eso. Hechas por el tatuador Federico Ferroni (Miami Ink). Comprometido con hacer los colores más sólidos posibles y en utilizar ingredientes naturales.';
            $img = 'imagis/black.png'; 
            break;
        case 'tbe':
            $nombre = 'Solid Ink Blue';
            $contenido = 'Tinta de 1 fl oz.';
            $info = 'Solid Ink es la mejor tinta para tatuar del mercado, estamos seguros de eso. Hechas por el tatuador Federico Ferroni (Miami Ink). Comprometido con hacer los colores más sólidos posibles y en utilizar ingredientes naturales.';
            $img = 'imagis/blue.png'; 
            break;
        case 'to':
            $nombre = 'Solid Ink Orange';
            $contenido = 'Tinta de 1 fl oz.';
            $info = 'Solid Ink es la mejor tinta para tatuar del mercado, estamos seguros de eso. Hechas por el tatuador Federico Ferroni (Miami Ink). Comprometido con hacer los colores más sólidos posibles y en utilizar ingredientes naturales.';
            $img = 'imagis/orange.png'; 
            break;     
        case 'tr':
            $nombre = 'Solid Ink Red';
            $contenido = 'Tinta de 1 fl oz.';
            $info = 'Solid Ink es la mejor tinta para tatuar del mercado, estamos seguros de eso. Hechas por el tatuador Federico Ferroni (Miami Ink). Comprometido con hacer los colores más sólidos posibles y en utilizar ingredientes naturales.';
            $img = 'imagis/red.png'; 
            break;  
        case 'ty':
            $nombre = 'Solid Ink Yellow';
            $contenido = 'Tinta de 1 fl oz.';
            $info = 'Solid Ink es la mejor tinta para tatuar del mercado, estamos seguros de eso. Hechas por el tatuador Federico Ferroni (Miami Ink). Comprometido con hacer los colores más sólidos posibles y en utilizar ingredientes naturales.';
            $img = 'imagis/yellow.png'; 
            break;  
         }
}
?>

<div class="secciónTinta">

    <h2> <?php echo $nombre; ?></h2>
    <p> <?php echo $contenido; ?></p>
    <p> <?php echo $info; ?></p>
  
    <div class="Imagenes_tintas">
        <img src=" <?php echo $img ?>" alt="">
    </div>

</div>

<?php
include('footer.php');
?>