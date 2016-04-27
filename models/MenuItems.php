<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_items".
 *
 * @property integer $menu_items_id
 * @property integer $menu_id
 * @property string $description
 * @property double $price
 * @property integer $position
 * @property integer $active
 *
 * @property Menu $menu
 */
class MenuItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'description', 'price', 'position'], 'required'],
            [['menu_id', 'position', 'active'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'menu_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_items_id' => 'ID pozycji menu',
            'menu_id' => 'Menu ID',
            'description' => 'Opic',
            'price' => 'Cena',
            'position' => 'Pozycja',
            'active' => 'Aktywne',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['menu_id' => 'menu_id']);
    }
}
