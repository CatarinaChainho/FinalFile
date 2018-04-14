<?php

App::get('database')->insert('users', $_POST);

header('Location: /');