<x-layouts.backend.home>

    <x-slot:title>
        Appeals
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Appeals
                        <form action="{{ route('filter') }}" method="GET" class="row float-right">
                            @csrf
                            <div class="w-full">
                                <select name="status" class="form-control">
                                    <option value="2">All</option>
                                    <option value="1">Read</option>
                                    <option value="0">No read</option>
                                </select>
                            </div>
                            <div class="form-group ml-2">
                                <button class="btn btn-light"><i class="fa fa-filter text-info"></i></button>
                            </div>
                        </form>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appeals as $appeal)
                                    <tr>
                                        <th scope="row">{{ $appeal->id }}</th>
                                        <td>{{ $appeal->name }}</a></td>
                                        <td>{{ $appeal->email }}</td>
                                        <td>{{ $appeal->created_at }}</td>
                                        <td>
                                            @if ($appeal->status == 0)
                                                <span class="badge badge-success">No read</span>
                                            @else
                                                <span class="badge badge-warning">Read</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <a href="{{ route('appeals.show', $appeal->id) }}" type="submit"
                                                    class="btn btn-light text-info">Show</a>
                                                <form action="{{ route('appeals.destroy', $appeal->id) }}" method="POST" style="margin-left:100px;margin-top:-36px">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button class="btn btn-light text-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $appeals->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
