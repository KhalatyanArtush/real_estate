@include('layouts.header')

{{--<div class="os-padding">--}}
<!-- Sidebar Menu -->
{{--        @include('inc.admin.sidebar')--}}

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
                        <h2>Շրջաններ</h2>

                    </div>
                    <button  class="btn btn-primary" style="width: 135px;" >
                        <a id="back-from-page" href="{{ route('admin.repair.creat') }}" > Ստեղծել նորը</a>
                    </button>
                </div>
                <div >

                    @foreach($repairs as $repair)

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.repair.show',$repair->id) }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item big-li">{{  $repair->title }}</li>

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

