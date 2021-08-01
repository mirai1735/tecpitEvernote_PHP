<?php

/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {
  $dsn = 'mysql:dbname=bon92_evernotephp;host=mysql10025.xserver.jp';
  $user = 'bon92_extends';
  $password = 'Yui10Rui';

  try
  {
      $database_handler = new PDO($dsn, $user, $password);
  }
  catch (PDOException $e)
  {
      echo "DB接続に失敗しました。<br />";
      echo $e->getMessage();
      exit;
  }
  return $database_handler;
}