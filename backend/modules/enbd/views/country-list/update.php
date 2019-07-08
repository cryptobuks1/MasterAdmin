<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CountryList */

$this->title = 'Update Country List: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_countries]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
