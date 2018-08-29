
    <?php 
    session_start();
    $conn=new mysqli("localhost","root","","onlinefood");
    $name = $_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $choice=$_POST['choice'];
    $sql2 ="select * from customer where name ='".$_SESSION['login_user']."'";
    $result1=$conn->query($sql2);
    $row = mysqli_fetch_array($result1);
    $id = $row['id']; 
    $username = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
  
    if(isset($_POST['btn'])){

        $sql="INSERT INTO pays(pay_id,id,user_address,user_phone,payment_system) VALUES('',$id','$address','$phone','$choice')";
        $query=$conn->query($sql);
        echo "payment complete";
            header('Refresh: 2; URL = index.php');
        }

    $conn->close();
?>
