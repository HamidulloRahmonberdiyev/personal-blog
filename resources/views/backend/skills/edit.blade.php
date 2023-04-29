<x-layouts.backend.home>

    <x-slot:title>
        Skills / Edit / {{ $skill->name }}
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Edit / {{ $skill->name }}</div>
                    <hr>
                    <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ $skill->name }}" class="form-control" id="input-1" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Description</label>
                            <textarea rows="5" name="description" class="form-control" placeholder="Description">{{ $skill->description }}</textarea>
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
