<?php

namespace App\Controllers;

class Customers extends BaseController
{

    public function index()
    { // Customers::index

        $data = array(
            'title' => 'Customer Accounts',
            'customers' => array(

                array(
                    'fullname' => 'Juan Dela Crux',
                    'email' => 'CruxJuanDe@gmail.com',
                    'phone_num' => '09123456789'
                ),

                array(
                    'fullname' => 'Florence Samantha Paz',
                    'email' => 'paz@yahoo.com',
                    'phone_num' => '09167891231'
                ),

                array(
                    'fullname' => 'Dominic Rivero',
                    'email' => 'domri@gmail.com',
                    'phone_num' => '09456203478'
                ),
                array(
                    'fullname' => 'Rowell Demerin',
                    'email' => 'rowdem@gmail.com',
                    'phone_num' => '09478512345'
                ),
                array(
                    'fullname' => 'Desiree Manuel',
                    'email' => 'desman@gmail.com',
                    'phone_num' => '09756423258'
                ),
                array(
                    'fullname' => 'John Donald Eslabon',
                    'email' => 'jdes@gmail.com',
                    'phone_num' => '09785321456'
                ),
                array(
                    'fullname' => 'Irick Marvin',
                    'email' => 'irickmarvin@hotmail.com',
                    'phone_num' => '094625782345'
                ),
                array(
                    'fullname' => 'Ivan Historillo',
                    'email' => 'ivan@yahoo.com',
                    'phone_num' => '09456321752'
                ),
                array(
                    'fullname' => 'Craven Regalado',
                    'email' => 'venregalado@gmail.com',
                    'phone_num' => '09165478235'
                ),
                array(
                    'fullname' => 'Daniel Padilla',
                    'email' => 'danpad@yahoo.com',
                    'phone_num' => '09452137891'
                ),
                array(
                    'fullname' => 'Risa  Hontiveros',
                    'email' => 'honriza@gmail.com',
                    'phone_num' => '09456321475'
                ),
                array(
                    'fullname' => 'Kiko Pangilinan',
                    'email' => 'kikopan@yahoo.com',
                    'phone_num' => '09753126485'
                ),
                array(
                    'fullname' => 'Bam Aquino',
                    'email' => 'aquinobam@gmail.com',
                    'phone_num' => '09456321573'
                ),
                array(
                    'fullname' => 'Chel Diokno',
                    'email' => 'cheldiok@yahoo.com',
                    'phone_num' => '05934871235'
                ),
                array(
                    'fullname' => 'Chiz Wheeze',
                    'email' => 'ChizWhe@gmail.com',
                    'phone_num' => '09456328712'
                ),
                array(
                    'fullname' => 'Leni Robredo',
                    'email' => 'lenrobredo@gmail.com',
                    'phone_num' => '09753264891'
                ),
                array(
                    'fullname' => 'Leila Delima',
                    'email' => 'ledelima34@gmail.com',
                    'phone_num' => '09563245687'
                )

            )
        );

        return view('partials/header', $data)
            . view('customers', $data)
            . view('partials/footer');

    }

}