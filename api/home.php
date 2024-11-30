<?php

$app->get('user/{id}[/]', function ($request, $response, $args) {
  $id = $args['id'];
  $response->getBody()->write("Your ID is, $id");
  return $response;
});
