@extends('layouts.custom')

@section('content')
<section>
    <div class="name-heading">
        <div class="row">
            <h2> Gallery </h2>
        </div>

    </div>

    <!-- <div id="photos">
        <ul id="photo-gallery">
            <li>
            <a href="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
                <img src="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
                <img src="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
                <img src="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://40.media.tumblr.com/e67b59d43c79c496b6fa8f1dddabef47/tumblr_nbc7zx6vJl1tubinno1_1280.jpg">
                <img src="https://40.media.tumblr.com/e67b59d43c79c496b6fa8f1dddabef47/tumblr_nbc7zx6vJl1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://40.media.tumblr.com/d94d2a63ab509f403111c6e8ebfc22a4/tumblr_ndyfu61hzH1tubinno1_1280.jpg">
                <img src="https://40.media.tumblr.com/d94d2a63ab509f403111c6e8ebfc22a4/tumblr_ndyfu61hzH1tubinno1_1280.jpg"></a>
            </li>
            <li>
            <a href="https://40.media.tumblr.com/d7a014af6eaec53ccdc7a4171033f96d/tumblr_na06t4fnlI1tubinno1_1280.jpg">
                <img src="https://40.media.tumblr.com/d7a014af6eaec53ccdc7a4171033f96d/tumblr_na06t4fnlI1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://40.media.tumblr.com/7302cf024c924726c6ad99bb80b0be41/tumblr_nauccbKUCw1tubinno1_1280.jpg">
                <img src="https://40.media.tumblr.com/7302cf024c924726c6ad99bb80b0be41/tumblr_nauccbKUCw1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://41.media.tumblr.com/fddb3f2b0bdf390efd7ea87372e75fa5/tumblr_ndyg3pYbKW1tubinno1_1280.jpg"><img src="https://41.media.tumblr.com/fddb3f2b0bdf390efd7ea87372e75fa5/tumblr_ndyg3pYbKW1tubinno1_1280.jpg">
            </a>
            </li>
            <li>
            <a href="https://41.media.tumblr.com/758a5cb9046fde53138ad0f55527ca25/tumblr_ndyfdoR6Wp1tubinno1_1280.jpg">
                <img src="https://41.media.tumblr.com/758a5cb9046fde53138ad0f55527ca25/tumblr_ndyfdoR6Wp1tubinno1_1280.jpg">
            </a>
            </li>
        </ul>
    </div> -->
    <style>
        /* = @media queries  info 
        ===========================*/
        body:before {
            margin: 1em;
        }

        @media (min-width: 980px) {
            body:before {
                content: "info: Large desktop";
                color: black;
            }
        }

        @media (min-width: 768px) and (max-width: 979px) {
            body:before {
                content: "info: Portrait tablet to landscape desktop";
                color: black;
            }
        }

        @media (max-width: 767px) {
            body:before {
                content: "info: Landscape phone to portrait tablet ";
                color: black;
            }
        }

        @media (max-width: 480px) {
            body:before {
                content: "info: Landscape phones and down";
                color: black;
            }
        }


        /*	Basic
        ================*/
        html,
        body {
            margin: 0;
            padding: 0;
            position: relative;
            height: 100%;
        }

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        /*  PLACEHOLDER
        ----------------------*/
        ::-webkit-input-placeholder {
            color: #FFF;
        }

        :-moz-placeholder {
            color: #FFF;
        }

        ::-moz-placeholder {
            color: #FFF;
        }

        :-ms-input-placeholder {
            color: #FFF;
        }

        /*  SCROLLBAR
        -------------------*/
        ::-webkit-scrollbar {
            width: 0.2em;
            background: #e74c3c;
        }

        ::-webkit-scrollbar-track {}

        ::-webkit-scrollbar-thumb {
            background: #fff;
        }

        ::-webkit-scrollbar-thumb:window-inactive {
            background: #fff;
        }


        /*  SELECTION
        -------------------*/
        ::selection {
            background: #999;
            color: #fff;
        }

        ::-moz-selection {
            background: #999;
            color: #fff;
        }

        /* === Links Styles === */
        a {
            text-decoration: underline;
            transition: 0.25s;
            backface-visibility: hidden;
        }

        a:hover {
            text-decoration: none;
        }

        a:focus {
            outline: 0;
            outline: 0 auto -webkit-focus-ring-color;
            outline-offset: 0;
        }


        /*	Layout
        =======================*/
        body {
            background: #ECECEC;
            overflow-X: hidden;
            font-size: 13px;
            font-family: 'Metrophobic', sans-serif;
            font-weight: 400;
        }

        .wrapper {
            margin: 5% auto;
            display: block;
            width: 96%;
            height: 100%;
            padding: 0;
        }

        .wrapper_inner {
            padding: 0.2em;
            margin: 0;
        }

        .gallery {}

        .gallery_item {
            float: left;
            width: 24.59%;
            display: inline-block;
            margin: 0 auto;
            margin-right: 0.2em;
            margin-bottom: 0.2em;
            padding: 0;
        }

        .gallery_item_preview {
            transition: all 0.5s ease;
        }

        .gallery_item_preview a {
            position: relative;
            display: inline-block;
            padding: 0.2em;
            /* background:#ECECEC; */
            color: #333;
            text-decoration: none;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .gallery_item_preview a:hover {
            color: #777;
            transition: all 0.5s ease;
        }

        .gallery_item_preview a:before {
            content: "Click to view";
            position: absolute;
            top: 0.5em;
            left: -30em;
            background-color: #fff;
            background-color: rgba(255, 255, 255, 0.3);
            color: #000;
            padding: 0.5em 1em;
            border-radius: 5px 0 0 0;
            transition: all 1s ease;
        }

        .gallery_item_preview a:hover:before {
            left: 0.5em;
            transition: all 1s ease;
        }

        .gallery_item_preview a h3 {
            font-family: 'Leckerli One', cursive;
        }

        .gallery_item_preview a img {
            display: block;
            width: 100%;
            height: 150px;
            border-radius: 5px;
            transition: all 0.5s ease;
        }

        .gallery_item_full {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            background-color: #fff;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 100;
            overflow: hidden;
        }

        .gallery_item_full img {
            display: block;
            width: 100%;
        }

        .box {
            margin: auto;
            background: #ecf0f1;
            padding: 2em;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
            width: 50%;
            text-align: left;
        }

        .box h3 {
            font-family: 'Leckerli One', cursive;
            color: #F88484;
        }

        .cl {
            position: absolute;
            top: 0.5em;
            right: 0.5em;
            color: #777;
            text-decoration: none;
            display: inline-block;
            font-size: 2em;
        }

        .cl:hover {
            color: #F88484;
        }



        .video {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video iframe,
        .video object,
        .video embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /*  list style
        =============================*/
        .icon_list {
            width: 30px;
            height: 30px;
            display: block;
            padding: 0.5em;
            text-decoration: none;
            line-height: 0.4em;
            background: #FFF;
            color: #838383;
            border: 1px solid #C2C2C2;
            box-shadow: 0 1px 1px #4B4B4B;
            border-radius: 4px;
            position: absolute;
            right: 0.3em;
            top: 0.3em;
            transition: all 0.5s ease;
        }

        .icon_list:hover {
            background: #4E4E4E;
            color: #FFF;
            border-color: #000;
            transition: all 0.5s ease;
        }

        .gallery_item_list {
            float: none !important;
            display: block !important;
            width: 50% !important;
            margin: auto;
            background: #ECECEC;
            margin-top: 0.5em;
            box-shadow: 0 1px 4px #838383;
            transition: all 0.5s ease;
        }

        .gallery_line {
            width: 130px !important;
            height: 100px !important;
            display: inline-block !important;
            float: left !important;
            margin-right: 1em !important;
            transition: all 0.5s ease;
        }

        /*	Simple animation
        =======================*/
        .efIn {
            animation: fx_in 0.65s 1 ease-in-out;
        }

        .efOut {
            animation: fx_out 0.7s 1 ease-in-out;
        }

        /*	Keyframes
        ==============*/
        @keyframes fx_in {
            from {
                width: 0;
                height: 0;
                border-radius: 100%;
                opacity: 0;
            }

            50% {
                box-shadow: inset 0 0 0 0 #fff;
            }

            to {
                width: 100%;
                height: 100%;
                border-radius: 0;
                opacity: 1;
            }
        }

        @keyframes fx_out {
            from {
                width: 100%;
                height: 100%;
                border-radius: 0;
                box-shadow: inset 0 0 0 0 #fff;
                opacity: 1;
            }

            50% {
                box-shadow: inset 0 0 0 80em #fff;
            }

            to {
                width: 0;
                height: 0;
                border-radius: 100%;
                opacity: 0;
            }
        }


        /* Large desktop */
        @media (min-width: 980px) {
            .gallery_item {
                width: 24.45%;
            }

            .gallery_item_preview a img {
                height: 180px;
            }

            .box {
                width: 60%;
            }
        }

        /* Portrait tablet to landscape and desktop */
        @media (min-width: 768px) and (max-width: 979px) {
            .gallery_item {
                width: 32.83%;
            }

            .gallery_item_preview a img {
                height: 180px;
            }

            .box {
                width: 70%;
            }
        }

        /* Landscape phone to portrait tablet */
        @media (max-width: 767px) {
            .gallery_item {
                width: 49.45%;
            }

            .gallery_item_preview a img {
                height: 180px;
            }

            .box {
                margin: auto;
                background: #F8F8F8;
                padding: 4em 1em 1em 1em;
                width: 80%;
            }

            .cl {
                top: 0;
                right: 0.5em;
            }
        }

        /* Landscape phones and down */
        @media (max-width: 480px) {
            .gallery_item {
                width: 100%;
            }

            .gallery_item_preview a img {
                height: 200px;
            }

            .box {
                background: #F8F8F8;
                padding: 4em 1em 1em 1em;
                width: 100%;
            }

            .cl {
                top: 0;
                right: 0.5em;
            }

            .gallery_item_list {
                width: 100% !important;
            }
        }
    </style>

    
    <a href="#" class="icon_list" data-js="list">
        <span>• -</span>
        <span>• -</span>
        <span>• -</span>
    </a>

    <div class="wrapper">
        <div class="wrapper_inner">
            
            <section class="gallery">
               
                <div class="gallery_item">
                    
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/DSTV.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/DSTV.jpg" alt="image-1">
                        </a>

                    </span>
                    
                    <div data-lk="1" class="gallery_item_full">
                        <div class="box">
                            <img src="img/gallery/DSTV.jpg" alt="" />
                         
                        </div>
                    </div>
                </div>


               
                <div class="gallery_item">
                  
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/Generic 2a.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Generic 2a.jpg" alt="image-1">
                        </a>
                    </span>
                    
                </div>


                
                <div class="gallery_item">
                   
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/Generic Data 4b.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Generic Data 4b.jpg" alt="image-1">
                        </a>

                    </span>
                    
                </div>



                
                <div class="gallery_item">
                   
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/Generic Utilities 3.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Generic Utilities 3.jpg" alt="image-1">
                        </a>
                    </span>
                   
                </div>

                
                <div class="gallery_item">
                   
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/Independence Day 4.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Independence Day 4.jpg" alt="image-1">
                        </a>
                    </span>
                  
                </div>


               
                <div class="gallery_item">
                    
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/Int Woemens Day 2.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Int Woemens Day 2.jpg" alt="image-1">
                        </a>
                    </span>
                
                </div>

               
                <div class="gallery_item">
                   
                    <span class="gallery_item_preview">
                         <a class="demo" href="img/gallery/TTUaa.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/TTUaa.jpg" alt="image-1">
                        </a>

                    </span>
                    
                </div>



                <div class="gallery_item">
                   
                    <span class="gallery_item_preview">
                        <a class="demo" href="img/gallery/Vals 4.jpg" data-lightbox="gallery">
                            <img class="example-image" src="img/gallery/Vals 4.jpg" alt="image-1">
                        </a>
                    </span>
                
                    <!-- <div data-lk="10" class="gallery_item_full">
                        <div class="box">
                            <img src="img/gallery/Vals 4.jpg" alt="" />
                            
                        </div>
                    </div> -->
                </div>

            </section>
        </div>
    </div>

    
    <script>
    
    var gallery=(function(){"use strict";return{js:function(e){return $("[data-js="+e+"]")},lk:function(e){return $("[data-lk="+e+"]")},ready_:function(){this.events()},events:function(){var self=this;var close=$(".gallery_item_full");close.append('<a href="#" data-js="cl" class="cl">X</a>');var k=$("a[data-js]");k.each(function(i,v){i=i+1;self.clickOn(i)});self.js("cl").on("click",function(){self.fx_out($(".gallery_item_full"));self.fx_out($(".box"))});self.js("list").on("click",function(){$(".gallery_item").toggleClass("gallery_item_list");$(".gallery_item_preview a img").toggleClass("gallery_line")})},clickOn:function(i){var self=this;this.js(i).on("click",function(){self.fx_in(self.lk(i));self.fx_in($(".box"))})},fx_out:function(el){el.addClass("efOut").delay(500).fadeOut("fast").removeClass("efIn");$("body").css({overflow:"auto"});return!1},fx_in:function(el){el.removeClass("efOut").show().addClass("efIn");$("body").css({overflow:"hidden"});return!1}}})();gallery.ready_()

    </script>




</section>
@endsection