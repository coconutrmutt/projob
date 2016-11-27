@extends('layout.loginpage')
  @section('login')
  <section id="mainContent">
  <div class="container-fluid">
    <form action="registerform" method="post" enctype="multipart/form-data" files="true">
      <table class="table table-bordered table-responsive">

        <h3>Login</h3>

          <tr>
            <td><label>ชื่อผู้ใช้</label></td>
            <td><input name="user" type="text" ><br></td>
          </tr>

          <tr>
            <td><label>Password</label></td>
            <td><input name="password" type="text" ><br></td>
          </tr>

          <tr>
            <td><label>E-mail</label></td>
            <td><input name="email" type="text" ><br></td>
          </tr>

            @if(Session::has('error'))
              <div class="alert-box error">
              <h2>{!! Session::get('error') !!}</h2>
              </div>
            @endif

          <tr>
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <td colspan="2">
            <a class="btn btn-info" href="<?php echo url('register'); ?>">
              <span class="glyphicon glyphicon-edit"></span>สมัครสมาชิก</a>
            <button name="submit" type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-save"></span> &nbsp; เข้าสู่ระบบ
            </button>
          </tr>
        </table>
    </form>
    </div>
  </section>
@stop