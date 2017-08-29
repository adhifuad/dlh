<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_m_item".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property PTPerizinanItems[] $pTPerizinanItems
 */
class PMItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_m_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTPerizinanItems()
    {
        return $this->hasMany(PTPerizinanItems::className(), ['jenis_item' => 'id']);
    }
}
