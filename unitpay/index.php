<?php

error_reporting(E_ALL);

include 'config.php';
include 'UnitPayModel.php';
include 'UnitPay.php';
include '../engine/functions.php';

class UnitPayEvent
{
    public function check($params)
    {
        try {
            $unitPayModel = UnitPayModel::getInstance();

            return true;

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function pay($params)
    {
         $unitPayModel = UnitPayModel::getInstance();
         $countItems = floor($params['sum'] / 1);
         $unitPayModel->donateForAccount($params['account'], $countItems);
    }
}

$payment = new UnitPay(
    new UnitPayEvent()
);

echo $payment->getResult();
