# 變數

變數是一個容器的概念

## 變數規則

1. 變數需要加上前綴$符號
2. 開頭只能是 [英文, 底線] 不能是數字
3. 變數只能是 [英文(letter), 數字(number), 底線(underscore)]
4. 區分大小寫 (case-sensitive)

## 是否設置變數

```php
isset($name); // true
isset($address); // false
```

## 傳值與傳參考

1. 傳值 Call by Value
2. 傳參考 Call by Reference

簡易理解方式 (可能有錯)
傳值是複製, 所以修改不影響原本的資料
傳參考是引用, 所以修改會影響到原本的資料

```php
// 傳值的範例
$x = 1; // 宣告x = 1
$y = $x; // y = x (y 複製了 x 的值)
$x = 2; // x 的資料變更了
echo $y; // 由於y是在x資料變更前所複製,所以還是等於 1

// 傳參考範例
$a = 1; // 宣告 a = 1
$b = &$a; // b = a (b 引用 a)
$a = 2; // a 的資料變更了
echo $b; // 由於b是參考a, 所以a變了, b也就變了, 所以b也變成2
```

## 變數作用域

- 變數範圍(Variable Scope)代表此變數的有效區間(作用域)。
- 區分全域變數(Global Scope), 區域變數(Local Scope)
- PHP function 是區域作用域。

## 常數

1. 常數(Constants)指的是宣告後不能被變動的內容
2. 通常被設置全大寫, 大小寫敏感
3. define, const 兩種方法可以宣告

```php
// 方法1
define('PI', 3.14);

// 方法2
const PI = 3.14;
```

### 限制 : const 只能在最外層宣告

```php
// define可以在條件句下定義
if (true) {
define('PI', 3.14);
}

// const只能在最外層定義,因此在條件句下定義會產生嚴重錯誤
if (true) {
const PI = 3.14; // 無法這樣使用!
}
```

## 延伸閱讀

[變數 | 進度條](https://progressbar.tw/posts/149)
[變數命名與編寫風格 | 進度條](https://progressbar.tw/posts/154)
[標準建議 (PSR) | 進度條](https://www.php-fig.org/psr/)
[全域變數與系統函數 | 進度條](https://progressbar.tw/posts/218)
