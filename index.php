<?php


?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DZIKIE KNURY</title>
	<link rel="icon" type="image/png" href="logo.png">

	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lg-video.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lg-thumbnail.min.css">
</head>

<body>

<header>
	<a href="#home" class="logo">
		<img src="logo.png" alt="KNUR TEAM LOGO">
	</a>

	<nav>
		<ul>
			<li><a href="#home">Strona Główna</a></li>
			<li><a href="#posts">Aktualności</a></li>
			<li><a href="#team">Drużyna</a></li>
			<li><a href="#highlights">Momenty</a></li>
			<li><a href="#about">O nas</a></li>
		</ul>
	</nav>
</header>

<section id="home" class="hero-section">
	<div class="hero-text">
		<h1>DZIKIE KNURY</h1>
		<p>NAJLEPSZA DRUŻYNA Z RZESZOWA </p>
		<a href="#team" class="btn">ZOBACZ ROSTER!</a>
	</div>
	<video autoplay muted loop playsinline>
		<source src="nagranie.mp4" type="video/mp4">
	</video>
</section>

<section id="posts" class="posts-section">
	<h2 class="section-title">OSTATNIE WIADOMOŚCI</h2>

	<div class="posts-grid">

		<article class="post-card">
			<img src="post1.png" alt="Post 1">
			<h3>NOWY ROSTER DZIKICH KNURÓW</h3>
			<p>MIŁOBÓR, DJJAMNIK, GRN, POLSKI KROKIECIK, W1NKS</p>
			<button type="button" class="post-btn" aria-haspopup="dialog">CZYTAJ WIĘCEJ</button>
			<div class="post-full" hidden>
				<p> Core drużyny złożony z grn, POLSKIEGO KROKIECIKA, I w1nksa zostaje. do drużyny dołącza dwóch jeźdzców apokalipsy .</p>
				<p>POWRÓT DZIKICH KNURÓW</p>
				<p>Zostań z nami - kolejne wyniki i szczegóły pojawią się na tej stronie.</p>
			</div>
		</article>

		<article class="post-card">
			<img src="post2.png" alt="Post 2">
			<h3>SZYBKA WERYFIKACJA DRUŻYNY NA IEM ATLANTA 2026</h3>
			<p>NASZA DRUŻYNA WYNIKIEM 13-1 ZOSTAŁA W CIĄGU KILKUNASTU MINUT ZWERYFIKOWANA PRZEZ METIZPORT</p>
			<button type="button" class="post-btn" aria-haspopup="dialog">CZYTAJ WIĘCEJ</button>
			<div class="post-full" hidden>
				<p>NASZA DRUŻYNA WYNIKIEM 13-1 ZOSTAŁA W CIĄGU KILKUNASTU MINUT ZWERYFIKOWANA PRZEZ METIZPORT.</p>
				<p>Występ na IEM Atlanta 2026 zakończył się szybciej, niż ktokolwiek się spodziewał. Wyciągamy wnioski i wracamy do treningów.</p>
			</div>
		</article>

		<article class="post-card">
			<img src="post3.jpg" alt="Post 3">
			<h3>DERBY SĄ NASZE</h3>
			<p>Wygrywamy wynikiem 2:1 DERBY z drużyną Knurska Brygada!.</p>
			<button type="button" class="post-btn" aria-haspopup="dialog">CZYTAJ WIĘCEJ</button>
			<div class="post-full" hidden>
				<p>Wygrywamy wynikiem 2:1 derby z drużyną Knurska Brygada!</p>
				<p>To był zacięty mecz, ale to my wyszliśmy z niego zwycięsko. Dziękujemy wszystkim za wsparcie – derby są nasze!</p>
			</div>
		</article>

	</div>
</section>

<section id="team" class="team-section">
	<h2 class="section-title">NASZA DRUŻYNA</h2>
	<div class="team-grid">
		<div class="team-member">
			<img src="baribal.png" alt="baribal">
			<h3>BARIBAL </h3>
			<p>IGL</p>
		</div>
		<div class="team-member">
			<img src="grn.png" alt="GRN">
			<h3>GRN</h3>
			<p>RIFFLER</p>
		</div>
		<div class="team-member">
			<img src="vlad.png" alt="WŁAD">
			<h3>W1NKS</h3>
			<p>STAR PLAYER</p>
		</div>
		<div class="team-member">
			<img src="arabacho.png" alt="arabacho">
			<h3>ARABACHO</h3>
			<p>CWL</p>
		</div>
		<div class="team-member">
			<img src="krokiet.png" alt="krokiet">
			<h3>POLSKI KROKIECIK</h3>
			<p>SNIPER</p>
		</div>
	</div>

	<h3 class="subsection-title">REZERWA</h3>
	<div class="team-grid team-grid--reserve">
		<div class="team-member">
			<img src="milobor.png" alt="milobor">
			<h3>Miłobór</h3>
			<p>CUCKOLDZIK</p>
		</div>
		<div class="team-member">
			<img src="jamnik.png" alt="djjamnik">
			<h3>DJ JAMNIK</h3>
			<p>MINIGEJ</p>
		</div>
		<div class="team-member">
			<img src="anthony.png" alt="domen">
			<h3>Anthony</h3>
			<p>ARCY-CWL</p>
		</div>
	</div>
</section>

<section id="about" class="about-section">
	<h2 class="section-title">O NAS</h2>
	<p>DZIKIE KNURY TO POLSKA DRUŻYNA, NALEŻĄCY DO NIEJ ZAWODNICY WYWODZĄ SIĘ Z HETMAŃSKIEJ 120 Z RZESZOWA. JEST TO DRUŻYNA O OGROMNYCH AMBICJACH I PLANACH, I TE PLANY SĄ KONSEKWENTNIE REALIZOWANE, SZCZEGÓŁY O NICH SĄ NA BIEŻĄCO AKUTALIZOWANE NA TEJ STRONIE, CAŁY PROJEKT MA ZAMYSŁ PROMOWANIA E-SPORTU W POWIECIE ŁAŃCUCKIM, WE WSI KOSINA</p>
</section>

<section id="highlights" class="highlights-section">
		<h2 class="section-title">NAJWAŻNIEJSZE MOMENTY</h2>

		<div class="highlights-grid">
			<figure class="highlight-card">
				<video controls playsinline preload="metadata" poster="thumb1.jpg">
					<source src="highlight1.mp4" type="video/mp4">
				</video>
				<figcaption>GRN | USP MASTER</figcaption>
			</figure>

			<figure class="highlight-card">
				<video controls playsinline preload="metadata" poster="thumb2.jpg">
					<source src="highlight2.mp4" type="video/mp4">
				</video>
				<figcaption>DJAKSIK | CLUTCH</figcaption>
			</figure>

			<figure class="highlight-card">
				<video controls playsinline preload="metadata" poster="thumb3.jpg">
					<source src="highlight3.mp4" type="video/mp4">
				</video>
				<figcaption>CWL | ELEGANCKA AKCJA</figcaption>
			</figure>
		</div>
</section>

<section id="footer" class="footer-section">
	<p>🐷 2026 DZIKIE KNURY. Wszelkie prawa niezastrzeżone.</p>
</section>

<div id="post-modal" class="post-modal" hidden>
	<div class="post-modal__backdrop" data-close></div>
	<div class="post-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="post-modal-title" tabindex="-1">
		<button type="button" class="post-modal__close" data-close aria-label="Zamknij">&times;</button>
		<img class="post-modal__img" src="" alt="">
		<h3 id="post-modal-title" class="post-modal__title"></h3>
		<div class="post-modal__body"></div>
	</div>
</div>

<button type="button" id="to-top" class="to-top" aria-label="Wróć na górę" hidden>&uarr;</button>

<script>
(function () {
	var modal = document.getElementById('post-modal');
	var dialog = modal.querySelector('.post-modal__dialog');
	var img = modal.querySelector('.post-modal__img');
	var title = modal.querySelector('.post-modal__title');
	var body = modal.querySelector('.post-modal__body');
	var lastFocus = null;

	function openPost(card) {
		var cardImg = card.querySelector('img');
		var full = card.querySelector('.post-full');

		img.src = cardImg.getAttribute('src');
		img.alt = cardImg.getAttribute('alt') || '';
		title.textContent = card.querySelector('h3').textContent;
		body.innerHTML = full ? full.innerHTML : card.querySelector('p').outerHTML;

		lastFocus = document.activeElement;
		modal.hidden = false;
		document.body.classList.add('modal-open');
		dialog.scrollTop = 0;
		dialog.focus();
	}

	function closePost() {
		modal.hidden = true;
		document.body.classList.remove('modal-open');
		if (lastFocus) { lastFocus.focus(); }
	}

	document.querySelectorAll('.post-card .post-btn').forEach(function (btn) {
		btn.addEventListener('click', function () {
			openPost(btn.closest('.post-card'));
		});
	});

	modal.addEventListener('click', function (e) {
		if (e.target.hasAttribute('data-close')) { closePost(); }
	});

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && !modal.hidden) { closePost(); }
	});

	var toTop = document.getElementById('to-top');
	window.addEventListener('scroll', function () {
		toTop.hidden = window.scrollY < 400;
	}, { passive: true });
	toTop.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
})();
</script>

</body>
</html>
