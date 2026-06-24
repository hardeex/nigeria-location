<section id="problem">
    <div class="section-inner">
        <p class="section-eyebrow">The Problem</p>
        <h2 class="section-heading font-display">Every Nigerian developer has built this themselves — at least twice.</h2>
        <p class="section-sub">
            Shipping a product in Nigeria means writing the same address form logic, the same state/LGA arrays,
            the same KYC dropdowns — over and over. This API ends that cycle.
        </p>

        <div class="problem-grid">
            <div class="problem-card" data-num="01">

                <div class="card-title">Hardcoded state arrays</div>
                <div class="card-text">
                    Most teams maintain a static JSON or PHP array of states and LGAs, copied from another project,
                    riddled with spelling inconsistencies and missing new LGAs.
                </div>
            </div>
            <div class="problem-card" data-num="02">

                <div class="card-title">No coordinates or postal codes</div>
                <div class="card-text">
                    When location features land on the roadmap — delivery radius, store finder, nearest agent —
                    the team has to source coordinates manually from Wikipedia or Google Maps.
                </div>
            </div>
            <div class="problem-card" data-num="03">

                <div class="card-title">Inconsistent data across products</div>
                <div class="card-text">
                    "Akwa Ibom" appears as "Akwa-Ibom", "AkwaIbom", "Cross-River" — especially across microservices.
                    Slugs, ISO codes, and consistent naming solve this.
                </div>
            </div>
            <div class="problem-card" data-num="04">

                <div class="card-title">KYC & fintech onboarding</div>
                <div class="card-text">
                    Address verification, state-of-origin fields, and document validation all need
                    authoritative location data with postal codes matching NIPOST format.
                </div>
            </div>
            <div class="problem-card" data-num="05">

                <div class="card-title">Delivery & logistics</div>
                <div class="card-text">
                    E-commerce platforms need to know if a customer address is within delivery range.
                    The proximity endpoint returns nearby LGAs sorted by distance in km.
                </div>
            </div>
            <div class="problem-card" data-num="06">
              
                <div class="card-title">Geopolitical zone analytics</div>
                <div class="card-text">
                    NGOs, government apps, and electoral platforms need to group states by
                    NC / NE / NW / SE / SS / SW zones. One endpoint returns this entire structure.
                </div>
            </div>
        </div>
    </div>
</section>
