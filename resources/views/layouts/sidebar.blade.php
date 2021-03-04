<div class="sidebar sidebar-style-1 bg-danger">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src={{asset("./public/assets/img/profile.jpg")}} alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a  href="#collapseExample" aria-expanded="true">
                        <span class="text-white">
                            {{ Auth::user()->name }}
                            <span class="user-level text-white">Administrator</span>                         
                        </span>
                    </a>        
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home text-white"></i>
                        <p class="text-white">Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href={{url('home')}}>
                                    <span class="sub-item text-white">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h text-danger"></i>
                    </span>
                    <h4 class="text-section text-white">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base1">
                        <i class="fas fa-layer-group text-white"></i>
                        <p class="text-white">Master Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base1">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href={{url('perkara')}}>
                                    <span class="sub-item text-white">Tahapan Kasus</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/typography.html">
                                    <span class="sub-item text-white">Jenis Tindak Pidana</span>
                                </a>
                            </li>
                            <li>
                                <a href={{url('pelapor')}}>
                                    <span class="sub-item text-white">Pelapor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group text-white"></i>
                        <p class="text-white">Perkara</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href={{url('perkara')}}>
                                    <span class="sub-item text-white">Data Perkara</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/typography.html">
                                    <span class="sub-item text-white">Data Laporan Online</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list text-white"></i>
                        <p class="text-white">Print Dokumen</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="sidebar-style-1.html">
                                    <span class="sub-item text-white">print</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>