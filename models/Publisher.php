<?php
/**
 * Created by PhpStorm.
 * User: tesi
 * Date: 21/05/18
 * Time: 17.29
 */

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Placement;

class Publisher extends ActiveRecord
{


    public static function tableName()
    {
        return 'publisher';
    }

    public function getPlacements()
    {
        return $this->hasMany(Placement::className(), ['publisher_id' => 'id']);
    }

}