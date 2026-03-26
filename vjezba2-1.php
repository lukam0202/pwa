<?php
$naslov = "PHP Dokument";
$autor = "Luka Mikić";
$link_href = "https://www.youtube.com";
$link_text = "Klikni za YouTube!"
?>

<!DOCTYPE html>
<html lang="hr">
    
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo htmlspecialchars($naslov); ?></title>

  <meta name="description" content="Prvi PHP dokument s CSS-om.">
  
  <style>
    :root { --bg: #0b0000; --card: #ffffff; --text: #000000; --muted: #696969; --accent: #6e0f16; } * { box-sizing: border-box; }

    .wrap { max-width: 720px; margin: 48px auto; background: var(--card); padding: 32px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,.08); }

    body {margin: 0; background: var(--bg); color: var(--text); box-sizing: border-box; }

    h1 { font-size:2rem; margin-bottom: 14; }

    p  { margin:0 0 16px; line-height:1.6; }

    footer { font-size: 0.9rem; color: var(--muted); }

    .btn { display: inline-block; padding: 10px 16px; border: 1px solid var(--accent); border-radius: 10px; text-decoration: none; }

    .btn:hover { background: var(--accent); color: #fff; }

    .btn:focus-visible { outline: 3px solid var(--accent); }

    .btn:active { opacity: 0.5; }

  </style>
  
</head>
<body>
  <main class="wrap">
    <h1><?php echo htmlspecialchars($naslov); ?></h1>
    <p>Ovu stranicu izradio je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
    <p>
      <a class="btn" href="<?php echo htmlspecialchars($link_href); ?>"
         target="_blank" rel="noopener"><?php echo htmlspecialchars($link_text); ?></a>
    </p>
    <footer>&copy; <?php echo date('Y'); ?></footer>
  </main>
    </body>
</html>

<!-- Naziv datoteke: vjezba2-1.php -->
