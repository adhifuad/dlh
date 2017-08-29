<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a_provinces".
 *
 * @property string $id
 * @property string $name
 *
 * @property ARegencies[] $aRegencies
 */
class AProvinces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a_provinces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getARegencies()
    {
        return $this->hasMany(ARegencies::className(), ['province_id' => 'id']);
    }
}
