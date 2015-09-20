<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="SERVERSIDE - PHP - Devoir 1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SERVERSIDE - PHP - Devoir 1</title>

        <style type="text/css">

        body, html {

        	margin: 0;
        	font-family: sans-serif;
        }

        header {

        	color: #444;
        	font-size: 1.5em;
        	text-align: center;
        }

        .container {

        	width: 700px;
        	margin: 0 auto;
        }

        .page_header {

        	width: 500px;
        	color: #35e6a9;
        }

        .page_header h2 {

        	border-bottom: 1px solid #35e6a9;
        }

        form {

        	width: 300px;
        }

        fieldset {

        	border: none;
        	border-bottom: 1px solid #35e6a9;
        	margin-top: 50px;
        }

        button {

        	width: 100%;
        	height: 50px;
        	margin-top: 50px;
        	border: none;
        	background-color: #35e6a9;
        	color: #FFF;

        	font-size: 1.2em;

        	cursor: pointer;
        	-webkit-transition: all .5s;
        }

        button:hover {

        	background-color: #35e826;
        	-webkit-transition: all .5s;
        }

        footer {

        	width: 100%;
        	height: 20px;
        	background-color: rgba(0, 0, 0, 0.4);
        	margin: 0;
        	margin-top: 50px;

        	text-align: center;
        	color: #FFF;
        	font-size: .9em;
        }

        footer a {

        	float: left;
        	margin: 0;
        	margin-left: 100px;

        	color: #FFF;
        	text-decoration: none;

        	-webkit-transition: all .5s;
        }

        footer a:hover {

        	color: #222;
        	-webkit-transition: all .5s;
        }

        footer p {

        	float: right;
        	margin: 0;
        	margin-right: 100px;
        }

        </style>

    </head>

    <body>

    	<header>

    		<h1> SERVER SIDE - PHP - Devoir_1</h1>

    	</header>

    	<div class='container'>

    		<div class='page_header'>

    			<h2> Est-ce que je peux prendre la voiture si ...</h2>

    		</div>

    		<form accept-charset='UTF-8' method='get'> 

    				<fieldset>	
    					<p> Je rentre avant minuit ? </p>
    					<input required type='radio'  value='oui' name="minuit" <?php if( $_GET['minuit']=='oui'){ echo 'checked="checked"';} ?> > Oui </input >
    					<input required type='radio'  value='non' name="minuit" <?php if( $_GET['minuit']=='non'){ echo 'checked="checked"';;} ?> > Non </input>
    				</fieldset>

    				<fieldset>	
    					<p> Je mange dans la voiture ? </p>
    					<input required type='radio'  value='oui' name="mange" <?php if( $_GET['mange']=='oui'){ echo 'checked="checked"';} ?> > Oui </input>
    					<input required type='radio'  value='non' name="mange" <?php if( $_GET['mange']=='non'){ echo 'checked="checked"';} ?> > Non </input>
    				</fieldset> 

    				<fieldset>	
    					<p> Je conduis à 200km/h sur l'autoroute ? </p>
    					<input required type='radio'  value='oui' name="fast" <?php if( $_GET['fast']=='oui'){ echo 'checked="checked"';} ?> > Oui </input>
    					<input required type='radio'  value='non' name="fast" <?php if( $_GET['fast']=='non'){ echo 'checked="checked"';} ?> > Non </input>
    				</fieldset>		

    				<fieldset>	
    					<p> Je ne prends que 2 personnes ? </p>
    					<input required type='radio'  value='oui' name="personnes" <?php if( $_GET['personnes']=='oui'){ echo 'checked="checked"';} ?> > Oui </input>
    					<input required type='radio'  value='non' name="personnes" <?php if( $_GET['personnes']=='non'){ echo 'checked="checked"';} ?> > Non </input>
    				</fieldset>	

    				<fieldset>	
    					<p> Je fais BOB ? </p>
    					<input required type='radio'  value='oui' name="bob" <?php if( $_GET['bob']=='oui'){ echo 'checked="checked"';} ?> > Oui </input>
    					<input required type='radio'  value='non' name="bob" <?php if( $_GET['bob']=='non'){ echo 'checked="checked"';} ?> > Non </input>
    				</fieldset>	

    				<fieldset>	
    					<p> Je vais chercher ma soeur ? </p>
    					<input required type='radio'  value='oui' name="soeur" <?php if( $_GET['soeur']=='oui'){ echo 'checked="checked"';} ?> > Oui </input>
    					<input required type='radio'  value='non' name="soeur" <?php if( $_GET['soeur']=='non'){ echo 'checked="checked"';} ?> > Non </input>
    				</fieldset>

    			<button> Demander la voiture </button>

    		</form>

    		<?php 

    			function demande( 	$minuit, 
    								$mange, 
    								$fast, 
    								$personnes, 
    								$bob, 
    								$soeur ){


    				if ( 	$minuit == 'oui' &&
    						$mange == 'non' && 
    						$fast == 'non' &&
    						$personnes == 'oui' &&
    						$bob == 'oui' &&
    						$soeur == 'non'){
    					
    					echo " <p> C'est bon vas y ! </p>
    							<img width='200' alt='une belle BWM' src='assets/img/bwm.png'>";

    				} else if ( $personnes == 'non' ) {

    					echo " <p> Tu veux pas partir avec douze personnes aussi ? </p>";

    				} else if ( $bob == 'non' || $fast == 'oui' ) {

    					echo " <p> T'es un malat' toi ! </p>";

    				} else {

    					echo "<p> T'es sur de toi ? </p>";
    				}

    			}

    			demande( 	$_GET['minuit'], 
    						$_GET['mange'], 
    						$_GET['fast'], 
    						$_GET['personnes'],
    						$_GET['bob'],
    						$_GET['soeur'] );

    		?>

    	</div>

    	<footer>

    		<a href=""> Voir sur github</a>

    		<p> Mattelet Bruno - 2015</p>

    	</footer>

    </body>

</html>