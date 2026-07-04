<?php 
session_start();
ob_start();
include('include/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css" />
<script type="text/javascript">
window.print();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<div id="total">
		

<table width="100%" border="1" cellpadding="0" cellspacing="0" style="background-color:#18518c; color:#FFFFFF ">
  <tr style="color:#FFFFFF">
    <td colspan="4" align="center">
    
  </tr>
  <h2 style="text-align:center;">ORDER REPORT </h2>
  <tr>
    <td width="10%" align="center"><strong>User id</strong></td>
    <td width="10%" align="center"><strong>Product Id</strong></td>
    <td width="10%" align="center"><strong>Quantity</strong></td>
    <td width="20%" align="center"><strong>Order Date</strong></td>
	<td width="30%" align="center"><strong>Payment Method</strong></td>	
	
  </tr>
  <?php
		$query=mysql_query("SELECT `id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod` FROM `orders` WHERE 1");
		$cnt=mysql_num_rows($query);
?>
			<?php
			
			while($row=mysql_fetch_object($query))
			{
			?>
  <tr>
    <td height="30" align="center"><?php echo $row->userId; ?></td>
    <td align="center"><?php echo $row->productId; ?></td>
    <td align="center"><?php echo $row->quantity; ?></td>
    <td align="center"><?php echo $row->orderDate; ?></td>
	<td align="center"><?php echo $row->paymentMethod; ?></td>
	
	
  </tr>

  <?php
			}
						?>
   
   
   
</table>
</div>
</body>
</html>

