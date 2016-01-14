<?php
date_default_timezone_set('Europe/Prague');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="<?php 
$working_hours = range(08,19);
if (in_array(date("G"),$working_hours))
    {
        $ttrn = '61'-date("s");
        $curTime = date("H:i");
    }
    else
    {
        $ttrn = '1800'; 
        $curTime = "Sleep";
    }
echo($ttrn); 
?>; URL=/">
<title>Broken Kindle Homepage</title>
</head>
<body bgcolor="#000000">

 <table width="100%" height="100%" cellpadding="0" cellspacing="0">
  <tr>
   <td colspan=2 style="text-align:left"><text style="font-size:30px;color:#FFFFFF;font-family:'Courier New'">I see dead pixels</text></td>
  </tr>
  <tr>
   <td width="30%"></td>
   <td width="70%" style="vertical-align:top;text-align:right"><text style="font-size:140px;color:#FFFFFF;font-family:'Courier New'"><?php echo $curTime ?></br></text></td>
  </tr>
  <tr>
   <td colspan=2 style="text-align:right"><text style="font-size:30px;color:#FFFFFF;font-family:'Courier New'"><?php echo date("F j, Y "); ?></text></td>
  </tr>
  <tr>
   <td colspan=2 style="text-align:right"><text style="font-size:14px;color:<?php echo( substr ( md5( $_ENV['HOSTNAME'] ),0,6) ) ; ?>;"> ◉ </text><text style="font-size:14px;color:#FFFFFF;">Proudly served by OpenShift</text></td>
  </tr>
 </table>
</body>
</html>
