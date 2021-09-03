<?php include VIEWS . '/parts/nav.php'; ?>
<style>
  <?php include ASSETS . '/css/nav.css';
        include ASSETS . '/css/login.css';
        include ASSETS . '/css/footer.css'; ?>
</style>
<section id="logIn">
    <div class="container">
      <div class="row">
        <div class="form-wrap col-lg">
          <!-- <a href="#">Logo</a> -->
          <form action="#" method="#">
            <h2 class="text-center">Se connecter</h2>
            <div class="form-group">
              <label for="email">Email :</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Saisissez votre email"
              />
            </div>
            <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Saisissez votre mot de passe"
              />
            </div>
            <div class="d-flex justify-content-center btn-form-wrapper">
              <input
                class="btn"
                type="submit"
                value="Continuer"
                style="background: #eef66c"
              />
            </div>
            <div class="d-flex justify-content-center mt-4">
              <small><a style="color: #fff;" href="#">Mot de passe oublié ?</a></small>
            </div>
            <div class="d-flex justify-content-center mt-1">
              <small><a style="color: #fff;" href="./sign_up.html">Créer un compte</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<?php include VIEWS . '/parts/footer.php'; ?>

