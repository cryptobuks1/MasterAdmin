<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPayment */

$this->title = 'Create Guest Payment';
$this->params['breadcrumbs'][] = ['label' => 'Guest Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
