

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            <small>Students</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Students</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-error alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php endif; ?>


                <a href="<?php echo base_url('/') ?>" class="btn btn-primary">Add Student</a>
                <br /> <br />



                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Students</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="userTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>School</th>
                                <th>Grade</th>
                                <th>Phone</th>


                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($student_data as $k => $v): ?>
                            <tr>
                                <td><?php echo $v['student_info']['name']; ?></td>
                                <td><?php echo $v['student_info']['email']; ?></td>
                                <td><?php echo $v['student_info']['school']; ?></td>
                                <td><?php echo $v['student_info']['grade']; ?></td>
                                <td><?php echo $v['student_info']['number']; ?></td>



                                <td>

                                    <a href="<?php echo base_url('students/edit/'.$v['student_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>


                                    <a href="<?php echo base_url('students/delete/'.$v['student_info']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>

                                </td>

                            </tr>
                            <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#userTable').DataTable();

        $("#mainUserNav").addClass('active');
        $("#manageUserNav").addClass('active');
    });
</script>
