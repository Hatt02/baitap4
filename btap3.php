<?php
// Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình chẵn hay lẻ.
	$curentYear = date("Y");

	echo "Kết quả: ";
	if ($curentYear % 2 == 0) {
		echo "Năm nay là năm chẵn.";
	} else {
		echo "Năm nay là năm lẻ.";
	}
?>

<?php 
// Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100
	echo "<br> <br> Kết quả: ";
	for ($i = 1; $i <= 100; $i++) { 
		echo $i . " ";
	}
?>

<?php 
// Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.
	echo "<br> <br> Kết quả: ";
	for ($i = 1; $i <= 100; $i++) { 
		if ($i % 2 == 0) {
			echo "<b>$i</b> ";
		} else {
			echo "$i ";
		}
	}
?>

<?php 
// Bài 6: Viết chương trình PHP, sử dụng vòng lăpj For each in ra các năm trong mảng có sẵn dưới đây: $nam = array(1990, 1991, 1992, 1993, 1994, 1995)
	echo "<br> <br> Kết quả: ";
	$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

	foreach($nam as $value) {
		echo "$value ";
	}
?>