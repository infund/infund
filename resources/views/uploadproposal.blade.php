<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    </head>
    <body>
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <label for="profileExpandTrigger" class="infund-nav-item-container">
                <div style="width: 30px; height: 30px; padding: 0; border-radius: 50%; overflow: hidden;">
                    <img src="{{ URL::asset('img/web_assets/anonymous/profile_male.jpg') }}" style="width: 30px; height: 30px;">
                </div>
                <a id="profileExpandMenu">Agustinus Theodorus</a>
            </label>
        </nav>
        <input id="profileExpandTrigger" type="checkbox">
        <nav class="infund-expand-nav">
            <a href="/profile">
                Profile
            </a>
            <a href="/settings">
                Settings
            </a>
            <a href="/">
                Sign Out
            </a>
        </nav>

        <main class="infund-dashboard-main infund-proposal-upload-main">
            <h2>Proposal Upload</h2>
            <div class="infund-proposal-form">
                <div>
                    <div class="infund-proposal-card">
                        <span>
                            <h2>Title</h2>
                            <span>brief desc..</span>
                            <span>100 investor 100 views</span>
                        </span>
                    </div>
                </div>
                <div>
                    <div id="infundProposalUploadData">
                        <label class="infund-signup-label" for="title">Title</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your title..">
                        <label class="infund-signup-label" for="email">Author</label>
                        <div>Max Jong</div>
                        <label class="infund-signup-label" for="description">Description</label>
                        <textarea class="infund-signup-textarea" type="text" placeholder="Enter your description.."></textarea>
                        <label class="infund-signup-label" for="funds">Funds Needed</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter funds needed..">
                        <div>
                            <div class="infund-button">Cancel</div>
                            <div class="infund-button">Confirm</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="infund-dashboard-footer">
            <div>
                <div>
                    © InFund 2019
                </div>
            </div>
        </footer>
    </body>
</html>