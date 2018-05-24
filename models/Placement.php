<?php
/**
 * Created by PhpStorm.
 * User: tesi
 * Date: 21/05/18
 * Time: 17.29
 */

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Publisher;

class Placement extends ActiveRecord
{

    public static function tableName()
    {
        return 'placement';
    }

    public function getPublishers()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id']);
    }


}