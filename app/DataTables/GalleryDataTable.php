<?php

namespace App\DataTables;

use App\Models\Gallery;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Str;

class GalleryDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.galleries.datatables_actions')
            ->addIndexColumn()
            ->addColumn('Sl', '')
            // ->addColumn('details',function($dataTable){
            //     return Str::limit($dataTable->details,50);
            // })
            ->addColumn('image', function ($dataTable) {
                return "<img width='100px' height='80px' src='".asset('images/'.$dataTable->image)."'/>";
            })
            // ->addColumn('file',function($dataTable){
            //     return "<a download href='".asset('files/'. $dataTable->file)."'>Download</a>";
            // })
            ->rawColumns(['details', 'action', 'image', 'file']);
    }

    public function query(Gallery $model)
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
            'Sl','type',
            'image'
        ];
    }

    protected function filename()
    {
        return 'galleries_datatable_' . time();
    }
}
