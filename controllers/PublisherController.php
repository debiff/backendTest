<?php
/**
 * Created by PhpStorm.
 * User: tesi
 * Date: 19/05/18
 * Time: 15.09
 */

namespace app\controllers;

use app\models\Placement;
use yii\web\Controller;
use app\models\Publisher;
use app\models\PublisherForm;
use Yii;
use yii\data\ActiveDataProvider;
use app\models\Log;

class PublisherController extends Controller
{


    /**
     *
     */
    public function actionIndex()
    {
        $model = new PublisherForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $newPublisher = new Publisher();
            $newPublisher->name = $model->name;
            $newPublisher->site = $model->site;
            $newPublisher->save();
        }

        $query = Publisher::find();
        $publishers = $query -> orderBy('name')->all();
        return $this->render('index', [
            'publishers' => $publishers,
            'model' => $model
        ]);

    }

    public function actionPlacement()
    {

        $query = new Publisher();

//        die(print_r($query->getPlacements()));
//        $query = Publisher::find();
//        die(print_r($query->placements));
//        $placements = $query
//            ->joinWith('publisher')
//            ->all();

        return $this->render('placement', [
            'placements' => $query->getPlacements()->all(),
        ]);
//
//
//
//        $provider = new ActiveDataProvider([
//            'query' => Log::find()
//        ]);
//        $models = $provider->getModels();
//
//        die($models);

    }

}