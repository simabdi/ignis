<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url(); ?>/public/themes/AdminLTE-2.4.2/dist/img/user2-160x160.jpg"
                 class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo $this->ion_auth->user()->row()->first_name . ' ' .$this->ion_auth->user()->row()->last_name ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php echo $this->menulib->sidebar($slug); ?>
    </ul>
</section>
<!-- /.sidebar -->