<?php 
include'config.php';
include'header.php';
session_start();
if(isset($_SESSION['user_data'])){
    ?>
    <script>
        window.location.href = "http://localhost/PulpGroup/admin/index.php";
    </script>
    <?php

}
?>
<style>
.container1 {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 100px;
    margin-bottom: 4%;
}

.card1 {
    background-color: #ffffff80;
    padding: 30px;
    border-radius: 4%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #3F8BC9;
}

.label-float input {
    width: 100%;
    padding: 5px 5px;
    display: inline-block;
    border: 0;
    border-bottom: 2px solid #3F8BC9;
    background-color: transparent;
    outline: none;
    min-width: 180px;
    font-size: 16px;
    transition: all .3s ease-out;
    border-radius: 0;

}

.label-float {
    position: relative;
    padding-top: 13px;
    margin-top: 5%;
    margin-bottom: 5%;
}

.label-float input:focus {
    border-bottom: 2px solid #41C9F1;

}

.label-float label {
    color: #3F8BC9;
    pointer-event: none;
    position: absolute;
    top: 0;
    left: 0;
    margin-top: 3px;
    transition: all .3s ease-out;
}

.label-float input:focus+label {
    font-size: 13px;
    margin-top: 0;
    color:
}

.button {
    background-color: transparent;
    border-color: transparent;
    color: #3F8BC9;
    padding: 7px;
    font-weight: bold;
    font-size: 12px;
    margin-top: 20px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    transition: all .2s ease-out;
}

.button:hover {
    background-color: #3F8BC9;
    color: #fff;
}

.justify-center {
    display: flex;
    justify-content: center;
}

.justify-center input {
    border: 0;
    padding: 5px 33px;
    background: green;
    color: #fff;
    border-radius: 5px;
}

.hr {
    margin-top: 10%;
    margin-bottom: 10%;
    widht: 60%;
}

p {
    color: #3F8BC9;
    font-size: 14pt;
    text-align: center;

}

a {
    color: #7a3077;
    font-weight: bold;
    text-decoration: none;
}

a:hover {
    color: #3F8BC9;

}
</style>

<div class="container1">
    <div class="card1">

        <form action="" method="POST">
            <h1>Login Admin</h1>
            <div>
                <hr>
            </div>

            <div class="label-float">
                <input type="email" name="email" required>
                <label for='user'>Email</label>
            </div>

            <div class="label-float">
                <input type="password" name="password" required>
                <label for='password'>Password</label>
            </div>

            <div class='justify-center'>
                <input type="submit" name="login_btn" value="Login">
            </div>
            <?php
            if(isset($_SESSION['error'])){
                $error=$_SESSION['error'];
                echo "<p class='mt-2' style='color:red;'>".$error."</p>";
                unset($_SESSION['error']);
            }
            ?>

        </form>

    </div>
</div>



<?php include 'footer.php'; 

if(isset($_POST['login_btn'])){
    $email =mysqli_real_escape_string($config,$_POST['email']);
    $pass =mysqli_real_escape_string($config,sha1($_POST['password']));


    $sql = "SELECT * FROM useradmin WHERE email='{$email}' AND password='{$pass}'";
    $query = mysqli_query($config, $sql);
    $data = mysqli_num_rows($query);
    if($data){
        $result=mysqli_fetch_assoc($query);
        $user_data=array($result['user_id'],$result['username']);
        $_SESSION['user_data']=$user_data;
        ?>
        <script>
            window.location.href = "admin/index.php";
        </script>
        <?php
    }else{
        $_SESSION['error']="Invalid Email / Password";
    ?>
    <script>
        window.location.href = "login.php";
    </script>
    <?php
    }
}
?>