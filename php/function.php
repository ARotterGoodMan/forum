<?php
    $dbms = 'mysql';     //数据库类型
    $host = "localhost";    //数据库主机名
    $dbName = 'groups_9';    //使用的数据库
    $user = '6203';      //数据库连接用户名
    $password = "Lfg.1589";          //对应的密码
    $dsn = "$dbms:host=$host;dbname=$dbName";
    $pdo = new PDO($dsn, $user, $password);
    function query($sql)
    {
        global $pdo;
		$pdo->query("set names 'utf8'");
        $reg = $pdo->query($sql);
        return $reg;
    }
    
    function fetch($sql)
    {
        global $pdo;
		$pdo->query("set names 'utf8'");
        $reg = $pdo->query($sql);
        $regs = $reg->fetch(PDO::FETCH_ASSOC);
        return $regs;
    }
    
    function fetchAll($sql)
    {
        global $pdo;
		$pdo->query("set names 'utf8'");
        $re = $pdo->query($sql);
        while ($reg = $re->fetch(PDO::FETCH_ASSOC)) {
            $regs[] = $reg;
        }
        return $regs;
    }