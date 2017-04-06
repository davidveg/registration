<?php

use Orm\Model;
class Model_User extends Model
{
    protected static $_table_name = 'users';
    protected static $_properties = array(
        'id', 'firstname', 'lastname', 'email' ,'password', 'social_number', 'phone_number' , 'created_at','updated_at'
    );
}

?>
