<x-layouts.backend.home>

    <x-slot:title>
        About / {{ $person->name }}
    </x-slot:title>

    <div class="row mt-3">
        <div class="col-lg-5">
            <div class="card profile-card-2">
                <div class="card-body">
                    <div class="flex">
                        <img src="{{ asset('storage/' . $person->photo) }}" width="100%" style="border-radius:10px">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card profile-card-2">
                <div class="card-body">
                    <div class="flex mb-4">
                        <h5 class="card-title"><b class="text-info mr-2">Name:</b> {{ $person->name }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Surname:</b> {{ $person->surname }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Birthday:</b> {{ $person->birthday }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Age:</b> {{ $person->age }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Address:</b> {{ $person->address }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Job:</b> {{ $person->job }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Level:</b> {{ $person->level }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Phone:</b> {{ $person->phone }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Email:</b> {{ $person->email }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Email:</b> {{ $person->email }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Website:</b> {{ $person->website }}</h5>
                        <h5 class="card-title"><b class="text-info mr-2">Information:</b> <em>{{ $person->information }}</em>
                        </h5>
                    </div>

                    <div class="icon-block" style="font-size:20px">
                        <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                        <a href="javascript:void();"><i class="fa fa-instagram bg-instagram text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-telegram bg-telegram text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-youtube bg-youtube text-white"></i></a>
                        <a href="javascript:void();"> <i
                                class="fa fa-odnoklassniki bg-odnoklassniki text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-github bg-github text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-linkedin bg-linkedin text-white"></i></a>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-lg-5">
            <div class="card">
                <div class="flex p-2 mt-3">
                    <div class="col-lg-12">
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-light text-success">Edit</a>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="margin-left:80px;margin-top:-36px">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-light text-danger" onclick="alert('Are you delete this person?');">Delete</button>
                        </form>
                        <a href="{{ route('people.index') }}" class="btn btn-light text-warning" style="margin-left:180px;margin-top:-60px">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

</x-layouts.backend.home>
