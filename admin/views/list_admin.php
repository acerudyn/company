<?php
   include "../controller/koneksi.php";
?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Admin</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>
                                    <center>Action</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cost = 10;
                            $edit = password_hash('edit_admin', PASSWORD_BCRYPT, [10 => $cost]);
                            $delete = password_hash('delete_admin', PASSWORD_BCRYPT, [10 => $cost]);
                       $sql = "select * from admin order by user_id";
                       $result  = mysql_query($sql);
                       while( $row = mysql_fetch_array($result) )
                            {
                              $password = substr($row[3],0,17);
                                echo "
                                <tr>
                                    <td>{$row['nama_user']}</td>
                                    <td>{$row['username']}</td>
                                    <td>$password</td>
                                    <td style='text-align:center'>
                        <a href='home.php?page=$edit&id={$row['user_id']}'>
                        <span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' >
                        <span class='glyphicon glyphicon-pencil'></span></button><span></a>

                        <a href='home.php?page=$delete&id={$row['user_id']}'>
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' >
                        <span class='glyphicon glyphicon-trash'></span></button><span></a>
                                    </td>
                                </tr>
                                ";
                            }
                       ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
