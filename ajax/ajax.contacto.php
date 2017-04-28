<?php 
if($_POST){
extract($_POST);
  include '../libs/libmail.php';

  $body = '
    Nuevo mensaje desde formulario de contacto www.malasana.cl<br /><br />
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
          <th>Nombre</th><td>'.$_POST['nombre'].'</td>
        </tr>
        <tr>
          <th>Email</th><td>'.$_POST['email'].'</td>
        </tr>        
        <tr>
          <th>Mensaje</th><td>'.$_POST['mensaje'].'</td>
        </tr>
     </table>        
    ';   

     
    
    $m = new Mail;        
    $m->From( "Contacto Malasana <no-reply@malasana.cl>" );        
    $m->To( 'contacto@malasana.cl' );
    $m->Subject( 'Nuevo contacto desde Malasaña (' . $asunto . ')' );        
    $m->Body($body);
    $m->Priority(3) ;    
    $sended = $m->Send();
    
    if( $sended ){
        echo"OK";
    }
}

?>