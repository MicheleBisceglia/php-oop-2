<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su 
tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/user.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toy.php";
require_once __DIR__ . "/transport.php";

//New product
$dogFood = new Food("Cibo per cani", "4.99", "Italy", "Cani", "13/11/2022");
$catFood = new Food("Cibo per gatti", "3.99", "Italy", "Gatti", "01/12/2022");
$catToy = new Toy("Corda per gatti", "2.99", "China", "Gatti", "sisal");
$dogBone = new Toy("Osso finto per cani", "7.99", "Italy", "Cani", "plastica");
$transporCage = new Transport("Cuccia da trasporto", "39.99", "Germany","medium", "Nero");
$transportBag = new Transport("Borsa per trasporto", "19.99", "Germany", "large", "blu");

//New User
$Michele = new User("Michele", "Mikael@lao.it", "20/09/2023", "true");

//Prodotti scelti dall'utente
$Michele->addToCart($dogBone);
$Michele->addToCart($catToy);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- stampa provvisoria -->
  <h1>Lista prodotti</h1>
  <ul>
    <li>
      <?php echo $dogFood -> printProduct(); ?>
    </li>
    <li>
      <?php echo $catFood -> printProduct(); ?>
    </li>
    <li>
      <?php echo $catToy -> printProduct(); ?>
    </li>
    <li>
      <?php echo $dogBone -> printProduct();?>
    </li>
    <li>
      <?php echo $transporCage -> printProduct(); ?>
    </li>
    <li>
      <?php echo $transportBag -> printProduct(); ?>
    </li>
  </ul>

  <h2>Il tuo carrello</h2>
  <ul>
    <?php foreach($Michele->cart as $cartItem) { ?>
      <li><?php echo $cartItem->printProduct(); ?></li>
    <?php } ?>
  </ul> 
  <h3>Totale: $<?php echo $Michele->getTotalPrice(); ?></h3>
  <h2></h2>
  
</body>
</html>
