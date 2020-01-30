<?php
//001 MAMP環境で作る家計簿アプリ開発 データベース接続テスト

try{
    $db = new PDO(
        'mysql:host=localhost; dbname=housekeeping','root','root');
    print 'databaseに接続できました。';
    $db = null;
} catch (PDOException $e) {
    die('エラーメッセージ:'. $e->getMessage());
}

/* データベースをMySQL上で作成後、接続テストを実行
 * mysql on MAMP

sanohitkannoMBP:mysql yoshihiro$ cd /Applications/MAMP/Library/bin
sanohitkannoMBP:bin yoshihiro$ ./mysql -u root -p

mysql> status
--------------
./mysql  Ver 14.14 Distrib 5.7.23, for osx10.9 (x86_64) using  EditLine wrapper

Connection id:		3
Current database:	
Current user:		root@localhost
SSL:			Not in use
Current pager:		stdout
Using outfile:		''
Using delimiter:	;
Server version:		5.7.23 MySQL Community Server (GPL)
Protocol version:	10
Connection:		Localhost via UNIX socket
Server characterset:	utf8
Db     characterset:	utf8
Client characterset:	utf8
Conn.  characterset:	utf8
UNIX socket:		/Applications/MAMP/tmp/mysql/mysql.sock
Uptime:			30 min 45 sec

Threads: 1  Questions: 8  Slow queries: 0  Opens: 105  Flush tables: 1  Open tables: 98  Queries per second avg: 0.004
--------------

mysql> create database housekeeping default character set utf8;

mysql> status
--------------
./mysql  Ver 14.14 Distrib 5.7.23, for osx10.9 (x86_64) using  EditLine wrapper

Connection id:		5
Current database:	housekeeping
Current user:		root@localhost
SSL:			Not in use
Current pager:		stdout
Using outfile:		''
Using delimiter:	;
Server version:		5.7.23 MySQL Community Server (GPL)
Protocol version:	10
Connection:		Localhost via UNIX socket
Server characterset:	utf8
Db     characterset:	utf8
Client characterset:	utf8
Conn.  characterset:	utf8
UNIX socket:		/Applications/MAMP/tmp/mysql/mysql.sock
Uptime:			1 hour 16 min 32 sec

Threads: 1  Questions: 40  Slow queries: 0  Opens: 105  Flush tables: 1  Open tables: 98  Queries per second avg: 0.008
--------------

mysql> create table 費目(id int not null auto_increment,費目名 varchar(30) not null,備考 varchar(255),primary key (id));
Query OK, 0 rows affected (0.02 sec)


mysql> create table 家計簿(id int not null auto_increment, 日付 date not null, 費目id int not null, メモ varchar(100), 入金額 int not null, 出金額 int not null, foreign key(費目id) references 費目(id), primary key(id));
Query OK, 0 rows affected (0.02 sec)

mysql> alter table 費目 add column 入出金区分 char(1) not null comment '1:入金 2:出金' after 費目名;
Query OK, 0 rows affected (0.03 sec)
Records: 0  Duplicates: 0  Warnings: 0


mysql> show create table 費目;
+--------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
| Table  | Create Table                                                                                                                                                                                                                                                          |
+--------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
| 費目   | CREATE TABLE `費目` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `費目名` varchar(30) NOT NULL,
  `入出金区分` char(1) NOT NULL COMMENT '1:入金 2:出金',
  `備考` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8                 |
+--------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
1 row in set (0.00 sec)
 * 
 * */
