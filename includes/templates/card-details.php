<?php /**
* Payzone Payment Gateway
* ========================================
* Web:   http://payzone.co.uk
* Email:  online@payzone.com
* Authors: Payzone, Keith Rigby
*/

if (count(get_included_files()) ==1) {
    exit("Direct access not permitted.");
}

?>
<hr>
<div class='payzone-form-section'>
  <p class='payzone-form-header'>Card Details</p>
</div>
<div class='payzone-form-section'>
  <label for='CardName'>Card Name</label>
  <input type="text" name="CardName" value="<?php echo (isset($_POST["CustomerName"]))?$_POST["CustomerName"]:null; ?>" />
  <label for='CardNumber'>Card Number</label>
  <input type="tel" name="CardNumber" id="CardNumber" value="" placeholder="XXXX XXXX XXXX XXXX" pattern="\d{4} \d{4} \d{4} \d{4}" class="masked"/>
  <span class='cvv-wrap'>
    <label for='CV2'>CV2</label>
    <input type="text" name="CV2" value="" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
  </span>
  <label for='StartDateMonth'>Start Date</label>
  <select name="StartDateMonth" class='select-30'>
    <option value=''> </option>
    <?php echo $PayzoneHelper->getMonthList();?>
  </select>
  <select name="StartDateYear" class='select-70'>
    <option value=''> </option>
    <?php echo $PayzoneHelper->getStartYearList();?>
  </select>
  <label for='ExpiryDateMonth'>Expiry Date</label>
  <select name="ExpiryDateMonth" class='select-30'>
    <option value=''> </option>
    <?php echo $PayzoneHelper->getMonthList();?>
  </select>
  <select name="ExpiryDateYear"class='select-70'>
    <option value=''> </option>
    <?php echo $PayzoneHelper->getExpiryYearList();?>
  </select>
</div>
<hr>
<script src="assets/inputmasking.js" data-autoinit="true"></script>
