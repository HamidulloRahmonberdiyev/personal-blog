<x-layouts.backend.home>

    <x-slot:title>
        Appeals / {{ $appeal->name }}
    </x-slot:title>

    <div class="row mt-3">

        <div class="col-lg-7">
            <div class="card profile-card-2">
                <div class="card-body">
                    <div class="flex mb-5">
                        <h5 class="card-title"><b class="text-info mr-2">Name:</b> {{ $appeal->name }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Email:</b> {{ $appeal->email }}</h5>
                    </div>
                    <div class="icon-block mb-5">
                        <h5 class="card-title text-center">{{ $appeal->subject }}</h5>
                        <hr>
                        <p class="text-info">{{ $appeal->message }}</p>
                    </div>
                    <div class="icon-block mb-2">
                        <form action="{{ route('appeals.destroy', $appeal->id) }}" method="POST" style="margin-top:-16px">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-light text-danger" onclick="alert('Are you delete this person?');">Delete</button>
                        </form>
                        @if ($appeal->status == 0)                          
                        <form action="{{ route('appeals.update', $appeal->id) }}" method="POST" style="margin-left:100px;margin-top:-36px">
                            @method("PUT")
                            @csrf
                            <button type="submit" class="btn btn-light text-warning">Checked</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layouts.backend.home>
