<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\ConvertCurrency */

$this->title = 'Update Convert Currency: ' . $model->currID;
$this->params['breadcrumbs'][] = ['label' => 'Convert Currencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->currID, 'url' => ['view', 'id' => $model->currID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="convert-currency-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
