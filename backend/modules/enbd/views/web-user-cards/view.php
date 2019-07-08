<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserCards */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Web User Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="web-user-cards-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'User_ID',
            'CardTypeID',
            'CardNo',
            'CardName',
            'ValidFrom',
            'ValidTill',
            'isDiscountAllowed',
            'AvlCompGames',
            'AvlLearnSessions',
            'AvlAssistSessions',
            'AvlGlobalSessions',
            'AvlTrophyGames',
            'AvlPNRGames',
            'AvlTrophyPGames',
            'isActive',
            'isFlexiUser',
            'DateAdded',
            'ActivatedOn',
            'RenewedOn',
            'CountryOrigin',
            'enbdVerified',
        ],
    ]) ?>

</div>
