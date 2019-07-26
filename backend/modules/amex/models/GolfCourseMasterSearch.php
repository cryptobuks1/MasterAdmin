<?php

namespace backend\modules\amex\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\amex\models\GolfCourseMaster;

/**
 * GolfCourseMasterSearch represents the model behind the search form of `backend\modules\amex\models\GolfCourseMaster`.
 */
class GolfCourseMasterSearch extends GolfCourseMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'golfCourseTypeID', 'AMEXConciergeActive', 'ISOSActive', 'AMEXMasterTieUp', 'AMEXConciergeWeekdayRounds', 'AMEXConciergeWeekendRounds', 'ISOSWeekdayRounds', 'ISOSWeekendRounds', 'learnSessionDuration', 'learnWeekdayPrice', 'learnWeekendPrice'], 'integer'],
            [['startTime', 'endTime', 'learnInclusions'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = GolfCourseMaster::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'GID' => $this->GID,
            'golfCourseTypeID' => $this->golfCourseTypeID,
            'AMEXConciergeActive' => $this->AMEXConciergeActive,
            'ISOSActive' => $this->ISOSActive,
            'AMEXMasterTieUp' => $this->AMEXMasterTieUp,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'AMEXConciergeWeekdayRounds' => $this->AMEXConciergeWeekdayRounds,
            'AMEXConciergeWeekendRounds' => $this->AMEXConciergeWeekendRounds,
            'ISOSWeekdayRounds' => $this->ISOSWeekdayRounds,
            'ISOSWeekendRounds' => $this->ISOSWeekendRounds,
            'learnSessionDuration' => $this->learnSessionDuration,
            'learnWeekdayPrice' => $this->learnWeekdayPrice,
            'learnWeekendPrice' => $this->learnWeekendPrice,
        ]);

        $query->andFilterWhere(['like', 'learnInclusions', $this->learnInclusions]);

        return $dataProvider;
    }
}
