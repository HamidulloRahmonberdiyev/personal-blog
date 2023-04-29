<x-layouts.backend.home>

    <x-slot:title>
       Roles
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Roles <a href="{{ route('roles.create') }}" type="submit" class="btn btn-light text-success mb-3 float-right">Create</a></h4>             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $role->id }}</th>
                                        <td class="text-uppercase">{{ $role->name }}</td>
                                        <td>{{ $role->created_at }}</td>
                                        <td>
                                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                                data-toggle="dropdown" href="javascript:void();"><i
                                                    class="fa fa-ellipsis-v text-info"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item"><a href="{{ route('roles.edit', $role->id) }}" class="btn btn-light text-success" style="font-size:15px"><i class="fa fa-pencil mr-2"></i> Edit</a></li>
                                                <li class="dropdown-item text-danger">
                                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button class="btn btn-light text-danger" style="font-size:15px"><i class="fa fa-trash mr-2"></i> Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
