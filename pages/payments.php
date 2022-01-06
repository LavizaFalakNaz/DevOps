<?php
// Include configuration file
require_once 'config.php';
// Get user ID from current SESSION
$userID = isset($_SESSION[ 'loggedInUserID']) ?$_SESSION['loggedInUserID']:1;
$payment_id $statusMsg = $api_error =
Sordstatus = 'error';
// Check whether stripe token is not empty
if(!empty($ POST['subscr_plan']) && !empty($_POST['stripeToken'])){
   // Retrieve stripe token and user info from the submitted form data
    $token = $_POST['stripeToken'];
            $_POST['name'];
             $_POST['email'];
    $name
    $email
   // Plan info
    $planID
    $planInfo
    $planName
    $planPrice =
    $planInterval = $planInfo['interval'];
              $_POST['subscr_plan'];
                $plans[$planID];
                $planInfo[ 'name'];
                 $planInfo[ 'price'];
            // Include stripe PHP library
require once 'stripe-php/init.php';
// Set API key
\stripe\stripe:: setApikey (STRIPE_API_KEY);
// Add customer to stripe
try {
  Scustomer = \Sstripe\Customer:: create(array(
    'email' => $email,
    'source' => $token
  ));
}catch(Exception $e) {
    Sapi error = $e->getMessage();
 if(empty($api_error) && $customer){
   // Convert price to cents
    $priceCents = round ($planPrice 100); 
   // Create a plan
    try {
        Splan = \Stripe \Plan::create(array(
             "product" => [
                 "name" => $planName
             1,
             "amount" => $priceCents,
             "currency" => $currency,
             "interval" => $planInterval,
             "interval_count" => 1
        ));
    }catch(Exception $e) {
        $api_error = $e->getMessage();
     if(empty($api_error) && $plan){
       // Creates a new subscription
        try (
            $subscription = \Stripe\Subscription: :create(array( 
                 "customer" => $customer->id,
                 "items" => array(
                     array(
                         "plan" -> $plan->id,
                     )
                     if(empty($api_error) && $plan){
                        // Creates a new subscription
                         try {
                                              \Stripe\Subscription::create(array( $subscription
                                 "customer" => $customer->id,
                                 "items" => array(
                                           
                                     array(
                                         "plan" => $plan->id,
                             ));
                          ]catch(Exception $e) {
                             $api_error = $e->getMessage ();
                         if(empty($api_error) && $subscription){
                            // Retrieve subscription data
                             $subsData $subscription->jsonSerialize(); 
                             // Check whether the subscription activation is successful
            == 'active'){ if($subsData['status']
                // Subscription info
                $subscrID = $subsData['id'];
                $custID = $subsData['customer'];
                SplanID
                $planAmount - ($subsData[ 'plan']['amount']/100);
                $plancurrency
                $planinterval - $subsData['plan']['interval'];
                $planIntervalcount = $subsData['plan']['interval_count'];
                Screated = date("Y-m-d H:i:s", $subsData[ 'created']);
                Scurrent period_start = date( "Y-m-d H:i:s", $subsData['current_period_start']);
                      SsubsData[ 'plan']['id'];
                        - $subsData[ 'plan']['currency'];
                                                    od end),
                $status $subsData['status'];
                   // Insert transaction data into the database
$sql
user_subscriptions (user_id,stripe_subscription_id,stripe_customer_id,stripe_plan_id,plan_amount,plan_amount_currency,plan_interval,plan_interval_count, payer_email
,created,plan_period_start,plan_period_end, status) VALUES(".$userID.",".$subscrID."',"". $ustID.",". $planID."",'". $planAmount.",'".$plancurrency.",".
$planinterval."',". $planIntervalcount.",". $email.""," $created.","". $current_period start."',".$current_period end.",".$status."")";
   "INSERT INTO
Sinsert $db->query ($sql);
// Update subscription id in the users table
