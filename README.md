# Nigeria Locations API

A free, open Laravel API providing Nigerian states, LGAs, geo-coordinates,
postal codes, geopolitical zones, and proximity search for Nigerian developers.

---

## Stack

- Laravel 12
- MySQL (or SQLite for local dev)
- No external API dependencies — fully self-hosted

---

## Setup

```bash
# 1. Copy files into your Laravel project (or use as standalone)
composer install

# 2. Configure .env
DB_CONNECTION=mysql
DB_DATABASE=nigeria_locations
DB_USERNAME=root
DB_PASSWORD=

# 3. Run migrations
php artisan migrate

# 4. Seed (takes ~10-20 seconds)
php artisan db:seed

# 5. Start server
php artisan serve
```

---


### Base URL

```text
https://nigeria.jamiuadewaleyusuf.com/api/v1

---

### States

#### `GET /api/v1/states`

List all 36 states + FCT.

**Query params:**
| Param | Type | Description |
|-------|------|-------------|
| `geo_zone` | string | Filter by zone code (`SW`, `SE`, `NC`, `NE`, `NW`, `SS`) |

**Example response:**
```json
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "name": "Abia",
      "slug": "abia",
      "capital": "Umuahia",
      "geo_zone": "SE",
      "geo_zone_full": "South East",
      "iso_code": "NG-AB",
      "country_code": "NG",
      "coordinates": { "lat": 5.4527, "lng": 7.5248 },
      "postal_prefix": "450",
      "lga_count": 17
    }
  ],
  "meta": { "total": 37 }
}
```

---

#### `GET /api/v1/states/{slug}`

Single state detail. Accepts slug (`lagos`), name (`Lagos`), or ISO code (`NG-LA`).

---

#### `GET /api/v1/states/{slug}/lgas`

All LGAs for a state. Returns state detail + LGA list.

**Example:** `GET /api/v1/states/lagos/lgas`

```json
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "name": "Agege",
      "slug": "agege",
      "state": "Lagos",
      "state_slug": "lagos",
      "country_code": "NG",
      "coordinates": { "lat": 6.6167, "lng": 3.3167 },
      "postal_code": "100283"
    }
  ],
  "meta": {
    "state": { "name": "Lagos", "capital": "Ikeja", ... },
    "total": 20
  }
}
```

---

### LGAs

#### `GET /api/v1/lgas`

All LGAs nationwide.

**Query params:**
| Param | Type | Description |
|-------|------|-------------|
| `state` | string | Filter by state slug or name |

---

#### `GET /api/v1/lgas/search?q=aba`

Fuzzy name search across all LGAs.

**Query params:**
| Param | Type | Description |
|-------|------|-------------|
| `q` | string (required) | Search term, min 2 chars |
| `state` | string | Narrow to a specific state |

---

### Geopolitical Zones

#### `GET /api/v1/geo-zones`

All 6 geopolitical zones with their states grouped.

#### `GET /api/v1/geo-zones/{zone}/states`

States in a zone. Accepts short (`SW`) or full name (`South West`).

**Valid zones:** `NC`, `NE`, `NW`, `SE`, `SS`, `SW`

---

### Postal Codes

#### `GET /api/v1/postal-codes/lookup?code=100283`

Reverse lookup: postal code → LGA + state.

- Tries exact LGA match first.
- Falls back to state-level prefix match (first 3 digits).

**Example:** `GET /api/v1/postal-codes/lookup?code=100283`

```json
{
  "status": "success",
  "data": {
    "postal_code": "100283",
    "lga": { "name": "Agege", "state": "Lagos", ... },
    "state": { "name": "Lagos", "capital": "Ikeja", ... }
  }
}
```

---

### Proximity Search (Haversine)

#### `GET /api/v1/nearby`

Find nearby LGAs or states within a radius using Haversine formula.

**Query params:**
| Param | Type | Default | Description |
|-------|------|---------|-------------|
| `lat` | float (required) | — | Latitude |
| `lng` | float (required) | — | Longitude |
| `radius` | float | 100 | Radius in km (max 500) |
| `limit` | int | 10 | Max results (max 50) |
| `type` | string | `lga` | `lga` or `state` |

**Example:** `GET /api/v1/nearby?lat=6.45&lng=3.39&radius=30&limit=5`

```json
{
  "status": "success",
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
}
```

---

## Data Coverage

| Data Point | Coverage |
|------------|----------|
| States | All 36 + FCT |
| LGAs | ~774 across all states |
| Coordinates (States) | ✅ All |
| Coordinates (LGAs) | ✅ All (centroid of major town) |
| Postal Codes | ✅ All LGAs (NIPOST format) |
| Geo Zones | ✅ All 6 zones |
| ISO Codes | ✅ ISO 3166-2:NG |
| State Capitals | ✅ All |

---

## Response Envelope

All responses follow this structure:

```json
{
  "status": "success | error",
  "data": { ... },
  "meta": { ... }
}
```

Errors return HTTP 404 with:
```json
{
  "status": "error",
  "message": "State not found"
}
```

---

## Use Cases

- Address form dropdowns (state → LGA → postal code)
- Delivery radius calculations
- Location-based filtering
- Postal code validation
- Geopolitical zone analytics

---

## License

MIT — free for personal and commercial use.
