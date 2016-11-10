<html>
<head>
	<title>
		TP 1: AJAX
	</title>
	<script type="text/javascript"> 
		function teste_ajax(){
			//On déclare une variable 
			var mavariable; 
			//code pour IE7+, Firefox, Chrome, Opera, Safari 
			if (window.XMLHttpRequest){ 
				mavariable = new XMLHttpRequest(); 
			} 
			//code pour IE6, IE5 
			else{ 
				mavariable = new ActiveXObject("Microsoft.XMLHTTP"); 
			}
			//On assigne une fonction à la propriété onreadystatechange 
			mavariable.onreadystatechange = function(){ 
				//Si l'attribut readyState renvoie 4 et que l'attribut status renvoie 200 
				if(mavariable.readyState == 4 && mavariable.status == 200){ 
					//On affiche le résultat chargé dans l'attribut responseText qui est affiché dans un div nommé "mondiv" 
					document.getElementById("mondiv").innerHTML=mavariable.responseText; 
					} 
					//Si erreur 
				else{ 
					//On affiche le résultat de l'erreur obtenu par l'attribut status dans ce même div 
					document.getElementById("mondiv").innerHTML=mavariable.status; 	
				} 
			};  
			//On déclare la méthode d'envoie 
			mavariable.open("GET","fichier.txt",true); 
			//On envoie 
			mavariable.send();
		} 
	</script> 
</head>
<body>
	<form method="POST"> 
		<input type="button" value="Go" onclick="teste_ajax()"> 
	</form> 
	<div id="mondiv"></div> 
</body
></html>