<?php		
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require_once('AngelBroking.php');
	This is production 
	//require_once(AngelConfigrationManage.php);

	//echo(AngelBroking::GenerateSession() . '<br />');
	//AngelBroking::GenerateToken();
	AngelBroking::GetProfile();
	//AngelBroking::LogOut();
	//AngelBroking::GetRMS();
	//echo(AngelBroking::PlaceOrder() );
	//AngelBroking::ModifyOrder();
	//AngelBroking::CancelOrder();
	//AngelBroking::GetOrderBook();
	//echo (AngelBroking::GetTradeBook());
	//echo (AngelBroking::CancelOrder());
	//echo (AngelBroking::ModifyOrder());
	//AngelBroking::GetHoldings();
	//AngelBroking::GetPosition();
	//AngelBroking::ConvertPosition();
	//AngelBroking::CreateRule();
	//AngelBroking::ModifyRule();
	//AngelBroking::CancelRule();
	//AngelBroking::RuleDetails();
	//AngelBroking::RuleList();
?>
