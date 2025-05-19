@include('layouts.head')

<body>
    @include('layouts.header')

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" style="color: #343a40; font-weight: 700; font-size: 2.5rem;">
                Welcome to SpendAndWin
            </h2>

            <!-- 3 Equal-Sized Stylish Cards -->
            <div class="row g-4 justify-content-center">
                <!-- How It Works -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm p-4 h-100" style="border-radius: 1.2rem; border: none;">
                        <h4 class="mb-3" style="color: #343a40; font-weight: 700;">How It Works</h4>
                        <p style="color: #6c757d; font-size: 1rem; line-height: 1.6;">
                            Spend just ₹10 and unlock your chance to win amazing prizes. Every ticket brings excitement and the possibility of something big — fun, fast, and full of surprises!
                        </p>
                        <div class="text-center mt-3">
                            <a href="{{ url('/') }}" class="btn custom-btn px-4">
                                Try Your Luck
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm p-4 h-100" style="border-radius: 1.2rem; border: none;">
                        <h4 class="mb-3" style="color: #343a40; font-weight: 700;">Why Join?</h4>
                        <ul class="list-unstyled" style="color: #6c757d; font-size: 1rem; line-height: 1.6;">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill custom-icon me-2"></i> Just ₹10 to enter.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill custom-icon me-2"></i> Transparent and fair draws.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill custom-icon me-2"></i> Simple process, instant entry.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill custom-icon me-2"></i> Real rewards for lucky users.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Advantages -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm p-4 h-100" style="border-radius: 1.2rem; border: none;">
                        <h4 class="mb-3" style="color: #343a40; font-weight: 700;">What You Gain</h4>
                        <ul class="list-unstyled" style="color: #6c757d; font-size: 1rem; line-height: 1.6;">
                            <li class="mb-2">
                                <i class="bi bi-star-fill custom-icon me-2"></i> Enjoy exciting prize draws.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-star-fill custom-icon me-2"></i> Safe, secure, and trusted.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-star-fill custom-icon me-2"></i> No hassle, just fun!
                            </li>
                            <li>
                                <i class="bi bi-star-fill custom-icon me-2"></i> Be part of a growing community!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .custom-btn {
            background-color: #d49220;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.6rem 1.2rem;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 0.4rem 1rem rgba(40, 167, 69, 0.25);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #ba8d39;
            box-shadow: 0 0.5rem 1.5rem rgba(40, 167, 69, 0.3);
        }

        .custom-icon {
            color: #28a745;
            font-size: 1.2rem;
        }

        ul.list-unstyled li {
            margin-bottom: 0.6rem;
        }
    </style>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
