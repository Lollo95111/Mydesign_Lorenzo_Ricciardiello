<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Orbitron:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <x-navbar></x-navbar>
{{$slot}}

<script src="https://kit.fontawesome.com/b68f9ee230.js" crossorigin="anonymous"></script>
</body>
</html>
