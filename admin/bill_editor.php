
<?php
//  minhtri95@yahoo.com

require_once("includes/application_top.php");
	$start = $_POST['start'];
	$pagesize = $_POST['pagesize'];
	$YEAR = $_POST['year'];
	$MONTH = $_POST['month'];
	$soundfile = 'media/sound_1.mp3';
	
	function load_year(){
		$value;
		$list_years = tep_db_query('select * from bill group by YEAR(DATE)');
		while($row = tep_db_fetch_array($list_years)){
			$value .= $row['DATE'] . '__';
		}
		echo $value;
	};

	function load_bills($YEAR, $MONTH)
	{
		
		$new_bill = 0;
		if($MONTH == 'All')
			$bill = tep_db_query("select * from bill where YEAR(DATE) = '" . $YEAR . "' ORDER BY STATUS, DATE DESC");
		else
			$bill = tep_db_query("select * from bill where YEAR(DATE) = '" . $YEAR . "' and MONTH(DATE) = '".$MONTH."' ORDER BY STATUS, DATE DESC");
		
		
		mysql_query("SET character_set_results=utf8");
		if($bill != null)
		{
			while($row = tep_db_fetch_array($bill))
			{
				if( $row['STATUS'] == '0')
				{
					$status = 'new';
					$new_bill = 1;
					echo '<tr class="new_bill" id="print_record_'.$row['ID'].'">';
				}
				if( $row['STATUS'] == '1')
				{
					$status = 'confirm';
					echo '<tr id="print_record_'.$row['ID'].'">';
				}
				if( $row['STATUS'] == '2')
				{
					$status = 'finish';
					echo '<tr id="print_record_'.$row['ID'].'">';
				}
				if( $row['STATUS'] == '3')
				{
					$status = 'delete';
					echo '<tr class="delete_bill" id="print_record_'.$row['ID'].'">';
				}
				echo '<td class="customer">' . $row['CUSTOMER'] . '<br>' . $row['PHONE'] . '<br>' . $row['ADDRESS'] . '</td>';
				echo '<td class="foods">' . $row['FOODS'] . '</td>';
				echo '<td class="description">' . $row['DESCRIPTION'] . '</td>';
				echo '<td class="price">' . $row['PRICE'] . '</td>';
				echo '<td class="date">' . $row['DATE'] . '</td>';
				echo '<td class="status">' . $status . '</td>';
				echo '<td>';
				echo '<a class="print_bill" href="javascript:void(0)" onclick="print_bill('.$row['ID'].')"></a><br>';
				echo '<a href="javascript:void(0)" onclick="delete_bill(' . $row['ID'] . ')">Delete</a><br>';
				echo '<a href="javascript:void(0)" onclick="update_bill('.$row['ID'].','."'".$row['CUSTOMER']."'".','."'".$row['FOODS']."'".','."'".$row['DESCRIPTION']."'".','."'".$row['PRICE']."'".','."'".$row['DATE']."',"."'".$status."'".','."'".$row['PHONE']."'".','."'".$row['ADDRESS']."'".')">Update</a></td>';
				echo '</tr>';
			}
		}
		if( $new_bill == 1)
			echo '<tr style="display=none;"><td colspan="6"><audio src="media/sound_2.mp3" autoplay="true" loop="true"></audio></td></tr>';
			//echo '<embed src ="$soundfile" hidden="true" autostart="true"></embed>';
			
		
	}

	if($_POST['action'] == 'load_year')
	{		
		load_year();
	}
	
	if($_POST['action'] == 'load_bill')
	{		
		load_bills($YEAR, $MONTH);
	}
	
		
	if($_POST['action']=='delete_bill')
	{
		$bill_id = $_POST['bill_id'];
		//tep_db_query("delete from bill where ID = " . $bill_id . ";");
		tep_db_query("update bill set STATUS ='3' where ID = '" . $bill_id . "' ;");
		echo 'Updated successfull!';
		load_bills($YEAR, $MONTH);
	}
	
	
	
	/*if($_POST['action'] == 'update_bill')
	{
		$ID = $_POST['bill_id'];
		$CUSTOMER = $_POST['bill_customer'];
		$PRICE = $_POST['bill_price'];
		$DATE = $_POST['bill_date'];
		$PHONE = $_POST['bill_phone'];
		$ADDRESS = $_POST['bill_address'];
		$STATUS = $_POST['bill_status'];
		if($STATUS == 'new')
			$STATUS = 0;
		else
			$STATUS = 1;
		tep_db_query("update bill set CUSTOMER ='" .$CUSTOMER. "', PRICE = '" . $PRICE . "', PHONE ='".$PHONE."', ADDRESS = '".$ADDRESS."', STATUS ='".$STATUS."', DATE = '".$DATE."' where ID = '" . $ID . "' ;");
		echo 'Updated successfull!';
	}*/
	
	
	if($_POST['action'] == 'update_bill')
	{
		$ID = $_POST['bill_id'];
		$DESCRIPTION = $_POST['bill_description'];
		$STATUS = $_POST['bill_status'];
		if( $STATUS == 'new')
			$STATUS = '0';
		if( $STATUS == 'confirm')
			$STATUS = '1';
		if( $STATUS == 'finish')
			$STATUS = '2';
		tep_db_query("update bill set STATUS ='".$STATUS."', DESCRIPTION = '".$DESCRIPTION."' where ID = '" . $ID . "' ;");
		echo 'Updated successfull!';
	}
	
	if($_POST['action'] == 'print_bill')
	{
		$ID = $_POST['bill_id'];
		$STATUS = $_POST['bill_status'];
		if( $STATUS == 'new')
			$STATUS = '0';
		if( $STATUS == 'confirm')
			$STATUS = '1';
		if( $STATUS == 'finish')
			$STATUS = '2';
		tep_db_query("update bill set STATUS ='".$STATUS."' where ID = '" . $ID . "' ;");
		echo 'Updated successfull!';
	}
	
	
?>

