
<li class="nav-item">
    <a href="{{ route('post2s.index') }}"
       class="nav-link {{ Request::is('post2s*') ? 'active' : '' }}">
        <p>Post2S</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin:users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin:counties.index') }}"
       class="nav-link {{ Request::is('counties*') ? 'active' : '' }}">
        <p>Counties</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('towns.index') }}"
       class="nav-link {{ Request::is('towns*') ? 'active' : '' }}">
        <p>Towns</p>
    </a>
</li>


