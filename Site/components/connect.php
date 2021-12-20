<?php

class connect
{
    public function db_connect()
    {
        $host_db = 'localhost';
        $user_db = 'Nikita';
        $password_db = '123';
        $name_db = 'user_list';
        $connect = new mysqli($host_db, $user_db, $password_db, $name_db);
        return $connect;
    }
}
?>