<?php 
// Include configuration file  
session_start();
require_once 'pricing.php'; 
if(isset($_SESSION["id"])){
    // echo $userID;
     //  $userID=1;
     $userID = $_SESSION["id"] ;  
?>

<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stripe subscription API Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://js.stripe.com/v3/"></script>
	</head>
	<body>
	<div class='container'>
	<h1>Stripe subscription API Integration</h1>
	<div class="panel">
    
    <form action="payments.php" method="POST" id="paymentFrm">
        <div class="panel-heading">
            <h3 class="panel-title">Plan Subscription with Stripe</h3>
			
            <!-- Plan Info -->
            <p>
            <label class="form-label">SELECT PLAN</label>
                <select name="subscr_plan" id="subscr_plan" class="form-select">
                    <?php foreach($plans as $id=>$plan){ ?>
                        <option value="<?php echo $id; ?>"><?php echo $plan['name'].' [$'.$plan['price'].'/'.$plan['interval'].']'; ?></option>
                    <?php } ?>
                </select>
            </p>
        </div>
        <div class="panel-body">
            <!-- Display errors returned by createToken -->
            <div id="paymentResponse"></div>
			
            <!-- Payment form -->
            <div class="form-group">
                <label class="form-label">NAME</label>
                <input type="text" name="name" id="name" class="field form-control" placeholder="Enter name" required="" autofocus="">
            </div>
            <br>
            <div class="form-group">
                <label class="form-label">EMAIL</label>
                <input type="email" name="email" id="email" class="field form-control" placeholder="Enter email" required="">
            </div>
            <br>
            <div class="form-group">
                <label class="form-label">CARD NUMBER</label>
                <div id="card_number" class="field form-control"></div>
            </div>
            <br>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                        <label class="form-label">EXPIRY DATE</label>
                        <div id="card_expiry" class="field form-control"></div>
                    </div>
                </div>
                <br>
                <div class="right">
                    <br>
                    <div class="form-group">
                        <label class="form-label">CVC CODE</label>
                        <div id="card_cvc" class="field form-control"></div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </div>
    </form>
</div>
</div>

<script>
// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    form.submit();
}
</script>
</body>
</html>
<?php } 
    else{
        ?>
        <div><h1>NOT FOUND </h1></div>
        <?php
    }
    ?>
