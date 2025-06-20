<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['hero_title'] }} - Wisata Alam, Budaya & Sejarah</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary-gradient: linear-gradient(135deg, #0d9488 0%, #14b8a6 50%, #2dd4bf 100%);
            --secondary-gradient: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            --accent-gradient: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --text-light: #94a3b8;
            --surface: #ffffff;
            --surface-secondary: #f8fafc;
            --border-light: rgba(15, 23, 42, 0.08);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            --radius-2xl: 32px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--surface);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Modern Glassmorphism Navigation */
        .nav-bar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 0.5rem 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid var(--border-light);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
            align-content: center;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 350;
            font-size: 0.8rem;
            position: relative;
            padding: 0.2rem 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .nav-links a:hover {
            color: #0d9488;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--primary-gradient);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1px;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Modern Hero Section */
        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
            opacity: 0.7;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                135deg,
                rgba(13, 148, 136, 0.3) 0%,
                rgba(20, 184, 166, 0.4) 50%,
                rgba(45, 212, 191, 0.3) 100%
            );
            z-index: -1;
        }


        .hero-content {
            max-width: 900px;
            padding: 2rem;
            border-radius: 24px;
            animation: fadeInUp 1s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
            z-index: 10;
            position: relative;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

         .hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: #f8fafc;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            text-shadow: none;
        }

        .hero-subtitle {
            font-size: 1rem;
            color: #f8fafc;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .hero-description {
            font-size: 1rem;
            color: #424242;
            margin-bottom: 0.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }


        /* Video Controls */
        .video-controls {
            position: absolute;
            bottom: 30px;
            right: 30px;
            z-index: 5;
            display: flex;
            gap: 12px;
        }

        .video-btn {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        .video-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
            box-shadow: var(--shadow-lg);
        }

        .video-btn.active {
            background: var(--primary-gradient);
        }

        /* Modern Button Design */
        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: var(--radius-xl);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            box-shadow: var(--shadow-lg);
            letter-spacing: -0.01em;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
            filter: brightness(1.1);
        }

        /* Modern Section Styling */
        .section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 6rem 2rem;
            background: var(--surface);
        }

        .section-title {
            font-size: clamp(2.5rem, 6vw, 3.5rem);
            font-weight: 800;
            text-align: center;
            margin-bottom: 4rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            letter-spacing: -0.02em;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        /* Modern Welcome Message */
        .welcome-message {
            background: var(--surface);
            padding: 4rem 3rem;
            border-radius: var(--radius-2xl);
            border: 1px solid var(--border-light);
            margin: 4rem 0;
            text-align: center;
            font-style: italic;
            font-size: 1.2rem;
            color: var(--text-primary);
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .welcome-message::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .javanese-text {
            color: #0d9488;
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.4rem;
            letter-spacing: -0.01em;
        }

        /* Modern Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .gallery-item {
            background: var(--surface);
            border-radius: var(--radius-xl);
            overflow: hidden;
            border: 1px solid var(--border-light);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            box-shadow: var(--shadow-md);
            position: relative;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(13, 148, 136, 0.3);
        }

        .gallery-image {
            width: 100%;
            height: 250px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-item:hover .gallery-image img {
            transform: scale(1.05);
        }

        .gallery-image .fallback-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            z-index: 2;
        }

        .gallery-title {
            padding: 2rem 2rem 0.5rem;
            font-size: 1.5rem;
            color: var(--text-primary);
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        .gallery-description {
            padding: 0 2rem 2rem;
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Modern Package Cards */
        .package-section {
            background: var(--surface-secondary);
            padding: 6rem 2rem;
            margin: 6rem 0;
        }

        .package-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .package-card {
            background: var(--surface);
            border-radius: var(--radius-xl);
            padding: 2rem;
            border: 1px solid var(--border-light);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .package-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(13, 148, 136, 0.3);
        }

        .package-card.featured {
            border: 2px solid #0d9488;
            box-shadow: 0 20px 40px rgba(13, 148, 136, 0.15);
        }

        .package-card.featured::before {
            height: 6px;
            background: var(--accent-gradient);
        }

        .package-header {
            margin-bottom: 2rem;
        }

        .package-type {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .package-price {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .package-unit {
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .package-features {
            list-style: none;
            margin-bottom: 2rem;
            text-align: left;
        }

        .package-features li {
            padding: 0.5rem 0;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.95rem;
        }

        .package-features li::before {
            content: '✓';
            color: #0d9488;
            font-weight: bold;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .package-btn {
            width: 100%;
            background: var(--primary-gradient);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: var(--radius-md);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            letter-spacing: -0.01em;
        }

        .package-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            filter: brightness(1.1);
        }

        /* Modern Facilities Grid */
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 1rem;
            margin-top: 4rem;
        }

        .facility-card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border-light);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: stretch;
        }

        .facility-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--primary-gradient);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1;
        }

        .facility-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(13, 148, 136, 0.2);
        }

        .facility-card:hover::before {
            transform: scaleY(1);
        }

        .facility-image {
            width: 80px;
            height: 100%;
            min-height: 80px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            border-radius: var(--radius-lg) 0 0 var(--radius-lg);
        }

        .facility-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: var(--radius-lg) 0 0 var(--radius-lg);
        }

        .facility-image .fallback-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem;
            z-index: 2;
        }

        .facility-content {
            flex: 1;
            min-width: 0;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .facility-name {
            font-size: 1.25rem;
            color: var(--text-primary);
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
            line-height: 1.3;
        }

        .facility-description {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.6;
            font-weight: 400;
        }

        /* Modern Price Section */
        .price-section {
            text-align: center;
            padding: 4rem 3rem;
            background: var(--surface);
            border-radius: var(--radius-2xl);
            border: 1px solid var(--border-light);
            margin: 4rem 0;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .price-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .price-title {
            font-size: 3rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 3rem;
            letter-spacing: -0.02em;
        }

        .price-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .price-card {
            background: var(--primary-gradient);
            padding: 3rem 2rem;
            border-radius: var(--radius-xl);
            color: white;
            font-weight: 600;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .price-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .price-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .price-type {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            opacity: 0.95;
            font-weight: 600;
        }

        .price-amount {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        /* Modern Location Section */
        .location-section {
            background: var(--surface);
            padding: 4rem 3rem;
            border-radius: var(--radius-2xl);
            border: 1px solid var(--border-light);
            margin: 4rem 0;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .location-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .location-title {
            text-align: center;
            color: var(--text-primary);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            letter-spacing: -0.01em;
        }

        .location-info {
            text-align: center;
            font-size: 1.1rem;
            color: var(--text-secondary);
            line-height: 1.8;
            max-width: 600px;
            margin: 0 auto;
        }

        .location-highlight {
            color: #0d9488;
            font-weight: 600;
        }

        /* Modern Footer */
        .footer {
            background: var(--secondary-gradient);
            color: white;
            text-align: center;
            padding: 5rem 2rem 3rem;
            margin-top: 6rem;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 600'%3E%3Cpath d='M0,200 Q250,50 500,150 T1000,100 L1000,600 L0,600 Z' fill='%23ffffff' opacity='0.03'/%3E%3C/svg%3E") bottom center/cover no-repeat;
            pointer-events: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content {
                padding: 2.5rem 2rem;
                margin: 0 1rem;
            }

            .nav-links {
                display: none;
            }

            .section {
                padding: 4rem 1.5rem;
            }

            .package-grid,
            .gallery-grid,
            .facilities-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .floating-element {
                display: none;
            }
        }

        @media (max-width: 1024px) and (min-width: 769px) {
            .package-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Enhanced Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth scroll enhancement */
        html {
            scroll-behavior: smooth;
        }

        /* Focus states for accessibility */
        .btn-primary:focus,
        .package-btn:focus,
        .video-btn:focus {
            outline: 2px solid #0d9488;
            outline-offset: 2px;
        }

        .nav-links a:focus {
            outline: 2px solid #0d9488;
            outline-offset: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <nav class="nav-bar">
        <div class="nav-container">
            <div class="logo"> <img src="{{ asset('logo/icon.png') }}" style="max-width: 45px;"/> {{ $settings['hero_title'] }}</div>
            <ul class="nav-links">
                <li><a onclick="scrollToSection('home')">Beranda</a></li>
                <li><a onclick="scrollToSection('galeri')">Galeri</a></li>
                <li><a onclick="scrollToSection('paket')">Paket Wisata</a></li>
                <li><a onclick="scrollToSection('fasilitas')">Fasilitas</a></li>
                <li><a onclick="scrollToSection('harga')">Harga</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="hero-video" id="heroVideo">
            <source src="{{ asset('videos/hero-background.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/hero-background.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>

        <!-- Video Overlay -->
        <div class="hero-overlay"></div>

        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>

        <!-- Hero Content -->
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-sm-2">
                <img src="{{ asset("images/background-image.png") }}" class="img-fluid" style="max-width: 180px;" />
                </div>
                <div class="col-sm-4">
                <h1 class="hero-title">{{ $settings['hero_title'] }}</h1>
                <p class="hero-subtitle">{{ $settings['hero_subtitle'] }}</p>
                <p class="hero-description">{{ $settings['hero_description'] }}</p>
                <a href="#galeri" class="btn-primary">
                    <span>Jelajahi Wisata</span>
                    <span>→</span>
                </a>
                </div>
            </div>
            </div>
    </section>

    <section class="section">
        <div class="welcome-message fade-in">
            <div class="javanese-text">"{{ $settings['welcome_javanese'] }}"</div>
            <div>({{ $settings['welcome_indonesian'] }})</div>
        </div>
    </section>

    @if($galleryItems->count() > 0)
    <section id="galeri" class="section">
        <h2 class="section-title">Galeri Wisata</h2>
        <div class="gallery-grid">
            @foreach($galleryItems as $item)
            <div class="gallery-item fade-in" onclick="openGallery('{{ $item->id }}')">
                <div class="gallery-image">
                    @if($item->image_url_full)
                        <img src="{{ $item->image_url_full }}" alt="{{ $item->title }}"
                             loading="lazy"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="fallback-icon" style="display: none;">{{ $item->icon ?? '🏔️' }}</div>
                    @else
                        <div class="fallback-icon">{{ $item->icon ?? '🏔️' }}</div>
                    @endif
                </div>
                <div class="gallery-title">{{ $item->title }}</div>
                <div class="gallery-description">{{ $item->description }}</div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    @if($packages->count() > 0)
    <section id="paket" class="package-section">
        <div class="section">
            <h2 class="section-title">Paket Wisata Karag Hills</h2>
            <p style="text-align: center; color: var(--text-secondary); margin-bottom: 3rem; font-size: 1.2rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                Pilih paket wisata yang sesuai dengan kebutuhan dan budget Anda untuk pengalaman terbaik
            </p>
            <div class="package-grid">
                @foreach($packages as $package)
                <div class="package-card fade-in {{ $package->is_featured ? 'featured' : '' }}">
                    <div class="package-header">
                        <h3 class="package-type">{{ $package->icon }} {{ $package->name }}</h3>
                        <div class="package-price">{{ number_format($package->price, 0, ',', '.') }}K</div>
                        <div class="package-unit">{{ $package->unit }}</div>
                    </div>
                    <ul class="package-features">
                        @foreach($package->features as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <button class="package-btn" onclick="bookPackage('{{ $package->id }}', '{{ $package->name }}', '{{ number_format($package->price, 0, ',', '.') }}K {{ $package->unit }}')">Pesan Sekarang</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($facilities->count() > 0)
    <section id="fasilitas" class="section">
        <h2 class="section-title">Fasilitas Lengkap</h2>
        <p style="text-align: center; color: var(--text-secondary); margin-bottom: 3rem; font-size: 1.2rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
            Nikmati berbagai fasilitas modern dan nyaman untuk mendukung pengalaman wisata Anda
        </p>
        <div class="facilities-grid">
            @foreach($facilities as $facility)
            <div class="facility-card fade-in">
                <div class="facility-image">
                    @if(isset($facility->image_url) && $facility->image_url)
                        <img src="{{ $facility->image_url }}" alt="{{ $facility->name }}"
                             loading="lazy"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="fallback-icon" style="display: none;">{{ $facility->icon ?? '🏢' }}</div>
                    @else
                        <div class="fallback-icon">{{ $facility->icon ?? '🏢' }}</div>
                    @endif
                </div>
                <div class="facility-content">
                    <div class="facility-name">{{ $facility->name }}</div>
                    <div class="facility-description">{{ $facility->description }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    <section id="harga" class="section">
        <div class="price-section fade-in">
            <h2 class="price-title">Tarif Parkir</h2>
            <p style="color: var(--text-secondary); margin-bottom: 3rem; font-size: 1.1rem;">
                Tarif parkir yang terjangkau dengan akses penuh ke seluruh area wisata
            </p>
            <div class="price-grid">
                <div class="price-card">
                    <div class="price-type">🏍️ Sepeda Motor</div>
                    <div class="price-amount">Rp {{ number_format($settings['motor_parking_price'], 0, ',', '.') }}</div>
                </div>
                <div class="price-card">
                    <div class="price-type">🚗 Mobil</div>
                    <div class="price-amount">Rp {{ number_format($settings['car_parking_price'], 0, ',', '.') }}</div>
                </div>
            </div>
            <p style="margin-top: 2rem; font-style: italic; color: var(--text-light); font-size: 0.95rem;">
                *Harga sudah termasuk akses ke seluruh area wisata dan fasilitas
            </p>
        </div>
    </section>

    <section class="section">
        <div class="location-section fade-in">
            <h3 class="location-title">📍 Lokasi & Akses</h3>
            <div class="location-info">
                <strong class="location-highlight">{{ $settings['location_title'] }}</strong><br>
                {{ $settings['location_description'] }}<br><br>
                <span class="location-highlight">Tepian sungai dengan panorama yang memukau</span><br>
                Mudah diakses dari berbagai arah dengan jalan yang sudah beraspal dan kondisi yang baik
            </div>
        </div>
    </section>

    <footer class="footer">
        <h3 style="font-size: 2.5rem; margin-bottom: 1.5rem; font-weight: 800; letter-spacing: -0.02em;">{{ $settings['hero_title'] }}</h3>
        <p style="font-size: 1.2rem; margin-bottom: 1.5rem; opacity: 0.9; font-weight: 500;">Saksi Sejarah, Warisan Budaya</p>
        <p style="opacity: 0.8; font-size: 1.1rem; max-width: 600px; margin: 0 auto 3rem; line-height: 1.6;">
            Setiap langkah di {{ $settings['hero_title'] }} adalah perjalanan mengenal jati diri bangsa dan menikmati keindahan alam yang luar biasa
        </p>
        <p style="margin-top: 3rem; opacity: 0.6; font-size: 0.95rem;">© {{ date('Y') }} {{ $settings['hero_title'] }} - Desa Wisata Timbang</p>
    </footer>

    <script>
        // Smooth scroll function
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                const offsetTop = element.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }

        // Gallery modal placeholder
        function openGallery(itemId) {
            alert('Galeri foto akan segera hadir dengan koleksi lengkap dan tampilan modern!');
        }

        // Enhanced package booking functionality
        function bookPackage(packageId, packageName, packagePrice) {
            const message = `🏔️ *Pemesanan Paket Wisata*\n\nHalo! Saya tertarik untuk memesan:\n📦 *${packageName}*\n💰 *${packagePrice}*\n\nMohon informasi lebih lanjut mengenai:\n✅ Ketersediaan tanggal\n✅ Proses pemesanan\n✅ Metode pembayaran\n✅ Detail itinerary\n\nTerima kasih! 🙏`;

            const phoneNumber = '6285707137030';
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

            window.open(whatsappUrl, '_blank');
        }

        // Video control functionality
        const heroVideo = document.getElementById('heroVideo');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const playPauseIcon = document.getElementById('playPauseIcon');
        const muteBtn = document.getElementById('muteBtn');
        const muteIcon = document.getElementById('muteIcon');

        function toggleVideoPlayback() {
            if (heroVideo.paused) {
                heroVideo.play().catch(error => {
                    console.log('Video play failed:', error);
                });
                playPauseIcon.textContent = '⏸️';
                playPauseBtn.classList.remove('active');
            } else {
                heroVideo.pause();
                playPauseIcon.textContent = '▶️';
                playPauseBtn.classList.add('active');
            }
        }

        function toggleVideoMute() {
            if (heroVideo.muted) {
                heroVideo.muted = false;
                muteIcon.textContent = '🔊';
                muteBtn.classList.remove('active');
            } else {
                heroVideo.muted = true;
                muteIcon.textContent = '🔇';
                muteBtn.classList.add('active');
            }
        }

        // Enhanced video loading and error handling
        function handleVideoLoad() {
            heroVideo.addEventListener('loadeddata', function() {
                console.log('Video loaded successfully');
                heroVideo.play().catch(error => {
                    console.log('Auto-play prevented:', error);
                    playPauseIcon.textContent = '▶️';
                    playPauseBtn.classList.add('active');
                });
            });

            heroVideo.addEventListener('error', function(e) {
                console.error('Video loading error:', e);
                document.querySelector('.video-controls').style.display = 'none';
                document.querySelector('.hero-section').style.background =
                    'linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%)';
            });

            heroVideo.addEventListener('canplay', function() {
                if (heroVideo.paused) {
                    heroVideo.play().catch(error => {
                        console.log('Auto-play was prevented:', error);
                    });
                }
            });
        }

        // Modern parallax effect
        function modernParallaxEffect() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.floating-element');
            const rate = scrolled * -0.3;

            parallaxElements.forEach((element, index) => {
                const speed = 0.3 + (index * 0.15);
                const yPos = -(scrolled * speed);
                const rotation = scrolled * 0.05;
                element.style.transform = `translate3d(0, ${yPos}px, 0) rotate(${rotation}deg)`;
            });

            // Hero content parallax
            const heroContent = document.querySelector('.hero-content');
            if (heroContent && scrolled < window.innerHeight) {
                heroContent.style.transform = `translate3d(0, ${rate}px, 0)`;
            }
        }

        // Scroll animations and effects
        let ticking = false;

        function updateAnimations() {
            modernParallaxEffect();

            // Enhanced navbar effect
            const navbar = document.querySelector('.nav-bar');
            const scrollPosition = window.scrollY;

            if (scrollPosition > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.08)';
                navbar.style.backdropFilter = 'blur(20px)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.8)';
                navbar.style.boxShadow = 'none';
                navbar.style.backdropFilter = 'blur(20px)';
            }

            ticking = false;
        }

        // Intersection Observer for fade-in animations
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(el);
            });
        }

        // Enhanced scroll event handling
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateAnimations);
                ticking = true;
            }
        }, { passive: true });

        // Enhanced DOMContentLoaded event
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize video handling
            handleVideoLoad();

            // Initialize scroll animations
            initScrollAnimations();

            // Video intersection observer for performance
            const videoObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (heroVideo.paused && heroVideo.readyState >= 3) {
                            heroVideo.play().catch(error => {
                                console.log('Play attempt failed:', error);
                            });
                        }
                    } else {
                        if (!heroVideo.paused) {
                            heroVideo.pause();
                        }
                    }
                });
            }, { threshold: 0.5 });

            videoObserver.observe(heroVideo);

            // Enhanced button interactions
            document.querySelectorAll('.btn-primary, .package-btn').forEach(btn => {
                btn.addEventListener('mouseenter', function(e) {
                    this.style.transform = 'translateY(-3px) scale(1.02)';
                });

                btn.addEventListener('mouseleave', function(e) {
                    this.style.transform = 'translateY(0) scale(1)';
                });

                btn.addEventListener('mousedown', function(e) {
                    this.style.transform = 'translateY(-1px) scale(0.98)';
                });

                btn.addEventListener('mouseup', function(e) {
                    this.style.transform = 'translateY(-3px) scale(1.02)';
                });
            });

            // Enhanced gallery item interactions
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.02)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Delayed video play attempt
            setTimeout(() => {
                if (heroVideo.paused && heroVideo.readyState >= 3) {
                    heroVideo.play().catch(error => {
                        console.log('Delayed play attempt failed:', error);
                    });
                }
            }, 1500);
        });

        // Performance optimization
        window.addEventListener('beforeunload', () => {
            if (!heroVideo.paused) {
                heroVideo.pause();
            }
        });
    </script>
</body>
</html>
