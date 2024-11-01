<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WebShell</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 30px auto;
            width: fit-content;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            display: block;
            text-decoration: none;
            color: #555;
            padding: 10px;
            background-color: #f7f7f7;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }
        a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>WebShell</h1>
    <ul>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/shell.php">PHP-一句话木马</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/bigShell.php">PHP-大马</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/Behinder_v2.php">PHP-Behinder_v2</br><span style="font-size: smaller;">密码:pass</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/Behinder_v3.php">PHP-Behinder_v3</br><span style="font-size: smaller;">密码:rebeyond</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/Behinder_v4.php">PHP-Behinder_v4</br><span style="font-size: smaller;">密码:rebeyond</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/Godzilla_v2.php">PHP-哥斯拉_v2</br><span style="font-size: smaller;">密码:pass 密钥:key</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/shell.php">PHP-哥斯拉_v4</br><span style="font-size: smaller;">哥斯拉V3以后新增php一句话木马连接</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/weevely.php">PHP-Weevely</br><span style="font-size: smaller;">密码:kali</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:80/TianXie_api_404.php">PHP-天蝎</br><span style="font-size: smaller;">密码:sky</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:8080/Godzilla_v2.jsp">JSP-哥斯拉_v2</br><span style="font-size: smaller;">密码:pass 密钥:key</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:8080/Godzilla_v4.jsp">JSP-哥斯拉_v4</br><span style="font-size: smaller;">密码:pass 密钥:key</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:8080/Behinder_v2.jsp">JSP-Behinder_v2</br><span style="font-size: smaller;">密码:pass</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:8080/Behinder_v3.jsp">JSP-Behinder_v3</br><span style="font-size: smaller;">密码:rebeyond</span></a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:8080/Behinder_v4.jsp">JSP-Behinder_v4</br><span style="font-size: smaller;">密码:rot13</span></a></li>
    </ul>
</body>
</html>

