<li class="nav-item">
    <a class="nav-link{{ request()->routeIs('home')?' active':'' }}" href="{{ route('home') }}">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('about')?' active':'' }}" href="{{ route('about') }}">О нас</a>
</li>

<li class="nav-item">
    <a class="nav-link{{ request()->routeIs('allNews')?' active':'' }}" href="{{ route('allNews') }}">Новости</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('authorization')?' active':'' }}" href="{{ route('authorization') }}">Авторизация</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.index')?' active':'' }}"
       href="{{ route('admin.index') }}">Админка</a>
</li>



