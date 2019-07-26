<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\BookingMaster */

$this->title = 'Create Booking Master';
$this->params['breadcrumbs'][] = ['label' => 'Booking Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
