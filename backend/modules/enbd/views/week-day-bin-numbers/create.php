<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WeekDayBinNumbers */

$this->title = 'Create Week Day Bin Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Week Day Bin Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="week-day-bin-numbers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
