<!-- Author.php -->
<?php
class Author {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function display() {
        echo "<p>Author: {$this->name}</p>";
        echo "<p>Email: {$this->email}</p>";
    }
}
?>
