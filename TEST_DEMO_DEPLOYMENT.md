# Pyare Foundation — Lead Demo Deployment

## What this branch contains

The **test** branch is a complete code-and-versioned-assets copy of `new-layout` taken on 26 November 2026. It includes the redesigned public website, Laravel admin, routes, project pages and version-controlled photographs. It does **not** include any private production database, live uploaded files that were never committed to Git, `.env`, or a running hosting instance.

Changes made **only in test**:
- `DEMO_MODE` flag in `config/app.php`
- Visible demo notice on pages using the public master layout
- Payment guard that blocks real front-end Razorpay order creation, donation submission, and linked payment-entry routes when `DEMO_MODE=true`
- `.env.demo.example` and these instructions

## Recommended URL

Create a **new, separate** Hostinger website/application for a subdomain such as `demo.pyarefoundation.org`. This is an example only; the subdomain will not exist until it is configured in DNS and hosting. Connect the **test** branch to that installation. Keep the live domain connected to its current branch.

## Deployment checklist

1. Create the subdomain and a new hosting folder/application with a document root pointing to Laravel's `public/` directory. Do not overwrite the live site's files, `.env`, or document root.
2. Pull/clone `Parvesh93/pyarefdn` branch `test` into this separate folder.
3. Create a **fresh, distinct database and database user** for the demo. Never reuse the real site's DB credentials. Never import unredacted donor, staff, beneficiary, or payment records.
4. Copy `.env.demo.example` to the demo server's `.env`, fill in the actual demo URL and **demo-only** database credentials, and generate a unique `APP_KEY` with `php artisan key:generate`. `DEMO_MODE=true`, `APP_DEBUG=false` and `MAIL_MAILER=log` must remain set.
5. Run `composer install --no-dev --optimize-autoloader`; run the project's usual frontend build/install steps if its assets require compiling. Set Laravel's standard writable permissions for `storage/` and `bootstrap/cache/`.
6. On the **demo database only**, review and run `php artisan migrate --force`. This project may require additional historical schema adjustments/dummy content, so inspect existing migrations and test before inviting leads. Import only sanitized content with no personal details.
7. Populate a small set of fictional sample donors, campaigns, volunteers and staff if you want leads to view the dashboard. Do **not** run a production DB dump unredacted, copy password hashes, or send staff invitation emails to real contacts.
8. If `public/uploads` references assets not versioned in Git, add sanitized/public-approved photos to the demo installation only; do not copy private user-uploaded documents.
9. Run `php artisan optimize:clear` followed by `php artisan config:cache` and `php artisan view:cache` after configuring the environment. Make sure the demo banner appears.
10. Test the public pages on mobile and desktop, login with a **demo-only** account, and verify no actual donations, SMS, emails, or payment credentials are used. Share the public demo URL with leads only after checking these items.

## Important safety notes

- A branch is **source code**, not a deployed or hosted website. Sharing the GitHub branch link is not the same as a working demo URL.
- `DEMO_MODE=true` must be enabled before external access. This flag blocks the known public payment-processing endpoints but is **not** a replacement for separate credentials, a separate database, or comprehensive security review. Keep payment gateway credentials empty or test-only.
- Frontend forms for contact and volunteering may still write to the configured database. This is why a separate demo database is essential. For a public marketing demo, use fictional or nonsensitive submissions only.
- Do not advertise public admin access unless the demo staff user is explicitly restricted to an appropriately limited role.
- `main` and `new-layout` are unchanged by demo-specific files.

## Branch

`https://github.com/Parvesh93/pyarefdn/tree/test`
