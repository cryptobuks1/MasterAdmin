<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\FourBallMaster */

$this->title = 'Update Four Ball Master: ' . $model->fourBallID;
$this->params['breadcrumbs'][] = ['label' => 'Four Ball Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fourBallID, 'url' => ['view', 'id' => $model->fourBallID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="four-ball-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
