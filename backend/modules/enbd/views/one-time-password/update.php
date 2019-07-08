<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\OneTimePassword */

$this->title = 'Update One Time Password: ' . $model->OtpID;
$this->params['breadcrumbs'][] = ['label' => 'One Time Passwords', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OtpID, 'url' => ['view', 'id' => $model->OtpID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="one-time-password-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
