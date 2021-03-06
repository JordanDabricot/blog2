<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 17/01/18
 * Time: 14:31
 */

namespace App;

session_start();


class Articles{
    private $title;
    private $content;
    private $publishDate;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->publishDate = date('Y-m-d H:i:s');
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return false|string
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param false|string $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
    }

    public function getArticle(){
        $datas = new BDDconnect('blog');
        $datas = $datas->query('SELECT * FROM articles
                                    INNER JOIN users
                                    ON users.id_user = articles.user_id ORDER BY publishDate DESC');
        return $datas;
    }
}