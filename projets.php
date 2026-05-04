<?php
$page      = 'projets';
$title     = 'Projets — Erwan Arnaud';
$meta_desc = 'Mes projets de développement web.';
include 'includes/header.php';

$projects = [

  /* ===== STAGE ===== */
  [
    'id'      => 'arobatic',
    'cat'     => 'stage',
    'label'   => 'Stage',
    'title'   => 'Site Web — Arobatic',
    'summary' => 'Formulaire de gestion clients avec validation JS/PHP, protection XSS/SQL et interface d\'administration.',
    'stack'   => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
    'github'  => 'https://github.com/Erchosr/Formulaire',
    'demo'    => null,
    'thumb'   => null,
    'thumb_type' => 'icon',
    'thumb_icon' => '🏢',
    'images'  => [],
    'details' => [
      'Missions' => 'Développé durant mon stage chez Arobatic (Toulouse). Formulaire de contact avancé : validation client + serveur, protection XSS/SQL, notifications email, interface d\'admin pour gérer les demandes.',
      'Apport' => 'Premier contact professionnel avec un environnement Agile. Apprentissage de la revue de code et des standards métier.',
    ],
  ],

  [
    'id'      => 'gtl-api',
    'cat'     => 'stage',
    'label'   => 'Stage',
    'title'   => 'API REST Emails — GTL Digital',
    'summary' => 'API RESTful de gestion d\'emails : affichage JSON, suppression, téléchargement de pièces jointes, documentation Swagger.',
    'stack'   => ['PHP', 'API REST', 'JSON', 'Swagger UI', 'Git'],
    'github'  => 'https://github.com/Erchosr/API_Rest',
    'demo'    => null,
    'thumb'   => 'assets/img/gtl_api_screenshot.png',
    'thumb_type' => 'screenshot',
    'images'  => [
      ['src' => 'assets/img/gtl_api_screenshot.png', 'alt' => 'Résultat JSON de l\'API email', 'type' => 'screenshot'],
    ],
    'details' => [
      'Missions' => 'Développé en autonomie chez GTL Digital. Affichage d\'emails en JSON via URL, suppression, consultation des non-lus, téléchargement automatique des pièces jointes vers stockage local.',
      'Documentation' => 'Documentation complète via Swagger UI pour faciliter la réutilisation par l\'équipe.',
    ],
  ],

  [
    'id'      => 'logigames',
    'cat'     => 'stage',
    'label'   => 'Stage',
    'title'   => 'Site Vitrine — Logigames',
    'summary' => 'Création d\'un site vitrine boutique et optimisation d\'un WordPress existant (performance, plugins, base de données produits).',
    'stack'   => ['WordPress', 'PHP', 'MySQL', 'CSS'],
    'github'  => null,
    'demo'    => null,
    'thumb'   => 'assets/img/logigames_site.png',
    'thumb_type' => 'screenshot',
    'images'  => [
      ['src' => 'assets/img/logigames_site.png', 'alt' => 'Site vitrine Logigames', 'type' => 'screenshot'],
    ],
    'details' => [
      'Missions' => 'Développement d\'un site vitrine boutique (Janv.–Fév. 2026). Intervention sur un WordPress existant : résolution des lenteurs, optimisation des plugins et maintenance de la base de données produits.',
      'Apport' => 'Gestion d\'un projet client réel avec contraintes de délai. Maîtrise de WordPress en production.',
    ],
  ],

  /* ===== PERSONNEL ===== */
  [
    'id'      => 'pokemon-store',
    'cat'     => 'perso',
    'label'   => 'Personnel',
    'title'   => 'PokemonStore',
    'summary' => 'Application de gestion pour boutiques Pokémon : catalogue via API officielle, stocks et organisation de tournois.',
    'stack'   => ['Java', 'Android Studio', 'SQL', 'API REST'],
    'github'  => null,
    'demo'    => null,
    'thumb'   => 'assets/img/pokestore_logo.png',
    'thumb_type' => 'logo',
    'images'  => [
      ['src' => 'assets/img/pokestore_logo.png',   'alt' => 'Logo PokemonStore',       'type' => 'logo'],
      ['src' => 'assets/img/pokestore_travail.png', 'alt' => 'Interface PokemonStore', 'type' => 'screenshot'],
    ],
    'details' => [
      'Fonctionnalités' => 'Catalogue cartes via l\'API pokemontcg.io. Gestion des stocks (entrées/sorties, alertes). Organisation de tournois avec brackets et résultats. Rôles utilisateurs (gérant, employé).',
      'Technique' => 'Architecture client-serveur, base SQL locale et appels API externes. Gestion des sessions et droits d\'accès. Réalisé en équipe (Épreuve E4).',
    ],
  ],

  [
    'id'      => 'task-manager',
    'cat'     => 'perso',
    'label'   => 'Personnel',
    'title'   => 'Task-Manager',
    'summary' => 'Gestionnaire de tâches collaboratif : création, assignation, estimation du temps et vue calendrier.',
    'stack'   => ['PHP', 'Laravel', 'MySQL', 'CSS', 'JavaScript'],
    'github'  => 'https://github.com/Erchosr/Task-Manager',
    'demo'    => null,
    'thumb'   => 'assets/img/taskmanager_logo.png',
    'thumb_type' => 'logo',
    'images'  => [
      ['src' => 'assets/img/taskmanager_logo.png',   'alt' => 'Logo Task-Manager',        'type' => 'logo'],
      ['src' => 'assets/img/taskmanager_travail.png', 'alt' => 'Interface Task-Manager',  'type' => 'screenshot'],
    ],
    'details' => [
      'Fonctionnalités' => 'Création, modification, suppression de tâches. Partage et assignation entre collaborateurs. Estimation de durée, priorité et statut. Vue calendrier et gestion de profil.',
      'Technique' => 'Architecture MVC avec Laravel, base MySQL, authentification sécurisée et gestion des rôles.',
    ],
  ],

  /* ===== SCOLAIRE ===== */
  [
    'id'      => 'photoforyou',
    'cat'     => 'scolaire',
    'label'   => 'Scolaire',
    'title'   => 'PhotoForYou',
    'summary' => 'Plateforme de photographie : partage, achat et gestion de photos avec multi-comptes et protection des contenus.',
    'stack'   => ['PHP', 'MySQL', 'JavaScript', 'CSS', 'HTML'],
    'github'  => null,
    'demo'    => null,
    'thumb'   => 'assets/img/photoforyou_logo.png',
    'thumb_type' => 'logo',
    'images'  => [
      ['src' => 'assets/img/photoforyou_logo.png', 'alt' => 'Logo PhotoForYou',       'type' => 'logo'],
    ],
    'details' => [
      'Fonctionnalités' => 'Dépôt et vente de photos par les photographes. Achat et téléchargement pour les acheteurs. Galeries personnelles, watermark et protection d\'accès par rôle.',
      'Technique' => 'Gestion avancée des sessions PHP, stockage et manipulation de fichiers images, authentification multi-rôles.',
    ],
  ],

];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// projets</p>
      <h1>Mes réalisations</h1>
      <p>Stages, projets personnels et scolaires — cliquez pour les détails.</p>
    </div>

    <!-- Filtres -->
    <div class="projects-filter" style="margin-bottom:2rem;">
      <button class="filter-btn active" data-filter="all">Tous <span class="filter-count" id="count-all"></span></button>
      <button class="filter-btn" data-filter="stage">Stage <span class="filter-count" id="count-stage"></span></button>
      <button class="filter-btn" data-filter="perso">Personnel <span class="filter-count" id="count-perso"></span></button>
      <button class="filter-btn" data-filter="scolaire">Scolaire <span class="filter-count" id="count-scolaire"></span></button>
    </div>

    <!-- Grille -->
    <div class="proj-grid" id="proj-grid">
      <?php foreach ($projects as $i => $p): ?>
        <div class="proj-item" data-cat="<?= $p['cat'] ?>" style="animation-delay:<?= $i * 0.055 ?>s;">

          <div class="proj-card" onclick="toggleProj('<?= $p['id'] ?>')" id="card-<?= $p['id'] ?>">

            <!-- Thumb -->
            <?php if ($p['thumb']): ?>
              <div class="proj-thumb <?= $p['thumb_type'] === 'logo' ? 'proj-thumb-logo' : '' ?>">
                <img src="<?= $p['thumb'] ?>" alt="<?= $p['title'] ?>"
                     onerror="this.parentElement.classList.add('proj-thumb-fallback');this.remove();">
              </div>
            <?php else: ?>
              <div class="proj-thumb proj-thumb-fallback"><?= $p['thumb_icon'] ?? '💻' ?></div>
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

          <!-- Panneau -->
          <div class="proj-panel" id="ppanel-<?= $p['id'] ?>">
            <div class="proj-panel-inner">

              <!-- Images du panneau -->
              <?php if (!empty($p['images'])): ?>
                <div class="proj-panel-images">
                  <?php foreach ($p['images'] as $img): ?>
                    <div class="proj-panel-img-wrap <?= $img['type'] === 'logo' ? 'is-logo' : 'is-screenshot' ?>">
                      <img src="<?= $img['src'] ?>" alt="<?= $img['alt'] ?>"
                           onerror="this.parentElement.style.display='none'">
                      <p class="exp-img-caption"><?= $img['alt'] ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <!-- Descriptions courtes -->
              <?php foreach ($p['details'] as $titre => $texte): ?>
                <div class="exp-block">
                  <h4><?= $titre ?></h4>
                  <p><?= $texte ?></p>
                </div>
              <?php endforeach; ?>

              <!-- Liens -->
              <?php if ($p['github'] || $p['demo']): ?>
                <div class="proj-links-row">
                  <?php if ($p['github']): ?>
                    <a href="<?= $p['github'] ?>" target="_blank" rel="noopener" class="btn btn-outline" style="font-size:.8rem;">↗ GitHub</a>
                  <?php endif; ?>
                  <?php if ($p['demo']): ?>
                    <a href="<?= $p['demo'] ?>" target="_blank" rel="noopener" class="btn btn-primary" style="font-size:.8rem;">↗ Démo</a>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

    <p id="proj-empty" style="display:none;text-align:center;padding:3rem;color:var(--text-muted);font-family:var(--font-mono);font-size:.875rem;">
      Aucun projet dans cette catégorie.
    </p>

  </div>
</main>

<script>
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

/* Filtres + compteurs */
const items  = document.querySelectorAll('.proj-item');
const btns   = document.querySelectorAll('.projects-filter .filter-btn');
const empty  = document.getElementById('proj-empty');

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