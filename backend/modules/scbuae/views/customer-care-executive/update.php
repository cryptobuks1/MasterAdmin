<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutive */

$this->title = 'Update Customer Care Executive: ' . $model->CustomerCareExecutiveId;
$this->params['breadcrumbs'][] = ['label' => 'Customer Care Executives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CustomerCareExecutiveId, 'url' => ['view', 'id' => $model->CustomerCareExecutiveId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-care-executive-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
