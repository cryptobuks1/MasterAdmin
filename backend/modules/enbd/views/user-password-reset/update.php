<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\UserPasswordReset */

$this->title = 'Update User Password Reset: ' . $model->upr_id;
$this->params['breadcrumbs'][] = ['label' => 'User Password Resets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->upr_id, 'url' => ['view', 'id' => $model->upr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-password-reset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
