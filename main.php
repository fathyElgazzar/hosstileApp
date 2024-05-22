<?php 
include 'server.php';

$records = mysqli_query($db, "SELECT * FROM `product`");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>HOSSTILE SUPPLEMENTS</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav-container">
        <div class="logo-box">
          <img src="images/husstile-logo.avif" alt="logo" class="logo">
        </div>
        <ul class="nav">
          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
          <li class="nav-item">
            <a href="#supplements" class="nav-link">Supplements</a>
          </li>
          <li class="nav-item">
            <a href="./styles/team.html" class="nav-link">Who are we?</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <form  method="POST" action="">
              <button name="logout" type="submit" class='btn-dark'>Log out</button>
            </form>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="about" id="about">
        <h2 class="heading-secondary">HOSS•TI•LE (ADJ)</h2>
        <p class="about-text">
          A relentless and aggressive pursuit of a passion or goal. To let no
          sacrifice or adversity stand in the way.
        </p>
        <p class="about-text">
          From the packaging to the formulas and everything in between, IFBB Pro
          Fouad Abiad didn’t take any shortcuts when creating HOSSTILE.
        </p>
        <p class="about-text">
          With over 20 years of experience in bodybuilding, 13 of which
          dedicated to competing as a professional bodybuilder in the IFBB
          Professional League, Fouad has developed a keen sense for what
          bodybuilders and serious lifters are looking for in sports nutrition
          supplements. HOSSTILE was created with these athletes in mind and
          anyone looking to maximize their performance and know what it feels
          like to train at a higher level.
        </p>
        <p class="about-text">
          HOSSTILE sources our raw ingredients from some of the best, most
          reputable providers in the world. Every ingredient, flavor element,
          and natural coloring component has been scrutinized for quality,
          purity, and science-backed effectiveness, meticulously tested in the
          gym, and ultimately selected based on overall performance within each
          formula. All HOSSTILE labels are fully transparent, so you know
          exactly what you are getting in each bottle.
        </p>
        <p class="about-text">
          With premium sources of ingredients, including some of the industry’s
          best patented and branded innovations, vegan and fermented amino
          acids, natural coloring, effective dosages, and careful consideration
          for ingredient synergy, HOSSTILE products were designed to fuel your
          training unlike anything else on the market. Fouad wholeheartedly
          stands behind every HOSSTILE product offered.
        </p>
        <p class="about-text">
          HOSSTILE is 100% committed to bringing you the highest-quality
          products through stringent quality control. We have strict quality
          control procedures in place, not only for our ingredients, but also
          for our manufacturing facilities. All products are thoroughly tested
          throughout development, ensuring that every product meets our
          standards. Additionally, our facilities comply with current Good
          Manufacturing Practices (cGMP) to minimize the risk involved in
          production.
        </p>
        <p class="about-text">
          Our approach to product development is as aggressive as our approach
          to any other goal in life – nothing less than HOSSTILE.
        </p>
      </section>

      <section id="supplements" class="store-container">
        <h2 class="heading-secondary">Meet our products</h2>
        <div class="store-grid">
          
<?php
foreach($records as $data){
    ?>

          <div class="store-item-box">
            <div class="store-item-img-box">
              <img
                src="<?php echo "./images/", $data['image'];?>"
                alt="Beta Alanine"
                class="store-item-img"
              />
            </div>
            <div class="store-item-text-box">
              <h3 class="store-item-description"><?php echo $data['pname']; ?></h3>
              <p class="store-item-price">$<?php echo $data['price']; ?> USD</p>
              <form class="form">
                <label for="supp-amount" class="text-label"
                  >Amount &darr;</label
                >
                <input
                  type="text"
                  name="text"
                  id="supp-amount"
                  class="text-input"
                  placeholder="Enter amount please"
                />
                <button type="submit" class="btn btn-add">
                  Add to cart
                  <svg class="add-icon">
                    <use
                      xlink:href="images/sprite.svg#icon-shopping-cart"
                    ></use>
                  </svg>
                </button>
              </form>
            
            </div>
          </div>
          <?php } ?>


        </div>
      </section>
    </main>
    <footer id="contact" class="footer">
      <div class="footer-box">
        <div class="footer-logo-box">
          <img src="images/husstile-logo.avif" alt="" class="footer-logo" />
        </div>
        <div class="footer-text-box">
          <div class="footer-text">
            This project made by
            <span class="footer-name">Fathy Elgazar</span>,
            <span class="footer-name">Abdullah Mohammed</span>,
            <span class="footer-name">Amr Walid</span>,
            <span class="footer-name">Tony anis</span> ,
            <span class="footer-name">Mohammed Genedy</span> and
            <span class="footer-name">Mr. White</span>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
