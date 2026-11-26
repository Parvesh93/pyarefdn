# Restore demo content (TEST branch only)

This is the public website CMS demo dataset, **not a backup of the original production database**. Text about programmes, news, events, feedback and staff/advisory cards is illustrative where the original copy could not be recovered. Some cards have identifiable images from existing public assets, but those images do not verify the example card's name or testimonial. Review before presenting them as real facts.

## What is created

Site settings and logo, topbar, social links, focus areas, featured projects, projects listing, a Project Bhairavi campaign required by its page, six gallery photos and their image-section relationship, core team/advisory placeholder cards, media/news cards, testimonials clearly marked as illustrative, sample events, and three sample blog articles.

Images use files already committed under `public/uploads/`. Ensure those assets have actually been deployed. The seeder only inserts missing records and is safe to run repeatedly without resetting the database.

## What is NEVER seeded

No users/staff accounts, donors, donations/payment records, volunteers, annual members, contact submissions, payment gateway settings, invitation emails or private documents.

## Deploy and execute

1. Deploy the latest **test** branch to the isolated test installation.
2. Confirm the active `.env` uses `DEMO_MODE=true` and a completely **separate** test database. The seeder refuses to run if demo mode is off or the DB name does not contain `test` or `demo`.
3. From that demo installation only:

```bash
php artisan migrate --force
php artisan db:seed --class=WebsiteDemoContentSeeder --force
php artisan optimize:clear
```

4. Check the homepage, featured-project carousel, project listing, Bhairavi page, advisory, news, blog and gallery on the test URL.
5. Review illustrative content, correct names and descriptions as appropriate, and make sure no real payment functionality is enabled.

**Do not run** `php artisan db:seed` with no class or the legacy `AdminSeeder`: that old seeder deletes the users table contents. Do not run `migrate:fresh`; that deletes the test admin account.

## Note about demo media and data

Photos in committed asset folders may originate from the foundation's existing website. Use only public-approved images for a public demo. The sample testimonial and team/advisory labels are not verified biographies or endorsements. Replace them with approved information before representing them as authentic accounts.
