<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a_regencies".
 *
 * @property string $id
 * @property string $province_id
 * @property string $name
 *
 * @property ADistricts[] $aDistricts
 * @property AProvinces $province
 */
class ARegencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a_regencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 4],
            [['province_id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => AProvinces::className(), 'targetAttribute' => ['province_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province_id' => 'Province ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getADistricts()
    {
        return $this->hasMany(ADistricts::className(), ['regency_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(AProvinces::className(), ['id' => 'province_id']);
    }
}
