<div>
    <div class="app-title">
        <h1>{{ $title }}</h1>
        <ul class="app-breadcrumb breadcrumb">
            @forelse ($items as $item)
                <li class="breadcrumb-item"><a href="{{ $item['url'] }}"><i
                            class="{{ $item['icon'] }}">{{ $item['name'] }}</i></a></li>
            @empty
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            @endforelse
        </ul>
    </div>
</div>
