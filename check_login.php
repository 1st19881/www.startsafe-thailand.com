<?php session_start(); ?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php 
if(isset($_POST['username'])){
          include("config/config.php");
          $username = $_POST['username'];
          $password  = $_POST['password'];

          $sql="SELECT * FROM  admin
          WHERE  username='".$username."' 
          AND  password='".$password."' ";
          $result = mysql_query($sql);

          echo '
          <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
          ';		
          
          if(mysql_num_rows($result)==1){
              $row = mysql_fetch_array($result);

              $_SESSION["admin_id"] = $row["admin_id"];
              $_SESSION["admin_name"] = $row["admin_name"];
              $_SESSION['level'] = $row["level"];
              if($_SESSION["level"]=="1"){ 

                echo '
                <script>
                    setTimeout(function() {
                    swal({
                            title: "Login success",
                            text: "LOGIN SUCCESS",
                            type: "success"
                        }, function() {
                        window.location = "backend/index.php";
                    });
                    }, 100);
                </script>
                ';
                  }
              }else{
                echo '
                <script>
                    setTimeout(function() {
                    swal({
                            title: "Login ผิดพลาด !!",
                            text: "username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                        window.location = "login.php";
                    });
                    }, 100);
                </script>
                ';

              }

}
?>