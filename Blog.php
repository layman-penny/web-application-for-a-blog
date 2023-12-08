<!-- Blog.php -->
<?php
class Blog {
    private $posts = [];

    public function addPost($post) {
        $this->posts[] = $post;
    }

    public function displayPosts() {
        echo "<h1>Blog Posts</h1>";
        foreach ($this->posts as $post) {
            $post->display();
        }
    }
}
?>
