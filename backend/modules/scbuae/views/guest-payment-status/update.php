<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPaymentStatus */

$this->title = 'Update Guest Payment Status: ' . $model->GuestPaymentStatusId;
$this->params['breadcrumbs'][] = ['label' => 'Guest Payment Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GuestPaymentStatusId, 'url' => ['view', 'id' => $model->GuestPaymentStatusId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guest-payment-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
