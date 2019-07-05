<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutive */

$this->title = $model->CustomerCareExecutiveId;
$this->params['breadcrumbs'][] = ['label' => 'Customer Care Executives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="customer-care-executive-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CustomerCareExecutiveId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CustomerCareExecutiveId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CustomerCareExecutiveId',
            'FirstName',
            'LastName',
            'GenderId',
            'UserId',
            'Email:email',
            'Password',
            'IsActive',
            'LastUpdated',
            'CreatedOn',
        ],
    ]) ?>

</div>
