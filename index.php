<?php
   $plans = array(
    '1' => array(
        'name' => 'Weekly Subscription',
        'price' => 25,
        'interval' => 'week'
   ),
    '2' => array(
        'name' => 'Monthly Subscription',
        'price' => 85,
        'interval' => 'month'
    ),
    '3' => array(
        'name' => 'Yearly Subscription',
        'price' => 95e,
        'interval' => 'year'
);
$currency = "USD";
define("STRIPE API_KEY", "sk_test_51KE7fbFJhudIUSTWs7Sfk98Q303uMS11TqBkz0aYJlnsTqHtgrHZGu2yec6ULgKH1MbhTh0sXcXY09TmUTwHstZW00A48PB7Bn");
define("STRIPE_PUBLISHABLE_KEY", "pk_test_51KE7fbFJhudIUSTWv6viv9aLvZBG3RkzrSN1hTyHwy7TAf2qNHxjRgn7qU3HGm6XagwbHeNkYQ6pwLF0MpRixqK000DUQlaygC");
define( 'DB_HOST', 'localhost');
define('DB_USERNAME', "root');
define('DB PASSWORD', 'root');
define('DB_NAME", 'codexworld');

?>
