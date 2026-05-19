<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitSpace — Gestionnaire de réservations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ╔══════════════════════════════════════════════════════════╗ -->
<!-- ║  PAGE 1 — ACCUEIL PUBLIC (index.php)                     ║ -->
<!-- ╚══════════════════════════════════════════════════════════╝ -->

<section id="page-accueil">

  <!-- NAV -->
  <nav class="nav-public">
    <a href="#" class="brand">Fit<span>Space</span></a>
    <div class="nav-links">
      <a href="#">Nos créneaux</a>
      <a href="#">Tarifs</a>
      <a href="/connexion">Connexion</a>
      <a href="/inscription" class="btn-nav-primary">S'inscrire</a>
    </div>
  </nav>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-eyebrow"><i class="bi bi-lightning-charge-fill"></i> Réservation en ligne</div>
    <h1>Votre espace bien-être,<br><em>réservé en 30 secondes.</em></h1>
    <p>Cours collectifs, salles et terrains disponibles 7j/7. Créez un compte gratuit et réservez votre prochain créneau.</p>
    <div class="hero-ctas">
      <a href="/creneaux" class="btn-hero btn-hero-primary">Voir les créneaux disponibles</a>
      <a href="/inscription" class="btn-hero btn-hero-outline">Créer mon compte</a>
    </div>
  </div>

  <!-- STATS -->
  <div class="stats-band">
    <div class="stat-item"><div class="num">12</div><div class="lbl">Créneaux / semaine</div></div>
    <div class="stat-item"><div class="num">3</div><div class="lbl">Types de ressources</div></div>
    <div class="stat-item"><div class="num">48h</div><div class="lbl">Délai d'annulation</div></div>
    <div class="stat-item"><div class="num">100%</div><div class="lbl">Gratuit à l'inscription</div></div>
  </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navigation demo entre sections -->
<script>
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
  document.querySelectorAll('.filter-pill').forEach(pill => {
    pill.addEventListener('click', () => {
      document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
      pill.classList.add('active');
    });
  });
</script>
</body>
</html>
