<?php

	$rsSkor=&$db->Execute("SELECT
	rs.id_concern,
	rs.id_skor,
	rs.description,
	COUNT( rs.id_register ) AS total,
	rs.color
FROM
	(
	SELECT
		tb2.id_concern,
		tb2.id_skor,
		tb2.description,
		tb2.color,
		tb1.id_register 
	FROM
		(
		SELECT
			b.id_register,
			c.id_concern,
			SUM( d.poin ) AS skor 
		FROM
			tr_detail a
			INNER JOIN register b ON a.id_register = b.id_register
			INNER JOIN concerns c ON a.id_concern = c.id_concern
			INNER JOIN options d ON a.id_option = d.id_option 
		GROUP BY
			c.id_concern,
			b.id_register 
		) tb1
		RIGHT JOIN skors tb2 ON tb1.id_concern = tb2.id_concern 
		AND tb2.min_skor <= tb1.skor AND tb2.max_skor >= tb1.skor 
	ORDER BY
		tb2.id_concern ASC 
	) rs 
GROUP BY
	rs.id_skor 
ORDER BY
	rs.id_concern");


    $smarty->assign('rsSkor', $rsSkor);


    $smarty->display('_survey-report-graphic.tpl');
    
?>