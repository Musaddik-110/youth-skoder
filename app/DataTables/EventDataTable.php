<?php

namespace App\DataTables;

use App\Models\Event;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Str;

class EventDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.events.datatables_actions')
            ->addIndexColumn()
            ->addColumn('Sl', '')
            ->addColumn('date',function($dataTable){
                return $dataTable->date->toFormattedDateString();
            })
            ->addColumn('time',function($dataTable){
                return date('h:i a',strtotime($dataTable->time));
            })
            ->addColumn('details',function($dataTable){
                return Str::limit($dataTable->details,50);
            })
            // ->addColumn('file',function($dataTable){
            //     return "<a download href='".asset('files/'. $dataTable->file)."'>Download</a>";
            // })
            ->rawColumns(['details', 'action', 'image', 'file']);
    }

    public function query(Event $model)
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
            'Sl','title',
            'details',
            'date',
            'time',
            'place',
        ];
    }

    protected function filename()
    {
        return 'events_datatable_' . time();
    }
}
