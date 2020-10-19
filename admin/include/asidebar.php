    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="../assets/img/users/<?= $_SESSION['image'];?>" width="30%" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['username']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['email']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="dashboard.php">
            <i class="app-menu__icon fa fa-dashcube" aria-hidden="true"></i><span class="app-menu__label">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="bg.php">
            <i class="app-menu__icon fa fa-dashcube" aria-hidden="true"></i><span class="app-menu__label">Head BG</span>
          </a>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Users Data</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_user.php"><i class="icon fa fa-circle-o"></i>Add Admin</a></li>
            <li><a class="treeview-item" href="user_data.php" rel="noopener"><i class="icon fa fa-circle-o"></i>Admins list</a></li>
          </ul>
        </li>
        <li>
          <a class="app-menu__item" href="about.php">
            <i class="app-menu__icon fa fa-anchor"></i>
            <span class="app-menu__label">About Me</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="add_skill.php">
            <i class="app-menu__icon fa fa-superpowers fa-pulse fa-fw"></i>
            <span class="app-menu__label">&nbsp;&nbsp;Skill</span>
          </a>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Services</span><i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_service.php"><i class="icon fa fa-circle-o"></i> Add new Service</a></li>
            <li><a class="treeview-item" href="service_list.php"><i class="icon fa fa-circle-o"></i> Services List</a></li>
          </ul>
        </li>
        <li class="treeview">
    			<a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-code-fork"></i>
    				<span class="app-menu__label">projects</span><i class="treeview-indicator fa fa-angle-right"></i>
    			</a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_project.php"><i class="icon fa fa-circle-o"></i> Add new Projects</a></li>
            <li><a class="treeview-item" href="project_list.php"><i class="icon fa fa-circle-o"></i> projects Tables</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-share-square-o"></i>
            <span class="app-menu__label">Social Links</span><i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_social.php"><i class="icon fa fa-circle-o"></i> Add new icon</a></li>
            <li><a class="treeview-item" href="social_list.php"><i class="icon fa fa-circle-o"></i> All Links</a></li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="contact.php">
            <i class="app-menu__icon fa fa-handshake-o"></i>
            <span class="app-menu__label"> Contact info </span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="mail.php">
            <i class="app-menu__icon fa fa-envelope-o"></i>
            <span class="app-menu__label"> Mails </span>
          </a>
        </li>

 

      </ul>
    </aside>



    <main class="app-content">
      <div class="app-title">