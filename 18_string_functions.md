# 字串函式

```php
$string = 'Hello World';

// 字串長度
echo strlen($string);
echo mb_strlen("在學 Hello", 'utf-8');

// 大小寫轉換, 首字母轉大寫
echo strtolower($string);
echo strtoupper($string);
echo ucwords($string);

// 字串取代
echo str_replace('World', 'Everyone', $string);
echo str_ireplace('World', 'Everyone', $string); // 忽略大小寫

// 擷取字串
echo substr($string, 0, 5);
echo mb_substr("全端網站開發", 0, 2, "utf-8");

// 判斷字串是否為某個值開頭, 結尾
if (str_starts_with($string, 'Hello')) echo 'YES';
if (str_ends_with($string, 'ld')) echo 'YES';

// 去除空白
echo trim(" World ");
echo lrim(" World ");
echo rtrim(" World ");
```

## 防止 XSS 攻擊

```php
$string2 = '<script>alert(1)</script>';

// 遇到中文會亂碼
echo htmlentities($string2);

// 指定編碼格式
echo htmlentities($string2, ENT_QUOTES, "UTF-8");

// 只會轉換 &, ", ', <, >
echo htmlspecialchars($string2);

```

## 字串要注意的地方

```php

// 跳脫字元 (Escape character)
echo 'They\'re Here';
echo "我想打出\$號";

// 使用 PHP 列印的時候，要注意單雙引號的使用
echo '<img src="images/my_dog.jpg">';
echo "<img src='images/my_dog.jpg'>";

```

## 單雙引號很困擾? 可以用看看 Heredoc

使用最大好處為可以包含單雙引號

```php
<?php
$title = "Email Title";
$content = "Email content here";
$email = <<<EMAIL
<div id="outer">
    <div id="left">
        <h1>{$title}</h1>
        <span>{$content}</span>
    </div>
    <div id="right">Table of Content</div>
</div>
EMAIL;
echo $email;
?>
```

## printf : 輸出格式化的字串

```php
printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%d', 1+1);
printf('1+1=%f', 1.2+1.3);
```

[字串](https://progressbar.tw/posts/155)
