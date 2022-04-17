# 資料消毒（Data Sanitization）

```php
<?php

if(isset($_POST['submit'])) {

    // 消毒方式1 : 過濾輸入 (推薦)
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // 消毒方式2
    $name = htmlspecialchars($_POST['name']);

    // 消毒方式3 : 過濾變數
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS)
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
```

[Sanitize filters](https://www.php.net/manual/zh/filter.filters.sanitize.php)
