<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="pic/sanjid.jpg" alt="image"/>
                </div>
                <div class="profile-name">
                    <button class="btn-info">
                        <span>{{auth()->user()->name}}</span>
                    </button>                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">USER</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">MANAGER</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">PARTICIPATORS</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">GAME</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Need For Speed</a></li>


                    <li class="nav-item"> <a class="nav-link" href="">Player Unknown Battle Ground</a></li>


                    <li class="nav-item"> <a class="nav-link" href="">Free Fire</a></li>


                    <li class="nav-item"> <a class="nav-link" href="">Clash Of Clan</a></li>



                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="far fa-compass menu-icon"></i>
                <span class="menu-title">GAMING EVENT</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Upcoming Event</a></li>
                    <li class="nav-item"> <a class="nav-link" href="l">Event Register</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Confirmed Register</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Finished Event</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="fas fa-clipboard-list menu-icon"></i>
                <span class="menu-title">PRODUCT</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Product Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Order Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Payment</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="fab fa-wpforms menu-icon"></i>
                <span class="menu-title">BLOG</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Writer</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="form-elements">
                <i class="fab fa-wpforms menu-icon"></i>
                <span class="menu-title">Create Event</span>
            </a>
        </li>

    </ul>
</nav>