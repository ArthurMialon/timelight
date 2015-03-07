<?php require('header.php'); ?>
		
		<!-- Navigation -->
		<div class="ct_btn">
			<span id="btn_etape_1" date-etape="1" class="btn_etape active"> </span>
			<span id="btn_etape_2" date-etape="2" class="btn_etape"></span>
			<span id="btn_etape_3" date-etape="3" class="btn_etape"></span>
			<span id="btn_etape_4" date-etape="4" class="btn_etape"></span>
			<span id="btn_etape_5" date-etape="5" class="btn_etape"></span>
		</div>
		<!-- Fin Navigation -->

		<!-- Container du scroller -->
		<div id="container">
			<div id="scroller">
				<!-- Chaque Section du StoryTelling -->
				<section class="etape" id="etape_1">

					<div class="planete"></div>
					<canvas id="particules"></canvas>
					<div class="mask"></div>

					<div class="infos">
						<h1>TimeLight</h1>
						<p>
							Imaginiez-vous un jour pouvoir redécouvrir le passé grâce à la lumière ?<br>
							Avec notre technologie TimeLight ceci est désormais possible.
						</p>

						<div class="invit_scroll">
							<span id="go_scroll" class="btn_scroll"></span>
						</div>	

						<h2>Découvrez notre invention</h2>
					</div>

				</section>
				<section class="etape" id="etape_2">
					<div class="wrapper">
						<div class="inner">
							<span class="light rond"></span>
							<div id="first" class="first">
								<h2>Jusqu'à présent</h2>
								<p>La lumière représentait à peu près ceci pour vous...</p>
							</div>
							<div id="infos_l_1" class="infos_lumiere top_left hide">
								<h3>Vision</h3>
								<p>Grâce à la réflexion elle nous permet de voir le monde qui nous entoure.</p>
							</div>
							<div id="infos_l_2" class="infos_lumiere bottom_left hide">
								<h3>Transfert de données</h3>
								<p>
								   Depuis quelques années nous utilisons la lumière pour échanger des données. <br>Exemple : La fibre optique et le Li-Fi.
								</p>
							</div>
							<div id="infos_l_3" class="infos_lumiere top_right hide">
								<h3>éclairage</h3>
								<p>Elle est utlisée par l’homme 
									depuis plusieurs siècles pour éclairer leur foyer.
								</p>
							</div>
							<div id="infos_l_4" class="infos_lumiere bottom_right hide">
								<h3>Chaleur</h3>
								<p>C’est une source de chaleur intarissable.</p>
							</div>
							<div id="last" class="hide last">
								<h2>Chez timelight</h2>
								<p>Chez Timelight, nous avons décidé d’en faire une utilisation différente</p>
							</div>
						</div>
					</div>
				</section>
				<section class="etape" id="etape_3">
					<div class="wrapper">
						<div class="inner">
							<div class="infos_schema">
								<h3>La réflexion de la lumière</h3>
								<p>
									Notre technologie se base sur un principe physique simple : la réflexion de la lumière. Il nous permet entre autre de voir au quotidien et de refléter le monde qui nous entoure.
								</p>
							</div>
							<div class="schema">
								<div id="first_rayon" class="first_rayon"></div>
								<span class="fleche_rayon_1"></span>
								<div id="last_rayon" class="last_rayon"></div>
								<span id="fleche_rayon_1" class="fleche_rayon_1"></span>
								<span id="fleche_rayon_2" class="fleche_rayon_2"></span>
							</div>
							<div id="tooltip_1" class="tooltip">
								<p>
									Lorsque qu’un rayon incident arrive sur une surface solide, il est réfléchi.
								</p>
							</div>
							<div id="tooltip_2" class="tooltip">
								<p>
									Le rayon lumineux est ensuite reflété sur la surface et repart dans une autre direction.
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="etape" id="etape_4">
					<div class="wrapper">
						<div class="inner">
							<div class="soleil"></div>
							<div class="terre"></div>
							<div id="dispositif" class="dispositif"></div>
							<div id="rotation_terre"></div>
							<div id="rotation_dispositif"></div>
							<div id="flux_1" class="flux"></div>
							<div id="flux_2" class="flux"></div>
							<div id="flux_3" class="flux"></div>
							<div id="dispositif_info_5" class="informations_dispo">
								<h4>notre dispositif :  REFLEXION </h4>
								<p>
								 Dans un premier temps, la lumière émise par le soleil arrivant sur la Terre va être réfléchie à un instant pour être ensuite captée par notre dispositif spatial.
								</p>
							</div>
							<div id="dispositif_info_1" class="informations_dispo hide">
								<h4>La réflexion</h4>
								<p>
									Dans un premier temps, la lumière émise par le soleil arrivant sur la Terre va être réfléchie à un instant t.	
								</p>
							</div>
							<div id="dispositif_info_2" class="informations_dispo hide">
								<h4>Captation</h4>
								<p>
									La lumière réfléchie est ensuite captée par notre dispositif spatial à un instant t+x. Celui-ci tourne autour de la Terre de manière elliptique.
								</p>
							</div>
							<div id="dispositif_info_3" class="informations_dispo hide">
								<h4>Renvoie</h4>
								<p>
									Le dispositif spatial renvoie vers la Terre l’image correspondant à l’instant t. Cette image est récupérée à l’instant t+2x.
								</p>
							</div>
							<div id="dispositif_info_4" class="informations_dispo hide">
								<h4>Récupération</h4>
								<p>
									Après avoir récupéré la lumière de l’instant t, notre dispositif sur Terre nous permet de retranscrire cette lumière sous forme d’image satellite.
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="etape" id="etape_5">
					<div class="wrapper">
						<div class="inner">
							<h2>Expérimenter</h2>
							<p>
								Après vous avoir exposé notre nouvelle technologie, nous vous proposons donc de la tester avec une ville particulière, Las Vegas.
							</p>
							<div class="invit_scroll">
								<a href="demo.php" id="go_scroll" class="btn_scroll"></a>
							</div>	
							<h4>Laissez-vous emporter par la lumière</h4>
						</div>
					</div>
				</section>
				<!-- Fin des sections -->
			</div>
		</div>

<?php require('footer.php'); ?>