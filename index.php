<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>HOME ELEGANCE</title>
    <link rel="stylesheet" href="./src/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Noto+Serif:wght@700&family=Poppins:wght@300&family=Redacted+Script:wght@300&family=Vollkorn+SC:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <section class="headerSection">
        <nav>
          <div class="navFirst">
            <h2>Logo</h2>
          </div>
          <div class="navsecond">
            <a href="#">Главная</a>
            <a href="./catalog.html">Каталог</a>
            <a href="#">О нас</a>
            <a href="cart.php"><img src="./src/cartWhite.png" alt="" /></a>
            <a href="#"><img src="./src/avatarWhite.png" alt="" /></a>
          </div>
        </nav>
        <div class="blockTatitle">
          <p>ДОБРО ПОЖАЛОВАТЬ В HOME ELEGANCE</p>
          <h3>Мы поможем обустроить ваш дом</h3>
          <button>Купить</button>
        </div>
      </section>
    </header>
    <main>
      <?php
$mysqli = new mysqli('localhost', 'root', '', 'gesignShop');
$posts = $mysqli->query("SELECT * FROM `product`");

?>

      <section class="blockMain">
          <form action="addProduct.php" method="get">
              <input type="text" name="product_name">
              <input type="number" name="price">
              <input type="number" name="quantity">
              <input type="text" name="img">
              <button type="submit">Добавить товар</button>
          </form>
        <div class="titleMain">
          <h3>Новые товары</h3>
          <button>Купить</button>
        </div>
        <section class="newProducts">
            <? foreach($posts as $item): ?>

                    <div class="productBlock">
                        <div class="productCard">
                            <img  src= <?=trim($item['img'])?> alt="" width="280px" height="150" />
                        </div>
                        <p><?=$item['product_name']?></p>
                        <p><?=$item['price']?> ₽</p>
                        <button>Добавить в корзину</button>


          </div>
            <?endforeach;?>
<!--          <div class="productBlock">-->
<!--            <div class="productCard">-->
<!--              <img src="./src/sofa2.png" alt="" />-->
<!--            </div>-->
<!--            <p>Birdnest Japanese</p>-->
<!--            <p>12000 ₽</p>-->
<!--          </div>-->
<!---->
<!--          <div class="productBlock">-->
<!--            <div class="productCard">-->
<!--              <img src="./src/sofa3.png" alt="" />-->
<!--            </div>-->
<!--            <p>Birdnest Japanese</p>-->
<!--            <p>12000 ₽</p>-->
<!--          </div>-->
<!---->
<!--          <div class="productBlock">-->
<!--            <div class="productCard">-->
<!--              <img src="./src/sofa1.png" alt="" />-->
<!--            </div>-->
<!--            <p>Birdnest Japanese</p>-->
<!--            <p>12000 ₽</p>-->
<!--          </div>-->
<!---->
<!--          <div class="productBlock">-->
<!--            <div class="productCard">-->
<!--              <img src="./src/sofa2.png" alt="" />-->
<!--            </div>-->
<!--            <p>Birdnest Japanese</p>-->
<!--            <p>12000 ₽</p>-->
<!--          </div>-->
<!---->
<!--          <div class="productBlock">-->
<!--            <div class="productCard">-->
<!--              <img src="./src/sofa3.png" alt="" />-->
<!--            </div>-->
<!--            <p>Birdnest Japanese</p>-->
<!--            <p>12000 ₽</p>-->
<!--          </div>-->
        </section>
      </section>
    </main>
    <footer class="blockFooter">
      <h4>Работу выполнили Джорубова и Мелехин</h4>
    </footer>
  </body>
</html>
