<?php

use Orm\Model;
class Model_Address extends Model
{
    protected static $_table_name = 'addresses';
    protected static $_belongs_to = array(
      'country' => array(
          'key_from' => 'country_id',
          'model_to' => 'Model_Country',
      ),
      'user' => array(
          'key_from' => 'user_id',
          'model_to' => 'Model_User',
      ));
    protected static $_properties = array(
        'id','street_address', 'location', 'zipcode', 'created_at', 'updated_at','user_id','country_id'
    );
}

?>
