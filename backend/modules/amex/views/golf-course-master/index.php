<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\amex\models\GolfCourseMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golf Course Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golf-course-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golf Course Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GID',
            'golfCourseTypeID',
            'AMEXConciergeActive',
            'ISOSActive',
            'AMEXMasterTieUp',
            //'startTime',
            //'endTime',
            //'AMEXConciergeWeekdayRounds',
            //'AMEXConciergeWeekendRounds',
            //'ISOSWeekdayRounds',
            //'ISOSWeekendRounds',
            //'learnSessionDuration',
            //'learnInclusions',
            //'learnWeekdayPrice',
            //'learnWeekendPrice',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
