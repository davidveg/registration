<?php

use Orm\Model;
class Model_Country extends Model{

    protected static $_table_name = 'countries';
    protected static $_properties = array(
        'id','name', 'created_at','updated_at'
    );
}
?>
