<header>
    <div class="container">
        <div class="logo">
            <a href="{{url('/')}}">
                <img  src="{{asset('frontend/asset/images/logo-logo.png')}}" alt="প্রাথমিক শিক্ষা অধিদপ্তর লোগো" style="z-index: 3;">
            </a>
            <h1>প্রাথমিক শিক্ষা অধিদপ্তর</h1>
            <p>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <div class="language">
            <a href="#">English</a>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">আমাদের সম্পর্কে</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">সংবাদ/টেন্ডার/LOI/অন্যান্য <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">আইন, নীতি ও বিধিমালা</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">প্রকল্প</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                সমাপনী ও বৃত্তির ফলাফল
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">প্রকাশনা ও অন্যান্য</a>
                <a class="dropdown-item" href="#">ওয়েব মেইল</a>
                <a class="dropdown-item" href="#">ঠিকানা</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>
</header>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">আমাদের সম্পর্কে</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">সংবাদ/টেন্ডার/LOI/অন্যান্য <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">আইন, নীতি ও বিধিমালা</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">প্রকল্প</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            সমাপনী ও বৃত্তির ফলাফল
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">প্রকাশনা ও অন্যান্য</a>
            <a class="dropdown-item" href="#">ওয়েব মেইল</a>
            <a class="dropdown-item" href="#">ঠিকানা</a>
          </div>
        </li>
      </ul>
    </div>
</nav> --}}