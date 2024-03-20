<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><span>Home</span></span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>

          <li class="dropdown active"><a href="{{ route('pendidikan') }}"><span>Pendidikan</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('pendidikan') }}">Umum</a></li>
              <li><a href="{{ route('tk') }}">RA</a></li>
              <li><a href="{{ route('mi') }}">MI</a></li>
              <li><a href="{{ route('mts') }}">MTs</a></li>
              <li><a href="{{ route('ma') }}">MA</a></li>
              <li class="dropdown"><a href="menu/pendidikan/kuliah/"><span>Kuliah</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li class="dropdown"><a href="menu/pendidikan/kuliah/polteksci/"><span>D4 Poltek SCI</span> <i class="bi bi-chevron-left"></i></a>
                    <ul>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester1.html">Semester 1</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester2.html">Semester 2</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester3.html">Semester 3</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester4.html">Semester 4</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester5.html">Semester 5</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester6.html">Semester 6</a></li>
                      <li><a href="menu/pendidikan/kuliah/polteksci/semester7.html">Semester 7</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"><a href="menu/kerja/"><span>Pengalaman Kerja</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="menu/kerja/">Umum</a></li>
              <li><a href="menu/kerja/cibay.html">Stand Cibay</a></li>
              <li><a href="menu/kerja/patwamart.html">Patwa Mart</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="menu/postingan/">Postingan</a></li>
          <li><a class="nav-link" href="{{ route('kontak') }}">Kontak Saya</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>