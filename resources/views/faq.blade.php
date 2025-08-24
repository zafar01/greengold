<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions (FAQ) - Green Gold Vermicompost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Foody2 Theme Colors */
            --primary-orange: #FF6B35;
            --primary-green: #28A745;
            --secondary-orange: #FF8C42;
            --accent-yellow: #FFD93D;
            --accent-red: #FF6B6B;
            --accent-blue: #4ECDC4;
            --dark-green: #2D5A27;
            --light-green: #90EE90;
            --cream: #FFF8E7;
            --white: #ffffff;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-600: #6c757d;
            --gray-800: #343a40;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background-color: var(--white);
        }
        
        /* Header Styles */
        .header {
            background: var(--white);
            box-shadow: var(--shadow-sm);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow);
        }
        
        .navbar-brand {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--primary-orange) !important;
            text-decoration: none;
        }
        
        .navbar-brand:hover {
            color: var(--secondary-orange) !important;
        }
        
        .navbar-nav .nav-link {
            color: var(--gray-800) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-orange) !important;
            background-color: rgba(255, 107, 53, 0.1);
        }
        
        .btn-outline-danger {
            color: #dc3545;
            border: 2px solid #dc3545;
            border-radius: 25px;
            padding: 8px 20px;
            font-weight: 600;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .btn-outline-danger:hover {
            background: #dc3545;
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }
        
        /* FAQ Header */
        .faq-header {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: var(--white);
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }
        
        .faq-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.2;
        }
        
        .faq-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .faq-content h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .faq-content p {
            font-size: 1.25rem;
            opacity: 0.95;
            font-weight: 400;
        }
        
        /* FAQ Content */
        .faq-section {
            padding: 5rem 0;
            background: var(--cream);
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 1.5rem;
            border-radius: 20px !important;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            background: var(--white);
            overflow: hidden;
        }
        
        .accordion-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .accordion-button {
            background: var(--white);
            border: none;
            border-radius: 20px !important;
            font-weight: 600;
            color: var(--primary-green);
            transition: all 0.3s ease;
            padding: 1.5rem 2rem;
            font-size: 1.1rem;
        }
        
        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: var(--white);
            box-shadow: var(--shadow);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(40, 167, 69, 0.2);
        }
        
        .accordion-button:hover:not(.collapsed) {
            background: linear-gradient(135deg, var(--light-green) 0%, var(--primary-green) 100%);
        }
        
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2328A745'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transition: all 0.3s ease;
        }
        
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .accordion-body {
            background: var(--white);
            border-radius: 0 0 20px 20px;
            line-height: 1.7;
            color: var(--gray-600);
            padding: 2rem;
            font-size: 1rem;
        }
        
        /* Contact Section */
        .contact-section {
            padding: 5rem 0;
            background: var(--white);
        }
        
        .contact-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: 25px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-orange);
        }
        
        .contact-card h3 {
            color: var(--primary-green);
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.75rem;
        }
        
        .contact-card p {
            color: var(--gray-600);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--accent-yellow) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.75rem;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .contact-item h6 {
            color: var(--primary-green);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .contact-item small {
            color: var(--gray-600);
            font-size: 0.9rem;
        }
        
        /* Footer */
        .footer {
            background: var(--dark-green);
            color: var(--white);
            padding: 4rem 0 2rem;
        }
        
        .footer h5 {
            color: var(--accent-yellow);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .footer p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }
        
        .footer ul {
            list-style: none;
            padding: 0;
        }
        
        .footer ul li {
            margin-bottom: 0.75rem;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--accent-yellow);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 2rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .faq-content h1 {
                font-size: 2.5rem;
            }
            
            .accordion-button {
                padding: 1.25rem 1.5rem;
                font-size: 1rem;
            }
            
            .accordion-body {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .faq-content h1 {
                font-size: 2rem;
            }
            
            .accordion-button {
                padding: 1rem 1.25rem;
            }
            
            .accordion-body {
                padding: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-leaf me-2"></i>
                    Green Gold
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- FAQ Header -->
    <div class="faq-header">
        <div class="container faq-content">
            <h1>
                <i class="fas fa-question-circle me-3"></i>
                Frequently Asked Questions
            </h1>
            <p>Everything you need to know about Green Gold Vermicompost</p>
        </div>
    </div>

    <!-- FAQ Content -->
    <section class="faq-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {!! nl2br(e($faq->answer)) !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <h3>Still have questions?</h3>
                        <p>Can't find the answer you're looking for? Please contact our friendly support team.</p>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <h6>Call Us</h6>
                                    <small>+91 98765 43210</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <h6>Email Us</h6>
                                    <small>info@greengold.com</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h6>Visit Us</h6>
                                    <small>Mumbai, India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h5><i class="fas fa-leaf me-2"></i>Green Gold Vermicompost</h5>
                    <p>Your trusted partner for organic vermicompost solutions. We're committed to helping you grow healthier, more productive gardens naturally.</p>
                </div>
                <div class="col-lg-6 mb-4 text-lg-end">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2025 Green Gold Vermicompost. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="me-3">Privacy Policy</a>
                        <a href="#" class="me-3">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
