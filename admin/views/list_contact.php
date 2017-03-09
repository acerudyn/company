<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List Contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Isi Pesan</th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      $cost = 10;
                      $edit = password_hash('replay_contact', PASSWORD_BCRYPT, [10 => $cost]);
                      $delete = password_hash('delete_contact', PASSWORD_BCRYPT, [10 => $cost]);
                      include "../controller/koneksi.php";
                      $sql = "select * from contact order by contact_id";
                      $result  = mysql_query($sql);
                      while( $row = mysql_fetch_array($result) )
                           {
                                echo "
                                <tr>
                                    <td width='100'>{$row['tanggal']}</td>
                                    <td width='100'>{$row['nama_pengirim']}</td>
                                    <td width='100'>{$row['email']}</td>
                                    <td width='300'>Subject : <b>{$row['subject']}</b>
                                    <br>{$row['isi_pesan']}</td>
                                    <td width='100' style='text-align:center'>
                        <a href='home.php?page=$edit&id={$row['contact_id']}'>
                        <span data-placement='top' data-toggle='tooltip' title='Replay'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' >
                        <span class='glyphicon glyphicon-share-alt'></span></button><span></a>

                        <a href='home.php?page=$delete&id={$row['contact_id']}'>
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' >
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
