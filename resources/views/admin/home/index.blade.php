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
                <div class="container" style="column-count: 2;">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Գլխավոր</h2>

                    </div>
                    <button class="btn btn-primary" style="width: 135px;">
                        <a id="back-from-page" href="{{ route('admin.home.creat') }}"> Ստեղծել նորը</a>
                    </button>
                </div>
                <div>
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item home-text">{{__('titles.text')}}</li>
                        <li class="list-group-item home-img">{{__('titles.img')}}</li>

                    </ul>
                    @foreach($homes as $home)

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.home.show',$home->id) }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item big-li home-text">{{  $home->text }}</li>
                                    <li class="list-group-item big-li home-img"><img
                                            src="{{asset('Home/images/'.$home->image_path)}}" alt="" class="img-fluid" >
                                    </li>


                                </ul>

                            </a>
                        </div>

                    @endforeach

                </div>
            </div><!--/. container-fluid -->

        </section>
        <section class="content" >
            <div class="container-fluid">
                <div class="container" style="column-count: 2;">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Սլայդերներ</h2>

                    </div>
                    <button class="btn btn-primary" style="width: 135px;">
                        <a id="back-from-page" href="{{ route('admin.homeSlider.creat') }}"> Ստեղծել նորը</a>
                    </button>
                </div>
                <div>
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item">{{__('titles.text')}}</li>
                        <li class="list-group-item">{{__('titles.img')}}</li>

                    </ul>
                    @foreach($homeSliders as $homeSlider)

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.homeSlider.show',$homeSlider->id) }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item big-li">{{  $homeSlider->text }}</li>
                                    <li class="list-group-item big-li"><img
                                            src="{{asset('HomeSlider/images/'.$homeSlider->image_path)}}" alt="" class="img-fluid" style="width: 100%;height: 200px">
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

