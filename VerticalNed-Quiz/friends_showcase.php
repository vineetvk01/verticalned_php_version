
                    <ul class="nav nav-pills">
                      <li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">Followers <span class="badge" id="follower">0</span></a></li>
                      <li class=""><a href="#profile" data-toggle="tab" aria-expanded="true">Following <span class="badge" id="following">0</span></a></li>
                      <li class=""><a href="#pending" data-toggle="tab" aria-expanded="false">Pending <span class="badge">0</span></a></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Others <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#dropdown1" data-toggle="tab">Blocked</a></li>
                          <li class="divider"></li>
                          <li><a href="#dropdown2" data-toggle="tab">Blocked</a></li>
                        </ul>
                      </li>
                    </ul>
                    <hr class="intro-divider">
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade  active in" id="home">
                      	<!-- content followers -->
                        <div class="row">
                        	<?php include 'each_follower.php' ?>
                         </div>
                        <!-- content followers -->
                      </div>
                      <div class="tab-pane fade" id="profile">
                        
                        <!-- content following -->
                        <div class="row">
                        	<?php include 'each_following.php' ?>
                        </div>
                        <!-- content following -->
                        
                      </div>
                      <div class="tab-pane fade" id="pending">
                      	<!-- content pending -->
                        <div class="row">
                        	<div class="col-lg-6">
                            	<!-- Each Value -->
                                <?php include 'each_pending.php' ?>
                                <!-- Each value -->
                            </div>
                            <div class="col-lg-6">
                            	<?php include 'each_pending.php' ?>
                            </div>
                        </div>
                        <!-- content pending -->
                      </div>
                      <div class="tab-pane fade" id="dropdown1">
                        
                        <!-- Content Blocked -->
                        <div class="row">
                        	<div class="col-lg-6">
                            	<!-- Each Value -->
                                <?php include 'each_blocked.php' ?>
                                <!-- Each value -->
                            </div>
                            <div class="col-lg-6">
                            	<?php include 'each_blocked.php' ?>
                            </div>
                        </div>
                        <!-- Content blocked -->
                        
                      </div>
                      <div class="tab-pane fade" id="dropdown2">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                    </div>
                    
                    
                    