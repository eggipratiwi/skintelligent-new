<?php
    session_start();

    $flag = $_POST['flag'];           
    $smarty->assign('flag', $flag);    


    if($flag == "filterkota"){
        $idprovinsi = $_POST['idprovinsi'];
        $rskota=&$db->Execute("SELECT * FROM m_kota WHERE id_provinsi = '".$idprovinsi."'");

        $smarty->assign('rskota', $rskota);

    }elseif($flag == "filterkecamatan"){
        $idkota = $_POST['idkota'];
        $rskecamatan=&$db->Execute("SELECT * FROM m_kecamatan WHERE id_kota = '".$idkota."'");

        $smarty->assign('rskecamatan', $rskecamatan);

    }elseif($flag == "filterkelurahan"){
        $idkecamatan = $_POST['idkecamatan'];
        $rskelurahan=&$db->Execute("SELECT * FROM m_kelurahan WHERE id_kecamatan = '".$idkecamatan."'");

        $smarty->assign('rskelurahan', $rskelurahan);

    }elseif($flag == "cekuser"){

        $email = trim($_POST['email']);

        $rs2 = &$db->Execute("SELECT b.nama_kota, c.nama_kecamatan, d.nama_kelurahan, a.* FROM register a INNER JOIN m_kota b ON a.id_kota = b.id_kota INNER JOIN m_kecamatan c ON a.id_kecamatan = c.id_kecamatan INNER JOIN m_kelurahan d ON a.id_kelurahan = d.id_kelurahan WHERE a.email = ?", array((string)$email));
        if(!$rs2->EOF) 
        {
            $smarty->assign('id_register', $rs2->fields['id_register']);
            $smarty->assign('first_name', $rs2->fields['first_name']);
            $smarty->assign('last_name', $rs2->fields['last_name']);
            $smarty->assign('age', $rs2->fields['age']);
            $smarty->assign('gender', $rs2->fields['gender']);
            $smarty->assign('phone', $rs2->fields['phone']);
            $smarty->assign('email', $rs2->fields['email']);
            $smarty->assign('profession', $rs2->fields['profession']);
            $smarty->assign('detail_profession', $rs2->fields['detail_profession']);
            $smarty->assign('id_provinsi', $rs2->fields['id_provinsi']);
            $smarty->assign('id_kota', $rs2->fields['id_kota']);
            $smarty->assign('id_kecamatan', $rs2->fields['id_kecamatan']);
            $smarty->assign('id_kelurahan', $rs2->fields['id_kelurahan']);
            $smarty->assign('nama_kota', $rs2->fields['nama_kota']);
            $smarty->assign('nama_kecamatan', $rs2->fields['nama_kecamatan']);
            $smarty->assign('nama_kelurahan', $rs2->fields['nama_kelurahan']);
        }
        else
        {
            $smarty->assign('id_register', '');
        }

    }elseif($flag == "register"){

        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phonenumber'] = $_POST['phonenumber'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['profesi'] = $_POST['profesi'];
        $_SESSION['detail_profesi'] = $_POST['dprofesi'];
        $_SESSION['gender'] = $_POST['gender'];  

        $_SESSION['id_provinsi'] = $_POST['idprovinsi'];
        $_SESSION['id_kota'] = $_POST['idkota'];
        $_SESSION['id_kecamatan'] = $_POST['idkecamatan'];
        $_SESSION['term'] = $_POST['term'];

        $countUser = &$db->Execute("SELECT COUNT(b.id_register) FROM register b INNER JOIN tr_header a ON a.id_register = b.id_register WHERE email = ?", array((string)$_SESSION['email']))->fields[0]; 

        $countUserRegis = &$db->Execute("SELECT COUNT(b.id_register) FROM register b WHERE email = ?", array((string)$_SESSION['email']))->fields[0]; 

        if(empty($_SESSION['firstname']) or empty($_SESSION['lastname']) or empty($_SESSION['email']) or empty($_SESSION['phonenumber']) or empty($_SESSION['age']) or empty($_SESSION['profesi']) or empty($_SESSION['gender']) or empty($_SESSION['id_provinsi']) or empty($_SESSION['id_kota']) or empty($_SESSION['id_kecamatan'])){
             echo "FALSE";

        }elseif(empty($_SESSION['term'])) {
            echo "FALSE_TERM";

        }elseif($countUser > 0) {
            echo "FALSE_EMAIL";

        }elseif($countUser < 1) {
            //$cekdata =("select * from tr_header a inner join register b on a.id_register = b.id_register where b.email = 'sovyqytot@mailinator.com'");

            if($countUserRegis > 0){

            }else{

                $result = &$db->Execute('insert into register(first_name, last_name, age, gender, phone, email, profession, detail_profession, id_provinsi, id_kota, id_kecamatan, id_kelurahan) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array((string)$_SESSION['firstname'], (string)$_SESSION['lastname'], (string)$_SESSION['age'], (string)$_SESSION['gender'], (string)$_SESSION['phonenumber'], (string)$_SESSION['email'], (string)$_SESSION['profesi'], (string)$_SESSION['detail_profesi'], (string)$_SESSION['id_provinsi'], (string)$_SESSION['id_kota'], (string)$_SESSION['id_kecamatan'], (string)$_SESSION['id_kelurahan']));

            }

            echo"TRUE"; 
        }

    }elseif($flag == "savedata"){
        $x = $_POST['id_concern'];
        $y = $_POST['id_question'];
        $z = $_POST['id_option'];
        $_SESSION['ans'][$x][$y] = $_POST['answear'];
        $_SESSION['ansid'][$x][$y] = $_POST['id_option'];


    }elseif($flag == "cekdataconcern"){
        $x = $_POST['id_concern'];
        $filled = count($_SESSION['ans'][$x]);  
        $countQuest=&$db->Execute("SELECT COUNT(*) FROM questions where id_concern = ".$x)->fields[0];

        //print_r($_SESSION['ans'][$x]);
        //echo "okee";

        if($filled == $countQuest){
            echo "TRUE";
        }else{
            echo "Nomor ";

            for ($i=1; $i <= $countQuest; $i++) { 
                if($_SESSION['ans'][$x][$i] == ''){
                    if($i == $countQuest) {
                         echo $i;
                    }else{
                        echo $i.",";
                    }
                    
                }
            }
        }


    }elseif($flag == "result"){ 
        //$db->debug = true;
        $totalpoin = $_POST['hasil'];
        $conId = $_POST['id_concern'];
        $_SESSION['totalpoin'][$conId] = $totalpoin;
        $rsSkors=&$db->Execute("SELECT * FROM skors where min_skor <= $totalpoin and max_skor >= $totalpoin and id_concern = ".$conId);
        $description = $rsSkors ->fields['description'];

        echo $description; 


    }elseif($flag == "finish"){

        $rsCons=&$db->Execute("select COUNT(*) from concerns");
        $jmlCons = $rsCons ->fields[0];

        $ansCons = count($_SESSION['ans']);

        if($ansCons == $jmlCons){

            $flagfinish = "TRUE";
            for ($i=1; $i <= $jmlCons; $i++) { 

                $rsQuest=&$db->Execute("select COUNT(b.id_concern), title from concerns a inner join questions b on a.id_concern = b.id_concern where a.id_concern = ".$i);
                $jmlQues = $rsQuest ->fields[0];

                $ansQues = count($_SESSION['ans'][$i]);

                if($jmlQues != $ansQues){                    
                    $flagfinish = "FALSE";
                }

            }

            if($flagfinish == "TRUE"){

                $id_register=&$db->Execute("select * from register where email = ? limit 1", array((string)$_SESSION['email']))->fields[0];

                $saveTrHeader = &$db->Execute('insert into tr_header(id_register) values(?)', array((int)$id_register));

                if($saveTrHeader){

                    $tr_header_id=&$db->Execute("select * from tr_header where id_register = ? limit 1", array((int)$id_register))->fields[0];

                    foreach ($_SESSION['ansid'] as $idConcern => $idQuestions) {
                        foreach ($idQuestions as $idQuestion => $idOption) {

                            $saveTrDetail = &$db->Execute('insert into tr_detail(tr_header_id, id_concern, id_question, id_option, id_register) values(?, ?, ?, ?, ?)', array((int)$tr_header_id, (int)$idConcern, (int)$idQuestion, (int)$idOption, (int)$id_register));

                        }

                    }
                }


            }else{
                echo "FALSE";
            }

        }else{
            echo "FALSE";
        }



        

    }


    $smarty->display('ajax.tpl');
?>