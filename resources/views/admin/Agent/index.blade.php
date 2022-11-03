@include('layouts.header')
<div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary " style="z-index: 0;">
        <!-- Brand Logo -->
        <span class="brand-link font-weight-light">Admin Panel</span>

        <!-- Sidebar -->
    @include('inc.admin.sidebar')
    <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" style="margin-top: 100px">
            <div class="container-fluid">
                <div class="container" style="column-count: 2;">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Գործակալներ</h2>

                    </div>
                    <button class="btn btn-primary" style="width: 135px;">
                        <a id="back-from-page" href="{{ route('admin.agent.creat') }}"> Ստեղծել նորը</a>
                    </button>
                </div>
                <div>
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item">{{__('titles.name')}}</li>
                        <li class="list-group-item">{{__('titles.profession')}}</li>
                        <li class="list-group-item">twitter</li>
                        <li class="list-group-item">facebook</li>
                        <li class="list-group-item">instagram</li>
                        <li class="list-group-item">img</li>

                    </ul>
                    @foreach($agents as $agent)

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.agent.show',$agent->id) }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item big-li">{{  $agent->name }}</li>
                                    <li class="list-group-item big-li">{{  $agent->profession }}</li>
                                    <li class="list-group-item big-li">{{ $agent->twitter }}</li>
                                    <li class="list-group-item big-li">{{  $agent->facebook}}</li>
                                    <li class="list-group-item big-li">{{  $agent->instagram }}</li>
                                    <li class="list-group-item big-li"><img
                                            src="{{asset('Agent/images/'.$agent->image_path)}}" alt="" class="img-fluid">
                                    </li>

                                </ul>

                            </a>
                        </div>

                    @endforeach

                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

@include('layouts.footer')

