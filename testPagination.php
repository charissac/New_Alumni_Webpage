<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
         include_once 'DBConnect.php';
         
         $rec_limit = 10;
         
         
        
         
         /* Get total number of records */
         $sql = "SELECT * FROM user ";
         $retval = mysqli_query( $conn, $sql );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT userID, password, email ". 
            "FROM user ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query( $conn, $sql );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            echo "userid :{$row['userID']}  <br> ".
               "password : {$row['password']} <br> ".
               "email : {$row['email']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>
</html>