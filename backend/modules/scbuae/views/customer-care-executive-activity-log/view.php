<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutiveActivityLog */

$this->title = $model->CustomerCareExecutiveActivityLogId;
$this->params['breadcrumbs'][] = ['label' => 'Customer Care Executive Activity Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="customer-care-executive-activity-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->CustomerCareExecutiveActivityLogId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CustomerCareExecutiveActivityLogId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CustomerCareExecutiveActivityLogId',
            'CustomerCareExecutiveId',
            'LoginDateTime',
            'LogoutDateTime',
            'OperatingSystem',
            'Browser',
            'IP',
            'IsActive',
            'LastUpdated',
            'CreatedOn',
        ],
    ]) ?>

</div>
