<!-- Post.php -->
<?php
class Post {
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function display() {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
        echo "<p>Author: {$this->author->getName()}</p>";
    }
}
?>
