<?php
$page      = 'experience';
$title     = 'Expérience — Erwan Arnaud';
$meta_desc = 'Mon parcours académique et professionnel en développement web.';
include 'includes/header.php';

$experiences = [
  [
    'id'       => 'bac',
    'type'     => 'Formation',
    'title'    => 'Bac STI2D',
    'org'      => 'Lycée Paul Mathou',
    'period'   => '2020 — 2022',
    'location' => 'Saint-Gaudens, Haute-Garonne',
    'tags'     => ['Informatique', 'Électronique', 'Dév. Durable', 'CAO', 'Prototypage'],
    'summary'  => 'Formation pluridisciplinaire qui m\'a ouvert les portes de l\'informatique et de la programmation.',
    'desc'     => [
      'Découverte de la programmation' =>
        'C\'est au cours de cette formation que j\'ai écrit mes premières lignes de code, travaillé sur des systèmes automatisés et compris les bases de l\'électronique appliquée à l\'informatique. Ces premières expériences ont été un véritable déclencheur pour mon orientation en BTS SIO.',
      'Immersion dans le concret' =>
        'Grâce aux visites d\'entreprises et aux TP en labo, j\'ai manipulé des outils de CAO, des instruments de mesure et des plateformes de prototypage. Ces expériences m\'ont donné une vision concrète du monde technologique et industriel.',
      'Sensibilisation à l\'impact environnemental' =>
        'La dimension développement durable de cette filière a marqué ma façon de penser. Un développeur a un rôle à jouer dans la création de solutions numériques plus sobres et respectueuses de l\'environnement.',
    ],
    'images'   => [
      /* Remplacez par vos vraies images */
      ['src' => 'assets/img/bac.png', 'alt' => 'Filière STI2D'],
    ],
  ],
  [
    'id'       => 'bts1',
    'type'     => 'Formation',
    'title'    => 'BTS SIO SLAM — 1ère année',
    'org'      => 'Lycée Paul Sabatier',
    'period'   => '2023 — 2024',
    'location' => 'Carcassonne, Aude',
    'tags'     => ['HTML/CSS', 'PHP', 'JavaScript', 'SQL', 'Cybersécurité', 'Gestion de projet'],
    'summary'  => 'Immersion complète dans le développement informatique — langages web, bases de données et cybersécurité.',
    'desc'     => [
      'Langages et outils étudiés' =>
        'HTML, CSS, JavaScript, PHP et Python, ainsi que la manipulation de bases de données relationnelles via SQL. J\'ai particulièrement accroché avec le front-end, qui m\'a permis de donner vie aux interfaces et de soigner l\'expérience utilisateur.',
      'Projet concret' =>
        'Développement d\'une application de gestion pour une entreprise fictive — combinant développement et travail en équipe sur un projet pédagogique complet.',
      'Cybersécurité & systèmes' =>
        'Les cours de cybersécurité m\'ont sensibilisé aux bonnes pratiques de protection des données. J\'ai aussi découvert les fondamentaux des réseaux et des systèmes d\'exploitation, essentiels pour comprendre l\'environnement dans lequel une application évolue.',
    ],
    'images'   => [
      ['src' => 'assets/img/bts1.png', 'alt' => 'BTS SIO'],
    ],
  ],
  [
    'id'       => 'stage1',
    'type'     => 'Stage',
    'title'    => 'Stage — Arobatic',
    'org'      => 'Arobatic',
    'period'   => 'Mai — Juin 2024',
    'location' => 'Toulouse, Haute-Garonne',
    'tags'     => ['HTML/CSS', 'PHP', 'JavaScript', 'MySQL', 'Git', 'Agile'],
    'summary'  => 'Première expérience professionnelle : développement web et maintenance hardware dans une entreprise polyvalente.',
    'desc'     => [
      'Développement web' =>
        'Contribution à la création d\'un site de gestion de clientèle en HTML, CSS, JavaScript et SQL. J\'ai appris à recevoir des retours et à améliorer mon code selon les standards de l\'équipe.',
      'Maintenance hardware' =>
        'En parallèle du développement, j\'ai participé à la réparation d\'équipements informatiques (ordinateurs, imprimantes) — ce qui m\'a apporté des bases solides en diagnostic et maintenance matérielle.',
      'Ce que ce stage m\'a apporté' =>
        'Découverte d\'un environnement professionnel Agile, autonomie, polyvalence, et confiance en mes capacités techniques. Un vrai tremplin pour la suite.',
    ],
    'images'   => [
      ['src' => 'assets/img/stage1.png', 'alt' => 'Logo Arobatic'],
    ],
  ],
  [
    'id'       => 'bts2',
    'type'     => 'Formation',
    'title'    => 'BTS SIO SLAM — 2ème année',
    'org'      => 'Lycée Paul Sabatier',
    'period'   => '2024 — 2026',
    'location' => 'Carcassonne, Aude',
    'tags'     => ['Laravel', 'Java', 'Android', 'API REST', 'Cybersécurité', 'NoSQL'],
    'summary'  => 'Approfondissement des frameworks modernes, cybersécurité avancée et projets d\'équipe concrets.',
    'desc'     => [
      'Projets réalisés — Épreuve E4' =>
        'Un site de gestion de projets développé avec Laravel + PHP Blade + SQL. Une application mobile de boutique Pokémon en Java, avec gestion des interfaces et de la base de données, réalisée en équipe.',
      'Compétences techniques acquises' =>
        'Maîtrise de Laravel, développement mobile sous Android Studio (Java & Kotlin), utilisation des API REST, approfondissement SQL + découverte NoSQL, et renforcement de la cybersécurité : authentification, sécurisation d\'API, prévention XSS et injections.',
      'Méthode & travail d\'équipe' =>
        'Les projets en groupe m\'ont permis d\'appliquer des méthodes agiles, de perfectionner ma communication et de m\'impliquer dans une organisation collaborative proche du monde professionnel.',
    ],
    'images'   => [
      ['src' => 'assets/img/bts1.png', 'alt' => 'BTS SIO 2ème année'],
      ['src' => 'assets/img/photoforyou_logo.png', 'alt' => 'Travail Photoforyou'],
    ],
  ],
  [
    'id'       => 'stage2',
    'type'     => 'Stage',
    'title'    => 'Stage — GTL Digital',
    'org'      => 'GTL Digital',
    'period'   => 'Janvier — Février 2025',
    'location' => 'Lézignan-Corbières, Aude',
    'tags'     => ['PHP', 'API REST', 'JSON', 'Swagger UI', 'Git', 'Agile'],
    'summary'  => 'Développement en autonomie d\'une API REST complète avec documentation Swagger dans une agence web.',
    'desc'     => [
      'Projet principal : API REST de gestion d\'emails' =>
        'Affichage d\'emails en JSON via des requêtes URL, suppression et consultation des non-lus, téléchargement automatique des pièces jointes vers un stockage local. Documentation complète rédigée via Swagger UI pour faciliter la réutilisation par l\'équipe.',
      'Compétences développées' =>
        'Conception d\'une API RESTful structurée, rédaction de documentation technique professionnelle, participation à des revues de code et réunions de planification avec le chef de projet.',
      'Ce que ce stage m\'a apporté' =>
        'Une vraie vision du travail en entreprise : rigueur, documentation et collaboration sont essentielles. J\'ai consolidé mes compétences back-end et ma communication technique — des qualités clés pour aborder de futurs projets complexes.',
    ],
    'images'   => [
      ['src' => 'assets/img/gtl.png', 'alt' => 'GTL — Agence de comm'],
      ['src' => 'assets/img/gtl_api_screenshot.png', 'alt' => 'GTL — Api Rest'],
    ],
  ],
  [
    'id'       => 'stage3',
    'type'     => 'Stage',
    'title'    => 'Stage — Logigames',
    'org'      => 'Logigames',
    'period'   => 'Janvier — Février 2026',
    'location' => 'Lézignan-Corbières, Aude',
    'tags'     => ['WordPress', 'PHP', 'MySQL', 'Gestion de projet'],
    'summary'  => 'Création d\'un site vitrine boutique et management d\'un site WordPress existant (performance, plugins, base de données produits).',
    'desc'     => [
      'Création d\'un site vitrine boutique' =>
        'Développement d\'un site de présentation de boutique, du 6 janvier au 15 février 2026. Conception de l\'interface, intégration du catalogue et mise en ligne.',
      'Management WordPress' =>
        'Intervention sur un site WordPress existant pour résoudre des problèmes de lenteur, optimiser les plugins et gérer la base de données produits. Diagnostics, optimisations et documentation des interventions.',
      'Ce que j\'ai appris' =>
        'Gestion d\'un projet client réel avec contraintes de délai. Maîtrise de l\'environnement WordPress en production : optimisation de performance, maintenance de base de données et résolution d\'incidents.',
    ],
    'images'   => [
      ['src' => 'assets/img/logigames_site.png', 'alt' => 'Site vitrine Logigames'],
      ['src' => 'assets/img/stage3.png', 'alt' => 'Logo Logigames'],
    ],
  ],
];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// expérience</p>
      <h1>Parcours</h1>
      <p>Mon parcours académique et mes expériences professionnelles en développement web.</p>
    </div>

    <!-- CTA CV -->
    <div style="margin-bottom:2.5rem;display:flex;gap:.75rem;flex-wrap:wrap;">
      <a href="assets/pdf/CV_Erwan_Arnaud.pdf" class="btn btn-outline" download>Télécharger mon CV ↓</a>
      <a href="assets/pdf/Tableau_Synthese_Erwan_Arnaud.pdf" class="btn btn-outline" target="_blank">Tableau de synthèse ↓</a>
    </div>

    <!-- TIMELINE -->
    <div class="exp-timeline" id="exp-timeline">
      <?php foreach ($experiences as $i => $exp): ?>

        <div class="exp-item <?= $exp['type'] === 'Stage' ? 'exp-stage' : 'exp-formation' ?>"
             data-id="<?= $exp['id'] ?>"
             style="animation-delay:<?= $i * 0.08 ?>s;">

          <!-- Point + ligne -->
          <div class="exp-dot"></div>

          <!-- Carte cliquable -->
          <div class="exp-card" onclick="toggleExp('<?= $exp['id'] ?>')">
            <div class="exp-card-head">
              <div>
                <span class="exp-type-badge"><?= $exp['type'] ?></span>
                <h3 class="exp-title"><?= $exp['title'] ?></h3>
                <p class="exp-org"><?= $exp['org'] ?> · <span><?= $exp['location'] ?></span></p>
              </div>
              <div class="exp-right">
                <p class="exp-period"><?= $exp['period'] ?></p>
                <span class="exp-chevron" id="chevron-<?= $exp['id'] ?>">›</span>
              </div>
            </div>
            <p class="exp-summary"><?= $exp['summary'] ?></p>
            <div class="exp-tags">
              <?php foreach ($exp['tags'] as $tag): ?>
                <span class="timeline-tag"><?= $tag ?></span>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Panneau déroulant -->
          <div class="exp-panel" id="panel-<?= $exp['id'] ?>">
            <div class="exp-panel-inner">

              <!-- Images -->
              <?php if (!empty($exp['images'])): ?>
              <div class="exp-images">
                <?php foreach ($exp['images'] as $img): ?>
                  <div class="exp-img-wrap logo-wrap">
                    <img src="<?= $img['src'] ?>" alt="<?= $img['alt'] ?>"
                         onerror="this.parentElement.style.display='none'">
                    <p class="exp-img-caption"><?= $img['alt'] ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <!-- Descriptions par bloc -->
              <div class="exp-blocks">
                <?php foreach ($exp['desc'] as $subtitle => $text): ?>
                  <div class="exp-block">
                    <h4><?= $subtitle ?></h4>
                    <p><?= $text ?></p>
                  </div>
                <?php endforeach; ?>
              </div>

            </div>
          </div>

        </div>

      <?php endforeach; ?>
    </div>

  </div>
</main>

<script>
function toggleExp(id) {
  const panel   = document.getElementById('panel-' + id);
  const chevron = document.getElementById('chevron-' + id);
  const isOpen  = panel.classList.contains('open');

  /* Ferme tous les panneaux ouverts */
  document.querySelectorAll('.exp-panel.open').forEach(p => p.classList.remove('open'));
  document.querySelectorAll('.exp-chevron.rotated').forEach(c => c.classList.remove('rotated'));
  document.querySelectorAll('.exp-card.active').forEach(c => c.classList.remove('active'));

  /* Ouvre celui cliqué si ce n'était pas déjà lui */
  if (!isOpen) {
    panel.classList.add('open');
    chevron.classList.add('rotated');
    document.querySelector('[data-id="' + id + '"] .exp-card').classList.add('active');
  }
}
</script>

<?php include 'includes/footer.php'; ?>