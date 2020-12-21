<!----
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  
  ---->
  
  <?php
include('gateway.php');
$CSGW = new P3\SDK\Gateway;
$key = '9GXwHNVC87VqsqNM';


$amount = 12.35;
echo $nombre_format_francais = number_format($amount, 2, '', ' ');
$tran = array (
    'merchantID' => '119837',
    'merchantSecret' => $key,
    'action' => 'PREAUTH',
    'type' => 1,
    'countryCode' => 826,
    'currencyCode' => 826,
    'amount' => $nombre_format_francais,
    'orderRef' => 'Waqas Chussi',
    'formResponsive' => 'Y',
     'transactionUnique' => uniqid(),
     'redirectURL' =>  'http://' .
     $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
);

echo $CSGW->hostedRequest($tran);

$tran = $_POST;
// Extract the return signature as this isn't hashed
$signature = null;
if (isset($tran['signature'])) {
 $signature = $tran['signature'];
 unset($tran['signature']);
 } 
 
 
// Check the return signature
if (!$signature || $signature !== createSignature($tran, $key)) {
 // You should exit gracefully
 die('Sorry, the signature check failed');
 }
// Check the response code
if ($tran['responseCode'] === "0") {
	
	echo 'Payment Done ';
 //header ('Location: https://google.com');
 } else {
 echo "<p>Failed to take payment: " . htmlentities($tran['responseMessage']) .
"</p>";
 }

// Function to create a message signature
function createSignature(array $data, $key) {
// Sort by field name
ksort($data);
// Create the URL encoded signature string
$ret = http_build_query($data, '', '&');
// Normalise all line endings (CRNL|NLCR|NL|CR) to just NL (%0A)
$ret = str_replace(array('%0D%0A', '%0A%0D', '%0D'), '%0A', $ret);
// Hash the signature string and the key together
return hash('SHA512', $ret . $key);
}
?>