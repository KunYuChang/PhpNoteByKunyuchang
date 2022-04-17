<?php

// EMAIL檢查
if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // Remove illegal chars
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    echo $email . '<br>';

    if (filter_var(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
        echo 'Email is valid';
    } else {
        echo 'Email is NOT valid';
    }
}

// 資料型態檢查
$var = '123';

if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo $var . 'is a number';
} else {
    echo $var . 'is NOT a number';
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>