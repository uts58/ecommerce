<div class="top_wrapper  clearfix" style="background-color: #c8cbce">
 <div class="top_bar" >

   <div class="contact floatleft">
     <div class="phone floatleft">

     </div>

  </div>
		<div class="top_menue floatright" >
		 <ul>
		    @if(session()->has('uname'))
		    <li>welcome, {{session('uname')}}</li>

            @if(session('access')==1)
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('cprofile')}}">My Account</a></li>
			          <li><a href="{{route('cart')}}">Cart</a></li>
            @elseif(session('access')==2)
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('sprofile')}}">My Account</a></li>
                <li><a href="{{route('add')}}">Add Products</a></li>
                <li><a href="{{route('edit')}}">Edit Products</a></li>
                     <li><a href="{{route('edit')}}">Edit Products</a></li>
            @elseif(session('access')==0)
                <li><a href="{{route('adminController.home')}}">Home</a></li>
            @endif
             <li><a href="{{route('logout')}}">logout</a></li>
         @else

         <li><a href="{{route('login')}}">Login</a></li>
         <li><a href="{{route('register')}}">Register</a></li>

         @endif


            </ul>
     </div>


</div>
</div>
