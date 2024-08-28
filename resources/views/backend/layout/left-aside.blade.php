    <!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{URL::asset('/assets/images/user.png')}}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela Petrus</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile2.html"><i class="icon-user"></i>الملف الشخصي</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>الخروج</a></li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>عدد العملاء </small>
                        <h6>561</h6>
                    </li>
                    <li class="col-4">
                        <small>عدد الوكلاء </small>
                        <h6>920</h6>
                    </li>
                    <li class="col-4">
                        <small>عدد الزبائن</small>
                        <h6>500</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">القائمة </a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
                            <li class="active">
                                <a href="#Dashboard" class="has-arrow"><i class="fa icon-users"></i><span>العملاء</span></a>
                                <ul>
                                    <li><a href="/users/2/category">الوكلاء</a></li>
                                    <li><a href="/users/3/category">أصحاب المحلات</a></li>
                                    <li><a href="/users/4/category">زبون عادي</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>الخدمات</span></a>
                                <ul>
                                    <li><a href="/turkification/">التتريك</a></li>
                                    <li><a href="/vip/">أنواع العملاء</a></li>
                                    <li><a href="/app/">قسم الألعاب</a></li>
                                    <li><a href="/app/">قسم الألعاب</a>
                                    <ul>
                                            <li><a href="blog-dashboard.html">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="bog-details.html">4</a></li>
                                        </ul>
                                </li>
                                    <li><a href="app-calendar.html">قسم شحن التطبيقات</a>
                                    <ul>
                                            <li><a href="blog-dashboard.html">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="blog-details.html">4</a></li>
                                        </ul></li>     
                                                          
                                        <li><a href="app-calendar.html"> قسم البيانات </a>
                                    <ul>
                                            <li><a href="blog-dashboard.html">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="blog-details.html">4</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="app-calendar.html">قسم البطاقات الرقمية</a>
                                    <ul>
                                        <li><a href="blog-dashboard.html">1</a></li>
                                        <li><a href="blog-post.html">2</a></li>
                                        <li><a href="blog-list.html">3</a></li>
                                        <li><a href="blog-details.html">4</a></li>
                                    </ul>
                                    </li>
                                    
                                    
                                    <li><a href="/transfer-money-firm/">قسم البنوك الرقمية</a>
                                    <ul>
                                            <li><a href="/transfer-money-firm/">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="blog-details.html">4</a></li>
                                        </ul>
                                    </li> 

                                    <li><a href="app-calendar.html">  خدمة تفيل البرامج</a>
                                    <ul>
                                            <li><a href="blog-dashboard.html">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="blog-details.html">4</a></li>
                                        </ul>
                                    </li> 

                                    <li><a href="app-calendar.html">  بطاقاتنا</a>
                                    <ul>
                                            <li><a href="blog-dashboard.html">1</a></li>
                                            <li><a href="blog-post.html">2</a></li>
                                            <li><a href="blog-list.html">3</a></li>
                                            <li><a href="blog-details.html">4</a></li>
                                        </ul>
                                    </li> 
                                </ul>
                            </li>
                    
                            <li>
                                <a href="#forms" class=""><i class="fa fa-user"></i><span>المستخدمين</span></a>
                            
                            </li>
                            <li>
                                <a href="#forms" class=""><i class="fa fa-money"></i><span>اضافة رصيد</span></a>
                            
                            </li>
                            <li>
                                <a href="#Tables" class=""><i class="fa fa-dashboard"></i><span>الاعدادات</span></a>
                               
                            </li>
                           
                            
                        </ul>
                    </nav>
                </div>
        
                <div class="tab-pane" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>

                    <ul class="list-unstyled font_setting mt-3">
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                <span class="custom-control-label">Nunito Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                <span class="custom-control-label">Ubuntu Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                <span class="custom-control-label">Raleway Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                <span class="custom-control-label">IBM Plex Google Font</span>
                            </label>
                        </li>
                    </ul>

                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable Dark Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-rtl">
                                <input type="checkbox" checked>
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable RTL Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-high-contrast">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable High Contrast Mode!</span>
                        </li>
                    </ul>                    

                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Allowed Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>

                    <a href="#" target="_blank" class="btn btn-block btn-primary"><i class="icon-power"></i>الخروج</a>
                    <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                </div>
               
                   
            </div>          
        </div>
    </div>