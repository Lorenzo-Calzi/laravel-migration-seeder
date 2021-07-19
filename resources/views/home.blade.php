<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travels</title>

    </head>
    <body>

        <div class="travels">
            @foreach($travels as $travel)
                <div class="travel">
                    <img src="{{$travel->image}}" alt="">
                    {{$travel->destination}}
                    {{$travel->price}}
                    {{$travel->departure_date}}
                    {{$travel->return_date}}
                    {{$travel->place}}
                    {{$travel->description}}
                </div>
            @endforeach
        </div>
     
    </body>
</html>
