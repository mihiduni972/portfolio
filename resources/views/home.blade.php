<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mihiduni Vinethma | Web Developer</title>

    <!-- Professional Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Devicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <style>
        :root {
            --bg: #07090d;
            --bg-soft: #0c1017;
            --card: #10151d;
            --card-hover: #141a23;
            --text: #f4f6f8;
            --muted: #9ba5b4;
            --muted-light: #c4ccd7;
            --accent: #d7a85b;
            --accent-light: #e8c985;
            --line: rgba(255,255,255,.09);
            --line-hover: rgba(215,168,91,.45);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        html {
            scroll-padding-top: 90px;
        }

        body {
            font-family: 'Inter', Arial, sans-serif;
            background:
                radial-gradient(circle at 85% 10%, rgba(215,168,91,.055), transparent 25%),
                var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background-image:
                linear-gradient(rgba(255,255,255,.018) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.018) 1px, transparent 1px);
            background-size: 70px 70px;
            opacity: .25;
            z-index: -1;
        }

        a {
            color: inherit;
        }

        .container {
            width: min(1140px, calc(100% - 40px));
            margin: auto;
        }

        /* NAVBAR */

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(7,9,13,.88);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--line);
        }

        .nav-container {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            text-decoration: none;
            font-size: 23px;
            font-weight: 700;
            letter-spacing: -.5px;
            color: var(--text);
            white-space: nowrap;
        }

        .logo:hover {
            color: var(--accent-light);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            position: relative;
            text-decoration: none;
            color: #b9c1cd;
            font-size: 13px;
            transition: .25s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--accent-light);
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 0;
            height: 1px;
            background: var(--accent);
            transition: .25s;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .cv-btn {
            text-decoration: none;
            border: 1px solid rgba(215,168,91,.45);
            border-radius: 6px;
            padding: 9px 17px;
            color: var(--accent-light);
            font-size: 12px;
            transition: .25s;
            white-space: nowrap;
        }

        .cv-btn:hover {
            background: rgba(215,168,91,.08);
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        /* COMMON SECTIONS */

        section {
            position: relative;
            padding: 105px 0;
        }

        .section-heading {
            margin-bottom: 48px;
        }

        .section-heading.center {
            text-align: center;
        }

        /* UPDATED: Inter font for ALL section headings */

        .section-heading h2 {
            font-family: 'Inter', Arial, sans-serif;
            font-size: clamp(38px, 5vw, 58px);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.8px;
            margin-bottom: 15px;
        }

        .section-heading h2 span {
            color: var(--accent);
        }

        .section-heading p {
            color: var(--muted);
            max-width: 650px;
            font-size: 15px;
        }

        .section-heading.center p {
            margin: auto;
        }

        .line {
            width: 55px;
            height: 2px;
            background: var(--accent);
            margin-top: 19px;
        }

        .center .line {
            margin-left: auto;
            margin-right: auto;
        }

        /* HERO */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 120px;
            border-bottom: 1px solid var(--line);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            align-items: center;
            gap: 80px;
        }

        /* UPDATED: Inter font for main heading */

        .hero h1 {
            font-family: 'Inter', Arial, sans-serif;
            font-size: clamp(52px, 7vw, 82px);
            font-weight: 700;
            line-height: .98;
            letter-spacing: -2px;
            margin-bottom: 24px;
        }

        .hero h1 span {
            display: block;
            color: var(--accent);
        }

        .hero-role {
            font-size: 21px;
            color: #e1e5eb;
            margin-bottom: 18px;
        }

        .hero-role span {
            color: var(--accent);
        }

        .hero-description {
            max-width: 650px;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            padding: 11px 21px;
            border-radius: 6px;
            font-family: 'Inter', Arial, sans-serif;
            font-weight: 600;
            font-size: 13px;
            transition: .25s;
        }

        .btn-primary {
            color: #15120c;
            background: var(--accent);
            border: 1px solid var(--accent);
        }

        .btn-primary:hover {
            background: var(--accent-light);
            transform: translateY(-2px);
        }

        .btn-outline {
            color: var(--text);
            border: 1px solid rgba(255,255,255,.17);
            background: transparent;
        }

        .btn-outline:hover {
            border-color: var(--accent);
            color: var(--accent-light);
            transform: translateY(-2px);
        }

        /* PROFILE PHOTO */

        .hero-photo {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .photo-frame {
            width: min(370px, 75vw);
            aspect-ratio: 1;
            position: relative;
            padding: 7px;
            border: 1px solid rgba(215,168,91,.55);
            border-radius: 50%;
        }

        .photo-frame::before {
            content: "";
            position: absolute;
            inset: -13px;
            border: 1px solid rgba(215,168,91,.14);
            border-radius: 50%;
        }

        .profile-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            background: #111722;
            border: 5px solid var(--bg);
        }

        /* ABOUT */

        #about {
            background: var(--bg-soft);
        }

        .about-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 65px;
            align-items: start;
        }

        .about-card {
            border: 1px solid var(--line);
            background: var(--card);
            border-radius: 12px;
            padding: 28px;
        }

        .about-card h3 {
            color: var(--accent);
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .about-info {
            display: grid;
            gap: 18px;
        }

        .info-item strong {
            display: block;
            font-size: 10px;
            color: #737e8d;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2px;
        }

        .info-item span {
            color: #e3e7ed;
            font-size: 14px;
        }

        .about-text p {
            color: var(--muted);
            margin-bottom: 18px;
            font-size: 15px;
            line-height: 1.9;
        }

        /* TECHNOLOGIES */

        .technology-section {
            margin-top: 20px;
        }

        .technology-group {
            margin-bottom: 38px;
        }

        .technology-group-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
            color: #e5e9ef;
            font-weight: 600;
            margin-bottom: 17px;
        }

        .technology-group-title::after {
            content: "";
            height: 1px;
            flex: 1;
            background: var(--line);
        }

        .technology-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .technology-card {
            min-height: 94px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 10px;
            border: 1px solid var(--line);
            background: var(--card);
            border-radius: 9px;
            transition: .25s;
        }

        .technology-card:hover {
            border-color: var(--line-hover);
            background: var(--card-hover);
            transform: translateY(-3px);
        }

        .technology-card i {
            font-size: 32px;
            color: #cbd2dc;
            transition: .25s;
        }

        .technology-card:hover i {
            color: var(--accent-light);
        }

        .technology-card span {
            color: #c4ccd7;
            font-size: 11px;
            font-weight: 500;
            text-align: center;
        }

        /* CURRENTLY LEARNING */

        .learning-card {
            min-height: 105px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 15px;
            border: 1px solid rgba(215,168,91,.22);
            background: rgba(215,168,91,.035);
            border-radius: 9px;
            transition: .25s;
        }

        .learning-card:hover {
            border-color: rgba(215,168,91,.45);
            transform: translateY(-3px);
        }

        .learning-card i {
            font-size: 32px;
            color: #cbd2dc;
        }

        .learning-card strong {
            font-size: 11px;
            color: #e1e5eb;
        }

        .learning-card small {
            font-size: 9px;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* SOFT SKILLS */

        .soft-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .soft-skill {
            padding: 9px 14px;
            border: 1px solid var(--line);
            background: var(--card);
            color: var(--muted-light);
            border-radius: 6px;
            font-size: 12px;
        }

        /* EDUCATION AND EXPERIENCE */

        #education {
            background: var(--bg-soft);
        }

        .timeline {
            position: relative;
            max-width: 920px;
            margin: auto;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 9px;
            top: 7px;
            bottom: 7px;
            width: 1px;
            background: rgba(215,168,91,.35);
        }

        .timeline-item {
            position: relative;
            padding-left: 40px;
            margin-bottom: 25px;
        }

        .timeline-dot {
            position: absolute;
            left: 3px;
            top: 7px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: var(--bg);
            border: 2px solid var(--accent);
        }

        .timeline-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 11px;
            padding: 24px;
            transition: .25s;
        }

        .timeline-card:hover {
            border-color: rgba(215,168,91,.28);
        }

        .timeline-card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .timeline-card .sub {
            color: var(--accent);
            font-size: 12px;
            margin-bottom: 11px;
        }

        .timeline-card p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .gpa-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 9px;
            margin-top: 18px;
        }

        .gpa {
            border: 1px solid var(--line);
            background: rgba(255,255,255,.025);
            border-radius: 7px;
            padding: 11px;
            text-align: center;
        }

        .gpa strong {
            display: block;
            color: var(--accent);
            font-size: 17px;
        }

        .gpa small {
            color: #77818f;
            font-size: 10px;
        }

        /* PROJECTS */

        #projects {
            background: var(--bg);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .project-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            overflow: hidden;
            transition: .3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            border-color: rgba(215,168,91,.35);
        }

        .project-image {
            height: 175px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #111722, #0b0e14);
            border-bottom: 1px solid var(--line);
        }

        /* UPDATED: Inter instead of Playfair Display */

        .project-image strong {
            display: block;
            color: var(--accent-light);
            font-family: 'Inter', Arial, sans-serif;
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .project-image span {
            color: #707b8b;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .project-content {
            padding: 22px;
        }

        .project-tag {
            color: var(--accent);
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .project-content h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 6px 0 9px;
        }

        .project-content p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
            margin-bottom: 13px;
        }

        .tech {
            color: #8994a3;
            font-size: 11px;
            margin-bottom: 17px;
        }

        .project-link {
            display: inline-flex;
            text-decoration: none;
            border: 1px solid rgba(215,168,91,.4);
            border-radius: 5px;
            padding: 7px 12px;
            font-size: 11px;
            color: var(--accent-light);
            transition: .25s;
        }

        .project-link:hover {
            background: rgba(215,168,91,.08);
            border-color: var(--accent);
        }

        /* CONTACT */

        #contact {
            background: var(--bg-soft);
            padding-bottom: 85px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 60px;
        }

        .contact-details {
            margin-top: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 17px 0;
            border-bottom: 1px solid var(--line);
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(215,168,91,.35);
            border-radius: 7px;
            color: var(--accent);
            font-size: 16px;
        }

        .contact-icon i {
            font-size: 16px;
        }

        .contact-item strong {
            display: block;
            color: var(--accent);
            font-size: 10px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .contact-item a,
        .contact-item span {
            color: #d9dee6;
            text-decoration: none;
            font-size: 13px;
        }

        .contact-item a:hover {
            color: var(--accent-light);
        }

        .socials {
            display: flex;
            gap: 9px;
            margin-top: 23px;
        }

        .social {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: 1px solid var(--line);
            border-radius: 6px;
            color: #b9c2ce;
            transition: .25s;
        }

        .social i {
            font-size: 17px;
        }

        .social:hover {
            color: var(--accent);
            border-color: rgba(215,168,91,.5);
            transform: translateY(-2px);
        }

        .contact-form {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 28px;
        }

        .contact-form h3 {
            color: var(--accent);
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 13px;
        }

        .form-control {
            width: 100%;
            border: 1px solid rgba(255,255,255,.11);
            background: rgba(0,0,0,.16);
            color: white;
            border-radius: 7px;
            padding: 13px 14px;
            outline: none;
            font-family: 'Inter', Arial, sans-serif;
            font-size: 13px;
            transition: .25s;
        }

        .form-control::placeholder {
            color: #657080;
        }

        .form-control:focus {
            border-color: rgba(215,168,91,.55);
        }

        textarea.form-control {
            min-height: 135px;
            resize: vertical;
        }

        .send-btn {
            width: 100%;
            border: 0;
            cursor: pointer;
            margin-top: 4px;
        }

        /* FOOTER */

        footer {
            border-top: 1px solid var(--line);
            padding: 23px 0;
            color: #657080;
            font-size: 11px;
            text-align: center;
            background: #06080b;
        }

        /* RESPONSIVE DESIGN */

        @media (max-width: 950px) {
            .nav-links {
                gap: 16px;
            }

            .cv-btn {
                display: none;
            }

            .hero-grid,
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                text-align: center;
            }

            .hero-description {
                margin: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .hero-photo {
                order: -1;
            }

            .photo-frame {
                width: 280px;
            }

            .technology-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 700px) {
            .nav-container {
                min-height: 68px;
            }

            .logo {
                font-size: 19px;
            }

            .nav-links {
                gap: 10px;
            }

            .nav-links a {
                font-size: 10px;
            }

            .nav-links li:nth-child(4),
            .nav-links li:nth-child(5) {
                display: none;
            }

            section {
                padding: 80px 0;
            }

            .container {
                width: min(100% - 28px, 1140px);
            }

            .hero h1 {
                font-size: 50px;
            }

            .hero-role {
                font-size: 18px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .technology-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gpa-row {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 450px) {
            .nav-links {
                gap: 7px;
            }

            .nav-links li:nth-child(3) {
                display: none;
            }

            .hero h1 {
                font-size: 42px;
            }

            .photo-frame {
                width: 225px;
            }

            .technology-card {
                min-height: 85px;
            }

            .technology-card i {
                font-size: 27px;
            }

            .technology-card span {
                font-size: 10px;
            }

            .contact-form {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->

<nav>
    <div class="container nav-container">
        <a href="#home" class="logo">Mihiduni</a>

        <ul class="nav-links">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <a href="{{ asset('cv/Mihiduni-Vinethma-CV.pdf') }}" class="cv-btn" download>
            Download CV
        </a>
    </div>
</nav>

<!-- HERO -->

<section class="hero" id="home">
    <div class="container hero-grid">
        <div>
            <h1>
                Hi, I'm
                <span>Mihiduni Vinethma</span>
            </h1>

            <div class="hero-role">
                Web Developer
                <span>building modern web applications.</span>
            </div>

            <p class="hero-description">
                Motivated IT professional with a strong foundation
                in software and web development. I build responsive,
                user-friendly and database-driven applications using
                modern technologies and clean, maintainable code.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="btn btn-primary">View My Projects →</a>
                <a href="#contact" class="btn btn-outline">Contact Me</a>
            </div>
        </div>

        <div class="hero-photo">
            <div class="photo-frame">
                <img
                    src="{{ asset('images/profile.PNG') }}"
                    alt="Mihiduni Vinethma"
                    class="profile-photo"
                >
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->

<section id="about">
    <div class="container">
        <div class="section-heading">
            <h2>About <span>Me</span></h2>
            <p>A brief overview of my background, interests and professional direction.</p>
            <div class="line"></div>
        </div>

        <div class="about-grid">
            <div class="about-card">
                <h3>Quick Information</h3>

                <div class="about-info">
                    <div class="info-item">
                        <strong>Name</strong>
                        <span>Mihiduni Vinethma</span>
                    </div>

                    <div class="info-item">
                        <strong>Specialization</strong>
                        <span>Web Development</span>
                    </div>

                    <div class="info-item">
                        <strong>Education</strong>
                        <span>HNDIT – SLIATE Ratnapura</span>
                    </div>

                    <div class="info-item">
                        <strong>Location</strong>
                        <span>Deraniyagala, Sri Lanka</span>
                    </div>
                </div>
            </div>

            <div class="about-text">
                <p>
                    I am an IT professional with a strong foundation in software
                    and web development. My technical background includes frontend
                    development, backend development, databases and CMS platforms.
                </p>

                <p>
                    I have practical experience developing web applications using
                    technologies such as HTML, CSS, JavaScript, PHP, Laravel,
                    React, Node.js, Express.js, MySQL and PostgreSQL.
                </p>

                <p>
                    I am currently expanding my knowledge in technologies such as
                    .NET and MongoDB while continuously improving my development,
                    problem-solving and professional skills.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->

<section id="skills">
    <div class="container">
        <div class="section-heading center">
            <h2>Technologies <span>&amp; Skills</span></h2>
            <p>
                Technologies and tools I have learned and used through academic,
                industrial training and personal projects.
            </p>
            <div class="line"></div>
        </div>

        <div class="technology-section">

            <div class="technology-group">
                <div class="technology-group-title">Frontend Development</div>
                <div class="technology-grid">
                    <div class="technology-card"><i class="devicon-html5-plain"></i><span>HTML5</span></div>
                    <div class="technology-card"><i class="devicon-css3-plain"></i><span>CSS3</span></div>
                    <div class="technology-card"><i class="devicon-javascript-plain"></i><span>JavaScript</span></div>
                    <div class="technology-card"><i class="devicon-react-original"></i><span>React</span></div>
                    <div class="technology-card"><i class="devicon-bootstrap-plain"></i><span>Bootstrap</span></div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Backend Development</div>
                <div class="technology-grid">
                    <div class="technology-card"><i class="devicon-php-plain"></i><span>PHP</span></div>
                    <div class="technology-card"><i class="devicon-laravel-original"></i><span>Laravel</span></div>
                    <div class="technology-card"><i class="devicon-nodejs-plain"></i><span>Node.js</span></div>
                    <div class="technology-card"><i class="devicon-express-original"></i><span>Express.js</span></div>
                    <div class="technology-card"><i class="devicon-java-plain"></i><span>Java</span></div>
                    <div class="technology-card"><i class="devicon-csharp-plain"></i><span>C#</span></div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Databases</div>
                <div class="technology-grid">
                    <div class="technology-card"><i class="devicon-mysql-original"></i><span>MySQL</span></div>
                    <div class="technology-card"><i class="devicon-postgresql-plain"></i><span>PostgreSQL</span></div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">CMS &amp; Design</div>
                <div class="technology-grid">
                    <div class="technology-card"><i class="devicon-wordpress-plain"></i><span>WordPress</span></div>
                    <div class="technology-card"><i class="devicon-figma-plain"></i><span>Figma</span></div>
                    <div class="technology-card"><i class="devicon-photoshop-plain"></i><span>Photoshop</span></div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Tools &amp; Platforms</div>
                <div class="technology-grid">
                    <div class="technology-card"><i class="devicon-git-plain"></i><span>Git</span></div>
                    <div class="technology-card"><i class="devicon-github-original"></i><span>GitHub</span></div>
                    <div class="technology-card"><i class="devicon-vscode-plain"></i><span>VS Code</span></div>
                    <div class="technology-card"><i class="devicon-npm-original-wordmark"></i><span>npm</span></div>
                    <div class="technology-card"><i class="devicon-composer-line"></i><span>Composer</span></div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Currently Learning</div>
                <div class="technology-grid">
                    <div class="learning-card">
                        <i class="devicon-dotnetcore-plain"></i>
                        <strong>.NET</strong>
                        <small>Learning</small>
                    </div>

                    <div class="learning-card">
                        <i class="devicon-mongodb-plain"></i>
                        <strong>MongoDB</strong>
                        <small>Learning</small>
                    </div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Other Technical Skills</div>
                <div class="soft-skills">
                    <div class="soft-skill">REST API</div>
                    <div class="soft-skill">Responsive Web Design</div>
                    <div class="soft-skill">Database Design</div>
                    <div class="soft-skill">CRUD Operations</div>
                    <div class="soft-skill">Git Version Control</div>
                    <div class="soft-skill">UI/UX Fundamentals</div>
                </div>
            </div>

            <div class="technology-group">
                <div class="technology-group-title">Soft Skills</div>
                <div class="soft-skills">
                    <div class="soft-skill">Teamwork</div>
                    <div class="soft-skill">Time Management</div>
                    <div class="soft-skill">Leadership</div>
                    <div class="soft-skill">Communication</div>
                    <div class="soft-skill">Problem-Solving</div>
                    <div class="soft-skill">Adaptability</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- EDUCATION -->

<section id="education">
    <div class="container">
        <div class="section-heading center">
            <h2>Education <span>Background</span></h2>
            <p>My academic background and professional learning.</p>
            <div class="line"></div>
        </div>

        <div class="timeline">

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-card">
                    <h3>Higher National Diploma in Information Technology</h3>
                    <div class="sub">SLIATE – Ratnapura</div>
                    <p>
                        Completed Higher National Diploma in Information Technology
                        with a focus on software development, web development,
                        databases and information technology.
                    </p>

                    <div class="gpa-row">
                        <div class="gpa"><strong>3.22</strong><small>1st Semester</small></div>
                        <div class="gpa"><strong>3.61</strong><small>2nd Semester</small></div>
                        <div class="gpa"><strong>3.80</strong><small>3rd Semester</small></div>
                        <div class="gpa"><strong>3.16</strong><small>4th Semester</small></div>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-card">
                    <h3>G.C.E. Advanced Level Examination</h3>
                    <div class="sub">2022 · Commerce Stream</div>
                    <p>Successfully completed the G.C.E. Advanced Level examination.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-card">
                    <h3>English Diploma</h3>
                    <div class="sub">SLEGA College</div>
                    <p>Successfully completed an English Diploma at SLEGA College.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-card">
                    <h3>English Diploma</h3>
                    <div class="sub">SITC Campus</div>
                    <p>Successfully completed an English Diploma at SITC Campus.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- EXPERIENCE -->

<section id="experience">
    <div class="container">
        <div class="section-heading">
            <h2>Professional <span>Experience</span></h2>
            <p>
                Practical experience gained through industrial training and
                software development projects.
            </p>
            <div class="line"></div>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-card">
                    <h3>TOYAR (Pvt) Ltd</h3>
                    <div class="sub">Web Developer Intern · 6 Months</div>
                    <p>
                        Completed a six-month industrial training program with
                        practical experience in web application development,
                        Laravel, WordPress, database-driven systems, UI implementation
                        and team-based software projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->

<section id="projects">
    <div class="container">
        <div class="section-heading">
            <h2>Featured <span>Projects</span></h2>
            <p>A selection of academic, industrial training and personal software projects.</p>
            <div class="line"></div>
        </div>

        <div class="projects-grid">

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>TOYAR ERP</strong>
                        <span>Laravel Management System</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">Web Application</div>
                    <h3>TOYAR ERP System</h3>
                    <p>
                        Business management system with user management, clients,
                        projects, tasks, work logs, attendance, reports and notifications.
                    </p>
                    <div class="tech">Laravel · PHP · MySQL · Bootstrap</div>
                    <a href="#" class="project-link">View Project →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>Photography</strong>
                        <span>Booking System</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">Web Application</div>
                    <h3>Photography Booking System</h3>
                    <p>
                        A web-based system that enables customers to book preferred
                        photography sessions online.
                    </p>
                    <div class="tech">Laravel · PHP · MySQL · Bootstrap</div>
                    <a href="#" class="project-link">View Project →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>Web of Taste</strong>
                        <span>Restaurant Website</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">Website</div>
                    <h3>Online Restaurant Website</h3>
                    <p>
                        A web platform designed to help customers explore food
                        and order meals online.
                    </p>
                    <div class="tech">HTML · CSS · JavaScript</div>
                    <a href="#" class="project-link">View Project →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>TOYAR Websites</strong>
                        <span>WordPress Projects</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">Web Design</div>
                    <h3>TOYAR Business Websites</h3>
                    <p>
                        Business websites developed with WordPress, Elementor,
                        Photoshop and custom CSS.
                    </p>
                    <div class="tech">WordPress · Elementor · Photoshop · CSS</div>
                    <a href="#" class="project-link">View Project →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>Senavirathna</strong>
                        <span>Transport Management</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">Management System</div>
                    <h3>Senavirathna Transport</h3>
                    <p>
                        Transport management solution covering drivers, expenses,
                        fuel, vehicle maintenance, meter records and reports.
                    </p>
                    <div class="tech">React · Express.js · PostgreSQL</div>
                    <a href="#" class="project-link">View Project →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>Solovo.lk</strong>
                        <span>WordPress Business Website</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">WordPress Website</div>
                    <h3>Solovo.lk</h3>
                    <p>
                        A professional business website developed using WordPress
                        and Elementor for sound equipment, speakers, amplifiers,
                        mixers and related services.
                    </p>
                    <div class="tech">WordPress · Elementor · Photoshop</div>
                    <a href="https://solovo.lk/" class="project-link"
                       target="_blank" rel="noopener noreferrer">Visit Website →</a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <div>
                        <strong>Sanroo.lk</strong>
                        <span>WordPress Business Website</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-tag">WordPress Website</div>
                    <h3>Sanroo.lk</h3>
                    <p>
                        A professional business website developed using WordPress
                        and Elementor for industrial and solar-related products
                        and services.
                    </p>
                    <div class="tech">WordPress · Elementor · Photoshop</div>
                    <a href="https://sanroo.lk/" class="project-link"
                       target="_blank" rel="noopener noreferrer">Visit Website →</a>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- CONTACT -->

<section id="contact">
    <div class="container">
        <div class="contact-grid">

            <div>
                <div class="section-heading">
                    <h2>Get In <span>Touch</span></h2>
                    <p>
                        Interested in working together or discussing a project?
                        Feel free to get in touch.
                    </p>
                    <div class="line"></div>
                </div>

                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="devicon-google-plain"></i>
                        </div>
                        <div>
                            <strong>Email</strong>
                            <a href="mailto:webdevmihiduni@gmail.com">
                                webdevmihiduni@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">☎</div>
                        <div>
                            <strong>Phone</strong>
                            <a href="tel:+94719567512">+94 71 956 7512</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">⌖</div>
                        <div>
                            <strong>Location</strong>
                            <span>Deraniyagala, Sri Lanka</span>
                        </div>
                    </div>
                </div>

                <div class="socials">
                    <a class="social" href="https://github.com/mihiduni972"
                       target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <i class="devicon-github-original"></i>
                    </a>

                    <a class="social"
                       href="https://www.linkedin.com/in/mihiduni-vinethma-a89b68373/"
                       target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="devicon-linkedin-plain"></i>
                    </a>
                </div>
            </div>

            <div class="contact-form">
                <h3>Send a Message</h3>

                <form action="mailto:webdevmihiduni@gmail.com"
                      method="post" enctype="text/plain">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"
                               placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control"
                               placeholder="your.email@example.com" required>
                    </div>

                    <div class="form-group">
                        <textarea name="message" class="form-control"
                                  placeholder="Your message..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary send-btn">
                        Send Message →
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->

<footer>
    <div class="container">
        © {{ date('Y') }} Mihiduni Vinethma. All rights reserved.
    </div>
</footer>

<!-- NAVIGATION ACTIVE SECTION SCRIPT -->

<script>
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-links a");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 130;

            if (window.scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");

            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    });
</script>

</body>
</html>