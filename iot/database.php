<?php

    function parse_ini_file_quotes_safe($f) {
    $r=$null;
    $sec=$null;
    $f=@file($f);
    for ($i=0;$i<@count($f);$i++)
    {
      $newsec=0;
      $w=@trim($f[$i]);
      if ($w)
      {
       if ((!$r) or ($sec))
       {
        if ((@substr($w,0,1)=="[") and (@substr($w,-1,1))=="]") {$sec=@substr($w,1,@strlen($w)-2);$newsec=1;}
       }
       if (!$newsec)
       {
        $w=@explode("=",$w);$k=@trim($w[0]);unset($w[0]); $v=@trim(@implode("=",$w));
        if ((@substr($v,0,1)=="\"") and (@substr($v,-1,1)=="\"")) {$v=@substr($v,1,@strlen($v)-2);}
        if ($sec) {$r[$sec][$k]=$v;} else {$r[$k]=$v;}
       }
      }
    }
    return $r;
    }

    function connect() {
        static $connection;
        if(!isset($connection)) {
            $config = parse_ini_file_quotes_safe('../_private/database.ini');
            $database = $config['database'];
            if($database === null) {
                return null;
            }
            $connection = mysqli_connect($database['host'], $database['username'], $database['password'], $database['sid']);
        }
        if($connection === false) {
            return mysqli_connect_error();
        }
        return $connection;
    }

    function query($query) {
        if ($query !== null) {
            return mysqli_query(connect(), $query);
        }
        return false;
    }

    function select($query) {
        $rows = array();
        $result = query($query);
        if ($result === false) {
            return false;
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>