@php
$configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{(($configData['theme'] === 'dark') || ($configData['theme'] === 'semi-dark')) ? 'menu-dark' : 'menu-light'}} menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{url('/')}}">
          <span class="brand-logo">
            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
              <defs>
                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                  <stop stop-color="#000000" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                  <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
              </defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                  <g id="Group" transform="translate(400.000000, 178.000000)">
                    <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                    <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                    <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                    <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                  </g>
                </g>
              </g>
            </svg>
          </span>
          <h2 class="brand-text">Vuexy</h2>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc" data-ticon="disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span class="menu-title text-truncate">Личный кабинет</span>
                    <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/dashboard/analytics" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Управление</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Создание рейсов</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="navigation-header">
                <span>Apps &amp; Pages</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span class="menu-title text-truncate">Справочники</span>
                    <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/dashboard/analytics" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Автобусы</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Перевозчики</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Персонал</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Должности персонала</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Пункты</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Маршруты</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Рейсы</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Регулярные рейсы</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/email" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span class="menu-title text-truncate">Главная</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="menu-title text-truncate">Маршруты</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/invoice/list" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Добавить</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="menu-title text-truncate">Рейсы</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/invoice/list" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Новый рейс</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/invoice/list" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Управление</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/chat" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    <span class="menu-title text-truncate">Chat</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/todo" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    <span class="menu-title text-truncate">Todo</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/calendar" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="menu-title text-truncate">Calendar</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/kanban" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    <span class="menu-title text-truncate">Kanban</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="menu-title text-truncate">Invoice</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/invoice/list" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/invoice/preview" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Preview</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/invoice/edit" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/invoice/add" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Add</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/app/file-manager" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    <span class="menu-title text-truncate">File Manager</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span class="menu-title text-truncate">Roles &amp; Permission</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/access-roles" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/access-permission" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Permission</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <span class="menu-title text-truncate">eCommerce</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/ecommerce/shop" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Shop</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/ecommerce/details" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/ecommerce/wishlist" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Wishlist</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/app/ecommerce/checkout" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Checkout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <span class="menu-title text-truncate">User</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/app/user/list" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">List</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">View</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/app/user/view/account" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/app/user/view/security" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Security</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/app/user/view/billing" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Billings &amp; Plans</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/app/user/view/notifications" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/app/user/view/connections" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Connections</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="menu-title text-truncate">Pages</span>
                </a>
                <ul class="menu-content">
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Account Settings</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/page/account-settings-account" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/account-settings-security" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Security</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/account-settings-billing" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Billings &amp; Plans</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/account-settings-notifications" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/account-settings-connections" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Connections</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/profile" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/faq" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/knowledge-base" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Knowledge Base</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/pricing" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Pricing</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/license" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">License</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page/api-key" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">API Key</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Blog</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/page/blog/list" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">List</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/blog/detail" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Detail</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/blog/edit" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Edit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Mail Template</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Welcome</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Reset Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Verify Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Deactivate Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Promotional</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Miscellaneous</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/page/coming-soon" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Coming Soon</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/not-authorized" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Not Authorized</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/page/maintenance" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Maintenance</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/error" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Error</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                    <span class="menu-title text-truncate">Authentication</span>
                </a>
                <ul class="menu-content">
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Login</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/login-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/login-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Register</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/register-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/register-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/register-multisteps" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Multi-Steps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Forgot Password</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/forgot-password-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/forgot-password-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Reset Password</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/reset-password-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/reset-password-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Verify Email</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/verify-email-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/verify-email-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Two Steps</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="http://delivery/public/auth/two-steps-basic" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://delivery/public/auth/two-steps-cover" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/modal-examples" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg>
                    <span class="menu-title text-truncate">Modal Examples</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>User Interface</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/ui/typography" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-type"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg>
                    <span class="menu-title text-truncate">Typography</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/icons/feather" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    <span class="menu-title text-truncate">Feather</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    <span class="menu-title text-truncate">Card</span>
                    <span class="badge badge-light-success rounded-pill ms-auto me-1">New</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/card/basic" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Basic</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/card/advance" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Advance</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/card/statistics" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/card/analytics" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/card/actions" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Card Actions</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    <span class="menu-title text-truncate">Components</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/component/accordion" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Accordion</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/alert" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Alerts</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/avatar" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Avatar</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/badges" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/breadcrumbs" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Breadcrumbs</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/buttons" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/carousel" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Carousel</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/collapse" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Collapse</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/divider" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Divider</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/dropdowns" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Dropdowns</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/list-group" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">List Group</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/modals" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Modals</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/navs" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Navs Component</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/offcanvas" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Offcanvas</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/pagination" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Pagination</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/pill-badges" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Pill Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/pills" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Pills Component</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/popovers" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Popovers</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/progress" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Progress</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/spinner" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Spinner</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/tabs" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Tabs Component</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/timeline" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Timeline</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/toast" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Toasts</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/component/tooltips" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Tooltips</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span class="menu-title text-truncate">Extensions</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/ext-component/sweet-alerts" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Sweet Alert</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/block-ui" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">BlockUI</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/toastr" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Toastr</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/sliders" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Sliders</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/drag-drop" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Drag &amp; Drop</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/tour" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Tour</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/clipboard" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Clipboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/plyr" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Media Player</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/context-menu" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Context Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/swiper" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Swiper</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/tree" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Tree</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/ratings" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Ratings</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/ext-component/locale" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Locale</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    <span class="menu-title text-truncate">Page Layouts</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/page-layouts/collapsed-menu" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Collapsed Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page-layouts/full" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Layout Full</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page-layouts/without-menu" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Without Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page-layouts/empty" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Layout Empty</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/page-layouts/blank" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Layout Blank</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>Forms &amp; Tables</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                    <span class="menu-title text-truncate">Form Elements</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/form/input" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Input</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/input-groups" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Input Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/input-mask" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Input Mask</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/textarea" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Textarea</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/checkbox" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Checkbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/radio" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Radio</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/custom-options" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Custom Options</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/switch" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Switch</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/select" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Select</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/number-input" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Number Input</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/file-uploader" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">File Uploader</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/quill-editor" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Quill Editor</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/form/date-time-picker" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Date &amp; Time Picker</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/form/layout" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span class="menu-title text-truncate">Form Layout</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/form/wizard" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span class="menu-title text-truncate">Form Wizard</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/form/validation" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span class="menu-title text-truncate">Form Validation</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/form/repeater" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                    <span class="menu-title text-truncate">Form Repeater</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/table" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                    <span class="menu-title text-truncate">Table</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    <span class="menu-title text-truncate">Datatable</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/table/datatable/basic" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Basic</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/table/datatable/advance" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Advanced</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>Charts &amp; Maps</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                    <span class="menu-title text-truncate">Charts</span>
                    <span class="badge rounded-pill badge-light-danger ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="http://delivery/public/chart/apex" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Apex</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://delivery/public/chart/chartjs" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Chartjs</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="http://delivery/public/maps/leaflet" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                    <span class="menu-title text-truncate">Leaflet Maps</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Misc</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    <span class="menu-title text-truncate">Menu Levels</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Second Level 2.1</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                            <span class="menu-item text-truncate">Second Level 2.2</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Third Level 3.1</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Third Level 3.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item disabled ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                    <span class="menu-title text-truncate">Disabled Menu</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-laravel-folder-structure.html" class="d-flex align-items-center" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                    <span class="menu-title text-truncate">Documentation</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="https://pixinvent.ticksy.com/" class="d-flex align-items-center" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg>
                    <span class="menu-title text-truncate">Raise Support</span>
                </a>
            </li>

        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 903px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 472px;"></div></div></div>
</div>
<!-- END: Main Menu-->
