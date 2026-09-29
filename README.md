# listofinformation

Data and tooling for [listofinformation.com](https://listofinformation.com), a CodeIgniter 3 site listing education institutions worldwide.

## What this repo contains

This is the working directory for building and importing country/region education listing content (Overview + Admissions pages) into the site's live MySQL/MariaDB database. It is **not** the CodeIgniter application itself — just the scripts, SQL, and verification snapshots used to prepare and push content.

- **`build_*.py`** — Python scripts that generate Overview / Admissions content for a batch of listings (e.g. `build_adm.py`, `build_ov.py` and their numbered variants).
- **`run_*_import.php`** — PHP scripts that import generated/prepared data into the database for a specific country batch (UK, UAE, Pakistan).
- **`*_status_check*.php`, `*_dup_detail.php`, `*_full_check.php`** — Verification scripts to confirm imported data is complete and free of duplicates.
- **`live_check*.html`, `live_final.html`** — Snapshots used to visually verify live listing pages after import.
- **`singlelisting.deploy.php`, `live_singlelisting.php`** — Deployment/live versions of the single-listing page template.
- **`add_routes.php`** — Helper for registering new CodeIgniter routes.
- Numbered `.sql` files (`pk_*`, `uae_*`, `uk_*`, `*_batch*`, `*_final*`, etc.) — batch data for each country's listings, staged before being applied to the live database.

## Data workflow

The **live database is the source of truth**. The typical flow for adding or updating listings:

1. Research and write real Overview + Admissions content sourced from each institution's official pages (no generic/placeholder content).
2. Generate/stage the content with the relevant `build_*.py` / batch `.sql` files.
3. Import into the local MariaDB copy (port 3307) for testing.
4. Push to the live database via the existing SSH + PHP import scripts.
5. Verify with the `*_status_check*.php` / `*_full_check.php` scripts and `live_check*.html` snapshots.

Countries covered so far: UK, UAE, and Pakistan, with listings verified live end-to-end (real Overview + Admissions content, no placeholders).

## Notes

- `*.sql` / `*.sql.gz` dumps, the local `localdb/` MariaDB data directory, and `site/` (a separate git repo) are excluded from version control via `.gitignore`.
- This repo does not include database credentials or the live CodeIgniter application source.
