<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Create new Account
                    </div>
                    <div class="card-body">
                        <form action="{{ route("register") }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" value="{{ old("email") }}" id="email" type="email" class="form-control">
                                @error("email")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input name="username" value="{{ old("username") }}" id="username" type="text" class="form-control">
                                @error("username")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" value="{{ old("name") }}" id="name" type="text" class="form-control">
                                @error("name")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" value="{{ old("password") }}" id="password" type="password" class="form-control">
                                @error("password")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>