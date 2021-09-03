<?php include VIEWS . '/parts/nav.php'; ?>
<style>
  <?php include ASSETS . '/css/nav.css';
        include ASSETS . '/css/sign_up.css';
        include ASSETS . '/css/footer.css'; ?>
</style>

<section id="logIn">
  <div class="container">
    <div class="row">
      <div class="form-wrap col-lg">
        <!-- <a href="#">Logo</a> -->
        <form action="#" method="#">
          <h2 class="text-center">Inscription</h2>
          <div class="form-group">
            <label for="lastname">Nom *</label>
            <input
              type="text"
              class="form-control"
              id="lastname"
              placeholder="Saisissez votre nom"
            />
          </div>
          <div class="form-group">
            <label for="firstname">Prénom *</label>
            <input
              type="text"
              class="form-control"
              id="firstname"
              placeholder="Saisissez votre prénom"
            />
          </div>
          <div class="form-group">
            <label for="phone">Téléphone (facultatif)</label>
            <input
              type="number"
              class="form-control"
              id="phone"
              placeholder="Saisissez votre numero de téléphone"
            />
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Saisissez votre email"
            />
          </div>
          <div class="form-group">
            <label for="password">Mot de passe *</label>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Saisissez votre mot de passe"
            />
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirmer mot de passe</label>
            <input
              type="password"
              class="form-control"
              id="confirm-password"
              placeholder="Confirmer le mot de passe"
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
        </form>
      </div>
    </div>
  </div>
</section>

<?php include VIEWS . '/parts/footer.php'; ?>