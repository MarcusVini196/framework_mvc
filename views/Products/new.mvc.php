{% extends "base.mvc.php" %}

{% block title %}New Product{% endblock %}

{% block body %}

<h1>Novo produto</h1>

<form method="post" action="/products/create">

{% include "Products/form.mvc.php" %}

</form>

{% endblock %}