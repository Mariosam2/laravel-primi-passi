<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>Home</title>
</head>



<body>
    @include('header')
    <main id="site_main">
        <h1>Hello World</h1>
        @foreach($details as $key => $detail)
        <div>{{"{$key}:  {$detail}"}}</div>
        @endforeach
    </main>


</body>

</html>