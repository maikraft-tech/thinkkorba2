@extends('layouts.custom')


@section('content')
<style>

    body {
    color: #878787;
    font-family: Roboto, sans-serif;
    left: 0;
    line-height: 1.35;
    margin: 0;
    overflow: hidden;
    position: relative;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    transition: left 0.3s ease-in-out;
    }
    body.panel-open {
    left: 250px;
    }

    .container {
    min-height: 1000px;
    }

    a {
    outline: 0;
    text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
    }

    header {
    color: #fff;
    padding: 3em 5%;
    position: relative;
    width: 90%;
    z-index: 2;
    }

    .menu-toggle {
    cursor: pointer;
    float: left;
    font-size: 0.875rem;
    transition: all 0.3s ease-in-out;
    }
    .menu-toggle.open {
    opacity: 0.5;
    }

    .menu-toggle-grippy {
    border-bottom: 5px solid #fff;
    border-top: 5px solid #fff;
    float: left;
    line-height: 0;
    margin-right: 1em;
    padding: 5px 0;
    text-indent: -999em;
    width: 35px;
    }
    .menu-toggle-grippy:after {
    background: black;
    content: "";
    display: block;
    height: 5px;
    }

    .menu-toggle-label {
    float: left;
    font-weight: 700;
    height: 25px;
    letter-spacing: 1px;
    line-height: 25px;
    text-transform: uppercase;
    }

    .hidden-panel {
    background: #333;
    color: #666;
    font-size: 0.875rem;
    height: 100%;
    position: absolute;
    left: -250px;
    top: 0;
    width: 250px;
    margin-top:50px;
    }
    .hidden-panel a {
    color: #999;
    transition: color 0.3s ease-out;
    }
    .hidden-panel a:hover {
    color: #fff;
    }

    .hidden-panel-close {
    color: #666;
    cursor: pointer;
    position: absolute;
    right: 20px;
    top: 3.7em;
    transition: color 0.3s ease-in-out;
    }
    .hidden-panel-close:hover {
    color: #fff;
    }

    .hidden-panel-content {
    padding: 3.65em 10%;
    }

    .hidden-panel-nav {
    border-bottom: 1px solid #666;
    border-bottom: 1px solid rgba(102, 102, 102, 0.25);
    margin-bottom: 1.5em;
    padding-bottom: 1.5em;
    text-transform: uppercase;
    }
    .hidden-panel-nav h3 {
    letter-spacing: 1px;
    margin-bottom: 1em;
    }
    .hidden-panel-nav ul {
    list-style: none;
    font-weight: 600;
    margin: 0;
    padding: 0;
    }
    .hidden-panel-nav li {
    padding: 0.25em 0;
    }

    .hidden-panel-text {
    line-height: 1.5;
    }
    .hidden-panel-text p {
    margin-bottom: 1.5em;
    }
    .hidden-panel-text p:last-child {
    margin-bottom: 0;
    }

    .hidden-panel-credits {
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 1.5;
    }
    .hidden-panel-credits span {
    display: block;
    margin-bottom: 0.15em;
    }

    .banner {
    background: #f5756c;
    background: linear-gradient(#f5756c, #fd5480), #f5756c;
    box-sizing: border-box;
    height: 100%;
    left: 0;
    padding: 5em 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
    z-index: 1;
    }
    .banner h1 {
    color: #fff;
    font-family: "Dancing Script";
    font-size: 4.375rem;
    margin-bottom: 1em;
    }
    .banner h2 {
    color: #fff;
    font-size: 2rem;
    font-weight: 300;
    line-height: 1.5;
    margin: 0 auto;
    width: 50%;
    }

    .container:before, header:before, .menu-toggle:before, .container:after, header:after, .menu-toggle:after {
    content: "";
    display: table;
    }

    .container:after, header:after, .menu-toggle:after {
    clear: both;
    }


</style>

    <div class="container">
        <!-- <header>
        <div class="menu-toggle" data-js="menu-toggle">
            <span class="menu-toggle-grippy">Toggle</span>
            <span class="menu-toggle-label">Menu</span>
        </div>
        </header> -->
        
        <section class="banner" role="banner">
        <h1>Hello there</h1>
        <h2>This is an experimental CodePen which utilises an absolutely positioned hidden panel which can be triggered by clicking a toggle.</h2>
        </section>

        <!-- <div class="hidden-panel">
        
            <span class="hidden-panel-close" data-js="hidden-panel-close">Close</span>
            
            <div class="hidden-panel-content">
                
                <nav class="hidden-panel-nav">
                <h3>Quick Look</h3>
                <ul>
                    <li><a href="#" title="Home">Home</a></li>
                    <li><a href="#" title="About">About</a></li>
                    <li><a href="#" title="Blog">Blog</a></li>
                    <li><a href="#" title="Work">Work</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                </ul>
                </nav>
                
                <div class="hidden-panel-text">
                <p>This is an experimental CodePen which utilises an absolutely positioned hidden panel which can be triggered by clicking a toggle.</p>
                </div>
                
                <div class="hidden-panel-credits">
                <span>Coded by <a href="https://twitter.com/darrenhuskie" title="Darren Huskie">Darren Huskie</a>.</span>
                <span>Powered by <a href="#" title="some framework">some framework</a>.</span>
                <span>Hosted by a <a href="#" title="web host">web host</a>.</span>
                </div>
                
            </div>
        </div> -->
    </div>


<script>
var menuToggle = document.querySelector('[data-js="menu-toggle"]');

// Remove this setInterval to trigger the open/close manually through the UI
var interval = setInterval(function() {
  menuToggle.click();
}, 2000);

// Clear the interval on any click
document.body.addEventListener('click', function () {
   clearInterval(interval);
});

menuToggle.addEventListener('click', function () {
  document.body.classList.toggle('panel-open');
  menuToggle.classList.toggle('open');
});

var closePanel = document.querySelector('[data-js="hidden-panel-close"]');

closePanel.addEventListener('click', function () {
  document.body.classList.remove('panel-open');
  menuToggle.classList.remove('open');
});
</script>

@endsection