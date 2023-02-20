 <header class="navbar py-3 mb-1 border-bottom bg-white">
    <div class="container-fluid" style="grid-template-columns: 1fr 2fr;">
      <div class="col-3 d-flex justify-content-start" style="padding: 0">
      <button class="openbtn" onclick="openNav()">☰</button>  
      </div>
      <div class="col-9 d-flex justify-content-end">
      <div class="d-flex align-items-center">
        <div class="text-center mx-4" id="textprofile">
        <p class="my-0">Selamat Datang , Admin</p>
        <p class="my-0">Teknik Informatika</p>
        </div>
        <div class="flex-shrink-0 dropdown mx-2">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </header>
  <style>
    .openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
    @media screen and (min-width: 800px) {
    .openbtn {
      visibility: hidden;
    }
  }
  </style>