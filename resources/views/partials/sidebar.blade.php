<div class="d-flex flex-column flex-shrink-0 p-4 bg-light">
    <span class="fs-4">{{ Auth::user()->name }}</span>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{route('admin.dashboard')}}" class="nav-link text-dark 
      {{Route::currentRouteName() == 'admin.dashboard'?'active text-white':''}}" aria-current="page">
        Dashboard
      </a>
    </li>
    <li>
      <a href="{{route('admin.projects.index')}}" class="nav-link text-dark
      {{Route::currentRouteName() == 'admin.projects.index'?'active text-white':''}}">
        Projects
      </a>
    </li>
  </ul>
</div>
  