<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.auditLog.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('order_access')
                <li class="nav-item">
                    <a href="{{ route("admin.orders.index") }}" class="nav-link {{ request()->is('admin/orders') || request()->is('admin/orders/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-sort nav-icon">

                        </i>
                        {{ trans('cruds.order.title') }}
                    </a>
                </li>
            @endcan
            @can('items_type_access')
                <li class="nav-item">
                    <a href="{{ route("admin.items-types.index") }}" class="nav-link {{ request()->is('admin/items-types') || request()->is('admin/items-types/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.itemsType.title') }}
                    </a>
                </li>
            @endcan
            @can('order_item_access')
                <li class="nav-item">
                    <a href="{{ route("admin.order-items.index") }}" class="nav-link {{ request()->is('admin/order-items') || request()->is('admin/order-items/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
                        {{ trans('cruds.orderItem.title') }}
                    </a>
                </li>
            @endcan
            @can('content_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-book nav-icon">

                        </i>
                        {{ trans('cruds.contentManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('content_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-categories.index") }}" class="nav-link {{ request()->is('admin/content-categories') || request()->is('admin/content-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.contentCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-tags.index") }}" class="nav-link {{ request()->is('admin/content-tags') || request()->is('admin/content-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.contentTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_page_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-pages.index") }}" class="nav-link {{ request()->is('admin/content-pages') || request()->is('admin/content-pages/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file nav-icon">

                                    </i>
                                    {{ trans('cruds.contentPage.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('contact_access')
                <li class="nav-item">
                    <a href="{{ route("admin.contacts.index") }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-comment-alt nav-icon">

                        </i>
                        {{ trans('cruds.contact.title') }}
                    </a>
                </li>
            @endcan
            @can('service_access')
                <li class="nav-item">
                    <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : '' }}">
                        <i class="fa-fw fab fa-servicestack nav-icon">

                        </i>
                        {{ trans('cruds.service.title') }}
                    </a>
                </li>
            @endcan
            @can('slider_access')
                <li class="nav-item">
                    <a href="{{ route("admin.sliders.index") }}" class="nav-link {{ request()->is('admin/sliders') || request()->is('admin/sliders/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.slider.title') }}
                    </a>
                </li>
            @endcan
            @can('pages_with_no_repeated_field_access')
                <li class="nav-item">
                    <a href="{{ route("admin.pages-with-no-repeated-fields.index") }}" class="nav-link {{ request()->is('admin/pages-with-no-repeated-fields') || request()->is('admin/pages-with-no-repeated-fields/*') ? 'active' : '' }}">
                        <i class="fa-fw fab fa-pagelines nav-icon">

                        </i>
                        {{ trans('cruds.pagesWithNoRepeatedField.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
