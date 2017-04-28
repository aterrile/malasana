<?php 
if($_POST){
  include '../libs/libmail.php';

  $body = '
    Nueva inscripcion a newsletter desde www.malasana.cl<br /><br />
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
          <th>Email</th><td>'.$_POST['email_news'].'</td>
        </tr>                
     </table>        
    ';   

     
    
    $m = new Mail;        
    $m->From( "Newsletter Malasana <no-reply@malasana.cl>" );        
    $m->To( 'info@malasana.cl' );
    $m->Subject( 'Nueva inscripcion a newsletter desde Malasaña' );        
    $m->Body($body);
    $m->Priority(3) ;    
    $sended = $m->Send();
    
    if( $sended ){
        echo"OK";
    }
    
}

?>