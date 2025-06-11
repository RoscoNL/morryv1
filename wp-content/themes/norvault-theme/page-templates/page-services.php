<?php
/**
 * Template Name: Services Page
 * 
 * @package Norvault
 */

get_header(); ?>

<!-- Services Overview Section -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">
            Onze diensten
        </h1>
        <p class="lead mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
            Als jouw virtuele CISO verzorgen we alles wat nodig is voor effectieve informatiebeveiliging – strategisch én operationeel.
        </p>
    </div>

        <!-- Service Categories -->
        <div class="row g-5">
            <!-- ISMS Beheer -->
            <div class="col-12" data-aos="fade-up">
                <div class="service-detail-card">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="service-icon-large mb-4">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h3 class="h2 fw-bold mb-3"><?php _e('ISMS-beheer & Documentatie', 'norvault'); ?></h3>
                            <p class="lead mb-4">
                                <?php _e('Stop met worstelen met Excel sheets en verouderde documenten. Wij zetten een volledig geautomatiseerd ISMS voor je op dat altijd up-to-date blijft.', 'norvault'); ?>
                            </p>
                            <ul class="feature-list-detailed">
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Volledig ingericht ISMS volgens ISO 27001', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Automatische documentgeneratie', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Risico register & behandelplannen', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Statement of Applicability (SoA)', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Jaarlijkse management review', 'norvault'); ?></li>
                            </ul>
                            <a href="#contact" class="btn btn-primary btn-lg mt-3">
                                <?php _e('Start vandaag', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/isms-dashboard.png" 
                                     alt="ISMS Dashboard" 
                                     class="img-fluid rounded shadow-lg"
                                     loading="lazy">
                                <div class="floating-card" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="bi bi-check-circle text-success"></i>
                                    <span><?php _e('100% Audit-proof', 'norvault'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Risicoanalyse -->
            <div class="col-12" data-aos="fade-up">
                <div class="service-detail-card">
                    <div class="row align-items-center flex-lg-row-reverse">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="service-icon-large mb-4">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h3 class="h2 fw-bold mb-3"><?php _e('Jaarlijkse Risicoanalyse', 'norvault'); ?></h3>
                            <p class="lead mb-4">
                                <?php _e('Weet precies waar je kwetsbaar bent en wat je eraan kunt doen. Onze risicoanalyse geeft je concrete actiepunten, geen vage adviezen.', 'norvault'); ?>
                            </p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="stat-box">
                                        <div class="stat-number-small">500+</div>
                                        <div class="stat-label-small"><?php _e('Analyses uitgevoerd', 'norvault'); ?></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="stat-box">
                                        <div class="stat-number-small">95%</div>
                                        <div class="stat-label-small"><?php _e('Risico reductie', 'norvault'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="feature-list-detailed">
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Asset-based risk assessment', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Threat modeling & vulnerability scanning', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Business impact analyse', 'norvault'); ?></li>
                                <li><i class="bi bi-check-circle-fill"></i> <?php _e('Prioritized action plans', 'norvault'); ?></li>
                            </ul>
                            <a href="#contact" class="btn btn-primary btn-lg mt-3">
                                <?php _e('Plan een risicoanalyse', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-image-wrapper">
                                <div class="risk-matrix">
                                    <div class="risk-cell low"><?php _e('Laag', 'norvault'); ?></div>
                                    <div class="risk-cell medium"><?php _e('Medium', 'norvault'); ?></div>
                                    <div class="risk-cell high"><?php _e('Hoog', 'norvault'); ?></div>
                                    <div class="risk-cell critical"><?php _e('Kritiek', 'norvault'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Audits -->
            <div class="col-12" data-aos="fade-up">
                <div class="service-detail-card">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="service-icon-large mb-4">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h3 class="h2 fw-bold mb-3"><?php _e('Interne & Externe Audits', 'norvault'); ?></h3>
                            <p class="lead mb-4">
                                <?php _e('Geen stress meer voor audits. Wij bereiden alles voor, begeleiden het proces en zorgen dat je glansrijk slaagt.', 'norvault'); ?>
                            </p>
                            <div class="audit-process mb-4">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-text"><?php _e('Pre-audit assessment', 'norvault'); ?></div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-text"><?php _e('Gap analyse', 'norvault'); ?></div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-text"><?php _e('Audit begeleiding', 'norvault'); ?></div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-text"><?php _e('Follow-up acties', 'norvault'); ?></div>
                                </div>
                            </div>
                            <a href="#contact" class="btn btn-primary btn-lg mt-3">
                                <?php _e('Bereid je voor op audit', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="audit-success-card">
                                <h4><?php _e('Onze audit scorecard', 'norvault'); ?></h4>
                                <div class="score-item">
                                    <span><?php _e('ISO 27001 Audits', 'norvault'); ?></span>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 100%">100%</div>
                                    </div>
                                </div>
                                <div class="score-item">
                                    <span><?php _e('NIS2 Compliance', 'norvault'); ?></span>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 100%">100%</div>
                                    </div>
                                </div>
                                <div class="score-item">
                                    <span><?php _e('SOC2 Readiness', 'norvault'); ?></span>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" style="width: 98%">98%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pentest -->
            <div class="col-12" data-aos="fade-up">
                <div class="service-detail-card gradient-border">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="service-icon-large mb-4">
                                <i class="bi bi-search"></i>
                            </div>
                            <h3 class="h2 fw-bold mb-3"><?php _e('Penetration Testing', 'norvault'); ?></h3>
                            <p class="lead mx-auto" style="max-width: 800px;">
                                <?php _e('Ontdek kwetsbaarheden voordat hackers dat doen. Onze certified ethical hackers testen je systemen grondig en geven je praktische oplossingen.', 'norvault'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-3 col-6 text-center">
                            <div class="pentest-type-card">
                                <i class="bi bi-globe fs-1 mb-3"></i>
                                <h5><?php _e('Web Application', 'norvault'); ?></h5>
                                <p class="small"><?php _e('OWASP Top 10 testing', 'norvault'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <div class="pentest-type-card">
                                <i class="bi bi-hdd-network fs-1 mb-3"></i>
                                <h5><?php _e('Infrastructure', 'norvault'); ?></h5>
                                <p class="small"><?php _e('Network & server testing', 'norvault'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <div class="pentest-type-card">
                                <i class="bi bi-phone fs-1 mb-3"></i>
                                <h5><?php _e('Mobile Apps', 'norvault'); ?></h5>
                                <p class="small"><?php _e('iOS & Android testing', 'norvault'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <div class="pentest-type-card">
                                <i class="bi bi-cloud fs-1 mb-3"></i>
                                <h5><?php _e('Cloud Security', 'norvault'); ?></h5>
                                <p class="small"><?php _e('AWS, Azure, GCP testing', 'norvault'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#contact" class="btn btn-primary btn-lg">
                            <?php _e('Vraag een pentest aan', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Training -->
            <div class="col-12" data-aos="fade-up">
                <div class="service-detail-card">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="service-icon-large mb-4">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <h3 class="h2 fw-bold mb-3"><?php _e('Security Awareness Training', 'norvault'); ?></h3>
                            <p class="lead mb-4">
                                <?php _e('Je medewerkers zijn je eerste verdedigingslinie. Wij trainen ze om cyberdreigingen te herkennen en veilig te werken.', 'norvault'); ?>
                            </p>
                            <div class="training-stats mb-4">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="stat-circle">
                                            <span class="stat-value">92%</span>
                                            <span class="stat-label"><?php _e('Minder incidents', 'norvault'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat-circle">
                                            <span class="stat-value">15min</span>
                                            <span class="stat-label"><?php _e('Per training', 'norvault'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat-circle">
                                            <span class="stat-value">4.8/5</span>
                                            <span class="stat-label"><?php _e('Waardering', 'norvault'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php _e('Training modules:', 'norvault'); ?></h5>
                            <div class="training-modules">
                                <span class="module-badge">Phishing herkenning</span>
                                <span class="module-badge">Wachtwoordbeveiliging</span>
                                <span class="module-badge">Social engineering</span>
                                <span class="module-badge">Data handling</span>
                                <span class="module-badge">Incident response</span>
                                <span class="module-badge">Remote werken</span>
                            </div>
                            <a href="#contact" class="btn btn-primary btn-lg mt-4">
                                <?php _e('Start met trainen', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="training-preview">
                                <div class="training-screen">
                                    <div class="screen-header">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="screen-content">
                                        <h6><?php _e('Interactieve phishing simulatie', 'norvault'); ?></h6>
                                        <div class="email-preview">
                                            <div class="email-header">
                                                <strong><?php _e('Van:', 'norvault'); ?></strong> noreply@amaz0n.com<br>
                                                <strong><?php _e('Onderwerp:', 'norvault'); ?></strong> <?php _e('Uw pakket kan niet worden bezorgd', 'norvault'); ?>
                                            </div>
                                            <div class="email-body">
                                                <p><?php _e('Klik hier om uw bezorging opnieuw te plannen...', 'norvault'); ?></p>
                                                <div class="warning-badge">
                                                    <i class="bi bi-exclamation-triangle"></i> <?php _e('Phishing waarschuwing!', 'norvault'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Packages Comparison -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">
                <?php _e('Kies het pakket dat bij je past', 'norvault'); ?>
            </h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                <?php _e('Van startup tot enterprise, we hebben voor elk bedrijf de juiste oplossing', 'norvault'); ?>
            </p>
        </div>
        
        <!-- Package comparison table -->
        <div class="comparison-table-wrapper" data-aos="fade-up" data-aos-delay="200">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>
                            <div class="package-header">
                                <h4><?php _e('Basis', 'norvault'); ?></h4>
                                <p class="price">€1.250<span>/maand</span></p>
                            </div>
                        </th>
                        <th>
                            <div class="package-header featured">
                                <span class="badge bg-primary"><?php _e('Populair', 'norvault'); ?></span>
                                <h4><?php _e('Plus', 'norvault'); ?></h4>
                                <p class="price">€2.499<span>/maand</span></p>
                            </div>
                        </th>
                        <th>
                            <div class="package-header">
                                <h4><?php _e('Premium', 'norvault'); ?></h4>
                                <p class="price">€3.699<span>/maand</span></p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="feature-name"><?php _e('vCISO uren per maand', 'norvault'); ?></td>
                        <td>8 uur</td>
                        <td class="featured">16 uur</td>
                        <td>24 uur</td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('ISMS Setup & beheer', 'norvault'); ?></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                        <td class="featured"><i class="bi bi-check-circle text-success"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('Jaarlijkse risicoanalyse', 'norvault'); ?></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                        <td class="featured"><i class="bi bi-check-circle text-success"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('Interne audits', 'norvault'); ?></td>
                        <td><i class="bi bi-x-circle text-muted"></i></td>
                        <td class="featured"><i class="bi bi-check-circle text-success"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('Externe audit begeleiding', 'norvault'); ?></td>
                        <td><i class="bi bi-x-circle text-muted"></i></td>
                        <td class="featured"><i class="bi bi-x-circle text-muted"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('Penetration testing', 'norvault'); ?></td>
                        <td><i class="bi bi-x-circle text-muted"></i></td>
                        <td class="featured"><i class="bi bi-x-circle text-muted"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('Security awareness training', 'norvault'); ?></td>
                        <td>Jaarlijks</td>
                        <td class="featured">Halfjaarlijks</td>
                        <td>Elk kwartaal</td>
                    </tr>
                    <tr>
                        <td class="feature-name"><?php _e('24/7 Support', 'norvault'); ?></td>
                        <td><i class="bi bi-x-circle text-muted"></i></td>
                        <td class="featured"><i class="bi bi-check-circle text-success"></i></td>
                        <td><i class="bi bi-check-circle text-success"></i></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><a href="#contact" class="btn btn-outline-primary"><?php _e('Kies Basis', 'norvault'); ?></a></td>
                        <td class="featured"><a href="#contact" class="btn btn-primary"><?php _e('Kies Plus', 'norvault'); ?></a></td>
                        <td><a href="#contact" class="btn btn-outline-primary"><?php _e('Kies Premium', 'norvault'); ?></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4"><?php _e('Veelgestelde vragen', 'norvault'); ?></h2>
                <p class="lead text-muted mb-4">
                    <?php _e('Alles wat je wilt weten over onze diensten en werkwijze.', 'norvault'); ?>
                </p>
                <a href="#contact" class="btn btn-primary">
                    <?php _e('Andere vraag? Neem contact op', 'norvault'); ?>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item" data-aos="fade-up">
                        <h3 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                                <?php _e('Wat is het verschil tussen een vCISO en een consultant?', 'norvault'); ?>
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php _e('Een vCISO is onderdeel van je team en denkt strategisch mee over de lange termijn. Een consultant komt voor een specifiek project en vertrekt weer. Wij blijven betrokken, kennen je organisatie door en door, en zijn altijd bereikbaar voor vragen.', 'norvault'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
                                <?php _e('Hoe snel kunnen we starten?', 'norvault'); ?>
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php _e('We kunnen binnen 48 uur na ondertekening starten. De eerste week gebruiken we voor een grondige assessment, daarna gaan we direct aan de slag met de hoogste prioriteiten.', 'norvault'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">
                                <?php _e('Werken jullie ook met kleine bedrijven?', 'norvault'); ?>
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php _e('Absoluut! Onze Basis pakket is speciaal ontworpen voor startups en MKB bedrijven. We passen onze aanpak aan op jouw grootte en budget, zonder concessies te doen aan kwaliteit.', 'norvault'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false">
                                <?php _e('Kunnen jullie helpen met certificering?', 'norvault'); ?>
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php _e('Ja, we begeleiden het complete certificeringstraject voor ISO 27001, SOC2, en andere frameworks. Van gap-analyse tot audit-begeleiding, we zorgen dat je er klaar voor bent.', 'norvault'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-gradient-section text-center text-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="display-4 fw-bold mb-4">
                    <?php _e('Klaar om je security naar een hoger niveau te tillen?', 'norvault'); ?>
                </h2>
                <p class="lead mb-5">
                    <?php _e('Laten we samen kijken hoe we jouw informatiebeveiliging kunnen verbeteren', 'norvault'); ?>
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="#contact" class="btn btn-white btn-lg px-5">
                        <?php _e('Start vandaag', 'norvault'); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="tel:+31201234567" class="btn btn-outline-light btn-lg px-5">
                        <i class="bi bi-telephone"></i> <?php _e('Bel direct', 'norvault'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Page specific styles */
.page-header-section {
    background: var(--gradient-dark);
    min-height: 50vh;
    position: relative;
}

.page-header-bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 50%, rgba(0, 212, 170, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(102, 126, 234, 0.3) 0%, transparent 50%);
}

.page-header-wave {
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.page-header-wave svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 60px;
}

.service-detail-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: var(--shadow-lg);
    margin-bottom: 3rem;
    position: relative;
    overflow: hidden;
}

.service-detail-card.gradient-border {
    background: linear-gradient(white, white) padding-box,
                var(--gradient-primary) border-box;
    border: 3px solid transparent;
}

.service-icon-large {
    width: 100px;
    height: 100px;
    background: var(--gradient-primary);
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2.5rem;
}

.feature-list-detailed {
    list-style: none;
    padding: 0;
}

.feature-list-detailed li {
    padding: 0.75rem 0;
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 1.1rem;
}

.feature-list-detailed li i {
    color: var(--success);
    font-size: 1.25rem;
    flex-shrink: 0;
}

.service-image-wrapper {
    position: relative;
}

.floating-card {
    position: absolute;
    bottom: 2rem;
    right: -1rem;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    box-shadow: var(--shadow-xl);
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
}

.stat-box {
    background: var(--light);
    padding: 1.5rem;
    border-radius: 15px;
    text-align: center;
}

.stat-number-small {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
}

.stat-label-small {
    font-size: 0.875rem;
    color: var(--gray);
}

.risk-matrix {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    max-width: 400px;
    margin: 0 auto;
}

.risk-cell {
    padding: 3rem;
    border-radius: 15px;
    text-align: center;
    font-weight: 600;
    color: white;
    position: relative;
    overflow: hidden;
}

.risk-cell.low {
    background: #10B981;
}

.risk-cell.medium {
    background: #F59E0B;
}

.risk-cell.high {
    background: #EF4444;
}

.risk-cell.critical {
    background: #7C3AED;
}

.risk-cell::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255,255,255,0.1);
    transform: rotate(45deg);
}

.audit-process {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin-bottom: 2rem;
}

.audit-process::before {
    content: '';
    position: absolute;
    top: 25px;
    left: 50px;
    right: 50px;
    height: 2px;
    background: var(--light);
    z-index: 0;
}

.process-step {
    position: relative;
    z-index: 1;
    text-align: center;
}

.step-number {
    width: 50px;
    height: 50px;
    background: var(--gradient-primary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin: 0 auto 0.5rem;
}

.step-text {
    font-size: 0.875rem;
    color: var(--gray);
}

.audit-success-card {
    background: var(--light);
    padding: 2rem;
    border-radius: 20px;
}

.score-item {
    margin-bottom: 1.5rem;
}

.score-item span {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.pentest-type-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow-md);
    transition: all var(--transition-normal);
    height: 100%;
}

.pentest-type-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.pentest-type-card i {
    color: var(--primary);
}

.training-stats {
    margin-bottom: 2rem;
}

.stat-circle {
    text-align: center;
}

.stat-circle .stat-value {
    display: block;
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
}

.stat-circle .stat-label {
    display: block;
    font-size: 0.875rem;
    color: var(--gray);
}

.training-modules {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.module-badge {
    background: var(--light);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 500;
}

.training-preview {
    background: var(--gradient-dark);
    padding: 2rem;
    border-radius: 20px;
    box-shadow: var(--shadow-xl);
}

.training-screen {
    background: white;
    border-radius: 10px;
    overflow: hidden;
}

.screen-header {
    background: var(--light);
    padding: 0.75rem;
    display: flex;
    gap: 0.5rem;
}

.screen-header span {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ddd;
}

.screen-header span:first-child {
    background: #EF4444;
}

.screen-header span:nth-child(2) {
    background: #F59E0B;
}

.screen-header span:nth-child(3) {
    background: #10B981;
}

.screen-content {
    padding: 2rem;
}

.email-preview {
    background: var(--light);
    padding: 1rem;
    border-radius: 10px;
    margin-top: 1rem;
}

.email-header {
    font-size: 0.875rem;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #ddd;
}

.warning-badge {
    background: #FEE2E2;
    color: #DC2626;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    margin-top: 1rem;
}

.comparison-table-wrapper {
    overflow-x: auto;
}

.comparison-table {
    width: 100%;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.comparison-table th,
.comparison-table td {
    padding: 1.5rem;
    text-align: center;
    border-bottom: 1px solid var(--light);
}

.comparison-table th {
    background: var(--light);
    font-weight: 600;
}

.package-header {
    text-align: center;
}

.package-header.featured {
    position: relative;
}

.package-header .price {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    margin: 0.5rem 0;
}

.package-header .price span {
    font-size: 1rem;
    font-weight: 400;
    color: var(--gray);
}

.comparison-table .feature-name {
    text-align: left;
    font-weight: 600;
}

.comparison-table td.featured {
    background: rgba(0, 82, 204, 0.05);
}

.comparison-table tfoot td {
    padding: 2rem;
    border-bottom: none;
}

.cta-gradient-section {
    background: var(--gradient-hero);
    position: relative;
    overflow: hidden;
}

.cta-gradient-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate 30s linear infinite;
}

@media (max-width: 991px) {
    .service-detail-card {
        padding: 2rem;
    }
    
    .audit-process {
        flex-direction: column;
        gap: 2rem;
    }
    
    .audit-process::before {
        display: none;
    }
    
    .comparison-table {
        font-size: 0.875rem;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 1rem;
    }
}

@media (max-width: 767px) {
    .risk-matrix {
        grid-template-columns: 1fr;
    }
    
    .risk-cell {
        padding: 2rem;
    }
    
    .training-modules {
        justify-content: center;
    }
}
</style>

<?php get_footer(); ?>