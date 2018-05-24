<?php
/**
 * Created by PhpStorm.
 * User: tesi
 * Date: 23/05/18
 * Time: 11.15
 */

namespace app\models;

use Yii;
use yii\base\Model;

class PublisherForm extends Model
{
    public $name;
    public $site;

    public function rules()
    {
        return [
            [['name', 'site'], 'required']
        ];
    }

}