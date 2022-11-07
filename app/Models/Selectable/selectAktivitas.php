<?php

namespace App\Models\Selectable;

use App\Models\aktivitas;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Filter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selectAktivitas extends Grid\Selectable
{
    use HasFactory;

    /**
     * @inheritDoc
     */
    public $model = aktivitas::class;
    public function make()
    {
        $this->column('nama');
        $this->column('klasifikasi')->display(function ($klas){
            if ($klas==1){
                return 'Primer';
            }
            return 'Sekunder';
        });
        $this->column('waktu');
        $this->filter(function (Filter $filter) {
            $filter->disableIdFilter();
            $filter->like('nama');
        });
    }
}
