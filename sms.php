<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMS APP</title>
</head>
<body>
    <form method="post" action="sms.php">
        <table>
            <tr>
                <td>username:</td>
                <td><input type="text" name="username" placeholder="enter your username"></td>
            </tr>
            <tr>
                <td>authKey:</td>
                <td><input type="text" name="hash" placeholder="enter authKey"></td>
            </tr>
            <tr>
                <td>sender:</td>
                <td><input type="text" name="sender" placeholder=""></td>
            </tr>
            <tr>
                <td>number:</td>
                <td><input type="text" name="number" placeholder="enter number"></td>
            </tr>
            <tr>
                <td>message:</td>
                <td><textarea name="message" placeholder="enter message"></td>
            </tr>
            <td></td>
            <td><input type="submit" name="abc" value="send"></td>
        </table>
    </form>

</body>
</html>