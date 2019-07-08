<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CountryList */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_countries], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_countries], [
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
            'id_countries',
            'name',
            'iso_alpha2',
            'iso_alpha3',
            'iso_numeric',
            'currency_code',
            'currency_name',
            'currrency_symbol',
            'preferred_currrency',
            'flag',
            'isActive',
            'paymntEngine',
            'isdCode',
        ],
    ]) ?>

</div>
