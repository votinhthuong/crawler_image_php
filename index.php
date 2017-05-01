<?php
	include('simple_html_dom.php');
	if(isset($_POST['submit'])){
		$url=file_get_html($_POST['url']);
	$image = $url->find("img");
	foreach($image as $img)
	{
		$s=$img->src;
		$img_name = 'hinh/'.basename($s);
		file_put_contents($img_name, file_get_contents($s));
	}
	}
	
	
?>

<form id="form1" name="form1" method="post" action="">
  <table width="700" border="1" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input style="width:100%;" type="text" name="url" id="textfield" />
      </td>
      
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="submit" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>