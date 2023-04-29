<x-layouts.backend.home>

    <x-slot:title>
        Roles / Edit / {{ $role->name }}
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Edit Role</div>
                    <hr>
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ $role->name }}" class="form-control" id="input-1" placeholder="Role Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light text-success px-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</x-layouts.backend.home>
