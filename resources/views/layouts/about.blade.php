<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Lucky Draws</h2>
        <div class="row g-4">

            <!-- Lucky Draw Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-lg h-100 rounded-4 border-0 hover-shadow transition">
                    <div class="card-body rounded-4">
                        <h5 class="card-title fw-semibold">🎟️ About us</h5>
                        <p class="card-text">Invest and get a chance to win exciting rewards. Winner will be announced
                            after 24 hours.</p>
                        <ul class="list-unstyled small">
                            <li><strong>💰 Minimum Investment:</strong> Rs. 10</li>
                            {{-- <li><strong>⏰ Deadline:</strong>
                                {{ \Carbon\Carbon::now()->addHours(24)->format('d M Y, h:i A') }}</li> --}}
                        </ul>
                        <a href="{{ url('registers') }}" class="btn btn-primary w-100 mt-3 rounded-pill">Invest Now</a>
                    </div>
                </div>
            </div>

            <!-- Lucky Draw Card 2 (Completed) -->
            <div class="col-md-4">
                <div class="card shadow-lg h-100 border-success border-2 rounded-4 hover-shadow transition">
                    <div class="card-body rounded-4">
                        <h5 class="card-title text-success fw-semibold">🏆 Prizes</h5>
                        <p class="card-text">Here are the winners for Draw #1229:</p>
                        <ul class="list-unstyled small">
                            <li><strong>1st Prize:</strong> Rs.8000</li>
                             <li><strong>2st Prize:</strong> Rs.5000</li>
                              <li><strong>3st Prize:</strong>Rs.1000</li>
                            <li><strong>Date:</strong> 2025</li>
                        </ul>
                        {{-- <span class="badge bg-success rounded-pill px-3 py-2 mt-2">Completed</span> --}}
                    </div>
                </div>
            </div>

            <!-- Lucky Draw Card 3 (Upcoming or Winners) -->
            <div class="col-md-4">
                <div class="card shadow-lg h-100 rounded-4 border-0 hover-shadow transition">
                    <div class="card-body rounded-4">
                        <h5 class="card-title fw-semibold">🏆 Winner Announced</h5>

                        @if ($winners->isNotEmpty())
                            @php
                                $positions = ['1st Winner', '2nd Winner', '3rd Winner'];
                            @endphp
                            @foreach ($winners as $index => $items)
                                @if ($index < 3)
                                    <span class="badge bg-success rounded-pill d-inline-block mb-1 px-3 py-2">{{ $positions[$index] }}: {{ $items->name }}</span><br>
                                @endif
                            @endforeach
                        @else
                            <p class="card-text">New lucky draw coming soon. Stay tuned for more updates!</p>
                            <span class="badge bg-warning text-dark rounded-pill px-3 py-2">Upcoming</span>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Optional small custom CSS to improve hover effect -->
<style>
    .hover-shadow:hover {
        transform: translateY(-4px);
        transition: all 0.2s ease-in-out;
    }
    .transition {
        transition: all 0.3s ease;
    }
</style>
