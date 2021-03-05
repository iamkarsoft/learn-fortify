<x-app-layout>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" class="border border-gray-100 bg-gray-200" id="name">
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">email</label>
            <input type="email" name="email" class="border border-gray-100 bg-gray-200" id="email">
             @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="password" class="border border-gray-100 bg-gray-200" id="password">
             @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
         <div class>
            <label for="">confirm password</label>
            <input type="password" name="password_confirmation" class="border border-gray-100 bg-gray-200" id="password_confirmation">
             @error('password_confirmation')
                <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</x-app-layout>
