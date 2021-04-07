<?php
function build($i, $count, $result){
	while ($row = $result->fetch_assoc() and $i < $count){
		echo '<div class="old-news">';
		echo '<img src="'.$row['imglink'].'" alt="">';
		echo '<div>';
		echo '<p class="head">'.$row['title'].'</p>';
		echo '<p class="date">'.$row['date'].'</p>';
		echo '<hr>';
		echo '<p>'.$row['description'].'</p>';
		echo '<a href="'.$row['link'].'"><p>Почитать подробнее</p></a>';
		echo '</div>';
		echo '</div>';
		$i=$i+1;
	}
	$count=$count+3;
}
?>