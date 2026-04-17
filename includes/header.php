<?php
/**
 * includes/header.php
 * Avant d'inclure ce fichier, definissez $page :
 *   $page = 'accueil';
 */

$nav_items = array(
    'accueil'     => array('label' => 'Accueil',       'href' => 'index.php'),
    'competences' => array('label' => 'Competences',   'href' => 'competences.php'),
    'experience'  => array('label' => 'Experience',    'href' => 'experience.php'),
    'projets'     => array('label' => 'Projets',       'href' => 'projets.php'),
    'veille'      => array('label' => 'Veille Techno', 'href' => 'veille.php'),
    'contact'     => array('label' => 'Contact',       'href' => 'contact.php'),
);

$current = isset($page) ? $page : 'accueil';
$base    = isset($css_path) ? $css_path : '';
$_title  = isset($title) ? $title : 'Portfolio — Developpeur Web';
$_desc   = isset($meta_desc) ? $meta_desc : 'Portfolio de developpeur web.';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($_desc); ?>">
  <link rel="stylesheet" href="<?php echo $base; ?>style.css">
</head>
<body>

<nav class="site-nav">
  <div class="container nav-inner">

    <a href="<?php echo $base; ?>index.php" class="nav-logo">Erwan<span>.</span>Arnaud</a>

    <ul class="nav-links" id="nav-links">
      <?php foreach ($nav_items as $key => $item): ?>
        <li>
          <a href="<?php echo $base . $item['href']; ?>"
             class="<?php echo ($current === $key) ? 'active' : ''; ?>">
            <?php echo $item['label']; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <button class="nav-burger" id="nav-burger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<script>
  document.getElementById('nav-burger').addEventListener('click', function () {
    document.getElementById('nav-links').classList.toggle('open');
  });
</script>