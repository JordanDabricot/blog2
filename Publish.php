<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 17:41
 */

require 'BDDconnect.php';
require 'Articles.php';

class Publish extends Articles {

    public function __construct($title, $content)
    {
        parent::__construct($title, $content);
    }


    public function addArticle(){
        $bdd = new BDDconnect('blog');
        $conn = $bdd->getPDO();
        $conn->exec('INSERT INTO articles SET title="'. $this->getTitle() .'", content="'. $this->getContent() .'", publishDate=NOW()');
    }
}