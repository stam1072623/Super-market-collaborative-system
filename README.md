# Super-market-collaborative-system

This project was developed by me and a fellow student during our Web Programming course.

The aim of this project is to develop a collaborative system for registration, search and evaluation of super-market consumer goods offers between users.

The system allows its registered users to inform others about the availability of products
that are at a good (according to their own criteria) price, working in parallel with existing tools
(such as [e-katanalotis](https://e-katanalotis.gov.gr)), which are updated only in terms of price but not stock,
and do not include all super-market shops (e.g. local chains, mini-markets).

It is up to the users, who can validate the offer (like) or indicate that it is not valid (dislike) or that the product is
out of stock. Users can also indicate that an offer has ended.
To encourage participation, the system rewards users who offer information
with 'points'.

For the implementation of the project we used Xampp through which we
created a localhost server on a local port. Also through localhost phpmyAdmin the project's database was created.

Project's folders:
Deletes: files deleted by admin
Updates: files updated by admin
Uploads: files uploaded by admin
Sql: The project's database
Insert: All json files used to insert categories, subcategories, prices and products to the project's database,
and the php files used to convert the json to sql and upload them to the database.
