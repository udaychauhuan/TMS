<div class="container mt-2">
    {{-- page links --}}
    <ul class="nav nav-underline">
        <li class="nav-item">
          <a class="nav-link text-muted" href="{{route('home')}}">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="{{route('tasksLogs')}}">Task Logs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{route('users')}}">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{route('report')}}">Report</a>
        </li>
    </ul>
      <hr>
      {{-- main-containts --}}
      <div class="container mt-1">
        @yield('containt')
      </div>
</div>
