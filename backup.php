<?php
include('gateway.php');
$CSGW = new P3\SDK\Gateway;
$key = '5f9503c192074c50aa542d47e01911b7';
$Amount = $_GET['total'];
$result = substr($Amount,7,strlen($Amount));

$tran = array (
    'merchantID' => '126642',
    'merchantSecret' => $key,
    'action' => 'PREAUTH',
    'type' => 1,
    'countryCode' => 826,
    'currencyCode' => 826,
    'amount' => $result,
    'orderRef' => 'Your Order ID : '. $_GET['order'],
    'formResponsive' => 'Y',
     'transactionUnique' => uniqid(),
     'redirectURL' =>  'https://www.londonslimmingclinic.co.uk/thank-you/',
);

echo $CSGW->hostedRequest($tran);

