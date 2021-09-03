<footer>
      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="col-lg d-flex flex-column">
            <h6>Plan du site</h6>
            <a href="#">Accueil</a>
            <a href="#">Inscription</a>
            <a href="#">Connexion</a>
            <a href="#">Nos plats</a>
            <a href="#">Contact</a>
            <a href="#">F.A.Q.</a>
          </div>
          <div class="col-lg d-flex flex-column">
            <h6>Nos réseaux sociaux</h6>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Youtube</a>
            <a href="#">Linkedin</a>
          </div>
        </div>
      </div>
      <p class="text-center pt-5 pb-1">
        par Christopher Saury <span class="far fa-copyright"></span>
        <span id="currentYear"></span> tout droits réservés
      </p>
    </footer>
    <script>
      <?php switch($title){
        case 'Accueil':
          include ASSETS . '/js/home.js';
          break;
        default :
        echo "let currentYear = new Date().getUTCFullYear();
        document.getElementById('currentYear').innerHTML = currentYear;";
      } ?>
    </script>
  </body>
</html>
