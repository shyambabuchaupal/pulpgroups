<?php include'header.php' ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- <h5 class="mb-2 text-gray-800">Blog Posts</h5> -->
    <!-- DataTales Example -->
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between">
            <div>
                
                    <h6 class="font-weight-bold text-primary mt-2">Our Users</h6>
            
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Comment</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `userinfo`";
                        $query=mysqli_query($config,$sql);
                        $rows=mysqli_num_rows($query);
                        $conunt=0;
                        if($rows){
                            while($row=mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <td><?=++$conunt?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['phone']?></td>
                                    <td><?=$row['comment']?></td>
                                </tr>
                                <?php
                            }
                            
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>

<?php include 'footer.php'; ?>