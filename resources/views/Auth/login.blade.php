<x-app-layout>

    <form action="{{route('login')}}" method="post">
        @csrf

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


        <button type="submit">Login</button>
    </form>
</x-app-layout>
