<?php
/**
 * Created by PhpStorm.
 * User: adsitalo
 * Date: 18.12.2017
 * Time: 14:35
 */

namespace app\models;
use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{

    public static function tableName()
    {
        return 'brand'; // TODO: Change the autogenerated stub
    }

    public function getProduct()
    {
        return $this->hasMany(Product::className(), ['idBrand' => 'id']);
    }
}
