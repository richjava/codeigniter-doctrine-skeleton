<header class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand"><?php echo $name ?></a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Link 1</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Dropdown <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Dropdown Item 1</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a target="_blank" href="https://github.com/anvoz/CodeIgniter-Skeleton">Github</a></li>
            </ul>
        </nav>
    </div>
</header>