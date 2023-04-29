<x-layouts.backend.home>

    <x-slot:title>
       About
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">People <a href="{{ route('people.create') }}" type="submit" class="btn btn-light text-success mb-3 float-right">Create</a></h4>             
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr class="text-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($people as $person)
                                    <tr>
                                        <th scope="row">{{ $person->id }}</th>
                                        <td><a href="{{ route('people.edit', $person->id) }}"> {{ $person->name }}</a></td>
                                        <td>{{ $person->surname }}</td>
                                        <td>{{ $person->email }}</td>
                                        <td><img src="{{ asset('storage/' . $person->photo) }}" width="100" alt="" style="border-radius:50%"></td>
                                        <td>
                                            <a href="{{ route('people.show', $person->id) }}" type="submit" class="btn btn-light text-info">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $people->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
