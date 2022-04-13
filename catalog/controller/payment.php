<?php 
	class PaymentController extends Controller {
		public function index() {
	    	$data = array();
	    	$id_user = (int)$this->getSession('id_user');
	    	if(empty($id_user)){
	    		$id_package = '&id_package='.(int)get('id_package');
	    		$id_content = '&id_content='.(int)get('id_content');
	    		redirect('member/login&redirect=payment'.$id_package.$id_content);
	    	}

	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$id_package 	= get('id_package');
	    	$id_content 	= get('id_content');
	    	$data['detail'] = $this->model('master')->getPackageDetail($id_package);

	    	$data = array(
    			'image' 	=> '',
    			'amount'	=> '',
    			'result'	=> ''
    		);
    		$terminalId = '' ;
		    $requestUId = GUID() ;

		    $billerId 	= billerId;
	    	$data['amount']	=	$amount 	= 1;
		    $data['invoice'] 	= $invoice 		= 'INV_'.$billerId;
		    $data['ref1'] 		= $ref1 		= $billerId;
		    $data['ref2'] 		= $ref2 		= '';
		    
		    $api_key 	= api_key;
		    $api_secret = api_secret;
		    
		    $arrayHeader1 = array();
		    $arrayHeader1[] = "Content-Type: application/json";
		    $arrayHeader1[] = "accept-language: EN";
		    $arrayHeader1[] = "requestUId: ".$requestUId;
		    $arrayHeader1[] = "resourceOwnerId: ".$api_key; //API Key

		    $post_qrcode1 = [
		        'applicationKey' => $api_key, //API Key
		        'applicationSecret' => $api_secret //API Secret
		    ];
		    $url = url;
		    $get_token = $url."v1/oauth/token";
		    $ch1 = curl_init();
		    curl_setopt($ch1, CURLOPT_URL,$get_token);
		    curl_setopt($ch1, CURLOPT_HEADER, false);
		    curl_setopt($ch1, CURLOPT_POST, true);
		    curl_setopt($ch1, CURLOPT_HTTPHEADER, $arrayHeader1);
		    curl_setopt($ch1, CURLOPT_POSTFIELDS, json_encode($post_qrcode1));
		    curl_setopt($ch1, CURLOPT_RETURNTRANSFER,true);
		    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
		    $result1 = curl_exec($ch1);
		    curl_close ($ch1);
		    $someArray1 = json_decode($result1, true);
		    if(isset($someArray1['data']['accessToken'])) {
		    	$accessToken = $someArray1['data']['accessToken'];
		        $arrayHeader = array(); 
		        $requestUIdCreate = GUID() ;
		        $arrayHeader[] = "Content-Type: application/json";
		        $arrayHeader[] = "accept-language: EN";
		        $arrayHeader[] = "authorization: Bearer ".$accessToken;
		        $arrayHeader[] = "requestUId: ".$requestUIdCreate;
		        $arrayHeader[] = "resourceOwnerId: ".$api_key;
		        $ref1 = strtoupper($ref1);
				$ref2 = strtoupper($ref2);
		        $post_qrcode = [
		                'qrType'            => 'PP', 
		                'ppType'            => 'BILLERID', 
		                "ppId"              => $billerId,
		                'ref1'              => 'REF1'.$ref1,
		                'ref2'              => 'REF2'.$ref2,
		                'ref3'              => 'CDN', 
		                'amount'            => $amount,
		        ];
		        $strUrl = $url."v1/payment/qrcode/create";
		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL,$strUrl);
		        curl_setopt($ch, CURLOPT_HEADER, false);
		        curl_setopt($ch, CURLOPT_POST, true);
		        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
		        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_qrcode));
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		        $result = curl_exec($ch);
		        curl_close ($ch);
		        $data['result'] = json_decode($result, true);
		    }

 	    	$this->view('payment',$data); 
	    }
	}
?>