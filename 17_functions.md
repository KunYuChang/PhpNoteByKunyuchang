# 函式

1. 函式指的是將程式指令包裝起來，可以重複使用，也方便維護。

## 命名風格

三種命名風格都可以, 取決於團隊或個人喜好

- Camel Case - myFunction()
- Lower Case - my_function()
- Pascal Case - MyFunction()

## 函式作用域

函式內的變數有效範圍僅存在於函式中。

```php
function hello() {
    // 這邊是 function scope
    $hello = 'Hello John';
}

// 這邊是 global scope
echo $hello;
```

## 函式使用全域變數

1. 透過關鍵字 global, 讓函式可以使用全域變數，但是通常不太喜歡用，因為寫起來的負擔沒有比較輕。

```php
$person = 'John';

function hello() {
    global $person;
    echo 'hello, ' . $person;
}
```

2. 使用 $GLOBALS，但是不太好，因為整個 PHP 程式都可以使用。

```php
$x = 5;
function foo2()
{
    echo $GLOBALS['x'];
}

$foo2();
```

3. 怪招 : 使用常數

```php
const X = 5;
define(X, 5); // 比較傳統的常數宣告法

function foo3()
{
    echo X;
}

$foo3();
```

結論 : 非必要的話,不要使用全域變數,應該以傳參數的方式來處理

## 函式的參數與引數

1. 參數(Parameters) : 代表函式內所使用的變數名稱
2. 引數(Arguments) : 使用涵式時所傳進去的值
3. 這兩個詞在網路上常常被錯誤混用。
4. 參數與引數是靠位置對應

```php
// 參數(Parameters) : 常縮寫成params，定義變數的名稱。
function echoSomething($something)
{
    echo $something;
}

// 引數 (Arguments) : 真正傳進去的值。
echoSomething("Test");
```

參數與引數的數量必須一致，除非有給予預設值。

```php

// 預設參數( Default parameters )
function echoSomething($something, $something2 = '你在大聲什麼啦!')
{
    echo $something;
    echo $something2
}

echoSomething('我想說些什麼');
```

## 函式的回傳值

```php
function mathFunction($x, $y = 5)
{
    // 參數 $y 如果沒有傳入值，將代入預設值。
    return 2 * $x + 3 * $y + 1;
}

// 如果參數有兩個且沒有設置預設值，只傳入一個引數，執行會報錯。
echo mathFunction(10);
```

## 函式透過傳參考變數改變全域變數

```php
$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 5;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
```

## 可變數量的參數與引數

```php
// Create function to sum all numbers using ...$nums
function allSum(...$nums)
{
    $total = 0;
    foreach ($nums as $num) {
        $total += $num;
    }
    return $total;
}

$a =  [50, 100, 25];
echo allSum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ...$a);
```

## 名稱引數

PHP 8 之後開始提供 named arguments 的方法 (不必按順序了)

```php
echo sum(y: $b, x: $a, numbers: $c) . '<br>';
```

## 指定參數資料型態

PHP8 之後可以使用聯合類型(union types)

```php
function foo(int|float &$x, int|float $y)
{
    if ($x % 2 === 0) {
        $x /= 2;
    }
    return $x * $y;
}

echo foo(5.0, 10);

```

## 箭頭函式

PHP 的箭頭函式還沒有發展完整，沒有 JavaScript 好用，因此在 PHP 很少人使用。

```php
// Arrow functions (PHP 7.4)
function sum(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);
```

## 嚴格模式下 : 定義涵式輸出的資料型態

```php
function foo(): int|float|array
{
    return 1.5;
}

// 可為空 nullable type
function printNum(): ?int
{
    return null;
}

// mixed 代表 any
function bar(): mixed
{
    return 1.5;
}
```

## 延伸閱讀

[函數與回傳值](https://progressbar.tw/posts/216)
[函數的傳入值與預設值](https://progressbar.tw/posts/217)
<a href="https://progressbar.tw/posts/216">函數與回傳值</a>
[全域變數與系統函數](https://progressbar.tw/posts/218)
