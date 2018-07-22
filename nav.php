<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index1.php"><img src="img/logo.png" style="margin-top:-25px;" height="90" width="90" class="pull-left"/> | srivin</a>
            </div>
            
            <!-- Search -->
            <div style="margin-top:5px;">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control input-sm" placeholder="Search">
                </div>
             </form>
            </div>
            <!-- Search -->
            
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                	<li>
                        <a href="timeline.php">Home</a>
                    </li>
                    <li>
                        <a href="timeline.php">Blogs</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact</a>
                    </li>
                    <?php if(is_logged_in()){ ?>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-globe" aria-hidden="true"></i> Notifications</a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">This Section is under construction. Please come later.﻿</a></li>
                            <li class="divider"></li>
                            <li><a href="#" style="text-align:center;"><strong>See More</strong></a></li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> &nbsp; <?php echo $user->fname;?> <b class="caret"></b></a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>