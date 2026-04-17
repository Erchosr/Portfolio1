<?php
$page      = 'projets';
$title     = 'Projets — Erwan Arnaud';
$meta_desc = 'Mes projets de développement web — stages, personnels et académiques.';
include 'includes/header.php';

$projects = [

  /* ---- STAGE ---- */
  [
    'id'       => 'arobatic',
    'cat'      => 'stage',
    'label'    => 'Stage',
    'title'    => 'Site Web — Arobatic',
    'summary'  => 'Formulaire de contact avancé pour la gestion des clients, avec validation JS + PHP, protection XSS/SQL et interface d\'administration.',
    'stack'    => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
    'github'   => 'https://github.com/Erchosr/Formulaire',
    'demo'     => null,
    'image'    => 'assets/img/formulaire.png',
    'details'  => [
      'Contexte' =>
        'Développé durant mon stage de 1ère année chez Arobatic (Toulouse). L\'objectif était de créer un site complet intégrant un système de formulaire de contact pour la gestion des demandes clients.',
      'Fonctionnalités' =>
        'Validation côté client (JavaScript) et côté serveur (PHP). Protection contre les injections SQL et XSS. Système de notification par email à l\'équipe. Interface d\'administration pour gérer les demandes reçues. Base de données pour stocker les informations clients.',
      'Ce que j\'ai appris' =>
        'Travailler selon les standards professionnels, recevoir des retours et améliorer mon code. Mon premier contact avec un environnement Agile réel.',
    ],
  ],
  [
    'id'       => 'gtl-api',
    'cat'      => 'stage',
    'label'    => 'Stage',
    'title'    => 'API REST Emails — GTL Digital',
    'summary'  => 'API RESTful complète pour la gestion des emails : affichage JSON, suppression, consultation des non-lus, téléchargement de pièces jointes, documentation Swagger.',
    'stack'    => ['PHP', 'API REST', 'JSON', 'Swagger UI', 'Git'],
    'github'   => 'https://github.com/Erchosr/API_Rest',
    'demo'     => null,
    'image'    => null,
    'details'  => [
      'Contexte' =>
        'Réalisé en autonomie lors de mon stage de 2ème année chez GTL Digital (Lézignan-Corbières), une agence web spécialisée en développement d\'applications web et mobiles.',
      'Fonctionnalités' =>
        'Affichage d\'un email spécifique via URL en JSON. Suppression et consultation des non-lus. Téléchargement automatique des pièces jointes (images) vers un stockage local. Documentation interactive complète via Swagger UI pour l\'équipe.',
      'Ce que j\'ai appris' =>
        'Concevoir une API structurée et maintenable, rédiger une documentation technique professionnelle, et participer à des revues de code et réunions de planification.',
    ],
  ],

  /* ---- PERSONNEL ---- */
  [
    'id'       => 'pokemon-store',
    'cat'      => 'perso',
    'label'    => 'Personnel',
    'title'    => 'PokemonStore',
    'summary'  => 'Application de gestion pour boutiques Pokémon : catalogue de cartes via API officielle, gestion des stocks et organisation de tournois.',
    'stack'    => ['Java', 'Android Studio', 'SQL', 'API REST', 'CSS'],
    'github'   => null,
    'demo'     => null,
    'image'    => 'assets/img/pokemon-store.png',
    'details'  => [
      'Description' =>
        'Application mobile destinée aux boutiques spécialisées Pokémon. Elle centralise la gestion du stock de cartes, l\'organisation de tournois et la consultation du catalogue via l\'API officielle des cartes Pokémon (pokemontcg.io).',
      'Fonctionnalités' =>
        'Catalogue complet des cartes Pokémon via API REST. Gestion des stocks (entrées/sorties, alertes). Organisation de tournois : inscription des joueurs, brackets, résultats. Différents rôles utilisateurs (gérant, employé).',
      'Aspects techniques' =>
        'Développé en équipe dans le cadre du BTS (Épreuve E4). Architecture client-serveur avec base de données SQL locale et appels API externes. Gestion des sessions et des droits d\'accès.',
    ],
  ],
  [
    'id'       => 'task-manager',
    'cat'      => 'perso',
    'label'    => 'Personnel',
    'title'    => 'Task-Manager',
    'summary'  => 'Gestionnaire de tâches collaboratif avec calendrier, estimation du temps et partage entre utilisateurs.',
    'stack'    => ['PHP', 'Laravel', 'MySQL', 'CSS', 'JavaScript'],
    'github'   => 'https://github.com/Erchosr/Task-Manager',
    'demo'     => null,
    'image'    => 'assets/img/Task.jpg',
    'details'  => [
      'Description' =>
        'Application web de gestion de tâches inspirée des outils type Trello / Notion. Elle permet de créer des tâches, de les assigner à des collaborateurs, de définir une durée estimée et de visualiser l\'organisation sous forme de calendrier.',
      'Fonctionnalités' =>
        'Création, modification, suppression de tâches. Collaboration : partage et assignation de tâches entre utilisateurs. Estimation de durée et affichage calendrier. Gestion de profils utilisateurs avec authentification.',
      'Aspects techniques' =>
        'Architecture MVC avec Laravel. Base de données relationnelle MySQL. Interface responsive. Authentification sécurisée et gestion des rôles.',
    ],
  ],
  [
    'id'       => 'photoforyou',
    'cat'      => 'perso',
    'label'    => 'Personnel',
    'title'    => 'PhotoForYou',
    'summary'  => 'Plateforme de photographie : partage, achat et gestion de photos avec différents types de comptes et protection des contenus.',
    'stack'    => ['PHP', 'MySQL', 'JavaScript', 'CSS', 'HTML'],
    'github'   => null,
    'demo'     => null,
    'image'    => 'assets/img/photoforyou.png',
    'details'  => [
      'Description' =>
        'Site web de photographie permettant aux photographes de poster et vendre leurs photos, et aux acheteurs de les parcourir et les acquérir. Plusieurs types de comptes avec des droits différents.',
      'Fonctionnalités' =>
        'Dépôt et gestion de photos par les photographes. Achat et téléchargement pour les acheteurs. Gestion de galeries personnelles. Protection des contenus (watermark, droits d\'accès). Système de sessions et authentification multi-rôles.',
      'Aspects techniques' =>
        'Gestion avancée des sessions PHP. Stockage et manipulation de fichiers images. Protection contre l\'accès non autorisé aux ressources. Interface différenciée selon le type de compte.',
    ],
  ],

  /* ---- ACADÉMIQUE ---- */
  [
    'id'       => 'ppe1',
    'cat'      => 'scolaire',
    'label'    => 'Scolaire',
    'title'    => 'PPE1 — Gestion de Stock',
    'summary'  => 'Application CRUD de gestion de stock pour une entreprise fictive, avec alertes de seuil critique et rapports.',
    'stack'    => ['PHP', 'MySQL', 'Bootstrap'],
    'github'   => null,
    'demo'     => null,
    'image'    => null,
    'details'  => [
      'Description' =>
        'Premier projet pédagogique du BTS. Application web de gestion des stocks d\'une entreprise fictive : produits, fournisseurs et commandes.',
      'Fonctionnalités' =>
        'CRUD complet sur les produits et fournisseurs. Génération de rapports sur l\'état des stocks. Alertes automatiques quand un produit atteint un seuil critique.',
      'Ce que j\'ai appris' =>
        'Structurer une application back-end en PHP, concevoir un schéma de base de données, et répondre à des besoins métier concrets.',
    ],
  ],
  [
    'id'       => 'ppe2',
    'cat'      => 'scolaire',
    'label'    => 'Scolaire',
    'title'    => 'PPE2 — Application Mobile Santé',
    'summary'  => 'Application Android de suivi de santé (activité, alimentation, indicateurs) développée en équipe avec Git.',
    'stack'    => ['Java', 'Android Studio', 'SQLite'],
    'github'   => null,
    'demo'     => null,
    'image'    => null,
    'details'  => [
      'Description' =>
        'Projet d\'équipe : application mobile Android permettant aux utilisateurs de suivre leurs activités physiques, leur alimentation et leurs indicateurs de santé (poids, tension, fréquence cardiaque).',
      'Mon rôle' =>
        'Responsable de l\'interface utilisateur et de la gestion de la base de données SQLite. Conception d\'écrans ergonomiques et d\'un système de graphiques pour visualiser la progression.',
      'Ce que j\'ai appris' =>
        'Développement mobile Android, travail en équipe avec Git pour la gestion de version et Trello pour la répartition des tâches.',
    ],
  ],
  [
    'id'       => 'ppe3',
    'cat'      => 'scolaire',
    'label'    => 'Scolaire',
    'title'    => 'PPE3 — Système de Réservation',
    'summary'  => 'Système de réservation en ligne pour une salle de sport : calendrier interactif, authentification et API REST.',
    'stack'    => ['PHP', 'JavaScript', 'MySQL', 'API REST'],
    'github'   => null,
    'demo'     => null,
    'image'    => null,
    'details'  => [
      'Description' =>
        'Réservation de cours collectifs, séances avec coach ou créneaux équipements pour une salle de sport fictive.',
      'Fonctionnalités' =>
        'Calendrier interactif avec disponibilités en temps réel. Authentification sécurisée membres / admins. API REST pour la communication front-back. Notifications email de rappel.',
      'Ce que j\'ai appris' =>
        'Architecture orientée API, gestion d\'état temps réel, et conception de systèmes de réservation.',
    ],
  ],
  [
    'id'       => 'ppe4',
    'cat'      => 'scolaire',
    'label'    => 'Scolaire',
    'title'    => 'PPE4 — Tableau de Bord',
    'summary'  => 'Dashboard interactif de visualisation de données commerciales avec Chart.js, filtres dynamiques et graphiques.',
    'stack'    => ['JavaScript', 'Chart.js', 'PHP', 'MySQL'],
    'github'   => null,
    'demo'     => null,
    'image'    => null,
    'details'  => [
      'Description' =>
        'Tableau de bord pour une entreprise fictive de vente en ligne : CA, commandes, panier moyen, taux de conversion — en graphiques interactifs.',
      'Fonctionnalités' =>
        'Histogrammes, camemberts et courbes d\'évolution via Chart.js. Filtres dynamiques par période, catégorie et région. Données récupérées depuis une base MySQL via PHP.',
      'Ce que j\'ai appris' =>
        'Visualisation de données, design d\'interfaces d\'aide à la décision, et manipulation avancée de JavaScript.',
    ],
  ],
];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// projets</p>
      <h1>Mes réalisations</h1>
      <p>Projets de stage, personnels et scolaires — cliquez sur une carte pour voir les détails.</p>
    </div>

    <!-- Filtres -->
    <div class="projects-filter" style="margin-bottom:2rem;">
      <button class="filter-btn active" data-filter="all">Tous <span class="filter-count" id="count-all"></span></button>
      <button class="filter-btn" data-filter="stage">Stage <span class="filter-count" id="count-stage"></span></button>
      <button class="filter-btn" data-filter="perso">Personnel <span class="filter-count" id="count-perso"></span></button>
      <button class="filter-btn" data-filter="scolaire">Scolaire <span class="filter-count" id="count-scolaire"></span></button>
    </div>

    <!-- Grille de projets -->
    <div class="proj-grid" id="proj-grid">

      <?php foreach ($projects as $i => $p): ?>
        <div class="proj-item" data-cat="<?= $p['cat'] ?>" style="animation-delay:<?= $i * 0.055 ?>s;">

          <!-- Carte -->
          <div class="proj-card" onclick="toggleProj('<?= $p['id'] ?>')" id="card-<?= $p['id'] ?>">

            <?php if ($p['image']): ?>
              <div class="proj-thumb">
                <img src="<?= $p['image'] ?>" alt="<?= $p['title'] ?>"
                     onerror="this.parentElement.classList.add('proj-thumb-fallback');this.remove();">
              </div>
            <?php else: ?>
              <div class="proj-thumb proj-thumb-fallback">
                <?php
                  $icons = ['stage'=>'🏢','perso'=>'⚡','scolaire'=>'🎓'];
                  echo $icons[$p['cat']] ?? '💻';
                ?>
              </div>
            <?php endif; ?>

            <div class="proj-body">
              <div class="proj-body-top">
                <div>
                  <span class="proj-label proj-label-<?= $p['cat'] ?>"><?= $p['label'] ?></span>
                  <h3><?= $p['title'] ?></h3>
                </div>
                <span class="exp-chevron" id="pchevron-<?= $p['id'] ?>">›</span>
              </div>
              <p class="proj-summary"><?= $p['summary'] ?></p>
              <div class="proj-stack">
                <?php foreach ($p['stack'] as $t): ?>
                  <span><?= $t ?></span>
                <?php endforeach; ?>
              </div>
            </div>

          </div>

          <!-- Panneau déroulant -->
          <div class="proj-panel" id="ppanel-<?= $p['id'] ?>">
            <div class="proj-panel-inner">

              <?php foreach ($p['details'] as $subtitle => $text): ?>
                <div class="exp-block">
                  <h4><?= $subtitle ?></h4>
                  <p><?= $text ?></p>
                </div>
              <?php endforeach; ?>

              <?php if ($p['github'] || $p['demo']): ?>
                <div class="proj-links-row">
                  <?php if ($p['github']): ?>
                    <a href="<?= $p['github'] ?>" target="_blank" rel="noopener" class="btn btn-outline" style="font-size:.8rem;">
                      ↗ GitHub
                    </a>
                  <?php endif; ?>
                  <?php if ($p['demo']): ?>
                    <a href="<?= $p['demo'] ?>" target="_blank" rel="noopener" class="btn btn-primary" style="font-size:.8rem;">
                      ↗ Voir la démo
                    </a>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

            </div>
          </div>

        </div>
      <?php endforeach; ?>

    </div>

    <p id="proj-empty" style="display:none;text-align:center;padding:3rem;color:var(--text-muted);font-family:var(--font-mono);font-size:.875rem;">
      Aucun projet dans cette catégorie pour l'instant.
    </p>

  </div>
</main>

<script>
/* ---- Toggle panneau ---- */
function toggleProj(id) {
  const panel   = document.getElementById('ppanel-' + id);
  const chevron = document.getElementById('pchevron-' + id);
  const card    = document.getElementById('card-' + id);
  const isOpen  = panel.classList.contains('open');

  document.querySelectorAll('.proj-panel.open').forEach(p => p.classList.remove('open'));
  document.querySelectorAll('#proj-grid .exp-chevron.rotated').forEach(c => c.classList.remove('rotated'));
  document.querySelectorAll('.proj-card.active').forEach(c => c.classList.remove('active'));

  if (!isOpen) {
    panel.classList.add('open');
    chevron.classList.add('rotated');
    card.classList.add('active');
  }
}

/* ---- Filtre ---- */
const items   = document.querySelectorAll('.proj-item');
const btns    = document.querySelectorAll('.projects-filter .filter-btn');
const empty   = document.getElementById('proj-empty');

/* Compteurs */
const counts = { all: items.length, stage: 0, perso: 0, scolaire: 0 };
items.forEach(i => counts[i.dataset.cat]++);
Object.keys(counts).forEach(k => {
  const el = document.getElementById('count-' + k);
  if (el) el.textContent = '(' + counts[k] + ')';
});

btns.forEach(btn => {
  btn.addEventListener('click', () => {
    btns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.filter;
    let visible = 0;
    items.forEach(item => {
      const show = f === 'all' || item.dataset.cat === f;
      item.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    empty.style.display = visible === 0 ? 'block' : 'none';
  });
});
</script>

<?php include 'includes/footer.php'; ?>