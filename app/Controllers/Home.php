<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function testDB()
    {
        $db = \Config\Database::connect();
        if ($db->connect_error) {
            echo "Database Connection Error: " . $db->connect_error;
        } else {
            echo "Database Connected Successfully!";
        }
    }
}
