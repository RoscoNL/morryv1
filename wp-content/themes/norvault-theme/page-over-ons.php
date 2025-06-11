<?php
/**
 * Template Name: Over Ons
 * 
 * @package Norvault
 */

get_header(); ?>

<section class="container py-5">
    <h1 class="section-title" data-aos="fade-up">Over Norvault Security</h1>
    <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="100">
        Norvault is opgericht met één doel: informatiebeveiliging eenvoudiger, concreter en effectiever maken voor organisaties die geen tijd hebben om zich te verliezen in abstracte frameworks en audits.
    </p>

    <div class="row align-items-center mb-5">
        <div class="col-lg-6" data-aos="fade-right">
            <h4>Samen maken we Europa veiliger</h4>
            <p>
                Waar security voor veel bedrijven voelt als een last, maken wij het werkbaar en beheersbaar. Wij helpen organisaties om hun cybersecurityprogramma te verbeteren met een praktische aanpak en realistische stappen. Geen ingewikkelde modellen, maar duidelijke actiepunten.
            </p>
            <p>
                Vanuit onze ervaring zien we dat goed georganiseerde beveiliging niet alleen risico's vermindert, maar ook vertrouwen vergroot bij klanten, leveranciers en auditors.
            </p>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left">
            <img src="<?php echo norvault_get_placeholder_image(600, 400, 'Team Working'); ?>" class="img-fluid rounded shadow-sm" alt="Norvault Security Team">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up">
            <h4>Een team van ervaren specialisten</h4>
            <p>
                Norvault bestaat uit een multidisciplinair team van specialisten: van ISO 27001-implementators tot auditors, pentesters en CISO's. We spreken niet alleen de taal van security, maar ook die van de business. Juist dat maakt ons waardevol voor organisaties die grip willen krijgen op informatiebeveiliging, zonder eindeloze theoretische sessies.
            </p>
            <p>
                Door onze ervaring in verschillende sectoren weten we precies wat er speelt. We brengen structuur aan, pakken aan, en zorgen dat jouw organisatie écht verder komt.
            </p>
        </div>
    </div>

    <!-- Team Members -->
    <div class="row mb-5">
        <div class="col-12">
            <h4 class="text-center mb-4">Ons team</h4>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="text-center">
                <img src="<?php echo norvault_get_placeholder_image(150, 150, 'JvdB'); ?>" class="rounded-circle mb-3" width="150" height="150" alt="Team member">
                <h5>Jan van der Berg</h5>
                <p class="text-muted">Lead vCISO</p>
                <p class="small">15+ jaar ervaring in informatiebeveiliging en compliance</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="text-center">
                <img src="<?php echo norvault_get_placeholder_image(150, 150, 'SdV'); ?>" class="rounded-circle mb-3" width="150" height="150" alt="Team member">
                <h5>Sarah de Vries</h5>
                <p class="text-muted">Security Auditor</p>
                <p class="small">Gecertificeerd ISO 27001 Lead Auditor</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="text-center">
                <img src="<?php echo norvault_get_placeholder_image(150, 150, 'MJ'); ?>" class="rounded-circle mb-3" width="150" height="150" alt="Team member">
                <h5>Mark Jansen</h5>
                <p class="text-muted">Penetration Tester</p>
                <p class="small">Certified Ethical Hacker met focus op web applicaties</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" data-aos="fade-up">
            <h4>Onze aanpak: no-nonsense en resultaatgericht</h4>
            <p>
                Bij Norvault zeggen we wat we doen, en doen we wat we zeggen. Geen loze beloftes of gladde praatjes. We geloven in transparantie, vast aanspreekpunt én ruimte om net dat beetje extra te doen. Een uurtje meer? Geen probleem. Wat telt, is dat het geregeld wordt.
            </p>
            <p>
                We werken met maandprijzen, concrete deliverables en korte lijnen. En in plaats van alles alleen door de securitybril te bekijken, maken we de vertaling naar wat écht belangrijk is voor jouw organisatie.
            </p>
        </div>
    </div>

    <!-- Waarom kiezen voor Norvault -->
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="text-center mb-4">Waarom kiezen voor Norvault?</h4>
        </div>
        <div class="col-md-3 text-center mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-3">
                <i class="bi bi-people-fill text-primary" style="font-size: 3rem;"></i>
            </div>
            <h6>Persoonlijk contact</h6>
            <p class="small">Altijd dezelfde contactpersoon die jouw organisatie kent</p>
        </div>
        <div class="col-md-3 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-3">
                <i class="bi bi-speedometer text-primary" style="font-size: 3rem;"></i>
            </div>
            <h6>Snel schakelen</h6>
            <p class="small">Korte lijnen en directe actie wanneer nodig</p>
        </div>
        <div class="col-md-3 text-center mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="mb-3">
                <i class="bi bi-currency-euro text-primary" style="font-size: 3rem;"></i>
            </div>
            <h6>Transparante prijzen</h6>
            <p class="small">Vaste maandprijzen zonder verrassingen</p>
        </div>
        <div class="col-md-3 text-center mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="mb-3">
                <i class="bi bi-check-circle-fill text-primary" style="font-size: 3rem;"></i>
            </div>
            <h6>Bewezen resultaat</h6>
            <p class="small">100% slagingspercentage bij audits</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="/contact" class="btn btn-primary btn-lg">📞 Neem contact op</a>
    </div>
</section>

<!-- Onze waarden -->
<section class="bg-light py-5">
    <div class="container">
        <h3 class="text-center mb-5">Onze waarden</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Praktisch</h5>
                        <p class="card-text">We houden niet van theoretische modellen. Onze adviezen zijn direct toepasbaar en leveren meteen resultaat op.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Betrokken</h5>
                        <p class="card-text">We zijn geen externe adviseurs maar onderdeel van je team. Jouw succes is ons succes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Transparant</h5>
                        <p class="card-text">Open communicatie, duidelijke afspraken en geen verborgen kosten. Zo werken wij.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.section-title {
    margin-top: 60px;
    margin-bottom: 30px;
    text-align: center;
}

.lead {
    font-size: 1.25rem;
}

.shadow-sm {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.shadow-sm:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.btn-primary {
    background-color: #0d6efd;
    border: none;
}

.btn-primary:hover {
    background-color: #0b5ed7;
}

h1, h2, h3, h4, h5 {
    color: #0d6efd;
}
</style>

<?php get_footer(); ?>