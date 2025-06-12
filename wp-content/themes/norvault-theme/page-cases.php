<?php
/**
 * Template Name: Cases
 * 
 * @package Norvault
 */

get_header(); ?>

<!-- Cases Hero Section (kleiner dan homepage) -->
<section class="page-hero-section position-relative overflow-hidden" style="padding: 120px 0 60px;">
    <div id="particles-js-cases" class="position-absolute w-100 h-100" style="opacity: 0.3;"></div>
    <div class="hero-gradient-overlay"></div>
    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="display-4 fw-bold text-dark mb-4" data-aos="fade-up">
                    <span class="gradient-text">Onze Succesverhalen</span>
                </h1>
                <p class="lead text-dark" data-aos="fade-up" data-aos-delay="100">
                    Ontdek hoe we andere organisaties hebben geholpen met hun informatiebeveiliging
                </p>
            </div>
        </div>
    </div>
    <!-- Subtle wave -->
    <div class="hero-wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="height: 60px;">
            <path fill="#ffffff" d="M0,40L48,45.3C96,51,192,61,288,58.7C384,56,480,40,576,37.3C672,35,768,45,864,48C960,51,1056,45,1152,42.7C1248,40,1344,40,1392,40L1440,40L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <?php
            $stats = array(
                array(
                    'number' => '50+',
                    'label' => 'Succesvolle implementaties',
                    'icon' => 'bi-check-circle-fill'
                ),
                array(
                    'number' => '100%',
                    'label' => 'Slagingspercentage audits',
                    'icon' => 'bi-award-fill'
                ),
                array(
                    'number' => '15+',
                    'label' => 'Jaar ervaring',
                    'icon' => 'bi-calendar-check-fill'
                ),
                array(
                    'number' => '24/7',
                    'label' => 'Security monitoring',
                    'icon' => 'bi-shield-check'
                )
            );
            
            foreach ($stats as $index => $stat) : ?>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                    <div class="stat-card">
                        <i class="bi <?php echo $stat['icon']; ?> fs-2 text-primary mb-3"></i>
                        <div class="stat-number"><?php echo $stat['number']; ?></div>
                        <div class="stat-label"><?php echo $stat['label']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Cases Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                Uitgelichte cases
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                Een selectie van onze meest impactvolle projecten
            </p>
        </div>
        
        <?php
        $cases = array(
            array(
                'industry' => 'Fintech',
                'title' => 'ISO 27001 certificering voor snelgroeiende Fintech startup',
                'challenge' => 'Een fintech startup moest binnen 6 maanden ISO 27001 gecertificeerd zijn om met grote banken te kunnen werken.',
                'solution' => 'We implementeerden een compleet ISMS, automatiseerden de documentatie en begeleidden het gehele certificeringstraject.',
                'results' => array(
                    'ISO 27001 certificering in 5 maanden',
                    '0 non-conformities tijdens audit',
                    'Contract met 3 grote banken',
                    '60% tijdsbesparing door automatisering'
                ),
                'image' => norvault_get_placeholder_image(600, 400, 'Fintech+Case'),
                'color' => '#0052CC'
            ),
            array(
                'industry' => 'Healthcare',
                'title' => 'NIS2 compliance voor regionaal ziekenhuis',
                'challenge' => 'Een middelgroot ziekenhuis moest voldoen aan de nieuwe NIS2 richtlijnen terwijl de dagelijkse operatie doorging.',
                'solution' => 'Gefaseerde implementatie van security maatregelen, training van personeel en opzetten van incident response procedures.',
                'results' => array(
                    'Volledig NIS2 compliant binnen deadline',
                    '95% awareness score na training',
                    'Zero security incidents sindsdien',
                    'Verbeterde patiëntvertrouwen'
                ),
                'image' => norvault_get_placeholder_image(600, 400, 'Healthcare+Case'),
                'color' => '#00D4AA'
            ),
            array(
                'industry' => 'SaaS',
                'title' => 'Security framework voor internationale SaaS provider',
                'challenge' => 'Een SaaS bedrijf met klanten in 15 landen had een gefragmenteerde security aanpak zonder centrale regie.',
                'solution' => 'We ontwikkelden een centraal security framework, implementeerden monitoring tools en trainden het team.',
                'results' => array(
                    '40% reductie in security incidents',
                    'SOC 2 Type II certificering behaald',
                    'Verhoogde klantretentie met 25%',
                    'Gestroomlijnde security processen'
                ),
                'image' => norvault_get_placeholder_image(600, 400, 'SaaS+Case'),
                'color' => '#667eea'
            )
        );
        
        foreach ($cases as $index => $case) : ?>
            <div class="case-study mb-5" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="row align-items-center <?php echo $index % 2 === 1 ? 'flex-row-reverse' : ''; ?>">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="position-relative">
                            <img src="<?php echo $case['image']; ?>" 
                                 alt="<?php echo $case['title']; ?>" 
                                 class="img-fluid rounded shadow-lg">
                            <div class="floating-badge position-absolute top-0 <?php echo $index % 2 === 1 ? 'start-0' : 'end-0'; ?> m-4">
                                <div class="badge p-3 rounded-3" style="background: <?php echo $case['color']; ?>;">
                                    <div class="text-white fw-bold"><?php echo $case['industry']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 <?php echo $index % 2 === 1 ? 'ps-lg-5' : 'pe-lg-5'; ?>">
                        <h3 class="fw-bold mb-4"><?php echo $case['title']; ?></h3>
                        
                        <div class="mb-4">
                            <h5 class="text-primary mb-2">De uitdaging</h5>
                            <p><?php echo $case['challenge']; ?></p>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="text-primary mb-2">Onze aanpak</h5>
                            <p><?php echo $case['solution']; ?></p>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="text-primary mb-2">Resultaten</h5>
                            <ul class="list-unstyled">
                                <?php foreach ($case['results'] as $result) : ?>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <?php echo $result; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Industries Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                Industrieën die we bedienen
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                We hebben ervaring in diverse sectoren, elk met hun unieke uitdagingen
            </p>
        </div>
        
        <div class="row g-4">
            <?php
            $industries = array(
                array(
                    'icon' => 'bi-bank',
                    'name' => 'Financiële diensten',
                    'description' => 'Banken, verzekeraars en fintech bedrijven'
                ),
                array(
                    'icon' => 'bi-hospital',
                    'name' => 'Gezondheidszorg',
                    'description' => 'Ziekenhuizen, klinieken en zorgaanbieders'
                ),
                array(
                    'icon' => 'bi-cart-fill',
                    'name' => 'E-commerce',
                    'description' => 'Online retailers en marktplaatsen'
                ),
                array(
                    'icon' => 'bi-cloud-fill',
                    'name' => 'SaaS & Technology',
                    'description' => 'Software bedrijven en tech startups'
                ),
                array(
                    'icon' => 'bi-building',
                    'name' => 'Manufacturing',
                    'description' => 'Productie en industriële bedrijven'
                ),
                array(
                    'icon' => 'bi-mortarboard-fill',
                    'name' => 'Onderwijs',
                    'description' => 'Scholen, universiteiten en e-learning'
                )
            );
            
            foreach ($industries as $index => $industry) : ?>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                    <div class="feature-card h-100 text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon">
                                <i class="bi <?php echo $industry['icon']; ?> fs-1"></i>
                            </div>
                            <div class="icon-bg-animation"></div>
                        </div>
                        <h4 class="fw-bold mb-3"><?php echo $industry['name']; ?></h4>
                        <p class="text-muted"><?php echo $industry['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                Wat onze klanten zeggen
            </h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $testimonials = array(
                            array(
                                'text' => 'Norvault heeft ons niet alleen geholpen met ISO 27001 certificering, maar ook onze hele security mindset veranderd. Hun pragmatische aanpak werkt echt.',
                                'author' => 'Jan de Vries',
                                'role' => 'CTO, TechStart BV',
                                'rating' => 5
                            ),
                            array(
                                'text' => 'De vCISO dienst van Norvault is precies wat we nodig hadden. Expertise op afroep, zonder de kosten van een fulltime CISO. Perfect voor onze grootte.',
                                'author' => 'Sarah Bakker',
                                'role' => 'CEO, HealthTech Solutions',
                                'rating' => 5
                            ),
                            array(
                                'text' => 'Van risicoanalyse tot implementatie, Norvault neemt je bij de hand. Ze maken security begrijpelijk en werkbaar voor iedereen in de organisatie.',
                                'author' => 'Mark Jansen',
                                'role' => 'IT Manager, RetailPlus',
                                'rating' => 5
                            )
                        );
                        
                        foreach ($testimonials as $index => $testimonial) : ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                <div class="testimonial-card mx-auto">
                                    <div class="rating mb-4">
                                        <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="testimonial-text mb-4">"<?php echo $testimonial['text']; ?>"</p>
                                    <div class="testimonial-author">
                                        <div class="author-avatar">
                                            <?php echo substr($testimonial['author'], 0, 1); ?>
                                        </div>
                                        <div>
                                            <h6 class="mb-0"><?php echo $testimonial['author']; ?></h6>
                                            <small class="text-muted"><?php echo $testimonial['role']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section text-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="display-4 fw-bold mb-4">
                    Jouw succesverhaal kan het volgende zijn
                </h2>
                <p class="lead mb-5">
                    Ontdek hoe we jouw organisatie kunnen helpen met informatiebeveiliging
                </p>
                <a href="/contact" class="btn btn-white btn-lg px-5 py-3">
                    Start jouw security reis
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Case Study Specific Styles */
.case-study {
    margin-bottom: 5rem;
}

.case-study img {
    transition: transform var(--transition-normal);
}

.case-study:hover img {
    transform: scale(1.02);
}

/* Carousel Controls */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    height: 50px;
    background: rgba(0, 82, 204, 0.1);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-control-prev {
    left: -60px;
}

.carousel-control-next {
    right: -60px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 20px;
    width: 20px;
    height: 20px;
}

@media (max-width: 991px) {
    .carousel-control-prev {
        left: -30px;
    }
    
    .carousel-control-next {
        right: -30px;
    }
}

@media (max-width: 767px) {
    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }
}
</style>

<script>
// Initialize particles for cases page
document.addEventListener('DOMContentLoaded', function() {
    if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js-cases')) {
        particlesJS('particles-js-cases', {
            particles: {
                number: { value: 25 },
                color: { value: ['#0052CC', '#00D4AA', '#667eea'] },
                shape: { type: 'circle' },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#0052CC',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2
                }
            },
            interactivity: {
                events: {
                    onhover: { enable: true, mode: 'grab' },
                    resize: true
                }
            },
            retina_detect: true
        });
    }
});
</script>

<?php get_footer(); ?>