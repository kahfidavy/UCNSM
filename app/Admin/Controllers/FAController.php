<?php

namespace App\Admin\Controllers;

use App\Models\FacilityActivity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FAController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FacilityActivity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FacilityActivity());

        $grid->column('id', __('Id'));
        $grid->column('nama_fa', __('Nama fa'));
        $grid->column('cost_driver', __('Cost driver'));
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
        $show = new Show(FacilityActivity::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_fa', __('Nama fa'));
        $show->field('cost_driver', __('Cost driver'));
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
        $form = new Form(new FacilityActivity());

        $form->text('nama_fa', __('Nama fa'));
        $form->text('cost_driver', __('Cost driver'));


        return $form;
    }
}
