<?php 
			$kat = mysql_query("SELECT category, category.id from category join product on product.id_category=category.id group by category");
			while($list=mysql_fetch_array($kat))
			{
				echo"<li><a href='?v=produk&cat=$list[id]'>$list[category]</a></li>";
			}
?>