<?php

$html = <<< HEREDOC
<h2>資料管理系統─PDO-STH版本</h2>
<p><a href="list_page2.php">分頁列表</a></p>
<p><a href="manage2.php?op=LIST_PAGE">分頁列表 (manage2.php 全集中一支程式之寫法)</a></p>
<hr>
<p><a href="find2.php">查詢姓名 (全部顯示版本)</a></p>
<p><a href="findp2.php">查詢姓名 (分頁顯示版本)</a></p>
<hr>
<p><a href="install2.php">安裝資料庫或資料表</a></p>
HEREDOC;


include 'pagemake2.php';
pagemake($html, '');
?>