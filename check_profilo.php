<?php include_once 'includes/db_connect.php';

$post = json_decode(file_get_contents("php://input"));
$id1= $post->id;
$nome = $post->nome;
$cognome = $post->cognome;
$email = $post->email;
$password = $post->password;
$telefono = $post->telefono;
$nascita = $post->nascita;
$luogo = $post->luogo;

$citta = $post->citta;
$provincia = $post->provincia;
$stato = $post->stato;



$query="UPDATE utente SET 
nome=?,
cognome=?,
email=?,
password=?,
telefono=?,
data_nascita=?,
luogo_nascita=?,
citta=?,
provincia=?,
stato=?
WHERE id=?";


$bound =array($nome,$cognome,$email,$password,$telefono,$nascita,$luogo,$citta,$provincia ,$stato, $id1);

$stmt= $db-> prepare ($query);          //prepara la query
$stmt-> execute($bound);                //eseguisce la query
$num= $stmt-> rowCount();
echo $num;
if($num==1){

    header("Location: protetta.php");
    }
    
    else{
    echo 'ERRORE';
    }




?>