<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\UserPasswordReset */

$this->title = 'Create User Password Reset';
$this->params['breadcrumbs'][] = ['label' => 'User Password Resets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-password-reset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
