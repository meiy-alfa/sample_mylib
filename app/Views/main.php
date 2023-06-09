<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MyLib</title>

	<!-- Bootstrap -->
	<link href="<?= base_url('public/gt')?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url('public/gt')?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url('public/gt')?>/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url('public/gt')?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="<?= base_url('public/gt')?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="<?= base_url('public/gt')?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="<?= base_url('public/gt')?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="<?= base_url('public/gt')?>/vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url('public/gt')?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="<?= base_url('public/gt')?>/build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->    
    <link href="<?=base_url('public/gt/')?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public/gt/')?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public/gt/')?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public/gt/')?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public/gt/')?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?=base_url('home')?>" class="site_title"><i class="fa fa-book"></i> <span>My Library</span></a>
					</div>

					<div class="clearfix">
                    </div>

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?=base_url('home')?>">Home</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?=base_url('staff')?>">Staf</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-book"></i> Books <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Category</a></li>
										<li><a href="#">Publisher</a></li>
										<li><a href="#">Book</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Client <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Borrower</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-edit"></i> Transaction <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Borrow</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<?=session('email')?>
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?=base_url('logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

            <!-- page content -->            
            <?= $this->renderSection('content') ?>
            <!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					MyLib by <a href="#">MeiyAlfa</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

        </div>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url('public/gt')?>/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('public/gt')?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="<?= base_url('public/gt')?>/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="<?= base_url('public/gt')?>/vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="<?= base_url('public/gt')?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="<?= base_url('public/gt')?>/vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="<?= base_url('public/gt')?>/vendors/moment/min/moment.min.js"></script>
	<script src="<?= base_url('public/gt')?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="<?= base_url('public/gt')?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="<?= base_url('public/gt')?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="<?= base_url('public/gt')?>/vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="<?= base_url('public/gt')?>/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="<?= base_url('public/gt')?>/vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="<?= base_url('public/gt')?>/vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="<?= base_url('public/gt')?>/vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="<?= base_url('public/gt')?>/vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="<?= base_url('public/gt')?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="<?= base_url('public/gt')?>/vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?= base_url('public/gt')?>/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url('public/gt/')?>vendors/pdfmake/build/vfs_fonts.js"></script>

</body>
</html>