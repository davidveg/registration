# Registration (A OLX Portugal Challenge)

### Overview

This trial’s deadlines will be notified upon delivery of this document, and all Graphic/Development material or files must be delivered to catarina.mendes@fixeads.com

### Deliverables

Candidates must develop in HTML+CSS the lead caption form suggested in the mockup provided. The form should replicate exactly the one present in the given reference.
Candidate must provide SQL for DB creation, HTML + CSS + JS and PHP.

### Specification:

* Form validation and development must be coded in Javascript + PHP

* Upon form fulfilment, a message must be presented stating if it was a success or indication possible problems.

* A check for email already in use must be implemented without the need to submit the form.

* Please validate fields:

* NIF -> Nine numeric digits

* Postal Code -> XXXX – XXX

* Phone -> If Country is Portugal should only allow PT phone numbers

- Password strength algorithm can be defined by the candidate and explained in code comments.

- Security and code efficiency are important evaluation points.

- The solution presented should be a working solution.

- Colors/Design presented is not mandatory. Candidates may disregard for instance colors of elements.

- The country list can be filled only with 4 countries as long one of them is Portugal.

## Getting Started
Execute first the SQL Script in SQL project folder in MYSQL Database.
- username: registration
- password: registration


### Installing

A step by step series of examples that tell you have to get a development env running

Just copy the registration folder to any apache http server with php module installed.

Then, access:
```
http://{server}/registration/public
```

## Built With

* [FuelPHP](https://fuelphp.com) - The web framework used
* [JQuery](https://jquery.com) - The Javascript Helper Library
* [JQueryValidation](https://jqueryvalidation.org) - Javascript validation helper
* [Bootstrap](http://getbootstrap.com) - Used to generate the layout

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [Git](https://git-scm.com) for versioning. For the versions available, see the [tags on this repository](https://github.com/davidveg/registration/tags).

## Authors

* **David Vega** - *Initial work* - [DavidVeg](https://github.com/davidveg)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
