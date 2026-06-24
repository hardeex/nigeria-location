<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Locations API — Free Nigerian Geo-Data for Developers</title>
    <meta name="description" content="Free, open API providing all 36 Nigerian states + FCT, 774 LGAs, coordinates, postal codes, geopolitical zones, and proximity search. Built by Nigerian developers, for Nigerian developers.">
    <meta name="keywords" content="Nigeria API, Nigerian states, LGA API, postal codes Nigeria, Nigerian locations, geolocation Nigeria">
    <meta property="og:title" content="Nigeria Locations API">
    <meta property="og:description" content="Free Nigerian geo-data API: states, LGAs, coordinates, postal codes, proximity search.">
    <meta property="og:url" content="https://nigeria-location.jamiuadewaleyusuf.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<!-- NAV -->
@include('components.nav')



<!-- HERO -->
@include('components.hero')

<!-- STATS -->
@include('components.stats')

<!-- PROBLEM -->
@include('components.problem')

<hr class="divider">

<!-- ENDPOINTS -->
@include('components.endpoints')

<hr class="divider">

<!-- INTEGRATION -->
@include('components.integration')

<hr class="divider">

<!-- USE CASES -->
@include('components.useCases')

<hr class="divider">

<!-- FAQ -->
@include('components.faq')

<hr class="divider">

<!-- FOOTER -->
@include('components.footer')

<script>
    // Mobile nav
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
    });
    mobileMenu.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => mobileMenu.classList.remove('open'));
    });

    // Hero terminal tabs
    function switchTab(btn, id) {
        document.querySelectorAll('.t-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        ['resp','nearby','postal'].forEach(k => {
            document.getElementById('tab-'+k).style.display = k === id ? 'block' : 'none';
        });
    }

    // Endpoint accordion
    function toggleEndpoint(id) {
        const card = document.getElementById(id);
        const body = card.querySelector('.endpoint-body');
        const isOpen = card.classList.contains('open');
        // close all
        document.querySelectorAll('.endpoint-card').forEach(c => {
            c.classList.remove('open');
            c.querySelector('.endpoint-body').classList.remove('open');
        });
        if (!isOpen) {
            card.classList.add('open');
            body.classList.add('open');
        }
    }

    // Integration tabs
    function switchIntTab(btn, id) {
        document.querySelectorAll('.int-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('.int-panel').forEach(p => p.classList.remove('active'));
        document.getElementById('int-'+id).classList.add('active');
    }

    // FAQ accordion
    function toggleFaq(btn) {
        const item = btn.closest('.faq-item');
        item.classList.toggle('open');
    }

    // Copy helpers
    function copyText(text, btn) {
        navigator.clipboard.writeText(text).then(() => {
            const orig = btn.textContent;
            btn.textContent = 'Copied!';
            btn.style.color = 'var(--lime)';
            setTimeout(() => { btn.textContent = orig; btn.style.color = ''; }, 2000);
        });
    }

    function copyBlock(btn) {
        const block = btn.closest('.code-block');
        const text = block.innerText.replace(/^Copy\n?/, '').trim();
        copyText(text, btn);
    }

    // Open first endpoint by default
    toggleEndpoint('ep1');
</script>
</body>
</html>
