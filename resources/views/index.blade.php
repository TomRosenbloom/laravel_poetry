@extends('master')

@section('title')
    Laravel
@stop

@section('mainContent')

<h1>Volunteer service CRM and volunteer matching system</h1>

<h2>Components</h2>

<h3>Directory</h3>
<p>
  The <a href="{{url('directory')}}">Directory</a> is a publicly accessible front end
  allowing un-registered users to browse organisations and volunteer roles.
</p>
<h3>Volunteer portal</h3>
<p>
  The <a href="">Volunteer portal</a> allows a prospective volunteer
  to signup and create a profile that will enable the system to find suitable roles, and to apply
  for roles.
</p>
<h3>Organisation portal</h3>
<p>
  The <a href="">Organisation portal</a> allows organisations to register
  themselves and add roles. An organisation is registered by an 'organisation member' who must first
  sign up as a user and then create the organisation, or attach themselves to an existing organisation.
</p>
<h3>Voluntary Service portal</h3>
<p>
  Admin portal for CVS officers.
</p>

@stop
