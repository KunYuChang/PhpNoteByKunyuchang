# 檔案上傳

## 表單屬性

檔案上傳要在 form 設置 `enctype=multipart/form-data`

```php
// 2. 判斷檔案
<?php
    if(isset($_POST['submit'])) {
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

        if(!empty($_FILES['upload']['name'])) {
            // print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $target_dir = "uploads/{$file_name}";

            // 取得檔案副檔名
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            // Validate file ext
            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);

                    $message = '<p style="color: green;">檔案上傳成功</p>';
                } else {
                    $message = '<p style="color: red;">檔案太大</p>';
                }
            } else {
                $message = '<p style="color: red;">請上傳允許的檔案類型</p>';
            }
        } else {
            $message = '<p style="color: red;">請選擇檔案</p>';
        }
    }
?>

// 3. 顯示判斷結果
<?php echo $message ?? null; ?>

// 1. 上傳的設置
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    選擇要上傳的圖片:
    <input type="file" name="upload">
    <input type="submit" value="上傳" name="submit">
</form>
```

## 檔案的索引值

檔案的陣列有以下的索引值

1. $\_FILES['設定的 name 鍵值']['name'] 原本的檔名
2. $\_FILES['設定的 name 鍵值']['tmp_name'] 暫存在 server 上面的檔名
3. $\_FILES['設定的 name 鍵值']['type'] 檔案型態
4. $\_FILES['設定的 name 鍵值']['size'] 檔案大小
5. $\_FILES['設定的 name 鍵值']['error'] 錯誤代碼
6. $\_FILES['設定的 name 鍵值']['name'] 原本的檔名
