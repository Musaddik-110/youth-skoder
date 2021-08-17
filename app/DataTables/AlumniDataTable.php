<?php

namespace App\DataTables;

use App\Models\Alumni;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Str;

class AlumniDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.alumnis.datatables_actions')
            ->addIndexColumn()
            ->addColumn('Sl', '')
            ->addColumn('facebook',function($dataTable){
                return $dataTable->facebook ? "<a href='".$dataTable->facebook."' targer='_blank'>Visit</a>":'';
            })
            ->addColumn('twitter',function($dataTable){
                return $dataTable->twitter ? "<a href='".$dataTable->twitter."' targer='_blank'>Visit</a>":'';
            })
            ->addColumn('linkedin',function($dataTable){
                return $dataTable->linkedin ? "<a href='".$dataTable->linkedin."' targer='_blank'>Visit</a>":'';
            })
            ->addColumn('image', function ($dataTable) {
                return "<img width='100px' height='80px' src='".asset('images/'.$dataTable->image)."'/>";
            })
            ->rawColumns(['facebook','twitter','linkedin', 'action', 'image', 'file']);
    }

    public function query(Alumni $model)
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
            'email',
            'phone',
            'designation',
            'facebook',
            'twitter',
            'linkedin',
            'image'
        ];
    }

    protected function filename()
    {
        return 'alumnis_datatable_' . time();
    }
}
