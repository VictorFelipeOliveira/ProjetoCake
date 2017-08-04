<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo Configure::read('Theme.title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <?php echo $this->Html->css('AdminLTE.skins/skin-'. Configure::read('Theme.skin') .'.min'); ?>

    <?= $this->Html->css('/../bootstrap/css/bootstrap') ?>
    <?= $this->Html->css('AdminLTE.min') ?>
    <?= $this->Html->css('skins/skin-black.min') ?>
    <?= $this->Html->css('skins/skin-black-light.min') ?>
    <?= $this->Html->css('skins/skin-blue-light.min') ?>
    <?= $this->Html->css('skins/skin-blue') ?>
    <?= $this->Html->css('skins/skin-blue.min') ?>
    <?= $this->Html->css('skins/skin-green-light.min') ?>
    <?= $this->Html->css('skins/skin-green.min') ?>
    <?= $this->Html->css('skins/skin-purple-light.min') ?>
    <?= $this->Html->css('skins/skin-purple.min') ?>
    <?= $this->Html->css('skins/skin-red.min') ?>
    <?= $this->Html->css('skins/skin-yellow-light.min') ?>
    <?= $this->Html->css('skins/skin-yellow.min') ?>
    <?= $this->Html->css('AdminLTE.skins/skin-'. Configure::read('Theme.skin') .'.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-<?php echo Configure::read('Theme.skin'); ?> sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo $this->Url->build('/'); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><?php echo Configure::read('Theme.logo.mini'); ?></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><?php echo Configure::read('Theme.logo.large'); ?></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <?php echo $this->element('nav-top') ?>
        </header>

        <!-- Left side column. contains the sidebar -->
        <?php echo $this->element('aside-main-sidebar'); ?>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>

        </div>
        <!-- /.content-wrapper -->

        <?php echo $this->element('footer'); ?>

        <!-- Control Sidebar -->
        <?php echo $this->element('aside-control-sidebar'); ?>

        <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<?= $this->Html->script('../bootstrap/js/bootstrap') ?>;
<?= $this->Html->script('../plugins/jQuery/jQuery-2.1.4.min') ?>;
<?= $this->Html->script('../plugins/slimScroll/jquery.slimscroll.min') ?>;
<?= $this->Html->script('../plugins/fastclick/fastclick') ?>;
<?= $this->Html->script('AdminLTE.min') ?>;

<!-- AdminLTE for demo purposes -->
<?php echo $this->fetch('script'); ?>
<?php echo $this->fetch('scriptBottom'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $(".navbar .menu").slimscroll({
            height: "200px",
            alwaysVisible: false,
            size: "3px"
        }).css("width", "100%");

        var a = $('a[href="<?php echo $this->request->webroot . $this->request->url ?>"]');
        if (!a.parent().hasClass('treeview') && !a.parent().parent().hasClass('pagination')) {
            a.parent().addClass('active').parents('.treeview').addClass('active');
        }
    });
</script>
</body>
</html>
