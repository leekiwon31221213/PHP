<style>
span {
    color: #fff;
    background-color: #333;
}

* {
    line-height: 3;
}

h3 {
    color: royalblue;
    font-size: 30px;
}
</style>
<?php 

echo "<h2 style='font-size:80px;'>수량자 (Quantifier)</h2>";
echo "<a href='https://regex101.com/' target='_blank' style='font-size:30px;'>https://regex101.com/</a>";

echo "<br>";
echo "<h2 style='font-size:50px;'>* 애스털리스크</h2>";
echo "<ul style='font-size:30px;'>*앞에 있는 문자가 0개 이상
<li>없거나, 있거나,많거나
<ul>
<li>Test String에 aabcabcbc를 넣고 문자 검사로 a*b 검사하게 되면 <br> aab/ab/bc에 불이 들어옴 이말인 즉슨 <br> a가 많거나 / a가 있거나 /a가 없거나가 된다 </li>
</ul>
</li>
</ul>";


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>+ 플러스</h2>";
echo "<ul style='font-size:30px;'>+ 앞에 있는 문자가 1개 이상 
<li>있거나,많거나
<ul>
<li>Test String에 aabcabcbc를 넣고 문자 검사로 a+b 검사하게 되면 <br> aab/ab에 불이 들어옴 이말인 즉슨 <br> a가 많거나 / a가 있거나가 된다 </li>
</ul>
</li>
</ul>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>? 물음표</h2>";
echo "<ul style='font-size:30px;'>? 앞에 있는 문자가 1개 이하  (1 또는 0)
<li>1개만 있거나,없거나
<ul>
<li>Test String에 aabcabcbc를 넣고 문자 검사로 a?b 검사하게 되면 <br> ab/ab/b에 불이 들어옴 이말인 즉슨 <br> a가 하나만 있거나가 없어도 된다 </li>
</ul>
</li>
</ul>";

?>