
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD - SI-IHM</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/shop-homepage.css">
</head>
<body>

    <header>
        TD - SI-IHM - ETU004159-ETU004274
        <?php if (isset($_SESSION['caisse_libelle'])): ?>
            | <?= htmlspecialchars($_SESSION['caisse_libelle']) ?>
        <?php endif; ?>
        | <a href="/">Changer Caisse</a>
    </header>

    <div class="wrapper">

        <aside>
            <?php if (isset($_SESSION['caisse_libelle'])): ?>
                <h2><?= htmlspecialchars($_SESSION['caisse_libelle']) ?></h2>
            <?php else: ?>
                <h2>Caisse n°X</h2>
            <?php endif; ?>
            <nav>
                <a href="/achat">Saisie Achat</a>
                <a href="#">Menu 1</a>
                <a href="#">Menu 2</a>
                <a href="#">Menu 3</a>
            </nav>

        </aside>

        <main>
     <?php if (isset($view)) require $view; ?>
        </main>

    </div>

    <footer>
        Copyright &copy; Your Website 2025
    </footer>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>