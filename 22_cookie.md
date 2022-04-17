# cookie 資料暫存

## 什麼是 Cookie? 有什麼好處?

Cookie 是一些小的文字檔，儲存使用者的瀏覽資料，存放在瀏覽器中，下次可用。

1. 提升使用者體驗
   1. 網頁客製化
   2. 避免重複資料填寫
   3. 優化網站
2. 分析使用者行為

隨著時代變遷，建議該使用 JWT, Session, 而非 Cookie

## Cookie 的設定

1. 若無設定存放時間，當瀏覽器關閉後，該 cookie 自動過期。
2. 設定後，須在下次瀏覽網頁才能使用。
3. setcookie 撰寫的位置必須在任何輸出(echo,print_r)之前

```php
// 設置Cookie
if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    setcookie('username', $username, time() + 60 * 60);
    header('Location: page2.php');
}

// 清除Cookie，將存放時間改現在，所以下一秒就失效了。
setcookie("myName", "新手妹子玩家", time());

```

[Cookie 和 Session 小筆記](https://github.com/nicehorse06/blog/issues/11)
[【2021 快速了解】Cookies！能吃嗎？ | 橫跨北美的工程師 Victor](https://www.youtube.com/watch?v=KgxUAu1L-aI)
