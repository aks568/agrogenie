<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>
<?php include 'simple_html_dom.php'?>
<center><br><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Latest Agricultural News</h1></center>
<hr style="border:0.5px solid grey;width: 75%;">
<div class="container" style="font-family: 'Quicksand',sans-serif;">
<?php
$html=file_get_html('https://krishijagran.com/agriculture-world');
$list = $html->find('div[class="n-cat-items"]',0);
$list_img=$list->find('img');
for ($i=0;$i<sizeof($list_img);$i++)
{
    $img=$list_img[$i];
    if($i==0||$i==3||$i==6||$i==9||$i==12||$i==15||$i==18||$i==21||$i==24)
    { echo '<div class="card-columns" style="color:black">';}
    echo '<div class="card my-2"><img class="card-img-top" src="'.$img->getAttribute("data-src").'" width="150" height="150">'
    .'<div class="card-body"><p class="card-text">'.$img->getAttribute("alt").'</p></div></div>';
    if($i==2||$i==5||$i==8||$i==11||$i==14||$i==17||$i==20||$i==23||$i==26)
    { echo '</div>'; }
    //echo "<img src=".$img->getAttribute('data-src')."/><br>".$img->getAttribute('alt')."<br>";
}
?>
</div>