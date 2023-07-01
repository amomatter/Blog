<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img style="border-radius: 0 0 0 0 !important;" src="/userProfile/{{Auth()->user()->image}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">{{Auth()->user()->name}}</h1>
            <p >{{Auth()->user()->userType}}</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">

        <li><button> <a style="margin: 0px -11px 16px 20px;padding: 10px 37px 11px 31px;" type="button" href="{{url('/')}}"  class="btn btn-dark">Home Page</a></button></li>
        <li><button style="margin: 0px 0 0px 43px;" type="button" onclick="refreshPage()"class="btn btn-dark">Refresh</button></li>
        <li ><a href="index.html"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{route('post.index')}}"> <i class="icon-grid"></i>Add Post </a></li>
        <li><a href="{{url('show_page')}}">  <i class="icon-grid"></i>Show Post </a></li>
        <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul>
</nav>

<script>
    function refreshPage() {
        location.reload();
    }
</script
