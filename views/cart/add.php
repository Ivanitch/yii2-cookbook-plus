<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */

/* @var $model app\models\cart\CartAddForm */
$this->title = 'Add item';
$this->params['breadcrumbs'][] = ['label' => 'Cart', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-add">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
    <?= $form->field($model, 'productId') ?>
    <?= $form->field($model, 'amount') ?>
    <div class="form-group">
        <?= Html::submitButton('Add', ['class' => 'btn btn-primary']) ?> </div>
    <?php ActiveForm::end(); ?>
</div>