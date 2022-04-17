# 檔案操作

```php
$file = 'extras/users.txt';

if(file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file,'r')
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brad'. PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}
```

## 將檔案的內容讀到陣列(by line)

```php
$file = 'extras/users.txt';

$handle = fopen($file, 'w');

while ($line = fgets($handle)) {
    $lines[] = $line;
}

fclose($file);
```

## 將資料寫入檔案

```php
$handle = fopen($file, 'w');
$txt = 'John Doe';
fwrite($handle, $txt);
fclose($handle);
```
