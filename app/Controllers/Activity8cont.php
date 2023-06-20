<?php

namespace App\Controllers;

class Activity8cont extends BaseController
{
    public function index()
    {
        return view('activity8view');
    }

    public function getInfo(){

        $available_products = 155;
        $product_price = 50;
        $customers_order = 65;
        $total_transaction = 56;

        //format data in associative array

        $data = array (
            'success' => true,
            'available_products' => $available_products,
            'product_price' => $product_price,
            'customers_order' => $customers_order,
            'total_transaction' => $total_transaction
        );

        //format data in associative array
        return $this->response->setJSON($data);





    }
}