<?php include 'header.php' ?>
<!-- Hero_section start  -->
<div class="col-12 mt-80">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner mt-4">
            <div class="carousel-item active mt-90" data-bs-interval="2000">
                <a href="#">
                    <img src="bannerimg/b2.png" class='w-100 d-none d-md-block' alt="img">
                    <img src="bannerimg/mb2.png" class='w-100 d-block d-md-none' alt="img"></a>
            </div>
            <div class="carousel-item mt-90" data-bs-interval="2000">
                <a href="#">
                    <img src="bannerimg/b3.png" class='w-100 d-none d-md-block' alt="img">
                    <img src="bannerimg/mb3.png" class='w-100 d-block d-md-none' alt="img"></a>
            </div>
            <div class="carousel-item mt-90" data-bs-interval="2000">
                <a href="#">
                    <img src="bannerimg/b4.png" class='w-100 d-none d-md-block' alt="img">
                    <img src="bannerimg/20.png" class='w-100 d-block d-md-none' alt="img"></a>
            </div>
            <div class="carousel-item mt-90" data-bs-interval="2000">
                <a href="#">
                    <img src="bannerimg/b5.png" class='w-100 d-none d-md-block' alt="img">
                    <img src="bannerimg/19.png" class='w-100 d-block d-md-none' alt="img"></a>
            </div>
            <div class="carousel-item mt-90" data-bs-interval="2000">
                <a href="#">
                    <img src="bannerimg/b6.png" class='w-100 d-none d-md-block' alt="img">
                    <img src="bannerimg/15.png" class='w-100 d-block d-md-none' alt="img"></a>
            </div>


        </div>

        <button class="carousel-control-prev d-none d-md-block" type="button"
            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <i class="bi bi-arrow-left-circle-fill non-d"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none d-md-block" type="button"
            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <i class="bi bi-arrow-right-circle-fill non-d "></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Hero_section End  -->


<!-- our Product Section  -->
<div class="container">
<div class="col-12 py-4">
    <p class="fs-6 fw-normal text-center">Welcome to Pulp Group, your trusted partner for cutting-edge technology
        solutions. With a focus on LED video walls, digital kiosks, Microsoft licenses, and commercial LCD displays, we
        specialize in providing innovative products and exceptional services to meet the evolving needs of businesses
        across industries.</p>
    <h2 class='text-center fs-4 fw-semibold text-black our_line'>Our Products</h2>
</div>
</div>
<div class="container">
    <!-- <div class="row">
        <?php
        $sql="SELECT * FROM `product`";
        $result=mysqli_query($config,$sql);
        $rows=mysqli_num_rows($result);
        if($rows){
            while($row=mysqli_fetch_assoc($result)){
                ?>
        <div class="col-md-3 mb-3">
            <input type="hidden" value='<?=$row['id']?>'>
            <div class="card zoom" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>

                <img src="images/<?=$row['p_img']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fs-6 fw-normal"><?=$row['p_name']?></h5>

                    <a href="product.php" class='fs-6 fw-light'>Read More -></a>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div> -->
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card zoom " style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="images/p1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fs-6 fw-normal">LED video walls</h5>

                    <a href="led.php" class='fs-6 fw-light'>Read More -></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card zoom" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="images/p2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fs-6 fw-normal">Commercial LCD</h5>

                    <a href="product.php" class='fs-6 fw-light'>Read More -></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card zoom" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="images/p3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fs-6 fw-normal">Microsoft licences</h5>

                    <a href="#" class='fs-6 fw-light'>Read More -></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card zoom" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="images/p4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fs-6 fw-normal">Kiosk</h5>

                    <a href="kiosk.php" class='fs-6 fw-light'>Read More -></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our Product Section end -->

<!-- product img section  -->

<div class="container">
    <div class="row py-4">
        <div class="col-md-6 mb-3">
            <div class="imgsection" data-aos="fade-right">
                <img src="images/1.png" alt="img">
            </div>

        </div>
        <div class="col-md-6 mb-3">
            <div class="imgsection" data-aos="fade-left">
                <img src="images/2.png" alt="img">
            </div>

        </div>

        <div class="col-md-6 mb-3">
            <div class="imgsection" data-aos="fade-right">
                <img src="images/3.png" alt="img">
            </div>

        </div>
        <div class="col-md-6 mb-3">
            <div class="imgsection" data-aos="fade-left">
                <img src="images/4.png" alt="img">
            </div>

        </div>
    </div>

</div>


<!-- any quesition  -->
<div class="container">
    <div class="col-12 py-4 my-5 rounded m-auto"
        style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border: 1px solid green;' data-aos="fade-up">
        <div class="any_que">
            <h2>Have a <span style='color:green;'>Question?</span></h2>
            <p>We are here to help you. <span style='color:green;'>Email Us.</span></p>
            <a type="button" href='contact.php' class="btn btn-success shadow-none">Contact Us</a>
        </div>

    </div>
</div>

<!-- any quesition  -->


<?php include 'footer.php' ?>