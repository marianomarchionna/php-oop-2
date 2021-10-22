<!-- Shop online. Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario.
Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.
BONUS:
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
        $c = new CreditCard(..);
        $user->insertCreditCard($c);
2.    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->
<?php

    require_once 'User.php';
    require_once 'Premium.php';
    require_once 'Product.php';

    try {
        $products = [

            new Product('Cassa Bluetooth', '35.99'),
    
            new Product('Spazzola morbida per cani e gatti', '11.89'),
    
            new Product('Monopattino elettrico', '289'),

            new Product('Tapis roulant', '220.57'),

            new Product('Guanti da moto', '15.99'),

            new Product('Blocco note', '3.50'),

            new Product('Telecomando universale', '19.99')
    
        ];

        $users = [

            new User('Mariano', 'Marchionna', 21),
    
            new User('Paolo', 'Bosco', 35),
    
            new User('Francesco', 'Bitetti', 29),

            new User('Alessandra', 'Pizzulli', 18),
    
            new User('Mattia', 'Tamburrano', 43)
    
        ];

        $users[0]->address = 'Via Fornaci 31';
        $users[0]->city = 'Ginosa';
        $users[0]->cap = '74013';
        $users[1]->address = 'Via Roma 70';
        $users[1]->city = 'Milano';
        $users[1]->cap = '20019';
        $users[2]->address = 'Via Formica 22';
        $users[2]->city = 'Napoli';
        $users[2]->cap = '80100';
        $users[3]->address = 'Via Capruzzi 109';
        $users[3]->city = 'Bari';
        $users[3]->cap = '70121';
        $users[3]->setAge(14);
        $users[4]->address = 'Via Battaglia 11';
        $users[4]->city = 'Torino';
        $users[4]->cap = '10092';


        $premiumUsers = [
            new Premium('Marco', 'Alessandrini', 33),
            new Premium('Domenico', 'Lella', 54)
        ];

        $premiumUsers[0]->address = 'Via Giannini 131';
        $premiumUsers[0]->city = 'Roma';
        $premiumUsers[0]->cap = '00031';
        $premiumUsers[0]->setDiscount('30%');
        $premiumUsers[1]->address = 'Via Umberto I 70';
        $premiumUsers[1]->city = 'Palermo';
        $premiumUsers[1]->cap = '90121';
        $premiumUsers[1]->setDiscount('20%');

    } catch(Exception $e) {
        echo 'Si è verificato un errore ' . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <h2>Prodotti</h2>
    <?php
        foreach($products as $product) {?>
            <p><?php echo $product->getName() . ' - ' . $product->getPrice() . ' €'; ?></p>
    <?php } ?>
    <h2>Utenti</h2>
    <?php
        foreach($users as $user) {?>
            <p><?php echo $user->getName() . ' ' . $user->getSurname() . ', ' . $user->getAge() . ' anni. ' . $user->getAddress(); ?></p>
    <?php } ?>
    <h2>Utenti Premium</h2>
    <?php
        foreach($premiumUsers as $premium) {?>
            <p><?php echo $premium->getName() . ' ' . $premium->getSurname() . ', ' . $premium->getAge() . ' anni. ' . $premium->getAddress() . 'Sconto utente: ' . $premium->getDiscount(); ?></p>
    <?php } ?>
</body>
</html>