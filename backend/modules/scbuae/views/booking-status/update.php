<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\BookingStatus */

$this->title = 'Update Booking Status: ' . $model->BookingStatusId;
$this->params['breadcrumbs'][] = ['label' => 'Booking Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookingStatusId, 'url' => ['view', 'id' => $model->BookingStatusId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
