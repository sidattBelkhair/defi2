@extends("layouts.app")
@section("content")
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 100px;"
                  src="images/avatars/richatt.png" alt="Shards Dashboard">
                <!-- <span class="d-none d-md-inline ml-1">RICHATT</span> -->
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..."
              aria-label="Search">
          </div>
        </form>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="utilisateurs">
                <i class="material-icons">edit</i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="challenge.html">
                <i class="fa fa-trophy"></i>
                <span>Challenge</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="mots.create">
                <i class="material-icons">note_add</i>
                <span>Ajouter un mot</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="trasductions">
                <i class="material-icons">view_module</i>
                <span>Traduction</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/tables">
                <i class="material-icons">table_chart</i>
                <span>Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/profile">
                <i class="material-icons">person</i>
                <span>Profile</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
              <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <!-- <i class="fas fa-search"></i> -->
                  </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="" aria-label="Search">
              </div>
            </form>
            <ul class="navbar-nav border-left flex-row ">
              <li class="nav-item border-right dropdown notifications">
                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle mr-2" src="images/avatars/1.jpg" alt="User Avatar">
                  <span class="d-none d-md-inline-block">Utilisateur</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="/profile">
                    <i class="material-icons">&#xE7FD;</i> Profile</a>
                  <a class="dropdown-item" href="add-post">
                    <i class="material-icons">note_add</i> Ajouter un nouveau mot</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="/logout">
                    <i class="material-icons text-danger">&#xE879;</i> Deconnexion </a>
                </div>
              </li>
            </ul>
            <nav class="nav">
              <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
              </a>
            </nav>
          </nav>
        </div>
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <!-- <span class="text-uppercase page-subtitle">Dashboard</span> -->
              <h3 class="page-title">Resumee</h3>
            </div>
          </div>
          <!-- End Page Header -->
          <!-- Small Stats Blocks -->
          <div class="row">
            <div class="col-lg col-md-6 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Les Mots</span>
                      <h6 class="stats-small__value count my-3">2,390</h6>
                    </div>

                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Les Mots en attente</span>
                      <h6 class="stats-small__value count my-3">182</h6>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-4 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Les Commentaires</span>
                      <h6 class="stats-small__value count my-3">8,147</h6>
                    </div>

                  </div>
                  <!-- <canvas height="120" class="blog-overview-stats-small-3"></canvas> -->
                </div>
              </div>
            </div>
            <div class="col-lg col-md-4 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Les Utilisateurs </span>
                      <h6 class="stats-small__value count my-3">2,413</h6>
                    </div>
                    <div class="stats-small__data">
                      <!-- <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span> -->
                    </div>
                  </div>
                  <!-- <canvas height="120" class="blog-overview-stats-small-4"></canvas> -->
                </div>
              </div>
            </div>

          </div>
          <!-- End Small Stats Blocks -->
          <div class="row">
            <!-- New Draft Component -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <!-- Quick Post -->
              <div class="card card-small h-100">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Nouveau Mot</h6>
                </div>
                <div class="card-body d-flex flex-column">
                  <form class="quick-post-form">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Ecrire votre mot en Hassaniya">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control"
                        placeholder="Ecrire votre description"></textarea>
                    </div>
                    <div class="form-group mb-0">
                      <button type="submit" class="btn btn-accent">Ajouter le mot</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Quick Post -->
            </div>
            <!-- End New Draft Component -->
            <!-- Discussions Component -->
            <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
              <div class="card card-small blog-comments">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Les Commentaires</h6>
                </div>
                <div class="card-body p-0">
                  <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                      <img src="images/avatars/1.jpg" alt="User avatar" />
                    </div>
                    <div class="blog-comments__content">
                      <div class="blog-comments__meta text-muted">
                        <a class="text-secondary" href="#">Saleck Ameine</a> sur
                        <a class="text-secondary" href="#">أشحالك</a>
                        <span class="text-muted"></span>
                      </div>
                      <p class="m-0 my-1 mb-2 text-muted">Je pense que cette mot est bien traduit</p>
                    </div>
                  </div>
                  <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                      <img src="images/avatars/1.jpg" alt="User avatar" />
                    </div>
                    <div class="blog-comments__content">
                      <div class="blog-comments__meta text-muted">
                        <a class="text-secondary" href="#">Sleimane Hamida</a> sur
                        <a class="text-secondary" href="#">اشطاري</a>
                        <!-- <span class="text-muted">– 4 days ago</span> -->
                      </div>
                      <p class="m-0 my-1 mb-2 text-muted">Tres bien
                      </p>
                    </div>
                  </div>
                  <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                      <img src="images/avatars/1.jpg" alt="User avatar" />
                    </div>
                    <div class="blog-comments__content">
                      <div class="blog-comments__meta text-muted">
                        <a class="text-secondary" href="#">Ablo Beiba</a> sur
                        <a class="text-secondary" href="#">التعب</a>
                        <!-- <span class="text-muted">– 5 days ago</span> -->
                      </div>
                      <p class="m-0 my-1 mb-2 text-muted">Passable. 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-footer border-top">
                  <div class="row">
                    <div class="col text-center view-report">
                      <button type="submit" class="btn btn-white">Afficher tous les Commentaires</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Discussions Component -->
            <!-- Top Referrals Component -->
            <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
              <div class="card card-small">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Les Mots le plus Consultes</h6>
                </div>
                <div class="card-body p-0">
                  <ul class="list-group list-group-small list-group-flush">
                    <li class="list-group-item d-flex px-3">
                      <span class="text-semibold text-fiord-blue">اشطاري</span>
                      <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                      <span class="text-semibold text-fiord-blue">المختار</span>
                      <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                      <span class="text-semibold text-fiord-blue">أشحالك</span>
                      <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                      <span class="text-semibold text-fiord-blue">مقرج</span>
                      <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                      <span class="text-semibold text-fiord-blue">تلفون</span>
                      <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer border-top">
                  <div class="row">
                    <div class="col text-right view-report">
                      <a href="#">Tous les Mots &rarr;</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Top Referrals Component -->
          </div>
        </div>
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
          <span class="copyright ml-auto my-auto mr-2">Copyright © 2025
            <a href="#" rel="nofollow">Defis Ramadan</a>
          </span>
        </footer>
      </main>
    </div>
  </div>
@endsection