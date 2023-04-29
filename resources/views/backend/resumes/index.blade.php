<x-layouts.backend.home>

    <x-slot:title>
       Resumes
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Resumes <a href="{{ route('resumes.create') }}" type="submit" class="btn btn-light text-success mb-3 float-right">Create</a></h4>             
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resumes as $resume)
                                    <tr>
                                        <th scope="row">{{ $resume->id }}</th>
                                        <td><a href="{{ route('resumes.edit', $resume->id) }}"> {{ $resume->title }}</a></td>
                                        <td>{{ $resume->created_at }}</td>
                                        <td>
                                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                                data-toggle="dropdown" href="javascript:void();"><i
                                                    class="fa fa-ellipsis-v text-info"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item"><a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-light text-success" style="font-size:15px"><i class="fa fa-pencil mr-2"></i> Edit</a></li>
                                                <li class="dropdown-item text-danger">
                                                    <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST">
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
                            {{ $resumes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
