<?php $this->load->view('admin/components/page_head') ?>
    <body>
        <div class="navbar navbar-static-top navbar-inverse">
            <div class="navbar-inner">
                <a class="brand" href="<?php echo site_url('admin/dashboard') ?>"><?php echo $meta_title ?></a>
                <ul class="nav">
                    <li class="active"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li><?php echo anchor('admin/pages', 'pages') ?></li>
                    <li><?php echo anchor('admin/user', 'users') ?></li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <!-- Main Column -->
                <div class="span9">
                    <?php $this->load->view($subview) ?>
                </div>
                <!-- Sidebar -->
                <div class="span3">
                    <section>
                        <?php echo mailto('diolen3005@gmail.com', '<i class="icon-user"></i> diolen3005@gmail.com') ?><br>
                        <?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout') ?>
                    </section>
                </div>                
            </div>
        </div>

<?php $this->load->view('admin/components/page_tail') ?>