# OOP

1. PHP5 開始支援 OOP
2. 類別裡面的變數稱為屬性(property)
3. 類別裡面的涵式稱為方法(method)

```php
// 類別 : 建立藍圖
class User {
    public $name;
    public $email;
    public $password;

    // construct method 特性 : 當物件被創建時會執行
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method
    function set_name($name) {
        $this->name = $name;
    }

    function get_name($name) {
        return $this->name;
    }
}

// 物件 : 實際產出
$user1 = new User();
$user2 = new User();

$user1->set_name('Brad','brad@gmail.com', '34344');
$user2->set_name('John', 'john@gmail.com', 'ddod99');

```

## 繼承

```php
class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '43434', 'Manager');
```

## 存取修飾符

1. public : 任何都可以存取
2. private : 只有本身的類別可以存取
3. protected : 本身以及繼承本身的類別可以存取
