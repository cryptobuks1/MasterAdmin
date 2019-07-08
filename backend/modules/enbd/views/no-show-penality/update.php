<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\NoShowPenality */

$this->title = 'Update No Show Penality: ' . $model->penalityID;
$this->params['breadcrumbs'][] = ['label' => 'No Show Penalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penalityID, 'url' => ['view', 'id' => $model->penalityID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="no-show-penality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
