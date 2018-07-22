<?php

if(!isset($page) && empty($page))
{$page = "none";}				
                
?>               
                
                
                <div class="dropdown profile-element"> 
                    		 <span>
                           		<img alt="image" class="img-circle" src="<?php if(isset($user->img) && !empty($user->img)){ echo $user->img;}else{ echo "img/user.png";} ?>" height="50" width="50">
                             </span>
                             <br>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $user->fname." ".$user->lname; ?></strong> &nbsp; <?php
                             if($user->verified == 2){ ?>
							 <i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i>
							 <?php } ?>
							 
							 <br>
                             </span> <span class="text-muted text-xs block"><?php echo get_position($user->position); ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <br><br>
                    <ul class="nav nav-pills nav-stacked">
                      <li <?php if($page == "home"){ echo 'class="active"';} ?> ><a href="home.php">Home</a></li>
                      <li <?php if($page == "profile"){ echo 'class="active"';} ?> ><a href="profile.php">Profile</a></li>
                      <li <?php if($page == "blogs"){ echo 'class="active"';} ?> ><a href="blogs.php">Blogs</a></li>
                      <li <?php if($page == "modules"){ echo 'class="active"';} ?> ><a href="messages.php">Messages</a></li>
                      <li <?php if($page == "friends"){ echo 'class="active"';} ?> ><a href="friends.php">Friends</a></li>
                      <li class="disabled"><a href="#">College</a></li>
                      <li class="dropdown <?php if($page == "settings"){ echo 'active';} ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Settings <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Info</a></li>
                          <li><a href="#">Security</a></li>
                          <li><a href="#">Password</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>