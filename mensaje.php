<!DOCTYPE html>
<html>
   <head>
    <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php 
         require_once'menu.php';
         ?>
      <div class="row-fluid">
         <div id="contactos-wrap" >
            <div class="row-fluid">
               <div class="span12">
                  <div class="contBanner"><img class="banner" src="asset/img/banners/contactos/Banner-Contactos.jpg" alt=""></div>
               </div>
            </div>
            <div class="row-fluid">
               
               <div class="textocentrado mensaje">¡Gracias!</div>
            </div>
            <div class="row-fluid">
               <div class="span10 offset1">
                  <div class="subtitulo textocentrado sangria50">Hemos recibido su solicitud, un representante de Cervecería Nacional se pondrá en contacto</div>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span10 offset1 textocentrado">
                  <div class="backtohome"><button class="btn-cn" type="submit">VER MAS </button></div>
               </div>
            </div>
           
           
         </div>
      </div>
      <footer>
         <?php require_once'footer.php'; ?>
      </footer>
      <script type="text/javascript">
         $(document).ready(function(){
             $(".acceso").hover(function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeIn('200');
                 $(this).find('.iconocontacto').stop(true, true).fadeIn('200');
             }, function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeOut('200');
                 $(this).find('.iconocontacto').stop(true, true).fadeOut('200');
             });
         });
      </script>
   </body>
</html>