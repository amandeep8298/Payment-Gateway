<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</Form></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
   
       <h1 class="main_heading">Payment Gateway</h1>
    <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/websrc">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="sb-urjmv12060383@business.example.com">
    <input type="hidden" name="item" value="pay">
    <input type="hidden" name="num" value="1">
    <input type="hidden" name="amount" value="">
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="AU">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="notify_url" value="http://http://localhost/Payment/success.php">
    <input type="hidden" name="return" value="http://http://localhost/Payment/success.php">
    <input type="submit" name="pay" value="Donate">
   </form> 
    </div>
</body>
</html>