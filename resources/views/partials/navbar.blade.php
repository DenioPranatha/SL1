<ul class="nav nav-underline justify-content-center">
    <li class="nav-item">
      <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" href="/welcome">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title == "Profile") ? 'active' : '' }}" aria-current="page" href="/profile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title == "Services") ? 'active' : '' }}" href="/services">Services</a>
    </li>
  </ul>