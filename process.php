<?php 

if(isset($_POST["btn-send"]))
{
    $username = $_POST['username'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($username) ||  empty($from) || empty($subject) || empty($message))
    {
        header('location:about.php?error');
    }
    else{
        $host ="localhost";
        $user = "id14461143_kryptisch";
        $password = "Rohith-123456";
        $db ="id14461143_transfert";
        $conn= new mysqli($host,$user,$password,$db);

        if($conn)
        {
            $sql="INSERT INTO contactdata VALUES($username,$email,$subject,$message);";
            $result=mysql_query($sql);
            if($result){
                header("location:about.php?sucess");
            }
            else{
                header("location:about.php?error");
            }
        }
        }
}
else{
    header("location:about.php");
}
?>