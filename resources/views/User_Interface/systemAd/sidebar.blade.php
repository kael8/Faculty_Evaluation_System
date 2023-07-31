<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- ... Other menu items ... -->

    <li class="nav-heading">Pages</li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manageAcc" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-person-vcard-fill"></i><span>Manage Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manageAcc" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
        <li>
          <a href="{{ route('User_Interface.systemAd.addUser') }}">
            <i class="bi bi-circle"></i><span>Add User</span>
          </a>
        </li>
        <li>
          <a href="{{ route('User_Interface.systemAd.updateUser') }}">
            <i class="bi bi-circle"></i><span>Update User Info</span>
          </a>
        </li>
        <li>
          <a href="{{ route('User_Interface.systemAd.removeUser') }}">
            <i class="bi bi-circle"></i><span>Delete User</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#response" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-envelope-paper-fill"></i><span>Response</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="response" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
        <li class="nav-item">
          
            <li>
              <a href="{{ route('User_Interface.systemAd.pendingRes') }}">
                <i class="bi bi-circle"></i><span>Pending</span>
              </a>
            </li>
            <li>
              <a href="{{ route('User_Interface.systemAd.validatedRes') }}">
                <i class="bi bi-circle"></i><span>Validated</span>
              </a>
            </li>
        </li>
      </ul>
    </li>

  </ul>

</aside><!-- End Sidebar-->