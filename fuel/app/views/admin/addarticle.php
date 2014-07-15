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
        <li class="active">
          <a href="index"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li>
          <a href="addarticle"><i class="icon-chevron-right"></i> Add article</a>
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
            <div class="muted pull-left">Editor</div>
          </div>
          <form class="form" style="margin-top:10px;">
            <div style="margin-left:15px;">
              <label class="control-label">Title</label>
              <div class="controls">
                <input type="text" placeholder="title" name="title" style="width:95%;">
              </div>
              <label class="control-label">Name</label>
              <div class="controls">
                <input type="text" placeholder="name" name="name" style="width:95%;">
              </div>
              <label class="control-label">Tag</label>
              <div class="controls">
                <input type="text" placeholder="tag" name="tag" style="width:95%;">
              </div>
              <label class="control-label">Digest</label>
              <div class="controls">
                <textarea placeholder="digest" name="digest" id="" cols="30" rows="5" style="width:95%;"></textarea>
              </div>
            </div>
            <div class="block-content collapse in">
              <label class="control-label">Body</label>
              <textarea id="ckeditor_full" name="body"></textarea>
            </div>
              <button style="margin-left:15px;" type="submit" class="btn btn-large">送信</button>
          </form>
        </div>
        <!-- /block -->
      </div>
    </div>
  </div>
</div>
