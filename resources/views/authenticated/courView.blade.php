<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/courView.css')}}">
    <title>View Cour</title>
</head>
<body>
    <div id="app">
        <x-header a="auth"/>

        <div class="cour-details">
            <div class="detail">
                <span class="key">
                    Added :
                </span>
                <span class="value">
                    21/21/2002
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    niveau :
                </span>
                <span class="value">
                    deuxieme
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    enseignant :
                </span>
                <span class="value">
                    dr. Jack Sparo 
                </span>
                <span>
                    <i class="fa-solid fa-chalkboard-user"></i>
                </span>
            </div>
        </div>
        <div class="cour-content">
            <div class="cour-header">
                <h4>
                    Cour Content
                </h4>
            </div>
            <div class="cour-body">
                <x-cour-section/>
                <x-cour-section/>
                <x-cour-section/>
                <x-cour-section/>
            </div>
        </div>
        <div class="test">
            <div class="go">
                <h4>
                    Do the QCM test 
                </h4>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-golang"></i>
                </a>
            </div>
        </div>
        <div class="comments">
            <div class="inner">
                <div class="comments-header">
                    <h3>
                        Comments
                    </h3>
                </div>
                <div class="comments-body">
                    <div class="inner-body">
                        <div class="empty">
                            NO Comment yet
                        </div>
                    </div>
                </div>
                <div class="comments-footer">
                    <div class="footer-inner">
                        <form action="#" method="post">
                            <div class="add">
                                <i class="fa-regular fa-comment"></i>
                                <input type="text" placeholder="commanter ..." name="comment">
                            </div>
                            <div class="btn">
                                <button type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-footer/>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
    <script>
        $(function(){
            $('.fa-plus').click(function(){
                $('.cour-section').removeClass('show');
                $(this).parent().parent().addClass('show');
            })
            $('.fa-minus').click(function(){
                $(this).parent().parent().removeClass('show');
            })
        })
    </script>
</body>
</html>