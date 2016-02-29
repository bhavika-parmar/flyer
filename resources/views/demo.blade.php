<html>
<head>
    <title>My Demo</title>

<body>
     Demo Page
  @foreach($demotab as $dt)
      <div>
          {{ $dt->title }}
      </div>

  @endforeach
</body>
</head>
</html>