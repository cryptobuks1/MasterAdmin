<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WeekDayBinNumbers */

$this->title = 'Update Week Day Bin Numbers: ' . $model->SrNo;
$this->params['breadcrumbs'][] = ['label' => 'Week Day Bin Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SrNo, 'url' => ['view', 'id' => $model->SrNo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="week-day-bin-numbers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
