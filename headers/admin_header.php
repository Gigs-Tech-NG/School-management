 <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.php">
                         <img src="images/depotter_logo.png" width="150" alt="logo">
                    </a>
                </div>
                  <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                   
                                </button>
                            </span>
                            <marquee behavior="scroll" direction="left" style="">DE POTTER COLLEGE OF HEALTH</marquee>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title"><?php echo     $firstname ;?></h5>
                                <span><?php echo     $rank ;?></span>
                            </div>
                            <div class="admin-img">
                                <img src="img/<?php echo $passport;?>" alt="Admin" width="30px" height="15px">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php echo     $firstname ;?></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="myprofile.php"><i class="flaticon-user"></i>My Profile</a></li>
                                    
                                    <li><a href="profileedit.php"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-clock"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification 01</div>
                            <span><?php include "config.php";
                            $select=mysqli_query($connection,"select * from posjss3nd where status=''");
                            $count = mysqli_num_rows($select);
                             echo ($count);
                        
                            ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header"style='font-size:14px; font-weight:bolder;'>school fee payment notice<br>
                            <span>click to confirm</span>
                               
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="media-body space-sm">
                                                                                <?php include "config.php";
                            $select=mysqli_query($connection,"select * from posjss3nd where status=''");
                            $count = mysqli_num_rows($select);
                             //echo ($count);
                            if(mysqli_num_rows($select)>0)while($row=mysqli_fetch_array($select)){
                        
                            ?>
                                        <div class="item-title">
                                          <a href='confirming.php?id=<?php echo $row['id']; ?>'>  <?php echo $row['name']; ?> 
                                         
                                         <span style=' font-size:10.5px; color: red;'><?php echo $row['name']; ?> has paid #<?php echo $row['fee'];?></span>
                                         <hr></hr>
                                        </a>
                                         <?php }?>
                                             
                                        
                                        </div>
                              
                               
                               
                            </div>
                        </div>
                    </li>
                    <!-----sch fee payment notice-->
                    
                       <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification 02</div>
                            <span><?php include "config.php";
                            $select=mysqli_query($connection,"select * from book_request where status='unread'");
                            $count = mysqli_num_rows($select);
                             echo ($count);
                        
                            ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header" style='font-size:16px;'>NEW BOOK REQUEST<br><p><b>click to mark as read</b></p>
                                </div>
                            <div class="item-content">
                               
                                <!--div class="media">
                                    <div class="item-icon bg-orange">
                                       
                                        <!--i class="fas fa-calendar-alt"></i>
                                    </div-->
                                    
                                   
                                    <div class="media-body space-sm">
                                        <?php include "config.php";
                            $select=mysqli_query($connection,"select * from book_request where status='unread'");
                            $count = mysqli_num_rows($select);
                             //echo ($count);
                            if(mysqli_num_rows($select)>0)while($row=mysqli_fetch_array($select)){
                        
                            ?>
                           
                            <input type="hidden" name='id' value="<?php echo $row['id'];?>" />
        <a href='markread.php?id=<?php echo $row['id'];?>'>  
        <div  class="post-title" "item-icon bg-orange" style='font-size: 14.5px; color:blue; '><i class="fas fa-book-reader"></i> <?php echo $row['name']; ?> </div>
                                         
                                         <span style=' font-size:10.5px; color: red;'><?php echo $row['book_requested'];?></span>
                                         </a>
                                         <hr></hr>
                                        
                                         <?php }?>
                                        </div>
                                </div>
                        
                            </div>
                        </div>
                    </li>
                    
                    <!---scch fee payment notice ends here-->
                  
                     <!--li class="navbar-item dropdown header-language">
                        <div class="dropdown-menu dropdown-menu-right">
                             </div>
                    </li-->
                </ul>
            </div>
      