<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\OneTimePassword */

$this->title = 'Create One Time Password';
$this->params['breadcrumbs'][] = ['label' => 'One Time Passwords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="one-time-password-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
