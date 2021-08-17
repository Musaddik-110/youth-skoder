<?php

namespace App\DataTables;

use App\Models\Testimonial;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Str;

class TestimonialDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.testimonials.datatables_actions')
            ->addIndexColumn()
            ->addColumn('Sl', '')
            ->addColumn('message',function($dataTable){
                return Str::limit($dataTable->message,50);
            })
            ->addColumn('image', function ($dataTable) {
                return "<img width='100px' height='80px' src='".asset('images/'.$dataTable->image)."'/>";
            })
            // ->addColumn('file',function($dataTable){
            //     return "<a download href='".asset('files/'. $dataTable->file)."'>Download</a>";
            // })
            ->rawColumns(['message', 'action', 'image', 'file']);
    }

    public function query(Testimonial $model)
    {
        return $model->newQuery()->latest();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'lBfrtip',
                'lengthMenu' => [[10, 25, 50, 100, -1], ['10', '25', '50', '100', 'All']],
                'stateSave' => false,
                'oLanguage' => [
                    'sLengthMenu' => "_MENU_",
                ],
                'buttons' => ['create', 'csv', 'excel', 'print', 'reset'],
            ]);
    }

    protected function getColumns()
    {
        return [
            'Sl','name',
            'designation',
            'message',
            'image'
        ];
    }

    protected function filename()
    {
        return 'testimonials_datatable_' . time();
    }
}
