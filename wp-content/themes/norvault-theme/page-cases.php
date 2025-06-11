<?php
/**
 * Template Name: Cases
 * 
 * @package Norvault
 */

get_header(); ?>

<section class="container py-5">
    <h1 class="text-center mb-5" data-aos="fade-up">Cases</h1>
    <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="100">
        Ontdek hoe we andere organisaties hebben geholpen met hun informatiebeveiliging.
    </p>
    
    <!-- Case: Softwareleverancier -->
    <div class="case-card mb-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="text-primary mb-3">Softwareleverancier</h3>
                <div class="case-meta mb-3">
                    <span class="badge bg-primary me-2">ISO 27001</span>
                    <span class="badge bg-secondary me-2">GDPR</span>
                    <span class="badge bg-info">50+ medewerkers</span>
                </div>
                <h5>De uitdaging</h5>
                <p>Een snelgroeiende SaaS-leverancier kreeg steeds vaker vragen van enterprise klanten over hun security maatregelen. Ze hadden een ISO 27001 certificaat nodig om grote deals binnen te halen.</p>
                
                <h5 class="mt-4">Onze aanpak</h5>
                <ul>
                    <li>Complete ISMS implementatie in 3 maanden</li>
                    <li>Praktische procedures die aansluiten bij agile werken</li>
                    <li>Training voor ontwikkelaars in secure coding</li>
                    <li>Begeleiding tijdens certificeringsaudit</li>
                </ul>
                
                <h5 class="mt-4">Het resultaat</h5>
                <p class="mb-0"><strong>✓ ISO 27001 gecertificeerd in één keer</strong><br>
                ✓ 3 nieuwe enterprise klanten binnen 6 maanden<br>
                ✓ Security is nu onderdeel van hun USP</p>
            </div>
            <div class="col-lg-6">
                <div class="case-image">
                    <img src="<?php echo norvault_get_placeholder_image(600, 400, 'Software+Case'); ?>" class="img-fluid rounded shadow" alt="Software case">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Case: Maakindustrie -->
    <div class="case-card mb-5" data-aos="fade-up">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="text-primary mb-3">Maakindustrie</h3>
                <div class="case-meta mb-3">
                    <span class="badge bg-primary me-2">NIS2</span>
                    <span class="badge bg-secondary me-2">OT Security</span>
                    <span class="badge bg-info">200+ medewerkers</span>
                </div>
                <h5>De uitdaging</h5>
                <p>Een productiebedrijf met slimme machines moest voldoen aan NIS2. Hun IT en OT omgevingen waren nog niet voldoende gescheiden en er was geen duidelijk security beleid.</p>
                
                <h5 class="mt-4">Onze aanpak</h5>
                <ul>
                    <li>NIS2 gap analyse en roadmap</li>
                    <li>Segmentatie van IT/OT netwerken</li>
                    <li>Incident response procedures</li>
                    <li>Supply chain security assessment</li>
                </ul>
                
                <h5 class="mt-4">Het resultaat</h5>
                <p class="mb-0"><strong>✓ Volledig NIS2 compliant</strong><br>
                ✓ 0 security incidenten in productieomgeving<br>
                ✓ Verbeterde relatie met toeleveranciers</p>
            </div>
            <div class="col-lg-6">
                <div class="case-image">
                    <img src="<?php echo norvault_get_placeholder_image(600, 400, 'Manufacturing+Case'); ?>" class="img-fluid rounded shadow" alt="Manufacturing case">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Case: E-commerce -->
    <div class="case-card mb-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="text-primary mb-3">E-commerce bedrijf</h3>
                <div class="case-meta mb-3">
                    <span class="badge bg-primary me-2">PCI-DSS</span>
                    <span class="badge bg-secondary me-2">GDPR</span>
                    <span class="badge bg-info">30+ medewerkers</span>
                </div>
                <h5>De uitdaging</h5>
                <p>Een online retailer verwerkte duizenden betalingen per dag maar had geen formeel security programma. Ze moesten voldoen aan PCI-DSS en GDPR om boetes te voorkomen.</p>
                
                <h5 class="mt-4">Onze aanpak</h5>
                <ul>
                    <li>PCI-DSS compliance traject</li>
                    <li>Privacy by design implementatie</li>
                    <li>Penetration testing webshop</li>
                    <li>Security awareness voor klantenservice</li>
                </ul>
                
                <h5 class="mt-4">Het resultaat</h5>
                <p class="mb-0"><strong>✓ PCI-DSS Level 1 compliant</strong><br>
                ✓ 40% minder frauduleuze transacties<br>
                ✓ Verhoogd vertrouwen bij klanten</p>
            </div>
            <div class="col-lg-6">
                <div class="case-image">
                    <img src="<?php echo norvault_get_placeholder_image(600, 400, 'E-commerce+Case'); ?>" class="img-fluid rounded shadow" alt="E-commerce case">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Case: Startup -->
    <div class="case-card mb-5" data-aos="fade-up">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="text-primary mb-3">FinTech Startup</h3>
                <div class="case-meta mb-3">
                    <span class="badge bg-primary me-2">SOC2</span>
                    <span class="badge bg-secondary me-2">ISO 27001</span>
                    <span class="badge bg-info">15 medewerkers</span>
                </div>
                <h5>De uitdaging</h5>
                <p>Een FinTech startup moest snel SOC2 compliant worden voor een belangrijke Amerikaanse klant. Ze hadden 3 maanden de tijd en geen interne security expertise.</p>
                
                <h5 class="mt-4">Onze aanpak</h5>
                <ul>
                    <li>Versneld SOC2 Type I traject</li>
                    <li>Cloud security assessment (AWS)</li>
                    <li>Security policies en procedures</li>
                    <li>Medewerker onboarding programma</li>
                </ul>
                
                <h5 class="mt-4">Het resultaat</h5>
                <p class="mb-0"><strong>✓ SOC2 Type I rapport in 10 weken</strong><br>
                ✓ Deal met Amerikaanse klant gesloten<br>
                ✓ Fundament gelegd voor verdere groei</p>
            </div>
            <div class="col-lg-6">
                <div class="case-image">
                    <img src="<?php echo norvault_get_placeholder_image(600, 400, 'FinTech+Case'); ?>" class="img-fluid rounded shadow" alt="Startup case">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Case: AI Scale-up -->
    <div class="case-card mb-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="text-primary mb-3">AI Scale-up</h3>
                <div class="case-meta mb-3">
                    <span class="badge bg-primary me-2">AI Act</span>
                    <span class="badge bg-secondary me-2">ISO 27001</span>
                    <span class="badge bg-info">80+ medewerkers</span>
                </div>
                <h5>De uitdaging</h5>
                <p>Een AI bedrijf dat werkt met gevoelige gezondheidsdata moest anticiperen op de AI Act en tegelijk hun bestaande security verbeteren voor nieuwe zorgklanten.</p>
                
                <h5 class="mt-4">Onze aanpak</h5>
                <ul>
                    <li>AI Act readiness assessment</li>
                    <li>Ethische AI framework</li>
                    <li>Data governance structuur</li>
                    <li>Privacy enhancing technologies</li>
                </ul>
                
                <h5 class="mt-4">Het resultaat</h5>
                <p class="mb-0"><strong>✓ Eerste Nederlandse AI bedrijf met ethics certificaat</strong><br>
                ✓ Nieuwe contracten met 2 grote ziekenhuizen<br>
                ✓ Voorbereid op toekomstige wetgeving</p>
            </div>
            <div class="col-lg-6">
                <div class="case-image">
                    <img src="<?php echo norvault_get_placeholder_image(600, 400, 'AI+Case'); ?>" class="img-fluid rounded shadow" alt="AI case">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sectors -->
<section class="bg-light py-5">
    <div class="container">
        <h3 class="text-center mb-5">Sectoren waarin we actief zijn</h3>
        <div class="row text-center">
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-cpu text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">Software & SaaS</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-gear text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">Maakindustrie</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-cart text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">E-commerce</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-graph-up text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">FinTech</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-heart-pulse text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">Healthcare</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-lightning text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">Energie</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-truck text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">Logistiek</h6>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <i class="bi bi-robot text-primary" style="font-size: 3rem;"></i>
                <h6 class="mt-2">AI & Tech</h6>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="container py-5">
    <div class="text-center">
        <h3 class="mb-4">Benieuwd wat we voor jou kunnen betekenen?</h3>
        <p class="lead mb-4">Elke organisatie is uniek. Laten we kijken hoe we jou het beste kunnen helpen.</p>
        <a href="/contact" class="btn btn-primary btn-lg">Bespreek jouw situatie</a>
    </div>
</section>

<style>
.case-card {
    background: #f8f9fa;
    padding: 3rem;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.case-card:hover {
    transform: translateY(-5px);
}

.case-meta .badge {
    font-weight: normal;
    padding: 0.5rem 1rem;
}

.case-image {
    position: relative;
}

.case-image img {
    width: 100%;
    height: auto;
}

.case-card h5 {
    color: #333;
    font-size: 1.1rem;
    font-weight: 600;
}

.case-card ul {
    padding-left: 1.5rem;
}

.case-card ul li {
    margin-bottom: 0.5rem;
}
</style>

<?php get_footer(); ?>