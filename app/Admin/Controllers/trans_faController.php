<?php

namespace App\Admin\Controllers;

use App\Models\dep_gedung;
use App\Models\FacilityActivity;
use App\Models\mt_bagian;
use App\Models\trans_fa;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class trans_faController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'trans_fa';
    private $idx;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new trans_fa());

        $grid->column('id', __('Id'));
        $grid->column('tahun', __('Tahun'));
        $grid->column('keterangan', __('Keterangan'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(trans_fa::findOrFail($id));
        $this->idx=$id;
        $show->field('id', __('Id'));
        $show->field('tahun', __('Tahun'));
        $show->field('keterangan', __('Keterangan'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        foreach (FacilityActivity::all() as $row){
            $show->gender()->using(['Female', 'Male']);
            $show->field('id'.$row->id, ($row->nama_fa))->as(function ($id) {
                $data = dep_gedung::where('id_trans_fa',$this->idx)
                    ->first();
            });
        }

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new trans_fa());
        $form->tab('Basic Data FA', function ($form) {
            $form->number('tahun', __('Tahun'))->default(date('Y'))->required();
            $form->textarea('keterangan', __('Keterangan'))->required();
        });

        $form->tab('DEP Gedung', function ($form) {
            $form->hasMany('dep_gedung','dep_gedung', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->text('nama_gedung','nama_gedung')->required();
                $form->number('luas','luas')->required();
                $form->currency('harga','harga per meter')->required();
                $form->number('masa_hidup','masa_hidup (th)')->required();
            });
        });
        $form->tab('DEP Alat Non Medis', function ($form) {
            $form->hasMany('dep_alat_non','dep_alat_non_medis', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->text('nama_barang','nama_barang')->required();
                $form->number('jumlah','jumlah')->required();
                $form->text('satuan','satuan')->required();
                $form->currency('harga','harga beli satuan')->required();
                $form->number('masa_hidup','masa_hidup (th)')->required();
            });
        });

        $form->tab('DEP Kendaraan', function ($form) {
            $form->hasMany('dep_kendaraan','dep_kendaraan', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->text('nama_barang','nama_kendaraan')->required();
                $form->number('jumlah','jumlah')->required();
                $form->currency('harga','harga beli satuan')->required();
                $form->number('masa_hidup','masa_hidup (th)')->required();
            });
        });
        $form->tab('Gaji SDM Non Medis', function ($form) {
            $form->hasMany('gaji','gaji', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->text('nama_pegawai','nama_pegawai')->required();
                $form->currency('slip_gaji','slip_gaji')->required();
                $form->currency('intensif_lain','intensif_lain')->required();
            });
        });
        $form->tab('BHP non Medis', function ($form) {
            $form->hasMany('bhp','bhp non medis', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->text('nama_barang','nama_barang')->required();
                $form->number('jumlah','jumlah')->required();
                $form->text('satuan','satuan')->required();
                $form->currency('harga','harga beli satuan')->required();
            });
        });
        $form->tab('BI Umum', function ($form) {
            $form->hasMany('bi_umum','bi_umum', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->select('bulan','bulan')->options(bulan())->required();
                $form->currency('listrik','listrik')->required();
                $form->currency('telepon','telepon')->required();
                $form->currency('air','air')->required();
            });
        });
        $form->tab('BI Lain2', function ($form) {
            $form->hasMany('bi_lain','bi_lain', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->select('bulan','bulan')->options(bulan())->required();
                $form->text('biaya_untuk','biaya_untuk')->required();
                $form->currency('jumlah_biaya','jumlah_biaya')->required();
            });
        });
        $form->tab('BI Pemeliharaan', function ($form) {
            $form->hasMany('bi_pemeliharaan','bi_pemeliharaan', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->select('bulan','bulan')->options(bulan())->required();
                $form->text('biaya_untuk','biaya_untuk')->required();
                $form->currency('jumlah_biaya','jumlah_biaya')->required();
            });
        });
        $form->tab('Jumlah Cost Driver', function ($form) {
            $form->hasMany('jml_cost_driver','Jumlah Cost Driver Seluruh RS', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')
                    ->setElementClass('ganti')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->number('jumlah','jumlah_cost_driver')
                    ->setElementClass('diganti')->required();
            });
        });
        $form->tab('Beban FA ke Unit', function ($form) {
            $form->hasMany('beban_fa_ke_unit','Beban FA ke Unit', function (Form\NestedForm $form) {
                $form->select('id_facility_activity','Facility Activity')
                    ->setElementClass('ganti')->options(FacilityActivity::pluck('nama_fa','id'))->required();
                $form->select('id_mt_bagian','Bagian')->options(mt_bagian::pluck('nama_bagian','id'))->load('jumlah_cost_driver','/test')->required();
                $form->number('jumlah_cost_driver','jumlah_cost_driver')
                    ->setElementClass('diganti')->required();
            });
        });

        $url=url("api");
        $script = <<<EOT

        $(document.body).ready(function(){
            $(document.body).on('change','.ganti', function () {
                var q=$(this).val();
                var inputan=$(this).closest('.fields-group');
                var diganti=inputan.find('.diganti');
                var label=diganti.closest('.form-group');
                $.ajax({
                    url: "{$url}/getFA",
                    method: "POST",
                    data:{q:q},
                    success: function(result){
                        label.find("label").html(result[0].cost_driver);
                    }
                });
            });
            $(document.body).trigger('change','.ganti');
        });
EOT;
        Admin::script($script);


        return $form;
    }
}
