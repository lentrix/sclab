<div class="main-nav">
    @auth
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/patients')}}">Patients</a>
    <a href="{{url('/consultations')}}">Consultations</a>
    <a href="{{url('/labs')}}">Lab Tests</a>
    <a href="{{url('/medicines')}}">Medicines</a>
    <a href="{{url('/logout')}}">Logout</a>
    @endAuth
</div>
