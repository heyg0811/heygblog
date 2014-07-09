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
                <li>
                    <a href="index"><i class="icon-chevron-right"></i> Dashboard</a>
                </li>
                <li class="active">
                    <a href="stats"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                </li>
                <li>
                    <a href="editors"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
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
                    <div class="pull-right"><span class="badge badge-warning">View More</span>

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
                <div class="pull-right"><span class="badge badge-warning">View More</span>

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

    <!-- morris bar & donut charts -->
    <div class="row-fluid section">
       <!-- block -->
       <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Morris.js</div>
            <div class="pull-right"><span class="badge badge-warning">View More</span>

            </div>
        </div>
        <div class="block-content collapse in">
            <div class="span6 chart">
                <h5>Devices sold</h5>
                <div id="hero-bar" style="height: 250px;"></div>
            </div>
            <div class="span5 chart">
                <h5>Month traffic</h5>
                <div id="hero-donut" style="height: 250px;"></div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>

<!-- jQuery knobs -->
<div class="row-fluid section">
   <!-- block -->
   <div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">jQuery Knob</div>
        <div class="pull-right"><span class="badge badge-warning">View More</span>

        </div>
    </div>
    <div class="block-content collapse in">
        <div class="span3">
            <input type="text" value="50" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140">
        </div>
        <div class="span3">
            <input type="text" value="75" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#8ac368" data-bgColor="#c4e9aa" data-width="140">
        </div>
        <div class="span3">
            <input type="text" value="35" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#5ba0a3" data-bgColor="#cef3f5" data-width="140">
        </div>
        <div class="span3">
            <input type="text" value="85" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#b85e80" data-bgColor="#f8d2e0" data-width="140">
        </div>
    </div>
</div>
<!-- /block -->
</div>


<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Bar Chart</div>
            <div class="pull-right"><span class="badge badge-warning">View More</span>

            </div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <div id="catchart" style="width:100%;height:300px"></div>
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
                <div class="muted pull-left">Pie Chart</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                 <div id="piechart1" style="width:100%;height:200px"></div>
             </div>
         </div>
     </div>
     <!-- /block -->
 </div>
 <div class="span6">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Pie Chart</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
             <div id="piechart2" style="width:100%;height:200px"></div>
         </div>
     </div>
 </div>
 <!-- /block -->
</div>
</div>

<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Multiple axes</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <div id="timechart" style="width:100%;height:400px"></div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>

</div>
</div>
<hr>
<footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>