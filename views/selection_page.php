<?php include VIEWS . '/parts/nav.php'; ?>
<style>
  <?php include ASSETS . '/css/nav.css';
        include ASSETS . '/css/style_selection.css';
        include ASSETS . '/css/footer.css'; ?>
</style>

<section id="dishes">
  <h2 class="text-center">Nos plats</h2>
  <div class="container-fluid dish-page">
      <div class="vertical-menu">
        <div class="delivery-choice">
          <h5>Sélection</h5>
          <ul>
            <li>
              <label for="delivery">
                <input type="radio" name="delivery" id="delivery" value="DELIVERY">
                <span>Livraison</span>
              </label>
            </li>
            <li>
              <label for="take-away">
                <input type="radio" name="take-away" id="take-away" value="TAKE-AWAY">
                <span>A emporter</span>
              </label>
            </li>
          </ul>
        </div>
        <!--  -->
        <div class="price-filter">
          <h5>filtrer par prix</h5>
          <ul>
            <li>
              <label for="price-under-ten">
                <input type="radio" name="price-under-ten" id="price-under-ten">
                <span>10 euros ou moins</span>
              </label>
            </li>
            <li>
              <label for="price-under-fifteen">
                <input type="radio" name="price-under-fifteen" id="price-under-fifteen">
                <span>Entre 10 et 15 euros</span>
              </label>
            </li>
            <li>
              <label for="price-fifteen-plus">
                <input type="radio" name="price-fifteen-plus" id="price-fifteen-plus">
                <span>15 euros et plus</span>
              </label>
            </li>
          </ul>
        </div>
        <!--  -->
        <div class="food-category">
          <h5>Catégories</h5>
          <ul>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
            <li>
              <label for="lorem-food">
                <input type="checkbox" name="lorem-food" id="lorem-food">
                <span>Lorem ipsum</span>
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="selection-dishes">
        <div class="row mt-4">
          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
                />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="card" style="width: 18rem; height: 17.8rem">
              <img
                class="card-img-top"
                src="./image/cards/pattes.jpg"
                alt="Card image cap"
                style="width: 100%; height: 8.5rem"
              />
                <div class="card-body">
                  <h4 class="text-center">Pâtes napolitaines aux fine herbes</h4>
                  <a href="#" class="fas fa-heart"></a>
                  <p class="card-text">Prix: XXX€</p>
                  <div class="dish-options">
                    <input type="button" class="btn" value="ajouter au panier">
                    <input type="button" class="btn" value="Détails">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</section>

<?php include VIEWS . '/parts/footer.php'; ?>