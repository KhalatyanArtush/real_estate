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
    <div class="content-wrapper" style="column-count: 2 ; margin-top: 100px">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" >
            <div class="container-fluid">
                <div class="container" >

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>{{__('titles.about')}}</h2>
                    </div>
                </div>
                <div>
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item home-text">{{__('titles.title')}}</li>
                        <li class="list-group-item home-text">{{__('titles.text')}}</li>
                        <li class="list-group-item home-img">{{__('titles.img')}}</li>

                    </ul>

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.about.edit',$about->id) }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item big-li home-text">{{  $about->title }}</li>
                                    <li class="list-group-item big-li home-text">{{  $about->text }}</li>
                                    <li class="list-group-item big-li home-img"><img
                                            src="{{asset('About/images/'.$about->image_path)}}" alt="" class="img-fluid" >
                                    </li>


                                </ul>

                            </a>
                        </div>

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

