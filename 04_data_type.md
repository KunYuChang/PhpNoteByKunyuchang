# PHP Data Types

## 純量類別 (Scalar Types)

- String : 用單引號或雙引號包住的內容
- Integer : 整數的資料
- Float : 含有小數的資料
- Boolean : TRUE or FALSE

```php
$name = 'Zira';
$age = 20;
$height = 1.85;
$isMale = TRUE;
```

### 布林值輸出

- 不區分大小寫
- Falsy : 0, -0, 0.0, -0.0, '', '0', [], null

為什麼看不到 FALSE?

1. echo 只能對字串做處理，所以當遇到數值會將型別自動轉成字串。
2. 也就是說 PHP 會把 true 轉成 1，遇到 false 會轉成空字串(“”)。
3. 替代方案, 使用 var_dump

[布林值與條件判斷](https://progressbar.tw/posts/158)

## 複合類別 (Compound Types)

- array : 可以儲存多個值的變數
- object : 自定義的資料結構
- callable
- iterable

```php
$companies = [];  // 宣告空陣列
$companies = [1, 0.5, 'A']; // PHP陣列可以存放不同的資料型別
```

## 特殊類別 (Special Types)

- resource : 二進位資料
- null : 空值, 不區分大小寫

https://progressbar.tw/posts/167

## 取得資料型別

```php
echo gettype($name);
```

## 自動型別轉換

PHP 自動轉換型別的過程稱為 Type Juggling or Type Coercion

```php
$sum = 10 + '30'; // 40
```

## 指定型別

PHP5 加入 Type Hinting 機制，讓開發者可以指定函式的參數型別與回傳的型別。

```php
function sum(int $x, int $y)
{
    return $x + $y;
}

// 由於參數1指定型別為int, 因此會變成2
$sum = sum(2.5, '3');
```

## 強制型別轉換

稱為 Type Casting

```php
$x = (int)'5';
var_dump($x);
```

## 靜態型別 VS 動態型別

1. 靜態型別, 需要宣告變數型別,於編譯時確認型別, 代表的程式語言 [C++, C#, Java]
2. 動態型別, 不需要宣告變數的型別,於執行時確認型別,代表的程式語言 [PHP, JavaScript, Python]

動態型別提供靈活性,但代價是性能以及有時候可能導致意外的錯誤
PHP 最新版本支援靜態型別的寫法

## 強型別 VS 弱型別

1. 強型別, 不容忍隱性的型別轉換, 代表的程式語言 Java
2. 弱型別, 容忍隱性的型別轉換, 代表的程式語言 PHP

[資料型態的夢魘](https://ithelp.ithome.com.tw/articles/10202260)
