<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        <div class="container">
            <form action="{{ route('input.imageGallery') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <label style="font-style: italic;">Input File</label>
                        <input type="file" name="img_file" id="img_file" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <label style="font-style: italic;">Description</label>
                        <input type="text" placeholder="description" id="img_description" name="img_description" class="form-control">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <label style="font-style: italic;">Upload to</label>
                        <select name="img_category" id="img_category" class="form-control">
                            <option value="" selected hidden>- Type -</option>
                            <option value="residence">Residence</option>
                            <option value="building">Building</option>
                            <option value="retail">Retail</option>
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br><p>
                            <button type="submit" class="btn btn-primary">Input</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html>
<script>

</script>