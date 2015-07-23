<?php

class NewsAdminController
    extends NewsController
{
    protected $pathAll = __DIR__ . '/../views/index.php';
    protected $pathOne = __DIR__ . '/../views/article.php';

    public function actionAdd(){

        if( $_SERVER['REQUEST_METHOD'] = 'POST' ){

            $title = $_POST['title'];
            $article = $_POST['article'];

            if( $title and $article ){

                $news = new AdminNews;
                $news->Add($title, $article);
            }
            else{
                $msgErr = 'Название и содержимое должно быть заполнено';
            }
        }
        include __DIR__ . '/../views/articleAdd.php';
    }
}