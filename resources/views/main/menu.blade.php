
            <!--Logo Mainmenu Start-->
            <div class="header-logo-menu sticker">
                <div class="container">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="logo">
                                    @if($locale=='th')
                                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo/th.png') }}" alt="โรงเรียนอนุบาลนานาชาติตากสินระยอง"></a>
                                    @else
                                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo/en.png') }}" alt="โรงเรียนอนุบาลนานาชาติตากสินระยอง"></a> 
                                    @endif 
                                </div>
                            </div>
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <div class="mainmenu-area">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                @include('main.listmenu')
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-search">
                                        <li class="search-menu">
                                            <i id="toggle-search" class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <!--Search Form-->
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                    <!--End of Search Form-->
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!--End of Logo Mainmenu-->

            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        @include('main.listmenu')
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->              