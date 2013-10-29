<?php
/* -----------------------------------------------------------------------------------------
   IdiotMinds - http://idiotminds.com
   -----------------------------------------------------------------------------------------
*/
session_start();
//Facebook App Id and Secret
$appID='239365946221066';
$appSecret='6e4673ff3614a5a812bc1daf04c5501c';

//URL to your website root
if($_SERVER['HTTP_HOST']=='localhost'){
$base_url='http://krishna-shanigaram.in/krishna/facebook/';
}else{
$base_url='http://krishna-shanigaram.in/krishna/facebook/';	
}
?>