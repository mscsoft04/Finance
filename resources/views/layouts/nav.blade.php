<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item {{ request()->is('home*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item {{ request()->is('branch*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('branch') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Branch</span></a>
      </li>
      <li class="nav-item {{ request()->is('subscriber*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('subscriber') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Subscriber</span></a>
      </li>
      <li class="nav-item {{ request()->is('collection-area*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('collection-area') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Collection-Area</span></a>
      </li>
      <li class="nav-item {{ request()->is('scheme*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('scheme') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Scheme</span></a>
      </li>
      <li class="nav-item {{ request()->is('bank*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('bank') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Bank</span></a>
      </li>
      <li class="nav-item {{ request()->is('group*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('group') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Group</span></a>
      </li>
      
      
    </ul>
