<?php
  
    echo "flag 1<br>";          //印出flag 1然後換行
    @require("MyLibrary.php");  //不顯示錯誤但不會繼續執行
    echo "flag 2<br>";          //不會印出

?>