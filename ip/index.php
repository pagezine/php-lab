<? include("config.php") 
<html>
<head>
<title><? echo "$name"; ?> - <? echo "$slogan"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="IP Chicken - what is my IP? Displays your current IP address.">
<meta name="keywords" content="ip, what is my ip, whatismyip, find ip, find your ip address, ipaddress, ipconfig, address, remote, remote access, whois, vpn, admin, dns, tcp, portscan, telnet, ping, network, router, openssh, linux, ipv6">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
<!--
var url = "<? echo "$scripturl"; ?>";
var title = "<? echo "$name"; ?>";

function makeLink(){
if(document.all)
window.external.AddFavorite(url,title)
}

// -->
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#3300CC" vlink="#0000CC">
<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="logo.gif" width="577" height="126" usemap="#Map" border="0"></td>

  </tr>
</table>
<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/26.gif" width="26" height="10"></td>
    <td><img src="images/7.gif" width="19" height="360"></td>
    <td valign="top" bordercolor="#CCCCCC"> 
      <p><img src="images/main_08.gif" width="511" height="17"><br>
        <img src="images/1main_10.gif" width="511" height="23"></p>
      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="5" color="#0000FF"><b> <?php

$ip=$_SERVER['REMOTE_ADDR'];
echo "$ip"; 
?>
      <br>

        <A HREF="javascript:makeLink()"><font size="2">Add to Favorites</font></A> 
        </b></font></p>
      <? include("ads.php") ?>
      <p align="left"><img src="images/main_12.gif" width="511" height="24"></p>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr> 
          <td width="6%"><img src="images/green.gif" width="25" height="25"></td>
          <td width="94%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Name 
            Address: 
            <?php

$ip=$_SERVER['REMOTE_ADDR'];
$ip2=$_SERVER['HTTP_REMOTE_HOST'];
if ($ip2=="")
 echo "$ip"; 
else
  echo "$ip1";  
?>         </font></td>
        </tr>
        <tr> 
          <td width="6%"><img src="images/green.gif" width="25" height="25"></td>
          <td width="94%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Remote 
            Port:      <?php

$port=$_SERVER['REMOTE_PORT'];
echo "$port"; 
?>   </font></td>
        </tr>
        <tr> 
          <td><img src="images/green.gif" width="25" height="25"></td>

          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browser: 
         <?   $browser=$_SERVER['HTTP_USER_AGENT'];
echo "$browser"; 
?> </font></td>
        </tr>
        <tr> 
          <td width="6%">&nbsp;</td>
          <td width="94%">&nbsp;</td>
        </tr>
      </table>
      <div align="center"></div>
    </td>

    <td><img src="images/9.gif" width="21" height="360"></td>
  </tr>
</table>
<map name="Map"> 
  <area shape="rect" coords="373,71,418,94" href="help.php">
 <area shape="rect" coords="136,72,223,94" href="index.php">
</map>
<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/26.gif" width="26" height="10"><img src="images/main_17.gif" width="551" height="17"></td>
  </tr>

</table>
<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td><img src="images/26.gif" width="26" height="10"></td>
    <td> <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"></font> 
        <img src="images/pixel.gif" width="551" height="6"><br>
<p><font face="Verdana" size="1"><b>Copyright © 2011 <? echo "$name"; ?>
. Todos os Direitos Reservados.</b></font></p>
<? include("footer.php") ?>
       