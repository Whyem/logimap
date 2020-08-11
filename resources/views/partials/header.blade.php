<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Zoter</a>-->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/images/rademLogo.png')}}" alt="" class="logo-large">
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner niceScrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Volets</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span>Tableau de bord</span>
                                </a>
                            </li>

                            <li class="has_sub parameters">
                                <a href="javascript:void(0);" ><i class="mdi mdi-layers"></i> <span> Paramètrages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled sub_menu test">
                                    <li class="ville"><a href="{{ route('Villes') }}" >Villes</a></li>
                                    <li class="secteur"><a href="{{ route('Secteurs') }}">Secteurs</a></li>
                                    <li class="etage"><a href="{{ route('Etages') }}">Etage</a></li>
                                    <li class="equipement"><a href="{{ route('Equipements') }}">Equipement</a></li>
                                </ul>
                            </li>



                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->