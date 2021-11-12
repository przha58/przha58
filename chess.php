<!DOCTYPE html>
     <html> 
     <head> 
  <title>CHESS</title>
  <style>
        table{
            width:470px;
            border:3px solid pink;
            
        }
  </style>
  </head>
  <body> 
  
   <table>
      <?php 
      echo "<tr>";
       $lett=array("","a","b","c","d","e","f","g","h");

      for($i=8;$i>=1;$i--)
	  { 
               
          for($j=1;$j<=8;$j++)
		  {
            
          $z=$i+$j;
          if($z%2==0)
		  {
                  
          echo "<td height=50px width=50px bgcolor=gray> $lett[$j].$i</td>";
          }
		  else
		  {
          echo "<td height=50px width=50px bgcolor=white> $lett[$j].$i</td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>