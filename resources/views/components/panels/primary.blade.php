<div class="panel panel-primary">
    @if (isset($title))
        <div class="panel-heading">
            {{ $title }}
        </div>
    @endif
    <div class="panel-body">
        {{ $slot }}
    </div>
</div>