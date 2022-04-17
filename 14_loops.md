# 迴圈

## While 迴圈

1. 喜歡使用 flag 這個變數名稱來代表條件判斷結果，小典故來自於賽車或紅綠燈會有人拿著旗來表示通行。
2. 條件成立，執行無限次，程式沒寫好就可能產生無窮迴圈。
3. 不同程度會偏好不同寫法，通常來說新手喜歡容易看的寫法，老手喜歡簡潔的寫法。

````php
// While Loop Syntax
While (condition) {
    // code to be executed
}

// 寫法1
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    if ($flag == 0) {
        $flag = false;
    }
}

// 寫法2
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    if ($flag == 0) $flag = false;
}

// 寫法3
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    $flag = ($flag != 0);
}

// 寫法4
$count = 3;

while ($count != 0) {
    echo "count:" . $count . "<br>";
    $count -= 1;
}

While 迴圈處理陣列

1. 由於count是由大到小，但我們是想要"正序"列印出來，所以設置index來輔助達成這件事。
2. 由於正序這個需求實在太常見，因此在C語言就產生了一個"語法糖"是"for loop"。


```php
$array = ["沒有", "什麼", "能夠阻擋"];

$count = count($array);
$index = 0;

while ($count--) {
    echo $array[$index] . "<br>";

    $index++;
}
````

## Do While 迴圈

1. 先執行一次再進行 while 判斷
2. 這個語法在現今程式設計中已經較少看到了。

```php
// Do While Loop Syntax
do (condition) {
    // code to be executed
} while (condition)

$x = 6;

do {
    echo 'Number' . $x . '<br>';
    $x++;
} while($x <= 5)


$array = ["沒有", "什麼", "能夠阻擋"];
do {
    echo $array[$index] . "<br>";
} while ($count--);
```

## For 迴圈

1. for loop 是 while loop 的語法糖
2. for 條件式當中進行變數宣告在某些程式語言是不行的(ex. C)
3. count 寫在條件式會有性能問題, 好的做法是用變數寫在外面

```php
// For Loop Syntax
for(initialize; condition; increment) {
    // code to be executed
}

$array = ["小明", "老王", "小美"];
$length = count($array);
for ($index = 0; $length; $index++) {
    echo "姓名 :" . $array[$index] . "<br>";
}
```

for 處理關聯陣列資料

由於 for 處理關聯陣列太常見，又延伸出一個語法糖 foreach

```php

$students = [
    [
        "name" => '小明',
        "scholarship" => 5000,
    ],
    [
        "name" => '老王',
        "scholarship" => 2000,
    ],
    [
        "name" => '小美',
        "scholarship" => 3000,
    ],
];

// for loop 現代常見的資料處理"方法"
for ($index = 0; $index < count($students); $index++) {
    $student = $students[$index];
    echo "姓名 : " . $student["name"] . "<br>";
    echo "獎學金 : " . $student["scholarship"] . "<br>";
}

```

## Foreach 迴圈

```php
foreach ($students as $student) {
    echo "姓名 : " . $student["姓名"] . "<br>";
    echo "獎學金 : " . $student["scholarship"] . "<br>";
}
```

透過傳參數，改變陣列元素

```php
foreach ($students as $key => &$value) {
    if ($key == 'scholarship') $value += 1000;
}

// 傳參考之後記得要註銷
unset($value)
```

Foreach 巢狀陣列結構

當迴圈執行到裡面陣列資料時會出錯，有幾種解法

1. 使用 json_encode
2. 使用 implode
3. foreach 裡面再執行 foreach

```php
$user = [
    'name' => 'Gio',
    'email' => 'gio@email.com',
    'skills' => ['php', 'graphql', 'react']
];

// array裡面的array會出錯
foreach ($user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
```

```php
// 解法1. 使用 json_encode
foreach ($user as $key => $value) {
    echo $key . ': ' . json_encode($value) . '<br>';
}
```

```php
// 解法 2 implode
foreach ($user as $key => $value) {
    if (is_array($value)) {
        $value = implode(',', $value);
    }
    echo $key . ': ' . $value . '<br>';
}

```

## 迴圈的中斷

Break : 跳出整個迴圈

```php
$student_list = [
    ["name" => "小明", "score" => "65"],
    ["name" => "小美", "score" => "90"],
    ["name" => "老王", "score" => "59"],
    ["name" => "大華", "score" => "80"],
];

// 使用 break 情境 : 是否全班都及格? (跳出整個迴圈)
$passFlag = true;
for ($index = 0; $index < count($student_list); $index++) {
    $score = intval($student_list[$index]["score"]);
    if ($score < 60) {
        $passFlag = false;
        break;
    }
}

if ($passFlag) {
    echo "全班及格!";
} else {
    echo "有人不及格!";
}
```

Continue : 跳過當次

```php
for ($index = 0; $index < count($student_list); $index++) {
    $score = intval($student_list[$index]["score"]);
    if ($score < 60) {
        echo "分數太低";
        continue;
    }

    if ($score > 100) {
        echo "分數不正常";
        continue;
    }

    echo $student_list[$index]["name"] . "<br>";
}

```

## 延伸閱讀

[while 與 do-while 迴圈，補充遞增遞減運算子](https://progressbar.tw/posts/192)
[for 與 foreach 迴圈](https://progressbar.tw/posts/193)
[迴圈的中斷](https://progressbar.tw/posts/194)
