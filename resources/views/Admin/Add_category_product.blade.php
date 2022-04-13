@extends('Admin.dashboard_layout')
@section('Add_category_product')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm danh mục sản phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="email" name="Category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    <textarea class="form-control" style="resize:none row='5'" id="comment" name="Category_name" required="" > </textarea>
                </div>
                
                <div class="form-group">
                <select class="form-control input-lg" >
                    <option> Ẩn </option>
                    <option> Hiển thị </option>
                </select>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
            </div>

        </div>
    </section>
</div>
@endsection