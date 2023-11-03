 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Theft Control System</span>
    </a>
    <?php
       $users=Auth::user();
    ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if($users->image != NULL)
            <img src="{{asset('images/'.$users->image)}}" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{asset('images/default.jpg')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>

        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
        </div>
      </div>
 
     
      <div class="row ">
        
              <div class="col-md-2  ">
              <!-- Sidebar Menu -->
                  <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                          with font-awesome or any other icon font library -->
                          @if((Auth::user()->roll)==1)
                              <li class="nav-item menu-open ">
                                
                                              
                                      <li class="nav-item ">
                                          <a href="{{ route('home') }}" class="nav-link  ">
                                          <i class="fa fa-clone nav-icon "></i>
                                          <p>Home</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('admin.index') }}" class="nav-link  ">
                                          <i class="fa fa-clone nav-icon"></i>
                                          <p>View Complaints</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('inspector-view') }}" class="nav-link">
                                          <i class="fa fa-clone nav-icon"></i>
                                          <p>Inspector Details</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('admin.create') }}" class="nav-link">
                                          <i class="fa fa-clone nav-icon"></i>
                                          <p>Add Inspector</p>
                                          </a>
                                      </li>                               
                              </li>
                          @elseif((Auth::user()->roll)==2)
                              <li class="nav-item menu-open ">
                                  <li class="nav-item">
                                      <a href="{{ route('user.index') }}" class="nav-link ">
                                      <i class="fa fa-clone nav-icon"></i>
                                      <p>View Complaints</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('user.create') }}" class="nav-link">
                                      <i class="fa fa-clone nav-icon"></i>
                                      <p>Add Complaint</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('profile') }}" class="nav-link">
                                      <i class="fa fa-clone nav-icon"></i>
                                      <p>View profile</p>
                                      </a>
                                  </li>
                              </li>
                          @else
                              <li class="nav-item menu-open ">
                                  <li class="nav-item">
                                      <a href="{{ route('inspector.index') }}" class="nav-link">
                                      <i class="fa fa-clone nav-icon"></i>
                                      <p>ViewComplaints</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('profile') }}" class="nav-link">
                                      <i class="fa fa-clone nav-icon"></i>
                                      <p>View profile</p>
                                      </a>
                                  </li>
                              </li>  
                          @endif
                      </ul>
                  </nav>
              </div>             
      </div>      
                      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>