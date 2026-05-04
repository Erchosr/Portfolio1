<?php
$page      = 'accueil';
$title     = 'Erwan Arnaud — Développeur Web';
$meta_desc = 'Portfolio d\'Erwan Arnaud, étudiant BTS SIO SLAM et développeur web passionné.';
include 'includes/header.php';
?>

<main>
  <div class="container">

    <!-- ======= HERO ======= -->
    <section class="hero">
      <div class="hero-text fade-in">
        <p class="hero-tag">Étudiant BTS SIO SLAM · Lycée Paul Sabatier, Carcassonne</p>
        <h1>Erwan<br><em>Arnaud</em></h1>
        <p class="hero-sub">
          Développeur web passionné — du front au back.
          Je transforme des idées en réalité numérique, avec un intérêt particulier
          pour le développement web et l'intelligence artificielle.
        </p>
        <div class="hero-actions">
          <a href="projets.php" class="btn btn-primary">Voir mes projets</a>
          <a href="contact.php" class="btn btn-outline">Me contacter</a>
          <a href="assets/pdf/CV_Erwan_Arnaud.pdf" class="btn btn-outline" download>CV ↓</a>
        </div>
      </div>
      <div class="hero-avatar fade-in">👨‍💻</div>
    </section>

    <hr class="hero-divider">

    <!-- ======= PRÉSENTATION ======= -->
    <section class="home-section fade-in">
      <h2 class="home-section-title">À propos</h2>

      <div class="about-grid">

        <div class="card about-block">
          <p class="about-label">// présentation</p>
          <p>
            Je m'appelle <strong>Erwan Arnaud</strong>, étudiant en <strong>BTS SIO option SLAM</strong>
            au lycée Paul Sabatier à Carcassonne. J'ai choisi cette filière pour approfondir mes
            compétences en programmation et en génie logiciel.
          </p>
          <p style="margin-top:.85rem;">
            Le développement web me passionne : j'aime l'idée de pouvoir transformer des idées en
            interfaces concrètes, interactives, qui répondent à de vrais besoins. Je suis particulièrement
            attiré par le croisement entre le web et l'intelligence artificielle.
          </p>
        </div>

        <div class="card about-block">
          <p class="about-label">// objectifs</p>
          <p>
            À court terme : valider mon BTS avec de bons résultats, puis poursuivre en
            <strong>licence pro ou école d'ingénieur</strong> pour approfondir le développement web
            et l'IA.
          </p>
          <p style="margin-top:.85rem;">
            À long terme : devenir <strong>développeur full-stack</strong> — ou me spécialiser en
            cybersécurité — et contribuer à des projets qui ont un impact réel.
          </p>
          <div style="margin-top:1.25rem;">
            <a href="assets/pdf/Tableau_Synthese_Erwan_Arnaud.pdf" class="btn btn-outline" style="font-size:.8rem;" target="_blank">
              Tableau de synthèse ↓
            </a>
          </div>
        </div>

      </div>

      <!-- Sujets SLAM -->
      <div class="card" style="margin-top:1.25rem;">
        <p class="about-label">// sujets étudiés en SLAM</p>
        <div class="slam-grid">
          <ul class="slam-list">
            <li>Programmation : HTML, CSS, JavaScript, PHP, SQL</li>
            <li>Algorithmique et structures de données</li>
            <li>Bases de données relationnelles</li>
            <li>Réseaux et télécommunications</li>
          </ul>
          <ul class="slam-list">
            <li>Systèmes d'exploitation (Linux / Windows)</li>
            <li>Architecture matérielle</li>
            <li>Génie logiciel & méthodes agiles</li>
            <li>Sécurité informatique</li>
          </ul>
        </div>
      </div>

    </section>

    <hr class="hero-divider">

    <!-- ======= PROJETS RÉCENTS ======= -->
    <section class="home-section">
      <h2 class="home-section-title">Projets récents</h2>
      <div class="projects-grid">

        <div class="project-card fade-in">
          <div class="project-thumb">🌐</div>
          <div class="project-body">
            <p class="project-type">Site web</p>
            <h3>Nom du projet</h3>
            <p>Courte description — ce que fait le projet et le problème qu'il résout.</p>
            <div class="project-footer">
              <div class="project-stack">
                <span>PHP</span><span>MySQL</span><span>JS</span>
              </div>
              <div class="project-links">
                <a href="#" class="project-link">↗ Démo</a>
              </div>
            </div>
          </div>
        </div>

        <div class="project-card fade-in">
          <div class="project-thumb">📊</div>
          <div class="project-body">
            <p class="project-type">Application</p>
            <h3>Nom du projet</h3>
            <p>Courte description — ce que fait le projet et le problème qu'il résout.</p>
            <div class="project-footer">
              <div class="project-stack">
                <span>HTML</span><span>CSS</span><span>PHP</span>
              </div>
              <div class="project-links">
                <a href="#" class="project-link">↗ Démo</a>
              </div>
            </div>
          </div>
        </div>

        <div class="project-card fade-in">
          <div class="project-thumb">🔧</div>
          <div class="project-body">
            <p class="project-type">Outil / Script</p>
            <h3>Nom du projet</h3>
            <p>Courte description — ce que fait le projet et le problème qu'il résout.</p>
            <div class="project-footer">
              <div class="project-stack">
                <span>Python</span><span>Bash</span>
              </div>
              <div class="project-links">
                <a href="#" class="project-link">GitHub</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <p style="margin-top:1.5rem;">
        <a href="projets.php" class="btn btn-outline">Tous les projets →</a>
      </p>
    </section>

    <!-- ======= STACK ======= -->
    <section class="home-section">
      <h2 class="home-section-title">Stack technique</h2>
      <div class="skill-tags" style="gap:.6rem;">
        <span class="skill-tag highlight">HTML / CSS</span>
        <span class="skill-tag highlight">JavaScript</span>
        <span class="skill-tag highlight">PHP</span>
        <span class="skill-tag highlight">MySQL</span>
        <span class="skill-tag highlight">Git</span>
        <span class="skill-tag">Python</span>
        <span class="skill-tag">Linux</span>
        <span class="skill-tag">React</span>
        <span class="skill-tag">Figma</span>
      </div>
      <p style="margin-top:1.25rem;">
        <a href="competences.php" class="btn btn-outline" style="font-size:.8rem;">Voir toutes mes compétences →</a>
      </p>
    </section>

    <!-- ======= VEILLE ======= -->
    <section class="home-section">
      <h2 class="home-section-title">Dernière veille technologique</h2>
      <div class="blog-grid">
        <a href="veille.php" class="blog-card fade-in" style="text-decoration:none;">
          <div class="blog-meta">
            <span class="blog-date">Mars 2025</span>
            <span class="blog-tag">IA</span>
          </div>
          <h3>Les grands modèles de langage en 2025 : où en sommes-nous ?</h3>
          <p>Tour d'horizon des LLMs actuels : GPT-4o, Claude 3, Gemini, Llama 3... Comparaison des architectures et usages.</p>
          <span class="read-more">Lire l'article →</span>
        </a>
        <a href="veille.php" class="blog-card fade-in" style="text-decoration:none;animation-delay:.1s;">
          <div class="blog-meta">
            <span class="blog-date">Fév. 2025</span>
            <span class="blog-tag">Robotique</span>
          </div>
          <h3>La robotique humanoïde prend son envol</h3>
          <p>Boston Dynamics, Figure AI, Tesla Optimus... le marché des robots humanoïdes s'accélère. Quelles technologies derrière ?</p>
          <span class="read-more">Lire l'article →</span>
        </a>
      </div>
      <p style="margin-top:1.25rem;">
        <a href="veille.php" class="btn btn-outline" style="font-size:.8rem;">Toute la veille →</a>
      </p>
    </section>

  </div>
</main>

<?php include 'includes/footer.php'; ?>