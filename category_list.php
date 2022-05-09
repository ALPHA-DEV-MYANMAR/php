<?php include "template/header.php"; ?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.css">

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-list text-primary"></i> Category List
                    </h4>
                    <div class="">
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2"></i>
                        </a>
                        <a href="<?php echo $url; ?>/category_create.php" class="btn btn-outline-primary">
                            <i class="feather-plus-circle"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <table id="list" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = 'SELECT * FROM to_do';
                        $query = mysqli_query($conn,$sql);
                        $total_rows = mysqli_num_rows($query); // Total Rows

                        while($row = mysqli_fetch_assoc($query)){
                            $time = date("g:i" , strtotime($row['created_at'] ));
                        ?>

                            <tr>
                                <td> <?php echo $row['id'] ?> </td>
                                <td> <?php echo $row['message'] ?> </td>
                                <td>
                                    <a href=""></a>
                                </td>
                                <td> <?php echo $time ?> </td>
                            </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script>
    $("#list").dataTable();
</script>
