<?php

$app['database']->insert('users', $_POST);

header('Location: /');