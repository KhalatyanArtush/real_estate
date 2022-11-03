<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item">
            <a href="{{ route('admin.home.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Home')}}
                    <span class="badge badge-info right">{{ count($homes ) }}</span>
                </p>

            </a>
        </li>
        <li class="nav-item">

            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Posts')}}
                    <span class="badge badge-info right">{{ count($posts ) }}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.agent.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Agents')}}
                    <span class="badge badge-info right">{{ count($agents )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.buyRent.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Action_type')}}
                    <span class="badge badge-info right">{{ count($buyRents )}}</span>

                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.region.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Regions')}}
                    <span class="badge badge-info right">{{ count($regions )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.city.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Cities')}}
                    <span class="badge badge-info right">{{ count($citys )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.district.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Districts')}}
                    <span class="badge badge-info right">{{ count($districts )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.village.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Villages')}}
                    <span class="badge badge-info right">{{ count($villages )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.street.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Streets')}}
                    <span class="badge badge-info right">{{ count($streets )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.type.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Type')}}
                    <span class="badge badge-info right">{{ count($types )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.buildingType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Building_type')}}
                    <span class="badge badge-info right">{{ count($buildingTypes )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.repair.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Repair')}}
                    <span class="badge badge-info right">{{ count($repairs )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.ourServise.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Servises')}}
                    <span class="badge badge-info right">{{ count($ourServises )}}</span>
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.contacts.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Contacts')}}
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.about.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Abouts')}}
                </p>

            </a>

        </li>

    </ul>
</nav>
