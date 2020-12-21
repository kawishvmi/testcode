<?php
/**
* Payzone Payment Gateway
* ========================================
* Web:   http://payzone.co.uk
* Email:  online@payzone.com
* Authors: Payzone, Keith Rigby
*/

if (count(get_included_files()) ==1) {
    exit("Direct access not permitted.");
}

if($page=='payment' || $page=='cart' || $page=='results'){
  #Payzone Modal Form functions
  require_once(__DIR__ .'/../templates/payzone-modal.php');
}

if($page=='payment'){
?>
  <script>
    PayzonePaymentForm = document.getElementById('payzone-payment-form');
    function payzonePaymentPageLoad(){
      <?php
       if ($PayzoneGateway->getIntegrationType() == \Payzone\Constants\INTEGRATION_TYPE::TRANSPARENT){ ?>
        PayzonePaymentForm.style.display='block';
        window.parent.postMessage({'option':'modalsize','value':'5'},"<?php echo $PayzoneHelper->getSiteSecureURL('root'); ?>");
        window.parent.postMessage({'option':'iframesrc','value':'payment'},"<?php echo $PayzoneHelper->getSiteSecureURL('root'); ?>");
      <?php
      } ?>
    }
  </script>
<?php
}

?>
<script src="assets/payzone_validate.js"></script>
<?php
### Transparent Redirect cart submission control
if($PayzoneGateway->getIntegrationType()==\Payzone\Constants\INTEGRATION_TYPE::TRANSPARENT) {
  if($page=='cart'){
    ?>
    <script>
      document.getElementById("payzone-cart-submit").addEventListener("click",payzoneCartFormSubmission );
      function payzoneCartFormSubmission(evt){
        evt.preventDefault();
        var cartForm = document.getElementById('shopping-cart-form')
        var validated= validateForm(cartForm,'transparent','false');
        if(validated){
          document.getElementById('shopping-cart-form').submit();
        }
      }
    </script>
    <?php
  }
  else if ($page=='payment'){
    ?>
    <script>
      var iframepage='payment';
      document.getElementById("payzone-payment-modal-background").addEventListener("click", closePayzoneModal);
      document.getElementById("payzone-modal-close").addEventListener("click", closePayzoneModal);
      document.getElementById("payzone-cart-submit").addEventListener("click", payzoneCartFormSubmission );
        function payzoneCartFormSubmission(evt){
          evt.preventDefault();
          openLoadingModal('loading');
          window.addEventListener("message", receiveMessageCart, false);
          var cartForm = document.getElementById('payzone-payment-form');
          var validated = validateForm(cartForm,'transparent','true');

          if (validated){
            cartForm.querySelector('[name=CardNumber]').value=cartForm.querySelector('[name=CardNumber]').value.replace(/ /g,"");
            document.getElementById('payzone-payment-form').submit();
            closeLoadingModal();
          }
          else
          {
            closeLoadingModal();
          }
        }
    </script>
    <?php
  }
}
?>
