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
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

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
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                    </a>
                    <ul class="dropdown-menu" id="menu1">
                        <li>
                            <a href="#">Tools <i class="icon-arrow-right"></i>

                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li>
                                    <a href="#">Reports</a>
                                </li>
                                <li>
                                    <a href="#">Logs</a>
                                </li>
                                <li>
                                    <a href="#">Errors</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">SEO Settings</a>
                        </li>
                        <li>
                            <a href="#">Other Link</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Other Link</a>
                        </li>
                        <li>
                            <a href="#">Other Link</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a tabindex="-1" href="#">Blog</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#">News</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#">Custom Pages</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#">Calendar</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a tabindex="-1" href="#">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a tabindex="-1" href="#">User List</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#">Search</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#">Permissions</a>
                        </li>
                    </ul>
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
                    <a href="#"><span class="badge badge-success pull-right">731</span> コメント</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-success pull-right">812</span> アクセス</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">27</span> リクエスト</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">11</span> メッセージ</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-important pull-right">83</span> エラー</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-warning pull-right">4,231</span> ログ</a>
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
                        <div class="muted pull-left">Morris.js stacked</div>
                        <div class="pull-right" id="sb">
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

            <!-- morris graph chart -->
            <div class="row-fluid section">
             <!-- block -->
             <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Morris.js <small>Monthly growth</small></div>
                    <div class="pull-right" id="gb">
                        <span class="badge badge-warning" data-filter="w">週</span>
                        <span class="badge badge-warning" data-filter="m">月</span>
                        <span class="badge badge-warning" data-filter="y">年</span>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div id="hero-graph" style="height: 230px;"></div>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Statistics</div>
                    <div class="pull-right"><span class="badge badge-warning">View More</span>

                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="span3">
                        <div class="chart" data-percent="73">73%</div>
                        <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="chart" data-percent="53">53%</div>
                        <div class="chart-bottom-heading"><span class="label label-info">Page Views</span>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="chart" data-percent="83">83%</div>
                        <div class="chart-bottom-heading"><span class="label label-info">Users</span>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="chart" data-percent="13">13%</div>
                        <div class="chart-bottom-heading"><span class="label label-info">Orders</span>

                        </div>
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
                        <div class="pull-right"><span class="badge badge-info">1,234</span>

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
                                <tr>
                                    <td>192.168.1.1</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>192.168.1.2</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>192.168.1.3</td>
                                    <td>@gabrielva</td>
                                </tr>
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
                        <div class="pull-right"><span class="badge badge-info">17</span>

                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>email</th>
                                    <th>website</th>
                                    <th>body</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>@mdo</td>
                                    <td>mdo@gmail.com</td>
                                    <td>http://mdo.jp</td>
                                    <td>hogehoge</td>
                                </tr>
                                <tr>
                                    <td>@fat</td>
                                    <td>fat@gmail.com</td>
                                    <td>http://fat.jp</td>
                                    <td>hogehogehoge</td>
                                </tr>
                                <tr>
                                    <td>@gabrielva</td>
                                    <td>gabriel@gmail.com</td>
                                    <td>http://gabriel.jp</td>
                                    <td>hogehogehogehoge</td>
                                </tr>
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
                        <div class="pull-right"><span class="badge badge-info">752</span>

                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Coat</td>
                                    <td>02/02/2013</td>
                                    <td>$25.12</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacket</td>
                                    <td>01/02/2013</td>
                                    <td>$335.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Shoes</td>
                                    <td>01/02/2013</td>
                                    <td>$29.99</td>
                                </tr>
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
                        <div class="pull-right"><span class="badge badge-info">812</span>

                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02/02/2013</td>
                                    <td>$25.12</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>01/02/2013</td>
                                    <td>$335.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01/02/2013</td>
                                    <td>$29.99</td>
                                </tr>
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
                    <div class="pull-right"><span class="badge badge-info">1,462</span>

                    </div>
                </div>
                <div class="block-content collapse in">
                    <div class="row-fluid padd-bottom">
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                  </div>

                  <div class="row-fluid padd-bottom">
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                  </div>

                  <div class="row-fluid padd-bottom">
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
                      <div class="span3">
                          <a href="#" class="thumbnail">
                          </a>
                      </div>
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