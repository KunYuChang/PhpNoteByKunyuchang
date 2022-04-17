# 嚴格模式

```php
declare(strict_types=1);
function sum(int $x, int $y)
{
    var_dump($x, $y);
    echo '<br>';
    return $x + $y;
}

// 嚴格模式之下的引數型別與參數宣告的類型必須相同
$sum = sum('2', 2);
```
