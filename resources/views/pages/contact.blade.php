@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<form style="margin-top: 100px; margin-left:100px;">
    <div class="form-group">
      <label for="exampleInputName1">Name</label>
      <input type="email" class="form-control" id="exampleInputName1">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="password" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="text-align: right;">Send Message</button>
  </form>
  <footer class="footer">
    <p>Copyright @ Food. All reserve right</p>
</footer>
@stop