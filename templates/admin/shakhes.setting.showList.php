<div class="row smallSpace"></div>
<div class="content-body">
    <div id="panel-1" class="panel panel-default border-green">
        <div class="panel-heading bg-green">
            <h3 class="panel-title rtl">شاخص</h3>
        </div>
        <div class="panel-body">
            <div id="container">
                <a data-toggle="modal" data-target="#add" class="btn btn-success" href="">افزودن شاخص جدید</a>
                <br>
                <br>
                <table class="table table-striped table-bordered rtl">
                    <tr>
                        <td></td>
                        <td>نام شاخص</td>
                        <td>نوع</td>
                        <td>فرمول</td>
                        <td></td>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($shakhes as $k => $sh) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $sh['shakhes'] ?></td>
                            <td>
                                <?
                                switch ($sh['logic']['type']) {
                                    case 'equal':
                                        echo 'تساوی';
                                        break;
                                    case 'sum':
                                        echo 'مجموع';
                                        break;
                                    case 'divid':
                                        echo 'نسبت';
                                        break;
                                }

                                ?>
                            </td>
                            <td dir="ltr"><?= $sh['logic']['function'] ?></td>
                            <td>
                                <a class="btn btn-warning edit" data-shakhesid="<?= $k ?>" data-toggle="modal" data-target="#edit">ویرایش</a>
                                <a href="<?= RELA_DIR ?>admin/?component=shakhes&action=delete&id=<?= $sh['id'] ?>" class="btn btn-danger " onclick="return confirm('آیا مطمئن هستید؟')">حذف</a>
                                <a class="btn btn-info copy" data-shakhesid="<?= $k ?>" data-toggle="modal" data-target="#copy">کپی و ساخت شاخص جدید</a>





                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Edit -->
<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش </h4>
            </div>
            <div class="modal-body">
                <input id="shakhes_id" type="hidden">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <label>نام شاخص</label>

                </div>
                <input id="edit-shakhes" value="" class="form-control ">
                <br>
                <label class="col-md-12 col-xs-12 col-sm-12"> فرمول</label>
                <select class="type">
                    <option class="select-equal" value="equal" data-sh="<?= $k ?>">تساوی</option>
                    <option class="select-sum" value="sum" data-sh="<?= $k ?>">مجموع</option>
                    <option class="select-divid" value="divid" data-sh="<?= $k ?>">نسبت</option>
                </select>


                <div class="edit-equal">
                    <label class="edit-equal col-md-12 col-xs-12 col-sm-12">قلم</label><br>
                    <select class="edit-equal">
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                </div>



                <div class="row edit-sum">
                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام</label><br>
                    <select class="edit-sum" multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                </div>


                <div class="edit-divid">

                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام (صورت کسر)</label><br>
                    <select class=" edit-divid-up   " multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                    <br>


                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام (مخرج کسر)</label><br>
                    <select class=" edit-divid-down   " multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>

                </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>

                <button type="button" class="btn btn-success edit-submit">ویرایش</button>
            </div>
        </div>

    </div>
</div>

<!-- Copy -->

<div id="copy" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش </h4>
            </div>
            <div class="modal-body">
                <input id="shakhes_id" type="hidden">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <label>نام شاخص</label>

                </div>
                <input id="edit-shakhes" value="" class="form-control ">
                <br>
                <label class="col-md-12 col-xs-12 col-sm-12"> فرمول</label>
                <select class="type">
                    <option class="select-equal" value="equal" data-sh="<?= $k ?>">تساوی</option>
                    <option class="select-sum" value="sum" data-sh="<?= $k ?>">مجموع</option>
                    <option class="select-divid" value="divid" data-sh="<?= $k ?>">نسبت</option>
                </select>


                <div class="edit-equal">
                    <label class="edit-equal col-md-12 col-xs-12 col-sm-12">قلم</label><br>
                    <select class="edit-equal">
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                </div>



                <div class="row edit-sum">
                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام</label><br>
                    <select class="edit-sum" multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                </div>


                <div class="edit-divid">

                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام (صورت کسر)</label><br>
                    <select class=" edit-divid-up   " multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>
                    <br>


                    <label class=" col-md-12 col-xs-12 col-sm-12">اقلام (مخرج کسر)</label><br>
                    <select class=" edit-divid-down   " multiple>
                        <? foreach ($ghalam as $k => $gh) : ?>
                        <option value="<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                        <? endforeach ?>
                    </select>

                </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>

                <button type="button" class="btn btn-success edit-submit">ویرایش</button>
            </div>
        </div>

    </div>
</div>

<!-- Add -->
<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">افزودن شاخص جدید</h4>
            </div>
            <form action="#" method="POST">

                <div class="modal-body">

                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <label>نام شاخص</label>
                        <input id="add-shakhes" class="form-control ">
                    </div>

                    <label class="col-md-12 col-xs-12 col-sm-12"> فرمول</label>
                    <br>
                    <select id="add-select-box" class="col-md-6 col-xs-6 col-sm-6 pull-right">
                        <option>نوع عملیات را انتخاب کنید</option>
                        <option value="equal" class="select-equal">تساوی</option>
                        <option value="sum" class="select-sum">مجموع</option>
                        <option value="divid" class="select-divid">نسبت</option>
                    </select>
                    <div id="add-select-box-error" class="alert alert-danger col-md-6 col-xs-6 col-sm-6" style="padding: 6px 15px; display: none">لطفا یکی را انتخاب نمایید</div>
                    <br>
                    <br>

                    <div class="row">
                        <label class="add-equal col-md-12 col-xs-12 col-sm-12">قلم</label><br>
                        <select class="add-equal col-md-6 col-xs-6 col-sm-6 pull-right">
                            <? foreach ($ghalam as $k => $gh) : ?>
                            <option value="$g<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                            <? endforeach ?>
                        </select>
                    </div>

                    <div class="row">
                        <label class="add-sum col-md-12 col-xs-12 col-sm-12">اقلام</label><br>
                        <select class="add-sum col-md-6 col-xs-6 col-sm-6 pull-right" multiple>
                            <? foreach ($ghalam as $k => $gh) : ?>
                            <option value="$g<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                            <? endforeach ?>
                        </select>
                    </div>

                    <div class="row">
                        <label class="add-divid col-md-12 col-xs-12 col-sm-12">اقلام (صورت کسر)</label><br>
                        <select class="add-divid add-divid-up col-md-6 col-xs-6 col-sm-6 pull-right" multiple>
                            <? foreach ($ghalam as $k => $gh) : ?>
                            <option value="$g<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                            <? endforeach ?>
                        </select>
                        <br>
                        <label class="add-divid col-md-12 col-xs-12 col-sm-12">اقلام (مخرج کسر)</label><br>
                        <select class="add-divid add-divid-down col-md-6 col-xs-6 col-sm-6 pull-right" multiple>
                            <? foreach ($ghalam as $k => $gh) : ?>
                            <option value="$g<?= $gh['ghalam_id'] ?>"><?= $gh['ghalam'] ?></option>
                            <? endforeach ?>
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-success add-submit">تایید</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {




        /** add form*/
        $("#add .add-equal, #add .add-sum, #add .add-divid").hide();
        $('#add-select-box').change(function(e) {
            $("#add .add-equal, #add .add-sum, #add .add-divid").hide();
            $('.add-' + $(this).val()).show();
        });

        $('#add .add-submit').click(function(e) {
            e.preventDefault();
            $('#add #add-select-box-error').hide();

            var type = $('#add-select-box').val();

            if (["equal", "sum", "divid"].includes(type)) {
                $.ajax({
                    url: '/?component=shakhes&action=settingAdd',
                    method: 'post',
                    data: {
                        'type': type
                    },
                    success: function(data, status, xhr) {
                        //window.location = '/?component=shakhes&action=setting'
                    },
                    error: function(data, status, xhr) {
                        alert('مشکلی در سرور بوجود آمده است.');
                    }
                });
            } else {
                //alert('لطفا یکی از توابع را انتخاب نمایید');
                $('#add #add-select-box-error').show();
            }
        });

        $('#add-select-box').change(function() {
            $('#add #add-select-box-error').hide();
        });
        /** end add form */





        /** copy link  */
        $('#copy').on('show.bs.modal', function(event) {
            var a = $(event.relatedTarget);
            var shakhes_id = a.data('shakhesid');

            var modal = $(this);
            modal.find('#shakhes_id').val(shakhes_id);

            // before has a type 
            if (typeof shakhes[shakhes_id].logic !== 'undefined') {

                var type = shakhes[shakhes_id].logic.type;

                modal.find('.modal-title').text('ویرایش ' + shakhes[shakhes_id].shakhes);
                modal.find('#edit-shakhes').val(shakhes[shakhes_id].shakhes);

                modal.find('.type').val(type);
                modal.find('.type').trigger('change');


                if (type === 'equal') {
                    modal.find('.edit-equal').val(shakhes[shakhes_id].logic.ghalams);
                    modal.find('.edit-equal').trigger('change');
                } else if (type === 'sum') {
                    modal.find('.edit-sum').val(shakhes[shakhes_id].logic.ghalams);
                    modal.find('.edit-sum').trigger('change');
                } else if (type === 'divid') {
                    modal.find('.edit-divid-up').val(shakhes[shakhes_id].logic.ghalams.up);
                    modal.find('.edit-divid-up').trigger('change');

                    modal.find('.edit-divid-down').val(shakhes[shakhes_id].logic.ghalams.down);
                    modal.find('.edit-divid-down').trigger('change');
                }

            } else {
                modal.find('.edit-sum').hide();
                modal.find('.edit-divid').hide();
            }




        });

        $('#copy .add-submit').click(function(e) {

            var type = $('#copy').find('.type').val();
            var shakhes = $('#copy input[name="name"]').val();
            console.log('ssss ');
            console.log(type, shakhes);

            if (["equal", "sum", "divid"].includes(type)) {
                $.ajax({
                    url: '/?component=shakhes&action=settingAdd',
                    method: 'post',
                    data: {
                        'type': type,
                        'shakhes': shakhes
                    },
                    success: function(data, status, xhr) {
                        //window.location = '/?component=shakhes&action=setting'
                    },
                    error: function(data, status, xhr) {
                        alert('مشکلی در سرور بوجود آمده است.');
                    }
                });
            } else {
                //alert('لطفا یکی از توابع را انتخاب نمایید');
                $('#copy #copy-select-box-error').show();
            }
        });
        /** end copy */


        var shakhes = JSON.parse(`<?= json_encode($shakhes) ?>`);

        /** edit */
        $('#edit').on('show.bs.modal', function(event) {
            var a = $(event.relatedTarget);
            var shakhes_id = a.data('shakhesid');

            var modal = $(this);
            modal.find('#shakhes_id').val(shakhes_id);

            // before has a type 
            if (typeof shakhes[shakhes_id].logic !== 'undefined') {

                var type = shakhes[shakhes_id].logic.type;

                modal.find('.modal-title').text('ویرایش ' + shakhes[shakhes_id].shakhes);
                modal.find('#edit-shakhes').val(shakhes[shakhes_id].shakhes);

                modal.find('.type').val(type);
                modal.find('.type').trigger('change');


                if (type === 'equal') {
                    modal.find('.edit-equal').val(shakhes[shakhes_id].logic.ghalams);
                    modal.find('.edit-equal').trigger('change');
                } else if (type === 'sum') {
                    modal.find('.edit-sum').val(shakhes[shakhes_id].logic.ghalams);
                    modal.find('.edit-sum').trigger('change');
                } else if (type === 'divid') {
                    modal.find('.edit-divid-up').val(shakhes[shakhes_id].logic.ghalams.up);
                    modal.find('.edit-divid-up').trigger('change');

                    modal.find('.edit-divid-down').val(shakhes[shakhes_id].logic.ghalams.down);
                    modal.find('.edit-divid-down').trigger('change');
                }

            } else {
                modal.find('.edit-sum').hide();
                modal.find('.edit-divid').hide();
            }




        });

        $('.type').change(function() {

            var type = $(this).val();
            var shakhesId = $(this).parents('.modal').attr('id').replace('edit', '');
            // console.log(type, shakhesId);

            $(this).parents('.modal').find('.edit-equal ,.edit-sum , .edit-divid ').hide();
            $(this).parents('.modal').find('.edit-' + type).show();


            if (["equal", "sum", "divid"].includes(type)) {
                //
            }
        });

        function onlyUnique(value, index, self) {
            return self.indexOf(value) === index;
        }

        $('#edit .edit-submit').click(function(e) {
            e.preventDefault();
            $('#edit #edit-select-box-error').hide();

            var type = $('#edit .type').val();
            var modal = $('#edit .modal-body');
            var shakhes_id = modal.find('#shakhes_id').val();
            var shakhes = modal.find('#edit-shakhes').val();

            if (type === 'equal') {
                var ghalams = modal.find('.edit-equal').val();
            } else if (type === 'sum') {
                var ghalams = modal.find('.edit-sum').val();
            } else if (type === 'divid') {
                var ghalams = {
                    up: modal.find('.edit-divid-up').val().filter(onlyUnique),
                    down: modal.find('.edit-divid-down').val().filter(onlyUnique)
                };

            }

            console.log(shakhes_id, shakhes, type, ghalams);

        });
        /** end edit */

    });
</script>