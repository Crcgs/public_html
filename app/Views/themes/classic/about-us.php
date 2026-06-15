
<section id="wrapper">
<div>
    <div class="bradecome-wrap">
        <div class="container">
            <?php if ($page->breadcrumb_active == 1): ?>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                        <li class="breadcrumb-item active"><?= esc($page->title); ?></li>
                    </ol>
                </div>
            <?php else: ?>
                <div class="page-breadcrumb"></div>
            <?php endif; ?>
        </div>
    </div>

     <section class="about-premium">
    <div class="container">
        <div class="row align-items-center">
            <!-- LEFT CONTENT -->
            <div class="col-md-6">
                <span class="section-tag">Who We Are</span>
                <h2>
                    Trusted Global Platform for<br>
                    Risk & Compliance
                </h2>
                <p class="intro-text">
                    The Centre for Risk, Compliance & Governance Studies (CRCGS) is a global knowledge and professional development platform dedicated to strengthening the fight against financial crime and enhancing governance standards worldwide. We serve as a trusted hub for risk, compliance, AML, sanctions, and governance professionals seeking practical insights, credible research, and future-ready skills.

                </p>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="col-lg-6">
                <div class="about-image-wrap">
                    <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="Risk & Compliance">
                </div>
            </div>
            
            <div class="col-lg-12">
                <br>
                <p>
Founded with the belief that effective compliance is built on knowledge, collaboration, and innovation, CRCGS brings together industry experts, practitioners, institutions, and thought leaders from across the world. Our platform bridges the gap between regulation and real-world application by delivering content that is both authoritative and practical.
<br><br>

Through our Knowledge Hub, we publish in-depth articles, analysis, and insights on topics such as money laundering, economic sanctions, fraud, cybercrime, ESG risk, and regulatory compliance. Our content is created by experienced professionals who understand the challenges faced by compliance teams, financial institutions, and regulators in an increasingly complex global environment.
<br><br>
Beyond content, CRCGS is committed to professional growth and capacity building. We design certifications, learning programs, and events that equip professionals with relevant, up-to-date skills aligned with global regulatory expectations. By fostering a collaborative global community, we aim to elevate compliance standards and contribute meaningfully to financial system integrity.
<br><br>
CRCGS is more than a knowledge platform — it is a growing ecosystem dedicated to empowering professionals to lead with confidence, integrity, and impact.</p>
<section class="why-choose-us">
  <h2>Why Choose Us</h2>

  <p>
    In a rapidly evolving regulatory landscape, choosing the right knowledge and learning partner is critical.
    CRCGS stands out for its credibility, relevance, and practitioner-focused approach.
  </p>

  <h3>1. Trusted, Practitioner-Led Content</h3>
  <p>
    Our insights are written and curated by experienced professionals and subject-matter experts.
    We focus on real-world challenges, emerging risks, and regulatory developments that matter to
    today’s compliance and risk professionals.
  </p>

  <h3>2. Global Perspective, Local Relevance</h3>
  <p>
    Financial crime and compliance risks are global, but their impact is often local.
    CRCGS provides a balanced global outlook while addressing region-specific risks,
    regulatory expectations, and best practices.
  </p>

  <h3>3. Practical and Actionable Learning</h3>
  <p>
    We go beyond theory. Our articles, tools, and certifications are designed to help professionals
    apply knowledge directly to their roles — whether in banking, fintech, corporates, or advisory firms.
  </p>

  <h3>4. Future-Ready Focus</h3>
  <p>
    From AI-driven financial crime detection to evolving sanctions regimes, CRCGS keeps professionals
    ahead of change. We focus on emerging trends, technologies, and regulatory shifts shaping the
    future of risk and compliance.
  </p>

  <h3>5. Community and Collaboration</h3>
  <p>
    CRCGS is building a vibrant professional community. Through events, publications, and shared
    expertise, we enable collaboration, networking, and continuous learning across borders and sectors.
  </p>

  <p>
    By choosing CRCGS, you gain access to a trusted platform committed to excellence, integrity, and
    impact — helping you navigate complexity, strengthen compliance frameworks, and contribute to
    a safer global financial system.
  </p>
</section>

            </div>
        </div>
    </div>
</section>

<style>
.about-premium {
    padding: 49px 0;
    background: #ffffff;
}
.section-tag {
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 2px;
    color: #2563eb;
    font-weight: 600;
}
.about-premium h2 {
    font-size: 38px;
    font-weight: 700;
    color: #0f172a;
    margin: 15px 0 20px;
    line-height: 1.3;
}
.intro-text {
    font-size: 16px;
    color: #475569;
    margin-bottom: 35px;
    max-width: 520px;
}
.about-image-wrap img {
    width: 100%;
    object-fit: cover;
    border-radius: 14px;
    height: 305px;
}

/* Responsive */
@media (max-width: 991px) {
    .about-image-wrap img {
        height: 235px;
        margin-top: 30px;
    }
}

.why-choose-us{
    margin: 10px 0;
}
</style>

</div>
</section>
