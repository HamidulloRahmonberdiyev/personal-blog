<x-layouts.backend.home>

    <x-slot:title>
        Home
    </x-slot:title>

    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('users.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $users->count() }} <span class="float-right"><i
                                    class="fa fa-users text-success"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar bg-success" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white h5">Users</p>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('portfolios.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $portfolios->count() }} <span class="float-right"><i
                                    class="zmdi zmdi-share text-warning"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar bg-warning" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white h5">Portfolios</p>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('appeals.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $appeals->count() }}<span class="float-right"><i
                                    class="fa fa-send text-info"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar bg-info" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white h5">Appeals</p>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('skills.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $skills->count() }}<span class="float-right"><i
                                    class="fa fa-slack text-danger"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar bg-danger" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white h5">Skills</p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
