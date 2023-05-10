<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME ELEGANCE</title>
    <link rel="stylesheet" href="./src/styleCart.css" />
  </head>
  <body>
    <header class="headerSection">
      <div class="navFirst">
        <h2>Logo</h2>
      </div>
      <nav>
        <div class="navsecond">
          <a href="./index.html">Главная</a>
          <a href="#">Каталог</a>
          <a href="#">О нас</a>
          <a href="#"><img src="./src/cartBlack.svg" alt="" /></a>
          <a href="#"><img src="./src/avatarBlack.svg" alt="" /></a>
        </div>
      </nav>
    </header>
    <main class="mainBlock">
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'gesignShop');
        $posts = $mysqli->query("SELECT product.product_name, product.price, product.img FROM `carttop` JOIN `product` ON carttop.product_id=product.id");
        ?>
      <section class="myCart">
        <span class="myCart_title" data-cart-empty>Моя корзина</span>
        <section class="iphoneCards">
          <div class="iphone__block" id="1">
            <div class="blockCard">
              <img src="./src/sofa1.png" alt="" />
              <span class="leftCard">
                <div class="cardName">Birdnest Japanese</div>
                <span class="btnCard">
                  <button id="fav">В избранное</button>
                  <button id="del" class="del">Удалить</button>
                </span>
              </span>
              <span class="rightCard">
                <div class="cardPrice">12000 ₽</div>
                <div class="btnAmount">
                  <button class="btnMinus">
                    <div class="minusItem" data-action="minus">-</div>
                  </button>
                  <span class="itemAmount" data-counter>1</span>

                  <button class="btnPluse">
                    <div class="pluseItem" data-action="plus">+</div>
                  </button>
                </div>
              </span>
            </div>
          </div>
        </section>

        <section class="iphoneCards">
          <div class="iphone__block" id="1">
            <div class="blockCard">
              <img src="./src/sofa1.png" alt="" />
              <span class="leftCard">
                <div class="cardName">Birdnest Japanese</div>
                <span class="btnCard">
                  <button id="fav">В избранное</button>
                  <button id="del" class="del">Удалить</button>
                </span>
              </span>
              <span class="rightCard">
                <div class="cardPrice">12000 ₽</div>
                <div class="btnAmount">
                  <button class="btnMinus">
                    <div class="minusItem" data-action="minus">-</div>
                  </button>
                  <span class="itemAmount" data-counter>1</span>

                  <button class="btnPluse">
                    <div class="pluseItem" data-action="plus">+</div>
                  </button>
                </div>
              </span>
            </div>
          </div>
        </section>

        <section class="iphoneCards">
          <div class="iphone__block" id="1">
            <div class="blockCard">
              <img src="./src/sofa1.png" alt="" />
              <span class="leftCard">
                <div class="cardName">Birdnest Japanese</div>
                <span class="btnCard">
                  <button id="fav">В избранное</button>
                  <button id="del" class="del">Удалить</button>
                </span>
              </span>
              <span class="rightCard">
                <div class="cardPrice">12000 ₽</div>
                <div class="btnAmount">
                  <button class="btnMinus">
                    <div class="minusItem" data-action="minus">-</div>
                  </button>
                  <span class="itemAmount" data-counter>1</span>

                  <button class="btnPluse">
                    <div class="pluseItem" data-action="plus">+</div>
                  </button>
                </div>
              </span>
            </div>
          </div>
        </section>
      </section>
      <article class="total">
        <div class="Mai-prod__price">
          <div class="prod__price">
            <p style="margin: 10px 0">Итого<span class="dashed"></span></p>
            <span class="amountSum" data-amount>36 000 ₽</span>
          </div>

          <div class="big-btn">
            <input class="big-btn__button" type="button" value="Заказать" />
          </div>
        </div>
      </article>
    </main>
    <footer class="blockFooter">
      <h4>Работу выполнили Джорубова и Мелехин</h4>
    </footer>
    <script src="./index.js"></script>
  </body>
</html>
