<?php
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$fax = $_POST["fax"];
	$email = $_POST["email"];
	$msg = $_POST["message"];
	
	$_SESSION["name"] = $name;
	$_SESSION["phone"] = $phone;
	$_SESSION["fax"] = $fax;
	$_SESSION["email"] = $email;
	$_SESSION["msg"] = $msg;
	
	$qtrEmail = "qtr@snet.net";
	$emailSubj = "Comment/Question From $name";
	$emailMsg = "Name: $name\nPhone: $phone\nFax: $fax\nE-mail: $email\n\n $msg\n";
	
	//Send the email to QTR
	mail($qtrEmail, $emailSubj, $emailMsg);
?>
<p>The following message has been sent to our office.  Someone will contact you soon with a reply.<br /></p>
<table width="65%">
	<tr>
    	<td align="right"><b>Name: </b></td>
    	<td><?php echo $name ?></td>
    </tr>
	<tr>
    	<td align="right"><b>Phone: </b></td>
    	<td><?php echo $phone ?></td>
    </tr>
	<tr>
    	<td align="right"><b>Fax: </b></td>
    	<td><?php echo $fax ?></td>
    </tr>
	<tr>
    	<td align="right"><b>E-mail: </b></td>
    	<td><?php echo $email ?></td>
    </tr>
	<tr>
    	<td align="right"><b>Message: </b></td>
    	<td><?php echo $msg ?></td>
    </tr>
</table>
<p><b>Quality Tool Repair</b></p>