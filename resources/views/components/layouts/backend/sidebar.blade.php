<div class="brand-logo">
    <a href="/admin">
        <img src="{{ asset('frontend') }}/assets/img/profile.jpg" class="logo-icon align-self-start mr-3"
            style="border-radius:50%" alt="user avatar">
        <h5 class="logo-text text-success"><b>Admin</b> <span>Panel</span></h5>
    </a>
</div>
<ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('admin/people') ? 'active' : '' }}">
        <a href="{{ route('people.index') }}">
            <i class="fa fa-address-book"></i> <span>About</span>
        </a>
    </li>

    <li class="{{ Request::is('admin/resumes') ? 'active' : '' }}">
        <a href="{{ route('resumes.index') }}">
            <i class="zmdi zmdi-file"></i> <span>Resumes</span>
        </a>
    </li>

    <li class="{{ Request::is('admin/categories') ? 'active' : '' }}">
      <a href="{{ route('categories.index') }}">
          <i class="fa fa-th"></i> <span>Categories</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/portfolios') ? 'active' : '' }}">
        <a href="{{ route('portfolios.index') }}">
            <i class="zmdi zmdi-share"></i> <span>Portfolio</span>
        </a>
    </li>

    <li class="{{ Request::is('admin/skills') ? 'active' : '' }}">
        <a href="{{ route('skills.index') }}">
            <i class="fa fa-slack"></i> <span>Skills</span>
        </a>
    </li>

    <li class="{{ Request::is('admin/files') ? 'active' : '' }}">
        <a href="{{ route('files.index') }}">
            <i class="fa fa-file"></i> <span>Files</span>
        </a>
    </li>
    

    <li class="{{ Request::is('admin/appeals') ? 'active' : '' }}">
        <a href="{{ route('appeals.index') }}">
            <i class="fa fa-send"></i> <span>Appeals</span>
            @if ($appeals->count() !== 0)
                <small class="badge bg-info float-right badge-light">new</small>
            @endif
        </a>
    </li>

    <li class="sidebar-header">REGISTRATION</li>
    <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{ route('users.index') }}"><i class="zmdi zmdi-accounts text-success"></i> <span>Users</span></a></li>
    <li class="{{ Request::is('admin/roles') ? 'active' : '' }}"><a href="{{ route('roles.index') }}"><i class="zmdi zmdi-chart-donut text-danger"></i> <span>Roles</span></a></li>

</ul>
