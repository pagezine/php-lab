<? include("config.php")
 ?>
<html>
<head>
<title><? echo "$name"; ?> - <? echo "$slogan"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="IP SHERLOOK.">
<meta name="keywords" content="ip, ipaddress, address, dns, telnet, ping, network, router, openssh, linux, ipv6">
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
    <td><img src="images/7.gif" width="19" height="250"></td>
    <td valign="top"> 
      <p><img src="images/pixel.gif" width="511" height="17"><br>
        <img src="images/help.gif" width="511" height="23"></p>
      <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apenas um programa para saber seu IP. </font></p>

      <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Webmaster: 
        <a href="mailto:<? echo "$email1"; ?>"><? echo "$email1"; ?></a><br>
        Helpdesk: <a href="mailto:<? echo "$email2"; ?>"><? echo "$email2"; ?></a><br>
        Bitcoin: <a href="mailto:<? echo "$email3"; ?>"><? echo "$email3"; ?></a></font></p>
      </td>
    <td><img src="images/9.gif" width="21" height="250"></td>
  </tr>

</table>
<map name="Map"> 
  <area shape="rect" coords="373,71,418,94" href="help.php">
  <area shape="rect" coords="223,71,370,94">
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
    <td>
      <div align="center"><img src="images/pixel.gif" width="551" height="6"><br>
<p><font face="Verdana" size="1"><b>Copyright © 2011 <? echo "$name"; ?>
. Todos os Direitos Reservados.</b></font></p>
<? include("footer.php") ?>
</table>
</body>
</html>
