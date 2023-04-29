<x-layouts.backend.home>

    <x-slot:title>
        Skills / Create
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create Skill</div>
                    <hr>
                    <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="input-1" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Description</label>
                            <textarea rows="5" name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Photo</label>
                            <input type="file" name="photo" class="form-control" id="input-1">
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
