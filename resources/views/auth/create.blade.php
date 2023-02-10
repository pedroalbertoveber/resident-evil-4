<x-auth title="Register">
  <form class="w-full max-w-[600px] mx-auto flex flex-col gap-2">
    <div class="form-group">
      <label for="name" class="label-default">Name</label>
      <input type="text" name="name" id="name" placeholder="Name..." class="input-default">
    </div>
    <div class="form-group">
      <label for="email" class="label-default">Email</label>
      <input type="text" name="email" id="email" placeholder="E-mail..." class="input-default">
    </div>
    <div class="form-group">
      <label for="password" class="label-default">Password</label>
      <input type="password" name="password" id="password" placeholder="Password..." class="input-default">
    </div>
    <div class="form-group">
      <label for="confirmpassword" class="label-default">Confirm Password</label>
      <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password..." class="input-default">
    </div>
    <button type="submit" class="btn-default">
      Sing Up
    </button>
  </form>
  <p class="text-gray-200 block w-full max-w-[600px] mx-auto">Do you already have an account? <a href="#" class="link-default">Click here</a></p>
</x-auth>