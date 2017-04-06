<?php
class CustomValidation {

  public static function _validation_nif($value) {
    Validation::active()->set_message('nif', 'The :label must be a valid number');

    $nif = $value;
    $ignoreFirst = true;
  	$nif=trim($nif);
  	if (!is_numeric($nif) || strlen($nif)!=9) {
  		return false;
  	} else {
  		$nifSplit=str_split($nif);
  		if (in_array($nifSplit[0], array(1, 2, 5, 6, 8, 9)) || $ignoreFirst) {
  			$checkDigit=0;
  			for($i=0; $i<8; $i++) {
  				$checkDigit+=$nifSplit[$i]*(10-$i-1);
  			}
  			$checkDigit=11-($checkDigit % 11);
  			if($checkDigit>=10) $checkDigit=0;
  			if ($checkDigit==$nifSplit[8]) {
  				return true;
  			} else {
  				return false;
  			}
  		} else {
  			return false;
  		}
  	}
  }

  public static function _validation_phone_number($value, $country_id) {
    $country = Model_Country::find($country_id);
    Validation::active()->set_message('phone_number', 'The :label must be a ' . $country->name . ' valid number ');
    $phone = $value;
    if($country->name == 'Portugal' && preg_match("/^3519[1236]{1}[0-9]{7}$/", $phone)) {
      return true;
    }else if($country->name == 'Brazil' && preg_match("/^55[0-9]{2}([9]{1})?([0-9]{4})([0-9]{4})$/", $phone)) {
      return true;
    }else if($country->name == 'Germany' && preg_match("/^49[0-9]{2}([9]{1})?([0-9]{4})([0-9]{4})$/", $phone)) {
      return true;
    }else if($country->name == 'Norway' && preg_match("/^47[0-9]{2}([9]{1})?([0-9]{4})([0-9]{4})$/", $phone)) {
      return true;
    }else if($country->name == 'Spain' && preg_match("/^34[0-9]{2}([9]{1})?([0-9]{4})([0-9]{4})$/", $phone)) {
      return true;
    }else{
      return false;
    }
  }
}

?>
