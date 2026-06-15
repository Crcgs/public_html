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
    
    <section class="our-mission">
  <h2>Our Mission</h2>

  <p>
    At the Centre for Risk, Compliance & Governance Studies (CRCGS), our mission is to strengthen
    global compliance standards and contribute to a safer, more transparent financial ecosystem.
    We are committed to empowering professionals, institutions, and policymakers with the
    knowledge, skills, and insights needed to effectively manage risk, combat financial crime,
    and uphold the highest standards of governance.
  </p>

  <p>
    In an increasingly complex and interconnected world, regulatory expectations continue to
    evolve while financial crime grows more sophisticated. CRCGS exists to bridge the gap between
    regulation and real-world implementation. Our mission is to translate complex regulatory
    frameworks into practical, actionable knowledge that professionals can apply with confidence
    in their daily work.
  </p>

  <p>
    We aim to serve as a trusted global knowledge hub by delivering high-quality research,
    practitioner-led insights, and thought leadership across key areas such as anti-money
    laundering, sanctions compliance, fraud prevention, cybersecurity, ESG risk, and corporate
    governance. By fostering informed decision-making, we help organizations strengthen their
    compliance frameworks and build resilient risk management cultures.
  </p>

  <p>
    Professional development is central to our mission. CRCGS is dedicated to building future-ready
    capabilities through structured learning programs, certifications, and continuous education.
    Our offerings are designed to reflect real-world challenges, emerging risks, and global best
    practices, ensuring professionals remain relevant and effective in a rapidly changing
    regulatory environment.
  </p>

  <p>
    Collaboration and community are at the heart of CRCGS. We strive to create a global platform
    where professionals can exchange ideas, share experiences, and learn from one another.
    Through events, publications, and partnerships, we encourage cross-border dialogue and
    collective action in the fight against financial crime.
  </p>

  <p>
    Ultimately, our mission is to elevate the role of risk, compliance, and governance professionals
    as strategic enablers of trust and integrity. By advancing knowledge, promoting ethical
    practices, and supporting professional excellence, CRCGS seeks to make a meaningful and
    lasting impact on the global financial system and the societies it serves.
  </p>
</section>
<style>
    /* General Section Styling */
.our-mission {
  max-width: 1100px;
  margin: 0 auto;
  padding: 60px 20px;
  font-family: "Arial", "Helvetica", sans-serif;
  color: #1f2933;
  line-height: 1.7;
}

/* Centered Heading */
.our-mission h2 {
  text-align: center;
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 40px;
  color: #0f172a;
  position: relative;
}

/* Optional underline for heading */
.our-mission h2::after {
  content: "";
  display: block;
  width: 80px;
  height: 4px;
  background-color: #2563eb;
  margin: 15px auto 0;
  border-radius: 2px;
}

/* Paragraph Styling */
.our-mission p {
  font-size: 17px;
  margin-bottom: 22px;
  text-align: justify;
}

/* Tablet Responsive */
@media (max-width: 768px) {
  .our-mission {
    padding: 50px 18px;
  }

  .our-mission h2 {
    font-size: 30px;
    margin-bottom: 30px;
  }

  .our-mission p {
    font-size: 16px;
  }
}

/* Mobile Responsive */
@media (max-width: 480px) {
  .our-mission {
    padding: 40px 15px;
  }

  .our-mission h2 {
    font-size: 26px;
  }

  .our-mission p {
    font-size: 15px;
    text-align: left;
  }
}

</style>