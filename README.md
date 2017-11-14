# admin-panel
This is a brand new admin panel that is currently in alpha stages. As of now, the panel can run shell commands, basic MySQL queries, and simple PHP commands. This panel has a very simple UI, and the passwords in the database are hashed.

## To Set-Up, follow steps below:

First clone the repository into your web server's document root directory, then run:

`git clone git@github.com:NerdOfCode/admin-panel.git`


Then to set a user up, create a MySQL database by running:

```shell
sudo mysql
```

```MySQL
CREATE DATABASE database_name_goes_here;
```

Then switch over to it by running:

```MySQL
USE database_name_goes_here;
```

To set the table up, create a MySQL table with the fields `name` and `password`, to do so run:

```MySQL
CREATE TABLE users(name VARCHAR(30) NOT NULL, password VARCHAR(256) NOT NULL, commands VARCHAR(128));
```
Then put your desired username in the `name` field, and the password in the `password` field, to do so run:
```MySQL
INSERT INTO users VALUES("user_here","password goes here","");
```

<b>NOTICE<b>
The password must be PHP hashed, to do so, run:

```shell
php -r 'echo password_hash("password", PASSWORD_DEFAULT);'; echo ""
```
MAKE SURE to put this password back in the MySQL table...

Finally, change the values in the <b>user.php</b> file to match your own.

# How to help
If you want to create installers for this amazing admin panel, simply create a repository or GitHub Gist, and send the URL to <a href="mailto:nerdoflinux@gateblogs.com"> nerdoflinux@gateblogs.com </a>.
