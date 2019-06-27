# Laravel Server Checkout


## Getting setup...

1. Copy `.env.example` to `.env`

2. Set `STRIPE_SECRET_KEY` and `STRIPE_PUBLISHABLE_KEY` in `.env`.

3. [Download Composer](https://getcomposer.org) into this project's directory.

4. From this project's directory, run `php composer.phar install` to install dependencies.

5. Run `php artisan key:generate`

6. Start the development web server with `php artisan serve`

7. Navigate to <http://localhost:8000/checkout>


## Key files

- [routes/web.php](routes/web.php) -- Creates the server-side [CheckoutSession](https://stripe.com/docs/api/checkout/sessions).

- [resources/views/checkout.blade.php](resources/views/checkout.blade.php) -- Includes Stripe.js and sets up the Checkout button.


## Not included yet

- Webhooks for handling [checkout.session.completed](https://stripe.com/docs/api/events/types#event_types-checkout.session.completed) events
- Receipt page that handles redirects from Checkout.
