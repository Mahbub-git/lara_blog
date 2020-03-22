@extends('admin.master')
@section('title')
 Ajax test
@endsection
@section('body')
<table>
    <tr>
        <td>Country</td>
        <td>
        <select name="country" id ="country" class="form-control dynamic" data-dependent="state">
            <option>select</option>
            @foreach($countries as $country)
            <option value="">{{$country->country}}</option>
        @endforeach
        </select>
        </td>
    </tr>
     <tr>
        <td>State</td>
        <td>
        <select name="country" id ="state" class="form-control dynamic" data-dependent="city">
            <option>select</option>
        </select>
        </td>
    </tr>
     <tr>
        <td>City</td>
        <td>
        <select name="country" id ="city" class="form-control dynamic">
            <option>select</option>
        </select>
        </td>
        @csrf
    </tr>
</table>
@endsection