<section class="hero" style="padding-top: 7rem;">
    <div class="hero-blob"></div>
    <div class="hero-grid">
        <div>
            <p class="hero-eyebrow">Free · Open · No Auth Required</p>
            <h1 class="hero-headline font-display">
                Nigerian geo-data,<br>
                <span class="accent">finally structured.</span>
            </h1>
            <p class="hero-subline">
                One API for all 36 states + FCT, 774 LGAs, GPS coordinates, NIPOST postal codes,
                geopolitical zones, and proximity search — built for Nigerian developers tired
                of building location dropdowns from scratch.
            </p>
            <div class="hero-actions">
                <a href="#endpoints" class="btn-primary">Explore Endpoints →</a>
                <a href="#integrate" class="btn-ghost">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16,18 22,12 16,6"/><polyline points="8,6 2,12 8,18"/></svg>
                    Integration Guide
                </a>
            </div>
        </div>

        <div class="hero-terminal">
            <div class="terminal-bar">
                <div class="terminal-dot" style="background:#FF5F57;"></div>
                <div class="terminal-dot" style="background:#FEBC2E;"></div>
                <div class="terminal-dot" style="background:#28C840;"></div>
                <div class="url-bar">GET nigeria.jamiuadewaleyusuf.com/api/v1/states/lagos/lgas</div>
            </div>
            <div class="terminal-body">
                <div class="terminal-tabs">
                    <button class="t-tab active" onclick="switchTab(this,'resp')">Response</button>
                    <button class="t-tab" onclick="switchTab(this,'nearby')">Nearby</button>
                    <button class="t-tab" onclick="switchTab(this,'postal')">Postal</button>
                </div>

                <div id="tab-resp" class="code-output">
<pre>{
  <span class="k">"status"</span>: <span class="s">"success"</span>,
  <span class="k">"meta"</span>: {
    <span class="k">"state"</span>: {
      <span class="k">"name"</span>:     <span class="s">"Lagos"</span>,
      <span class="k">"capital"</span>:  <span class="s">"Ikeja"</span>,
      <span class="k">"geo_zone"</span>: <span class="s">"SW"</span>,
      <span class="k">"iso_code"</span>: <span class="s">"NG-LA"</span>
    },
    <span class="k">"total"</span>: <span class="n">20</span>
  },
  <span class="k">"data"</span>: [
    {
      <span class="k">"name"</span>:       <span class="s">"Agege"</span>,
      <span class="k">"slug"</span>:       <span class="s">"agege"</span>,
      <span class="k">"state"</span>:      <span class="s">"Lagos"</span>,
      <span class="k">"coordinates"</span>: {
        <span class="k">"lat"</span>: <span class="n">6.6167</span>,
        <span class="k">"lng"</span>: <span class="n">3.3167</span>
      },
      <span class="k">"postal_code"</span>: <span class="s">"100283"</span>
    },
    <span class="c">// ... 19 more LGAs</span>
  ]
}</pre>
                </div>
                <div id="tab-nearby" class="code-output" style="display:none;">
<pre><span class="c"># Nearby LGAs to Victoria Island</span>
GET /api/v1/nearby
  ?lat=<span class="n">6.4281</span>
  &lng=<span class="n">3.4219</span>
  &radius=<span class="n">15</span>
  &limit=<span class="n">5</span>

<span class="p">{</span>
  <span class="k">"data"</span>: [
    {
      <span class="k">"name"</span>:        <span class="s">"Eti-Osa"</span>,
      <span class="k">"distance_km"</span>: <span class="n">1.24</span>,
      <span class="k">"postal_code"</span>: <span class="s">"101241"</span>
    },
    {
      <span class="k">"name"</span>:        <span class="s">"Lagos Island"</span>,
      <span class="k">"distance_km"</span>: <span class="n">3.87</span>,
      <span class="k">"postal_code"</span>: <span class="s">"101221"</span>
    }
  ],
  <span class="k">"meta"</span>: {
    <span class="k">"center"</span>:    { <span class="k">"lat"</span>: <span class="n">6.4281</span>, <span class="k">"lng"</span>: <span class="n">3.4219</span> },
    <span class="k">"radius_km"</span>: <span class="n">15</span>
  }
<span class="p">}</span></pre>
                </div>
                <div id="tab-postal" class="code-output" style="display:none;">
<pre><span class="c"># Lookup by postal code</span>
GET /api/v1/postal-codes/lookup?code=<span class="n">100283</span>

<span class="p">{</span>
  <span class="k">"status"</span>: <span class="s">"success"</span>,
  <span class="k">"data"</span>: {
    <span class="k">"postal_code"</span>: <span class="s">"100283"</span>,
    <span class="k">"lga"</span>: {
      <span class="k">"name"</span>:  <span class="s">"Agege"</span>,
      <span class="k">"state"</span>: <span class="s">"Lagos"</span>,
      <span class="k">"coordinates"</span>: {
        <span class="k">"lat"</span>: <span class="n">6.6167</span>,
        <span class="k">"lng"</span>: <span class="n">3.3167</span>
      }
    },
    <span class="k">"state"</span>: {
      <span class="k">"name"</span>:    <span class="s">"Lagos"</span>,
      <span class="k">"capital"</span>: <span class="s">"Ikeja"</span>
    }
  }
<span class="p">}</span></pre>
                </div>
            </div>
        </div>
    </div>
</section>
