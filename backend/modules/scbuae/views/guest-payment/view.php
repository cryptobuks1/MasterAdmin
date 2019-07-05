<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPayment */

$this->title = $model->GuestPaymentId;
$this->params['breadcrumbs'][] = ['label' => 'Guest Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guest-payment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GuestPaymentId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GuestPaymentId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'GuestPaymentId',
            'PaymentGatewayOrderId',
            'Amount',
            'CurrencyCode',
            'PaymentDate',
            'CustomerCareExecutiveId',
            'GuestPaymentStatusId',
            'IsActive',
            'LastUpdated',
            'CreatedOn',
        ],
    ]) ?>

</div>
