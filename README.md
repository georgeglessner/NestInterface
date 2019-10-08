# Nest Interface

A _**very simple**_ web interface for your Nest Thermostat. 

Powered by [nest-api](https://github.com/gboudreau/nest-api)

# Prerequisites 

- A webserver of your choice (Apache, Nginx, etc.)

- PHP

# Usage

Before you can use this web interface you will need to create a `credentials.php` file with the following information filled out:


```
<?php
    $username = 'NEST USERNAME';
    $password = 'NEST PASSWORD';
    $zipcode = 'YOUR ZIPCODE'
?>
```


![homepage](images/homepage.png)

![usage](images/usage.png)