<x-layout>
    <div class="container border border-3 border-green-500 rounded my-5 mx-auto">
     <form action="/register" method="POST" id="registration-form">
         @csrf
         <div class="form-group">
           <label for="username-register" class="text-muted mb-1 mt-1"><small>Username</small></label>
           <input value="{{old('username')}}" name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
           @error('username')
               <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
           @enderror
         </div>
 
         <div class="form-group">
           <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
           <input value="{{old('email')}}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
           @error('email')
               <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
           @enderror
         </div>
 
         <div class="form-group">
           <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
           <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
           @error('password')
               <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
           @enderror
         </div>
 
         <div class="form-group">
           <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
           <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
         </div>
 
         <div class="button text-center">
             <button type="submit" class="py-2 btn btn-lg btn-success btn-block my-3 text-center">Register</button>
         </div>
       </form>
    </div>
 
 </x-layout>