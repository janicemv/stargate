# Stargate

Stargate is a database-driven web application for cataloging and exploring stars and constellations. Built using **Laravel**, **Blade**, **Tailwind**, and **MySQL**, the project aims to provide a structured and searchable system for celestial objects, including astronomical, astrological, and mythological/spiritual insights.

## Features

- 🌟 **Star Database** – Stores detailed information about stars, including multiple names, astronomical data, and magical correspondences.
- 🔭 **Constellations** – Connect stars to their constellations, historical references and official IAU information.
- 🏷️ **Keywords** – Link stars to relevant keywords and themes.
- 🖼️ **Stellar Glyphs** – Upload and manage stellar glyphs.
- 🔍 **Search** - By Constellation, Star name, Designation or HIP

## Tech Stack

- **Backend:** Laravel, PHP, MySQL
- **Frontend:** Blade, Tailwind CSS
- **Database:** SQL
- **Storage:** Local file storage for glyphs (with possible cloud integration)
- **Authentication:** Laravel Breeze (for API authentication)

## Screenshots

From 25/02/2025

### Homepage

- Search by Constellation, Star name, designation or HIP

![Homepage](/resources/images/screenshots/home.PNG)

![Homepage dark mode](/resources/images/screenshots/home-dark.PNG)

### Star list

- Order by name, constellation, designation, hip, magnitude, ascension or declination
- Hover effect in light and dark mode
- Click on the name of the star to go to the dedicate page 

![Stargate: star list](/resources/images/screenshots/stargate-full.PNG)

![Stargate: star list dark mode](/resources/images/screenshots/stargate-dark.PNG)

![Stargate hover effect](/resources/images/screenshots/hover-effect-stars.PNG)

### Constellations Index

- Shows three stars of each constellation on each card
- The image on the card is currently a placeholder. It will soon be replaced by a specific image for each constellation
- Hover effect in light and dark mode
- Click on "Read more" to see the dedicated page

![Constellations index](/resources/images/screenshots/constellations.PNG)

![Constellations index dark mode](/resources/images/screenshots/constellations-dark.PNG)

![Constellations hover effect](/resources/images/screenshots/hover-effect-constellations.PNG)

![Constellation page](/resources/images/screenshots/constellation-view.PNG)

![Constellation page dark mode](/resources/images/screenshots/constellation-view-dark.PNG)

### Star

- Astronomical and magical information
- Shows references for every information (taken from the database)

![Star page](/resources/images/screenshots/star-view-1.PNG)

![Star page](/resources/images/screenshots/star-view-2.PNG)

![Star page dark mode](/resources/images/screenshots/star-view-1-dark.PNG)

![Star page dark mode](/resources/images/screenshots/star-view-2-dark.PNG)

### Mobile schreenshots

- Responsive design
- Light and dark mode

![Mobile view stargate](/resources/images/screenshots/mobile-stargate-1.PNG)

![Mobile view stargate](/resources/images/screenshots/mobile-stargate-2.PNG)

![Mobile view stargate dark mode](/resources/images/screenshots/mobile-stargate-1-dark.PNG)

![Mobile view stargate dark mode](/resources/images/screenshots/mobile-stargate-2-dark.PNG)


![Mobile view constellation cards](/resources/images/screenshots/mobile-constellations.PNG)

![Mobile view constellation cards dark mode](/resources/images/screenshots/mobile-constellations-dark.PNG)

![Mobile view constellation](/resources/images/screenshots/mobile-view.PNG)

![Mobile view constellation dark mode](/resources/images/screenshots/mobile-view-dark.PNG)

![Mobile view constellation](/resources/images/screenshots/mobile-star-view.PNG)

![Mobile view constellation](/resources/images/screenshots/mobile-star-view-dark.PNG)

## Add Info

- You need to be a registered user to add info to the database.
- Each db entry is connected to the user. Users will be able to edit or delete their own data entrances.
- Every information added to the db needs to have its own reference. It can be personal opinion or impression, but this needs to be written.
- URL field optional to link the information to its reference.

## To be implemented

- Interactive tabs to choose between Astronomical and Magical information in Star pages
- Add view by Keyword
- Dark mode: Glyphs colored in white 
- Table and form to include data in the References page
- Suggestions/Report an error form
- Edit and delete information (if you were the user who added it)
- Integration with email for real users registration
- Deployment of the website for public access
- Addition of other celestial objects

## Contributing

Contributions will be open soon!

## License

Stargate © 2025 by Janice de Miranda V. Vilela is licensed under Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International.  

You may share this project as-is with proper attribution, but you may not use it for commercial purposes or modify it.  

Full license details: https://creativecommons.org/licenses/by-nc-nd/4.0/

## Contact

For questions or feedback, feel free to reach out or open an issue!


# About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> e1564ce (initial commit)
