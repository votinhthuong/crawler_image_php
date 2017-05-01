//Author: Vo Tinh Thuong
//Email: votinhthuong9@gmail.com
//Blog: https://minhthuongeh.wordpress.com

<?php
	include('simple_html_dom.php'); //using PHP Simple HTML DOM Parser to get element in your link
	if(isset($_POST['submit'])){	//Because I want to make it visible to get multiple links, so I have designed a simple form to input your link. If you click on button, it will do job inside brackets, else do nothing. To make sure it work perfectly, you should check either $_POST['Url']. 
		$url=file_get_html($_POST['url']); //Here I get parameter at textfield to get URL
	$image = $url->find("img"); // Find all <img> tag in your link 
	foreach($image as $img) //Reach to every single line <img> in the destination link
	{
		$s=$img->src; //Get link of image
		$img_name = 'hinh/'.basename($s); //The important step in here. If you want to get file name of image and parse it to fuction save it to your disk (or host, of course!), you have to get file name of it, not a link.
		file_put_contents($img_name, file_get_contents($s)); //Catch image and store it into place that specified before.
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
