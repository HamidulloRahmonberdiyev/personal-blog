<x-layouts.backend.home>

    <x-slot:title>
        Users / Edit / {{ $user->name }}
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Edit / {{ $user->name }}</div>
                    <hr>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="input-1" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Email</label>
                            <input type="email" name="email"  value="{{ $user->email }}" class="form-control" id="input-1" placeholder="Email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Password</label>
                            <input type="password" name="password" class="form-control" id="input-1" placeholder="Password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="input-1" placeholder="Confirm Password">
                            @error('confirm_password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Role</label>
                            <select name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : ''}}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
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
