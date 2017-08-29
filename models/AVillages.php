<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a_villages".
 *
 * @property string $id
 * @property string $district_id
 * @property string $name
 *
 * @property ADistricts $district
 */
class AVillages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a_villages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'district_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['district_id'], 'string', 'max' => 7],
            [['name'], 'string', 'max' => 255],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => ADistricts::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'district_id' => 'District ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(ADistricts::className(), ['id' => 'district_id']);
    }
}
