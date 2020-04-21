<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "e5baf50a29beedbb0eeac55c529ccbba-f135b0f1-9cc59e28";
$mailgunDomain = "https://app.mailgun.com/app/sending/domains/sandbox9e2fa6b13711424aac55e29bb350898a.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LeHBOwUAAAAACCWxo95n6-HY0qbhkySx-OPkGN1';
$secret = '6LeHBOwUAAAAAKQjLEj_JvMR0UJxYfBASNITXudv';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "fgallegos59@cnm.edu" => "Francisco Gallegos"];
$MAIL_RECIPIENT = ["fgallegos59@cnm.edu"];