<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <x-header a="auth"/>

        <div class="cont">
            <div class="test">
                <div class="test-title">
                    <h4>
                        Test : title of the cour
                    </h4>
                </div>
                <div class="test-body">
                    <div class="test-questions">
                        <div class="ask">
                            <div class="question">
                                <i class="fas fa-ask"></i>
                                <input type="text" placeholder="your question">
                            </div>
                            <div class="choices">
                                <div class="chice"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
</body>
</html>