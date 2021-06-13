
<?php
	require_once('_header.php');
	require_once('_database.php');
	
	//$rsCollection = &$db->Execute("SELECT * FROM collection");
	//$smarty->assign('collectionList', $rsCollection);

	//$expl = explode("/", strtolower($HTTP_SERVER_VARS["REQUEST_URI"]));
	$expl = explode("/", strtolower($_SERVER["REQUEST_URI"]));
	$flag = 1;
	

	$module = $_GET['module'];
	if(!isset($module)) $module = $expl[$flag+1];
	if(!isset($module)) $module = '';
	$smarty->assign('module', $module);
	$smarty->assign('submodule', $expl[$flag+2]);



	//echo "<br/>'".strtolower($_SERVER["REQUEST_URI"])."'";

	//echo $expl[$flag+2];
	//$submodule = $expl[$flag+2];
	
	//if($module != 'language') $_SESSION['current_page'] = 'http://'.$HTTP_SERVER_VARS["SERVER_NAME"].$HTTP_SERVER_VARS["REQUEST_URI"];


	if($module == '') include('_index.php');
	else if($module == 'home') { 	
		include('_index.php');
	
	}else if($module == 'journal') { 
	
			$x = $expl[$flag+2];
		$y = $expl[$flag+3];
		$z = $expl[$flag+4];
		
		$selected_year = $x;
		$selected_month = $y;
		$selected_news_id = $z;
		
			
		include('_journal.php');

	}else if($module == 'faq') { 	
		include('_faq.php');
	
	}else if($module == 'policy') { 	
		include('_policy.php');
	
	}else if($module == 'behind-the-scene') { 	
		include('_behind-the-scene.php');

	}else if($module == 'stockist') { 
	
		$x = $expl[$flag+2];
		$y = $expl[$flag+3];
		$z = $expl[$flag+4];
		$selected_location = $x;
		$selected_name = $z;
		$selected_id = $y;
					
		include('_stockist.php');

	}else if($module == 'press') { 	
		include('_press.php');



	}else if($module == 'store') { 	
			
				
			$x = explode("-", $expl[$flag+2]);
				$item_id = (string)$x[0];
				
					  
				if($x!=''  && $item_id!= '') 
				{ 
					// passing tipe koleksi, contoh  : ikyk-shop.com/new-collection/ss12
					include('_product-detail.php');
				} 
				else
				{
					
					include('_store.php');
				}

	
	
	} else if($module == 'collection') { 	
				
				
				$x = explode("-", $expl[$flag+2]);
				$col_id = (int)$x[0];
				//echo "'".$col_id."'";  
				if($col_id!='') 
				{ 
					$rs3 = &$db->Execute("select * from collection where parent_collection_id = ?",(int)$col_id);
					if(!$rs3->EOF) {
						
						$rs4 = &$db->Execute("select * from collection where collection_id = ?",(int)$col_id);
						$smarty->assign('collectionname', $rs4->fields['collectionname']);
						$smarty->assign('thumbnail', $rs4->fields['thumbnail']);
						$smarty->assign('collection_id', $rs4->fields['collection_id']);
						$smarty->assign('c_year', $rs4->fields['c_year']);
						
						include('_collection_theme.php');
					}
					else {
						$rs4 = &$db->Execute("select * from collection where collection_id = ?",(int)$col_id);
						
						$smarty->assign('thumbnail', $rs4->fields['thumbnail']);
						$smarty->assign('collectionname', $rs4->fields['collectionname']);
						$smarty->assign('collection_id', $rs4->fields['collection_id']);
						$smarty->assign('c_year', $rs4->fields['c_year']);
						
						if($rs4->fields['parent_collection_id'] != 0)
						{
						$rs6 = &$db->Execute("select * from collection where collection_id = ?",(int) $rs4->fields['parent_collection_id']);
						
						$smarty->assign('thumbnail', $rs6->fields['thumbnail']);
						$smarty->assign('collectionname', $rs6->fields['collectionname']);
						$smarty->assign('collection_id', $rs6->fields['collection_id']);
						$smarty->assign('c_year', $rs6->fields['c_year']);
						}
						include('_collection_detail.php');
						}
				} 
				else
				{
					include('_collection.php');
				}
				
	}
	

	
	else if($module == 'collection-press') { 	
		$x = explode("-", $expl[$flag+2]);
		$col_id = (int)$x[0];
				
		include('_collection_press.php');
	}
	
	
	else if($module == 'order') { 	
		include('_order.php');
	}
	

	else if($module == 'stockist') { 
		include('_stockist.php');
	} else if($module == 'contact') { 
		include('_contact.php');
	} else if($module == 'about') { 
		include('_about.php');
	} else if($module == 'help') { 
		include('_contact.php');
	} else if($module == 'newsletter') { 
		include('_newsletter.php');
	} else if($module == 'faq') { 
		include('_faq.php');
	} else if($module == 'terms-and-condition') { 
		include('_terms-and-condition.php');
	} else if($module == 'delivery-and-returns') { 
		include('_delivery-and-returns.php');
	} else if($module == 'how-to-order') { 
		include('_how-to-order.php');

	
	} else if($module == 'search') { 
		$s = $expl[$flag+2];
		include('_search.php');
		
	
	} else if($module == 'billing') { 
		include('_billing.php');

	
	} else if($module == 'sign-in') { 
		include('_sign-in.php');
	} else if($module == 'log-out') { 
		include('_log-out.php');			
	} else if($module == 'sign-up') { 
		include('_sign-up.php');
	
	} else if($module == 'payment-confirmation') { 
		$x = $expl[$flag+2];
		$invoice_id = $x."/".strtoupper($expl[$flag+3])."/".strtoupper($expl[$flag+4])."/".$expl[$flag+5]."/".$expl[$flag+6];
		
		include('_payment-confirmation.php');
		

	} else if($module == 'konfirmasi') { 
				$x = $expl[$flag+2];
				$header_id = $x;
				//echo "header_id :'$header_id'";
				
				include('_konfirmasi.php');
	} else if($module == 'invoice') { 
				$x = $expl[$flag+2];
				$header_id = $x;
				//echo "header_id :'$header_id'";
				
				include('_invoice.php');

	} else if($module == 'my-account') { 
		include('_my-account.php');
		
	} else if($module == 'checkout') { 
		include('_checkout.php');
		
	} else if($module == 'cart') {
				$x = $expl[$flag+2];
				$pid = $x;
				
				if($x!='') 
				{ 
					// passing tipe koleksi, contoh  : ikyk-shop.com/new-collection/ss12
					include('_cart.php');
				} 
				else
				{
				
					include('_cart.php');
				}		
		
			
	} else if($module == 'collection') { 	
				$x = $expl[$flag+2];
				$item_id = $x;
				
				  
				if($x!='') 
				{ 
					// passing tipe koleksi, contoh  : ikyk-shop.com/new-collection/ss12
					include('_collection-detail.php');
				} 
				else
				{
					
					include('_collection.php');
				}
				
	} else if($module == 'destroy') { 	
			session_destroy();
			include('_index.php');
			
	
	}else if ($module == 'add-cart') {
				$x = explode("-", $expl[$flag+2]);
				$tipe_koleksi = (string)$x[0];
				$tipe_code = (string)$x[0].'-'.(string)$x[1];
				$id_koleksi = (string)$x[1];
				//echo "tipe koleksi : '$tipe_koleksi'<br/>";
				//echo "id_koleksi : '$id_koleksi'<br/>";
				if($tipe_koleksi!='' && $id_koleksi!='') 
				{ 
					// passing tipe koleksi, contoh  : ikyk-shop.com/new-collection/ss12
					include('_add-cart.php');
				} 
				else if ($tipe_koleksi=='' && $id_koleksi!='') 
				{
					// passing tipe koleksi dan id_koleksi, contoh  : ikyk-shop.com/new-collection/ss12-1
					include('_check-out.php');
				}
				else 
				{
				
					include('_collection-new.php');
				}	
				
	} else if($module == 'previous-collection') { 		
				$x = explode("-", $expl[$flag+2]);
				$tipe_koleksi = (string)$x[0];
				$tipe_code = (string)$x[0].'-'.(string)$x[1];
				$id_koleksi = (string)$x[2];
				//echo "tipe koleksi : '$tipe_koleksi'<br/>";
				//echo "id_koleksi : '$id_koleksi'<br/>";
				if($tipe_koleksi!='' && $id_koleksi=='') 
				{ 
					// passing tipe koleksi, contoh  : ikyk-shop.com/new-collection/ss12
					include('_collection.php');
				} 
				else if ($tipe_koleksi!='' && $id_koleksi!='') 
				{
					// passing tipe koleksi dan id_koleksi, contoh  : ikyk-shop.com/new-collection/ss12-1
					include('_product-detail-prev.php');
				}
				else 
				{
				
					include('_collection-prev-intro.php');
				}

	
	}else {
		
		$smarty->display('_page-not-found.tpl');
	}
	
	
?>