<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zens Joke</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col-md-4 text-left pl-5">
                <img src="/img/logo.png" class="img-1" alt="">
            </div>
            <div class="col-md-4 offset-md-4">
                <div class="row">
                    <div class="col-10 text-right">
                        <span class="text-1">Handicrafted by</span>
                        <br>
                        <span class="text-2">Jim HLS</span>
                    </div>
                    <div class="col-2 text-center">
                        <img src="/img/sunflower.jpg" class="img-2 rounded-circle" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card row border-left-0 border-top-0 border-right-0">

        <div class="joke_title text-center bg-success text-white p-5 col-12">
            <h1>A joke a day keeps the doctor away</h1>
            <p>
                if you joke wrong way, your teeth have to pay. (Serious)
            </p>
        </div>


        <div class="container">
            <div class="joke_description col-12 pt-3">
                <div class="pl-5 pr-5 pt-4">

                    @if (count($stories) > 0)
                    @foreach ($stories as $story)
                    <p>{{ $story['description']; }}</p>

                    <div class="col-12 text-center p-5">
                        <button type="button" class="btn btn-primary rounded-0 btn-vote mr-2" data-id="{{ $story['id'] }}" data-vote="1">This is Funny!</button>
                        <button type="button" class="btn btn-success rounded-0 btn-vote ml-2" data-id="{{ $story['id'] }}" data-vote="0">This is not funny.</button>
                    </div>

                    @break;
                    @endforeach
                    @else
                    <h5 class="p-5 text-center">That's all the jokes for today! Come back another day!</h5>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer text-center pl-5 pr-5">
            <div class="footer_message">
                <p>This website is created as part of Hlsolutions program. The Materials contained on this website are provided for general
                    information only and do not constitute any form of advice. HLS assumes no responsibility for the accuracy of any particular statement and
                    accepts no liability for any lose or damage which may arise from reliance on the information contained on this site.
                </p>
            </div>
            <div class="footer_sigh">
                <p>Copyright 2021 HLS</p>
            </div>
        </div>
    </div>





    <script src="/js/story.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
