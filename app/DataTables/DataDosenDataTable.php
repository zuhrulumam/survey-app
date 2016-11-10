<?php

namespace App\DataTables;

use App\Models\DataDosen;
use Form;
use Yajra\Datatables\Services\DataTable;

class DataDosenDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'dataDosens.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $dataDosens = DataDosen::query();

        return $this->applyScopes($dataDosens);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'create',
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ]
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'ID_STATUS_HENTI' => ['name' => 'ID_STATUS_HENTI', 'data' => 'ID_STATUS_HENTI'],
            'Nama' => ['name' => 'Nama', 'data' => 'Nama'],
            'ID_UNIT' => ['name' => 'ID_UNIT', 'data' => 'ID_UNIT'],
            'ID_SUB_UNIT' => ['name' => 'ID_SUB_UNIT', 'data' => 'ID_SUB_UNIT'],
            'ID_JENIS_STAF' => ['name' => 'ID_JENIS_STAF', 'data' => 'ID_JENIS_STAF'],
            'FAKULTAS' => ['name' => 'FAKULTAS', 'data' => 'FAKULTAS'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'dataDosens';
    }
}
