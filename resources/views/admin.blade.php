@extends('layout.adminpage')
  @section('admin')
    <form action="add" method="post" enctype="multipart/form-data" files="true">
                         
        <table class="table table-bordered table-responsive">

          <tr>
            <td><label>ชื่อสินค้า</label></td>
            <td><input name="name" type="text" ><br></td>
          </tr>

          <tr>
            <td><label>ประเภท</label></td>
            <td>
              <select name="catagory">
                <option><--กรุณาเลือก--></option>
                <?php foreach ($countries as $row) { ?>
                  <option value="<?php echo $row->catagory_id ?>"><?php echo $row->catagory_name ?></option>
                <?php } ?>
                
              </select><br></td>
          </tr>

          <tr>
            <td><label>เริ่มประมูล</label></td>
            <td> <input id="date1" type="date" name="date1" value=""><br></td>
          </tr>

          <tr>
            <td><label>เวลาเริ่ม</label></td>
            <td><input name="starttime" type="text" > เช่น 10:00:00 เป็นต้น<br></td>
          </tr>

          <tr>
            <td><label>เวลาสิ้นสุด</label></td>
            <td><input name="overtime" type="text" > เช่น 10:00:00 เป็นต้น<br></td>
          </tr>

          <tr>
            <td><label>ราคาเริ่มต้น</label></td>
            <td><input name="pricestart" type="text" ><br></td>
          </tr>

          <tr>
            <td><label>ราคาบิตที่เพิ่ม</label></td>
            <td><input name="bidprice" type="text" ><br></td>
          </tr>

          <tr>
            <td><label>รูปสินค้า</label></td>
            <td><input type="file" name="images[]" multiple="true"><br></td>
          </tr>

          <tr>
            <td><label>รายละเอียดสินค้า</label></td>
            <td><input type="text" name="detailproduct"><br></td>
          </tr>

            @if(Session::has('error'))
              <div class="alert-box error">
              <h2>{!! Session::get('error') !!}</h2>
              </div>
            @endif

          <tr>
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <td colspan="2">
            <button name="submit" type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-save"></span> &nbsp; save
            </button>
          </tr>

        </table>

    </form>
  @stop