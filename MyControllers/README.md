
# MyControllers Laravel Project

A simple Laravel project demonstrating form handling, validation, and error display using Blade templates.

## Project Structure & Flow

1. **Routes**
	- Defined in `routes/web.php`.
	- `/signup` and `/signup2` display signup forms.
	- POST `/submitForm` handles form submission.

2. **Controllers**
	- `BasicController`:
	  - `showSignup()` returns the classic signup form (`signup.blade.php`).
	  - `showSignup2()` returns the improved form with inline error display (`signup2.blade.php`).
	- `FormController`:
	  - `submitForm(Request $request)` validates input and returns errors if any.

3. **Views**
	- `resources/views/layouts/app.blade.php`: Main layout.
	- `resources/views/signup.blade.php`: Signup form with errors above the form.
	- `resources/views/signup2.blade.php`: Signup form with errors shown beside each field.

4. **Validation**
	- Handled in `FormController` using Laravel's `$request->validate()`.
	- Rules:
	  - Name: required, min 3 chars
	  - Email: required, valid email
	  - Password: required, 6-20 chars, at least 1 uppercase, 1 lowercase, 1 digit

5. **Error Display**
	- `/signup`: Shows all errors above the form.
	- `/signup2`: Shows errors next to each input field.

## Typical Flow

```
User visits /signup or /signup2
	↓
Form is displayed (Blade view)
	↓
User submits form (POST /submitForm)
	↓
FormController validates input
	↓
If errors: Redirects back with errors (shown in view)
If valid: (You can add logic to save user or show success)
```

## How to Run

1. Install dependencies:
	```
	npm install
	npm run build
	composer install
	```
2. Start Laravel server:
	```
	php artisan serve
	```
3. Visit `http://127.0.0.1:8000/signup` or `/signup2` in your browser.

---

This project is for learning and demonstration purposes.
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
