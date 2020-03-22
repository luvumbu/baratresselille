
<script type="text/javascript">
 
</script>

<?php
$localhost = "localhost" ; 
$dbname ="coiffeur"  ; 
$user ="root" ; 
$password ="root" ; 
$basse ="rdv" ; 
$mail_user ="cool" ; 
$message ="cool" ; 


if(isset($_POST["envoyer"]))
{
	try
{
	$bdd = new PDO('mysql:host='.$localhost.';dbname='.$dbname.';charset=utf8', $user, $password );
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO '.$basse.'(mail_user, message) VALUES(:mail_user, :message)');
$req->execute(array(
	'mail_user' => $mail_user,
	'message' => $message
	));
echo $_POST["text"] ;
echo 'Le jeu a bien été ajouté  eeee!';
}
?>


<style type="text/css">
	#gauche, #droite ,.intro
	{
		display: none;
	}
	.form
	{
		width: 80% ; 
		margin: auto;
		text-align: center;
	}
	input , textarea , button
	{
		width: 300px; 
		text-align: center;
		margin-bottom: 15px; 
		}
	 textarea
	 {
	 	height: 250px; 
	 }
.rdv
{
	display: block;
}
	

</style>
*/
?>