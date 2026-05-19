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
<!-- ║  PAGE 2 — LISTE DES CRÉNEAUX (client/creneaux.php)       ║ -->
<!-- ╚══════════════════════════════════════════════════════════╝ -->

<section id="page-creneaux" style="padding-top:1rem;">

  <nav class="nav-public">
    <a href="#" class="brand">Fit<span>Space</span></a>
    <div class="nav-links">
      <a href="#page-dashboard-client">Mon espace</a>
      <a href="#">Déconnexion</a>
    </div>
  </nav>

  <div class="page-section">
    <div class="section-head">
      <h2>Créneaux disponibles</h2>
      <span class="count">8 créneaux trouvés</span>
    </div>

    <!-- Filtres -->
    <div class="filter-bar">
      <button class="filter-pill active">Tous</button>
      <button class="filter-pill"><i class="bi bi-people-fill"></i> Cours collectifs</button>
      <button class="filter-pill"><i class="bi bi-door-open-fill"></i> Salles</button>
      <button class="filter-pill"><i class="bi bi-dribbble"></i> Terrains</button>
    </div>

    <!-- Grille créneaux -->
    <div class="creneaux-grid">

      <!-- Créneau 1 — disponible -->
      <?php foreach ($creneaux as $creneau) : ?>
      <div class="creneau-card">
        <div class="creneau-header">
          <span class="creneau-type type-cours">><i class="bi bi-people-fill"></i> <?php echo $creneau['type']; ?></span>
          <span style="font-size:0.75rem;color:var(--muted);"><?php echo $creneau['date_debut']; ?></span>
        </div>
        <p class="creneau-title"><?php echo $creneau['nom']; ?></p>
        <div class="creneau-meta">
          <div class="meta-row"><i class="bi bi-clock"></i> <?php echo $creneau['date_debut']; ?> — <?php echo $creneau['date_fin']; ?></div>
          <div class="meta-row"><i class="bi bi-geo-alt"></i> <?php echo $creneau['description']; ?></div>
        </div>
        <div>
          <div class="places-bar"><div class="places-fill" style="width:40%"></div></div>
          <div class="places-label"><?php echo $creneau['place_dispo']; ?> places restantes sur <?php echo $creneau['capacite']; ?></div>
        </div>
        <a href="#" class="btn-reserver">Réserver ce créneau</a>
      </div>
      <?php endforeach; ?>


    </div>
  </div>

  <div class="footer-public">FitSpace &copy; 2025 — Projet CodeIgniter 4 · Tous droits <span>réservés</span></div>
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
