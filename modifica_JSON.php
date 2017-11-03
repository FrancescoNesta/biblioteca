<?php include_once 'includes/db_connect.php';

$post = json_decode(file_get_contents("php://input"));
$id = $post->id;

$query="SELECT * FROM utente WHERE utente.id=?";

$bound =array($id);
$stmt= $db-> prepare ($query); //prepara la query
$stmt-> execute($bound); //esegue la query
$num= $stmt-> rowCount();


if($num==1){
    
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $id=$row['id'];
            $nome=$row['nome'];
            $cognome=$row['cognome'];
            $email=$row['email'];
            $telefono=$row['telefono'];
            $data_registrazione=$row['data_registrazione'];
            $data_nascita=$row['data_nascita'];
            $luogo_nascita=$row['luogo_nascita'];
            $sesso=$row['sesso'];
            $citta=$row['citta'];
            $provincia=$row['provincia'];
            $stato=$row['stato'];
            

            
     

        
    
           $dato=array();
           $dato['id']=$id;
           $dato['nome']=$nome;
           $dato['cognome']=$cognome;
           $dato['email']=$email;
           $dato['telefono']=$telefono;
           $dato['data_registrazione']=$data_registrazione;
           $dato['data_nascita']=$data_nascita;
           $dato['luogo_nascita']=$luogo_nascita;
           $dato['sesso']=$sesso;
           $dato['citta']=$citta;
           $dato['provincia']=$provincia;
           $dato['stato']=$stato;
           

      
        header('Content-Type: application/x-json');
        echo json_encode($dato);
        exit;
    }
    else{
        header('Content-Type: application/x-json');
        $dato=array();
        echo json_encode($dato);
        exit;

}
?>

