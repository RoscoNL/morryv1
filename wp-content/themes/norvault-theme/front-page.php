<?php
/**
 * Front Page Template
 *
 * @package Norvault
 */

get_header(); ?>

<!-- Hero Section met Particles.js achtergrond -->
<section class="hero-section position-relative overflow-hidden">
    <div id="particles-js" class="position-absolute w-100 h-100"></div>
    <div class="hero-gradient-overlay"></div>
    <div class="container position-relative z-index-10">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-1 fw-bold mb-4 hero-title" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gradient-text"><?php echo norvault_get_string('Jouw betrouwbare partner in informatiebeveiliging.'); ?></span>
                </h1>
                <p class="lead fs-4 mb-5 hero-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <?php echo norvault_get_string('Onze vCISO-dienst helpt je moeiteloos te voldoen aan ISO 27001 en NIS2. Voor bedrijven die slim willen beveiligen – zonder onnodige kosten.'); ?>
                </p>
                <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="#contact" class="btn btn-glow btn-lg px-5 py-3 me-3 mb-3">
                        <span class="btn-text"><?php echo norvault_get_string('Ontvang vrijblijvend advies'); ?></span>
                        <span class="btn-hover-effect"></span>
                    </a>
                    <a href="#diensten" class="btn btn-outline-light btn-lg px-5 py-3 mb-3">
                        <?php _e('Ontdek onze diensten', 'norvault'); ?>
                    </a>
                </div>
                
                <!-- Scroll indicator -->
                <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="600">
                    <div class="mouse"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Animated wave -->
    <div class="hero-wave">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,133.3C960,128,1056,96,1152,90.7C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Waarom een vCISO - met floating cards -->
<section class="py-5 position-relative">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                <?php echo norvault_get_string('Waarom kiezen voor een virtuele CISO?'); ?>
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                <?php echo norvault_get_string('Niet elk bedrijf heeft een eigen securityteam – en dat is ook helemaal niet nodig. Met een virtuele CISO krijg je deskundige begeleiding bij informatiebeveiliging, zonder dat je iemand hoeft aan te nemen of intern hoeft te beleggen.'); ?>
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="feature-card h-100 text-center p-5 position-relative">
                    <div class="feature-icon-wrapper mb-4">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check fs-1"></i>
                        </div>
                        <div class="icon-bg-animation"></div>
                    </div>
                    <h4 class="fw-bold mb-3"><?php echo norvault_get_string('Volledig compliant'); ?></h4>
                    <p class="text-muted"><?php echo norvault_get_string('Cybersecurity naar een hoger niveau tillen? We helpen je voldoen aan ISO 27001, NIS2 en andere normenkaders.'); ?></p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-card h-100 text-center p-5 position-relative">
                    <div class="feature-icon-wrapper mb-4">
                        <div class="feature-icon">
                            <i class="bi bi-person-check fs-1"></i>
                        </div>
                        <div class="icon-bg-animation"></div>
                    </div>
                    <h4 class="fw-bold mb-3"><?php echo norvault_get_string('Eén vast aanspreekpunt'); ?></h4>
                    <p class="text-muted"><?php echo norvault_get_string('Altijd iemand die jouw situatie kent en direct helpt. Wij zorgen dat wij de organisatie kennen en bieden altijd de juiste ondersteuning.'); ?></p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="feature-card h-100 text-center p-5 position-relative">
                    <div class="feature-icon-wrapper mb-4">
                        <div class="feature-icon">
                            <i class="bi bi-people fs-1"></i>
                        </div>
                        <div class="icon-bg-animation"></div>
                    </div>
                    <h4 class="fw-bold mb-3"><?php echo norvault_get_string('Geen securityteam nodig'); ?></h4>
                    <p class="text-muted"><?php echo norvault_get_string('Wij regelen alles wat nodig is – van beleid en risicomanagement tot privacy pentest.'); ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
</section>

<!-- Statistics Section met animated counters -->
<section class="statistics-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-2 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter" data-target="6">0</span>
                    </div>
                    <div class="stat-label"><?php _e('Landen actief', 'norvault'); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter" data-target="80">0</span>
                    </div>
                    <div class="stat-label"><?php _e('ISO 27001 implementaties', 'norvault'); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter" data-target="100">0</span>%
                    </div>
                    <div class="stat-label"><?php _e('Geslaagde audits', 'norvault'); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter" data-target="500">0</span>
                    </div>
                    <div class="stat-label"><?php _e('Risicoanalyses', 'norvault'); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter" data-target="40">0</span>
                    </div>
                    <div class="stat-label"><?php _e('Leveranciers beoordeeld', 'norvault'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section met 3D cards -->
<section class="services-section py-5" id="diensten">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                <?php echo norvault_get_string('Onze diensten'); ?>
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                <?php echo norvault_get_string('Als jouw virtuele CISO verzorgen we alles wat nodig is voor effectieve informatiebeveiliging – strategisch én operationeel.'); ?>
            </p>
        </div>
        
        <div class="row g-4">
            <?php
            $services = array(
                array(
                    'icon' => 'bi-file-earmark-text',
                    'title' => 'ISMS-beheer & documentatie',
                    'description' => 'We richten je ISMS in en houden alle documentatie actueel – volledig en geautomatiseerd.',
                    'link' => '#'
                ),
                array(
                    'icon' => 'bi-shield-fill-check',
                    'title' => 'Jaarlijkse risicoanalyse',
                    'description' => 'We analyseren risico's, vertalen ze naar concrete maatregelen en leggen het vast in een bruikbaar managementrapportage.',
                    'link' => '#'
                ),
                array(
                    'icon' => 'bi-clipboard-check',
                    'title' => 'Interne & externe audits',
                    'description' => 'Voorbereid en uitgevoerd volgens verschillende frameworks, inclusief rapportage en actiepunten.',
                    'link' => '#'
                ),
                array(
                    'icon' => 'bi-search',
                    'title' => 'Pentest',
                    'description' => 'Jaarlijkse pentest op de interne infrastructuur met duidelijke rapportage en opvolging van bevindingen.',
                    'link' => '#'
                ),
                array(
                    'icon' => 'bi-people-fill',
                    'title' => 'Leveranciersmanagement',
                    'description' => 'We toetsen leveranciers op informatiebeveiliging en helpen bij vragen vanuit leveranciers.',
                    'link' => '#'
                ),
                array(
                    'icon' => 'bi-mortarboard',
                    'title' => 'Awareness-training',
                    'description' => 'Korte, praktische trainingen afgestemd op functie en risico, inclusief phishingtests.',
                    'link' => '#'
                )
            );
            
            foreach ($services as $index => $service) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                    <div class="service-card-3d">
                        <div class="service-card-inner">
                            <div class="service-card-front">
                                <div class="service-icon">
                                    <i class="bi <?php echo $service['icon']; ?>"></i>
                                </div>
                                <h4><?php echo $service['title']; ?></h4>
                                <p><?php echo $service['description']; ?></p>
                            </div>
                            <div class="service-card-back">
                                <h4><?php echo $service['title']; ?></h4>
                                <p class="mb-4"><?php echo $service['description']; ?></p>
                                <a href="<?php echo $service['link']; ?>" class="btn btn-light btn-sm">
                                    <?php _e('Meer informatie', 'norvault'); ?> →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Pricing Section met gradient cards -->
<section class="pricing-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                <?php _e('Transparante prijzen', 'norvault'); ?>
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                <?php _e('Kies het pakket dat bij jouw organisatie past', 'norvault'); ?>
            </p>
        </div>
        
        <div class="row g-4 align-items-center">
            <!-- Basis Package -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card h-100">
                    <div class="pricing-header">
                        <h3><?php echo norvault_get_string('Basis'); ?></h3>
                        <p class="text-muted"><?php echo norvault_get_string('Voor organisaties die een solide basis willen leggen.'); ?></p>
                        <div class="price">
                            <span class="currency">€</span>
                            <span class="amount">1.250</span>
                            <span class="period">/ maand</span>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Volledig ingericht ISMS</li>
                            <li><i class="bi bi-check-circle-fill"></i> vCISO ondersteuning (8 uur/maand)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Jaarlijkse risicoanalyse</li>
                            <li><i class="bi bi-check-circle-fill"></i> Security incident management</li>
                            <li><i class="bi bi-check-circle-fill"></i> External attack surface rapport</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#contact" class="btn btn-outline-primary w-100">
                            <?php _e('Kies Basis', 'norvault'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Plus Package (Featured) -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card featured h-100">
                    <div class="badge-wrapper">
                        <span class="badge bg-primary"><?php _e('Meest gekozen', 'norvault'); ?></span>
                    </div>
                    <div class="pricing-header">
                        <h3><?php echo norvault_get_string('Plus'); ?></h3>
                        <p class="text-muted"><?php echo norvault_get_string('Voor bedrijven die audit-ready willen zijn.'); ?></p>
                        <div class="price">
                            <span class="currency">€</span>
                            <span class="amount">2.499</span>
                            <span class="period">/ maand</span>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="feature-list">
                            <li class="highlight"><?php _e('Alles van Basis, plus:', 'norvault'); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> vCISO ondersteuning (16 uur/maand)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Geautomatiseerde documentatie</li>
                            <li><i class="bi bi-check-circle-fill"></i> Interne audits</li>
                            <li><i class="bi bi-check-circle-fill"></i> Leveranciersbeheer</li>
                            <li><i class="bi bi-check-circle-fill"></i> M365 security review</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#contact" class="btn btn-primary w-100">
                            <?php _e('Kies Plus', 'norvault'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Premium Package -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card h-100">
                    <div class="pricing-header">
                        <h3><?php echo norvault_get_string('Premium'); ?></h3>
                        <p class="text-muted"><?php echo norvault_get_string('Voor bedrijven met hoge eisen en complexe behoeften.'); ?></p>
                        <div class="price">
                            <span class="currency">€</span>
                            <span class="amount">3.699</span>
                            <span class="period">/ maand</span>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="feature-list">
                            <li class="highlight"><?php _e('Alles van Plus, plus:', 'norvault'); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> vCISO ondersteuning (24 uur/maand)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Externe audit begeleiding</li>
                            <li><i class="bi bi-check-circle-fill"></i> Kwartaal awareness training</li>
                            <li><i class="bi bi-check-circle-fill"></i> Jaarlijkse pentest</li>
                            <li><i class="bi bi-check-circle-fill"></i> Phishing simulaties</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#contact" class="btn btn-outline-primary w-100">
                            <?php _e('Kies Premium', 'norvault'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <p class="text-center mt-4 text-muted">
            <small><?php _e('*Prijzen gelden voor organisaties tot 25 medewerkers. Neem contact op voor maatwerk.', 'norvault'); ?></small>
        </p>
    </div>
</section>

<!-- Testimonials met carousel -->
<section class="testimonials-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">
                <?php echo norvault_get_string('Wat onze klanten zeggen'); ?>
            </h2>
        </div>
        
        <div class="testimonials-carousel" data-aos="fade-up" data-aos-delay="100">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $testimonials = array(
                        array(
                            'text' => 'Norvault heeft onze ISO 27001 implementatie soepel en professioneel begeleid.',
                            'author' => 'Eva Jansen',
                            'role' => 'IT Manager, DataSec Solutions',
                            'rating' => 5
                        ),
                        array(
                            'text' => 'De jaarlijkse audit verliep relaxed dankzij hun goede voorbereiding.',
                            'author' => 'Marco de Boer',
                            'role' => 'CISO, FinTrust',
                            'rating' => 5
                        ),
                        array(
                            'text' => 'Ze weten echt alles van NIS2 en DORA. Heel waardevol!',
                            'author' => 'Sara Willemsen',
                            'role' => 'Compliance, CloudByte',
                            'rating' => 5
                        )
                    );
                    
                    foreach ($testimonials as $index => $testimonial) : ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="testimonial-card mx-auto">
                                <div class="rating mb-3">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                                <p class="testimonial-text mb-4">"<?php echo $testimonial['text']; ?>"</p>
                                <div class="testimonial-author">
                                    <div class="author-avatar">
                                        <?php echo substr($testimonial['author'], 0, 1); ?>
                                    </div>
                                    <div class="author-info">
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
</section>

<!-- Contact Section met glassmorphism -->
<section class="contact-section py-5" id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <h2 class="display-4 fw-bold mb-4">
                    <?php echo norvault_get_string('Contact'); ?>
                </h2>
                <p class="lead mb-4">
                    <?php _e('Klaar om je informatiebeveiliging naar een hoger niveau te tillen? Neem contact op voor een vrijblijvend gesprek.', 'norvault'); ?>
                </p>
                
                <div class="contact-info">
                    <div class="info-item d-flex align-items-center mb-3">
                        <div class="info-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h6 class="mb-0"><?php _e('Email', 'norvault'); ?></h6>
                            <p class="mb-0">info@norvault.security</p>
                        </div>
                    </div>
                    
                    <div class="info-item d-flex align-items-center mb-3">
                        <div class="info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <h6 class="mb-0"><?php _e('Telefoon', 'norvault'); ?></h6>
                            <p class="mb-0">+31 (0)20 123 4567</p>
                        </div>
                    </div>
                    
                    <div class="info-item d-flex align-items-center">
                        <div class="info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h6 class="mb-0"><?php _e('Locatie', 'norvault'); ?></h6>
                            <p class="mb-0">Amsterdam, Nederland</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="contact-form-wrapper">
                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="<?php echo norvault_get_string('Naam'); ?>" required>
                                    <label for="name"><?php echo norvault_get_string('Naam'); ?></label>
                                    <div class="invalid-feedback"><?php _e('Vul je naam in.', 'norvault'); ?></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="<?php echo norvault_get_string('E-mailadres'); ?>" required>
                                    <label for="email"><?php echo norvault_get_string('E-mailadres'); ?></label>
                                    <div class="invalid-feedback"><?php _e('Vul een geldig e-mailadres in.', 'norvault'); ?></div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="subject" required>
                                        <option value=""><?php _e('Selecteer onderwerp', 'norvault'); ?></option>
                                        <option value="general"><?php _e('Algemene vraag', 'norvault'); ?></option>
                                        <option value="services"><?php _e('Informatie over diensten', 'norvault'); ?></option>
                                        <option value="pricing"><?php _e('Prijsinformatie', 'norvault'); ?></option>
                                        <option value="audit"><?php _e('Audit ondersteuning', 'norvault'); ?></option>
                                    </select>
                                    <label for="subject"><?php _e('Onderwerp', 'norvault'); ?></label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="<?php echo norvault_get_string('Bericht'); ?>" style="height: 120px" required></textarea>
                                    <label for="message"><?php echo norvault_get_string('Bericht'); ?></label>
                                    <div class="invalid-feedback"><?php _e('Vul een bericht in.', 'norvault'); ?></div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <span class="btn-text"><?php echo norvault_get_string('Verstuur'); ?></span>
                                    <span class="btn-loading d-none">
                                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                        <?php _e('Verzenden...', 'norvault'); ?>
                                    </span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="alert alert-success mt-3 d-none" id="formSuccess">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <?php echo norvault_get_string('Je bericht is succesvol verzonden!'); ?>
                        </div>
                    </form>
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
                    <?php _e('Klaar om te beginnen?', 'norvault'); ?>
                </h2>
                <p class="lead mb-5">
                    <?php _e('Start vandaag nog met het verbeteren van je informatiebeveiliging', 'norvault'); ?>
                </p>
                <a href="#contact" class="btn btn-white btn-lg px-5 py-3">
                    <?php _e('Plan een gesprek', 'norvault'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>