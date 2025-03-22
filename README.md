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

From 26/02/2025

### Homepage

- Search by Constellation, Star name, designation or HIP

![Homepage](./resources/images/screenshots/home.PNG)

![Homepage dark mode](./resources/images/screenshots/home-dark.PNG)

### Star list

- Order by name, constellation, designation, hip, magnitude, ascension or declination
- Hover effect in light and dark mode
- Click on the name of the star to go to the dedicated page 

![Stargate: star list](./resources/images/screenshots/stargate-full.PNG)

![Stargate: star list dark mode](./resources/images/screenshots/stargate-dark.PNG)

![Stargate hover effect](./resources/images/screenshots/hover-effect-stars.PNG)

![Stargate hover effect dark mode](./resources/images/screenshots/hover-effect-stars-dark.PNG)

### Constellations Index

- Shows three stars of each constellation on each card
- When a star from that constellation has a Stellar glyph, it is shown in the constellation card
- Hover effect in light and dark mode
- Click on "Read more" to see the dedicated page

![Constellations index](./resources/images/screenshots/constellations.PNG)

![Constellations index dark mode](./resources/images/screenshots/constellations-dark.PNG)

![Constellations hover effect](./resources/images/screenshots/hover-effect-constellations.PNG)

![Constellations hover effect dark mode](./resources/images/screenshots/hover-effect-constellations-dark.PNG)

### Constellation page

- Click on the name of the star to go to its dedicated page
- Constellation Magic: This code gathers information for each star and shows their references.
- Shows stellar glyphs and keywords of each star of that constellation

![Constellation page](./resources/images/screenshots/constellation-view.PNG)

![Constellation page dark mode](./resources/images/screenshots/constellation-view-dark.PNG)

### Star Page

- Astronomical and magical information
- Shows references for every information (taken from the database)

![Star page](./resources/images/screenshots/star-view-1.PNG)

![Star page](./resources/images/screenshots/star-view-2.PNG)

![Star page dark mode](./resources/images/screenshots/star-view-1-dark.PNG)

![Star page dark mode](./resources/images/screenshots/star-view-2-dark.PNG)

### Star Magic Page

- Shows all magical correspondences related to each star

![Star magic page](./resources/images/screenshots/starMagic-1.PNG)
![Star magic page](./resources/images/screenshots/starMagic-2.PNG)

![Star magic page dark mode](./resources/images/screenshots/starMagic-1-dark.PNG)
![Star magic page dark mode](./resources/images/screenshots/starMagic-2-dark.PNG)



### Mobile schreenshots

- Responsive design
- Light and dark mode

![Mobile view stargate](./resources/images/screenshots/mobile-stargate-1.PNG)

![Mobile view stargate](./resources/images/screenshots/mobile-stargate-2.PNG)

![Mobile view stargate dark mode](./resources/images/screenshots/mobile-stargate-1-dark.PNG)

![Mobile view stargate dark mode](./resources/images/screenshots/mobile-stargate-2-dark.PNG)


![Mobile view constellation cards](./resources/images/screenshots/mobile-constellations.PNG)

![Mobile view constellation cards dark mode](./resources/images/screenshots/mobile-constellations-dark.PNG)

![Mobile view constellation](./resources/images/screenshots/mobile-view.PNG)

![Mobile view constellation dark mode](./resources/images/screenshots/mobile-view-dark.PNG)

![Mobile view constellation](./resources/images/screenshots/mobile-star-view.PNG)

![Mobile view constellation](./resources/images/screenshots/mobile-star-view-dark.PNG)

## Add Info

- You will need to be a registered user to add info to the database.
- Each db entry is connected to the user. Users will be able to edit or delete their own data entrances.
- Every information added to the db needs to have its own reference. It can be personal opinion or impression, but this needs to be written.
- URL field optional to link the information to its reference.

## To be implemented

- Interactive tabs to choose between Astronomical and Magical information in Star pages
- Add view by Keyword
- Table and form to include data in the References page
- Suggestions/Report an error form
- Edit and delete information (if you were the user who added it)
- Moderation of db entrance (shows only approved info)
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
