<!-- <?php
  session_start();

 //the sql command :3 CHANCE THE DELETE FROM cart TO DELETE FROM products TO DO THE PRODUCT DATABASE. DONT DO IT NOW, OR YOU'LL GET ROYALLY FUCKED
 $sql = "DELETE FROM cart";
 include_once 'connection.php';

 //the stuff to acc delete it. Also got the error thing to keep it safe (not sure, wasn't specified in guide i watched :3)
 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conn->exec($sql);
   echo "Record deleted successfully";
 } catch (PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
?> -->