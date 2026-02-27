<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HealthCare Plus</title>

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
  :root {
    --hc-primary: #1E88E5;
    --hc-primary-dark: #1565C0;
    --hc-accent: #2ECC71;
    --hc-light: #F4F8FB;
    --hc-dark: #1A1A1A;
    --hc-muted: #6c757d;
  }

  body {
    background: var(--hc-light);
    font-family: 'Inter', sans-serif;
  }

  /* Navbar */
  .navbar {
    background: #ffffff !important;
  }

/* Nav Hover */
.navbar .nav-link{
  position: relative;
  font-weight: 500;
  color: #1A1A1A;
  transition: .2s ease;
}

.navbar .nav-link:hover{
  color: var(--hc-primary);
}

.navbar .nav-link::after{
  content:"";
  position:absolute;
  left: 8px;
  bottom: -6px;
  width: 0%;
  height: 2px;
  background: var(--hc-primary);
  border-radius: 999px;
  transition: .25s ease;
}

.navbar .nav-link:hover::after{
  width: calc(100% - 16px);
}

  .logo-text{ font-size: 16px; letter-spacing: .2px; color: var(--hc-dark); }

  .badge-soft {
    background: var(--hc-primary);
    color: white;
    border-radius: 999px;
    padding: 6px 14px;
    font-size: 13px;
  }

  .btn-primary {
    background: var(--hc-primary);
    border: none;
  }

  .btn-primary:hover {
    background: var(--hc-primary-dark);
  }

  .btn-dark {
    background: var(--hc-dark);
  }

  /* Hero Section */
.hero-section{
  height: 530px;
  display: flex;
  align-items: center;
 
}
.hero-glass{
  background: rgba(255,255,255,.06);
  border: 1px solid rgba(255,255,255,.12);
  border-radius: 18px;
  padding: 18px 18px;

}

/* Services */
.service-img{ height:320px; width:100%; object-fit:cover; }

  .feature-card {
    background: white;
    border-radius: 18px;
    padding: 28px;
    transition: .25s ease;
  }

  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,.08);
  }

  .service-card {
    background: white;
    border-radius: 18px;
    overflow: hidden;
    transition: .25s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,.08);
  }

  .section-title {
    color: var(--hc-primary);
  }

  .footer {
    background: #0F172A;
    color: #CBD5E1;
  }

  .footer a {
    color: #CBD5E1;
  }

  .footer a:hover {
    color: white;
  }

  .bg-shape{
  position:absolute;
  border-radius:50%;
  filter: blur(40px);
  opacity:.35;
  z-index:0;
}

.bg-shape-1{
  width:320px;
  height:320px;
  background: #1E88E5;
  top:40px;
  left:-120px;
}

.bg-shape-2{
  width:280px;
  height:280px;
  background: #2ECC71;
  bottom:40px;
  right:-100px;
}

.btn{
  transition: .25s ease;
}

.btn:hover{
  transform: translateY(-2px);
}

.feature-card:hover,
.service-card:hover{
  border: 1px solid rgba(30,136,229,.25);
}

.service-card img{
  transition: .3s ease;
}

.service-card:hover img{
  transform: scale(1.04);
}

.fade-in{
  animation: fadeUp .8s ease both;
}

@keyframes fadeUp{
  from{ opacity:0; transform: translateY(18px); }
  to{ opacity:1; transform: translateY(0); }
}
</style>
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg bg-white border-bottom py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ url('/') }}">
  <img src="{{ asset('images/logo.png') }}" alt="HealthCare Plus" height="54">
  <span class="logo-text">HealthCare Plus</span>
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-auto gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/find-doctor') }}">Find Doctor</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/book-appointment') }}">Book appointment</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
      </ul>

      <div class="d-flex gap-2">
  <a class="btn btn-outline-dark" href="{{ url('/login') }}">Login</a>
  <a class="btn btn-primary" href="{{ url('/register') }}">Register</a>
</div>
    </div>
  </div>
</nav>

<main>
  @yield('content')
</main>

{{-- FOOTER --}}
<footer class="footer mt-5">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="badge-soft">HC+</span>
          <h5 class="mb-0 fw-bold">HealthCare Plus</h5>
        </div>
        <p class="text-muted mb-3">
          Book appointments with trusted doctors, explore services, and manage your health records securely.
        </p>
        <div class="d-flex gap-3">
          <a class="text-dark" href="#"><i class="bi bi-facebook"></i></a>
          <a class="text-dark" href="#"><i class="bi bi-instagram"></i></a>
          <a class="text-dark" href="#"><i class="bi bi-twitter-x"></i></a>
          <a class="text-dark" href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-6 col-lg-2">
        <h6 class="fw-semibold">Quick Links</h6>
        <ul class="list-unstyled text-muted">
          <li><a class="text-decoration-none text-muted" href="{{ url('/') }}">Home</a></li>
          <li><a class="text-decoration-none text-muted" href="{{ url('/find-doctor') }}">Find Doctor</a></li>
          <li><a class="text-decoration-none text-muted" href="{{ url('/services') }}">Services</a></li>
          <li><a class="text-decoration-none text-muted" href="{{ url('/book-appointment') }}">Appointment</a></li>
        </ul>
      </div>

      <div class="col-6 col-lg-2">
        <h6 class="fw-semibold">Support</h6>
        <ul class="list-unstyled text-muted">
          <li><a class="text-decoration-none text-muted" href="{{ url('/contact') }}">Contact Us</a></li>
          <li><a class="text-decoration-none text-muted" href="#">Privacy Policy</a></li>
          <li><a class="text-decoration-none text-muted" href="#">Terms</a></li>
        </ul>
      </div>

      <div class="col-lg-4">
        <h6 class="fw-semibold">Contact</h6>
        <p class="text-muted mb-1"><i class="bi bi-telephone me-2"></i> +1 (647) - 1234</p>
        <p class="text-muted mb-1"><i class="bi bi-envelope me-2"></i> support@healthcareplus.com</p>
        <p class="text-muted mb-0"><i class="bi bi-geo-alt me-2"></i> Toronto, ON, Canada</p>
      </div>
    </div>

    <hr class="my-4">

    <div class="d-flex flex-column flex-md-row justify-content-between text-muted small">
      <div>© {{ date('Y') }} HealthCare Plus. All rights reserved.</div>
      <div>Built for HTTP 5310 Capstone</div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>