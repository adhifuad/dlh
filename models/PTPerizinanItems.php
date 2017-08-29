<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_t_perizinan_items".
 *
 * @property integer $id
 * @property integer $perizinan
 * @property integer $jenis_item
 * @property string $nama
 *
 * @property PMItem $jenisItem
 * @property PTPerizinan $perizinan0
 */
class PTPerizinanItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_t_perizinan_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['perizinan', 'jenis_item', 'nama'], 'required'],
            [['perizinan', 'jenis_item'], 'integer'],
            [['nama'], 'string', 'max' => 25],
            [['jenis_item'], 'exist', 'skipOnError' => true, 'targetClass' => PMItem::className(), 'targetAttribute' => ['jenis_item' => 'id']],
            [['perizinan'], 'exist', 'skipOnError' => true, 'targetClass' => PTPerizinan::className(), 'targetAttribute' => ['perizinan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'perizinan' => 'Perizinan',
            'jenis_item' => 'Jenis Item',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisItem()
    {
        return $this->hasOne(PMItem::className(), ['id' => 'jenis_item']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinan0()
    {
        return $this->hasOne(PTPerizinan::className(), ['id' => 'perizinan']);
    }
}
