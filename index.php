<?php 
$title="Accueil";
require_once 'layout/header.php'?>


        <div class="home-header">
            <h1>Portfolio d'une
                <span
                   class="txt-rotate"
                   data-period="2000"
                   data-rotate='[ "webdesigneuse.", "intégratrice web.", "développeuse frontend." ]'>
                </span> 
                
              </h1>
        </div>

        

        <div class="home-presentation" id="apparition" data-delai="0">
            <div class="div-title-hover-effect">
                <h2 class="title-hover-effect">Bienvenue sur mon Portfolio !</h2>
            </div>
            <p>
            Après avoir réalisé un DUT informatique, qui m'a permis d'acquérir des compétences en développement web, j'ai réalisé un bachelor en webdesign, en parallèle duquel j'ai effectué une alternance dans une agence digitale, MentalWorks, située à Compiègne, dans l'Oise.
            <br>
            Les projets que vous allez découvrir dans ce portfolio correspondent à mes projets personnels. Pour découvrir mes projets professionnels, contactez-moi.

            </p>
            <button class="portfolio-button btn-supperposition" type="button" onclick="window.location.href = './a_propos.php';">
                En savoir plus
            </button>

        </div>

        <div class="projects">
            <div class="div-title-hover-effect">
                <h2 class="title-hover-effect">Projets</h2>

                <div class="underline-title"></div>
            </div>

            <div class="div-project">
                <div class="div-project-content">
                    <div class="mockup-project">
                        <img id="project1" src="./img/egaia.png" alt="project1"> 
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <h3>Egaïa</h3>
                            <p>  Application ayant pour but d'aider les gens à recycler leurs déchets et à avoir un meilleur impact environnemental. </p>
                            <button class="portfolio-button" type="button" onclick="window.location.href = './egaia.php';">
                                Voir le projet
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="div-project2">
                <div class="div-project-content">
                    <div class="mockup-project">
                        <img id="project1" src="./img/hold-it.png" alt="project1"> 
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <h3>Hold it</h3>
                            <p> Ce projet consiste en la réalisation d'une bande annonce fictive d’un film d’action à suspens : hold-it. </p>
                            <button class="portfolio-button" type="button" onclick="window.location.href = './hold_it.php';">
                                Voir le projet
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
        <button class="portfolio-button" type="button" onclick="window.location.href = './portfolio.php';">
                Voir tous les projets
            </button>


</body>

<?php 
require_once 'layout/footer.php'?>