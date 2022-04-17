# Sessions

可以在不同頁面中使用共用的變數，這個資料是儲存在 Server。

1. 存放時間依伺服器中 php.ini session timeout 設定的時間而定
2. session 設定後馬上可以取用
3. session 還沒過期或清除之前都可以取用

## 設置 Sessions

```php
// 每一頁程式最開頭要宣告session啟用
session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }

}

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="age">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
```

## 使用 Sessions

```php
<?php
session_start();

$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
```

## 移除 Sessions

```php
<?php

session_start();

// 刪除SESSION元素
unset($_SESSION['name']);

// 刪除伺服器上整個SESSION，下次存取網頁才會看到session消失了
session_destroy();

header('Location: /login.php');
?>
```
