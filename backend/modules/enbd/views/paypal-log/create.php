<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\PaypalLog */

$this->title = 'Create Paypal Log';
$this->params['breadcrumbs'][] = ['label' => 'Paypal Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paypal-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
