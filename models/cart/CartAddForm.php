<?php

declare(strict_types=1);

namespace app\models\cart;

use yii\base\Model;

class CartAddForm extends Model
{

    public $productId;
    public $amount;

    public function rules()
    {
        return [
            [['productId', 'amount'], 'required'],
            [['amount'], 'integer', 'min' => 1],
        ];
    }
}