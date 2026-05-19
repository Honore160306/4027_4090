<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ╔══════════════════════════════════════════════════════════╗ -->
    <!-- ║  PAGE 4 — INSCRIPTION (auth/register.php)                ║ -->
    <!-- ╚══════════════════════════════════════════════════════════╝ -->

    <section id="page-inscription" style="background:var(--surface);">
    <nav class="nav-public">
        <a href="#" class="brand">Fit<span>Space</span></a>
    </nav>
    <div class="auth-wrapper">
        <div class="auth-card">
        <div class="auth-logo">Fit<span>Space</span></div>
        <div class="auth-subtitle">Créez votre compte client gratuitement.</div>

        <form method="post" action="/creationCompte">
            <div class="form-grid-2 mb-3">
            <div class="form-group">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Dupont" />
            </div>
            </div>
            <div class="form-group mb-3">
            <label class="form-label">Adresse email</label>
            <input type="email" class="form-control" name="email" placeholder="jean.dupont@email.com" />
            <!-- Erreur de validation CI4 -->
            <small style="color:var(--accent);font-size:0.78rem;margin-top:3px;">Cet email est déjà utilisé.</small>
            </div>
            <div class="form-group mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" placeholder="8 caractères minimum" />
            </div>
            <br><br>
            <div>
                <select name="role" id="">
                    <option value="client">client</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn-primary-custom">Créer mon compte</button>
        </form>

        <hr class="auth-divider" />
        <div class="auth-footer">Déjà inscrit ? <a href="/connexion">Se connecter</a></div>
        </div>
    </div>
    </section>
</body>
</html>