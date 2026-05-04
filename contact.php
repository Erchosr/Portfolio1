<?php
$page      = 'contact';
$title     = 'Contact — Erwan Arnaud';
$meta_desc = 'Me contacter pour un projet, une opportunité ou une question.';
include 'includes/header.php';
?>

<main>
  <div class="container">

    <div class="page-hero">
      <p class="label">// contact</p>
      <h1>Travaillons ensemble</h1>
      <p>Une idée de projet, une opportunité ou une simple question ? N'hésitez pas à me contacter directement.</p>
    </div>

    <div class="contact-solo">

      <!-- Disponibilité -->
      <div class="contact-status fade-in">
        <span class="status-dot"></span>
        <span>Disponible pour une alternance, un stage ou un projet freelance</span>
      </div>

      <!-- Liens de contact -->
      <div class="contact-cards fade-in">

        <a href="mailto:erwankal31@gmail.com" class="contact-card">
          <div class="contact-card-icon">✉️</div>
          <div>
            <p class="contact-card-label">Email</p>
            <p class="contact-card-value">erwankal31@gmail.com</p>
          </div>
          <span class="contact-card-arrow">↗</span>
        </a>

        <a href="https://www.linkedin.com/in/erwan-arnaud-0641a32aa/" target="_blank" rel="noopener" class="contact-card">
          <div class="contact-card-icon">💼</div>
          <div>
            <p class="contact-card-label">LinkedIn</p>
            <p class="contact-card-value">Erwan Arnaud</p>
          </div>
          <span class="contact-card-arrow">↗</span>
        </a>

        <a href="https://github.com/Erchosr" target="_blank" rel="noopener" class="contact-card">
          <div class="contact-card-icon">🐙</div>
          <div>
            <p class="contact-card-label">GitHub</p>
            <p class="contact-card-value">github.com/Erchosr</p>
          </div>
          <span class="contact-card-arrow">↗</span>
        </a>

        <a href="assets/pdf/CV_Erwan_Arnaud.pdf" class="contact-card" download>
          <div class="contact-card-icon">📄</div>
          <div>
            <p class="contact-card-label">Curriculum Vitæ</p>
            <p class="contact-card-value">Télécharger mon CV</p>
          </div>
          <span class="contact-card-arrow">↓</span>
        </a>

      </div>

      <!-- Infos pratiques -->
      <div class="contact-info-grid fade-in">
        <div class="contact-info-block">
          <p class="contact-info-label">📍 Localisation</p>
          <p class="contact-info-value">Cierp-Gaud, Haute-Garonne<br><span>Mobilité nationale · Télétravail possible</span></p>
        </div>
        <div class="contact-info-block">
          <p class="contact-info-label">🎓 Formation</p>
          <p class="contact-info-value">BTS SIO SLAM<br><span>Lycée Paul Sabatier, Carcassonne</span></p>
        </div>
        <div class="contact-info-block">
          <p class="contact-info-label">⏱ Disponibilité</p>
          <p class="contact-info-value">Dès Juin 2025<br><span>Alternance, stage, freelance</span></p>
        </div>
      </div>

    </div>

  </div>
</main>

<?php include 'includes/footer.php'; ?>