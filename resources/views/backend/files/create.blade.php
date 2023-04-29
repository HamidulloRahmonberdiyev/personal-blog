<x-layouts.backend.home>

    <x-slot:title>
        Files / Create
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create File</div>
                    <hr>
                    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Role Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">File</label>
                            <input type="file" name="file_url" class="form-control">
                            @error('file_url')
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
