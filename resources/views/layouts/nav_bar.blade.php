
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        <a href="{{route('/')}}" class="brand-logo"><i class="material-icons">polymer</i> </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('about')}}">About Us</a></li>
        </ul>
    </div>
</nav>
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
            <div class="background">
                <img src="img/bg.jpg">
            </div>
            <a href="https://www.facebook.com/phyomin.maungmaung.9"><img class="circle" src="img/new.jpg"></a>
            <a href="https://www.facebook.com/phyomin.maungmaung.9"><span class="white-text name">Phyo Min Maung Maung</span></a>
            <a href="https://www.email.com"><span class="white-text email">phyominmaungmaungmwd@gmail.com</span></a>
        </div></li>
    <li><a href="{{route('about')}}"><i class="material-icons">cloud</i>About Us</a></li>


</ul>

