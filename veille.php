<?php
$page     = 'veille';
$title    = 'Veille Technologique — IA & Robotique';
$meta_desc = 'Ma veille technologique sur l\'IA et la Robotique.';
include 'includes/header.php';

// Articles définis à la main — ajoutez-en ici
$articles = [
  [
    'titre'   => 'Les grands modèles de langage en 2025 : où en sommes-nous ?',
    'resume'  => 'Tour d\'horizon des LLMs actuels : GPT-4o, Claude 3, Gemini Ultra, Llama 3... Comparaison des architectures et des usages.',
    'date'    => '10 Mars 2025',
    'tags'    => ['IA', 'LLM'],
    'slug'    => 'articles/llm-2025.php',
  ],
  [
    'titre'   => 'La robotique humanoïde prend son envol',
    'resume'  => 'Boston Dynamics, Figure AI, Tesla Optimus... le marché des robots humanoïdes s\'accélère. Quelles sont les technologies derrière ?',
    'date'    => '20 Fév. 2025',
    'tags'    => ['Robotique'],
    'slug'    => 'articles/robotique-humanoide.php',
  ],
  [
    'titre'   => 'RAG : enrichir les LLMs avec des données locales',
    'resume'  => 'Le Retrieval-Augmented Generation permet d\'interroger des documents privés avec un LLM. Principe et mise en pratique.',
    'date'    => '5 Fév. 2025',
    'tags'    => ['IA', 'RAG'],
    'slug'    => 'articles/rag.php',
  ],
  [
    'titre'   => 'IA embarquée : l\'intelligence hors du cloud',
    'resume'  => 'Les modèles légers comme Whisper ou LLaMA tournant sur matériel local. Enjeux de confidentialité et de performance.',
    'date'    => '15 Jan. 2025',
    'tags'    => ['IA', 'Edge AI'],
    'slug'    => 'articles/ia-embarquee.php',
  ],
];
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// veille technologique</p>
      <h1>IA & Robotique</h1>
      <p>Articles de veille rédigés manuellement — je suis de près les avancées en intelligence artificielle et en robotique.</p>
    </div>

    <div class="blog-grid">
      <?php foreach ($articles as $i => $art): ?>
        <a href="<?= htmlspecialchars($art['slug']) ?>"
           class="blog-card fade-in"
           style="text-decoration:none;animation-delay:<?= $i * 0.08 ?>s;">
          <div class="blog-meta">
            <span class="blog-date"><?= $art['date'] ?></span>
            <?php foreach ($art['tags'] as $tag): ?>
              <span class="blog-tag"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
          <h3><?= htmlspecialchars($art['titre']) ?></h3>
          <p><?= htmlspecialchars($art['resume']) ?></p>
          <span class="read-more">Lire l'article →</span>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</main>

<?php include 'includes/footer.php'; ?>