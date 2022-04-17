# output

## 標示為 PHP 檔案

使用開始與結束符號宣告為 PHP 程式碼

```php
<?php
    echo "Hello";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1><?php echo 123?></h1>
</body>
</html>
```

如果 PHP 程式碼之後沒有接 HTML, 則可以省略結束符號

```php
<?php
    echo "Hello";
```

## 規則

1. 程式碼必須使用分號`;`來表示結束

```php
<?php
    echo 'Hello';
?>
```

2. 但若是已經是最後的程式碼,則可省略 (不推薦)

```php
<?php echo 'Hello' ?>
```

## 輸出

1. echo
2. print

```php
echo "Hello World";
print "Hello World";
```

也可以使用括號

```php
echo ("Hello World");
print("Hello World");
```

### 差異性

先說結論 : 在 PHP 世界中, 會使用 echo

1. print return 1, echo 不會
2. print 只能輸出一個值, echo 可以輸出多個值 (沒有使用括號才可以)
3. echo 速度較快

### 縮寫

```php
// 正常寫法
<?php echo 'Hello' ?>
// 縮寫(需要設定)
<?= 'Hello' ?>
```

## 輸出陣列

1. print_r
2. var_dump

```php
print_r([1,2,3]);
var_dump([1,2,3]);
```

### 安裝瀏覽器擴充功能，以利 Debug

[PHPView](https://chrome.google.com/webstore/detail/phpview/nlkobfbkblfhlcobdomlhmpbbhmcbkfd)

## 延伸閱讀

[PHP 與 Echo | 進度條 ](https://progressbar.tw/posts/147)
