<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPayment */

$this->title = 'Update Guest Payment: ' . $model->GuestPaymentId;
$this->params['breadcrumbs'][] = ['label' => 'Guest Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GuestPaymentId, 'url' => ['view', 'id' => $model->GuestPaymentId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guest-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
