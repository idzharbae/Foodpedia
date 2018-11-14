<div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class='{{ (Request::path() == "admin" || Request::path() == "admin/dashboard") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/dashboard")}}'>
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/staff") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/staff")}}'>
              <i class="material-icons">person</i>
              <p>Staff</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/absen") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/absen")}}'>
              <i class="material-icons">content_paste</i>
              <p>Absen Staff</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/bahan") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/bahan")}}'>
              <i class="material-icons">library_books</i>
              <p>Bahan Baku</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/menu") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/menu")}}'>
              <i class="material-icons">bubble_chart</i>
              <p>Menu Makanan</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/testimoni") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/testimoni")}}'>
              <i class="material-icons">location_ons</i>
              <p>Testimoni</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/kolegial") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/kolegial")}}'>
              <i class="material-icons">notifications</i>
              <p>Kolegial</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/register") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/register")}}'>
              <i class="material-icons">notifications</i>
              <p>Register Admin Baru</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/faq") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/faq")}}'>
              <i class="material-icons">notifications</i>
              <p>FAQ</p>
            </a>
          </li>
          <li class='{{ (Request::path() == "admin/message") ? "nav-item active" : "nav-item" }}'>
            <a class="nav-link" href='{{url("/admin/message")}}'>
              <i class="material-icons">notifications</i>
              <p>Message</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

