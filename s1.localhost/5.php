<!DOCTYPE HTML>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Документ із сайту s1</title>
   <body>
      <?php
         $db = mysqli_connect( 'localhost', 'root', 'Y7dteK5WKC98BPh3' );
         mysqli_select_db( $db, 'mydb' );
         
         $sql = "SELECT * FROM employee";
         $result = mysqli_query( $db, $sql );

         echo "<table border=1>\n";
           echo "<tr><td>Name</td><td>Position</td></tr>\n";

           while ($myrow = mysqli_fetch_row($result))
           {
            printf("<tr><td>%s %s</td><td>%s</td></tr>\n", $myrow[1], 
            $myrow[2], $myrow[3]);
           }

           echo "</table>\n";
         mysqli_close($db);
      ?>
   </body>
</html>