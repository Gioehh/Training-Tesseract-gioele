<?php
use common\models\Movie;
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'MovieMate';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Last inserted movies</h1>
            <p>
                <script>
                
                function video() {
                if(confirm("Hello! I am an alert box!")){
                console.log("vero")
                window.open("https://www.youtube.com/watch?v=mRgCWepNzuI&pp=ygUWZm9yZXN0YSBkZWkgY2Egdm9sYW50aQ%3D%3D")
                }else{
                console.log("falso")
                };
                }
                </script>
                <button onclick="video()">Cliccami!</button>
            </p> 
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach (Movie::find()->orderBy(['created_at' => SORT_DESC])->limit(3)->all() as $movie){ ?>
                <div class="col-lg-4">
                    <h2><?= $movie->title ?></h2>
                    <p>Director: <?= $movie->director->name ?></p>

                    <p><?= nl2br($movie->shortDescription) ?></p>
                    <p><i><?= Yii::$app->formatter->asDatetime($movie->created_at) ?></i></p>
                    <p><?= Html::a('View Details', ['movie/view', 'id' => $movie->id], ['class' => 'btn btn-outline-secondary']) ?>                       
                </div>
            <?php } ?>
        </div>

    </div>
</div>
