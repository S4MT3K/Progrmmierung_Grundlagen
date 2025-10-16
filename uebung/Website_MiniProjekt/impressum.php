<?php
// impressum.php — einfach Daten oben anpassen
$org = [
    'name'           => 'GreaCom GmbH',
    'address'        => 'Beispielstraße 1',
    'zip'            => '12345',
    'city'           => 'Musterstadt',
    'country'        => 'Deutschland',
    'phone'          => '+49 (0)30 1234567',
    'email'          => 'kontakt@greacom.example',
    'website'        => 'https://www.greacom.example',
    'managing'       => 'Max Mustermann',
    'register'       => 'Handelsregister Musterstadt, HRB 123456',
    'vat'            => 'USt-IdNr.: DE123456789',
    'supervisory'    => 'Zuständige Aufsichtsbehörde: Beispielbehörde, Musterstadt',
    'profession'     => 'Berufsbezeichnung: Kommunikationsagentur (nicht zulassungspflichtig)',
    'rules'          => 'Berufsrechtliche Regelungen: —',
    'dispute'        => 'Plattform der EU-Kommission zur Online-Streitbeilegung: https://ec.europa.eu/consumers/odr',
    'responsibleTV'  => 'Verantwortlich i.S.d. § 18 Abs. 2 MStV: Max Mustermann, Anschrift wie oben',
    'imageCredits'   => 'Bildnachweise: Unsplash, Pexels (Beispiel)',
];
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Impressum – <?= htmlspecialchars($org['name']) ?></title>
    <meta name="robots" content="index,follow">
    <style>
        :root{--bg:#0b0f14;--panel:#121821;--text:#e9eef5;--muted:#a8b3c2;--radius:14px}
        *{box-sizing:border-box} body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;background:var(--bg);color:var(--text)}
        .wrap{max-width:960px;margin:0 auto;padding:24px}
        header{padding:22px 0}
        h1{margin:0 0 8px} .muted{color:var(--muted)}
        .card{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:20px;margin:12px 0}
        a{color:#7ad2ff;text-decoration:none} a:hover{text-decoration:underline}
        address{font-style:normal;line-height:1.5}
        footer{padding:26px 0;color:var(--muted);text-align:center}
    </style>
    <!-- Strukturierte Daten -->
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Organization",
          "name":"<?= htmlspecialchars($org['name']) ?>",
    "url":"<?= htmlspecialchars($org['website']) ?>",
    "telephone":"<?= htmlspecialchars($org['phone']) ?>",
    "email":"<?= htmlspecialchars($org['email']) ?>",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"<?= htmlspecialchars($org['address']) ?>",
      "postalCode":"<?= htmlspecialchars($org['zip']) ?>",
      "addressLocality":"<?= htmlspecialchars($org['city']) ?>",
      "addressCountry":"<?= htmlspecialchars($org['country']) ?>"
    }
  }
    </script>
</head>
<body>
<div class="wrap">
    <header>
        <h1>Impressum</h1>
        <div class="muted"><?= htmlspecialchars($org['name']) ?></div>
    </header>

    <section class="card" aria-labelledby="anbieter">
        <h2 id="anbieter">Angaben gemäß § 5 TMG</h2>
        <address>
            <?= htmlspecialchars($org['name']) ?><br>
            <?= htmlspecialchars($org['address']) ?><br>
            <?= htmlspecialchars($org['zip']) ?> <?= htmlspecialchars($org['city']) ?><br>
            <?= htmlspecialchars($org['country']) ?>
        </address>
        <p>Telefon: <a href="tel:<?= preg_replace('/\\D+/', '', $org['phone']) ?>"><?= htmlspecialchars($org['phone']) ?></a><br>
            E-Mail: <a href="mailto:<?= htmlspecialchars($org['email']) ?>"><?= htmlspecialchars($org['email']) ?></a><br>
            Web: <a href="<?= htmlspecialchars($org['website']) ?>"><?= htmlspecialchars($org['website']) ?></a></p>
    </section>

    <section class="card" aria-labelledby="vertretung">
        <h2 id="vertretung">Vertretungsberechtigt</h2>
        <p><?= htmlspecialchars($org['managing']) ?></p>
        <p><?= htmlspecialchars($org['register']) ?></p>
        <p><?= htmlspecialchars($org['vat']) ?></p>
    </section>

    <section class="card" aria-labelledby="aufsicht">
        <h2 id="aufsicht">Aufsichts-/Berufsangaben</h2>
        <p><?= htmlspecialchars($org['supervisory']) ?></p>
        <p><?= htmlspecialchars($org['profession']) ?></p>
        <p><?= htmlspecialchars($org['rules']) ?></p>
    </section>

    <section class="card" aria-labelledby="rundfunk">
        <h2 id="rundfunk">Verantwortlich nach § 18 Abs. 2 MStV</h2>
        <p><?= htmlspecialchars($org['responsibleTV']) ?></p>
    </section>

    <section class="card" aria-labelledby="streit">
        <h2 id="streit">Streitbeilegung</h2>
        <p><?= htmlspecialchars($org['dispute']) ?></p>
        <p>Wir sind nicht verpflichtet und nicht bereit, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
    </section>

    <section class="card" aria-labelledby="haftung">
        <h2 id="haftung">Haftung für Inhalte & Links</h2>
        <p>Als Diensteanbieter sind wir gemäß § 7 Abs. 1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich.
            Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu
            überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung
            der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt.</p>
        <p>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte
            auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.</p>
    </section>

    <section class="card" aria-labelledby="urheber">
        <h2 id="urheber">Urheberrecht</h2>
        <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht.
            Beiträge Dritter sind als solche gekennzeichnet. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung
            außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.</p>
        <p><?= htmlspecialchars($org['imageCredits']) ?></p>
    </section>

    <footer>
        © <?= date('Y') ?> <?= htmlspecialchars($org['name']) ?> – Alle Rechte vorbehalten
    </footer>
</div>
</body>
</html>