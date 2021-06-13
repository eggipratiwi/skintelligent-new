<?php
// begin: model correspondents
	
	$rsCorrespondent=&$db->Execute("select count(*) from tr_header");
    $smarty->assign('correspondents_count', $rsCorrespondent->fields[0]);

    for ($i=1; $i <=4; $i++) { 
		$totaltransaksi = 0;
		$tr_finish = 0;
		$tr_pending = 0;

		$finish = 0;
		$pensing = 0;

		if($i == 1){
			$filterbln = "SUBSTR(a.create_date, 6,2) IN ('01','02','03')";
		}elseif($i == 2){
			$filterbln = "SUBSTR(a.create_date, 6,2) IN ('04','05','06')";
		}elseif($i == 3){
			$filterbln = "SUBSTR(a.create_date, 6,2) IN ('07','08','09')";
		}elseif($i == 4){
			$filterbln = "SUBSTR(a.create_date, 6,2) IN ('10','11','12')";
		}

		$rsPending = &$db->Execute("select COUNT(*) as jml FROM (SELECT a.id_register, a.create_date FROM register a 
									WHERE ".$filterbln." AND a.id_register NOT IN ( SELECT id_register FROM tr_header ))rs");
		$tr_pending = $rsPending->fields[0];

		$rsFinish = &$db->Execute("select COUNT(*) as jml FROM (SELECT a.id_register, a.create_date FROM register a
   									INNER JOIN tr_header tr1 on a.id_register = tr1.id_register
	 								WHERE ".$filterbln.") rs");
		$tr_finish = $rsFinish->fields[0];

		$rsAll = &$db->Execute("select COUNT(*) as jml FROM (SELECT * FROM register a
	 								WHERE ".$filterbln.") rs");
		$totaltransaksi = $rsAll->fields[0];

		if($totaltransaksi != 0){
			$finish = ceil($tr_finish / $totaltransaksi * 100);
			$pending = floor($tr_pending / $totaltransaksi * 100);

			$smarty->assign('finish'.$i, $finish);
			$smarty->assign('pending'.$i, $pending);
			$smarty->assign('quarterjml'.$i, $totaltransaksi);

			$smarty->assign('tr_finish', $tr_finish);
			$smarty->assign('tr_pending', $tr_pending);
		}

	}


	$rsPending_total = &$db->Execute("select COUNT(*) as jml FROM (SELECT a.id_register, a.create_date FROM register a 
									WHERE a.id_register NOT IN ( SELECT id_register FROM tr_header ))rs");
	$smarty->assign('jml_pending', $rsPending_total->fields[0]);

	$rsFinish_total = &$db->Execute("select COUNT(*) as jml FROM (SELECT a.id_register, a.create_date FROM register a
   									INNER JOIN tr_header tr1 on a.id_register = tr1.id_register) rs");
	$smarty->assign('jml_finish', $rsFinish_total->fields[0]);

	$rsAll_total = &$db->Execute("select COUNT(*) as jml FROM (SELECT * FROM register a) rs");
	$smarty->assign('jml_all', $rsAll_total->fields[0]);

// begin: survey update

	$rsUpdateMonth=&$db->Execute("SELECT CONCAT(a.first_name,' ',a.last_name) as name, a.*, b.nama_provinsi, c.nama_kota, d.nama_kecamatan FROM register a 
                                INNER JOIN m_provinsi b ON a.id_provinsi = b.id_provinsi
                                INNER JOIN m_kota c ON a.id_kota = c.id_kota
                                INNER JOIN m_kecamatan d ON a.id_kecamatan = d.id_kecamatan
                                INNER JOIN tr_header tr1 on a.id_register = tr1.id_register
								WHERE SUBSTR(a.create_date, 6,2) = SUBSTR(CURRENT_DATE, 6,2)
                                ORDER BY a.create_date desc limit 10");
	$smarty->assign('rsUpdateMonth', $rsUpdateMonth);

	$rsUpdateAll=&$db->Execute("SELECT CONCAT(a.first_name,' ',a.last_name) as name, a.*, b.nama_provinsi, c.nama_kota, d.nama_kecamatan FROM register a 
                                INNER JOIN m_provinsi b ON a.id_provinsi = b.id_provinsi
                                INNER JOIN m_kota c ON a.id_kota = c.id_kota
                                INNER JOIN m_kecamatan d ON a.id_kecamatan = d.id_kecamatan
                                INNER JOIN tr_header tr1 on a.id_register = tr1.id_register
                                ORDER BY a.create_date desc limit 10");
	$smarty->assign('rsUpdateAll', $rsUpdateAll);

// begin: top concern

	$rsTopConcern=&$db->Execute("SELECT
	rs.id_concern,
	rs.title,
	rs.id_skor,
	rs.description,
	COUNT( rs.id_register ) AS total,
	rs.color
FROM
	(
	SELECT
		tb2.id_concern,
		tb1.title,
		tb2.id_skor,
		tb2.description,
		tb2.color,
		tb1.id_register 
	FROM
		(
		SELECT
			b.id_register,
			c.id_concern,
			c.title,
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
	COUNT( rs.id_register ) desc
limit 7");
	$smarty->assign('rsTopConcern', $rsTopConcern);


// begin: summary survey

	$rsSummaryMonth=&$db->Execute("select c.id_register,  CONCAT(c.first_name,' ',c.last_name) as name, c.age, c.gender, d.title, SUM(e.poin) as skor,c.create_date from tr_header a
    inner join tr_detail b on a.tr_header_id = b.tr_header_id
    inner join register c on b.id_register = c.id_register
    inner join concerns d on b.id_concern = d.id_concern
    inner join options e on b.id_option = e.id_option
    WHERE SUBSTR(a.create_date, 6,2) = SUBSTR(CURRENT_DATE, 6,2)
    group by b.id_register,b.id_concern
    order by c.create_date desc limit 10");

    $smarty->assign('rsSummaryMonth', $rsSummaryMonth);

    $rsSummaryAll=&$db->Execute("select c.id_register,  CONCAT(c.first_name,' ',c.last_name) as name, c.age, c.gender, d.title, SUM(e.poin) as skor,c.create_date from tr_header a
    inner join tr_detail b on a.tr_header_id = b.tr_header_id
    inner join register c on b.id_register = c.id_register
    inner join concerns d on b.id_concern = d.id_concern
    inner join options e on b.id_option = e.id_option
    group by b.id_register,b.id_concern
    order by c.create_date desc limit 10");

    $smarty->assign('rsSummaryAll', $rsSummaryAll);


    $smarty->display('_index.tpl');
?>