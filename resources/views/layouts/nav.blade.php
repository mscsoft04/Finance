<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item {{ request()->is('home*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('home') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-tachometer-alt"></i>

          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item {{ request()->is('branch*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('branch') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-code-branch"></i>
          <span>Branch</span></a>
      </li>
      <li class="nav-item {{ request()->is('subscriber*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('subscriber') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span>Subscriber</span></a>
      </li>
      <li class="nav-item {{ request()->is('collection-area*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('collection-area') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-hand-holding-usd"></i>
          <span>Collection-Area</span></a>
      </li>
      <li class="nav-item {{ request()->is('scheme*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('scheme') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="far fa-clock"></i>
          <span>Scheme</span></a>
      </li>
      <li class="nav-item {{ request()->is('bank*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('bank') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-money-check-alt"></i>
          <span>Bank</span></a>
      </li>
      <li class="nav-item {{ request()->is('group*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('group') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-users"></i>
          <span>Group</span></a>
      </li>
      <li class="nav-item {{ request()->is('ledger*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('ledger') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-clipboard-list"></i>
          <span>Ledger</span></a>
      </li>
      <li class="nav-item {{ request()->is('agent*') ? 'active' : '' }} {{ request()->is('sourceOfFunds*') ? 'active' : '' }}{{ request()->is('relationship*') ? 'active' : '' }}{{ request()->is('documentType*') ? 'active' : '' }}{{ request()->is('state*') ? 'active' : '' }}{{ request()->is('city*') ? 'active' : '' }}
        {{ request()->is('taluk*') ? 'active' : '' }}{{ request()->is('village*') ? 'active' : '' }}{{ request()->is('master*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('master') }}">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-cogs"></i>
          <span>Master</span></a>
      </li>
      
      
    </ul>
