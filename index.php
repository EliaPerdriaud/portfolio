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
            <h2>Projets</h2>

            <div class="underline-title"></div>

            <div class="div-project" id="apparition">
                <div class="div-project-content">
                    <div class="mockup-project">
                        <img id="project1" src="./img/eclaireur.png" alt="project1"> 
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <h3>L'éclaireur des coiffeurs</h3>
                            <p>Ce projet a consisté à faire une proposition fictive, de refonte du site web de l’éclaireur des coiffeurs. Un audit, ainsi qu'un benchmark ont été réalisés. A la suite desquels, une proposition de maquette à été faite pour cette refonte.</p>
                  
                            <button class="portfolio-button" type="button" onclick="window.location.href = './eclaireur.php';">
                                Voir le projet
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="div-project2">
                <div class="div-project-content">
                    <div class="mockup-project">
                        <img id="project1" src="./img/wknd.png" alt="project1"> 
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <h3>WKND</h3>
                            <p>  Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. </p>
                            <button class="portfolio-button" type="button">
                                Voir le projet
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="div-project">
                <div class="div-project-content">
                    <div class="mockup-project">
                        <img id="project1" src="./img/motion-mds.png" alt="project1"> 
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <h3>Motion My Digital School</h3>
                            <p>  Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. </p>
                            <button class="portfolio-button" type="button">
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
                            <p>  Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. </p>
                            <button class="portfolio-button" type="button" onclick="window.location.href = './hold_it.php';">
                                Voir le projet
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

        
        </div>


</body>