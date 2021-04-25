<style>
    #fh5co-header {
        position: absolute;
        z-index: 1001;
        width: 100%;
        margin: 0px 0 0 0;
    }

    @media screen and (max-width: 768px) {
        #fh5co-header {
            margin: 0px 0 0 0;
        }
    }

    #fh5co-header .header-inner {
        height: 80px;
        padding-left: 20px;
        padding-right: 20px;
        float: left;
        width: 100%;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        -ms-border-radius: 7px;
        border-radius: 7px;
    }

    #fh5co-header h1 {
        float: left;
        padding: 0;
        font-weight: 700;
        line-height: 0;
        font-size: 30px;
    }

    #fh5co-header h1 a {
        color: white;
    }

    #fh5co-header h1 a>span {
        color: #00B906;
    }

    #fh5co-header h1 a:hover,
    #fh5co-header h1 a:active,
    #fh5co-header h1 a:focus {
        text-decoration: none;
        outline: none;
    }

    #fh5co-header h1,
    #fh5co-header nav {
        margin: 38px 0 0 0;
    }

    #fh5co-header nav {
        float: right;
        padding: 0;
    }

    @media screen and (max-width: 768px) {
        #fh5co-header nav {
            display: none;
        }
    }

    #fh5co-header nav ul {
        padding: 0;
        margin: 0 -0px 0 0;
        line-height: 0;
    }

    #fh5co-header nav ul li {
        padding: 0;
        margin: 0;
        list-style: none;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
    }

    #fh5co-header nav ul li a {
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
        padding: 10px;
        position: relative;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    #fh5co-header nav ul li a i {
        line-height: 0;
        font-size: 20px;
        position: relative;
        top: 3px;
    }

    #fh5co-header nav ul li a:after {
        content: "";
        position: absolute;
        height: 2px;
        bottom: 7px;
        left: 10px;
        right: 10px;
        background-color: #fff;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -moz-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -ms-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -o-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    #fh5co-header nav ul li a:hover {
        text-decoration: none;
        color: white;
    }

    #fh5co-header nav ul li a:hover:after {
        visibility: visible;
        -webkit-transform: scaleX(1);
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        -o-transform: scaleX(1);
        transform: scaleX(1);
    }

    #fh5co-header nav ul li a:active,
    #fh5co-header nav ul li a:focus {
        outline: none;
        text-decoration: none;
    }

    #fh5co-header nav ul li.cta {
        margin-left: 20px;
    }

    #fh5co-header nav ul li.cta a {
        padding-left: 16px !important;
        padding-right: 16px !important;
        padding-top: 7px !important;
        padding-bottom: 7px !important;
        border: 2px solid rgba(255, 255, 255, 0.7);
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px;
    }

    #fh5co-header nav ul li.cta a:hover {
        background: #fff;
        color: #00B906;
    }

    #fh5co-header nav ul li.cta a:hover:after {
        display: none;
    }

    #fh5co-header nav ul li.active a {
        text-decoration: none;
        color: white;
    }

    #fh5co-header nav ul li.active a:after {
        visibility: visible;
        -webkit-transform: scaleX(1);
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        -o-transform: scaleX(1);
        transform: scaleX(1);
    }
</style>

<header id="fh5co-header" role="navigation" style="background-color: black;">
    <div class="container">
        <div class="header-inner">

            <h1><a href="<?php echo base_url() . '' ?>">Cipta Solusi Pratama</a></h1>
            <nav role="navigation">
                <ul>
                    <li><a href="<?php echo base_url() . '' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
                    <li><a href="<?php echo base_url() . 'portfolio' ?>">Portfolio</a></li>
                    <li><a href="<?php echo base_url() . 'gallery' ?>">galeri</a></li>
                    <li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
                    <li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
                    <li class="cta"><a href="<?php echo base_url() . 'portfolio' ?>">Get started</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>