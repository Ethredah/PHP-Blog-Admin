<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> 
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/user.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Account<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="settings.php"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="functions/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.php" class="waves-effect <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </a>
                    </li>
                   
                    
                   <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'posts.php'){echo 'active'; }else { echo ''; } ?>" href="posts.php">All Posts</a></li>
                            <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'new-post.php'){echo 'active'; }else { echo ''; } ?>" href="new-post.php">Create Post</a></li>
                            <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'comments.php'){echo 'active'; }else { echo ''; } ?>" href="comments.php" class="waves-effect">Comments</a>
                            </li>
                        </ul>
                    </li>
                   
                   <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'inbox.php'){echo 'active'; }else { echo ''; } ?>" href="inbox.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Messages</span></a>
                    </li>

                    <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'subscribers.php'){echo 'active'; }else { echo ''; } ?>" href="subscribers.php" class="waves-effect"><i data-icon="n" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Subscribers</span></a>
                    </li>
                    
                     <li class="nav-small-cap">--- Other</li>

                    <li> <a href="#" class="waves-effect"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Access<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a <?php if(basename($_SERVER['SCRIPT_NAME']) == 'users.php'){echo 'active'; }else { echo ''; } ?> href="users.php">Administrators</a></li>
                            <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'new-user.php'){echo 'active'; }else { echo ''; } ?>" href="new-user.php">Create Admin</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a href="functions/logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                   
                </ul>
            </div>
        </div>
