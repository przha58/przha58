<!DOCTYPE html>
     <html> 
     <head> 
  <title>CHESS</title>
  </head>
  <body> 
  
   <table width="470px"border="1px">

      <?php 
       echo "<tr>";
      for($i=8;$i>=1;$i--)
	  { 
          for($j=1;$j<=8;$j++)
		  {
            
          $z=$i+$j;
          if($z%2==0)
		  {
          echo "<td height=50px width=50px> $j.$i</td>";
          }
		  else
		  {
          echo "<td height=50px width=50px bgcolor=white> $j.$i</td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>