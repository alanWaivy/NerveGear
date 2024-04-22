<head>

	<style>
		/*QA style start */


		#QA {
			margin-bottom: 100px;
		}

		#qaHeader {
			display: flex;
			justify-content: center;
			flex-direction: column;
			margin-bottom: 40px;
			align-content: center;
			align-items: center;
		}

		#qaHeader h1,
		#qaHeader p {
			text-align: center;
		}

		#qaHeader h1 {
			font-size: 60px;
			margin-bottom: -10px;
		}

		.head {
			display: flex;
			gap: 5px;
			align-items: center;
			justify-content: flex-start;
			background: #00A3FF;
			width: 700px;
			padding: 0px 152px;
			padding-left: 0px;
			border-radius: 25px;
			z-index: 2;
			/* Adjusted z-index value */
			position: relative;
			/* Added position property */
			cursor: default;
			cursor: pointer;
		}

		.head p {
			color: white;
		}

		.head img {
			transform: rotate(0deg);
		}

		.body {
			background: #D9D9D9;
			width: fit-content;
			border-radius: 20px;
			margin-left: 2.5em;
			margin-top: -30px;
			z-index: 1;
			position: relative;
		}

		.q {
			height: 52px;
			transition: height 400ms linear;
		}


		.body p {
			width: 550px;
			padding: 30px;
			color: #00A3FF;
		}

		@keyframes scale-up-ver-top {
			0% {
				transform: scaleY(0.4);
				transform-origin: 100% 0%;
			}

			100% {
				transform: scaleY(1);
				transform-origin: 100% 0%;
			}
		}

		@keyframes scale-up-ver-top-reverse {
			0% {
				transform: scaleY(1);
				transform-origin: 100% 0%;
			}

			100% {
				transform: scaleY(0);
				transform-origin: 0% 0%;
			}
		}

		.icon {
			transition: transform 0.4s ease;
			margin-left: 6px;
		}

		#Qs {
			display: flex;
			flex-direction: column;
		}

		.q {
			margin: 3px 0px;
			align-self: center;
		}

		/* QA style end*/


            @media (max-width:850px) {
              .head {
                  display: flex;
                  gap: 5px;
                  /* margin-top: 20px; */
                  align-items: center;
                  justify-content: flex-start;
                  background: #00A3FF;
                  width: 489px!important;
                  padding: 0px 5px;
                  padding-left: 0px;
                  border-radius: 25px;
                  z-index: 2;
                  position: relative;
                  cursor: default;
                  cursor: pointer;
              }

              .body {
                  background: #D9D9D9;
                  width: 400px;
                  border-radius: 20px;
                  margin-left: 2.5em;
                  margin-top: -30px;
                  z-index: 1;
                  position: relative;
              }

              .body p {
                  width: 342px;
                  padding: 30px;
                  color: #00A3FF;
              }

              #Qs {
                  display: flex;
                  flex-direction: column;
                  gap: 25px;
              }

              div#q3 {
                  height: 244px!important;
              }
              
            }

</style>

</head>

<body>
	<div id="QA">

		<div id="qaHeader">
			<h1>Q&A</h1>
			<p>voici quelques questions que nous recevons de nos clients</p>
		</div>

		<div id="Qs">

			<div class="q" id="q1">
				<div class="head" id="q01">
					<img src="../pics/plus01.png" alt="+" height="30px" width="30px" class="icon" id="icon01">
					<p>Quels types d'ordinateurs proposez-vous ?</p>
				</div>

				<div id="a01" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
					<p>
						Nous proposons une large gamme d'ordinateurs, y compris des ordinateurs de bureau, des ordinateurs portables, des ordinateurs tout-en-un, des tablettes et des accessoires informatiques.
					</p>
				</div>
			</div>

			<div class="q" id="q2">
				<div class="head" id="q02">
					<img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon02" class="icon">
					<p>Quelles marques d'ordinateurs vendez-vous ?</p>
				</div>

				<div id="a02" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
					<p>
						Nous travaillons avec les principales marques d'ordinateurs, notamment Apple, Dell, HP, Lenovo, Asus, Acer, et bien d'autres encore. Nous nous efforçons de proposer une variété de marques pour répondre aux besoins et aux préférences de chacun.
					</p>
				</div>
			</div>

			<div class="q" id="q3">
				<div class="head" id="q03">
					<img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon03" class="icon">
					<p>Proposez-vous des options de personnalisation ou de configuration sur mesure ?</p>
				</div>

				<div id="a03" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
					<p>
						Oui, nous proposons des options de personnalisation pour de nombreux produits, notamment les ordinateurs de bureau et portables. Vous pouvez choisir les spécifications qui répondent le mieux à vos besoins, que ce soit pour la capacité de stockage, la mémoire, le processeur, ou d'autres fonctionnalités.
					</p>
				</div>
			</div>

			<div class="q" id="q4">
				<div class="head" id="q04">
					<img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon04" class="icon">
					<p>Quels services proposez-vous en termes de garantie et de support technique ?</p>
				</div>

				<div id="a04" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
					<p>
						Nous offrons une garantie sur la plupart de nos produits pour assurer votre tranquillité d'esprit. De plus, notre équipe de support technique est disponible pour répondre à toutes vos questions et vous aider en cas de problème avec votre achat. Nous nous engageons à fournir un service client de haute qualité pour garantir votre satisfaction.
					</p>
				</div>
			</div>
		</div>
	</div>

</body>

<script defer>
	/*QA */


	document.getElementById('q01').addEventListener('click', function() {
		var div2 = document.getElementById('a01');
		var icon = document.getElementById('icon01');
		var q = document.getElementById('q1');
		if (div2.style.display == 'none') {
			div2.style.display = 'block';
			div2.style.animation = 'scale-up-ver-top 0.4s linear';
			icon.style.transform = 'rotate(45deg)';
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
		}
	});

	document.getElementById('q02').addEventListener('click', function() {
		var div2 = document.getElementById('a02');
		var icon = document.getElementById('icon02');
		var q = document.getElementById('q2');
		if (div2.style.display == 'none') {
			div2.style.display = 'block';
			div2.style.animation = 'scale-up-ver-top 0.4s linear';
			icon.style.transform = 'rotate(45deg)';
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
		}
	});

	document.getElementById('q03').addEventListener('click', function() {
		var div2 = document.getElementById('a03');
		var icon = document.getElementById('icon03');
		var q = document.getElementById('q3');
		if (div2.style.display == 'none') {
			div2.style.display = 'block';
			div2.style.animation = 'scale-up-ver-top 0.4s linear';
			icon.style.transform = 'rotate(45deg)';
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
		}
	});


	document.getElementById('q04').addEventListener('click', function() {
		var div2 = document.getElementById('a04');
		var icon = document.getElementById('icon04');
		var q = document.getElementById('q4');
		if (div2.style.display == 'none') {
			div2.style.display = 'block';
			div2.style.animation = 'scale-up-ver-top 0.4s linear';
			icon.style.transform = 'rotate(45deg)';
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
		}
	});
</script>