<x-layouts.backend.home>

    <x-slot:title>
       Portfolios
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolios <a href="{{ route('portfolios.create') }}" type="submit" class="btn btn-light text-success mb-3 float-right">Create</a></h4>             
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kategoriya</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr>
                                        <th scope="row">{{ $portfolio->id }}</th>
                                        <td><a href="{{ route('portfolios.edit', $portfolio->id) }}"> {{ $portfolio->name }}</a></td>
                                        <td>{{ $portfolio->category->name }}</td>
                                        <td><img src="{{ asset('storage/' . $portfolio->photo) }}" width="60" alt=""></td> 
                                        <td>
                                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                                data-toggle="dropdown" href="javascript:void();"><i
                                                    class="fa fa-ellipsis-v text-info"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item"><a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-light text-success" style="font-size:15px"><i class="fa fa-pencil mr-2"></i> Edit</a></li>
                                                <li class="dropdown-item text-danger">
                                                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
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
                            {{ $portfolios->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
