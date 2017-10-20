# admin-panel
This is a very sucky admin panel that is in pre-pre-pre-pre-pre-pre-pre-pre-alpha stages. So far it can run shell commands, and basic MySQL queries. It has a simple UI, and the passwords in the database are now hashed, as opposed to the plaintext they used to be.

## Set-Up
To set it up, create a MySQL database, with the fields `name` and `password`. Put your desired username in the `name` field, and the password in the `password` field. The password must be PHP hashed, to do so, run:

```shell
php -r 'echo password_hash("password", PASSWORD_DEFAULT);'; echo ""
```
on a LAMP install,and that's the password you put in to the database.
