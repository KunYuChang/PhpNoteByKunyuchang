# Array

PHP 的世界裡 :

1. 一個陣列中可以存放不同資料型別
2. 一個陣列理論上可以儲放無限的資料, 但是實際上不可能, 因為記憶體空間並不是無上限的
3. 陣列(array)與雜湊(hash table)是同一件事情

## Simple Array

```php
$numbers = [1,44,55,22]; // 現代的陣列宣告方式 (short array syntax)
$fruits = array('apple','orange','pear'); // 早期的陣列宣告方式

var_dump($numbers);
echo $fruits[0];
```

## Associative Array

1. 這是一種 key-value store 鍵值儲存的行為
2. 其他程式語言不會此行為設計於陣列型態之中
3. hash table 雜湊表 : Ruby on Rails, Perl
4. Dictionary 字典 : Python, Object C, Swift
5. Object 物件 : JavaScript

```php
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '$00f'
];

echo $hex['blue'];

echo '<pre>';
var_dump($hex);
echo '</pre>';

var_dump(array_keys($hex)); // 顯示陣列的鍵
var_dump(array_values($hex)); // 顯示陣列的值
```

## ARRAY 與 JSON 轉換

現代前後端分離架構中會使用!

```php
echo json_encode($array2); // 轉成JSON格式
```

## 判斷元素是否存在關聯陣列

1. 最 LOW 的寫法

```php
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}
```

2. 三元運算子

```php
$person['address'] = isset($person['address']) ? $person['address'] : 'unknown';
```

3. 空值合併運算子(??)

可以不用判斷 isset,PHP 7 以後支援

```php
$person['address'] = $person['address'] ?? 'unknown';
```

4. 最短的寫法(??=)

空值合併並賦值運算子 (Null Coalesce Assignment Operator), PHP 7.4 以後支援

```php
$person['address'] ??= 'unknown';
```

## 多維陣列

```php
$people = [
    [
        'first_name' => 'Harry',
        'last_name' => 'Potter',
        'email' => 'harry@gmail.com',
    ],
    [
        'first_name' => 'Ron',
        'last_name' => 'Weasley',
        'email' => 'ron@gmail.com',
    ],
    [
        'first_name' => 'Hermione',
        'last_name' => 'Granger',
        'email' => 'hermione@gmail.com',
    ],

]
echo $people[0]['email'];

```

## 陣列操作

```php
echo $numbers[0];
$numbers[2] = 87;
$numbers[] = 777;
array_push($numners, 666);
```

### 確認元素是否在陣列中

```php
isset($people['Twitter']);
```

### 計算陣列總量

```php
echo count($people);
```

### 移除陣列中的元素

```php
// 方法1, 注意:陣列索引不會重新排序--應避免使用
unset($fruits[0]);

// 方法2, 可以利用這種方式來移除值, 並且會重新排序
array_splice($fruits, 0, 1); // 陣列, 索引, 取代否(1,0)

```

### 其他功能

1. array_search : 在陣列中搜尋元素的索引值
2. in_array : 確認陣列是否包含指定元素
3. array_filter : 陣列過濾
4. explode : 字串拆成陣列
5. implode : 陣列組成字串

## 陣列合併

```php
$fruits = ["Apple", "Banana"];
$vegetables = ["Potato", "cucumber"];

$merge = array_merge($fruits, $vegetables);
$merge = [...$fruits, ...$vegetables];
```

## 陣列排序

```php
ksort($person); // keys
asort($person); // values
```

## 陣列解構

```php
// 陣列的解構賦值 Desturturing 
$a = array('HTML', 'CSS', 'JS', 'PHP', 2022);
list($html, $css, $php) = $a;


// PHP 7.1 Symmetric array destructuring
$a = ['HTML', 'CSS', 'JS', 'PHP', 2022];
[$html, $css, $php] = $a;
```

## 延伸閱讀

[陣列(矩陣)介紹](https://progressbar.tw/posts/174)
[陣列的新增與刪除](https://progressbar.tw/posts/175)
[陣列與迴圈的關係](https://progressbar.tw/posts/176)
[解構賦值 PHP 5 VS PHP 7 差異](https://jiepeng.me/2017/10/24/php-array-destructuring)
