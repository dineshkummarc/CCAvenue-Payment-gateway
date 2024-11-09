<?php

/**
 * Plugin Name: CCAvenue Payment Gateway for Reseller Club
 * Plugin URI: http://codecanyon.net/item/ccavenue-payment-gateway-for-reseller-club/6858951
 * Description: This extends Reseller Club to accepts money/payments through CCAvenues Payment gateway on your supersite. 
 * File Description: The base configurations of the plugin.
 * This file has the following configurations:  Reseller Club Key, CCAvenue Merchant ID, CCAVenue Working Key and CCAvenue Access Code
 * Author: Ladybird Web Solution
 * Author URI: http://www.ladybirdweb.com
 * Version: 1.2.5
 * Copyright 2014 Ladybird Web Solution
 * @package  CCAvenue Payment Gateway for Reseller Club
 * License: Envato/codecanyon Regular License
 * License URI: http://codecanyon.net/licenses/regular
 */
/** Reseller Club Key */
$key = "xxxx"; //replace ur 32 bit secure key , Get your secure key from your Reseller Control panel

/** CCAvenue Merchant ID */
$merchant_id = "xxxxxxx"; //This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 

/** CCAvenue Working Key or Encryption Key */
$working_key = "xxxxxxxxxxx"; //Shared by CCAVENUES

/** CCAvenue Access Code */
$access_code = "xxx"; //Shared by CCAVENUES

/** Directry URL */
$directory_url = "http://local.rocket.co.in:8081/CCAvenue-Payment-gateway";

/** Redirection URL */
$redirect_url = "http://local.rocket.co.in:8081/CCAvenue-Payment-gateway/responsehandler.php";

/** Action URL from Chekout page */
$action_url = "http://local.rocket.co.in:8081/CCAvenue-Payment-gateway/checkout.php";

/** Currency */
$currency = "INR";

/** Gateway Post URL */
$base_url = "https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction";
// 	Test: https://test.ccavenue.com
?>




