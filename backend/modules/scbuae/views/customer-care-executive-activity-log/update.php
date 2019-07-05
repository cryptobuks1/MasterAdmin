<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutiveActivityLog */

$this->title = 'Update Customer Care Executive Activity Log: ' . $model->CustomerCareExecutiveActivityLogId;
$this->params['breadcrumbs'][] = ['label' => 'Customer Care Executive Activity Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CustomerCareExecutiveActivityLogId, 'url' => ['view', 'id' => $model->CustomerCareExecutiveActivityLogId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-care-executive-activity-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
