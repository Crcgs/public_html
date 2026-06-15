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
    <section class="our-vision">
  <h2>Our Vision</h2>

  <p>
    At the Centre for Risk, Compliance & Governance Studies (CRCGS), our vision is to be a globally
    recognized center of excellence that shapes the future of risk management, compliance, and
    governance. We aspire to create a world where strong compliance frameworks, ethical leadership,
    and informed decision-making form the foundation of sustainable and trustworthy financial
    systems.
  </p>

  <p>
    As financial systems grow more interconnected and technology-driven, risks continue to evolve
    in scale and complexity. Our vision is to anticipate these changes and lead the global
    conversation on emerging threats, regulatory transformation, and innovative compliance
    solutions. CRCGS seeks to remain at the forefront of thought leadership by continuously adapting
    to global developments and regulatory expectations.
  </p>

  <p>
    We envision a professional community that is empowered, skilled, and confident in addressing
    financial crime and governance challenges. By promoting continuous learning and knowledge
    sharing, CRCGS aims to elevate the role of compliance and risk professionals as strategic
    partners within their organizations, rather than reactive control functions.
  </p>

  <p>
    Collaboration lies at the core of our vision. We strive to connect regulators, institutions,
    industry experts, and academics on a common platform to exchange insights and best practices.
    Through global partnerships and cross-border engagement, we seek to contribute to harmonized
    compliance standards and collective action against financial crime.
  </p>

  <p>
    Ultimately, CRCGS envisions a future where integrity, transparency, and accountability are
    embedded in organizational culture across industries and jurisdictions. By advancing knowledge,
    fostering innovation, and nurturing professional excellence, we aim to play a meaningful role
    in building resilient institutions and a safer global financial ecosystem.
  </p>
</section>
<style>
    /* Vision Section Styling */
.our-vision {
  max-width: 1100px;
  margin: 0 auto;
  padding: 60px 20px;
  font-family: "Arial", "Helvetica", sans-serif;
  color: #1f2933;
  line-height: 1.7;
}

/* Centered Heading */
.our-vision h2 {
  text-align: center;
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 40px;
  color: #0f172a;
  position: relative;
}

/* Heading underline */
.our-vision h2::after {
  content: "";
  display: block;
  width: 80px;
  height: 4px;
  background-color: #2563eb;
  margin: 15px auto 0;
  border-radius: 2px;
}

/* Paragraphs */
.our-vision p {
  font-size: 17px;
  margin-bottom: 22px;
  text-align: justify;
}

/* Tablet */
@media (max-width: 768px) {
  .our-vision {
    padding: 50px 18px;
  }

  .our-vision h2 {
    font-size: 30px;
    margin-bottom: 30px;
  }

  .our-vision p {
    font-size: 16px;
  }
}

/* Mobile */
@media (max-width: 480px) {
  .our-vision {
    padding: 40px 15px;
  }

  .our-vision h2 {
    font-size: 26px;
  }

  .our-vision p {
    font-size: 15px;
    text-align: left;
  }
}

</style>