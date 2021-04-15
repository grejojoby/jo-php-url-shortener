<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jo URL Shortener</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

</head>
<body>
    <div class="wrapper">
        <form action="#">
            <i class="url-icon uil uil-link"></i>
            <input type="text" placeholder="Enter or paste a long url" required>
            <button>Shorten</button>
        </form>
        <div class="count">
            <span>Total Links: <span>10</span> | Total Clicks: <span>140</span></span>
            <a href="#">Clear All</a>
        </div>
        <div class="urls-area">
            <div class="title">
                <li>Shorten URL</li>
                <li>Original URL</li>
                <li>Clicks</li>
                <li>Actions</li>
            </div>
            <div class="data">
                <li><a href="#">example.com/xyz123</a></li>
                <li>https://google.com/search=sdakjfnaksnsfasjkfsdfasfs</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            
            <div class="data">
                <li><a href="#">example.com/xyz123</a></li>
                <li>https://google.com/search=sdakjfnaksnsfasjkfsdfasfs</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            
            <div class="data">
                <li><a href="#">example.com/xyz123</a></li>
                <li>https://google.com/search=sdakjfnaksnsfasjkfsdfasfs</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            
            <div class="data">
                <li><a href="#">example.com/xyz123</a></li>
                <li>https://google.com/search=sdakjfnaksnsfasjkfsdfasfs</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            
            <div class="data">
                <li><a href="#">example.com/xyz123</a></li>
                <li>https://google.com/search=sdakjfnaksnsfasjkfsdfasfs</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
        </div>
    </div>
    <div class="blur-effect"></div>
    <div class="popup-box">
        <div class="info-box error">
            Your short link is ready. You can edit your short link now but can't edit once you saved it.
        </div>
        <form action="#">
            <label>Edit your shorten url</label>
            <input type="text" class="shorten-url" spellcheck="false" required value="example.com/xyz123">
            <i class="copy-icon uil uil-copy-alt"></i>
            <button>Save</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>