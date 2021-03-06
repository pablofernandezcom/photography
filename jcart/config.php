<?php
// Do NOT store any sensitive info in this file!!!
// loaded into the browser as plain text via Ajax
////////////////////////////////////////////////////////////////////////////////
// REQUIRED SETTINGS

// Path to  jcart files
$config['jcartPath']              = 'jcart/';

// Path to  checkout page
$config['checkoutPath']           = 'checkout.php';

$config['item']['id']             = 'my-item-id';    // Item id
$config['item']['name']           = 'my-item-name';    // Item name
$config['item']['price']          = 'my-item-price';    // Item price
$config['item']['qty']            = 'my-item-qty';    // Item quantity
$config['item']['url']            = 'my-item-url';    // Item URL (optional)
$config['item']['add']            = 'my-add-button';    // Add to cart button

// PayPal secure merchant ID
$config['paypal']['id']           = 'pay@swiftrover.com';

////////////////////////////////////////////////////////////////////////////////

$config['currencyCode']           = '';

//unique token to form posts to prevent CSRF exploits
$config['csrfToken']              = false;

// Override default cart text
$config['text']['cartTitle']      = '';    // Shopping Cart
$config['text']['singleItem']     = '';    // Item
$config['text']['multipleItems']  = '';    // Items
$config['text']['subtotal']       = '';    // Subtotal
$config['text']['update']         = '';    // update
$config['text']['checkout']       = '';    // checkout
$config['text']['checkoutPaypal'] = '';    // Checkout with PayPal
$config['text']['removeLink']     = '';    // remove
$config['text']['emptyButton']    = '';    // empty
$config['text']['emptyMessage']   = '';    // Your cart is empty!
$config['text']['itemAdded']      = '';    // Item added!
$config['text']['priceError']     = '';    // Invalid price format!
$config['text']['quantityError']  = '';    // Item quantities must be whole numbers!
$config['text']['checkoutError']  = '';    // Your order could not be processed!

//OR BUTTON IMAGES
$config['button']['checkout']     = '';
$config['button']['paypal']       = '';
$config['button']['update']       = '';
$config['button']['empty']        = '';


////////////////////////////////////////////////////////////////////////////////

// Display tooltip after the visitor adds an item to their cart?
$config['tooltip']                = true;

// Allow decimals in item quantities?
$config['decimalQtys']            = false;

// How many decimal places are allowed?
$config['decimalPlaces']          = 1;

// Number format for prices
$config['priceFormat']            = array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',');

// Send visitor to PayPal via HTTPS?
$config['paypal']['https']        = true;

// Use PayPal sandbox?
$config['paypal']['sandbox']      = false;

// The URL a visitor is returned to after completing their PayPal transaction
$config['paypal']['returnUrl']    = '';

// The URL of your PayPal IPN script
$config['paypal']['notifyUrl']    = '';

?>
