<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhwan Ariff | Developer Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">IA.</div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <header class="hero" id="about">
        <div class="hero-content">
            <h1>Hi, I'm Ikhwan Ariff.</h1>
            <h2>Computer Science Student & Full-Stack Developer</h2>
            <p>I specialize in building robust web applications and integrating hardware for IoT solutions. Experienced in Java, PHP, SQL, and microcontrollers.</p>
            <a href="#projects" class="btn">View My Work</a>
        </div>
    </header>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h2 class="section-title">Selected Projects</h2>
        <div class="project-grid">
            
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-info">
                    <h3>SmartAqua-IoT</h3>
                    <p>An AI-driven water quality monitoring system for aquaculture using ESP32, integrating pH and temperature sensors with a KNN algorithm.</p>
                    <div class="tech-stack">
                        <span>ESP32</span>
                        <span>C++</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="#">Live Demo</a> | <a href="#">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-info">
                    <h3>Web-Based Inspection Report</h3>
                    <p>A digitized inspection reporting tool utilizing MVC architecture, deployed on a Linux VPS.</p>
                    <div class="tech-stack">
                        <span>Java (JSP/Servlets)</span>
                        <span>Oracle SQL</span>
                        <span>Linux</span>
                    </div>
                    <div class="project-links">
                        <a href="#">Live Demo</a> | <a href="#">GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer / Contact -->
    <footer id="contact">
        <h2>Let's Connect</h2>
        <p>Currently open for final year project collaborations and development roles.</p>
        <a href="mailto:your.email@example.com" class="btn">Email Me</a>
        <div class="social-links">
            <a href="#">GitHub</a>
            <a href="#">LinkedIn</a>
        </div>
        <p class="copyright">© 2026 Ikhwan Ariff. Built from scratch.</p>
    </footer>
</body>
</html>