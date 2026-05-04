<?php
$page      = 'competences';
$title     = 'Compétences — Erwan Arnaud';
$meta_desc = 'Mes compétences techniques et professionnelles en développement web.';
include 'includes/header.php';

$tech = [
    ['name' => 'HTML',       'level' => 85, 'desc' => 'Création de structures sémantiques solides. À l\'aise avec les standards HTML5, l\'accessibilité et les bonnes pratiques.'],
    ['name' => 'CSS',        'level' => 80, 'desc' => 'Mise en page responsive, animations, Flexbox & Grid. Capable de produire des interfaces soignées sans framework.'],
    ['name' => 'PHP',        'level' => 65, 'desc' => 'Développement back-end dynamique, gestion de sessions, formulaires, inclusions de fichiers. Utilisé sur plusieurs projets scolaires.'],
    ['name' => 'JavaScript', 'level' => 60, 'desc' => 'Manipulation du DOM, événements, fetch API. Niveau intermédiaire — en progression constante.'],
    ['name' => 'SQL / MySQL','level' => 50, 'desc' => 'Conception de bases de données relationnelles, requêtes CRUD, jointures. Pratiqué en cours et en projet.'],
    ['name' => 'Bootstrap',  'level' => 65, 'desc' => 'Utilisation du framework CSS pour des interfaces responsives rapidement. Bonne maîtrise des composants de base.'],
    ['name' => 'Python',     'level' => 40, 'desc' => 'Notions de scripting, automatisation et algorithmique. Apprentissage en cours, utilisé ponctuellement.'],
    ['name' => 'Java',       'level' => 40, 'desc' => 'Bases de la POO, quelques exercices applicatifs en cours. Niveau débutant/intermédiaire.'],
];

$soft = [
    ['name' => 'Travail en équipe',               'level' => 85, 'desc' => 'Communication, collaboration et partage de connaissances en groupe projet.'],
    ['name' => 'Adaptabilité',                    'level' => 80, 'desc' => 'Apprentissage rapide, autonomie, flexibilité face aux nouvelles technologies.'],
    ['name' => 'Analyse & résolution de problèmes','level' => 75, 'desc' => 'Débogage, optimisation, recherche de solutions — méthodique et curieux.'],
    ['name' => 'Gestion de projet',               'level' => 59, 'desc' => 'Méthodes agiles, planification, documentation technique et respect des délais.'],
];

$sio = [
    ['name' => 'Développement d\'applications',   'level' => 75, 'desc' => 'Conception et développement d\'applications web selon les besoins utilisateurs.'],
    ['name' => 'Gestion de bases de données',     'level' => 65, 'desc' => 'Modélisation, implémentation et maintenance de bases de données relationnelles.'],
    ['name' => 'Support & maintenance',           'level' => 65, 'desc' => 'Assistance utilisateurs, maintenance applicative, résolution d\'incidents.'],
    ['name' => 'Cybersécurité',                   'level' => 60, 'desc' => 'Principes de sécurité des SI, protection des données, bonnes pratiques RGPD.'],
];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// compétences</p>
      <h1>Stack & savoir-faire</h1>
      <p>Mes compétences techniques acquises en BTS SIO SLAM, en projet et en auto-formation.</p>
    </div>

    <!-- ===== TECHNIQUES ===== -->
    <section class="skills-section">
      <h2 class="section-label">Compétences techniques</h2>
      <div class="bars-grid">
        <?php foreach ($tech as $i => $s): ?>
          <div class="bar-card fade-in" style="animation-delay:<?= $i * 0.06 ?>s;">
            <div class="bar-head">
              <span class="bar-name"><?= $s['name'] ?></span>
              <span class="bar-pct"><?= $s['level'] ?>%</span>
            </div>
            <div class="bar-track">
              <div class="bar-fill" data-level="<?= $s['level'] ?>"></div>
            </div>
            <p class="bar-desc"><?= $s['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ===== SOFT SKILLS ===== -->
    <section class="skills-section">
      <h2 class="section-label">Compétences professionnelles</h2>
      <div class="bars-grid">
        <?php foreach ($soft as $i => $s): ?>
          <div class="bar-card fade-in" style="animation-delay:<?= $i * 0.07 ?>s;">
            <div class="bar-head">
              <span class="bar-name"><?= $s['name'] ?></span>
              <span class="bar-pct"><?= $s['level'] ?>%</span>
            </div>
            <div class="bar-track">
              <div class="bar-fill" data-level="<?= $s['level'] ?>"></div>
            </div>
            <p class="bar-desc"><?= $s['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ===== BTS SIO ===== -->
    <section class="skills-section">
      <h2 class="section-label">Référentiel BTS SIO SLAM</h2>
      <div class="bars-grid">
        <?php foreach ($sio as $i => $s): ?>
          <div class="bar-card fade-in" style="animation-delay:<?= $i * 0.07 ?>s;">
            <div class="bar-head">
              <span class="bar-name"><?= $s['name'] ?></span>
              <span class="bar-pct"><?= $s['level'] ?>%</span>
            </div>
            <div class="bar-track">
              <div class="bar-fill" data-level="<?= $s['level'] ?>"></div>
            </div>
            <p class="bar-desc"><?= $s['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

  </div>
</main>

<script>
/* Animation des barres au scroll */
const fills = document.querySelectorAll('.bar-fill');

function animateBars(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const fill = entry.target;
      fill.style.width = fill.dataset.level + '%';
      observer.unobserve(fill);
    }
  });
}

const observer = new IntersectionObserver(animateBars, { threshold: 0.3 });
fills.forEach(f => observer.observe(f));
</script>

<?php include 'includes/footer.php'; ?>