
Your Request:
<?php
    $name       = $_REQUEST['name'];
    $hashname   = $_REQUEST['hashname'];
    $homehash   = $_REQUEST['homehash'];
    $shirtsize  = $_REQUEST['shirt'];
    

    
    $dor =  date("m/d/y");
    $price = 50;
    
    if ($shirtsize != "None"){
        $price += 25;
    }
    
    $body = "";
    $body .= "Name:                 $name\n";
    $body .= "Hash name:            $hashname\n";
    $body .= "Home Hash:            $homehash\n";
    $body .= "Shirt size:           $shirtsize\n";
    $body .= "Date of Registration: $dor\n";
    $body .= "Price:                $price\n";
    
    
    $htmlbody = "<pre>" . $body . "</pre>";

    echo("$htmlbody");
    

    $to = "pdoran@cs.brown.edu";
    $subject = "RIH3 1269 Registrant";
    $otherargs = "From: noreply@rih3.com";
    if (mail($to, $subject, $body, $otherargs)) {
        echo("<p>Message successfully sent!</p>");
    } else {
        echo("<p>Message delivery failed...</p>");
    }
?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Registration Fee">Registration Fee</td></tr><tr><td><select name="os0">
	<option value="Registration">Registration $50.00</option>
	<option value="Registration and T-Shirt">Registration and T-Shirt $75.00</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


We can have them purchase it through one paypal link 
or one many paypal links. I can easily have this script
display a paypal link for a certain price depending on 
registration date. I think its best to have one price 
for all pre-registration and 10 dollars extra for day of.
PayPal is very secure. We will receive an invoice with the
name of the purchaser. I cannot solve the purchase without
paypal account problem.