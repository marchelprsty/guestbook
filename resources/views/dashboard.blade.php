@if(Auth::check())
    @if(Auth::user()->isTamu())
        <p>Welcome, Tamu!</p>
        <!-- Tambahkan tautan atau elemen sesuai kebutuhan Tamu -->
    @elseif(Auth::user()->isAdmin())
        <p>Welcome, Admin!</p>
        <!-- Tambahkan tautan atau elemen sesuai kebutuhan Admin -->
    @endif
@endif