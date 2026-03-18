<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio – Early Nathalia Sembiring</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f5f0e8;
            --bg-2: #ede8df;
            --bg-3: #e6dfd4;
            --text: #1c1917;
            --muted: #6b6459;
            --accent: #c9a96e;
            --line: rgba(28, 25, 23, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            width: min(1180px, 92%);
            margin: 0 auto;
        }

        /* ── NAV ── */
        .nav {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(245, 240, 232, 0.88);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .menu {
            display: flex;
            gap: 36px;
            list-style: none;
        }

        .menu a {
            text-decoration: none;
            color: var(--muted);
            font-size: 13px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 500;
            transition: color .2s;
        }

        .menu a:hover {
            color: var(--text);
        }

        .menu a.is-active {
            color: var(--text);
            border-bottom: 1px solid var(--text);
            padding-bottom: 4px;
        }

        /* ── HERO ── */
        .hero {
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-deco {
            pointer-events: none;
            position: absolute;
            inset: 0;
        }

        .hero-deco .star {
            position: absolute;
            font-size: 20px;
            color: var(--accent);
            opacity: 0.7;
        }

        .hero-deco .star:nth-child(1) { top: 12%; left: 5%; font-size: 28px; }
        .hero-deco .star:nth-child(2) { top: 60%; left: 2%; font-size: 14px; }
        .hero-deco .star:nth-child(3) { top: 20%; right: 4%; font-size: 22px; }
        .hero-deco .star:nth-child(4) { top: 75%; right: 6%; font-size: 14px; }
        .hero-deco .cross {
            position: absolute;
            font-size: 18px;
            color: var(--text);
            opacity: 0.2;
        }
        .hero-deco .cross:nth-child(5) { top: 8%; left: 22%; }
        .hero-deco .cross:nth-child(6) { top: 85%; right: 24%; }

        .hero-grid {
            display: grid;
            gap: 32px;
            grid-template-columns: 1fr 360px 1fr;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-left p {
            font-family: 'DM Sans', sans-serif;
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 12px;
        }

        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(52px, 6vw, 88px);
            font-weight: 300;
            line-height: 0.92;
            letter-spacing: -1px;
        }

        .hero-title-big {
            display: flex;
            gap: 18px;
            align-items: center;
            justify-content: center;
        }

        .hero-title-big span {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(60px, 9vw, 120px);
            font-weight: 300;
            line-height: 0.9;
            letter-spacing: 8px;
            text-transform: uppercase;
        }

        .hero-frame {
            position: relative;
        }

        .hero-frame-arch {
            border-radius: 999px 999px 0 0;
            overflow: hidden;
            border: 2px solid var(--line);
            background: var(--bg-2);
            aspect-ratio: 3/4;
        }

        .hero-frame-arch img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-name-tag {
            display: inline-block;
            margin-top: 14px;
            border: 1px solid var(--text);
            border-radius: 999px;
            padding: 6px 22px;
            font-size: 13px;
            letter-spacing: 2px;
            text-align: center;
            width: 100%;
        }

        .hero-right {
            text-align: right;
        }

        .hero-right h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(36px, 4.2vw, 58px);
            font-weight: 300;
            line-height: 1.05;
            letter-spacing: -0.5px;
        }

        .hero-right h2 em {
            font-style: italic;
            color: var(--muted);
        }

        /* ── ABOUT ── */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: start;
        }

        .about-photo {
            position: relative;
            border-radius: 30px;
            padding: 16px;
            background: #f7f3ec;
            border: 1px solid rgba(28, 25, 23, 0.1);
            box-shadow: 0 14px 28px rgba(45, 33, 20, 0.08);
            max-width: 390px;
            width: calc(100% + 20px);
            margin: 0 -10px;
        }

        .about-photo::before {
            content: '';
            position: absolute;
            inset: 12px;
            border: 3px dotted #a95845;
            border-radius: 24px;
            pointer-events: none;
        }

        .about-photo::after {
            content: '✦';
            position: absolute;
            right: 22px;
            top: 16px;
            color: #b3715f;
            font-size: 18px;
            opacity: 0.8;
        }

        .about-photo img {
            width: 100%;
            height: 290px;
            object-fit: cover;
            display: block;
            border-radius: 20px;
            object-position: center 88%;
            transform: scale(1.01);
        }

        .about-content h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(32px, 3.6vw, 50px);
            font-weight: 400;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .about-content h3 .star-sm {
            color: var(--accent);
            font-size: 20px;
        }

        .pill {
            display: inline-block;
            border: 1px solid var(--text);
            border-radius: 999px;
            padding: 4px 16px;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .about-content p {
            color: var(--muted);
            font-size: 14.5px;
            line-height: 1.8;
        }

        .about-meta {
            margin-top: 22px;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .about-meta li {
            font-size: 13.5px;
            color: var(--muted);
            display: flex;
            gap: 8px;
        }

        .about-meta li::before {
            content: '●';
            color: var(--accent);
            font-size: 8px;
            line-height: 2.2;
        }

        /* ── SECTION SHARED ── */
        .section {
            padding: 72px 0;
        }

        .panel {
            display: none;
        }

        .panel.is-active {
            display: block;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 36px;
        }

        .section-header h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(28px, 3.2vw, 44px);
            font-weight: 400;
            white-space: nowrap;
        }

        .section-header .star-sm {
            color: var(--accent);
            font-size: 22px;
        }

        .divider {
            flex: 1;
            height: 1px;
            background: var(--line);
        }

        /* ── SKILL TAGS ── */
        .skill-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .skill-item {
            background: var(--bg-2);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 18px 20px;
        }

        .skill-item h5 {
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 8px;
            font-weight: 500;
        }

        .skill-item p {
            color: var(--muted);
            font-size: 13.5px;
        }

        /* ── EDUCATION / TIMELINE ── */
        .timeline {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 24px;
            padding: 24px 0;
            border-bottom: 1px solid var(--line);
        }

        .timeline-item:last-child { border-bottom: none; }

        .timeline-date {
            font-size: 12.5px;
            color: var(--muted);
            padding-top: 2px;
        }

        .timeline-body h5 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .timeline-body .org {
            font-size: 12.5px;
            color: var(--accent);
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .timeline-body .role {
            font-size: 13px;
            color: var(--muted);
            font-style: italic;
            margin-bottom: 8px;
        }

        .timeline-body ul {
            margin-left: 16px;
            color: var(--muted);
            font-size: 13.5px;
            line-height: 1.8;
        }

        /* ── PROJECTS ── */
        .projects {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .project {
            background: var(--bg-2);
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            transition: transform .25s, border-color .25s;
        }

        .project:hover {
            transform: translateY(-4px);
            border-color: rgba(28, 25, 23, 0.25);
        }

        .project-body {
            padding: 20px 22px 24px;
        }

        .project-tag {
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--accent);
            font-weight: 500;
            margin-bottom: 8px;
        }

        .project h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .project ul {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
            padding-left: 16px;
        }

        /* ── CONTACT ── */
        .contact-box {
            background: var(--bg-2);
            border-radius: 20px;
            border: 1px solid var(--line);
            padding: 40px;
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr;
            gap: 24px;
        }

        .contact-box h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            font-weight: 500;
            color: var(--accent);
            margin-bottom: 8px;
        }

        .contact-box p,
        .contact-box a {
            color: var(--muted);
            text-decoration: none;
            font-size: 14px;
            line-height: 1.9;
            transition: color .2s;
        }

        .contact-box a:hover {
            color: var(--text);
        }

        /* ── FOOTER ── */
        .footer {
            text-align: center;
            color: var(--muted);
            border-top: 1px solid var(--line);
            padding: 20px 0 28px;
            font-size: 13px;
            letter-spacing: 1px;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 980px) {
            .hero-title-big {
                justify-content: center;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .about-photo {
                padding: 12px;
                border-radius: 22px;
                max-width: 340px;
                width: calc(100% + 14px);
                margin: 0 -7px;
            }

            .about-photo::before {
                inset: 8px;
                border-radius: 16px;
            }

            .about-photo img {
                height: 260px;
                border-radius: 14px;
                object-position: center 86%;
                transform: scale(1);
            }

            .skill-grid {
                grid-template-columns: 1fr;
            }

            .timeline-item {
                grid-template-columns: 1fr;
                gap: 4px;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .contact-box {
                grid-template-columns: 1fr;
            }

            .menu {
                gap: 18px;
                flex-wrap: wrap;
                justify-content: flex-end;
            }
        }
    </style>
</head>
<body>
    <header class="nav">
        <div class="container nav-inner">
            <div class="brand">Early</div>
            <ul class="menu">
                <li><a href="#" class="js-menu-link is-active" data-target="home">Home</a></li>
                <li><a href="#" class="js-menu-link" data-target="about">About</a></li>
                <li><a href="#" class="js-menu-link" data-target="education">Education</a></li>
                <li><a href="#" class="js-menu-link" data-target="skills">Skills</a></li>
                <li><a href="#" class="js-menu-link" data-target="experience">Experience</a></li>
                <li><a href="#" class="js-menu-link" data-target="organization">Organization</a></li>
                <li><a href="#" class="js-menu-link" data-target="projects">Projects</a></li>
                <li><a href="#" class="js-menu-link" data-target="contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <!-- ── HERO ── -->
        <section class="hero panel is-active" id="home" data-panel="home">
            <div class="hero-deco">
                <span class="star">✦</span>
                <span class="star">✧</span>
                <span class="star">✦</span>
                <span class="star">✧</span>
                <span class="cross">+</span>
                <span class="cross">+</span>
            </div>
            <div class="container">
                <div class="hero-title-big" style="margin-bottom: 40px;">
                    <span>PORT</span>
                    <div class="hero-frame" style="width: 240px; flex-shrink:0;">
                        <div class="hero-frame-arch">
                            @php
                                $homePhotoPath = public_path('admin/images/faces/home-photo.jpg');
                                $homePhotoSrc = file_exists($homePhotoPath)
                                    ? 'data:image/jpeg;base64,'.base64_encode(file_get_contents($homePhotoPath))
                                    : asset('admin/images/faces/face1.jpg');
                            @endphp
                            <img src="{{ $homePhotoSrc }}" alt="Early Nathalia Sembiring" onerror="this.onerror=null;this.src='{{ asset('admin/images/faces/face1.jpg') }}';">
                        </div>
                        <div class="hero-name-tag">Early Nathalia Sembiring</div>
                    </div>
                    <span>FOLIO</span>
                </div>
            </div>
        </section>

        <!-- ── ABOUT ── -->
        <section class="section panel" id="about" data-panel="about" style="border-top: 1px solid var(--line);">
            <div class="container">
                <div class="about-grid">
                    <div class="about-photo">
                        <img src="{{ asset('admin/images/faces/about-photo.jpg') }}" alt="Early Nathalia Sembiring" onerror="this.onerror=null;this.src='{{ asset('admin/images/faces/face1.jpg') }}';">
                    </div>
                    <div class="about-content">
                        <h3>About Me <span class="star-sm">✦</span></h3>
                        <span class="pill">Early Nathalia Sembiring</span>
                        <p>
                            Information Systems student with strong interest in Web Development (Frontend and Backend)
                            and UI/UX design. Experienced in building user-centered digital solutions and collaborating
                            through technology communities and competitions such as GEMASTIK 2024, Google Developer
                            Student Clubs, and Del Data Science. Demonstrates strong analytical thinking and
                            problem-solving, recognized by a Silver Medal in the 2022 National Economics Olympiad.
                            Motivated to continuously develop technical skills and contribute to innovative
                            web-based applications.
                        </p>
                        <ul class="about-meta">
                            <li>nathaliasembiringearly@gmail.com</li>
                            <li>Medan, Sumatera Utara, Indonesia</li>
                            <li>Information Systems Student – Institut Teknologi Del</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── EDUCATION ── -->
        <section class="section panel" id="education" data-panel="education" style="background: var(--bg-2); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);">
            <div class="container">
                <div class="section-header">
                    <h3>Education</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">Aug 2020 – Mar 2023</div>
                        <div class="timeline-body">
                            <h5>SMAN 17 Medan</h5>
                            <p class="org">Medan</p>
                            <p class="role">Senior High School</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Aug 2023 – Present</div>
                        <div class="timeline-body">
                            <h5>Institut Teknologi Del</h5>
                            <p class="org">Sitoluama, Sumatera Utara</p>
                            <p class="role">Bachelor – Information Systems</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SKILLS ── -->
        <section class="section panel" id="skills" data-panel="skills">
            <div class="container">
                <div class="section-header">
                    <h3>Skills & Interest</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>
                <div class="skill-grid">
                    <div class="skill-item">
                        <h5>Programming & Framework</h5>
                        <p>HTML, CSS, PHP, Python</p>
                    </div>
                    <div class="skill-item">
                        <h5>Tools & Technology</h5>
                        <p>GitHub, Visual Studio Code, Figma, Odoo, Dolibar</p>
                    </div>
                    <div class="skill-item">
                        <h5>Database</h5>
                        <p>MySQL, SQL Server, Google Cloud Console – BigQuery</p>
                    </div>
                    <div class="skill-item">
                        <h5>Soft Skills</h5>
                        <p>Team Work, Communication, Adaptability</p>
                    </div>
                    <div class="skill-item">
                        <h5>Language</h5>
                        <p>English (Intermediate) &nbsp;·&nbsp; Indonesia (Native)</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── ACADEMIC EXPERIENCE ── -->
        <section class="section panel" id="experience" data-panel="experience" style="background: var(--bg-2); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);">
            <div class="container">
                <div class="section-header">
                    <h3>Academic Experiences</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">Jan 2024</div>
                        <div class="timeline-body">
                            <h5>UI/UX Designer – War Fite Competition Committee</h5>
                            <p class="org">IT Del</p>
                            <p class="role">Public Relations Committee Member</p>
                            <ul>
                                <li>Collected and analyzed customer feedback through follow-up communications to identify user needs, contributing to improved service experience and increasing customer retention by 26%.</li>
                                <li>Designed visual layouts and promotional displays for seasonal and holiday events, enhancing customer interaction and increasing engagement by 28%.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Apr 2024 – May 2024</div>
                        <div class="timeline-body">
                            <h5>GEMASTIK 2024 Data Science Competition</h5>
                            <p class="org">IT Del</p>
                            <p class="role">Participant</p>
                            <ul>
                                <li>Developed data analysis and machine learning models using Python to solve real-world data problems.</li>
                                <li>Performed data preprocessing, exploration, and visualization to identify patterns and insights from datasets.</li>
                                <li>Collaborated with team members to design data-driven solutions and present analytical results effectively.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">15 Desember 2025</div>
                        <div class="timeline-body">
                            <h5>Indonesia National IT Competition (UI/UX Design Competition)</h5>
                            <p class="org">Universitas Amikom Purwokerto</p>
                            <p class="role">Participant</p>
                            <ul>
                                <li>Participated in a UI/UX design competition, developing interface concepts and prototypes to solve real-world digital problems.</li>
                                <li>Applied user-centered design principles, including wireframing, prototyping, and usability considerations.</li>
                                <li>Collaborated in a team to design intuitive and functional digital product interfaces.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── ORGANISATIONAL EXPERIENCE ── -->
        <section class="section panel" id="organization" data-panel="organization">
            <div class="container">
                <div class="section-header">
                    <h3>Organisational Experience</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">Sep 2023 – Jan 2026</div>
                        <div class="timeline-body">
                            <h5>Arts Division Member – Information Systems Student Association</h5>
                            <p class="org">IT Del</p>
                            <ul>
                                <li>Served as MC for welcoming events and coordinated HIMSI Refreshing 2025.</li>
                                <li>Contributed to design content for social media HIMSI.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Jan 2026 – Present</div>
                        <div class="timeline-body">
                            <h5>Core Secretary – Information Systems Student Association</h5>
                            <p class="org">IT Del</p>
                            <ul>
                                <li>Managed organizational documentation, meeting notes, and official correspondence.</li>
                                <li>Coordinated administrative tasks and supported communication between internal members and external parties.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Sep 2023 – Jan 2026</div>
                        <div class="timeline-body">
                            <h5>Del Data Science Club (DDSC)</h5>
                            <p class="org">IT Del</p>
                            <p class="role">Member</p>
                            <ul>
                                <li>Learned user research techniques and basic data analysis to better understand user behavior and support the development of user-centered digital solutions.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Jun 2023 – Jan 2026</div>
                        <div class="timeline-body">
                            <h5>Design & Social Media @ IT Del Campus Committee</h5>
                            <p class="org">IT Del</p>
                            <p class="role">Member</p>
                            <ul>
                                <li>Managed visual identity and digital content planning to deliver structured and accessible information while supporting digital-based organizational communication.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Aug 2023 – Mar 2024</div>
                        <div class="timeline-body">
                            <h5>@ Google Developer Student Clubs (GDSC)</h5>
                            <p class="org">IT Del</p>
                            <p class="role">Member</p>
                            <ul>
                                <li>Participated in application development and UI/UX design workshops to enhance technical skills in developing user-centered digital solutions.</li>
                                <li>Learned user research techniques to better understand user needs and support the development of inclusive and impactful digital applications.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── PROJECTS ── -->
        <section class="section panel" id="projects" data-panel="projects" style="background: var(--bg-2); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);">
            <div class="container">
                <div class="section-header">
                    <h3>Projects</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>

                <div class="projects">
                    <article class="project">
                        <div class="project-body">
                            <p class="project-tag">UI/UX · Figma</p>
                            <h4>Bakery Shop</h4>
                            <ul>
                                <li>Designed and developed a UI/UX prototype for a bakery ordering application using Figma.</li>
                                <li>Created wireframes, user flows, and interactive prototypes to streamline the digital ordering process.</li>
                                <li>Improved usability, enabling users to place orders 30% faster and reducing ordering errors by ~25%.</li>
                            </ul>
                        </div>
                    </article>

                    <article class="project">
                        <div class="project-body">
                            <p class="project-tag">Web · Group Project</p>
                            <h4>Wedding Preparation IMS</h4>
                            <ul>
                                <li>Developed a web-based wedding planning management system to centralize vendor information, budgeting, and event scheduling.</li>
                                <li>Designed structured workflows and information dashboards to improve planning efficiency by ~50%.</li>
                                <li>Implemented vendor data management features to increase information transparency by ~45%.</li>
                            </ul>
                        </div>
                    </article>

                    <article class="project">
                        <div class="project-body">
                            <p class="project-tag">UI/UX · Personal · Design Stage</p>
                            <h4>GlowMatch – Skincare App</h4>
                            <ul>
                                <li>Designed a UI/UX prototype for an AI-based skincare recommendation application using Figma.</li>
                                <li>Created user flows, wireframes, and interactive prototypes for a personalized skincare experience.</li>
                                <li>Applied user-centered design principles, potentially reducing user trial-and-error by ~40%.</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ── CONTACT ── -->
        <section class="section panel" id="contact" data-panel="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Me</h3>
                    <span class="star-sm" style="color: var(--accent); font-size: 22px;">✦</span>
                    <div class="divider"></div>
                </div>

                <div class="contact-box">
                    <div>
                        <h4>Contact</h4>
                        <p>0813-8431-4760</p>
                        <p>nathaliasembiringearly@gmail.com</p>
                        <h4 style="margin-top: 20px;">Location</h4>
                        <p>Medan, Sumatera Utara, Indonesia</p>
                    </div>

                    <div>
                        <h4>Social Media</h4>
                        <p><a href="https://www.linkedin.com/in/early-nathalia-sembiring-7291972a1/" target="_blank" rel="noopener">LinkedIn</a></p>
                        <p><a href="https://github.com/Earlysembiring/" target="_blank" rel="noopener">GitHub</a></p>
                    </div>

                    <div>
                        <h4>Availability</h4>
                        <p>Open for internship,<br>collaboration, and<br>freelance projects.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">All Rights Reserved &nbsp;✦&nbsp; Early Nathalia Sembiring</div>
    </footer>

    <script>
        const menuLinks = document.querySelectorAll('.js-menu-link');
        const panels = document.querySelectorAll('.panel');

        function showPanel(panelName) {
            panels.forEach((panel) => {
                panel.classList.toggle('is-active', panel.dataset.panel === panelName);
            });

            menuLinks.forEach((link) => {
                link.classList.toggle('is-active', link.dataset.target === panelName);
            });

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        menuLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                showPanel(link.dataset.target);
            });
        });
    </script>
</body>
</html>