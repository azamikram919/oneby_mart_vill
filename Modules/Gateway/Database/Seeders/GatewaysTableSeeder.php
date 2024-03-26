<?php

namespace Modules\Gateway\Database\Seeders;

use Illuminate\Database\Seeder;

class GatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('gateways')->delete();

        \DB::table('gateways')->insert(array(
            7 =>
            array(
                'id' => 8,
                'alias' => 'cashondelivery',
                'name' => 'CashOnDelivery',
                'sandbox' => 1,
                'data' => '{"status":"1","instruction":"Kindly verify your order, and make cash payment in full (as mentioned on order invoice or shipping label) when the delivery agent arrives at your doorstep with your order."}',
                'instruction' => 'Kindly verify your order, and make cash payment in full (as mentioned on order invoice or shipping label) when the delivery agent arrives at your doorstep with your order.',
                'image' => 'thumbnail.png',
                'status' => 1,
            ),
            8 =>
            array(
                'id' => 9,
                'alias' => 'directbanktransfer',
                'name' => 'DirectBankTransfer',
                'sandbox' => 1,
                'data' => '{"status":"1","instruction":"Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account."}',
                'instruction' => 'Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.',
                'image' => 'thumbnail.png',
                'status' => 1,
            ),
            9 =>
            array(
                'id' => 10,
                'alias' => 'checkpayments',
                'name' => 'CheckPayments',
                'sandbox' => 1,
                'data' => '{"status":"1","instruction":"Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode."}',
                'instruction' => 'Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.',
                'image' => 'thumbnail.png',
                'status' => 1,
            ),
        ));
    }
}
