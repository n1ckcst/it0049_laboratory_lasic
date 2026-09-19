<?php

namespace App\Controllers;

class Users extends BaseController
{

    public function index()
    {

        $data = array(
            'title' => 'User Accounts',
            'users' => array(

                array(
                    'username' => 'm202601',
                    'fullname' => 'Jose Rizal',
                    'role' => 'Manager'
                ),
                array(
                    'username' => 'admin202601',
                    'fullname' => 'Andres Bonifacio',
                    'role' => 'Administrator'
                ),
                array(
                    'username' => 'cashier202407',
                    'fullname' => 'Maria Clara',
                    'role' => 'Cashier'
                ),
                array(
                    'username' => 'cashier202701',
                    'fullname' => 'Manuel Quezon',
                    'role' => 'Cashier'
                ),
                array(
                    'username' => 'staff202508',
                    'fullname' => 'Omie Rivera',
                    'role' => 'Staff'
                ),
                array(
                    'username' => 'staff202801',
                    'fullname' => 'Abby Binay',
                    'role' => 'Staff'
                ),
                array(
                    'username' => 'm202602',
                    'fullname' => 'Nico Lasic',
                    'role' => 'Manager'
                )
            )
        );

        return view('partials/header', $data)
            . view('users', $data)
            . view('partials/footer');
    }

}