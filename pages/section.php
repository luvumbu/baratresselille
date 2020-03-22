<div id="demo">
	<style type="text/css">

</style>


</div>
<div id="sectionP">

<div id="gauche">


<div class="types">
	<figure>
		<img src="https://i.pinimg.com/564x/b9/77/6f/b9776fff38e5035401f36eb1ebdc29f9.jpg?b=t" id="hommejpg">
		<figcaption><b title="figcaption" >ESPACE HOMME</b></figcaption>
	</figure>
	<figure>
		<img src="https://i.pinimg.com/564x/96/cf/c8/96cfc8a12e7c010b29c9ba4934ee81c6.jpg" id="femmejpg">
		<figcaption><b title="figcaption">ESPACE FEMME</b></figcaption>
	</figure>
	<figure>
		<img src="https://i.pinimg.com/564x/c0/6a/22/c06a22d0bb9b2d7149f16861ab4ada4e.jpg" id="enfantjpg">
		<figcaption><b title="figcaption">ESPACE ENFANT</b></figcaption>
	</figure>
	<figure>
		<img src="images/ongles/IMG-20190720-WA0000.jpg" id="enfantjpg">
		<figcaption><b title="figcaption">Ongles</b></figcaption>
	</figure>
</div>


<div class="ctxt"><a title="ctxt">Bienvenue sur le site  bar a tresse votre salon de coiffure à lille. Bar a tresse est le spécialiste de vos cheveux. de votre look. La beauté naturelle se trouve en chacun de nous, il faut seulement la reconnaître et la libérer.

Certaines études ont démontré qu'une visite chez le coiffeur remontait le moral ! Nous l'avions tous remarqué. Une mine basse, des yeux tristes, un vague à l'âme, une envie de changement, un je-ne-sais-quoi de routine qui nous ennuie, direction : le coiffeur

Notre Salon

Etre créateur de Beauté et de Bien-être est notre vocation profonde: votre visite chez nous doit donc être l’occasion d’un moment de plaisir unique.

L’équipe

Nous proposons à notre clientèle une palette de services variés, une écoute et un conseil professionnels et personnalisés.

Beauté

Nous nous réjouissons de pouvoir vous accueillir dans notre univers. Laissez-vous dorloter par nos experts qui vous prodigueront de nombreux conseils en matière de beauté.</a>

 </div>
</div>



<style type="text/css">
	#tendense img
	{
		width: 300px ;
	}
	#gauche
	{
		/*border-right: 1px solid rgba(0,0,0,0.3) ; 
		margin-right: 10px; */
	}
@media screen and (max-width: 1280px)
{

.types img,img
{

  width: 100%;
}
#gauche
	{
		/*border-right: 1px solid rgba(0,0,0,0) ; 
		margin-right: 10px; */
	}
	.ctxt 
	{
		
		text-align: justify;
	
		width: 80%;
	}	


}
	section 
	{
		margin-top: 100px; 

	}
	section,footer
	{
		
	}
	figure
	{
		text-align: center;
	}
	
</style>
<div id="droite">
	

	<div class="">

		<div id="tendense">
	



	<figure>
		<figcaption><b title="figcaption">TENDANCE COIFFURE</b></figcaption>
		<img src="https://i.pinimg.com/564x/56/93/82/569382d7b6879d6e7f6441460bbc7a35.jpg">
	</figure>
	
</div>


</div>
</div>





<div class="rdv">


<div class="form">
	<form method="POST"><div><img src="https://i.pinimg.com/564x/e8/32/21/e832214fb1339d378a4fa1c8551a17b6.jpg"></div>
		<input type="" name="mail" placeholder="Votre mail ou telephone" onclick="love()"><br/>
		<textarea name="text" placeholder="Votre message"></textarea><br/>
		<button type="submit" name="envoyer" id="envoyer" onclick="invoquer()">Envoyer</button>
	</form>
</div>
<script type="text/javascript">
 
</script>

<?php
include("pages/bdd.php") ;


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
	'mail_user' =>  $_POST["mail"],
	'message' => $_POST["text"]
	));



}
?>

</div>
<script type="text/javascript">

</script>

