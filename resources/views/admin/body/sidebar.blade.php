@php
     $id = Auth::user()->id;
     $profileData = App\Models\User::find($id);

    $reply = App\Models\Comment::latest()->get();
@endphp

<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close typcn typcn-delete-outline"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options" id="sidebar-light-theme">
          <div class="img-ss rounded-circle bg-light border mr-3"></div>
          Light
        </div>
        <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
          <div class="img-ss rounded-circle bg-dark border mr-3"></div>
          Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles primary"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default border"></div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpeg') }}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              {{$profileData->name}}
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>
        {{-- <div class="nav-search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
            <div class="input-group-append">
              <span class="input-group-text" id="search">
                <i class="typcn typcn-zoom"></i>
              </span>
            </div>
          </div>
        </div> --}}
        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.profile')}}">
          <i class="typcn typcn-user menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.change.password')}}">
          <i class="typcn typcn-lock-closed menu-icon"></i>
          <span class="menu-title">Change Password</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.blog.comment')}}">
          <i class="typcn typcn-messages menu-icon"></i>
          <span class="menu-title">Comment<span class="badge badge-primary ml-3">{{count($reply)}}</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">Manage Category</span>
          <i class="typcn typcn-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('all.category')}}">All Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('add.category')}}">Add Category</a></li>
          </ul>
        </div>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="typcn typcn-message menu-icon"></i>
          <span class="menu-title">Manage Post</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('all.post')}}">All Post</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('add.post')}}">Add Post</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="typcn typcn-video menu-icon"></i>
          <span class="menu-title">Manage Video</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('all.video')}}">All Video</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('add.video')}}">Add Video</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="typcn typcn-th-small-outline menu-icon"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="typcn typcn-compass menu-icon"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="typcn typcn-user-add-outline menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
          <i class="typcn typcn-globe-outline menu-icon"></i>
          <span class="menu-title">Error pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
    <ul class="sidebar-legend">
      {{-- <li>
        <p class="sidebar-menu-title">Category</p>
      </li>
      <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
      <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
      <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li> --}}
    </ul>
  </nav>
