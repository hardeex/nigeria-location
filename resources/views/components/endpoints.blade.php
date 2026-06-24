<section id="endpoints" class="alt-bg">
    <div class="section-inner">
        <p class="section-eyebrow">API Reference</p>
        <h2 class="section-heading font-display">9 endpoints. Zero setup.</h2>
        <p class="section-sub">No API key. No registration. Just fetch. All responses return a consistent JSON envelope.</p>

        <div class="base-url-banner">
            <span class="base-url-label">BASE URL</span>
            <span class="base-url-value font-mono" id="baseUrl">https://nigeria.jamiuadewaleyusuf.com/api/v1</span>
            <button class="copy-btn" onclick="copyText('https://nigeria.jamiuadewaleyusuf.com/api/v1', this)" style="position:static;">Copy</button>
        </div>

        <div class="endpoint-grid">

            <!-- States list -->
            <div class="endpoint-card" id="ep1">
                <button class="endpoint-header" onclick="toggleEndpoint('ep1')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/states</span>
                    <span class="endpoint-desc">All 37 states with geo data</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <table class="param-table">
                        <tr><th>Param</th><th>Type</th><th>Required</th><th>Description</th></tr>
                        <tr>
                            <td class="param-name">geo_zone</td>
                            <td class="param-type">string</td>
                            <td><span class="param-optional">optional</span></td>
                            <td class="text-muted" style="font-size:0.82rem;">Filter by zone code: <code style="color:var(--lime);font-size:0.75rem;">NC NE NW SE SS SW</code></td>
                        </tr>
                    </table>
                    <p class="example-label">Example Request</p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
                        <code>GET /api/v1/states?geo_zone=SW</code>
                    </div>
                    <p class="example-label">Example Response</p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre>{
  "status": "success",
  "data": [
    {
      "id": 25,
      "name": "Lagos",
      "slug": "lagos",
      "capital": "Ikeja",
      "geo_zone": "SW",
      "geo_zone_full": "South West",
      "iso_code": "NG-LA",
      "country_code": "NG",
      "coordinates": { "lat": 6.5244, "lng": 3.3792 },
      "postal_prefix": "100",
      "lga_count": 20
    }
  ],
  "meta": { "total": 6 }
}</pre>
                    </div>
                </div>
            </div>

            <!-- State de\ -->
            <div class="endpoint-card" id="ep2">
                <button class="endpoint-header" onclick="toggleEndpoint('ep2')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/states/{slug}</span>
                    <span class="endpoint-desc">Single state by slug, name, or ISO code</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:0.75rem;">
                        The <code style="color:var(--lime);font-size:0.8rem;">{slug}</code> parameter accepts:
                        slug (<code style="color:var(--lime);">lagos</code>), state name (<code style="color:var(--lime);">Lagos</code>),
                        or ISO code (<code style="color:var(--lime);">NG-LA</code>).
                    </p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre>GET /api/v1/states/lagos
GET /api/v1/states/Lagos       # also works
GET /api/v1/states/NG-LA       # also works</pre>
                    </div>
                </div>
            </div>

            <!-- LGAs by state -->
            <div class="endpoint-card" id="ep3">
                <button class="endpoint-header" onclick="toggleEndpoint('ep3')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/states/{slug}/lgas</span>
                    <span class="endpoint-desc">All LGAs for a state, with state detail</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre>GET /api/v1/states/rivers/lgas

{
  "status": "success",
  "data": [
    {
      "name": "Port Harcourt",
      "slug": "port-harcourt",
      "state": "Rivers",
      "coordinates": { "lat": 4.8156, "lng": 7.0498 },
      "postal_code": "500001"
    }
  ],
  "meta": {
    "state": { "name": "Rivers", "capital": "Port Harcourt" },
    "total": 23
  }
}</pre>
                    </div>
                </div>
            </div>

            <!-- All LGAs -->
            <div class="endpoint-card" id="ep4">
                <button class="endpoint-header" onclick="toggleEndpoint('ep4')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/lgas</span>
                    <span class="endpoint-desc">All ~774 LGAs nationwide</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <table class="param-table">
                        <tr><th>Param</th><th>Type</th><th>Required</th><th>Description</th></tr>
                        <tr>
                            <td class="param-name">state</td>
                            <td class="param-type">string</td>
                            <td><span class="param-optional">optional</span></td>
                            <td class="text-muted" style="font-size:0.82rem;">Filter by state slug or name</td>
                        </tr>
                    </table>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
                        <code>GET /api/v1/lgas?state=kano</code>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <div class="endpoint-card" id="ep5">
                <button class="endpoint-header" onclick="toggleEndpoint('ep5')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/lgas/search</span>
                    <span class="endpoint-desc">Fuzzy LGA name search</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <table class="param-table">
                        <tr><th>Param</th><th>Type</th><th>Required</th><th>Description</th></tr>
                        <tr>
                            <td class="param-name">q</td>
                            <td class="param-type">string</td>
                            <td><span class="param-required">required</span></td>
                            <td class="text-muted" style="font-size:0.82rem;">Search term, min 2 characters</td>
                        </tr>
                        <tr>
                            <td class="param-name">state</td>
                            <td class="param-type">string</td>
                            <td><span class="param-optional">optional</span></td>
                            <td class="text-muted" style="font-size:0.82rem;">Scope to a single state</td>
                        </tr>
                    </table>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
                        <code>GET /api/v1/lgas/search?q=aba&state=abia</code>
                    </div>
                </div>
            </div>

            <!-- Geo zones -->
            <div class="endpoint-card" id="ep6">
                <button class="endpoint-header" onclick="toggleEndpoint('ep6')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/geo-zones</span>
                    <span class="endpoint-desc">All 6 geopolitical zones with states</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:0.75rem;">
                        Returns all 6 zones: North Central (NC), North East (NE), North West (NW),
                        South East (SE), South South (SS), South West (SW) — each with their states grouped.
                    </p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre>GET /api/v1/geo-zones

{
  "status": "success",
  "data": [
    {
      "zone": "NC",
      "zone_full": "North Central",
      "state_count": 7,
      "states": [ ... ]
    }
  ],
  "meta": { "total_zones": 6 }
}</pre>
                    </div>
                </div>
            </div>

            <!-- Zone states -->
            <div class="endpoint-card" id="ep7">
                <button class="endpoint-header" onclick="toggleEndpoint('ep7')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/geo-zones/{zone}/states</span>
                    <span class="endpoint-desc">States in a specific geopolitical zone</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:0.75rem;">
                        <code style="color:var(--lime);">{zone}</code> accepts short form (<code style="color:var(--lime);">SW</code>)
                        or full name (<code style="color:var(--lime);">South West</code>).
                    </p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
                        <code>GET /api/v1/geo-zones/SW/states</code>
                    </div>
                </div>
            </div>

            <!-- Postal lookup -->
            <div class="endpoint-card" id="ep8">
                <button class="endpoint-header" onclick="toggleEndpoint('ep8')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/postal-codes/lookup</span>
                    <span class="endpoint-desc">Reverse postal code → state + LGA</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <table class="param-table">
                        <tr><th>Param</th><th>Type</th><th>Required</th><th>Description</th></tr>
                        <tr>
                            <td class="param-name">code</td>
                            <td class="param-type">string</td>
                            <td><span class="param-required">required</span></td>
                            <td class="text-muted" style="font-size:0.82rem;">NIPOST postal code (3–10 digits)</td>
                        </tr>
                    </table>
                    <p style="font-size:0.82rem;color:var(--text-muted);margin-bottom:0.75rem;">
                        Tries exact LGA match first. Falls back to state-level prefix match (first 3 digits).
                    </p>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
                        <code>GET /api/v1/postal-codes/lookup?code=100283</code>
                    </div>
                </div>
            </div>

            <!-- Nearby -->
            <div class="endpoint-card" id="ep9">
                <button class="endpoint-header" onclick="toggleEndpoint('ep9')">
                    <span class="method-badge">GET</span>
                    <span class="endpoint-path">/nearby</span>
                    <span class="endpoint-desc">Haversine proximity — LGAs or states within radius</span>
                    <span class="endpoint-chevron">▾</span>
                </button>
                <div class="endpoint-body">
                    <table class="param-table">
                        <tr><th>Param</th><th>Type</th><th>Required</th><th>Default</th><th>Description</th></tr>
                        <tr>
                            <td class="param-name">lat</td>
                            <td class="param-type">float</td>
                            <td><span class="param-required">required</span></td>
                            <td>—</td>
                            <td class="text-muted" style="font-size:0.82rem;">Latitude</td>
                        </tr>
                        <tr>
                            <td class="param-name">lng</td>
                            <td class="param-type">float</td>
                            <td><span class="param-required">required</span></td>
                            <td>—</td>
                            <td class="text-muted" style="font-size:0.82rem;">Longitude</td>
                        </tr>
                        <tr>
                            <td class="param-name">radius</td>
                            <td class="param-type">float</td>
                            <td><span class="param-optional">optional</span></td>
                            <td>100</td>
                            <td class="text-muted" style="font-size:0.82rem;">Radius in km (max 500)</td>
                        </tr>
                        <tr>
                            <td class="param-name">limit</td>
                            <td class="param-type">int</td>
                            <td><span class="param-optional">optional</span></td>
                            <td>10</td>
                            <td class="text-muted" style="font-size:0.82rem;">Max results (max 50)</td>
                        </tr>
                        <tr>
                            <td class="param-name">type</td>
                            <td class="param-type">string</td>
                            <td><span class="param-optional">optional</span></td>
                            <td>lga</td>
                            <td class="text-muted" style="font-size:0.82rem;"><code style="color:var(--lime);">lga</code> or <code style="color:var(--lime);">state</code></td>
                        </tr>
                    </table>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre>GET /api/v1/nearby?lat=6.45&lng=3.39&radius=30&limit=5

{
  "data": [
    {
      "name": "Lagos Island",
      "state": "Lagos",
      "coordinates": { "lat": 6.4531, "lng": 3.3958 },
      "postal_code": "101221",
      "distance_km": 1.84
    }
  ],
  "meta": {
    "center": { "lat": 6.45, "lng": 3.39 },
    "radius_km": 30,
    "total": 5
  }
}</pre>
                    </div>
                </div>
            </div>

        </div><!-- /endpoint-grid -->

        <!-- Response anatomy -->
        <div style="margin-top:3rem;">
            <h3 class="font-display" style="font-size:1.2rem;margin-bottom:1.25rem;">Response Envelope</h3>
            <div class="anatomy-grid">
                <div>
                    <div class="code-block" style="position:static;">
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.8rem;line-height:1.7;color:var(--cream);">{
  <span style="color:#7DD3FC">"status"</span>: <span style="color:#A8FF3E">"success"</span>,  <span style="color:#6B7280">// or "error"</span>
  <span style="color:#7DD3FC">"data"</span>:   { ... },        <span style="color:#6B7280">// resource or array</span>
  <span style="color:#7DD3FC">"meta"</span>:   {               <span style="color:#6B7280">// present on lists</span>
    <span style="color:#7DD3FC">"total"</span>: 20,
    <span style="color:#7DD3FC">"state"</span>: { ... }
  }
}

<span style="color:#6B7280">// Error format</span>
{
  <span style="color:#7DD3FC">"status"</span>:  <span style="color:#A8FF3E">"error"</span>,
  <span style="color:#7DD3FC">"message"</span>: <span style="color:#A8FF3E">"State not found"</span>
}</pre>
                    </div>
                </div>
                <div>
                    <div class="anatomy-note">
                        <p class="anatomy-note-title">Consistent slug resolution</p>
                        <p class="anatomy-note-text">All <code style="color:var(--lime);">{slug}</code> parameters accept the slug (<code style="color:var(--lime);">akwa-ibom</code>), the state name (<code style="color:var(--lime);">Akwa Ibom</code>), or the ISO code (<code style="color:var(--lime);">NG-AK</code>). Case-insensitive.</p>
                    </div>
                    <div class="anatomy-note" style="margin-top:0.75rem;">
                        <p class="anatomy-note-title">HTTP Status Codes</p>
                        <p class="anatomy-note-text">
                            <code style="color:var(--lime);">200</code> — Success &nbsp;·&nbsp;
                            <code style="color:#FDA4AF;">404</code> — Not found &nbsp;·&nbsp;
                            <code style="color:#FDA4AF;">422</code> — Validation error
                        </p>
                    </div>
                    <div class="anatomy-note" style="margin-top:0.75rem;">
                        <p class="anatomy-note-title">No authentication</p>
                        <p class="anatomy-note-text">This is a public API. No API key, no OAuth, no headers required. Just make the request.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
