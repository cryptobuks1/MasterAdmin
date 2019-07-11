<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\Golfer */

$this->title = $model->GolferId;
$this->params['breadcrumbs'][] = ['label' => 'Golfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="golfer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->GolferId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GolferId], [
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
            'GolferId',
            'FirstName',
            'LastName',
            'DateOfBirth',
            'Handicap',
            'Email:email',
            'country',
            'passwordHash',
            'Mobile',
            'Last8Digits',
            'IsActive',
            'LastUpdated',
            'CreatedOn',
        ],
    ]) ?>

</div>
