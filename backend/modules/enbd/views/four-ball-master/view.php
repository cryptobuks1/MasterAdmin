<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\FourBallMaster */

$this->title = $model->fourBallID;
$this->params['breadcrumbs'][] = ['label' => 'Four Ball Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="four-ball-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fourBallID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fourBallID], [
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
            'fourBallID',
            'BookID',
            'fourBallName',
            'fourBallEmail:email',
            'fourBallPhoneNum',
            'bookedByUserID',
            'cdate',
        ],
    ]) ?>

</div>
