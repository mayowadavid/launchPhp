<div class="dashLeft-menu">
    <ul>
        @if(\App\Helpers\Helper::instance()->getPageAccessByModule('dashboard_statics'))
        <li>
            <a href="{{route('dashboard.index')}}" {{ request()->routeIs('dashboard.index') ? "class=active" : '' }}>
                <img src="{{asset('img/icons/menu/home.svg')}}" alt="Dashboard">
                <span>Dashboard</span>
            </a>
        </li>
        @endif
        @if(Crypt::decrypt(session('user:role')) == 1)
            @if(\App\Helpers\Helper::instance()->getPageAccessByModule('organisation_show'))
            <li>
                <a href="{{route('admin.organisation.index')}}" {{ request()->routeIs('admin.organisation.index') ? "class=active" : '' }}>
                    <img src="{{asset('img/icons/menu/beg.svg')}}" alt="Organisations">
                    <span>Organisaties</span>
                </a>
            </li>
            @endif
            @if(\App\Helpers\Helper::instance()->getPageAccessByModule('license_show'))
            <li>
            <a href="{{route('admin.license.index')}}" {{ request()->routeIs('admin.license.index') ? "class=active" : '' }}>
                <img src="{{asset('img/icons/menu/cogs.svg')}}" alt="Settings">
                <span>Licenties</span>
            </a>
            </li>
            @endif
        @endif
        @if(Crypt::decrypt(session('user:role')) == 2 && Crypt::decrypt(session('user:role')) == 3 && \App\Helpers\Helper::instance()->getPageAccessByModule('schedule_show'))
        <li>
            <a href="{{route('scheduler.index')}}" {{ request()->routeIs('scheduler.index') ? "class=active" : '' }}>
                <img src="{{asset('img/icons/menu/calender.svg')}}" alt="Scheduler">
                <span>Rooster</span>
            </a>
        </li>
        @endif
        @if(Crypt::decrypt(session('user:role')) == 2 && \App\Helpers\Helper::instance()->getPageAccessByModule('location_show'))
        <li>
            <a href="{{route('manager.location.index')}}" {{ request()->routeIs('manager.location.index') ? "class=active" : '' }}>
                <img src="{{asset('img/icons/menu/location.svg')}}" alt="Locations">
                <span>Locaties</span>
            </a>
        </li>
            @if(\App\Helpers\Helper::instance()->getPageAccessByModule('user_show'))
            <li>
                <a href="{{route('manager.users.index')}}" {{ request()->routeIs('manager.users.index') ? "class=active" : '' }}>
                    <img src="{{asset('img/icons/menu/mans.svg')}}" alt="Users">
                    <span>Gebruikers</span>
                </a>
            </li>
            @endif
            @if(\App\Helpers\Helper::instance()->getPageAccessByModule('group_show'))
            <li>
                <a href="{{route('manager.group.index')}}" {{ request()->routeIs('manager.group.index') ? "class=active" : '' }}>
                    <img src="{{asset('img/icons/menu/note.svg')}}" alt="Groups">
                    <span>Groepen</span>
                </a>
            </li>
            @endif
            @if(\App\Helpers\Helper::instance()->getPageAccessByModule('lesson_show'))
            <li>
                <a href="{{route('manager.lesson.index')}}" {{ request()->routeIs('manager.lesson.index') ? "class=active" : '' }}>
                    <img src="{{asset('img/icons/menu/clock.svg')}}" alt="Lessons">
                    <span>Lessen</span>
                </a>
            </li>
            @endif
        @endif
        @if(\App\Helpers\Helper::instance()->getPageAccessByModule('user_show'))
        <li>
            <a href="{{route('settings.index')}}" {{ request()->routeIs('settings.index') ? "class=active" : '' }}>
                <img src="{{asset('img/icons/menu/cogs.svg')}}" alt="Settings">
                <span>Settings</span>
            </a>
        </li>
        @endif
    </ul>
</div>