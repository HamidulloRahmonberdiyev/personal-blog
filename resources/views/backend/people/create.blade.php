<x-layouts.backend.home>

    <x-slot:title>
        About / Create
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create Person</div>
                    <hr>
                    <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="input-1" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Surname</label>
                            <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" id="input-1" placeholder="Surname">
                            @error('surname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Birthday</label>
                            <input type="text" name="birthday" value="{{ old('birthday') }}" class="form-control" id="input-1" placeholder="Birthday">
                            @error('birthday')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Age</label>
                            <input type="number" name="age" value="{{ old('age') }}" class="form-control" id="input-1" placeholder="Age">
                            @error('age')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Address</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="input-1" placeholder="Address">
                            @error('address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Job</label>
                            <input type="text" name="job" value="{{ old('job') }}" class="form-control" id="input-1" placeholder="Job">
                            @error('job')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Level</label>
                            <input type="text" name="level" value="{{ old('level') }}"  class="form-control" id="input-1" placeholder="Level">
                            @error('level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="input-1" placeholder="phone">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="input-1" placeholder="example.@gmail.com">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Website</label>
                            <input type="text" name="website" value="{{ old('website') }}" class="form-control" id="input-1" placeholder="www.example.net">
                            @error('website')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Information</label>
                            <textarea name="information" rows="5" class="form-control" id="input-1" placeholder="Information">{{ old('information') }}</textarea>
                            @error('information')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Photo</label>
                            <input type="file" name="photo" class="form-control" id="input-1" required>
                            @error('photo')
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
