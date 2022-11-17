<?php
if(isset($_GET['submit'])){
    $fnum = $_GET['fnum']; $Snum = $_GET['Snum']; $operator = $_GET['operator']; $total = $_GET['total'];
    $total =  ($operator == "+") ? ($fnum + $Snum) : $total =  ($operator == "-") ? ($fnum - $Snum) : 
    $total =  ($operator == "*") ? ($fnum * $Snum) : $total =  ($operator == "/") ? ($fnum / $Snum) : "Invalid Keyword";}
    echo '<form method="get">
        First Number:<input type="text" name="fnum" value="'.@$fnum.'">
        Operator:<input type="text" name="operator" value="'.@$operator.'">
        Second Number:<input type="text" name="Snum" value="'.@$Snum.'">
        Total:<input type="text" name="total" value="'.@$total.'">
        <input type="submit" name="submit" value="calculate"></form>';