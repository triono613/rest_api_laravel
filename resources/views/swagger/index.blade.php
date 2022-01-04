<html>
<head>
    <title>{{ config('app.name') }} | Frontend API's Swagger</title>
    <link href="https://be-laravel.herokuapp.com/swagger/style.css" rel="stylesheet">
</head>
<body>
<div id="swagger-ui"></div>
<script src="https://be-laravel.herokuapp.com/swagger/jquery-2.1.4.min.js"></script>
<script src="https://be-laravel.herokuapp.com/swagger/swagger-bundle.js"></script>
<script type="application/javascript">
    const ui = SwaggerUIBundle({
        url: "https://be-laravel.herokuapp.com/swagger/swagger.yaml",
        dom_id: '#swagger-ui',
    });
</script>
</body>
</html>
