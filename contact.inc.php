<p>Have a question regarding a specific tool or part that we service?  Fill in the information below and 
	we will get back to you as quickly as possible.</p>
<form id="contact" name="contact" method="post" onSubmit="checkVals()" action="index.php?pg=send">
	<table width="80%">
    	<tr>
        	<td align="right">Name*: </td>
            <td><input type="text" class="contact" name="name" id="name" size="30" maxlength="50" required /></td>
        </tr>
        <tr>
            <td align="right">Phone*: </td>
            <td><input type="text" class="contact" name="phone" id="phnoe" size="30" maxlength="20" placeholder="###-###-####" required /></td>
        </tr>
        <tr>
            <td align="right">Fax: </td>
            <td><input type="text" class="contact" name="fax" id="fax" size="30" maxlength="20" placeholder="###-###-####" /></td>
        </tr>
        <tr>
        	<td align="right">Email: </td>
            <td><input type="text" class="contact" name="email" id="email" size="30" placeholder="johndoe@toolcorp.com" /></td>
        </tr>
        <tr>
        	<td colspan="2"><img src="images/trnsp.gif" width="1" height="15" /></td>
        </tr>
        <tr>
        	<td align="right" valign="top">Message*: </td>
            <td><textarea class="contact" name="message" id="message" rows="6" cols="30" required></textarea></td>
        </tr>
        <tr>
        	<td colspan="2"><img src="images/trnsp.gif" width="1" height="10" /></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" name="submit" value="Send" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear Form" /></td>
        </tr>
    </table>
</form>