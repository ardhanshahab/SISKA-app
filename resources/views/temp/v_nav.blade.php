<div class="sidebar d-flex flex-column flex-shrink-0 bg-white" id="sidebar">
  <a href="/" class="d-flex align-items-center mt-2 mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="https://www.stmik-bandung.ac.id/core/public/assets/img/core-img/logo_stmik_kampusmerdeka.png" width="100px">
    <span class="fs-4 mx-2">SISKA</span>
  </a>
  <a href="#" class="closebtn" onclick="closeNav()">×</a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    @php
    // $params = $request->query->all();
    $params = Request::getRequestUri();
    $url=explode("/", $params);
    // echo $url[1];    
    @endphp
    @foreach ($sidebar as $item)
    @if ($item->role == $url[1])
    <li class="nav-item">
      <a href="{{route($item->url)}}" class="nav-link " aria-current="page">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
            {{$item->name}}
      </a>
    </li>
    @endif
    @endforeach
    {{-- <li> --}}
      {{-- <a href="#" class="nav-link link-dark">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
        Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
        Orders
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
        Products
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
        Customers
      </a>
    </li> --}}
  </ul>
  <hr>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>

  {{-- <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu text-small shadow">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div> --}}
</div>
<style>
  .sidebar {
  height: 100vh;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: #111; */
  overflow: hidden;
  transition: 0.5s;
  padding-top: 20px;
  padding-left: 0px;
  padding-right: 0px; 
}
.sidebar hr{
  color: black
}
.sidebar ul li a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar ul li a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
  /* @media screen and (max-width: 800px) {
  .sidebar {
    visibility: hidden;
  } */

  @media screen and (max-height: 600px) {
  .sidebar {padding-top: 15px;}
  .sidebar ul li a {font-size: 18px;}
}
@media screen and (min-width: 800px) {
  .sidebar {
  height: 100vh;
  width: 350px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: #111; */
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  font-size: 16px;
}
.closebtn{
  visibility: hidden;
}
.textprofile{
  display: block;
}
 #main {
  margin-left: 350px
 }
    .openbtn {
      visibility: hidden;
    }
  }

</style>
