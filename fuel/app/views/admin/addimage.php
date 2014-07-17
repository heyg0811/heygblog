<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </a>
     <a class="brand" href="#">Admin Panel</a>
     <div class="nav-collapse collapse">
      <ul class="nav pull-right">
        <li class="dropdown">
          <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> HeyG<i class="caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a tabindex="-1" href="#">Profile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a tabindex="-1" href="login.html">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav">
        <li class="active">
          <a href="#">Dashboard</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3" id="sidebar">
      <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li>
          <a href="index"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li>
          <a href="addarticle"><i class="icon-chevron-right"></i> Add article</a>
        </li>
        <li class="active">
          <a href="addimage"><i class="icon-chevron-right"></i> Add image</a>
        </li>
        <li>
          <a href="#"><span class="badge badge-success pull-right"><?php echo $count["comment"]?></span> コメント</a>
        </li>
        <li>
          <a href="#"><span class="badge badge-success pull-right"><?php echo $count["access"];?></span> アクセス</a>
        </li>
        <li>
          <a href="#"><span class="badge badge-info pull-right"><?php echo $count["ts"];?></span> リクエスト</a>
        </li>
        <li>
          <a href="#"><span class="badge badge-info pull-right"><?php echo $count["about"];?></span> メッセージ</a>
        </li>
      </ul>
    </div>
    <div class="span9" id="content">
      <div class="row-fluid">
        <!-- block -->
        <div class="block">
          <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Image Add</div>
          </div>
          <p class="text-error"><?php echo $errmsg;?></p>
          <form enctype="multipart/form-data" class="form" style="margin-top:10px;" action="imgupload" method="post">
            <div style="margin-left:15px;">
              <fieldset>
                <label>Name</label>
                <input type="text" name="name" placeholder="File name">
                <label>Type</label>
                <select name="type">
                  <option value="blog">blog</option>
                  <option value="article">article</option>
                </select>
                <label>File</label>
                <input type="file" name="upload_file">
              </fieldset>
            </div>
            <button style="margin-left:15px; margin-top:10px" type="submit" class="btn">送信</button>
            <input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" />
          </form>
        </div>
        <!-- /block -->
      </div>
      <div class="row-fluid">
        <!-- block -->
        <div class="block">
          <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Image Gallery</div>
            <div class="pull-right"><span class="badge badge-info"><?php echo $count["image"];?></span>
            </div>
          </div>
          <div class="block-content collapse in">
            <?php for($i=0;$i<count($image)/4;$i++):?>
            <div class="row-fluid padd-bottom">
              <?php for ($j=0; $j<(count($image)-($i*4))&&$j<4; $j++):?>
              <div class="span3">
                <a href="#" class="thumbnail">
                  <?php echo Asset::img($image[$i*$j]["type"]."/".$image[$i*$j]["name"],array('class'=>'img-responsive'));?>
                </a>
              </div>
            <?php endfor ?>
          </div>
        <?php endfor;?>
      </div>
    </div>
    <!-- /block -->
  </div>
</div>
</div>
</div>
