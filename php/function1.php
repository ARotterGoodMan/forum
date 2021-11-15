<?php
    $dbms = 'mysql';     //数据库类型
    $host = "sql207.fblog.ml";    //数据库主机名
    $dbName = 'fbl_28412090_groups_9';    //使用的数据库
    $user = 'fbl_28412090';      //数据库连接用户名
    $password = "Shao264419";          //对应的密码
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