<nav>
    <ul>
        <li class="{{request()->routeIs('beranda') ? 'active': ''}}">
            <a href="{{route('beranda')}}">Beranda</a>
        </li>
        <li class="{{request()->routeIs('datadiri') ? 'active': ''}}">
            <a href="{{route('datadiri')}}">Data Diri</a>
        </li>
        <li class="{{request()->routeIs('aktivitas') ? 'active': ''}}">
            <a href="{{route('aktivitas')}}">Aktivitas</a>
        </li>
        <li class="{{request()->routeIs('kontak') ? 'active': ''}}">
            <a href="{{route('kontak')}}">Kontak</a>
        </li>
    </ul>
</nav>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #b3d9ff; /* baby blue */
    }
    nav {
        display: flex;
        justify-content: center;
        background-color: #f9f9f9;
        padding: 12px 0;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        gap: 25px;
        margin: 0;
    }
    nav ul li a {
        text-decoration: none;
        color: black;
        font-size: 16px;
    }
    nav ul li.active a {
        font-weight: bold;
        color: blue;
    }
</style>
