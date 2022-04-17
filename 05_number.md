# 數字

數字包含正負整數、浮點數(有小數點的數值)等，數字可以做運算。

PHP 7.4 提供整數與浮點數型別可以透過底線來讓數字更容易被閱讀。

```php
$x = 2_000_000_000;
var_dump($x);
```

## 最常用的涵式

```php
// 四捨五入
round(2.4); // 2
round(2.6); // 3
round(9.564, 2); //取小數點兩位數 9.56

// 取整數但資料型態是浮點數
floor(9.567); // 9
ceil(9.567); // 10
```

## 注意

1. 使用 echo 會自動轉型成字串
2. 浮點數在電腦運算中並無法完全精準，因此要特別小心浮點數的計算與比較
3. 注意連結號的.跟浮點數必須分開，否則出錯

## 確認

```php
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45"); // true
is_numeric("3g.45"); // false
```

## 轉換

```php
// 轉換 (Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
$number = (int)$strNumber;
$number = floatval(9); // 轉浮點數
$number = intval(9.567);  // 轉整數

// 轉換的奇淫妙計
$x = 'abc';
(float)$x; // 0

$y = '15.5a';
(float)$x; // 15.5
```

## 最大值

```php
echo PHP_INT_MAX; // 超過最大值會變成Float
echo PHP_FLOAT_MAX; // 超過最大值會變成INF 無限值
```

## 算術運算

```php
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
```

## 數算運算符賦值

```php
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
```

## 增減量運算符

```php
// 增量運算符 (Increment operator
echo $a++;
echo ++$a;

// 減量運算符 (Decrement operator
echo $a--;
echo --$a;
```

<a href="https://progressbar.tw/posts/156">數字介紹與處理</a>
