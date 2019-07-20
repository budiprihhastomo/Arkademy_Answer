<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARKADEMY BOOTCAMP</title>

    <!-- CSS Style -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-white shadow p-3 mb-5">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="https://www.arkademy.com/asset/img/logo%20arkademy-tech%20academy-03.png" class="img-fluid" style="height:50px">
                    <span class="font-weight-bold text-dark ml-4 mt-3 h3">ARKADEMY BOOTCAMP</span>
                </a>
            </div>
        </div>
    </header>

    <main role="main">
        <div class="py-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-right">
                            <button id="btn-add" class="btn btn-md btn-warning text-white mb-4">ADD</button>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                                <th>Name</th>
                                <th>Work</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            <?php foreach($table as $item) { ?>
                                <tr>
                                    <td><?=$item->nama?></td>
                                    <td><?=$item->work?></td>
                                    <td><?=$item->salary?></td>
                                    <td>
                                    <button class="btn btn-md btn-delete" onclick="deleteData('<?=$item->id?>')"><i class="fa fa-trash text-danger"></i></button>
                                    <button class="btn btn-md btn-edit" data-id="<?=$item->id?>" data-name="<?=$item->nama?>" data-work="<?=$item->id_work?>" data-salary="<?=$item->id_salary?>"><i class="fa fa-edit text-success"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalAddData" tabindex="-1" role="dialog" aria-labelledby="modalAddData" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddData">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?=form_open('save_data','id="form-add"')?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input id="name" name="nama" type="text" class="form-control" placeholder="Name ..." autocomplete="off">
                            </div>    
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="work" name="work" class="form-control">
                                    <option disabled selected>Work ...</option>
                                    <?php foreach($work as $item) { ?>
                                    <option value="<?=$item->id?>"><?=$item->name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="salary" name="salary" class="form-control">
                                    <option disabled selected>Salary ...</option>
                                    <?php foreach($salary as $item) { ?>
                                    <option value="<?=$item->id?>"><?=$item->salary?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    <?=form_close()?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning text-white btn-action" onclick="addData()">ADD</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalUpdateData" tabindex="-1" role="dialog" aria-labelledby="modalUpdateData" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateData">EDIT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?=form_open('save_data','id="form-edit"')?>
                    <input id="id" name="id" type="hidden">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input id="e_nama" name="e_nama" type="text" class="form-control" placeholder="Name ..." autocomplete="off">
                            </div>    
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="e_work" name="e_work" class="form-control">
                                    <option disabled selected>Work ...</option>
                                    <?php foreach($work as $item) { ?>
                                    <option value="<?=$item->id?>"><?=$item->name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="e_salary" name="e_salary" class="form-control">
                                    <option disabled selected>Salary ...</option>
                                    <?php foreach($salary as $item) { ?>
                                    <option value="<?=$item->id?>"><?=$item->salary?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                <?=form_close()?>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning text-white" onclick="updateData()">EDIT</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <span>Created With <i class="fa fa-heart text-danger"></i> By Budi Prih Hastomo</span>
        </div>
    </footer>
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/sweetalert.min.js')?>"></script>

    <script>
    $(document).ready(function(){
        $('#btn-add').click(function(){
            $('#modalAddData').modal('toggle')
        })

        $('.btn-edit').click(function(){
            var obj = {}
            obj.id = $(this).data('id')
            obj.nama = $(this).data('name')
            obj.work = $(this).data('work')
            obj.salary = $(this).data('salary')
            $('#modalUpdateData').on('show.bs.modal', function () {
              $('#id').val(obj.id)
              $('#e_nama').val(obj.nama)
              $('#e_work').val(obj.work).change()
              $('#e_salary').val(obj.salary).change()
            }).modal('toggle')
        })
    })

    const addData = ()=>{
        var form = $('#form-add')
        $.ajax({
            url:'<?=base_url('save_data')?>',
            dataType:'json',
            type: 'post',
            data: form.serialize(),
            success: function(res){
                alert(res.msg)
                setTimeout(function(){
                    location.reload()
                }, 300); 
            }
        })
    }
    
    const updateData = ()=>{
        var form = $('#form-edit')
        $.ajax({
            url:'<?=base_url('save_data')?>',
            dataType:'json',
            type: 'post',
            data: form.serialize(),
            success: function(res){
                alert(res.msg)
                setTimeout(function(){
                    location.reload()
                }, 300); 
            }
        })
    }

    const deleteData = (id)=>{
        $.ajax({
            url:'<?=base_url('delete_data')?>',
            dataType:'json',
            type: 'post',
            data: {id:id},
            success: function(res){
                alert(res.msg)
                setTimeout(function(){
                    location.reload()
                }, 300); 
            }
        })
    }
    </script>
</html>