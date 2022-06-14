<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su 
tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. 

prodotto(nome,prezzo,codice) 
  {
    cibo
    giochi
    trasporto
  }

utente(nome, mail, scadenza carta) -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Transport.php";

$dogFood = new Food("Cibo per cani", "$4.99", "Italy");
$catFood = new Food("Cibo per gatti", "$3.99", "Italy");
$catToy = new Toy("Corda per gatti", "$2.99", "China");
$dogBone = new Toy("Osso finto per cani", "$7.99", "Italy");
$transporCage = new Transport("Cuccia da trasporto", "$39.99", "Germany");
$transportBag = new Transport("Borsa per trasporto", "$19.99", "Germany");


$Utente1 = new User("Michele", "Mikael@lao.it", "20/09/2023");
var_dump($Utente1)

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
  
</body>
</html>
