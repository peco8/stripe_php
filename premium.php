<?php
require_once 'app/init.php';

if($user->premium) {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Premium</title>
    </head>
    <body>
    <p>You're about to go premium.</p>
    <form action="premium_charge.php" method="POST">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable']; ?>"
        data-name="Website"
        data-description="Premium membership"
        data-currency="jpy"
        data-amount="100"
        data-email="<?php echo $user->email ?>"
        data-locale="auto">
      </script>
    </form>
    </body>
</html>
