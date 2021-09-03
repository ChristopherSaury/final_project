<?php include VIEWS . '/parts/nav.php'; ?>
<style>
  <?php include ASSETS . '/css/nav.css';
        include ASSETS . '/css/contact.css';
        include ASSETS . '/css/footer.css'; ?>
</style>

<section id="contact">
    <form class="contact-form" action="" method="post">
      <h2 class="text-center mb-4">Nous contacter</h2>
      <div class="form-row">
        <div class="form-group col-lg">
          <label for="lastname">Nom</label>
          <input type="text" class="form-control" id="lastname">
        </div>
        <div class="form-group col-lg">
          <label for="firstname">Prénom</label>
          <input type="text" class="form-control" id="firstname">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="subject">Sujet</label>
        <input type="text" class="form-control" id="subject">
      </div>
      <div class="custom-file mb-3">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
      <input
        id="submit-btn"
        class="btn w-100 mt-2"
        type="submit"
        value="Envoyer"
      />
    </form>
</section>

<?php include VIEWS . '/parts/footer.php'; ?>
  