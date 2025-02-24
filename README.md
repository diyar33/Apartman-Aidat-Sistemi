## Project Description

This project is an apartment management system built using PHP, HTML, CSS, JavaScript, and SQL.  It aims to manage apartment expenses, resident information, and other related tasks.  The system uses a MySQL database to store information. Key features include managing apartment buildings, independent units, residents, expenses, and generating reports.


## Database Schema

The `dincer_database.sql` file contains the database schema for this project. The database includes the following tables:

* **tb_anagayrimenkul:** Stores information about apartment buildings (ID, name, description, address, bank information).
* **tb_anagayrimenkul_yapilacakisler:** A junction table linking apartment buildings to tasks.
* **tb_bagimsizbolum:** Stores information about individual units within a building (ID, type, land share ratio, apartment number, building ID, owner ID).
* **tb_denetci:** Stores information about building inspectors.
* **tb_firma:** Stores information about companies involved in apartment maintenance.
* **tb_gideraciklama:** Stores descriptions of expense types.
* **tb_gidercinsi:** Stores expense categories.
* **tb_giderler:** Stores expense records (ID, expense type, description, distribution parameter, distribution location, date, total amount, card payment amount, amount paid by tenant, payment source, payment status, card status, building ID, company ID).
* **tb_gidermuaf:** A junction table linking expenses to exempted units.
* **tb_kiraci:** Stores information about tenants.
* **tb_tapusahibi:** Stores information about property owners.
* **tb_temsilci:** Stores information about building representatives.
* **tb_yapilacakisler:** Stores a list of tasks.


Relationships between tables are established using foreign keys, ensuring referential integrity.  The specific data types and constraints are defined within the `dincer_database.sql` file.


## Templates

The project uses a template structure located in the `templates` directory.  The `templates/admin` directory contains all the PHP templates for the admin panel.  These templates handle the presentation and interaction for managing different aspects of the apartment building.  The templates are designed to be modular and reusable, allowing for customization and expansion of features. The specific functionality and usage of each template can be determined by reviewing the individual PHP files within the `templates/admin` directory.


## Contributing

Contributions to this project are welcome! Please follow these guidelines:


* **Coding Style:** Adhere to the existing coding style and conventions used in the project.
* **Pull Requests:** Create clear and concise pull requests, describing the changes made and providing relevant context.  Ensure all tests pass before submitting a pull request.

