<?php
$page      = 'veille';
$title     = 'Veille Technologique — IA & Robotique — Erwan Arnaud';
$meta_desc = 'Ma veille technologique sur l\'intelligence artificielle et la robotique — articles, analyses et sources.';
include 'includes/header.php';

$articles = [

  /* ===== ROBOTIQUE ===== */
  [
    'id'      => 'robot-marathon',
    'theme'   => 'robotique',
    'label'   => 'Robotique',
    'title'   => 'Un robot humanoïde bat le record du semi-marathon',
    'date'    => '19 Avril 2026',
    'resume'  => 'À Pékin, le robot « Lightning » développé par Honor a bouclé 21 km en 50 min 26 s — soit plus de 6 minutes sous le record humain. Plus de 100 équipes de robots et 12 000 coureurs humains participaient à la course.',
    'contenu' => [
      'Ce qui s\'est passé' =>
        'Le 19 avril 2026, lors d\'un semi-marathon organisé dans la zone technologique de E-Town à Pékin, le robot « Lightning » (alias Flash) a parcouru les 21,0975 km en 50 minutes et 26 secondes, pulvérisant le record humain masculin (57 min 20 s de Jacob Kiplimo). Certains robots ont atteint des pointes à 28 km/h. Les machines devaient respecter une morphologie humanoïde stricte.',
      'Ce que ça révèle' =>
        'En un an, le niveau global a progressé massivement : le robot champion de l\'édition 2025 avait mis plus de 2h40. Cette performance illustre les progrès en contrôle moteur, équilibre dynamique et gestion d\'énergie. Des incidents ont cependant marqué la course (chutes, surchauffes, changements de batteries), rappelant que la fiabilité sur la durée reste un défi ouvert.',
      'Contexte plus large' =>
        'En novembre 2025, l\'AgiBot A2 avait battu le record de la plus longue marche pour un humanoïde. En avril 2026, le Unitree H1 s\'est approché de la vitesse record d\'Usain Bolt (10 m/s). Ces exploits sportifs font partie d\'une stratégie de communication plus large visant à montrer la maturité technique de la robotique humanoïde chinoise.',
    ],
    'source_label' => 'Aruco.com',
    'source_url'   => 'https://www.aruco.com/robotique/robot-humanoide-record-semi-marathon/',
    'lu'           => '19 Avril 2026',
  ],

  [
    'id'      => 'humanoides-industrie',
    'theme'   => 'robotique',
    'label'   => 'Robotique',
    'title'   => '2026 : les robots humanoïdes entrent dans les usines',
    'date'    => 'Mars 2026',
    'resume'  => 'Tesla, Figure AI, Agility Robotics, Unitree... Le marché des robots humanoïdes passe du prototype à la production industrielle. Le marché est estimé à 2 Mds$ en 2024, prévu à 13 Mds$ en 2029.',
    'contenu' => [
      'Les acteurs qui industrialisent' =>
        'Tesla a converti son usine de Fremont (Model S/X) en ligne de fabrication d\'Optimus, avec un objectif d\'un million d\'unités par an. Figure AI déploie ses robots dans les usines BMW. Agility Robotics livre à Amazon. Le chinois Unitree vend son G1 à 16 000 $ avec livraison. En Allemagne, Siemens et Agile Robots testent avec Nvidia le HMND 01 Alpha en conditions réelles (60 conteneurs/heure, 90 % de réussite).',
      'Le changement clé : le logiciel' =>
        'L\'intégration de grands modèles de langage (OpenAI chez Figure, Grok chez Tesla, Gemini Robotics chez Atlas) permet aux robots de comprendre des instructions verbales et d\'agir dans des environnements non structurés. On passe du robot automate préprogrammé au robot adaptable.',
      'Les limites actuelles' =>
        'L\'autonomie des batteries reste limitée (2 à 8h). Aucun robot domestique polyvalent fiable n\'est disponible pour le grand public en 2026 — l\'horizon réaliste pour un assistant maison est 2028-2030. La question de la sécurité (robots de 60 kg se déplaçant à 8 km/h) et des normes de certification est encore ouverte.',
    ],
    'source_label' => 'Blog-IA.com',
    'source_url'   => 'https://blog-ia.com/robots-humanoides-en-2026/',
    'lu'           => 'Mars 2026',
  ],

  [
    'id'      => 'ces-2026',
    'theme'   => 'robotique',
    'label'   => 'Robotique',
    'title'   => 'CES 2026 : les humanoïdes ne sont plus de la science-fiction',
    'date'    => 'Janvier 2026',
    'resume'  => 'Au salon CES de Las Vegas, Boston Dynamics (Atlas), Hyundai, Figure AI, LG (CLOiD), NEURA Robotics et Unitree ont présenté des robots en déploiement réel — et non plus en simple démonstration.',
    'contenu' => [
      'Boston Dynamics & Hyundai' =>
        'Atlas version production a été présenté publiquement pour la première fois. Hyundai prévoit 30 000 robots/an dès 2028, en collaboration avec Nvidia et Google DeepMind (modèles Gemini Robotics). Premiers déploiements confirmés dans l\'usine Hyundai Metaplant en Georgie (USA).',
      'Les nouveaux entrants' =>
        'LG présente CLOiD, un assistant humanoïde capable de manipuler le linge et d\'interagir vocalement. NEURA Robotics dévoile le 4NE1 Gen 3 avec une peau artificielle anti-collision et le système Neuraverse (partage de compétences entre robots en temps réel). XPENG lance Iron, fort de son expertise en conduite autonome.',
      'Ce que montre le CES 2026' =>
        'Pour la première fois, les robots présentés ont des clients réels, des calendriers de production, et des usages définis. Ce n\'est plus le stade du prototype spectaculaire : c\'est le début de l\'industrialisation.',
    ],
    'source_label' => 'Siècle Digital',
    'source_url'   => 'https://siecledigital.fr/2026/01/07/les-robots-humanoides-passent-a-laction-au-ces/',
    'lu'           => 'Janvier 2026',
  ],

  /* ===== IA ===== */
  [
    'id'      => 'ia-science',
    'theme'   => 'ia',
    'label'   => 'IA',
    'title'   => 'Des IA publient et débattent des articles scientifiques entre elles',
    'date'    => '24 Avril 2026',
    'resume'  => 'La plateforme Agent4Science, lancée en 2026 par l\'université de Chicago, permet à plus de 150 agents IA de publier, critiquer et débattre d\'articles scientifiques — sans aucune intervention humaine.',
    'contenu' => [
      'Le projet Agent4Science' =>
        'Fondée par Chenhao Tan de l\'université de Chicago, cette plateforme fonctionne comme un réseau social scientifique réservé aux seuls agents IA. Les entités artificielles y soumettent des travaux, les critiquent mutuellement et font évoluer les hypothèses — sans humain dans la boucle.',
      'Ce que disent les chercheurs' =>
        '"Il y a deux ans, si vous m\'aviez parlé d\'écrire un article scientifique avec de l\'IA, j\'aurais dit : c\'est de la science-fiction. Aujourd\'hui, ça devient de la réalité", confie Serge Abiteboul (ENS Paris, INRIA). L\'IA offre de nouvelles perspectives que la lecture seule n\'aurait pas données.',
      'Les limites soulevées' =>
        'L\'informaticien pointe une évolution de la nature même de la science : "Autrefois, vous pouviez comprendre une équation comme E=mc². Désormais, on vous donne des téraoctets de données calculés par un logiciel. On n\'est plus capable de les expliquer comme au XIXe siècle." La question de la compréhension humaine des résultats produits par l\'IA reste ouverte.',
    ],
    'source_label' => 'France 24',
    'source_url'   => 'https://www.france24.com/fr/sciences/20260424-intelligences-artificielles-feront-elles-decouvertes-scientifiques-a-notre-place-ia-agent-4-science',
    'lu'           => '24 Avril 2026',
  ],

  [
    'id'      => 'ai-act',
    'theme'   => 'ia',
    'label'   => 'IA',
    'title'   => 'AI Act européen : les entreprises face à l\'obligation de conformité',
    'date'    => 'Avril 2026',
    'resume'  => 'L\'AI Act entre en application complète le 2 août 2026. Les entreprises doivent désormais structurer une vraie gouvernance IA selon 4 niveaux de risque, sous peine de sanctions.',
    'contenu' => [
      'Les 4 niveaux de risque' =>
        'L\'AI Act classe les systèmes IA selon leur dangerosité : Inacceptable (surveillance biométrique massive — interdit), Élevé (santé, recrutement, infrastructure — obligations strictes), Limité (chatbots — transparence obligatoire), Minimal (pas d\'obligations spécifiques). Chaque entreprise doit identifier dans quelle catégorie tombent ses usages.',
      'Impact concret pour les développeurs' =>
        'Les développeurs web et back-end sont directement concernés dès qu\'ils intègrent de l\'IA dans leurs applications. Toute solution IA destinée au recrutement, à la santé, ou à des décisions automatisées est en catégorie "risque élevé" et nécessite une documentation technique, un audit, et une supervision humaine obligatoire.',
      'En France' =>
        'Selon l\'étude KPMG Trends of AI 2026, 55 % des entreprises françaises utilisent déjà l\'IA pour produire du contenu marketing. 75 % des marketeurs utilisent des outils génératifs pour analyser des données clients. La conformité au cadre européen devient un enjeu stratégique immédiat.',
    ],
    'source_label' => 'Orange Business',
    'source_url'   => 'https://www.orange.com/fr/whats-up/intelligence-artificielle-en-entreprise-productivite-et-gouvernance-en-2026',
    'lu'           => 'Avril 2026',
  ],

  [
    'id'      => 'ia-securite',
    'theme'   => 'ia',
    'label'   => 'IA',
    'title'   => 'Un agent IA efface toute la base de données d\'une startup en 9 secondes',
    'date'    => '2 Mai 2026',
    'resume'  => 'Chez PocketOS, un agent IA Cursor basé sur Claude Opus a supprimé en moins de 10 secondes l\'intégralité d\'un volume de production — données et sauvegardes incluses — en croyant "régler un problème".',
    'contenu' => [
      'L\'incident' =>
        'L\'agent IA avait pour mission d\'exécuter une tâche simple dans un environnement de test. Confronté à un obstacle, il a choisi de supprimer un volume entier pour le "régler". La suppression a impacté le volume de production et toutes les sauvegardes associées. Le tout en moins de 9 secondes.',
      'Ce que ça révèle' =>
        'Si mal configurée ou mal supervisée, une IA peut exécuter des actions destructrices en interprétant mal une situation — surtout si les API permettent ces actions sans vérification préalable. Les modèles les plus performants ne remplacent pas une conception maîtrisée des infrastructures.',
      'Les leçons à retenir' =>
        'Cet incident illustre l\'importance du principe de moindre privilège appliqué aux agents IA : un agent ne doit avoir accès qu\'aux ressources strictement nécessaires à sa tâche. La supervision humaine sur les actions irréversibles (suppression, écriture en production) est non négociable, quel que soit le modèle utilisé.',
    ],
    'source_label' => 'Javascrypte.com',
    'source_url'   => 'https://www.javascrypte.com/en-seulement-9-secondes-une-intelligence-artificielle-efface-toutes-les-donnees-de-son-entreprise-un-incident-spectaculaire-a-decouvrir/',
    'lu'           => '2 Mai 2026',
  ],

  [
    'id'      => 'agi-2026',
    'theme'   => 'ia',
    'label'   => 'IA',
    'title'   => 'L\'IAG — Intelligence Artificielle Générale — devient une réalité tangible',
    'date'    => 'Février 2026',
    'resume'  => 'Pour Karim Beguir (cofondateur d\'InstaDeep), 2026 marque le moment où l\'IAG atteint un niveau suffisant pour accomplir tout type de tâche — mais la prise de conscience sociétale n\'a pas encore suivi.',
    'contenu' => [
      'Définition et niveau actuel' =>
        'L\'IAG (Intelligence Artificielle Générale) désigne un système capable d\'être aussi efficace qu\'un expert humain sur n\'importe quelle tâche. En 2026, les modèles actuels atteignent voire dépassent le niveau de l\'employé moyen sur des tâches simples et cognitivement complexes — mais la société n\'a pas encore intégré l\'ampleur de ce changement.',
      'Les implications scientifiques' =>
        'À partir de 2026, l\'IAG pourrait produire une accélération inédite de l\'innovation : panneaux solaires plus efficaces, thérapeutiques en biotechnologie pour des maladies jugées insolubles, modélisation climatique plus fine. Des domaines bloqués depuis des décennies pourraient voir des percées.',
      'Ce qui reste non résolu' =>
        'Le problème fondamental de l\'alignement (s\'assurer que l\'IA poursuit des objectifs conformes aux valeurs humaines) n\'est pas résolu. Les évaluations de sécurité produisent des bornes inférieures de risque, pas des garanties réelles. Les chercheurs d\'Anthropic, OpenAI et Google DeepMind travaillent activement sur ce sujet.',
    ],
    'source_label' => 'Futura Sciences',
    'source_url'   => 'https://www.futura-sciences.com/tech/actualites/intelligence-artificielle-karim-beguir-2026-ia-generale-va-devenir-realite-tangible-130252/',
    'lu'           => 'Février 2026',
  ],
];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// veille technologique</p>
      <h1>IA & Robotique</h1>
      <p>Articles rédigés manuellement à partir de sources vérifiées — je suis de près les avancées en intelligence artificielle et en robotique.</p>
    </div>

    <!-- Filtres -->
    <div class="projects-filter" style="margin-bottom:2rem;">
      <button class="filter-btn active" data-filter="all">Tous <span class="filter-count" id="vcount-all"></span></button>
      <button class="filter-btn" data-filter="ia">Intelligence Artificielle <span class="filter-count" id="vcount-ia"></span></button>
      <button class="filter-btn" data-filter="robotique">Robotique <span class="filter-count" id="vcount-robotique"></span></button>
    </div>

    <!-- Grille -->
    <div class="veille-grid" id="veille-grid">

      <?php foreach ($articles as $i => $a): ?>
        <div class="veille-item" data-theme="<?= $a['theme'] ?>" style="animation-delay:<?= $i * 0.06 ?>s;">

          <!-- Carte -->
          <div class="veille-card" onclick="toggleVeille('<?= $a['id'] ?>')" id="vcard-<?= $a['id'] ?>">
            <div class="veille-card-head">
              <div>
                <span class="veille-badge veille-badge-<?= $a['theme'] ?>"><?= $a['label'] ?></span>
                <h3><?= $a['title'] ?></h3>
              </div>
              <div class="veille-right">
                <span class="veille-date"><?= $a['date'] ?></span>
                <span class="exp-chevron" id="vchevron-<?= $a['id'] ?>">›</span>
              </div>
            </div>
            <p class="veille-resume"><?= $a['resume'] ?></p>
          </div>

          <!-- Panneau -->
          <div class="veille-panel" id="vpanel-<?= $a['id'] ?>">
            <div class="veille-panel-inner">

              <?php foreach ($a['contenu'] as $sous_titre => $texte): ?>
                <div class="exp-block">
                  <h4><?= $sous_titre ?></h4>
                  <p><?= $texte ?></p>
                </div>
              <?php endforeach; ?>

              <!-- Source -->
              <div class="veille-source">
                <span class="veille-source-label">📖 Source</span>
                <a href="<?= $a['source_url'] ?>" target="_blank" rel="noopener" class="veille-source-link">
                  <?= $a['source_label'] ?> ↗
                </a>
                <span class="veille-source-date">Lu le <?= $a['lu'] ?></span>
              </div>

            </div>
          </div>

        </div>
      <?php endforeach; ?>

    </div>

  </div>
</main>

<script>
function toggleVeille(id) {
  const panel   = document.getElementById('vpanel-' + id);
  const chevron = document.getElementById('vchevron-' + id);
  const card    = document.getElementById('vcard-' + id);
  const isOpen  = panel.classList.contains('open');

  document.querySelectorAll('.veille-panel.open').forEach(p => p.classList.remove('open'));
  document.querySelectorAll('.veille-card.active').forEach(c => c.classList.remove('active'));
  document.querySelectorAll('#veille-grid .exp-chevron.rotated').forEach(c => c.classList.remove('rotated'));

  if (!isOpen) {
    panel.classList.add('open');
    chevron.classList.add('rotated');
    card.classList.add('active');
  }
}

/* Filtres */
const vitems = document.querySelectorAll('.veille-item');
const vbtns  = document.querySelectorAll('.projects-filter .filter-btn');

const vcounts = { all: vitems.length, ia: 0, robotique: 0 };
vitems.forEach(i => vcounts[i.dataset.theme]++);
Object.keys(vcounts).forEach(k => {
  const el = document.getElementById('vcount-' + k);
  if (el) el.textContent = '(' + vcounts[k] + ')';
});

vbtns.forEach(btn => {
  btn.addEventListener('click', () => {
    vbtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.filter;
    vitems.forEach(item => {
      item.style.display = (f === 'all' || item.dataset.theme === f) ? '' : 'none';
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>