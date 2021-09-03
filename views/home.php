<?php include VIEWS . '/parts/nav.php' ;?>
<style>
        <?php include ASSETS . '/css/nav.css'; 
              include ASSETS . '/css/style.css';
              include ASSETS . '/css/footer.css';
         ?>
    </style>
    <section id="home">
      <div class="home-container">
        <div class="home-introduction">
          <h1>Bienvenu chez Takemichou</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <div class="search-bar">
            <input
              type="text"
              name="adress"
              id="adress"
              placeholder="Saisissez votre adresse"
            />
            <button>Recherche</button>
          </div>
        </div>
        <div class="home-slideshow">
          <img
            class="home-slideshow-image"
            src="https://via.placeholder.com/150C/O"
            alt="burger"
          />
          <img
            class="home-slideshow-image"
            src="https://via.placeholder.com/150C/O"
            alt="pizza on desk"
          />
          <img
            class="home-slideshow-image"
            src="https://via.placeholder.com/150C/O"
            alt="man eat a pizza"
          />
          <img
            class="home-slideshow-image"
            src="https://via.placeholder.com/150C/O"
            alt="tacos"
          />
          <img
            class="home-slideshow-image"
            src="https://via.placeholder.com/150C/O"
            alt="fried chicken"
          />
        </div>
      </div>
    </section>
    <section id="home-explanation">
      <h2 class="text-center">Comment ça marche</h2>
      <div class="container-fluid">
        <div class="row pb-5 reveal">
          <div class="text-center col-lg-4">
            <img src="https://via.placeholder.com/150C/O" alt="smartphone" />
            <h4 class="mt-2">Adresse</h4>
            <p class="mt-4">
              Je renseigne 'addresse à laquelle je souhaite être livré dans la
              barre de recherche située dans la page d'accueil.
            </p>
          </div>
          <div class="text-center col-lg-4">
            <img src="https://via.placeholder.com/150C/O" alt="restaurant menu" />
            <h4 class="mt-2">Je choisi</h4>
            <p class="mt-4">
              Je parcours le site et je sélectionne tous ce qui me fait envie.
            </p>
          </div>
          <div class="text-center col-lg-4">
            <img src="https://via.placeholder.com/150C/O" alt="food delivery" />
            <h4 class="mt-2">Paiement et livraison</h4>
            <p class="mt-4">
              Je valide mon panier, je suis les instructions pour le paiement.
              Bon appétit!!
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="home-offer">
      <h2 class="text-center">Nos offres</h2>
      <div class="container-fluid">
        <div class="row reveal">
          <div class="card text-center col-lg">
            <img
              src="https://via.placeholder.com/150C/O"
              class="card-img-top"
              alt="cafeteria"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn"
                style="background-color: #eef66c; font-weight: bold"
                >Souscrire</a
              >
            </div>
          </div>
          <div class="card text-center col-lg">
            <img
              src="https://via.placeholder.com/150C/O"
              class="card-img-top"
              alt="cafeteria"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn"
                style="background-color: #eef66c; font-weight: bold"
                >Souscrire</a
              >
            </div>
          </div>
          <div class="card text-center col-lg">
            <img
              src="https://via.placeholder.com/150C/O"
              class="card-img-top"
              alt="cafeteria"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn"
                style="background-color: #eef66c; font-weight: bold"
                >Souscrire</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include VIEWS . '/parts/footer.php' ;?>
    