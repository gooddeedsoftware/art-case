@if(Auth::check() && Auth::user()->type === 'admin')
    <li class="nav-item {{ request()->is('*manage-user*') ? 'menu-opening menu-open' : '' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Administrator
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('manage.user.index') }}" class="nav-link {{ request()->is('*manage-user') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Management User</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('artist.index') }}" class="nav-link {{ request()->is('*artist') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Management Artist</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('author.index') }}" class="nav-link {{ request()->is('*author') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Management Author</p>
                </a>
            </li>
        </ul>
    </li>
@endif
@if(Auth::user()->type === 'admin' || Auth::user()->type === 'artist')
<li class="nav-item {{ request()->is('*art-table*') ? 'menu-opening menu-open' : '' }}">
    <a href="{{route('art.index') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Art
        </p>
    </a>
</li>
@endif
@if(Auth::user()->type === 'admin' || Auth::user()->type === 'author')
<li class="nav-item {{ request()->is('*poetry-table*') ? 'menu-opening menu-open' : '' }}">
    <a href="{{route('poetry.index') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Poetry
        </p>
    </a>
</li>
@endif