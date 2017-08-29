<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_m_jenis_perizinan".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property PTPerizinan[] $pTPerizinans
 */
class PMJenisPerizinan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_m_jenis_perizinan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 20],
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
    public function getPTPerizinans()
    {
        return $this->hasMany(PTPerizinan::className(), ['jenis_perizinan' => 'id']);
    }
}
