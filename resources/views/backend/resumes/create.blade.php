<x-layouts.backend.home>

    <x-slot:title>
        Resumes / Create
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create Resume</div>
                    <hr>
                    <form action="{{ route('resumes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="input-1" placeholder="Title">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Information</label>
                            <textarea name="information" rows="5" id="editor" class="form-control" placeholder="Information...">{{ old('information') }}</textarea>
                            @error('information')
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
