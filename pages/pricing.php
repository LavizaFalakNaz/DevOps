<?php 
// Subscription plans 
// Minimum amount is $0.50 US 
// Interval day, week, month or year 
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
        'price' => 950, 
        'interval' => 'year' 
    ) 
); 
$currency = "USD";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51KE7fbFJhudIUSTWs7Sfk98Q303uMS11TqBkz0aYJlnsTqHtgrHZGu2yec6ULgKH1MbhTh0sXcXY09TmUTwHstZW00A48PB7Bn'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51KE7fbFJhudIUSTWv6viv9aLvZBG3RkzrSN1hTyHwy7TAf2qNHxjRgn7qU3HGm6XagwbHeNkYQ6pwLF0MpRixqK000DUQlaygC'); 
  
// Database configuration  
define('DB_HOST', 'us-cdbr-east-05.cleardb.net'); 
define('DB_USERNAME', 'bcc77e1841a73a'); 
define('DB_PASSWORD', 'dd32e024'); 
define('DB_NAME', 'heroku_7fce67cb249adf3');