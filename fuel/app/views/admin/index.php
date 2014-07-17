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
    <!--/.nav-collapse -->
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3" id="sidebar">
      <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="active">
          <a href="index"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li>
          <a href="addarticle"><i class="icon-chevron-right"></i> Add article</a>
        </li>
        <li>
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

    <!--/span-->
    <div class="span9" id="content">
    <!-- morris stacked chart -->
    <div class="row-fluid">
      <!-- block -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left"><small>デバイス別アクセス</small></div>
          <div class="pull-right" id="sb">
            <span class="badge badge-warning" data-filter="d">日</span>
            <span class="badge badge-warning" data-filter="w">週</span>
            <span class="badge badge-warning" data-filter="m">月</span>
            <span class="badge badge-warning" data-filter="y">年</span>
          </div>
        </div>
        <div class="block-content collapse in">
          <div class="span12">
            <div id="hero-area" style="height: 250px;"></div>
          </div>
        </div>
      </div>
      <!-- /block -->
    </div>

    <div class="row-fluid">
      <div class="span6">
        <!-- block -->
        <div class="block">
          <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">アクセス</div>
            <div class="pull-right"><span class="badge badge-info"><?php echo $count["access"];?></span>

            </div>
          </div>
          <div class="block-content collapse in">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>GIP</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($access as $val):?>
                <tr>
                  <td><?php echo $val["ip"];?></td>
                  <td><?php echo $val["name"];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /block -->
    </div>
    <div class="span6">
      <!-- block -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">コメント</div>
          <div class="pull-right"><span class="badge badge-info"><?php echo $count["comment"];?></span>

          </div>
        </div>
        <div class="block-content collapse in">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>name</th>
                <th>email</th>
                <th>website</th>
                <th>body</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($comment as $val):?>
              <tr>
                <td><?php echo $val["name"];?></td>
                <td><?php echo $val["mail"];?></td>
                <td><?php echo $val["site"];?></td>
                <td><?php echo $val["body"];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /block -->
  </div>
</div>
<div class="row-fluid">
  <div class="span6">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">リクエスト</div>
        <div class="pull-right"><span class="badge badge-info"><?php echo $count["ts"];?></span>

        </div>
      </div>
      <div class="block-content collapse in">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>name</th>
              <th>mail</th>
              <th>body</th>
              <th>date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($ts as $val):?>
            <tr>
              <td><?php echo $val["name"];?></td>
              <td><?php echo $val["mail"];?></td>
              <td><?php echo $val["body"];?></td>
              <td><?php echo $val["created_at"];?></td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /block -->
</div>
<div class="span6">
  <!-- block -->
  <div class="block">
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">メッセージ</div>
      <div class="pull-right"><span class="badge badge-info"><?php echo $count["about"];?></span>

      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>name</th>
            <th>mail</th>
            <th>body</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($about as $val):?>
          <tr>
            <td><?php echo $val["name"];?></td>
            <td><?php echo $val["mail"];?></td>
            <td><?php echo $val["body"];?></td>
            <td><?php echo $val["created_at"];?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>
<!-- /block -->
</div>
</div>
<div class="row-fluid">
  <!-- block -->
  <div class="block">
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Gallery</div>
      <div class="pull-right"><span class="badge badge-info"><?php echo $count["image"];?></span>

      </div>
    </div>
    <div class="block-content collapse in">
      <?php for($i=0;$i<=count($image)/4;$i++):?>
      <div class="row-fluid padd-bottom">
        <?php for ($j=0;($j+4*$i)<count($image)&&$j<4; $j++):?>
        <div class="span3">
          <a href=<?php echo Uri::base()."assets/img/".$image[$j+4*$i]["type"]."/".$image[$j+4*$i]["name"];?> data-lightbox="gallery" data-title=<?php echo $image[$j+4*$i]["name"];?> class="thumbnail">
            <?php echo Asset::img($image[$j+4*$i]["type"]."/".$image[$j+4*$i]["name"],array('class'=>'img-responsive'));?>
          </a>
        </div>
      <?php endfor ?>
    </div>
  <?php endfor;?>
</div>
</div>
</div>
<!-- /block -->
</div>
</div>
</div>
<hr>
<footer>
</footer>
</div>
<!--/.fluid-container-->