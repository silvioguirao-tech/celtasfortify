# Celtas - Laravel Educational Platform

## Architecture Overview
- **Laravel 12** with **Fortify** authentication system
- **Portuguese (pt-br)** interface for student platform called "Celtas"
- **Two-factor authentication** enabled with confirmation required
- **Student dashboard** at `/aluno/dashboard` (protected route group)
- **Custom Fortify actions** in `app/Actions/Fortify/` for user creation and password management

## Key Components
- **Authentication Flow**: Login redirects to `/aluno/dashboard`, custom `LoginResponse` class
- **User Model**: Standard with `TwoFactorAuthenticatable` trait
- **Views**: Blade templates in `resources/views/` with Portuguese content
- **Frontend**: Vite + Tailwind CSS v4, custom font (Instrument Sans)

## Development Workflow
- **Setup**: Run `composer run setup` (installs deps, generates key, migrates DB, builds assets)
- **Development**: Use `composer run dev` for concurrent server, queue worker, and Vite dev server
- **Testing**: Pest framework with `composer run test` (config clear + test)
- **Code Style**: Laravel Pint for formatting
- **Build**: `npm run build` for production assets

## Conventions
- **Routes**: Protected student routes use `aluno.` prefix and name
- **Views**: Extend `layouts.app` with Portuguese titles and content
- **Password Rules**: Use `PasswordValidationRules` trait with Laravel's default password requirements
- **Rate Limiting**: 5 attempts/minute for login and 2FA
- **Database**: Standard users table + 2FA columns

## File Patterns
- **Custom Actions**: `app/Actions/Fortify/` for Fortify overrides
- **Auth Views**: `resources/views/auth/` for login/register/etc.
- **Student Views**: `resources/views/aluno/` for protected pages
- **Layout**: `resources/views/layouts/app.blade.php` with navigation

## Testing
- **Framework**: Pest with Laravel plugin
- **Structure**: Feature tests in `tests/Feature/`, Unit in `tests/Unit/`
- **Database**: RefreshDatabase commented out in Pest.php for Feature tests</content>
<parameter name="filePath">c:\Users\silvio\projetos\celtasfortify\.github\copilot-instructions.md