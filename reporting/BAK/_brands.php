<?php

	
	// // $db->debug = true;
	
	$rsBrands = &$db->Execute("SELECT SUM(td.qty) AS jml_sales, c.total_qty, d.total_type, b.name AS brand, b.`logo`, a.* FROM tr_detail td
								INNER JOIN product a ON td.`product_id` = a.`product_id`
								LEFT JOIN brands b ON a.`brandsid` = b.`brandsid` 
								INNER JOIN (SELECT SUM(r.qty) AS total_qty, r.brandsid FROM product r GROUP BY r.brandsid) c ON a.`brandsid` = c.brandsid
								INNER JOIN (SELECT COUNT(s.`product_code`) AS total_type, s.brandsid  FROM (SELECT xx.`product_code`, xx.`brandsid` FROM product xx WHERE xx.brandsid IS NOT NULL GROUP BY product_code) s GROUP BY s.`brandsid`) d ON a.`brandsid` = d.brandsid
								WHERE b.name IS NOT NULL
								GROUP BY b.name
								ORDER BY SUM(td.qty) DESC");

	$smarty->assign('rsBrands', $rsBrands);


    $smarty->display('_brands.tpl');
?>