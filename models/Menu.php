<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $menu_id
 * @property string $name
 * @property string $measure
 * @property string $additional_info
 * @property integer $position
 * @property integer $active
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position'], 'required'],
            [['position', 'active'], 'integer'],
            [['name', 'measure', 'additional_info'], 'string', 'max' => 255],
            [['position'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'name' => 'Nazwa',
            'measure' => 'Jednostka miary',
            'additional_info' => 'Dodatkowe informacje',
            'position' => 'Pozycja',
            'active' => 'Aktywne',
        ];
    }

    public function getItems()
    {
        return $this->hasMany(MenuItems::className(), ['menu_id' => 'menu_id']);
    }
}
