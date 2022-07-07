<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{ route('admin.home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Home
                </p>

            </a>
        </li>
        <li class="nav-item">

        <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Posts
                    @if(isset( $posts))
                                        <span class="badge badge-info right">{{ $posts->total() }}</span>

                    @endif
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('administrator.user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    User
{{--                    @if(isset( $users))--}}
{{--                        <span class="badge badge-info right">{{ $users->total() }}</span>--}}

{{--                    @endif--}}
                </p>

            </a>

        </li>

    </ul>
</nav>
