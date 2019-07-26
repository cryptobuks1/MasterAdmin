<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\GolfCourseMaster */

$this->title = $model->GID;
$this->params['breadcrumbs'][] = ['label' => 'Golf Course Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="golf-course-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GID], [
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
            'GID',
            'golfCourseTypeID',
            'AMEXConciergeActive',
            'ISOSActive',
            'AMEXMasterTieUp',
            'startTime',
            'endTime',
            'AMEXConciergeWeekdayRounds',
            'AMEXConciergeWeekendRounds',
            'ISOSWeekdayRounds',
            'ISOSWeekendRounds',
            'learnSessionDuration',
            'learnInclusions',
            'learnWeekdayPrice',
            'learnWeekendPrice',
        ],
    ]) ?>

</div>
