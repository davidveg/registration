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
}

?>
