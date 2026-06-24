<section id="integrate">
    <div class="section-inner">
        <p class="section-eyebrow">Integration Guide</p>
        <h2 class="section-heading font-display">Drop it into anything in minutes.</h2>
        <p class="section-sub">Ready-made snippets for the most common Nigerian dev stacks.</p>

        <div class="integration-tabs">
            <button class="int-tab active" onclick="switchIntTab(this,'js')">JavaScript</button>
            <button class="int-tab" onclick="switchIntTab(this,'php')">PHP / Laravel</button>
            <button class="int-tab" onclick="switchIntTab(this,'python')">Python</button>
            <button class="int-tab" onclick="switchIntTab(this,'flutter')">Flutter/Dart</button>
            <button class="int-tab" onclick="switchIntTab(this,'react')">React</button>
            <button class="int-tab" onclick="switchIntTab(this,'curl')">cURL</button>
        </div>

        <div id="int-js" class="int-panel active">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);">const BASE = <span style="color:#A8FF3E">'.jamiuadewaleyusuf.com/api/v1'</span>;

<span style="color:#6B7280">// Get all states</span>
const states = await fetch(`${BASE}/states`).then(r => r.json());

<span style="color:#6B7280">// Get LGAs for a state</span>
const { data: lgas } = await fetch(`${BASE}/states/lagos/lgas`).then(r => r.json());

<span style="color:#6B7280">// Find LGAs near a coordinate</span>
const nearby = await fetch(
  `${BASE}/nearby?lat=6.45&lng=3.39&radius=50&limit=10`
).then(r => r.json());

<span style="color:#6B7280">// Lookup postal code</span>
const location = await fetch(`${BASE}/postal-codes/lookup?code=100283`).then(r => r.json());</pre>
            </div>
        </div>

        <div id="int-php" class="int-panel">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);">&lt;?php

use Illuminate\Support\Facades\Http;

<span style="color:#7DD3FC">class</span> <span style="color:#A8FF3E">NigeriaLocationService</span>
{
    private string $base = <span style="color:#A8FF3E">'https://nigeria.jamiuadewaleyusuf.com/api/v1'</span>;

    <span style="color:#7DD3FC">public function</span> <span style="color:#A8FF3E">states</span>(string $geoZone = null): array
    {
        $params = $geoZone ? [<span style="color:#A8FF3E">'geo_zone'</span> => $geoZone] : [];
        <span style="color:#7DD3FC">return</span> Http::get(<span style="color:#A8FF3E">"{$this->base}/states"</span>, $params)->json(<span style="color:#A8FF3E">'data'</span>);
    }

    <span style="color:#7DD3FC">public function</span> <span style="color:#A8FF3E">lgasByState</span>(string $state): array
    {
        <span style="color:#7DD3FC">return</span> Http::get(<span style="color:#A8FF3E">"{$this->base}/states/{$state}/lgas"</span>)->json(<span style="color:#A8FF3E">'data'</span>);
    }

    <span style="color:#7DD3FC">public function</span> <span style="color:#A8FF3E">nearby</span>(float $lat, float $lng, int $radius = 100): array
    {
        <span style="color:#7DD3FC">return</span> Http::get(<span style="color:#A8FF3E">"{$this->base}/nearby"</span>, compact(<span style="color:#A8FF3E">'lat'</span>, <span style="color:#A8FF3E">'lng'</span>, <span style="color:#A8FF3E">'radius'</span>))->json(<span style="color:#A8FF3E">'data'</span>);
    }

    <span style="color:#7DD3FC">public function</span> <span style="color:#A8FF3E">lookupPostal</span>(string $code): ?array
    {
        $resp = Http::get(<span style="color:#A8FF3E">"{$this->base}/postal-codes/lookup"</span>, [<span style="color:#A8FF3E">'code'</span> => $code])->json();
        <span style="color:#7DD3FC">return</span> $resp[<span style="color:#A8FF3E">'status'</span>] === <span style="color:#A8FF3E">'success'</span> ? $resp[<span style="color:#A8FF3E">'data'</span>] : null;
    }
}</pre>
            </div>
        </div>

        <div id="int-python" class="int-panel">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);"><span style="color:#7DD3FC">import</span> requests

BASE = <span style="color:#A8FF3E">".jamiuadewaleyusuf.com/api/v1"</span>

<span style="color:#6B7280"># All states in South West</span>
states = requests.get(f<span style="color:#A8FF3E">"{BASE}/states"</span>, params={<span style="color:#A8FF3E">"geo_zone"</span>: <span style="color:#A8FF3E">"SW"</span>}).json()[<span style="color:#A8FF3E">"data"</span>]

<span style="color:#6B7280"># LGAs by state</span>
lgas = requests.get(f<span style="color:#A8FF3E">"{BASE}/states/lagos/lgas"</span>).json()[<span style="color:#A8FF3E">"data"</span>]

<span style="color:#6B7280"># Nearby</span>
nearby = requests.get(f<span style="color:#A8FF3E">"{BASE}/nearby"</span>, params={
    <span style="color:#A8FF3E">"lat"</span>: 6.45, <span style="color:#A8FF3E">"lng"</span>: 3.39, <span style="color:#A8FF3E">"radius"</span>: 50
}).json()[<span style="color:#A8FF3E">"data"</span>]

<span style="color:#6B7280"># Postal lookup</span>
location = requests.get(f<span style="color:#A8FF3E">"{BASE}/postal-codes/lookup"</span>, params={<span style="color:#A8FF3E">"code"</span>: <span style="color:#A8FF3E">"100283"</span>}).json()</pre>
            </div>
        </div>

        <div id="int-flutter" class="int-panel">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);"><span style="color:#7DD3FC">import</span> <span style="color:#A8FF3E">'dart:convert'</span>;
<span style="color:#7DD3FC">import</span> <span style="color:#A8FF3E">'package:http/http.dart'</span> as http;

const _base = <span style="color:#A8FF3E">'https://nigeria.jamiuadewaleyusuf.com/api/v1'</span>;

<span style="color:#6B7280">// Get states</span>
Future&lt;List&gt; getStates() async {
  final res = await http.get(Uri.parse(<span style="color:#A8FF3E">'$_base/states'</span>));
  return jsonDecode(res.body)[<span style="color:#A8FF3E">'data'</span>];
}

<span style="color:#6B7280">// Get LGAs</span>
Future&lt;List&gt; getLgas(String state) async {
  final res = await http.get(Uri.parse(<span style="color:#A8FF3E">'$_base/states/$state/lgas'</span>));
  return jsonDecode(res.body)[<span style="color:#A8FF3E">'data'</span>];
}

<span style="color:#6B7280">// Nearby</span>
Future&lt;List&gt; getNearby(double lat, double lng, {int radius=100}) async {
  final uri = Uri.parse(<span style="color:#A8FF3E">'$_base/nearby'</span>).replace(queryParameters: {
    <span style="color:#A8FF3E">'lat'</span>: <span style="color:#A8FF3E">'$lat'</span>, <span style="color:#A8FF3E">'lng'</span>: <span style="color:#A8FF3E">'$lng'</span>, <span style="color:#A8FF3E">'radius'</span>: <span style="color:#A8FF3E">'$radius'</span>
  });
  final res = await http.get(uri);
  return jsonDecode(res.body)[<span style="color:#A8FF3E">'data'</span>];
}</pre>
            </div>
        </div>

        <div id="int-react" class="int-panel">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);"><span style="color:#7DD3FC">import</span> { useState, useEffect } <span style="color:#7DD3FC">from</span> <span style="color:#A8FF3E">'react'</span>;

const BASE = <span style="color:#A8FF3E">'https://nigeria.jamiuadewaleyusuf.com/api/v1'</span>;

<span style="color:#6B7280">// State → LGA cascade hook</span>
<span style="color:#7DD3FC">export function</span> useNigeriaLocation() {
  const [states, setStates] = useState([]);
  const [lgas, setLgas] = useState([]);
  const [selectedState, setSelectedState] = useState(<span style="color:#A8FF3E">''</span>);

  useEffect(() => {
    fetch(`${BASE}/states`)
      .then(r => r.json())
      .then(d => setStates(d.data));
  }, []);

  useEffect(() => {
    <span style="color:#7DD3FC">if</span> (!selectedState) <span style="color:#7DD3FC">return</span>;
    fetch(`${BASE}/states/${selectedState}/lgas`)
      .then(r => r.json())
      .then(d => setLgas(d.data));
  }, [selectedState]);

  <span style="color:#7DD3FC">return</span> { states, lgas, setSelectedState };
}</pre>
            </div>
        </div>

        <div id="int-curl" class="int-panel">
            <div class="code-block" style="position:relative;">
                <button class="copy-btn" onclick="copyBlock(this)">Copy</button>
<pre style="font-family:'JetBrains Mono',monospace;font-size:0.78rem;line-height:1.8;color:var(--cream);"><span style="color:#6B7280"># All states</span>
curl https://nigeria.jamiuadewaleyusuf.com/api/v1/states

<span style="color:#6B7280"># States by geopolitical zone</span>
curl "https://nigeria.jamiuadewaleyusuf.com/api/v1/states?geo_zone=SW"

<span style="color:#6B7280"># LGAs for a state</span>
curl https://nigeria.jamiuadewaleyusuf.com/api/v1/states/lagos/lgas

<span style="color:#6B7280"># Nearby (Abuja coords)</span>
curl "https://nigeria.jamiuadewaleyusuf.com/api/v1/nearby?lat=9.0765&lng=7.3986&radius=50"

<span style="color:#6B7280"># Postal code lookup</span>
curl "https://nigeria.jamiuadewaleyusuf.com/api/v1/postal-codes/lookup?code=900001"

<span style="color:#6B7280"># Search LGAs</span>
curl "https://nigeria.jamiuadewaleyusuf.com/api/v1/lgas/search?q=aba"</pre>
            </div>
        </div>

    </div>
</section>
