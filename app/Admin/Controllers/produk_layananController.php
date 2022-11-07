<?php

namespace App\Admin\Controllers;

use App\Models\produk_layanan;
use App\Models\Selectable\selectAktivitas;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class produk_layananController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'produk_layanan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new produk_layanan());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
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
        $show = new Show(produk_layanan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new produk_layanan());

        $form->text('nama', __('Nama'));
        $form->button('addActivity','Tambah Aktivitas (Jika tidak tersedia)');
        $form->belongsToMany('aktivitas',selectAktivitas::class,__('Aktivitas'));
        $url_admin=admin_url('');
        $script = <<<EOT
        $(document).ready(function(){
            $('.addActivity').on('click',function(){
                window.open("{$url_admin}/aktivitas/create", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=800,height=1000");
            });
        });
EOT;
        Admin::script($script);
        return $form;
    }
}
