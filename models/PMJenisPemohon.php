<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_m_jenis_pemohon".
 *
 * @property integer $id
 * @property string $item
 *
 * @property PTPerizinan[] $pTPerizinans
 */
class PMJenisPemohon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_m_jenis_pemohon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item'], 'required'],
            [['id'], 'integer'],
            [['item'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item' => 'Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTPerizinans()
    {
        return $this->hasMany(PTPerizinan::className(), ['jenis_pemohon' => 'id']);
    }
}
