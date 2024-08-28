<div id="messages">
    @if (session('info'))
        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
    @elseif (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
