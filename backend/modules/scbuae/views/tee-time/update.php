<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\TeeTime */

$this->title = 'Update Tee Time: ' . $model->TeeTimeId;
$this->params['breadcrumbs'][] = ['label' => 'Tee Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TeeTimeId, 'url' => ['view', 'id' => $model->TeeTimeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tee-time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
