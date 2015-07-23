<?php

class NewsController
{
    protected $lenght = 600;
    protected $pathAll = __DIR__ . '/../views/index.php';
    protected $pathOne = __DIR__ . '/../views/article.php';

    public function actionAll(){

        $articles = News::getAll();
        $articles = News::newsPreview($articles, $this->lenght);
        include $this->pathAll;
    }
    public function actionOne(){
        $id = $_GET['id'];
        $article = News::getOne($id);
        include $this->pathOne;
    }
}