<?php
    
	$rsProvinsi = &$db->Execute("select * from m_provinsi");
	$smarty->assign('rsProvinsi', $rsProvinsi);

    $rsKota = &$db->Execute("select * from m_kota where id_kota =".$_SESSION['id_kota']);
    $smarty->assign('kota', $rsKota ->fields['nama_kota']);

    $rsKelurahan = &$db->Execute("select * from m_kelurahan where id_kelurahan = ".$_SESSION['id_kelurahan']);
    $smarty->assign('kelurahan', $rsKelurahan ->fields['nama_kelurahan']);

    $rsKecamatan = &$db->Execute("select * from m_kecamatan where id_kecamatan =".$_SESSION['id_kecamatan']);
    $smarty->assign('kecamatan', $rsKecamatan ->fields['nama_kecamatan']);

	$rsConcerns=&$db->Execute("SELECT * FROM concerns");
    $smarty->assign('rsConcerns', $rsConcerns);

    while(!$rsConcerns -> EOF){

        $conId = $rsConcerns ->fields['id_concern'];

        $rsQuestions=&$db->Execute("SELECT * FROM questions where id_concern = ".$conId);
        $smarty->assign('rsQuestions'.$conId, $rsQuestions);

        $rsQuestionsCount=&$db->Execute("SELECT COUNT(*) FROM questions where id_concern = ".$conId);
        $smarty->assign('rsQuesCount'.$conId, $rsQuestionsCount ->fields[0]);

        while(!$rsQuestions -> EOF){
            
            $quesId = $rsQuestions ->fields['id_question'];

            $rsOptions=&$db->Execute("SELECT * FROM options where id_question = ".$quesId);
            $smarty->assign('rsOptions'.$quesId, $rsOptions);

            $smarty->assign('ans'.$conId.$quesId, $_SESSION['ans'][$conId][$quesId]);

            $rsQuestions -> moveNext(); 
            
        }

        $rsConcerns -> moveNext();
        
    }

    $smarty->assign('firstname', $_SESSION['firstname']);
    $smarty->assign('lastname', $_SESSION['lastname']);
    $smarty->assign('email', $_SESSION['email']);
    $smarty->assign('phonenumber', $_SESSION['phonenumber']);
    $smarty->assign('age', $_SESSION['age']);
    $smarty->assign('city', $_SESSION['city']);
    $smarty->assign('profesi', $_SESSION['profesi']);
    $smarty->assign('detail_profesi', $_SESSION['detail_profesi']);
    $smarty->assign('gender', $_SESSION['gender']);

    $smarty->assign('id_provinsi', $_SESSION['id_provinsi']);
    $smarty->assign('id_kota', $_SESSION['id_kota']);
    $smarty->assign('id_kecamatan', $_SESSION['id_kecamatan']);
    $smarty->assign('id_kelurahan', $_SESSION['id_kelurahan']);

	$smarty->display('_index.tpl');
?>