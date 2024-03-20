<?php
class Post extends PostRepository
{
    private $title;
    private $content;
    private $author;

    //Creation de notre Post
    public function __construct($title, $content, $author)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
    }
    public function setTitle($title)
    {
        $this->title = htmlspecialchars($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($content)
    {
        $this->content = htmlspecialchars($content);
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setAuthor($author)
    {
        $this->author = htmlspecialchars($author);
    }
    public function getAuthor()
    {
        return $this->author;
    }
}