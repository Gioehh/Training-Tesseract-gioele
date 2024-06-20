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
                    if(confirm("Vuoi guardare questo video?")){
                    console.log("vero")
                    window.open("https://www.youtube.com/watch?v=mRgCWepNzuI&pp=ygUWZm9yZXN0YSBkZWkgY2Egdm9sYW50aQ%3D%3D")
                    }else{
                    console.log("falso")
                    };
                    }
                    function num1(n=0) {
                        let x = Math.floor((Math.random() * 5) +n + 1);
                        alert(x)
                    }
                    
                    function num1n(n){
                        let x = Math.floor((Math.random() * n) + 1);
                        alert(x)
                    }              
                </script>
                    <button onclick="video()">Guarda un video!</button>
                </p> 
            <p><button type="alert" onclick="num1n(5)">pesca un numero da 1-5</button>  <button onclick="num1n(10)">pesca un numero da 1-10</button> <button onclick="num1n(15)">pesca un numero da 10-15</button></p>
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
