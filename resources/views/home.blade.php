<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title --}}
        <title>Travels</title>
        {{-- Link CSS --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css "integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w== "crossorigin="anonymous" />
        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    </head>
    <body>

        <header id="header_content">
            <h1>Travels</h1>
        </header>


        <main id="main_content" class="container">

            <h2 class="subtitle">Le nostre offerte</h2>

            <div class="travels">
                @foreach($travels as $travel)
                    <div class="travel">
                        <img src="{{$travel->image}}" alt="#">
    
                        <div class="content">
                            <i class="fas fa-suitcase"></i>
                            <span>VACANZE</span>
                            <h2>Vacanza a {{$travel->destination}}</h2>
                            <p>{{$travel->description}}</p>
                            <h3>da {{$travel->price}}€</h3>
                            <div class="date">
                                <h5>{{$travel->departure_date}}</h5>
                                <h5>al {{$travel->return_date}}</h5>
                            </div>
                            <h4><span>Partenza da</span> {{$travel->place}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
     
    </body>
</html>
