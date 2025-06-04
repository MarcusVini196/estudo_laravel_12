<?php

namespace App\DataTables;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProdutoDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<Produto> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('editar', function ($query) {
                $edit = "<a href='" . route('produtos.edit', $query->id) . "' class='btn btn-primary mb-2'><i class='far fa-edit'></i></a>";
                $delete = "<a href='" . route('produtos.destroy', $query->id) . "' class='btn btn-danger mb-2 ml-1 delete-item'><i class='far fa-trash-alt'></i></a>";
                $maisBtn = '<div class="dropdown dropleft d-inline">
                <button class="btn btn-primary dropdown-toggle mb-2 ml-1 type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item has-icon" href="' . route('produtos-galerias-img.index', ['produto' => $query->id]) . '"><i class="far fa-heart"></i> Galerias</a>
                  <a class="dropdown-item has-icon" href=""><i class="far fa-file"></i> Adicionais</a>
                </div>
              </div>';
                return $edit . $delete . $maisBtn;
            })
            ->addColumn('status', function ($query) {
                if ($query->status == 1) {
                    $botao = '<label class="custom-switch mt-2">
                <input type="checkbox" checked name="custom-switch-checkbox" data-id="' . $query->id . '" class="custom-switch-input muda-status">
                <span class="custom-switch-indicator"></span>
                </label>';
                } else {
                    $botao = '<label class="custom-switch mt-2">
                <input type="checkbox" name="custom-switch-checkbox" data-id="' . $query->id . '" class="custom-switch-input muda-status">
                <span class="custom-switch-indicator"></span>
                </label>';
                }
                return $botao;
            })
            ->addColumn('imagem_principal', function ($query) {
                $img = "<img src='" . asset($query->imagem_principal) . "' style='width: 30%; height:auto;'>";
                return $img;
            })
            ->rawColumns(['imagem_principal', 'editar', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<Produto>
     */
    public function query(Produto $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            // ->setTableId('produto-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->language([
                'url' => asset('backend/assets/pt_br/pt-br.json')
            ])
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('imagem_principal'),
            Column::make('nome'),
            Column::make('preco'),
            Column::computed('editar')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Produto_' . date('YmdHis');
    }
}
