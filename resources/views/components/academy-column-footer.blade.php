<h5 class="footer-title">{{ $academy->name ?? 'Academy' }}</h5>
<ul>
    @foreach ($menuItems as $menuItem)
        <li>
            <a href="{{ $menuItem->url ?? '#' }}">{{ $menuItem->title }}</a>
        </li>
    @endforeach
</ul>
