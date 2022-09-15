<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              
          <li class="menu-header">Pages</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User Register Data</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link  {{Request::is('regRegist') ? 'active' : ''}}" href="/regRegist">Student Regist Form</a></li>
                  <li><a class="nav-link {{Request::is('regData') ? 'active' : ''}}" href="/regData">Student Regist Data</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Student Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/form">Student Form Page</a></li>
                  <li><a class="nav-link" href="/data">Student Data Table </a></li>
                  <li><a class="nav-link" href="/pro">Profile </a></li>
                </ul>
              </li>
        </aside>