@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p>{{ $message }}</p>
    </div>
    <script>
        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>
@endif
