# TopFlame

TopFlame is a Laravel-based Lineage 2 server toplist platform.

## Current Stage
TopFlame 1.0 foundation has started.

## Stack
- Laravel
- Tailwind CSS
- JavaScript
- SQL

## Architecture
- Core
- Backend
- Frontend

## Planned Features
- Step-by-step installer
- Roles and permissions
- Server submission and moderation
- Vote gateway with 12-hour cooldown
- Premium server system
- Plugins / Modules / Themes managers
- Unified package installer
- Beautiful default theme
- Beautiful admin panel and user panel

## Project Structure
```text
topflame/
  app/
    Core/
    Http/Controllers/Admin/
    Http/Controllers/Frontend/
    Services/
  bootstrap/
  config/
  database/
    migrations/
    seeders/
  public/
    assets/js/
    assets/css/
  resources/views/
    admin/
    frontend/
    installer/
  routes/
  storage/
  themes/default/
```

## Notes
This foundation is being built in staged versions:
- 1.0 foundation
- 1.1 auth and submit flow
- 1.2 voting and premium flow
- 1.3 package system base
