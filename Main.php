<!-- Main.php -->
<?php
require_once 'Author.php';
require_once 'Post.php';
require_once 'Blog.php';

$author1 = new Author("John Doe", "john.doe@example.com");
$author2 = new Author("Jane Smith", "jane.smith@example.com");

$post1 = new Post("Introduction to PHP", "This is a blog post about PHP.", $author1);
$post2 = new Post("Advanced PHP Techniques", "Exploring advanced PHP concepts.", $author2);

$blog = new Blog();
$blog->addPost($post1);
$blog->addPost($post2);

$blog->displayPosts();
?>
