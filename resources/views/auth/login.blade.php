<x-auth title="Register">
  <form class="form-default" method="POST" action="{{ route('users.signIn') }}">
    @csrf
    <div class="form-group">
      <label for="email" class="label-default">Email</label>
      <input type="text" name="email" id="email" placeholder="E-mail..." class="input-default" value="{{ old('email')}}">
    </div>
    <div class="form-group">
      <label for="password" class="label-default">Password</label>
      <input type="password" name="password" id="password" placeholder="Password..." class="input-default">
    </div>
    <button type="submit" class="btn-default">
      Sing In
    </button>
  </form>
  <p class="text-gray-200 block w-full max-w-[600px] mx-auto">Do you don't have an account yet? <a href="{{ route('users.register')}}" class="link-default">Click here</a></p>
</x-auth>