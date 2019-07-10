<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserMaster */

$this->title = $model->Fname.' '.$model->Lname ." Profile";
$this->params['breadcrumbs'][] = ['label' => 'Customer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="web-user-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Update', ['update', 'id' => $model->User_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->User_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'User_ID',
            'Login_Name',
            'Fname',
            'Lname',
            'Email:email',
            'Mobile',
            'mobileVerified',
            'City',
            'ZipCode',
            'Country',
            'Address',
            'Gender',
            'CardTypeID',
            'CardNo:ntext',
            'Emirates_card_no',
            'PasswordHash',
            'Password',
            'RealPassword',
            'HomeCourse',
            'Handicap',
            'DOB',
        ],
    ]) ?>

</div>
