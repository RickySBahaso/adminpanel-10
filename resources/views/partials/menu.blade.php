<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('app_connection_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/*") ? "c-show" : "" }} {{ request()->is("admin/*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.appConnection.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('app_anggaran_access')
                        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/detail-pagus*") ? "c-show" : "" }} {{ request()->is("admin/data-realisasis*") ? "c-show" : "" }}">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-university c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.appAnggaran.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('detail_pagu_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.detail-pagus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/detail-pagus") || request()->is("admin/detail-pagus/*") ? "c-active" : "" }}">
                                            <i class="fa-fw far fa-eye c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.detailPagu.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('data_realisasi_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.data-realisasis.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/data-realisasis") || request()->is("admin/data-realisasis/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.dataRealisasi.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('app_banpem_access')
                        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/detailbanpems*") ? "c-show" : "" }}">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.appBanpem.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('detailbanpem_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.detailbanpems.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/detailbanpems") || request()->is("admin/detailbanpems/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.detailbanpem.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('master_data_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/provinsis*") ? "c-show" : "" }} {{ request()->is("admin/kabupatens*") ? "c-show" : "" }} {{ request()->is("admin/kecamatans*") ? "c-show" : "" }} {{ request()->is("admin/desas*") ? "c-show" : "" }} {{ request()->is("admin/satkers*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-database c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.masterData.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('provinsi_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.provinsis.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/provinsis") || request()->is("admin/provinsis/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chess-king c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.provinsi.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('kabupaten_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.kabupatens.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/kabupatens") || request()->is("admin/kabupatens/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chess-rook c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.kabupaten.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('kecamatan_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.kecamatans.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/kecamatans") || request()->is("admin/kecamatans/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-project-diagram c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.kecamatan.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('desa_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.desas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/desas") || request()->is("admin/desas/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-child c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.desa.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('satker_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.satkers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/satkers") || request()->is("admin/satkers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-graduation-cap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.satker.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>