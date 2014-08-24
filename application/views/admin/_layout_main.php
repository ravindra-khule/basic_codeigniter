<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <nav class="navbar navbar-static-top navbar-inverse">
      <div class="navbar-inner">
          <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
          <ul class="nav">
              <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
              <li><?php echo anchor('admin/pages', 'pages'); ?></li>
              <li><?php echo anchor('admin/users', 'users'); ?></li>      
          </ul>
      </div>  
    </nav>        
    
    <div class="container">
        <div class="row">
            <!--Main columns-->
            <div class="span9">
                <section>
                    <h2>Page name</h2>
                </section>  
            </div>
            <!--sidebar-->
            <div class="span3">
                <section>
                    <?php echo mailto('joost@codeignite.tv','<i class="icon-user"></i> joost@codeignite.tv');?><br />
                    <?php echo anchor('admin/user/logout','<i class="icon-off"></i> logout');?><br />
                </section>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/components/page_tail'); ?>
