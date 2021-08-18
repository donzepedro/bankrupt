<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interesting_page".
 *
 * @property int $id
 * @property int|null $news_id
 *
 * @property News $news
 */
class InterestingPageInterlayer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $news_title;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_title' => 'News Title',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
}
