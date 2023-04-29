<x-layouts.backend.home>

    <x-slot:title>
       Users
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users <a href="{{ route('users.create') }}" type="submit" class="btn btn-light text-success mb-3 float-right">Create</a></h4>             
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td><a href="{{ route('users.edit', $user->id) }}"> {{ $user->name }}</a></td>
                                        <td>{{ $user->email }}</td> 
                                        <td><button class="btn btn-light {{ $user->role->name == 'admin' ? 'text-info' : ''}}">{{ $user->role->name }}</button></td>
                                        <td>
                                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                                data-toggle="dropdown" href="javascript:void();"><i
                                                    class="fa fa-ellipsis-v text-info"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-light text-success" style="font-size:15px"><i class="fa fa-pencil mr-2"></i> Edit</a></li>
                                                <li class="dropdown-item text-danger">
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
