# admin-panel
This is a very sucky admin panel that is in pre-pre-pre-pre-pre-pre-pre-pre-alpha stages. So far it can run shell commands, and basic MySQL queries. It has a simple UI, and the passwords in the database are now hashed, as opposed to the plaintext they used to be.

## Set-Up

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
