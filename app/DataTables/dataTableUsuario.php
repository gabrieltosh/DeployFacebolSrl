<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class dataTableUsuario extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);
        return datatables($query)
            ->addColumn('action', function(User $user)
            { 
                            return '
                            <a href="'.route("usuarios.edit",$user->id).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="#"  data-toggle="modal" data-target="#modal-detalle-'.$user->id.'" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i></a>
                            
                            <a href="'.route("usuarios.show",$user->id).'" class="btn btn-success btn-xs"><?php<i class="fa fa-check"></i>?></a>
                            
                            <div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-'.$user->id.'">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                        <h4 class="modal-title">Datos del Destinatario</h4>
                                        </div>
                                        <div class="modal-body">
                                        <dl class="row">
                                            <dt class="col-sm-6">Nombre del destinatario :</dt>
                                            <dd class="col-sm-6">'.$user->nombre.'</dd>      
                                        </dl>
                                        
                                         <dl class="row">
                                            <dt class="col-sm-6">Apellido del destinatario :</dt>
                                            <dd class="col-sm-6">{{$servicio->lastname}}</dd>      
                                        </dl>
                                         <dl class="row">
                                            <dt class="col-sm-6">Direccion del Destinatario :</dt>
                                            <dd class="col-sm-6">{{$servicio->address}}</dd>      
                                        </dl>
                                         <dl class="row">
                                            <dt class="col-sm-6">Celular del Destinatario :</dt>
                                            <dd class="col-sm-6">{{$servicio->phone}}</dd>      
                                        </dl>
                                        </div>
                                    <div class="modal-footer">
                                         <div class="form-group"> 
                                        <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                                         </div>
                                    </div>
                                </div>
                            </div>  
                            </div>
                            ';
                        
            });
          
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->select('id', 'nombre', 'created_at', 'updated_at');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'nombre',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'dataTableUsuario_' . date('YmdHis');
    }
}
