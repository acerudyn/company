<?php
extract($_POST);
   include "../controller/koneksi.php";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin | Dashboard</title>
        <link rel="shortcut icon" href="../img/favicon.ico">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

        <!--jquery-->
        <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <link rel="stylesheet" href="../dist/css/summernote.css">
        <script src="../dist/js/summernote.js"></script>
    </head>

    <body class="hold-transition skin-red sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>SK</b>CS</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Administrator</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include'menu.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="content">
                    <?php
                $hash = $_GET['page'];
                if(isset($_GET['page']))
                {
                   switch($_GET['page'])
                    {
                        case password_verify('add_admin', $hash): include'form_admin.php'; break;
                        case password_verify('list_admin', $hash): include'list_admin.php'; $order=1; break;
                        case password_verify('edit_admin', $hash): include '../controller/edit-admin.php'; break;
                        case password_verify('delete_admin', $hash): include '../controller/admin-delete.php'; break;
                        case password_verify('add_product', $hash): include'form_product.php'; break;
                        case password_verify('edit_product', $hash): include'../controller/edit-product.php'; break;
                        case password_verify('delete_product', $hash): include '../controller/product-delete.php'; break;
                        case password_verify('list_product', $hash): include'list_product.php'; $order=3; break;
                        case password_verify('list_contact', $hash): include'list_contact.php'; $order=3; break;
                        case password_verify('replay_contact', $hash): include'form_replay.php'; break;
                        case password_verify('delete_contact', $hash): include'../controller/contact-delete.php'; break;
                        case password_verify('add_berita', $hash): include'form_b.php'; break;
                        case password_verify('edit_berita', $hash): include'../controller/edit-berita.php'; break;
                        case password_verify('delete_berita', $hash): include'../controller/berita-delete.php'; break;
                        case password_verify('list_berita', $hash): include'list_berita.php'; $order=3; break;
                    }
                }
            ?>
                </section>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.0
                </div>
                <strong>Copyright &copy; 2016<a href="http://skcs.co.id" style="color : red;"> Surya Kencana Cipta Semesta</a>.</strong> All rights reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- Bootstrap 3.3.5 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.konten').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'hr']],
                        ['view', ['fullscreen', 'codeview']]
                    ],

                    onPaste: function(e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        setTimeout(function() {
                            document.execCommand('insertText', false, bufferText);
                        }, 10);
                    }
                });
            });

        </script>
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "order": [
                        [<?php echo $order; ?>, "desc"]
                    ]
                });
            });

        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);

        </script>
        <!-- Sparkline -->
        <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })

        </script>
    </body>

    </html>
