# admin-panel
This is a brand new admin panel that is currently in alpha stages. As of now, the panel can run shell commands, basic MySQL queries, and simple PHP commands. This panel has a very simple UI, and the passwords in the database are hashed.

## To Set-Up, follow steps below:

First create a MySQL database by running:

```MySQL
CREATE DATABASE database_name_goes_here;
```

To set it up, create a MySQL table, with the fields `name` and `password`, to do so run:

```MySQL
CREATE TABLE users(name VARCHAR(30) NOT NULL, password VARCHAR(256) NOT NULL);
```
Then put your desired username in the `name` field, and the password in the `password` field.
The password must be PHP hashed, to do so, run:

```shell
php -r 'echo password_hash("password", PASSWORD_DEFAULT);'; echo ""
```
on a LAMP install, make sure to put this password back in the MySQL table...

Finally, change the values in the <b>user.php</b> file to match your own.
