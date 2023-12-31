
# Job Finding website

Insert fancy advertisment here.

## Run the project on Ubuntu
1. Ensure you have installed `php` related packages and `mysql` installed (setting `using password: NO`)
2. Change `'root'@'localhost'` password of `mysql` to `root`. This can be referred to in `back-end/configs/database.php` credentials.
3. 
```
$ cd back-end
$ sudo service apache2 start
$ sudo service mysql start
$ php -S localhost:<host>
```
The `<host>` can be any active port on your local machine.


## Reset / Update database
The main database creation process is located in `MySQLDB.php`. 
Currently, it checks for the version specified in `configs/database.php` to determine if update is needed.

If you made changes to `MySQLDB.php`, increase the version change in the config up and refresh the web.
(Reminder: the database accumulated by web user will be lost, only default data remains).

Alternatively, the database can be reset manually and the version can be reverted to "1.1.1" if you want.
```
$ mysql -u root -p
> root
mysql> DROP DATABASE job_finding;
mysql> exit
```


## Route configuration
The entire project path resolution is configured in `configs/routes.php`
The format of each item is
```
"<path>" => array(
    "handler" => "<controller-path>/<controller-name>/<method>",
    "roles" => [<allowed-roles>]
)
```
The `<controller-path>` and `<controller-name>` variables have its first letter lowercased.

There are two types of paths specified here:
- Front-end path: this will render the front-end view of the intended screen. The method name will be `render<ScreenName>`
- Processing path: this will call the backend processing method, usually for `POST` data request. 
Note that while these paths are hidden, they are still easily discoverable as they are public. Therefore, back-end request on these should be handled carefully to avoid SSRF.


## Controller specification
The central processing part of the project are the controllers, which will register the views and the models (if any).
At construction, we can specify which model we want to register (like `User`, `Job`) in order to interact with database.
At each rendering method, we can specify `$data` to pass to the view.

Some kinds of data to specify:
- Front-end companion files: `title`, `cssFile`, `jsFiles`
- Database queried information (like from `GET`)

Finally, the rendering method will load view with this format
```
$this->load->view("layouts/<layout-path>" "<body-html-path>", $data)
```
`<body-html-path>` relative path is at `views`.

Besides rendering views, the controller can process any function call to service the app.

This may include `GET`, `POST` request processing, or intermediate functions.
