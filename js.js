function femmes()
	{
		document.getElementById('hommes').style.display="none" ; 
		document.getElementsByClassName("hommet")[0].style.borderBottom="0" ; 
		document.getElementsByClassName("femmet")[0].style.borderBottom="3px solid black" ; 
		document.getElementById('femmes').style.display="block" ; 
		document.getElementById("shomme").style.display="none" ;
		document.getElementById("sfemme").style.display="block" ; 
		document.getElementsByClassName("onglest")[0].style.borderBottom="0" ; 
		
	}
	function hommes() 
	{
		document.getElementById('hommes').style.display="block" ;
		document.getElementsByClassName("femmet")[0].style.borderBottom="0" ; 
		document.getElementsByClassName("onglest")[0].style.borderBottom="0" ; 
		document.getElementById('femmes').style.display="none" ; 
		document.getElementsByClassName("hommet")[0].style.borderBottom="3px solid black" ;
		document.getElementById("sfemme").style.display="none" ;
		document.getElementById("shomme").style.display="block" ; 
	}
	function oncles() 
	{
		

		document.getElementsByClassName("femmet")[0].style.borderBottom="0" ; 
		document.getElementById('femmes').style.display="none" ; 
		document.getElementsByClassName("onglest")[0].style.borderBottom="3px solid black" ;
		document.getElementById("sfemme").style.display="none" ;
		document.getElementById('hommes').style.display="none" ; 
		document.getElementById("shomme").style.display="none" ;
		document.getElementsByClassName("hommet")[0].style.borderBottom="0" ; 
	}

function imagejpg(nomimage,lien) 
	{
		var homme = document.getElementById(nomimage) ; 
		homme.src= lien ; 
	}
function hommejpg() 
	{
		imagejpg("hommejpg","https://i.pinimg.com/564x/96/cf/c8/96cfc8a12e7c010b29c9ba4934ee81c6.jpg") ; 
		imagejpg("femmejpg","https://i.pinimg.com/564x/b9/77/6f/b9776fff38e5035401f36eb1ebdc29f9.jpg?b=t") ; 
	}
function femmejpg() 
	{
		imagejpg("femmejpg","https://i.pinimg.com/564x/96/cf/c8/96cfc8a12e7c010b29c9ba4934ee81c6.jpg") ; 
		imagejpg("hommejpg","https://i.pinimg.com/564x/b9/77/6f/b9776fff38e5035401f36eb1ebdc29f9.jpg?b=t") ; 
	}


		function recharger()
	{
		document.location.reload(true);
	}


function ajaX(nomPage) 
{
	  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", nomPage, true);
  xhttp.send();
}

function menux()
{
 var menu = document.getElementById("aze") ; 
if(menu.className=="ddroite")
{

menu.className="dgauche" ;
}

else
{
menu.className="ddroite" ;
}
}



function sallon() {


	ajaX("pages/adresse.php") ;
	menux() ;  


}

function services() {


	ajaX("pages/services.php") ; 
		menux() ;  


}
function rdv() {


	ajaX("pages/rdv.php") ; 
		menux() ;  


}
function biz() {


	ajaX("pages/biz.php") ; 
		menux() ;  


}
function contacts() {


	ajaX("pages/contact.php") ; 
		menux() ;  


}


function menu2() 
{
menux() ; 
}

