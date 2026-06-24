<section id="faq">
    <div class="section-inner">
        <p class="section-eyebrow">FAQ</p>
        <h2 class="section-heading font-display">Common questions.</h2>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Is this really free? No API key required?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    Yes, completely free and completely open. No registration, no API key, no rate limit headers to manage.
                    Just hit the endpoint. If this API helps your product, consider giving the project a star on GitHub or sharing it with other Nigerian developers.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Where does the data come from?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    State and LGA data comes from the Nigerian Federal Government's official classification.
                    Coordinates are centroid points from GeoNames and OpenStreetMap.
                    Postal codes follow the official NIPOST 6-digit format.
                    ISO codes are from ISO 3166-2:NG.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    How accurate are the coordinates?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    Coordinates represent the centroid of the LGA's major town or headquarters, not the geographic center of the LGA polygon.
                    They are accurate enough for proximity search, map pins, and zone calculations.
                    For precision polygon-level boundaries, you would need a GeoJSON shapefile source.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Can I self-host this for my team?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    Absolutely. The full source code is available. It's a standard Laravel 11 application.
                    Run <code>php artisan migrate && php artisan db:seed</code> and you have your own private instance.
                    This is especially useful for teams with strict data residency requirements.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    How do I handle the state→LGA cascade in a form?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    Fetch <code>/api/v1/states</code> on page load to populate your state dropdown.
                    When a user selects a state, fire a request to <code>/api/v1/states/{slug}/lgas</code>
                    to populate the LGA dropdown. Both responses are fast enough for real-time use without caching.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    What is the /nearby endpoint useful for practically?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    Common uses: checking if a customer's GPS coordinates are within your delivery radius (set radius to your max km),
                    finding the nearest service agents to a user, sorting properties by proximity to a search location,
                    and building "stores near you" features. Pass <code>type=state</code> to find the nearest states instead of LGAs.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Are there any CORS restrictions?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    CORS is open — you can call this API directly from browser JavaScript, React, Vue, or any frontend.
                    No proxy needed. If you're building a high-traffic product, consider self-hosting to avoid depending on external uptime.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Will this API stay up? What's the SLA?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-a">
                    This is a community resource hosted on a Contabo VPS with Uptime Kuma monitoring.
                    For production applications, consider caching responses locally (state lists almost never change) or
                    self-hosting. A free resource cannot guarantee enterprise SLAs — plan accordingly.
                </div>
            </div>
        </div>
    </div>
</section>
