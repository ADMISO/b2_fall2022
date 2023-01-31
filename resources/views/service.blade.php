<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Our Services</h2>
        @if($running==1)
        <p>We provide the following services:</p>
        <table border="3">
            <thead>
                <th>Name</th>
                <th>Price</th>
            </thead>
            <tbody>
                @foreach($services as $s)
                <tr>
                    <td>{{ $s['name'] }}</td>
                    <td>{{ $s['price'] }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        @else
        <p>Currently we don't provide any service</p>
        @endif
        
    </div>
</body>
</html>