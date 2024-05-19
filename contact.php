<?php include 'header.php' ?>

<div class="col-12">
    <div class="banner_img">
        <img src="images/contact us banner.png" alt="img" class='w-100 d-none d-md-block'>
        <img src="images/contactMob.png" alt="img" class='w-100 d-block d-md-none'>
    </div>
</div>
<div class="container">
    <div class="col-12 py-4">
        <h2 class='fs-5 fw-semibold text-start'>We Are <span style='color:green;'>Listening!</span></h2>
        <p class='fs-6 fw-light'>Please contact us if you have any queries.</p>

        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 mb-3">
            <div class="contact_form p-2 rounded" style='box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;'>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none" name='name' required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none" name='email' required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone No.</label>
                        <input type="number" class="form-control shadow-none" name='phone' required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                        <textarea class="form-control shadow-none" name='comment' rows="3" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-25 shadow-none" name="submit">Submit</button>
                    </div>


                </form>
            </div>
        </div>
        <div class="col-md-5">
            <div class="get_touch p-2 rounded" style='box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;'>
                <h2 class='fs-5 fw-semibold'>Get in touch with <span style='color:green;'>us</span></h2>
                <p class='fs-6 fw-light'>You can also reach out to us at</p>

                <div class="addres">
                    <p><i class="bi bi-house fs-4" style='color:green;'></i> </p>
                    <p class='mainAdd'>

                        SECTOR-15, ROHINI CITY, New Delhi, North West Delhi, Delhi, 110085
                    </p>
                </div>
                <div class="addres">
                    <p><i class="bi bi-telephone-fill fs-4" style='color:green;'></i> </p>
                    <p class="mainAdd">
                        Phone no.<br>
                        <a href="tel:7015501973" class="text-black">7015501973</a><br>
                        <!--<a href="tel:08181818181" class='text-black'>08181818181</a>-->
                    </p>
                </div>
                <div class="addres">
                    <p><i class="bi bi-envelope-at-fill fs-4" style='color:green;'></i> </p>
                    <p class="mainAdd">Mail Us 
                        <br>
                       info@pulpgroups.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];
    $sql="INSERT INTO `userinfo`(`name`, `email`, `phone`, `comment`) VALUES
     ('$name','$email','$phone','$comment')";
     $result=mysqli_query($config,$sql);
     if($result=="1"){
        echo "<Script> alert('Thank You for Contact Us !!') </script>";
        $yourURL="index.php";
        echo ("<script>location.href='$yourURL'</script>");
     }else{
        echo "<Script> alert('Registration Faild !!') </script>";
        $yourURL="contact.php";
        echo ("<script>location.href='$yourURL'</script>");
     }
}
?>