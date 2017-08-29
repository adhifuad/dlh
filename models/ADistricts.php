<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a_districts".
 *
 * @property string $id
 * @property string $regency_id
 * @property string $name
 *
 * @property ARegencies $regency
 * @property AVillages[] $aVillages
 */
class ADistricts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a_districts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regency_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 7],
            [['regency_id'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 255],
            [['regency_id'], 'exist', 'skipOnError' => true, 'targetClass' => ARegencies::className(), 'targetAttribute' => ['regency_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regency_id' => 'Regency ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegency()
    {
        return $this->hasOne(ARegencies::className(), ['id' => 'regency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAVillages()
    {
        return $this->hasMany(AVillages::className(), ['district_id' => 'id']);
    }
}
