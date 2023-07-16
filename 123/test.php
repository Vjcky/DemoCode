
<?php
$data = array('name' => 'Vu Hoang Lam', 'mail' => 'lamvh@live.com', 'age' => 22);
// Một mẹo hữu ích khác khi sử dụng Named Placeholder đó là insert Object

class user
{
public $name;
public $mail;
public $age;
}

$person = new user();
$person->name = 'Vu Hoang Lam';
$person->mail = 'lamvh@live.com';
$person->age = 22;

$stmt = $conn->prepare('INSERT INTO users (name, email, age) values (:name, :mail, :age)');

// Ở dòng cuối cùng,thực hiện "ép kiểu" (cast) Object $person thành array để truyền vào phương thức execute();
$stmt->execute((array)$person);
?>