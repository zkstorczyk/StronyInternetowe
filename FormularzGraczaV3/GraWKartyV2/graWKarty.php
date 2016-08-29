<!--The MIT License (MIT)
Copyright (c) 2016 Jakub Kopowski

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
<?php
session_start();
/*
$stoper_start = microtime(true);  // start pomiaru

//mierzony skrypt ////////////////////////
//usleep(1000);
/////////////////////////////////////////

$stoper_stop = microtime(true); //koniec pomiaru
*/

$_SESSION["czas"] = microtime(true);
//echo bcsub($stoper_stop, $stoper_start, 4); // wynik np 1.0123 sekundy

?>

<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if gte IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title>Iowa gambling task</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Iowa Gambing Task" />
	<meta name="keywords" content="OGT, IGT, Gambling Task, Iowa Gambling Task, Bechara's Gambling Task" /> 
	<meta name="author" content="Ben Margevicius" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" type="text/css" href="igt.css">


	<script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-58996218-1', 'auto');
	    ga('send', 'pageview');
	</script>

	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>    
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
 </head>
 
<body>
 
<main class="container">
	<section class="row">
		<div class="col-xs-3">
			<figure>
				<a id="card-one" href="#" class="card">
					<img class="img-responsive" alt="card back 1" src="blue-back.png" />
				</a>
				<figcaption>
					Talia A <span id="deck-one-clicks"></span>
				</figcaption>
			</figure>
		</div>
		<div class="col-xs-3">
			<figure>
				<a id="card-two" href="#" class="card">
					<img class="img-responsive" alt="card back 1" src="blue-back.png" />
				</a>
				<figcaption>
					Talia B <span id="deck-two-clicks"></span>
				</figcaption>
			</figure>
		</div>
		<div class="col-xs-3">
			<figure>
				<a id="card-three"  href="#" class="card">
					<img class="img-responsive" alt="card back 1" src="blue-back.png" />
				</a>
				<figcaption>
					Talia C <span id="deck-three-clicks"></span>
				</figcaption>
			</figure>
		</div>
		<div class="col-xs-3">
			<figure>
				<a id="card-four" href="#" class="card">
					<img class="img-responsive" alt="card back 1" src="blue-back.png" />
				</a>
				<figcaption>
					Talia D <span id="deck-four-clicks"></span>
				</figcaption>
			</figure>
		</div>
	</section>
	
	<section class="row">
		<p id="cashpilelabel"></p>
		<div class="progress">
			<div id="cashpilebar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="2000" aria-valuemin="0" aria-valuemax="6000" style="width: 33%">
				<span id="cashpileamt">$2000</span>				
			</div>
		</div>
	</section>
	
	<section class="row">
		<div id="gamelog">
            <p class="outputtext">Wygrałeś: <span id="winamt"></span></p>
            <p class="outputtext">Przegrałeś: <span id="penaltyamt"></span></p>
            <p class="outputtext"> +/-: <span id="netgains"></span></p>
            <p class="outputtext">Total $: <span id="totalmoney"></span></p>
		</div>
	</section>
	
	<div id="modal-splash" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"> IGT </h4>
				</div>
				<div class="modal-body">	
					<div>
					
				<!--
						<p>Rules:</p>
						<ol>
							<li>In front of you on the screen, there are 4 decks of cards: A, B, C, and D.</li>
                            <li>When we begin the game, I want you to select one card at a time by clicking on a card from any deck you choose.</li>
                            <li>Each time you select a card, the computer will tell you that you won some money. I don't know how much money you will win. You will find out as we go along. Every time you win, the bar gets bigger.</li>
                            <li>Every so often, when you click on a card, the computer will tell you that you won some money as usual, but then it will say that you lost some money as well. I don't know when you will lose or how much. You will find out as we go along. Every time you lose, the bar gets smaller.</li>
                            <li>You are absolutely free to switch from one deck to the other at any time, and as often as you wish.</li>
                            <li>The goal of the game is to win as much money as possible and avoid losing as much money as possible.</li>
                            <li>You won't know when the game will end. Simply keep on playing until the computer stops.</li>
                            <li>I am going to give you $2000 of credit to start the game. </li>
                            <li>The only hint I can give you, and the most important thing to note is this: Out of these four decks of cards, there are some that are worse than others, and to win you should try to stay away from bad decks. No matter how much you find yourself losing, you can still win the game if you avoid the worst decks.</li>
                            <li>Also note that the computer does not change the order of the cards once the game begins. It does not make you lose at random, or make you lose money based on the last card you picked.</li>							
						</ol>     -->
						<p> Zasady: </p>
									<ol>
							<li> Przed Panem/ią znajdują się 4 talie kart: A, B, C i D. </li>
                            <li> Za każdym razem komputer poprosi Pana/ią o wybranie karty z dowolnej talii. Można to zrobić, klikając na wybraną przez siebie talię kart. </li>
                            <li> Za każdym razem, kiedy Pan/i wybierze kartę, komputer poinformuje Pana/ią, o wygraniu jakiejś sumy pieniędzy. Nie wiadomo, jaka to będzie kwota, to się okaże w trakcie gry. </li>
                            <li> Kiedy wygra Pan/i pieniądze, zielony pasek na środku ekranu będzie się wydłużał. </li>
                            <li> Czasami oprócz tego, że wygra Pan/i jakąś sumę pieniędzy, komputer poinformuje Pana/ią o stracie jakiejś kwoty - wtedy zielony pasek będzie się skracał. </li>
                            <li> Celem gry jest wygranie jak największej ilości pieniędzy i przegranie jak najmniejszej ilości pieniędzy. </li>
                            <li> Na początek komputer udzieli Panu/i 2000 $ kredytu (czerwony pasek), który trzeba będzie odliczyć od ostatecznej kwoty zdobytej przez Pana/ią. </li>
                            <li> Nie wiadomo, kiedy test się skończy, po prostu proszę grać, dopóki na komputerze nie pojawi się napis „Koniec gry”. </li>
                            <li> Możemy Panu/i udzielić tylko jednej podpowiedzi: wśród tych 4 talii kart są talie gorsze niż inne i żeby wygrać, trzeba ich unikać. Niezależnie, ile będzie Pan/i przegrywać, ciągle można wygrać, jeżeli będzie się unikać złych talii. </li>
                            <li> Komputer nie przydziela kart do talii losowo, nie zmienia też kart w taliach w trakcie gry. </li>
							<p>&nbsp;</p>
							<p><b> Zapraszamy do gry! </b></p>
					</div>								
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" id="click">Rozpocznij grę</button>
                </div>
			</div>

		</div>
	</div>	

    <div id="modal-gameend" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Koniec gry. Gratuluje!</h4>
				</div>
				<div class="modal-body">	
					<div>
						<!--<p> Skończyłeś grę Gratuluje! </p>-->
						
						   <!--- <label for="subjectID">Prosze podaj swoje imie bądz nazwisko (opcjonalnie oczywiście)</label>
							<input type="text" id="subjectID" class="form-control" placeholder="Subject ID (optional)">
							<label for="emailResultsTo">Podaj meila gdzie wysłać wyniki?</label>--->
						    <div class="input-group">							
							    <!--<input type="email" id="emailResultsTo" class="form-control" placeholder="someone@somewhere.com">-->
							    <span class="input-group-btn">
								    <button id="emailBtn" class="btn btn-default" type="button"><span id="emailresultstxt">Dalej</span><img class="spinner" src="spinner.gif" alt="Waiting for email response" /></button>
									
							    </span>
						    </div>
							
							
					</div>									
				</div>
                <div class="modal-footer">
                    <button type="button" id="viewresultsbtn" class="btn btn-info">Pokaż wyniki?</button>                           
                    <p id="testresults"></p>
                </div>
			</div>
		</div>
	</div>	

</main>
 
<!-- DEVELOPMENT DEBUGGING -->
<!-- Jquery 1.9 is the last to support IE8 and lower -->
<!--[if lt IE 9]>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>console.warn("Please update to the lastest browser. Running in depreciated mode");</script>
<![endif]-->
<!--[if gte IE 9]><!-->
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="igt.016.js"></script>


</body>
</html>